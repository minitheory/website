<!-- Miscellaneous
================================================== -->
<div class="tab-pane" id="misc">
<section id="miscellaneous">
  <div class="page-header">
    <h1>Miscellaneous</h1>
  </div>

  <div class="row">
    <div class="span4">

      <h3 id="breadcrumbs">Breadcrumbs</h3>
      <ul class="breadcrumb">
        <li class="active">Home</li>
      </ul>
      <ul class="breadcrumb">
        <li><a href="#">Home</a> <span class="divider">/</span></li>
        <li><a href="#">Library</a> <span class="divider">/</span></li>
        <li class="active">Data</li>
      </ul>
    </div>
    <div class="span4">
      <h3 id="pagination">Pagination</h3>
      <div class="pagination">
        <ul>
          <li><a href="#">&larr;</a></li>
          <li class="active"><a href="#">10</a></li>
          <li class="disabled"><a href="#">...</a></li>
          <li><a href="#">20</a></li>
          <li><a href="#">&rarr;</a></li>
        </ul>
      </div>
      <div class="pagination pagination-centered">
        <ul>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
        </ul>
      </div>
    </div>
    
    <div class="span4">
      <h3 id="pager">Pagers</h3>
        
        <ul class="pager">
          <li><a href="#">Previous</a></li>
          <li><a href="#">Next</a></li>
        </ul>
        
        <ul class="pager">
          <li class="previous disabled"><a href="#">&larr; Older</a></li>
          <li class="next"><a href="#">Newer &rarr;</a></li>
        </ul>
    </div>
  </div>

    <!-- Navs
  ================================================== -->

  <div class="row">
    <div class="span4">

      <h3 id="tabs">Tabs</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a href="#A" data-toggle="tab">Section 1</a></li>
        <li><a href="#B" data-toggle="tab">Section 2</a></li>
        <li class="disabled"><a href="#" data-toggle="tab">Section 3</a></li>
      </ul>
      <div class="tabbable">
        <div class="tab-content">
          <div class="tab-pane active" id="A">
            <p>I'm in Section A.</p>
          </div>
          <div class="tab-pane" id="B">
            <p>Howdy, I'm in Section B.</p>
          </div>
          <div class="tab-pane" id="C">
            <p>What up girl, this is Section C.</p>
          </div>
        </div>
      </div> <!-- /tabbable -->
      
    </div>
    <div class="span4">
      <h3 id="pills">Pills</h3>
      <ul class="nav nav-pills">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li class="disabled"><a href="#">Disabled link</a></li>
      </ul>
    </div>
    
    <div class="span4">
      
      <h3 id="list">Lists</h3>
        
      <div class="well" style="padding: 8px 0;">
        <ul class="nav nav-list">
          <li class="nav-header">List header</li>
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Library</a></li>
          <li><a href="#">Applications</a></li>
          <li class="nav-header">Another list header</li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">Settings</a></li>
          <li class="divider"></li>
          <li><a href="#">Help</a></li>
        </ul>
      </div>
    </div>
  </div>


<!-- Labels
================================================== -->

  <div class="row">
    <div class="span6">
      <h3 id="labels">Labels</h3>
      <span class="label">Default</span>
      <span class="label label-success">Success</span>
      <span class="label label-warning">Warning</span>
      <span class="label label-important">Important</span>
      <span class="label label-info">Info</span>
      <span class="label label-inverse">Inverse</span>
    </div>
    <div class="span6">
      <h3 id="badges">Badges</h3>
      <span class="badge">Default</span>
      <span class="badge badge-success">Success</span>
      <span class="badge badge-warning">Warning</span>
      <span class="badge badge-important">Important</span>
      <span class="badge badge-info">Info</span>
      <span class="badge badge-inverse">Inverse</span>
    </div>
  </div>
  <br />

<!-- Progress bars
================================================== -->


  <h3 id="progressbars">Progress bars</h3>

  <div class="row">
    <div class="span4">
      <div class="progress">
        <div class="bar" style="width: 60%;"></div>
      </div>
    </div>
    <div class="span4">
      <div class="progress progress-info progress-striped">
        <div class="bar" style="width: 20%;"></div>
      </div>
    </div>
    <div class="span4">
      <div class="progress progress-danger progress-striped active">
        <div class="bar" style="width: 45%"></div>
      </div>
    </div>
  </div>
  <br />


<!-- Alerts & Messages
================================================== -->


  <h3 id="alerts">Alerts</h3>

  <div class="row">
    <div class="span12">
        <div class="alert alert-block">
          <a class="close">&times;</a>
          <h4 class="alert-heading">Alert block</h4>
          <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="span4">
      <div class="alert alert-error">
        <a class="close">&times;</a>
        <strong>Error</strong> Change a few things up and try submitting again.
      </div>
    </div>
    <div class="span4">
      <div class="alert alert-success">
        <a class="close">&times;</a>
        <strong>Success</strong> You successfully read this important alert message.
      </div>
    </div>
    <div class="span4">
      <div class="alert alert-info">
        <a class="close">&times;</a>
        <strong>Information</strong> This alert needs your attention, but it's not super important.
      </div>
    </div>
  </div>


</section>
</div>
