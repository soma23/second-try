<!DOCTYPE html>
<html>
<!-----------------------------------------------------------------------------------
1.HEAD
----------------------------------------------------------------------------------->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>iTrack | View Building Features</title>
<!-- The styles -->
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
	<?php include('includes/User_Header.php');?>
<!--/.header-->
<!--row-->
	<div class="row ">
	<ol class="breadcrumb">
	&nbsp;
		<li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
		<li class="active">View Building Features</li>
	</ol>
</div>
<!--/.row-->

<div class="container">
<!--sidebar-->
	<?php include('includes/User_sidebar.php'); ?>
<!--/.sidebar-->

<!--main-->
	<div class="col-lg-9 col-sm-offset-2  main"> 
	<!--row-->							
		<div class="row">
			<div class="col-lg-12">
	<!---Building--->  
				<div class="panel panel-default">
					<div class="panel-heading"><span class="glyphicon "></span>Building </div>
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
                        <fieldset>
							<div class="form-group">
								<label class="col-md-4 control-label" for="buildingTye">Building Type:</label>
        							<div class="col-md-8">
        								<select class="form-control">
        									<option>Option 1</option>
       		 								<option>Option 2</option>
        									<option>Option 3</option>
        									<option>Option 4</option>
        								</select>
        							</div>
    						</div><!--/.form-group-->

							<div class="form-group">
								<label class="col-md-4 control-label" for="BuildingName">Building Name:</label>
									<div class="col-md-8">
										<input id="buildingName" name="BuildingName" type="text" class="form-control" readonly>
									</div>
							</div><!--/.form-group-->
	
    						<div class="form-group">
								<label class="col-md-4 control-label" for="ECustomerNumber">Electricity Customer's Number:</label>
									<div class="col-md-8">
										<input id="ecn" name="ECN" type="number" class="form-control" readonly>
									</div>
							</div><!--/.form-group-->
                            	
							<div class="form-group">
								<label class="col-md-4 control-label" for="NR">Number Of Rooms:</label>
									<div class="col-md-8">
										<input id="numberOfRooms" name="numberOfRooms" type="number" class="form-control" readonly>
									</div>
							</div><!--/.form-group-->
                      </fieldset>								
				</form>
			</div>
		</div>


<!---rooms---> 
</div><!--/.col-->
</div><!--/.row--> 
</div><!--/.main-->
</div><!--/.container-->

	<!--Foooter-->
		<?php include('includes/footer.php') ?>
	<!--/.Foooter-->

<!--JavaScript-->
	<script src="js/jquery-1.11.1.min.js"></script>  
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-table.js"></script>
<!--/.JavaScript-->    
</body>

</html>
