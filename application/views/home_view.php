<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<!-- If we make no replacement, delete it! -->

    <title>Bookie</title>

    <!-- 
		// PROBABLY SHOULD NOT TOUCH THIS
		Bootstrap core CSS 
	-->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bookie.css" rel="stylesheet">

  </head>

  <body>

	<!-- HEADER START - this will be copied for all pages -->
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <!--<div class="navbar-header">-->
          <!--<button type="button" class="navbar-toggle" data-target="">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>-->
        <!--</div>-->

		<!-- MUST GET REAL USERNAME -->
        <a class="navbar-brand" href="#">Omeed Safaee-Rad</a>
        <div class="pull-right row-fluid">
        <!--<div class="collapse navbar-collapse">-->
          <ul class="nav navbar-nav">
			<li><button type="button" class="btn btn-sm logout-btn"><span class="glyphicon glyphicon-log-out"></span></button></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	<!-- HEADER END -->

    <div class="container">
      <form class="form-signin">
		<!--
		// We don't need this if the Facebook login API has its own pop-up		

        <input type="text" class="form-control" placeholder="Email address" autofocus>
        <input type="password" class="form-control" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
		-->
        
        <h3 class="form-signin-heading">Your Social Bookie</h3>
		<p class="lead"></p>
		<button class="btn btn-lg btn-warning btn-block" type="submit">+ Add Expense</button>
		<p class="lead"></p>
		<p class="lead"></p>
		<!--<span class="pull-right">&raquo;</span>-->
		<button class="btn btn-lg btn-danger btn-block" type="submit">You Owe: $75.00 &raquo;</button>
		<p class="lead"></p>
		<button class="btn btn-lg btn-success btn-block text-left" type="submit">Owe You: $125.17 &raquo;</button>

      </form>

    </div> <!-- /container -->

	<!-- 
	<div id="footer">
      <div class="container">
        <p class="text-muted credit">Bookie - <a href="https://github.com/beltex/bookie/">Fork Me On GitHub</a></p>
      </div>
    </div>
	-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
