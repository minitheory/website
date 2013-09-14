<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ChinStrap V2</title>
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
        
          <a class="brand" href="index.php">Project Styleguide 2.0</a>
          <div class="nav-collapse collapse">
            
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>


<div class="container">
  <div class="row">
    <div class="span12">
      <div class="tabbable tabs-left">
          <ul class="nav nav-tabs" id="main-nav">
            <li class="active"><a href="#typography">Typography</a></li>
            <li><a href="#navbar">Nav Bar</a></li>
            <li><a href="#buttons">Buttons</a></li>
            <li><a href="#tables">Tables</a></li>
            <li><a href="#formsection">Forms</a></li>
            <li><a href="#glyphs">Glyphs</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Misc <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#breadcrumbs">Breadcrumbs</a></li>
                <li><a href="#pagination">Pagination</a></li>
                <li><a href="#pagers">Pagers</a></li>
                <li class="divider"></li>
                <li><a href="#tabs">Tabs</a></li>
                <li><a href="#pills">Pills</a></li>
                <li><a href="#list">List</a></li>
                <li class="divider"></li>
                <li><a href="#labels">Labels</a></li>
                <li><a href="#progressBars">Progress Bars</a></li>
                <li><a href="#alerts">Alerts</a></li>
              </ul>
            </li>
          </ul>
      <div class="tab-content">

        <!-- Components -->
        <?php include 'components/typography.php'; ?>
        <?php include 'components/navbar.php'; ?>
        <?php include 'components/buttons.php'; ?>
        <?php include 'components/forms.php'; ?>
        <?php include 'components/tables.php'; ?>
        <?php include 'components/glyphs.php' ?>

        <!-- MISC -->
        <?php include 'components/misc/breadcrumbs.php'; ?>
        <?php include 'components/misc/pagination.php'; ?>
        <?php include 'components/misc/pagers.php'; ?>
        <?php include 'components/misc/tabs.php'; ?>
        <?php include 'components/misc/pills.php'; ?>
        <?php include 'components/misc/list.php'; ?>
        <?php include 'components/misc/labels.php'; ?>
        <?php include 'components/misc/progressBars.php'; ?>
        <?php include 'components/misc/alerts.php'; ?>
      </div><!--/tab-content-->
      </div><!--/Main Nav Bar-->
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