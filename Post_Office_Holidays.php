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
    <title>Click here for Post Office Holidays List.</title>
<meta name="description" content="We provide information on when the post office & USPS administrative center is closed. Here is the list of holidays.">
<meta name="keywords" content="USPS, post office, USPS holidays, postal holidays">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,100italic,100,500,400italic,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

  </head>
  <body>
    <?php include('connection.php'); ?>
  	<div class="overlay"></div>
    <div class="container">
    	<div class="row">
        	<section id="holiday-prediction">
            <center>
            	
                <h1>Post Office Holidays</h1>
                <p>On days when the federal government isn't doing business, neither is the post office. The U.S. Postal Service follows the same holiday schedule as federal offices.

<br><br>
In 2016, mail won't be delivered on Sundays, nor the following dates: Jan. 1, Jan. 18, Feb. 15, May 30, July 4, Sept. 5, Oct. 10, Nov. 11, Nov. 24, Dec. 26.

<br><br>
Please keep in mind that occasionally, particularly near holidays, your local post office may be open, but closes earlier in the day than usual. As Christmas falls on a Sunday in 2016, postal workers will not be working on Monday the 26th.

<br><br>
Here's a complete list of federal holidays and the corresponding dates in 2016 when post offices will be closed:</p>
<ul>
<?php 
$sql="select * from Holiday_list where status='Enabled'";
$result=mysql_query($sql);

while($row=mysql_fetch_array($result))
 {
  $date=$row['date'];
$occasion=ucwords($row['occasion']);
  $month = date('F d, Y', strtotime($date)) ;
?>
<li><?php echo $row['day'].","." ".$month."- ".$occasion;?></li>
<?php
}
?>
</ul>
<p>Are <a href="index.php">USPS post offices open today</a>? This little web site will tell you whether the post office is closed or open today and tomorrow.</p>
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