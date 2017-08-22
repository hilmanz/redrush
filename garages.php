<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include ("meta.php"); ?>
</head>

<body style="background:#000;">
<?php include ("header.php"); ?>
<div id="main-container">
	<div class="wrapper">
    	<div id="containers">
        	<div id="garage">
            	<div id="profile">
                	<div class="thumb"><a href="#"><img src="img/thumbs.jpg" /></a></div>
                    <div class="box-user">
                    	<span class="username">Acit Jazz</span>
                    	<span class="reputation">Race Addict</span>
                    	<span class="total-race">60 Race</span>
                    	<span class="total-win">55 Wins</span>
                    </div>
                </div><!-- #profile -->
            	<div id="score">
                	<h1>6400 PTS.</h1>
                </div><!-- #score -->
            	<div id="car">
                	<img src="img/car.png" />
                </div><!-- #car -->
                <div id="statistik">
                	<div id="topspeed" class="gradient">
                    	<span>TOP SPEED</span>
                        <div class="progress"><img src="img/progress-bar.gif" width="50%" height="10" /></div>
                  </div>
                	<div id="handling" class="gradient">
                    	<span>HANDLING</span>
                        <div class="progress"><img src="img/progress-bar.gif" width="70%" height="10" /></div>
                    </div>
                	<div id="accleration" class="gradient">
                    	<span>ACCELERATION</span>
                        <div class="progress"><img src="img/progress-bar.gif" width="30%" height="10" /></div>
                    </div>
                </div><!-- #statistik -->
                <div id="button-race">
                	<a href="challenge.php" class="race-now">&nbsp;</a>
                </div><!-- #button-race -->
                <div id="button-vote">
                	<a href="#" class="vote-now">&nbsp;</a>
                </div><!-- #button-race -->
            </div><!-- #garage -->
        </div><!-- #containers -->
    </div><!-- .wrapper -->
</div><!-- #main-container -->
<?php include ("footer.php"); ?>
</body>
</html>