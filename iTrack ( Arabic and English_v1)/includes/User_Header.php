<!DOCTYPE html>
<html>

<!-----------------------------------------------------------------------------------
1.BODY
----------------------------------------------------------------------------------->
<body>
<div class="container-fluid">
<!--row-->
	<div class="row">
		<div class="col-lg-2 push-left"> &nbsp; Hello User</div>
        <div class="col-lg-8 col-md-8"> 
			<center><h1><a href="index.php"><img src="img/logo1.png" width=180; height=110;></a></h1></center>
		</div>
		<div class="col-lg-2 pull-right" align="right"> <a  onclick="Localize.setLanguage('en')"> English</a> | <a  onclick="Localize.setLanguage('ar')">عربي</a></div>
	</div>
<!--/.row-->
</div><!--container-fluid-->

<!--<div class="container">
<!-- Logo_row -->
	<!--<div class="row">
		<div class="col-lg-12 col-md-12 main"> 
			<!--<center><h1><a href="index.php"><img src="img/logo1.png" width=170; height=110;></a></h1></center>
		</div>           
	</div> 
<!-- /.Logo_row -->
<!--</div><!--container-->

<div class="container-fluid">
<!--Main_Menue_row-->       
    <div class="row">
    <nav><!--nav-->     
        <div class="col-lg-1"></div>
        <div class="col-lg-10"><!--col-10--> 
            <ul class="nav2"><!--main_ul-->
                <li class="user_nav"><a href="index.php" class="glyphicon glyphicon-home"></a></li>
                
                <li class="user_nav dropdown "><!--li-->
                    <a href="#">Dashboard <span class="glyphicon glyphicon-chevron-down"></span></a>
                    <ul><!--ul-->
                    
                    
                        <li ><a href="#"> Electricity Bill </a></li>
            			<li><a href="User_buildingGeneralInfo.php"> Building Information </a></li> 
                        <li><a href="#"> Building Power </a></li> 
                    </ul><!--/.ul-->
                </li><!--/.li-->
                
                <li class="user_nav"><a href="#"> System Features</a></li>
                <!--<li class="user_nav"><a href="billingRate.php"> Billing Rate</a></li>-->
                
                <li class="user_nav dropdown "><!--li-->
                <a href="#">Awareness Tips <span class="glyphicon glyphicon-chevron-down"></span></a>
                <ul><!--ul-->
                    <li><a href="#"> General Tips </a></li>
                    <li><a href="#"> Safety Tips</a></li>
                    <li><a href="#"> Saving Energy Tips</a></li>  
                </ul><!--/.ul-->
                </li><!--/.li-->
                <li class="user_nav dropdown "><!--li-->
                <a href="#">Help Tutorial <span class="glyphicon glyphicon-chevron-down"></span></a>
                <ul><!--ul-->
                    <li ><a href="#"> Help Tutorial_1</a></li>
                    <li><a href="#"> Help Tutorial_2 </a></li> 
                </ul><!--/.ul-->
                <li class="user_nav"><a href="#">Contact Us</a></li>
                
                <li class="user_nav dropdown"><!--li-->
                <a href="#">My Profile <span class="glyphicon glyphicon-chevron-down"></span></a>
                <ul><!--ul-->
                    <li ><a href="#"> Change password </a></li>
                    <li><a href="#"> Change e-mail </a></li> 
                    <li><a href="#"> Sign out </a></li> 
                </ul><!--/.ul-->
                </li><!--/.li-->
            </ul><!--/.main_ul-->
        </div><!--/.col-10--> 
        <div class="col-lg-1"></div>
    </nav><!--/.nav--> 
</div><!--/.Main_Menue_row--> 
  
</div><!--/.container-fluid-->	
			
</body>

</html>
