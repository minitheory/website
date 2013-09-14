<!-- BreadCrumbs
================================================== -->
<div class="tab-pane" id="breadcrumbs">
<section id="breadcrumbs">
  <div class="page-header">
    <h1>Bread Crumbs</h1>
  </div>


<ul class="nav nav-tabs" id="breadcrumbsMenu">
  <li class="active"><a href="#breadcrumbsVisual" data-toggle="tab">Visual</a></li>
  <li><a href="#breadcrumbsHTML" data-toggle="tab">HTML</a></li>
  <li><a href="#breadcrumbsCSS" data-toggle="tab">CSS</a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="breadcrumbsVisual">
    <div class="row">
    <div class="span10">
      <ul class="breadcrumb">
        <li class="active">Home</li>
      </ul>
      <ul class="breadcrumb">
        <li><a href="#">Home</a> <span class="divider">/</span></li>
        <li><a href="#">Library</a> <span class="divider">/</span></li>
        <li class="active">Data</li>
      </ul>
    </div>
  </div>
  </div><!--/Visual-->

  <div class="tab-pane" id="breadcrumbsHTML">
    <div class="row">
      <div class="span8">
        <pre class="prettyprint linenums">&lt;ul class=&quot;breadcrumb&quot;&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;
    &lt;span class=&quot;divider&quot;&gt;/&lt;/span&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;
    &lt;span class=&quot;divider&quot;&gt;/&lt;/span&gt;&lt;/li&gt;
  &lt;li class=&quot;active&quot;&gt;Data&lt;/li&gt;
&lt;/ul&gt;</pre>
      </div>
    </div>
  </div><!--/HTML-->
  

  <div class="tab-pane" id="breadcrumbsCSS">
    <div class="row">
      <div class="span8">
        <pre class="prettyprint linenums">.breadcrumb {
  padding: 8px 15px;
  margin: 0 0 20px;
  list-style: none;
  background-color: #f5f5f5;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}</pre>
        <pre class="prettyprint linenums">.breadcrumb>li {
  display: inline-block;
  text-shadow: 0 1px 0 #fff;
}</pre>
        <pre class="prettyprint linenums">.breadcrumb>li>.divider {
  padding: 0 5px;
  color: #ccc;
}</pre>
        <pre class="prettyprint linenums">.breadcrumb>.active {
  color: #999;
}</pre>
      </div>
    </div>
  </div><!--/CSS-->


</div>


  

</section>
</div>
