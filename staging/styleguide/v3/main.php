<?php
  // include info for db connection
  require_once('Connections/styleguide.php');
  
  if (!isset($_SESSION)) {
    session_start();
  }
  
  $thecompany = $_POST['companyName']; 
  $userDetails = mysql_query("SELECT * FROM users WHERE users.companyname = '$thecompany' ");
  $fetch = mysql_fetch_array($userDetails);

  $numrows = mysql_num_rows($userDetails);
  if ($numrows!=0) {

  } else {
    header('Location: index.php?q=n');
  }

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
        
          <a class="brand" href="index.php">Project Styleguide 3.0 [ <?php echo $thecompany; ?> ] </a>
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
            <?php if ($fetch['typography'] == "1") { echo '<li class="active"><a href="#typography">Typography</a></li>'; } ?>
            <?php if ($fetch['navbar'] == "1") { echo '<li><a href="#navbar">Nav Bar</a></li>'; } ?>
            <?php if ($fetch['buttons'] == "1") { echo '<li><a href="#buttons">Buttons</a></li>'; } ?>
            <?php if ($fetch['tables'] == "1") { echo '<li><a href="#tables">Tables</a></li>'; } ?>
            <?php if ($fetch['forms'] == "1") {echo '<li><a href="#formsection">Forms</a></li>'; } ?>
            <?php if ($fetch['glyphs'] == "1") { echo '<li><a href="#glyphs">Glyphs</a></li>'; } ?>


            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Misc <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <?php if ($fetch['breadcrumbs'] == "1") { echo '<li><a href="#breadcrumbs">Breadcrumbs</a></li>' ;} ?>
                <?php if ($fetch['pagination'] == "1") { echo '<li><a href="#pagination">Pagination</a></li>'; } ?>
                <?php if ($fetch['pagers'] == "1") { echo '<li><a href="#pagers">Pagers</a></li> <li class="divider"></li>'; } ?>
                
                <?php if ($fetch['tabs'] == "1") { echo '<li><a href="#tabs">Tabs</a></li>'; } ?>
                <?php if ($fetch['pills'] == "1") { echo '<li><a href="#pills">Pills</a></li>'; } ?>
                <?php if ($fetch['list'] == "1") { echo '<li><a href="#list">List</a></li> <li class="divider"></li>'; } ?>
                <?php if ($fetch['labels'] == "1") { echo '<li><a href="#labels">Labels</a></li>'; } ?>
                <?php if ($fetch['progressbars'] == "1") { echo '<li><a href="#progressBars">Progress Bars</a></li>'; } ?>
                <?php if ($fetch['alerts'] == "1") { echo '<li><a href="#alerts">Alerts</a></li>'; } ?>
              </ul>
            </li>
          </ul>

      <div class="tab-content">
        <!-- Components -->
        <?php if ($fetch['typography'] == "1") { include 'components/typography.php';} ?>
        <?php if ($fetch['navbar'] == "1") { include 'components/navbar.php';} ?>
        <?php if ($fetch['buttons'] == "1") { include 'components/buttons.php';} ?>
        <?php if ($fetch['forms'] == "1") { include 'components/forms.php';} ?>
        <?php if ($fetch['tables'] == "1") { include 'components/tables.php';} ?>
        <?php if ($fetch['glyphs'] == "1") { include 'components/glyphs.php';} ?>


        <!-- MISC -->
        <?php if ($fetch['breadcrumbs'] == "1") { include 'components/misc/breadcrumbs.php';} ?>
        <?php if ($fetch['pagination'] == "1") { include 'components/misc/pagination.php';} ?>
        <?php if ($fetch['pagers'] == "1") { include 'components/misc/pagers.php';} ?>
        <?php if ($fetch['tabs'] == "1") { include 'components/misc/tabs.php';} ?>
        <?php if ($fetch['pills'] == "1") { include 'components/misc/pills.php';} ?>
        <?php if ($fetch['list'] == "1") { include 'components/misc/list.php';} ?>
        <?php if ($fetch['labels'] == "1") { include 'components/misc/labels.php';} ?>
        <?php if ($fetch['progressbars'] == "1") { include 'components/misc/progressBars.php';} ?>
        <?php if ($fetch['alerts'] == "1") { include 'components/misc/alerts.php';} ?>


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