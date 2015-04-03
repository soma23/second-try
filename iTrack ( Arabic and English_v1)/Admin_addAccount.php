<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>iTrack| Add user account</title>

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
			<li class="active">Add user account</li>
		</ol>
	</div><!--/.row-->
	
    <div class="container">
    <div class="col-lg-10 col-sm-offset-1 main">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Add user account</div>
				<div class="panel-body">
					<form class="form-horizontal" action="" method="post">
                    	<fieldset>
                           <!--<div class="row">-->
                           <!--Email input-->
							<div class="form-group">
								<label class="col-md-3 control-label" for="email">E-mail:</label>
                             	<div class="col-md-9">
									<input class="form-control" placeholder="Your email" name="email" type="email" autofocus>
                                </div>
							<!--</div><!--/.row-->
                            </div><!--/.form group-->
						<br>
                        <!--<div class="row">-->
							<div class="form-group"> 
								<label class="col-md-3 control-label" for="Password">Password:</label>
                             	<div class="col-md-9">
									<input class="form-control" placeholder="Password" name="Password" type="Password" autofocus>
                                </div>
							<!--</div><!--/.row-->
                            </div><!--/.form group-->
						<br>
                        <!--<div class="row">-->
							<div class="form-group">
								<label class="col-md-3 control-label" for="RPassword">Re-enter Password:</label>
 								<div class="col-md-9">
									<input class="form-control" placeholder="Re-enter Password" name="RPassword" type="Password" autofocus>
                                </div>
							<!--</div><!--/.row-->
                            </div><!--/.form group-->
						<br>
                        <!--submit btn-->
							<div class="form-group">
                            	<div class="form-group">
                                	<center><button type="submit" class="btn btn-default btn-md">Submit</button></center>  
                            <!--&nbsp;
                            <a href="index.html" class="btn btn-primary">Submit</a>-->
                            	</div>
                            </div>
                           </fieldset>
						</form>
					</div><!-- /.panel-body-->
				</div><!-- /.panel-default-->
			</div><!-- /.col-->
		</div><!-- /.row -->
     </div><!-- /.main-->
</div><!-- /.container-->
    <!--Foooter-->	
		<?php include('includes/footer.php') ?>
     <!--/.Foooter-->
		

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>	
</body>

</html>
