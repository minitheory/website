<!-- Pagers
================================================== -->
<div class="tab-pane" id="pagers">
<section id="pagers">
  <div class="page-header">
    <h1>Pagers</h1>
  </div>


  <ul class="nav nav-tabs" id="pagersMenu">
    <li class="active"><a href="#pagersVisual" data-toggle="tab">Visual</a></li>
    <li><a href="#pagersHTML" data-toggle="tab">HTML</a></li>
    <li><a href="#pagersCSS" data-toggle="tab">CSS</a></li>
  </ul>



  <div class="tab-content">
    <div class="tab-pane active" id="pagersVisual">
      <div class="row">    
        <div class="span4">
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
    </div><!--/Visual-->


   <div class="tab-pane" id="pagersHTML">
    <div class="row">
      <div class="span8">
        <h3>Previous / Next</h3>
        <pre class="prettyprint linenums">&lt;ul class=&quot;pager&quot;&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Previous&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Next&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>
        <h3>Older / Newer</h3>
        <pre class="prettyprint linenums">&lt;ul class=&quot;pager&quot;&gt;
  &lt;li class=&quot;previous disabled&quot;&gt;&lt;a href=&quot;#&quot;&gt;&amp;#8592; Older&lt;/a&gt;&lt;/li&gt;
  &lt;li class=&quot;next&quot;&gt;&lt;a href=&quot;#&quot;&gt;Newer &amp;#8594;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>
      </div>
    </div>
  </div><!--/html-->


    <div class="tab-pane" id="pagersCSS">
    <div class="row">
      <div class="span8">
        <h3>Pager</h3>
        <pre class="prettyprint linenums">.pager {
  margin: 20px 0;
  text-align: center;
  list-style: none;
}</pre>
        <pre class="prettyprint linenums">.pager li {
  display: inline;
}</pre>
        <pre class="prettyprint linenums">.pager li>a, 
.pager li>span {
  display: inline-block;
  padding: 5px 14px;
  background-color: #fff;
  border: 1px solid #ddd;
  -webkit-border-radius: 15px;
  -moz-border-radius: 15px;
  border-radius: 15px;
}</pre>
        <h3>Pager Disabled</h3>
        <pre class="prettyprint linenums">.pager .disabled>a, 
.pager .disabled>a:hover, 
.pager .disabled>a:focus, 
.pager .disabled>span {
  color: #999;
  cursor: default;
  background-color: #fff;
}</pre>
      </div>
    </div>
  </div><!--/CSS-->


  

</section>
</div>
