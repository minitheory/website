<!-- Miscellaneous
================================================== -->
<div class="tab-pane" id="pills">
<section id="pills">
  <div class="page-header">
    <h1>Pills</h1>
  </div>


  <ul class="nav nav-tabs" id="pillsMenu">
    <li class="active"><a href="#pillsVisual" data-toggle="tab">Visual</a></li>
    <li><a href="#pillsHTML" data-toggle="tab">HTML</a></li>
    <li><a href="#pillsCSS" data-toggle="tab">CSS</a></li>
  </ul>



  <div class="tab-content">
    <div class="tab-pane active" id="pillsVisual">
      <div class="row">
        <div class="span10">
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
      </div>
    <br/><br/><br/><br/><br/><br/>
    </div><!--/Visual-->


   <div class="tab-pane" id="pillsHTML">
    <div class="row">
      <div class="span10">
        <pre class="prettyprint linenums">&lt;ul class=&quot;nav nav-pills&quot;&gt;
  &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Profile&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;dropdown&quot;&gt;
    &lt;a class=&quot;dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; href=&quot;#&quot;&gt;Dropdown &lt;b class=&quot;caret&quot;&gt;&lt;/b&gt;&lt;/a&gt;
    &lt;ul class=&quot;dropdown-menu&quot;&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  &lt;li class=&quot;disabled&quot;&gt;&lt;a href=&quot;#&quot;&gt;Disabled link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>
      </div>
    </div>
  </div><!--/html-->


    <div class="tab-pane" id="pillsCSS">
    <div class="row">
      <div class="span10">
        <h3>Nav</h3>
        <pre class="prettyprint linenums">.nav {
  margin-bottom: 20px;
  margin-left: 0;
  list-style: none;
}</pre>
        <pre class="prettyprint linenums">.nav-tabs>li, 
.nav-pills>li {
  list-style:none;
  float: left;
}</pre>
        <pre class="prettyprint linenums">.nav-pills>li>a {
  padding-top: 8px;
  padding-bottom: 8px;
  margin-top: 2px;
  margin-bottom: 2px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  padding-right: 12px;
  padding-left: 12px;
  margin-right: 2px;
  line-height: 14px;
}</pre>
        <h3>Active</h3>
        <pre class="prettyprint linenums">.nav-pills>.active>a, 
.nav-pills>.active>a:hover, 
.nav-pills>.active>a:focus {
  color: #fff;
  background-color: #08c;
}</pre>
        <h3>Dropdown</h3>
        <pre class="prettyprint linenums">.dropdown {
  position: relative;
}</pre>
        <pre class="prettyprint linenums">.nav-pills 
.dropdown-menu {
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
}</pre>
        <pre class="prettyprint linenums">.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  background-color: #fff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0,0,0,0.2);
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  -webkit-box-shadow: 0 5px 10px rgba(0,0,0,0.2);
  -moz-box-shadow: 0 5px 10px rgba(0,0,0,0.2);
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;
}</pre>
        <pre class="prettyprint linenums">li {
  display: list-item;
  text-align: -webkit-match-parent;
  line-height:20px;
}</pre>
        <pre class="prettyprint linenums">.dropdown-menu>li>a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 20px;
  color: #333;
  white-space: nowrap;
}</pre>
      </div>
    </div>
  </div><!--/CSS-->


</section>
</div>
