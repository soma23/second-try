<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>iTrack | Room Information</title>

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
				<li class="active">Room Information</li>
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
			       
 <!---rooms (Should generate automatically according to the user input using javascript)--->   
	<div class="panel panel-default">
    	<div class="panel-heading"><span class="glyphicon "></span>Room1 
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
        		<div class="form-group">
    				<label class="col-md-3 control-label" for="RName">Room Name:</label>
    					<div class="col-md-9">
    						<input id="roomName" name="roomName" type="text" class="form-control">
    					</div>
    				</div><!--/.form-group-->
                    
        		<div class="form-group">
    				<label class="col-md-3 control-label" for="Description">Description:</label>
    					<div class="col-md-9">
    						<input id="description" name="description" type="number" class="form-control">
    					</div>
    				</div>	<!--/.form-group-->
                </fieldset>						
    			</form>
    		</div><!--/.Panel-body-->
    	</div><!--/.Panel-default-->
    <!--/.Rooms-->
    
	</div><!--/.col-md-11--> 
</div><!--/.row--> 

   <div class="panel panel-default">
   		<div class="panel-body">
				<center><a href="#"><span class="glyphicon glyphicon-plus"></span></a></center>
      			<p><p></p></p>
     	</div><!--/.Panel-body-->
	</div><!--/.Panel-default-->
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
