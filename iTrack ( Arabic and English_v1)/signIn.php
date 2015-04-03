<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>iTrack | Sign In</title>

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
<?php include ('includes/Visitor_Header.php')?>
<!--/.header-->

<!--begin body-->

	<div class="row">
		<ol class="breadcrumb">
        &nbsp;
			<li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
			<li class="active">Sign In</li>
		</ol>
	</div><!--/.row-->
    
<div class="container">
    <div class="col-lg-10 col-sm-offset-1 main">
		<div class="row">
			<div class="col-lg-12">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">Sign In</div>
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
						<fieldset>                
	 						<div class="input-group ">
                        		<span class="input-group-addon"><i class="glyphicon glyphicon-user "></i></span>
                        			<input type="email" class="form-control" placeholder="e-mail" name="email">
                    			</div>
                    			<div class="clearfix"></div><br>
                                
                    		<div class="input-group ">
                        		<span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        			<input type="password" class="form-control" placeholder="Password" name="password">
                    		</div>
                    		<div class="clearfix"></div><br>
                            
							
                            <div class="col-sm-offset-2">
								<label>
							<a href="index.html">Forget Password </a>
								</label>
							</div>
                           
				          <!--submit btn-->
									<div class="form-group">
                                		<center><button type="submit" class="btn btn-default btn-md">Sign In</button></center>
                         			</div>
						</fieldset>
					</form>
				</div><!-- /.panel-body-->
			</div><!-- /.panel-default-->
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
