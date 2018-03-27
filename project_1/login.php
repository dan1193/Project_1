<?php
include (  "account_info.php"  );
include (  "functions.php"     ) ;
mysql_connect ( $hostname, $username, $password ) 
       or die ( "Unable to connect to MySQL database" ); //used to connect to Database

mysql_select_db( $project );  //select the DB
//Code to grab data from the HTML
$email  =  $_GET[ "email"  ];
$password  =  $_GET[ "password"  ];


checkFields($email, $password);

 ?>