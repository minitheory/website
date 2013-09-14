<?php
  // include info for db connection
  require_once('Connections/styleguide.php');
  
  if (!isset($_SESSION)) {
    session_start();
  }
  
  $gate = $_GET['q'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ChinStrap V3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A calm, blue sky.">
    <meta name="author" content="Thomas Park">

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/bootswatch.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/prettify.css" rel="stylesheet" media="screen">

  </head>
  <body class="preview" id="top" data-spy="scroll" data-target=".subnav" data-offset="80">

  <div id="preloader">
    <div id="status"></div>
  </div><!--preloader-->

  <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
        
          <a class="brand" href="index.php">Project Styleguide 3.0</a>
          <div class="nav-collapse collapse">
            
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>



<div class="container">
  <div class="row">
    <div class="span12">
      <div class="span4 offset4">
        <?php if($gate == 'n') { echo '<div class="alert alert-error">You have entered a invalid name</div>'; } ?>
        <div class="well well-large">
          <form id="sendCompany" name="sendCompany" method="POST" action="main.php">
            <label>Name of Company</label>
            <input type="text" name="companyName" id="companyName" placeholder="Type name of company">
            <br/>
            <input type="submit" name="submit" id="submit" class="btn btn-primary"/>
          </form>
        </div><!--/well-->
        
        
      </div><!--/offset -->

        

        </div>
    </div><!--/span12-->
  </div><!--/row-->
</div><!-- /container -->


<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootswatch.js"></script>
<script src="js/main.js"></script>
<script src="js/prettify.js"></script>
<script type="text/javascript">
$(window).load(function() { // makes sure the whole site is loaded
    $("html, body").scrollTop(0);
    $("#status").fadeOut(); 
    $("#preloader").delay(350).fadeOut("slow");
    prettyPrint();
})
</script>
</body>
</html>