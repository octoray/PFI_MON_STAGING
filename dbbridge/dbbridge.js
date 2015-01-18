var sql = require('mssql'); 
var mysql = require('mysql');
var fs = require('fs');

eval(fs.readFileSync('./config/dbconfig.conf')+''); //Load DB config
eval(fs.readFileSync('./classes/dbquerys.module')+''); //Load DB Querys
eval(fs.readFileSync('./classes/dbfunctions.module')+''); //Load DB functions


// DB BRIDGE QUERYS

sql.connect(config, function(err) {
    if (err)
        throw (err);

    dbq1();
    dbq2();
    dbq3();
    dbq4();
    dbq5();
    dbq6();
    dbq7();
    dbq8();
    dbq9();
    dbq10();
    dbq11();
    dbq12();
    dbq13();
    dbq14();
    dbq15();
    dbq16();
    dbq17();
    dbq18();
    dbq19();
    dbq20();
    dbq21();


    // Query
    //sql.close();
});
