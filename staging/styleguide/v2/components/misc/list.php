<!-- Miscellaneous
================================================== -->
<div class="tab-pane" id="list">
<section id="list">
  <div class="page-header">
    <h1>List</h1>
  </div>


  <ul class="nav nav-tabs" id="listMenu">
    <li class="active"><a href="#listVisual" data-toggle="tab">Visual</a></li>
    <li><a href="#listHTML" data-toggle="tab">HTML</a></li>
    <li><a href="#listCSS" data-toggle="tab">CSS</a></li>
  </ul>



  <div class="tab-content">
    <div class="tab-pane active" id="listVisual">
      <div class="row">
        <div class="span4">      
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
    </div><!--/Visual-->


   <div class="tab-pane" id="listHTML">
    <div class="row">
      <div class="span8">
        <pre class="prettyprint linenums">&lt;div class=&quot;well&quot; style=&quot;padding: 8px 0;&quot;&gt;
  &lt;ul class=&quot;nav nav-list&quot;&gt;
    &lt;li class=&quot;nav-header&quot;&gt;List header&lt;/li&gt;
    &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Applications&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;nav-header&quot;&gt;Another list header&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Profile&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Settings&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Help&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</pre>
      </div>
    </div>
  </div><!--/html-->


    <div class="tab-pane" id="listCSS">
    <div class="row">
      <div class="span8">
        <h3>List Well</h3>
        <pre class="prettyprint linenums">.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
  -moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
  box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
}</pre>
        <h3>List</h3>
        <pre class="prettyprint linenums">.nav-list {
  padding-right: 15px;
  padding-left: 15px;
  margin-bottom: 0;
  margin-bottom: 20px;
  margin-left: 0;
  list-style: none;
}</pre>
        <pre class="prettyprint linenums">.nav-list>li>a, .nav-list .nav-header {
  margin-right: -15px;
  margin-left: -15px;
  text-shadow: 0 1px 0 rgba(255,255,255,0.5);
}</pre>
        <pre class="prettyprint linenums">.nav-header {
  display: block;
  padding: 3px 15px;
  font-size: 11px;
  font-weight: bold;
  line-height: 20px;
  color: #999;
  text-shadow: 0 1px 0 rgba(255,255,255,0.5);
  text-transform: uppercase;
}</pre>
        <pre class="prettyprint linenums">.nav-list>li>a, .nav-list .nav-header {
  margin-right: -15px;
  margin-left: -15px;
  text-shadow: 0 1px 0 rgba(255,255,255,0.5);
  display:block;
}</pre>
      </div>
    </div>
  </div><!--/CSS-->




  


</section>
</div>
