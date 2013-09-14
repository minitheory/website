<!-- Pagination
================================================== -->
<div class="tab-pane" id="pagination">
<section id="pagination">
  <div class="page-header">
    <h1>Pagination</h1>
  </div>


  <ul class="nav nav-tabs" id="paginationMenu">
    <li class="active"><a href="#paginationVisual" data-toggle="tab">Visual</a></li>
    <li><a href="#paginationHTML" data-toggle="tab">HTML</a></li>
    <li><a href="#paginationCSS" data-toggle="tab">CSS</a></li>
  </ul>



  <div class="tab-content">
    <div class="tab-pane active" id="paginationVisual">
      <div class="row">
    <div class="span10">
      <div class="pagination">
        <ul>
          <li><a href="#">&larr;</a></li>
          <li class="active"><a href="#">10</a></li>
          <li class="disabled"><a href="#">...</a></li>
          <li><a href="#">20</a></li>
          <li><a href="#">&rarr;</a></li>
        </ul>
      </div>
      <div class="pagination">
        <ul>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
        </ul>
      </div>
    </div>
  </div>
    </div><!--/Visual-->


   <div class="tab-pane" id="paginationHTML">
    <div class="row">
      <div class="span8">
        <h3>Truncated</h3>
        <pre class="prettyprint linenums">&lt;div class=&quot;pagination&quot;&gt;
  &lt;ul&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&amp;#8592;&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;10&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;disabled&quot;&gt;&lt;a href=&quot;#&quot;&gt;...&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;20&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&amp;#8594;&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</pre>
        <h3>Full Length</h3>
        <pre class="prettyprint linenums">&lt;div class=&quot;pagination&quot;&gt;
  &lt;ul&gt;
    &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</pre>
      </div>
    </div>
  </div><!--/html-->


    <div class="tab-pane" id="paginationCSS">
    <div class="row">
      <div class="span8">
        <h3>Pagination</h3>
        <pre class="prettyprint linenums">.pagination ul {
  display: inline-block;
  margin-bottom: 0;
  margin-left: 0;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.05);
  -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.05);
  box-shadow: 0 1px 2px rgba(0,0,0,0.05);
}</pre>
        <pre class="prettyprint linenums">.pagination ul>li {
  display: inline;
}</pre>
        <pre class="prettyprint linenums">.pagination ul>li>a, .pagination ul>li>span {
  float: left;
  padding: 4px 12px;
  line-height: 20px;
  text-decoration: none;
  background-color: #fff;
  border: 1px solid #ddd;
  border-left-width: 0;
}</pre>
        <h3>Active State</h3>
        <pre class="prettyprint linenums">.pagination ul>.active>a, 
.pagination ul>.active>span {
  color: #999;
  cursor: default;
}</pre>
        <h3>Disabled State</h3>
        <pre class="prettyprint linenums">.pagination ul>.disabled>span, .pagination ul>.disabled>a, .pagination ul>.disabled>a:hover, .pagination ul>.disabled>a:focus {
  color: #999;
  cursor: default;
  background-color: transparent;
}</pre>
      </div>
    </div>
  </div><!--/CSS-->



  

</section>
</div>
