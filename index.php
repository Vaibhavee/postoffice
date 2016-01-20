<?php 
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
<meta name="DC.title" content="" />
<meta name="geo.region" content="en-US" />
<meta name="geo.placename" content="" />
<meta name="geo.position" content="" />
<meta name="ICBM" content="" />

    <link rel="icon" type="image/png" href="http://axattechnologies.in/demo/postoffice/images/favicon.ico">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Is Post workplace open today? Check USPS holiday list.</title>

<meta name="description" content="Post office Open Provides information on USPS and Postal holidays. Browse here to check if Post Office Open?">
<meta name="keywords" content="USPS, post office, USPS holidays, postal holidays">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,100italic,100,500,400italic,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    
  </head>
  <body>
  	<div class="overlay"></div>
    <div class="container">
    	<div class="row">
        	<section id="holiday-prediction">
            <center>
           
                <h1>Is the Post Office open today?</h1>
                <div class="daydate">
                	<span>
                        <?php  
                        $todaysdate= date('Y-m-d');

                        echo "(".date("l").",".date("jS \of F").")";?>
                    </span><?php  
                    
            $sql="select * from Holiday_list where date='".$todaysdate."' and status='Enabled'";
                      $result=mysql_query($sql);
                      if(mysql_num_rows($result)>0 || date("l")=='Sunday')
                      {
                       
                      echo "<h2>No!</h2>";
              }
                        else
                        {
                                          
                         echo "<h2>Yes!</h2>";
                     }
                    ?>
        
                </div>    
                <div class="tomorrowdt">
                    <span>Is the Post Office open tomorrow? <?php  $tomorrow=date('Y-m-d', strtotime(' +1 day'));
                      $timestamp = strtotime($tomorrow);
                         echo "(".date("l", $timestamp).")";
                    ?></span>
                    
                   <?php
                   $tomorrowsdate= date("Y-m-d", time()+86400); 
                   $daytom=date("l", $timestamp);
                    $sql="select * from Holiday_list where date='".$tomorrowsdate."' and status='Enabled'";
                      $result=mysql_query($sql);
                     
                      if(mysql_num_rows($result)>0 || $daytom=='Sunday')
                      {
                        echo "<h3>No!</h3>";
              }
                        else
                        {
               
                         echo "<h3>Yes!</h3>";
                     }

                
                   ?>


                </div>
                <p>Are USPS post offices open today? Post office holidays can put a wrench in your plans to mail letters and packages. This little web site will tell you whether the post office is closed or open today and tomorrow. Here's a full list of <a href="Post_Office_Holidays.php">post office holidays</a>.</p>
            </center>
        
            </section>
        </div>
    </div>
    <footer>
    	<div class="container">
        	<div class="row">
            	<center>
            	<hr>
            	<p>PostOfficeOpen.com is a service of Savetz Publishing, Inc. Copyright © 2010-2016. Privacy Policy.<br>
More good stuff from SP: Free Business Forms and International faxing</p>
</center>
            </div>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>