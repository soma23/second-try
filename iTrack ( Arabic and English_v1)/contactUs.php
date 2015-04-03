<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>iTrack | Contact us</title>

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
<!--Header-->
	<?php include('includes/Visitor_Header.php');?>
    <!--?php include('includes/User_Header.php');?>
    <!--?php include('includes/Admin_Header.php');?>
<!--/.Header-->

<!--body bigin-->
		<div class="row ">
			<ol class="breadcrumb">
            &nbsp;
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Contact us</li>
			</ol>
		</div><!--/.row-->


<div class="container">		
		<div class="col-lg-12">&nbsp;</div>
		<!--<div class="row">-->
			<div class="col-md-7">
				<div class="panel panel-default">
					<div class="panel-heading"><span class="glyphicon glyphicon-envelope"></span> Contact Form</div>
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Name</label>
									<div class="col-md-9">
									<input id="name" name="name" type="text" placeholder="Your name" class="form-control">
									</div>
								</div>
							
								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Your E-mail</label>
									<div class="col-md-9">
										<input id="email" name="email" type="text" placeholder="Your email" class="form-control">
									</div>
								</div>
								
								<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Your message</label>
									<div class="col-md-9">
										<textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
									</div>
								</div>
								
								<!-- Form actions -->
								<div class="form-group">
									<center><button type="submit" class="btn btn-default btn-md">Submit</button></center>
								</div>
							</fieldset>
						</form>
					</div><!-- /.panel-body-->
				</div><!-- /.panel-default-->
		</div><!-- /.col-md-8 -->
<!--</div><!--container-->
        <!--</div>-->
	<!--<div class="container">	-->
		<div class="row">
			<div class="col-md-5">
				<div class="panel panel-info">
					<div class="panel-heading">
						Contact us
					</div>
					<div class="panel-body">
						<p>For more information on our products, services or anything else, please drop us an email with the form on the left, or through the social media accounts.</p>
					</div>
				</div><!--/.Panel-->
			</div><!--/.col-->
		<!--</div> /. row-->
			<div class="col-md-5">
				<div class="panel panel-info">
					<div class="panel-heading">
						Our accounts
					</div>
					<div class="panel-body" id="socials">
						<ul>
                        	<li><a href="https://twitter.com"><img src="img/twitter.png" alt="Twitter Page" /></a></li>
                			<li><a href="http://Youtube.com"><img src="img/Youtube.png" alt="Youtube Page" /></a></li>              
                			<li><a href="https://www.facebook.com/pages/ITrack-System/332759930266182"><img src="img/facebook.png" alt="Facebook Page" /></a></li>
                        </ul>
					</div>
				</div><!--/.Panel-->
			</div><!--/.col-->
		</div><!-- /.row -->		
	</div><!-- /.container -->

 	<!--Foooter-->	
		<?php include('includes/footer.php') ?>
     <!--/.Foooter-->

<!-- JavaScript -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-table.js"></script>
    		
</body>
</html>
