<!DOCTYPE html>
<html>
<!-----------------------------------------------------------------------------------
1.BODY
----------------------------------------------------------------------------------->
<body>
<div class="container-fluid">
<!--row-->
	<div class="row">
		<div class="col-lg-2 push-left"> &nbsp; Hello Visitor</div>
        <div class="col-lg-8 col-md-8"> 
			<center><h1><a href="index.php"><img src="img/logo1.png" width=180; height=110;></a></h1></center>
		</div>
		<div class="col-lg-2 pull-right" align="right"> <a  onclick="Localize.setLanguage('en')"> English</a> | <a  onclick="Localize.setLanguage('ar')">عربي</a></div>
	</div>
<!--/.row-->
</div><!--container-fluid-->
<!--/.row-->
</div><!--container-fluid-->

<!--<div class="container">
<!-- Logo_row -->
	<!--<div class="row">
		<div class="col-lg-12 col-md-12 main"> 
			<center><h1><a href="index.php">iTrack</a></h1></center>
		</div>           
	</div> -->
<!-- /.Logo_row -->



<!--Main_Menue_row-->        
    <div class="row"> 
    <nav><!--nav-->       
        <div class="col-lg-1"></div>
        <div class="col-lg-10"><!--col-10-->  
            <ul class="nav2"><!--main_ul-->
                <li class="visitor_nav"><a href="index.php" class="glyphicon glyphicon-home"></a></li>
                <li class="user_nav dropdown"><a href="#"> Dashboard <span class="glyphicon glyphicon-chevron-down"></span></a>
          			<ul>
            			<li ><a href="#"> Billing Rate </a></li>
            			<li><a href="#">House Bill(dummy) </a></li>  
          			</ul>
        		</li>
                <li class="visitor_nav"><a href="systemFeatures.php">System Features</a></li>
                <!--<li class="visitor_nav"><a href="billingRate.php">Billing Rate</a></li>-->
                
                <li class="visitor_nav dropdown "><!--li-->
                <a href="Tips_general.php">Awareness Tips <span class="glyphicon glyphicon-chevron-down"></span></a>
            		<ul><!--ul-->
                		<li><a href="Tips_general.php">General Tips </a></li>
                		<li><a href="Tips_safety.php">Safety Tips</a></li>
                		<li><a href="Tips_savingEnergy.php">Saving Energy Tips</a></li>  
             		</ul><!--/.ul-->
                </li><!--/.li-->
                
                <li class="visitor_nav dropdown "><!--li-->
                	<a href="HelpTutorial_1.php">Help Tutorial <span class="glyphicon glyphicon-chevron-down"></span></a>
                	<ul><!--ul-->
                    	<li><a href="HelpTutorial_1.php">Help Tutorial_1</a></li>
                    	<li><a href="HelpTutorial_2.php">  Help Tutorial_2 </a></li> 
                	</ul><!--/.ul-->
                </li>
                
                <li class="visitor_nav"><a href="contactUs.php">Contact Us</a></li>
                
                <li class="visitor_nav dropdown "><!--li-->
                <a href="signIn.php">Sign in / Sign up <span class="glyphicon glyphicon-chevron-down"></span></a>
                	<ul><!--ul-->
                    	<li ><a href="signIn.php"><span class="glyphicon "></span> Sign in  </a></li>
                    	<li><a href="signUp.php"><span class="glyphicon "></span>  Sign up </a></li> 
                	</ul><!--/.ul-->
                </li><!--/.li-->
                
            </ul><!--/.main_ul--> 
            
        </div><!--/.col-10-->
        <div class="col-lg-1"></div>
    </nav><!--nav-->   
  </div><!--/.row-->
<!--/.Main_Menue_row--> 
</div><!--/.container-fluid-->

</body>
</html>
