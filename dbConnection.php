<?php 
// go to his c9 and copy this file https://ide.c9.io/uuts/utsab

    function connectToDB($dbName) {
        $host = "localhost";
        $username = "sam";
        $password = "cst336";
        $dbname = $dbName;
        $charset = 'utfbmb4';
        
        //checking whether the URL contains "herokuapp" (using Heroku)
        if(strpos($_SERVER['HTTP_HOST'], 'herokuapp') !== false) {
        $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
        $host = $url["host"];
        $dbname   = substr($url["path"], 1);
        $username = $url["user"];
        $password = $url["pass"];
        }
        
        // Create connection
        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        return $dbConn; 
    }


?>