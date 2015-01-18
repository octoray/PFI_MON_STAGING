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


    // Query
    //sql.close();
});
