﻿<!DOCTYPE html>
<html>
<!-----------------------------------------------------------------------------------
1.HEAD
----------------------------------------------------------------------------------->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>iTrack | View Building Features</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link href="css/charisma-app.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

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
	<?php include('includes/Admin_sidebar.php'); ?>
<!--/.sidebar-->

<!--main-->
  <div class="col-lg-9 col-sm-offset-2  main "> 
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading box-header ">Rome1 
                        <div class=" panel box-icon">
                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                        </div><!--/.panel-->
                    </div><!--/.panel-heading-->
                    <div class="panel-body box-content">
                <!---sensor1--->   
			<div class="panel panel-default">
				<div class="panel-heading" id="accordion"><span class="glyphicon "></span>Sensor1
                	<div class="pull-right action-buttons">
            	<a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
                &nbsp;
            	<a href="#"><span class="glyphicon glyphicon-ok"></span></a>
                &nbsp;
            	<a href="#" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
               </div> 
        </div><!--/. heading -->
                			
				<div class="panel-body">
                	<form class="form-horizontal" action="" method="post">
                    <fieldset>
					<!--<ul>
						<!--<li class="left clearfix">-->
						<div class="form-group">
							<label class="col-md-2 control-label" for="ID">ID:</label>
								<div class="col-md-10">
									<input id="sensorID" name="sensorID" type="text" class="form-control" disabled>
								</div>
	 					</div><!-- /.form-group-->
     
     						<div class="form-group">
								<label class="col-md-2 control-label" for="Description">Limit:</label>
									<div class="col-md-6">
										<input id="Limit" name="Limit" type="number" class="form-control" disabled>
									</div>
        							<div class="col-md-2">
        								<div class="radio">
     									<label><input type="radio" name="limitOptions" id="limitOptions1" value="option1" checked disabled>Saudi Riyals</label>
     									</div><!--/.radio-->
         							</div><!--/.Col-->
         							<div class="col-md-2">
     									<div class="radio">
     										<label><input type="radio" name="limitOptions" id="limitOptions2" value="option2" disabled>KW/h</label>
     									</div><!--/.radio-->
        							</div><!--/.Col-->
	 							</div><!--/.form-group-->
                                
								<div class="form-group">        
      								<div class="col-sm-offset-2 col-sm-10">
        								<div class="checkbox">
          									<label><input type="checkbox" disabled> Mark as main sensor</label>
        								</div>
      								</div>
    							</div>
                		</fieldset>
                	</form>
				</div> <!--/.panel-body-->
			</div><!--/.panel-default-->
            
            <!--/.Sensor1-->
            
                  <!---sensor2--->   
			<div class="panel panel-default">
				<div class="panel-heading" id="accordion"><span class="glyphicon "></span>Sensor1
                	<div class="pull-right action-buttons">
            	<a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
                &nbsp;
            	<a href="#"><span class="glyphicon glyphicon-ok"></span></a>
                &nbsp;
            	<a href="#" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
               </div> 
        </div><!--/. heading -->
                			
				<div class="panel-body">
                	<form class="form-horizontal" action="" method="post">
                    <fieldset>
					<!--<ul>
						<!--<li class="left clearfix">-->
						<div class="form-group">
							<label class="col-md-2 control-label" for="ID">ID:</label>
								<div class="col-md-10">
									<input id="sensorID" name="sensorID" type="text" class="form-control" disabled>
								</div>
	 					</div><!-- /.form-group-->
     
     						<div class="form-group">
								<label class="col-md-2 control-label" for="Description">Limit:</label>
									<div class="col-md-6">
										<input id="Limit" name="Limit" type="number" class="form-control" disabled>
									</div>
        							<div class="col-md-2">
        								<div class="radio">
     									<label><input type="radio" name="limitOptions" id="limitOptions1" value="option1" checked disabled>Saudi Riyals</label>
     									</div><!--/.radio-->
         							</div><!--/.Col-->
         							<div class="col-md-2">
     									<div class="radio">
     										<label><input type="radio" name="limitOptions" id="limitOptions2" value="option2" disabled>KW/h</label>
     									</div><!--/.radio-->
        							</div><!--/.Col-->
	 							</div><!--/.form-group-->
                                
								<div class="form-group">        
      								<div class="col-sm-offset-2 col-sm-10">
        								<div class="checkbox">
          									<label><input type="checkbox" disabled> Mark as main sensor</label>
        								</div>
      								</div>
    							</div>
                		</fieldset>
                	</form>
				</div> <!--/.panel-body-->
			</div><!--/.panel-default-->
            
            <!--/.Sensor2-->
            
                   
    </div><!--/.body-->

  </div><!--panel--> 
  </div><!--col--> 
  </div><!--row--> 
  
          <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading box-header ">Rome2
                        <div class=" panel box-icon">
                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                        </div><!--/.panel-->
                    </div><!--/.panel-heading-->
                    <div class="panel-body box-content">
                    <!---sensor1--->   
			<div class="panel panel-default">
				<div class="panel-heading" id="accordion"><span class="glyphicon "></span>Sensor1
                	<div class="pull-right action-buttons">
            	<a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
                &nbsp;
            	<a href="#"><span class="glyphicon glyphicon-ok"></span></a>
                &nbsp;
            	<a href="#" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
               </div> 
        </div><!--/. heading -->
                			
				<div class="panel-body">
                	<form class="form-horizontal" action="" method="post">
                    <fieldset>
					<!--<ul>
						<!--<li class="left clearfix">-->
						<div class="form-group">
							<label class="col-md-2 control-label" for="ID">ID:</label>
								<div class="col-md-10">
									<input id="sensorID" name="sensorID" type="text" class="form-control" disabled>
								</div>
	 					</div><!-- /.form-group-->
     
     						<div class="form-group">
								<label class="col-md-2 control-label" for="Description">Limit:</label>
									<div class="col-md-6">
										<input id="Limit" name="Limit" type="number" class="form-control" disabled>
									</div>
        							<div class="col-md-2">
        								<div class="radio">
     									<label><input type="radio" name="limitOptions" id="limitOptions1" value="option1" checked disabled>Saudi Riyals</label>
     									</div><!--/.radio-->
         							</div><!--/.Col-->
         							<div class="col-md-2">
     									<div class="radio">
     										<label><input type="radio" name="limitOptions" id="limitOptions2" value="option2" disabled>KW/h</label>
     									</div><!--/.radio-->
        							</div><!--/.Col-->
	 							</div><!--/.form-group-->
                                
								<div class="form-group">        
      								<div class="col-sm-offset-2 col-sm-10">
        								<div class="checkbox">
          									<label><input type="checkbox" disabled> Mark as main sensor</label>
        								</div>
      								</div>
    							</div>
                		</fieldset>
                	</form>
				</div> <!--/.panel-body-->
			</div><!--/.panel-default-->
            
            <!--/.Sensor1-->
            
    </div><!--/.body-->

  </div><!--panel--> 
  </div><!--col--> 
  </div><!--row-->
          <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading box-header ">Rome3
                        <div class=" panel box-icon">
                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                        </div><!--/.panel-->
                    </div><!--/.panel-heading-->
                    <div class="panel-body box-content">
                    <!---sensor1--->   
			<div class="panel panel-default">
				<div class="panel-heading" id="accordion"><span class="glyphicon "></span>Sensor1
                	<div class="pull-right action-buttons">
            	<a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
                &nbsp;
            	<a href="#"><span class="glyphicon glyphicon-ok"></span></a>
                &nbsp;
            	<a href="#" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
               </div> 
        </div><!--/. heading -->
                			
				<div class="panel-body">
                	<form class="form-horizontal" action="" method="post">
                    <fieldset>
					<!--<ul>
						<!--<li class="left clearfix">-->
						<div class="form-group">
							<label class="col-md-2 control-label" for="ID">ID:</label>
								<div class="col-md-10">
									<input id="sensorID" name="sensorID" type="text" class="form-control" disabled>
								</div>
	 					</div><!-- /.form-group-->
     
     						<div class="form-group">
								<label class="col-md-2 control-label" for="Description">Limit:</label>
									<div class="col-md-6">
										<input id="Limit" name="Limit" type="number" class="form-control" disabled>
									</div>
        							<div class="col-md-2">
        								<div class="radio">
     									<label><input type="radio" name="limitOptions" id="limitOptions1" value="option1" checked disabled>Saudi Riyals</label>
     									</div><!--/.radio-->
         							</div><!--/.Col-->
         							<div class="col-md-2">
     									<div class="radio">
     										<label><input type="radio" name="limitOptions" id="limitOptions2" value="option2" disabled>KW/h</label>
     									</div><!--/.radio-->
        							</div><!--/.Col-->
	 							</div><!--/.form-group-->
                                
								<div class="form-group">        
      								<div class="col-sm-offset-2 col-sm-10">
        								<div class="checkbox">
          									<label><input type="checkbox" disabled> Mark as main sensor</label>
        								</div>
      								</div>
    							</div>
                		</fieldset>
                	</form>
				</div> <!--/.panel-body-->
			</div><!--/.panel-default-->
            
            <!--/.Sensor1-->
            
    </div><!--/.body-->

  </div><!--panel--> 
  </div><!--col--> 
  </div><!--row-->
</div><!--main--> 
</div><!--/.container-->
	<!--Foooter-->
		<?php include('includes/footer.php') ?>
	<!--/.Foooter-->

<!--  javascript -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<!-- /. javascript -->
<!-- external javascript -->
    
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- library for cookie management -->
    <script src="js/jquery.cookie.js"></script>
    <!-- data table plugin -->
    <script src='js/jquery.dataTables.min.js'></script>
    
    <!-- select or dropdown enhancer -->
    <script src="bower_components/chosen/chosen.jquery.min.js"></script>
    
    <!-- plugin for gallery image view -->
    <script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
    <!-- star rating plugin -->
    <script src="js/jquery.raty.min.js"></script>
    
    <!-- for iOS style toggle switch -->
    <script src="js/jquery.iphone.toggle.js"></script>
    <!-- autogrowing textarea plugin -->
    <script src="js/jquery.autogrow-textarea.js"></script>
    
    <!-- multiple file upload plugin -->
    <script src="js/jquery.uploadify-3.1.min.js"></script>
    
    <!-- history.js for cross-browser state change on ajax -->
    <script src="js/jquery.history.js"></script>
    <!-- application script for Charisma demo -->
    <script src="js/charisma.js"></script>  
</body>

</html>
