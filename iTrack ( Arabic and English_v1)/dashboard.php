<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>iTrack | Dashboard</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<script src="https://cdn.localizejs.com/localize.js"></script>
<script>!function(a){if(!a.Localize){a.Localize={};for(var e=["translate","untranslate","phrase","initialize","translatePage","setLanguage","getLanguage","detectLanguage","untranslatePage","bootstrap","prefetch","on","off"],t=0;t<e.length;t++)a.Localize[e[t]]=function(){}}}(window);</script>

<script>
  Localize.initialize({
    key: 'aoduxaDz4t42M', 
    rememberLanguage: true,
    saveNewPhrases: true,
    translateBody: true
  });
</script>
</head>

<body>
<!--header-->
<?php include('includes/User_Header.php');?>
<!--/.header-->
		<div class="row ">
			<ol class="breadcrumb">
            &nbsp;
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->	
		 
<div class="container-fluid">
<!--sidebar-->
<?php include('includes/User_sidebar.php'); ?>
<!--/.sidebar-->
    <div class="col-lg-8 col-sm-offset-3  main "> 
<div class="row">
<div class="col-sm-12">
				<div class="panel panel-default">
					<div class="panel-heading">Total Reading</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
						</div>
					</div>
				</div>
			</div>
</div><!--/.row-->								
<div class="row">
<div class="col-sm-7">
			
				<div class="panel panel-default">
					<div class="panel-heading" id="accordion"><span class="glyphicon"></span> Total Bil</div>
					<div class="panel-body">
					<!---->
                 
				<li></li>
				
                 <li></li>             
                              
     
					
					</div>
				
			</div><!--/.col-->
			
			<!--/.col-->
	  </div>        
<div class="col-sm-5">
			
				<div class="panel panel-default">
					<div class="panel-heading" id="accordion"><span class="glyphicon"></span> Limit 
                    <li class="dropdown ">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class=" "></span> Tips <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><br>
                            
                            </li><br>
							<li>
                            
                            </li>
						</ul>
					</li>
                    
                  </div>
                <div class="panel-body"></div>
					<div class="panel-body">
                
				
				
				
					<div class="panel-body easypiechart-panel">
				
                 
						<div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent">27%</span>
						</div>
					</div>
				
			
                              
                              
     
					
				  </div>
				
              
                
			</div><!--/.col-->
			
			<!--/.col-->
	  </div> 
</div><!--/.row--> 
</div><!--/.main-->
	
</div><!--/.container-->
    <!--Foooter-->	
		<?php include('includes/footer.php') ?>
    <!--/.Foooter-->

<!-- JavaScript -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-table.js"></script>
			
</body>

</html>
