<html>
<head>
<link href ="style.css"
rel="stylesheet">
<title>IS218 Project 1 Registration Page</title>
</head>
<h1>Sign up!</h1>
<body>
        <div id="Navigation">
            <ul class="Navigation">
                <li><a href="index.html">Sign Up</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
        </div>            
</body>
</html>
<br><br><br><br><br>


<?php

include (  "accountInfo.php"  );
include (  "functions.php"     ) ;
mysql_connect ( $hostname, $username, $password )
       or die ( "Unable to connect to MySQL database" ); //used to connect to Database

mysql_select_db( $project );  //select the DB

//Code to obtain files from the HTML
$fname  =  $_GET[ "fname"  ];
$lname  =  $_GET[ "lname"  ];
$email  =  $_GET[ "email"  ];
$phone  =  $_GET[ "phone"  ];
$birthday  =  $_GET[ "birthday"  ];
$gender  =  $_GET[ "gender"  ];
$password  =  $_GET[ "password"  ];


//Code to check email and register account if it doesn't exist


checkReg($fname , $lname, $email, $phone, $birthday, $gender, $password);
register($fname , $lname, $email, $phone, $birthday, $gender, $password);




?>
