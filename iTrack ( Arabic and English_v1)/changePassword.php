<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>iTrack| Change Password</title>

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


<!--begin body-->

	<div class="row">
		<ol class="breadcrumb">
        &nbsp;
			<li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
			<li class="active">Change Password</li>
		</ol>
	</div><!--/.row-->
    
<div class="container">
    <div class="col-lg-10 col-sm-offset-1 main">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Change Password</div>
						<div class="panel-body">
							<form class="form-horizontal" action="" method="post">
                    		<fieldset>
								<div class="form-group">
									<label class="col-md-4 control-label" for="User_Name">Old password:</label>
                                    	<div class="col-md-8">
											<input class="form-control" placeholder="Old Password" name="oldPassword" type="password" autofocus>
                                		</div>
                            	</div><!--/.form group-->
								<div class="form-group">
									<label class="col-md-4 control-label" for="Password">New password:</label>
                                       <div class="col-md-8">
											<input class="form-control" placeholder="New Password" name="newPassword" type="password" autofocus>
                                		</div>
                            		</div><!--/.form group-->
									<div class="form-group">
										<label class="col-md-4 control-label" for="RPassword">Re-enter the new password:</label>
                             				<div class="col-md-8">
												<input class="form-control" placeholder="Re-enter Password" name="RPassword" type="password" autofocus>
                                			</div>
                            		</div><!--/.form group-->
                        <!--submit btn-->
									<div class="form-group">
                                    <div class="form-group"></div>
                            			<!--<div class="col-md-12 col-sm-offset-5 ">-->
                                			<center><button type="submit" class="btn btn-default btn-md">Submit</button></center>
                            			</div>
                         			<!--</div>-->
                                 </fieldset>
								</form>
						</div><!-- /.panel-body -->
					</div><!-- /.panel-default -->
				</div><!-- /.col-->
			</div><!-- /.row -->
    	</div><!-- /.main -->
    </div><!-- /.container -->
	
    <!--Foooter-->	
<?php include('includes/footer.php') ?>
     <!--/.Foooter-->
		

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>	
</body>

</html>
