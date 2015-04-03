<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>iTrack | House Information</title>

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
<?php include ('includes/Admin_Header.php')?>
<!--/.header-->

<div class="row">
			<ol class="breadcrumb">
            &nbsp;
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">House Information</li>
			</ol>
		</div><!--/.row-->
        
<!--begin body-->
<div class="container">

<!--sidebar-->
<?php include ('includes/Admin_sidebar.php')?>
<!--/.sidebar-->


<div class="col-lg-12">&nbsp;</div>
<div class="col-lg-9 col-sm-offset-2  main"> 	<!-- offset 2 -->						
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading"><span class="glyphicon "></span>Building 
                	<div class="pull-right action-buttons">
            			<a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
                		&nbsp;
            			<a href="#"><span class="glyphicon glyphicon-ok"></span></a>
               		</div>
             
              	</div><!--/. heading -->
				<div class="panel-body">
					<form class="form-horizontal" action="" method="post">
                    <fieldset>
						<div class="form-group">
							<label class="col-md-3 control-label" for="buildingType">Building Type:</label>
									<!--<div class="row"> -->
								<div class="col-md-9">
									<select class="form-control">
										<option>Option 1</option>
										<option>Option 2</option>
										<option>Option 3</option>
										<option>Option 4</option>
									</select>
								</div>
                              </div><!--/.form-group-->
                         
 <!--</div><!--/.row-->    
							
								<div class="form-group">
									<label class="col-md-3 control-label" for="BuildingName">Building Name:</label>
										<div class="col-md-9">
											<input id="buildingName" name="BuildingName" type="text" class="form-control" >
										</div>
									</div><!--/.form-group-->
                                    
									<div class="form-group">
										<label class="col-md-3 control-label" for="ECN">Electricity Customer's Number:</label>
											<div class="col-md-9">
												<input id="ecn" name="ECustomerNumber" type="text" class="form-control" >
											</div>
									</div><!--/.form-group-->	

                              	</fieldset>								
								</form>
						</div><!--/.panel-body-->
					</div><!--/.panel-default-->
                   
    
	</div><!--/.col-md-11--> 
</div><!--/.row--> 

  </div><!--/.container-->
</div><!--/.main-->

<div class="col-lg-12">&nbsp;</div>
      <!--Foooter-->
   
		<?php include('includes/footer.php') ?>
      
	  <!--/.Foooter-->

	<!-- JavaScript -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>

</html>
