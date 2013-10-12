<!DOCTYPE html>
<html lang="en">
  
  <!-- HEAD START -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- MUST GET REAL USERNAME -->
    <title>Bookie // <?php echo $user_profile['name']; ?></title>

    <!-- Bootstrap core CSS - DO NOT TOUCH THIS -->
    <link href="<?php echo base_url() ?>dist/css/bootstrap.css" rel="stylesheet">
  
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

  <!-- Custom styles for Bookie -->
  <link href="<?php echo base_url() ?>css/bookie.css" rel="stylesheet">

   <style>
   
</style>


  </head>
  <!-- HEAD END -->



  <!-- BODY START -->
  <body>

    <!-- HEADER START (navbar) - this will be copied for all pages -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">

        <!-- MUST GET REAL USERNAME -->
        <!-- Always links to home_view.php -->
        <a class="navbar-brand" href="../../bookie"><img class = "navbar-image" src="http://graph.facebook.com/<?php echo $user_profile['id']?>/picture" ><?php echo $user_profile['name']; ?></a>

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
    <div class="container">
    <form action = "../index.php/addNewExpense/addNewRecord" method="get" class="form-signin">	
      		
    	<h3 class="form-signin">+ Add Expense</h3>
		<div class="input-group">
  			<span class="input-group-addon"><span style="visibility:hidden">a</span>Event<span style="visibility:hidden">@</span></span>
  			<input type="text" class="form-control " placeholder="What's this expense?" name="event">
		</div>
				<br/>
		<div class="input-group">
  			<span class="input-group-addon"><span style="visibility:hidden">asd</span>$<span style="visibility:hidden">asd</span></span>
  			<input type="text" class="form-control " placeholder="Amount" name="amount">
		</div>
		<br/>
		<div class="input-group">
  			<span class="input-group-addon"><span style="visibility:hidden">as</span>Who<span style="visibility:hidden">.s</span></span>
  			<input id="friend" type="text" class="form-control " placeholder="Who owe's you?" name="who">
  			<input type="hidden" id="clientId" value=""/>
		</div>
		<br/>
      	<input type="hidden" id = "clientID" name="clientID" value='45'/>
        <button class="btn btn-lg btn-warning btn-block done-btn" type="submit">Done</button>
      </form>
      
    </div>
    
    <!-- CONTAINER END -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
  
<script>

	var stringlist =  <?php echo $user_friends?> 
	var people = [];

	function tokenize_json(JSONObject)
	{
		var jsonlen = JSONObject.length;
		for(var i = 0; i < jsonlen; i++)
		{
			people.push({label: ""+ JSONObject[i].name, id: ""+ JSONObject[i].id, image: "http://graph.facebook.com/" + JSONObject[i].id +"/picture"});
		}
	}
	
	// function firstMiddleInitial(name)
  // {
 //     if (name == null || name.length == 0) return "";
     
 //      //get all tokens (by space) into an array
 //      var arr = name.split(" ");
 //      var newname = "";
 //      for(var i = 0; i < arr.length; i++)
 //      {
 //        if (i == 0)
 //        {
 //          newname += arr[i];
 //        }
 //        else if (i == 1)
 //        {
 //          //special case for Zain A. versus Vadim "Tony" S.
 //          if (arr.length == 2)
 //          {
 //            newname += " " + arr[i].substring(0, 1) + ".";
 //          }
 //          else
 //          {
 //            newname += " " + arr[i];
 //          }
 //        }
 //        else
 //        {
 //          //just in case
 //          if (arr[i].length == 0) continue;

 //          newname += " " + arr[i].substring(0, 1) + ".";
 //        }
 //      }
 //      return newname;
		//return // the First name, the middle name if it exists and the Initial of the last name		
	//}
	

	tokenize_json(stringlist); 

	$(document).ready(function() {
		
	    $( "#friend" ).autocomplete({
	        minLength: 0,
	        source: people,
	        select: function( event, ui ) {
	            $( "#friend" ).val( ui.item.label );
	            $("#clientID").val(ui.item.id);
	            return false;
	    	}
		}).data( "ui-autocomplete" )._renderItem = function( ul, item ) {
        var inner_html = "<a><div class = 'friends-dropdownList'><img class = 'friends-dropdownList-image' src='" + item.image + "'><label class = 'friends-dropdownList-Label'>" + item.label +"</label></div></a>";
        return $( "<li></li>" ).data( "item.autocomplete", item ).append(inner_html).appendTo( ul );
   		};
	});

</script>
  
</html>
