<?php

$start = microtime(true);
extract($_POST);
$src  = $_POST['src'];
$dst  = $_POST['dst'];
$message = $_POST['message'];
$host = $_POST['host'];
$port = $_POST['port'];
$system_id = $_POST['system_id'];
$password = $_POST['password'];

$s = new smpp();
$s->debug=1;
$s->open($host, $port, $system_id, $password);
//$message = iconv('Windows-1256','UTF-16BE',$message);
$message = iconv('UTF-8','ISO-8859-1',$message);
$s->send_long($src, $dst, $message);
var $message_payload;


// $utf = true;

// $s->send_long($src, $dst, $message, $utf);

$s->close();

class smpp {

    var $socket=0;
    var $seq=0;
    var $debug=0;
    var $data_coding=0;
    var $timeout = 10;

    function send_pdu($id,$data) {

        $this->seq +=1;
        $pdu = pack('NNNN', strlen($data)+16, $id, 0, $this->seq) . $data;
        fputs($this->socket, $pdu);

        $data = fread($this->socket, 4);
        if($data==false) die("\nSend PDU/Bind: Failed!");
        $tmp = unpack('Nlength', $data);
        $command_length = $tmp['length'];
        if($command_length<12) return;

        $data = fread($this->socket, $command_length-4);
        $pdu = unpack('Nid/Nstatus/Nseq', $data);
        if($this->debug) print "\n< R PDU (id,status,seq): " .join(" ",$pdu) ;
        return $pdu;
    }


    function open($host,$port,$system_id,$password) {

        $this->socket = fsockopen($host, $port, $errno, $errstr, $this->timeout);
        if ($this->socket===false)
            die("$errstr ($errno)<br />");
        if (function_exists('stream_set_timeout'))
            stream_set_timeout($this->socket, $this->timeout);
        if($this->debug) echo "\n> Connecting....." ;

        $data  = sprintf("%s\0%s\0", $system_id, $password);
        $data .= sprintf("%s\0%c", $_POST['system_type'], $_POST['interface_version']);
        $data .= sprintf("%c%c%s\0", $_POST['addr_ton'], $_POST['addr_npi'], "");

        $ret = $this->send_pdu($_POST['pdu_bindtype'], $data);
        if($this->debug) print "\n> Binding....." ;

        return ($ret['status']==0);
    }

    function submit_sm($source_addr,$destintation_addr,$short_message,$optional='') {

        $data  = sprintf("%s\0", "");
        $data .= sprintf("%c%c%s\0", $_POST['source_addr_ton'], $_POST['source_addr_npi'],$source_addr);
        $data .= sprintf("%c%c%s\0", $_POST['dest_addr_ton'], $_POST['dest_addr_npi'],$destintation_addr);
        $data .= sprintf("%c%c%c", 0,0,0);
        $data .= sprintf("%s\0%s\0", "",$_POST['validity']); // validity
        $data .= sprintf("%c%c", 0,0);
        $data .= sprintf("%c%c", 0,0);
        $data .= sprintf("%c%s", strlen($short_message), $short_message);
        $data .= $optional;
        // $data .= $_POST['optional'];
        //$data .= sprintf("%c%c%s\0", "123", "321", "456");

        $ret = $this->send_pdu(4, $data);
        return ($ret['status']==0);
    }

    function close() {

        $ret = $this->send_pdu(6, "");
        fclose($this->socket);
        return true;
    }

    function send_long($source_addr,$destintation_addr,$short_message,$utf=0,$flash=0) {

        if($utf)
            $this->data_coding=0;

        if($flash)
            $this->data_coding=$this->data_coding | 0x10;


        $size = strlen($short_message);
        if($utf) $size+=20;

        if ($size<65) {
            $this->submit_sm($source_addr,$destintation_addr,$short_message);

        } else {
            $sar_msg_ref_num =  rand(1,255);
            $sar_total_segments = ceil(strlen($short_message)/130);

            for($sar_segment_seqnum=1; $sar_segment_seqnum<=$sar_total_segments; $sar_segment_seqnum++) {
                $part = substr($short_message, 0 ,130);
                $short_message = substr($short_message, 130);
                $prakash = 'test';

                $optional  = pack('nnn', 0x020C, 2, $sar_msg_ref_num);
                $optional .= pack('nnc', 0x020E, 1, $sar_total_segments);
                $optional .= pack('nnc', 0x020F, 1, $sar_segment_seqnum);
                $optional .= pack('nnc', 0x0424, 1, $prakash, strlen($prakash));

                if ($this->submit_sm($source_addr,$destintation_addr,$part,$optional)===false)
                    return false;

            }
        }


        return true;

    }



}

$end = microtime(true);
$time = number_format(($end - $start), 4);

?>
