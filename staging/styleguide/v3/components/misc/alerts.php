<!-- Miscellaneous
================================================== -->
<div class="tab-pane" id="alerts">
<section id="alerts">
  <div class="page-header">
    <h1>Alerts</h1>
  </div>

<ul class="nav nav-tabs" id="alertMenu">
  <li class="active"><a href="#alertVisual" data-toggle="tab">Visual</a></li>
  <li><a href="#alertHTML" data-toggle="tab">HTML</a></li>
  <li><a href="#alertCSS" data-toggle="tab">CSS</a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="alertVisual">
    <div class="row">
    <div class="span10">
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
  </div><!--/Visual-->


  <div class="tab-pane" id="alertHTML">
    <div class="row">
      <div class="span10">
        <h3>Alert Block</h3>
        <pre class="prettyprint linenums">&lt;div class=&quot;alert alert-block&quot;&gt;
  &lt;a class=&quot;close&quot;&gt;&times;&lt;/a&gt;
  &lt;h4 class=&quot;alert-heading&quot;&gt;Alert block&lt;/h4&gt;
  &lt;p&gt;Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.&lt;/p&gt;
&lt;/div&gt;</pre>
      </div>
    </div>
  </div><!--/HTML-->
  

  <div class="tab-pane" id="alertCSS">
    <div class="row">
      <div class="span10">
        <h3>Base</h3>
        <pre class="prettyprint linenums">.alert {
  padding: 8px 35px 8px 14px;
  margin-bottom: 20px;
  text-shadow: 0 1px 0 rgba(255,255,255,0.5);
  background-color: #fcf8e3;
  border: 1px solid #fbeed5;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}</pre>
        <h3>Alert</h3>
        <pre class="prettyprint linenums">.alert-block {
  padding-top: 14px;
  padding-bottom: 14px;
}</pre>
        <pre class="prettyprint linenums">.alert, .alert h4 {
  color: #c09853;
}</pre>
        <h3>Error</h3>
        <pre class="prettyprint linenums">.alert-danger, .alert-error {
  color: #b94a48;
  background-color: #f2dede;
  border-color: #eed3d7;
}</pre>
        <h3>Success</h3>
        <pre class="prettyprint linenums">.alert-success {
  color: #468847;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}</pre>
        <h3>Information</h3>
        <pre class="prettyprint linenums">.alert-info {
  color: #3a87ad;
  background-color: #d9edf7;
  border-color: #bce8f1;
}</pre>
      </div>
    </div>
  </div><!--/CSS-->

</div>



</section>
</div>
