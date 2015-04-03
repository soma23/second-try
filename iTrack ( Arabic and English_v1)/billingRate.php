<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>iTrack | Billing Rate</title>

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
	<?php include('includes/Admin_Header.php');?>
<!--?php include('includes/User_Header.php');?>
<!--?php include('includes/Visitor_Header.php');?>
<!--/.header-->


		<div class="row ">
			<ol class="breadcrumb">
            &nbsp;
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Billing Rate</li>
			</ol>
		</div><!--/.row-->

<div class="container">
<!--begin body-->


<!--sidebar-->
<?php include('includes/Admin_sidebar.php'); ?>
<!--?php include('includes/User_sidebar.php'); ?>
<!--?php include('includes/Visitor_sidebar.php'); ?>
<!--/.sidebar-->

<!--/.main -->
		<div class="col-lg-9 col-sm-offset-2  main">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Billing Rate</div>
					<div class="panel-body">
						<center><select class="form-control">
							<option>Option 1</option>
							<option>Option 2</option>
							<option>Option 3</option>
							<option>Option 4</option>
						</select></center>
					</div>
                    <!-- Table -->
                    <div class="panel-body">
                    <table data-toggle="table" id="table-style" data-url="tables/data2.json" data-row-style="rowStyle">
						    <thead>
						    <tr>
						        <th data-field="consumptionSegment" >Consumption Segment</th>
						        <th data-field="consumptionPice" >Consumption Price</th>
						    </tr>
						    </thead>
					  </table>
                  </div>
                        <script>
						    $(function () {
						        $('#hover, #striped, #condensed').click(function () {
						            var classes = 'table';
						
						            if ($('#hover').prop('checked')) {
						                classes += ' table-hover';
						            }
						            if ($('#condensed').prop('checked')) {
						                classes += ' table-condensed';
						            }
						            $('#table-style').bootstrapTable('destroy')
						                .bootstrapTable({
						                    classes: classes,
						                    striped: $('#striped').prop('checked')
						                });
						        });
						    });
						
						    function rowStyle(row, index) {
						        var classes = ['active', 'success', 'info', 'warning', 'danger'];
						
						        if (index % 2 === 0 && index / 2 < classes.length) {
						            return {
						                classes: classes[index / 2]
						            };
						        }
						        return {};
						    }
						</script>
				
                        
                    <!--/.Table-->
				</div>
			</div>
		</div><!--/.row-->
   </div><!--/.main-->
  </div><!--/.containar-->  
   
    <!--Foooter-->
		<?php include('includes/footer.php') ?>	
 <!--/.Foooter-->

	<script src="js/jquery-1.11.1.min.js"></script>  
	<script src="js/bootstrap.min.js"></script> 
    <script src="js/bootstrap-table.js"></script>
			
</body>

</html>
