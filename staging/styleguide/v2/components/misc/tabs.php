<!-- Tabs
================================================== -->
<div class="tab-pane" id="tabs">
<section id="tabs">
  <div class="page-header">
    <h1>Tabs</h1>
  </div>


  <ul class="nav nav-tabs" id="tabsMenu">
    <li class="active"><a href="#tabsVisual" data-toggle="tab">Visual</a></li>
    <li><a href="#tabsHTML" data-toggle="tab">HTML</a></li>
    <li><a href="#tabsCSS" data-toggle="tab">CSS</a></li>
  </ul>



  <div class="tab-content">
    <div class="tab-pane active" id="tabsVisual">
      <div class="row">
        <div class="span4">
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
      </div>
    </div><!--/Visual-->


   <div class="tab-pane" id="tabsHTML">
    <div class="row">
      <div class="span8">
        <pre class="prettyprint linenums">&lt;ul class=&quot;nav nav-tabs&quot;&gt;
  &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#A&quot; data-toggle=&quot;tab&quot;&gt;Section 1&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;&quot;&gt;&lt;a href=&quot;#B&quot; data-toggle=&quot;tab&quot;&gt;Section 2&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;disabled&quot;&gt;&lt;a href=&quot;#&quot; data-toggle=&quot;tab&quot;&gt;Section 3&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>
      </div>
    </div>
  </div><!--/html-->


    <div class="tab-pane" id="tabsCSS">
    <div class="row">
      <div class="span8">
        <h3>Nav Tab</h3>
        <pre class="prettyprint linenums">.nav {
  margin-bottom: 20px;
  margin-left: 0;
  list-style: none;
}</pre>
        <pre class="prettyprint linenums">.nav-tabs {
  border-bottom: 1px solid #ddd;
}</pre>
        <pre class="prettyprint linenums">.nav-tabs>li {
  margin-bottom: -1px;
  float:left;
}</pre>
        <pre class="prettyprint linenums">.nav-tabs>li>a {
  padding-top: 8px;
  padding-bottom: 8px;
  line-height: 20px;
  border: 1px solid transparent;
  -webkit-border-radius: 4px 4px 0 0;
  -moz-border-radius: 4px 4px 0 0;
  border-radius: 4px 4px 0 0;
  padding-right: 12px;
  padding-left: 12px;
  margin-right: 2px;
  line-height: 14px;
  display:block;
}</pre>
        <h3>Active Tab</h3>
        <pre class="prettyprint linenums">.nav-tabs>.active>a, 
.nav-tabs>.active>a:hover, 
.nav-tabs>.active>a:focus {
  color: #555;
  cursor: default;
  background-color: #fff;
  border: 1px solid #ddd;
  border-bottom-color: transparent;
  padding-top: 8px;
  padding-bottom: 8px;  
  line-height: 20px;
  border: 1px solid transparent;
  -webkit-border-radius: 4px 4px 0 0;
  -moz-border-radius: 4px 4px 0 0;
  border-radius: 4px 4px 0 0;
}</pre>
        <h3>Disabled Tab</h3>
        <pre class="prettyprint linenums">.nav>.disabled>a {
  color: #999;
}
</pre>
      </div>
    </div>
  </div><!--/CSS-->


  


</section>
</div>
