<!DOCTYPE html>
<html lang="en">
  
  <!-- HEAD START -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- MUST GET REAL USERNAME -->
    <title>Bookie // <?php echo $user_profile['name']; ?></title>


    <!-- Loading JS Libraries -->
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script type="text/javascript" src = "<?php echo base_url() ?>js/bookie.js"></script>


    <!-- Bootstrap core CSS - DO NOT TOUCH THIS -->
    <link href="<?php echo base_url() ?>dist/css/bootstrap.css" rel="stylesheet">
    
	<!-- Custom styles for Bookie -->
    <link href="<?php echo base_url() ?>css/bookie.css" rel="stylesheet">
  </head>
  <!-- HEAD END -->

  <!-- BODY START -->
  <body>

	<!-- HEADER START (navbar) - this will be copied for all pages -->
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">

		<!-- MUST GET REAL USERNAME -->
		<!-- Always links to home_view.php -->
         <a class="navbar-brand" href="../../bookie"><img class = "navbar-top-image" src="http://graph.facebook.com/<?php echo $user_profile['id']?>/picture"><span class = "navbar-text-heading"><?php echo $user_profile['name']; ?></span></a>
       
		<!-- LOGOUT START --> 
		<form action="#">
		<div class="pull-right">
			<button type="submit" class="btn btn-sm logout-btn">
				<span class="glyphicon glyphicon-log-out"></span>
			</button>
        </div>
		</form>
		<!-- LOGOUT END -->

      </div>
    </div>
	<!-- HEADER END -->

	<!-- CONTAINER START - main body -->
    <div class="container"> <br/>
    <h3 class="form-signin"> Owe You: $<?php echo round($total_lended,2) ?></h3>	

    	<!-- Hack Alert! Pulling off a Nidale-->
      
     <?php //print_r($debtbyEvent); die(); // Something Wrong with the Mode, fix the model?> 

    <?php $i = 0;?>
    <?php foreach($people_owe_you as $people) :?>
		<?php echo "<form class='form-signin'><button id = 'person-".$i."'class='btn btn-lg btn-success btn-block' type='button' >". $people['name']  .": $".round($people['totals'],2)." &raquo;</button></form>"; ?>
     <?php echo "<div class='test' id = 'test-".$i."'>"; ?>
      <?php echo "<table class = 'form-signin dropdownTable' border = '1px'>" ?>
       <?php foreach($debtbyEvent[$i] as $debt) :?>    
        <?php echo "<tr id = 'dropDownTableRow'> <td width = '90px' align = 'center'>".substr($debt['timestamp'],0,11)."</td><td width='130px' align = 'center'>".$debt['event']."</td><td width='60px' id = 'lastRow' align = 'right'></b> $".round($debt['value'],2)."</td><tr>";?>
       <?php endforeach; ?>  
       <?php echo "</table>"; ?>
    <?php echo "</div>";?> 
    <?php $i = $i + 1;?> 
    <?php endforeach; ?>
  
	<!-- CONTAINER END -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>

<style type="text/css">
.test{
  display: none;
}
</style>  

<script>
  $(document).find("button[id^='person-']").click(function(){
    var num = this.id.split('-')[1];
    $('#test-' + num).slideToggle("fast");
  });
</script>

</html>
