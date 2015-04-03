<!DOCTYPE html>
<html>
<!-----------------------------------------------------------------------------------
1.HEAD
----------------------------------------------------------------------------------->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>iTrack| View Consumption Limit</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
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
<!-----------------------------------------------------------------------------------
2.BODY
----------------------------------------------------------------------------------->
<body>
<!--header-->
<?php include('includes/Admin_Header.php');?>
<!--?php include('includes/User_Header.php');
<!--/.header-->
<!--row-->
	<div class="row ">
	<ol class="breadcrumb">
	&nbsp;
		<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
		<li class="active">View Consumption Limit</li>
	</ol>
</div>
<!--/.row-->

<div class="container">

<!--sidebar-->
		<?php include('includes/Admin_sidebar.php'); ?>
<!--?php include('includes/User_sidebar.php'); ?>
<!--/.sidebar-->

<!--main-->
	<div class="col-lg-9 col-sm-offset-2  main">
<!--row-->				 			
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading">Consumption Limit</div>
				<div class="panel-body">
					<div class="form-group">
				<!-- Sensor/Room Dropdown List-->
				<!--row-->
					<div class="row">
						<div class="col-lg-1"></div>
							<div class="form-group">
                            
								<label class="col-md-2 control-label" for="User_Name">Sensor/Room</label>
									<div class="control-group col-md-7">
										<select class="form-control">
											<option>Option 1</option>
											<option>Option 2</option>
											<option>Option 3</option>
											<option>Option 4</option>
										</select>
									</div>                                                             
							</div><!--/.form group-->	
					</div><!--/.row-->
				<!-- /.Sensor/Room Dropdown List--> 
                
				<!-- Limit--> 
                <div class="row">               
					<div class="col-md-6">
						<div class="panel-heading" id="accordion"><span class="glyphicon "></span> Limit</div>
							<div class="easypiechart-panel">
								<div class="easypiechart" id="easypiechart-blue" data-percent="100" ><span class="percent">100%</span>
								</div>
							</div><!-- /.easypiechart-panel-->
					</div><!-- /.col--> 
				<!-- /.Limit-->
                    
			<!--</div> -->
		<!-- /.Limit--> 
        
			<!-- form-grop--> 
					<!--<div class="row">-->
						<div class="col-md-6">
							<div class="box box-solid">
								<div class="box-header">
									<div class="panel-heading" id="accordion"><span class="glyphicon "></span> Tips</div>
										<h3 class="box-title">&nbsp;</h3>
								</div><!-- /.box-header -->
								<div class="box-body">
									<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">
											<div class="item active">
												<img src="http://placehold.it/900x500/39CCCC/ffffff&text=I+Love+iTrack" alt="First slide"> <div class="carousel-caption">Tips1</div>
											</div><!-- /.item active -->
											<div class="item">
												<img src="http://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+iTrack" alt="Second slide">
<div class="carousel-caption">Tips2</div>
											</div><!-- /.item -->
											<div class="item">
												<img src="http://placehold.it/900x500/f39c12/ffffff&text=I+Love+iTrack" alt="Third slide">
<div class="carousel-caption">Tips3</div>
											</div><!-- /.item -->
										</div><!-- /.carousel-inner -->
                                        
 										<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
											<span class="glyphicon glyphicon-chevron-left"></span>
										</a>
										<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
											<span class="glyphicon glyphicon-chevron-right"></span>
										</a>
									</div><!-- /.carousel-example-generic -->
								</div><!-- /.box-body -->
							</div><!-- /.box-solid -->
						</div><!-- /.col -->
					</div><!-- /.row -->                  					
				</div><!-- /.panel-body-->
			</div><!-- /.panel-default -->
		</div><!-- /.row -->
	</div><!--/.main-->
</div><!--/.container-->
</div>
<!--Foooter-->
		<?php include('includes/footer.php') ?>
<!--/.Foooter-->

<!-- JavaScript -->
	<script src="js/jquery-1.11.1.min.js"></script>  
<script src="js/bootstrap.min.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script> 
<!--/.JavaScript-->
</body>

</html>
