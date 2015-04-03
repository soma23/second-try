<!DOCTYPE html>
<!-----------------------------------------------------------------------------------
1.HEAD
----------------------------------------------------------------------------------->
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iTrack| View Consumption Rate</title>
    <!-- The styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
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
<!--?php include('includes/User_Header.php');
<!--/.header-->
<!--row-->
    <div class="row ">
        <ol class="breadcrumb">
            &nbsp;
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">View Consumption Rate</li>
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
            <div class="panel-heading">Consumption Rate</div>
                <div class="panel-body">
                    <!--row-->
                    <!--<div class="row">-->
                    <form class="form-horizontal" action="" method="post">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="Sensor_Room"> Sensor/Room</label>
                            <div class="control-group col-md-7">
                                <div class="controls">
                                    <select id="selectError1" multiple class="form-control" data-rel="chosen">
                                    	<option selected>Rome 1</option>
                                    	<option>Rome 2</option>
                                    	<option>Rome 3</option>
                                    	<option>Rome 4</option>
                                    	<option>Rome 5</option>
                                    </select>
                                </div><!--/.controls--> 
                            </div><!--/.control-group-->                                
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary">Submit</button>  
                            </div><!--/.controls-->                                
                        </div> <!--/.form group--> 	
                   </fieldset>
                   </form>
                    <!--</div><!--/.row-->
                    <br>
                    <!--row-->
                    <!--<div class="row">-->
                   
                        <div class="col-md-10">
                            <br>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="canvas-wrapper">
                                        <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
                                    </div><!--/.canvas-->
                                </div><!--/.panel-body-->
                            </div><!--/.panel panel-defaul-->
                        </div><!--/.col-->
                        <div class="col-md-2 pull-right">
                        <br>
                        <form role="form">
                        <fieldset>
                            <div class="col-xs-push-2">
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>1 Day</label>
                                </div><!--/.radio-->
                                <div class="radio">
                                    <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">1 Week</label>
                                </div><!--/.radio-->
                                <div class="radio">
                                    <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">1 Month</label>
                                </div><!--/.radio-->
                                <div class="radio">
                                    <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">6 Month</label>
                                </div><!--/.radio-->
                                <div class="radio">
                                    <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">1 Year</label>
                                </div><!--/.radio-->                                   
                            </div><!--/.form-group--> 
                            <br>
                            </div><!--/.col-->
                            </fieldset> 
                        </form><!--/.form--> 
                        </div><!--/.col--> 
                    <!--</div><!--/.row-->  
            </div><!--/.panel-body-->
       	    </div><!--/.panel panel-default-->
       </div><!--/.row-->
    </div>
<!--/.main-->
</div><!--/.container-->

<!--Foooter-->
	<?php include('includes/Footer.php');?>
<!--/.Foooter-->

<!-- JavaScript -->
	<script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>
<!--/.JavaScript--> 

<!-- external_javascript -->
    <!-- library for cookie management -->
    <script src="js/jquery.cookie.js"></script>
    <!-- select or dropdown enhancer -->
    <script src="bower_components/chosen/chosen.jquery.min.js"></script>
    <!-- history.js for cross-browser state change on ajax -->
    <script src="js/jquery.history.js"></script>
    <!-- application script for Charisma demo -->
    <script src="js/charisma.js"></script>	
<!--/.external_javascript-->	
</body>

</html>
