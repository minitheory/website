<!-- Tables
================================================== -->
<div class="tab-pane" id="tables">
<section id="tables">
  <div class="page-header">
    <h1>Tables</h1>
  </div>

  <ul class="nav nav-tabs" id="tablesMenu">
    <li class="active"><a href="#tablesVisual" data-toggle="tab">Visual</a></li>
    <li><a href="#tablesHTML" data-toggle="tab">HTML</a></li>
    <li><a href="#tablesCSS" data-toggle="tab">CSS</a></li>
  </ul>

  <div class="tab-content">
    <div class="tab-pane active" id="tablesVisual">
      <table class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
    </div><!--/tables Visual-->
    <div class="tab-pane" id="tablesHTML">
      <div class="row">
        <div class="span8">
          <h3>Table</h3>
          <pre class="prettyprint linenums">&lt;table class=&quot;table table-bordered table-striped table-hover&quot;&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;#&lt;/th&gt;
      &lt;th&gt;First Name&lt;/th&gt;
      &lt;th&gt;Last Name&lt;/th&gt;
      &lt;th&gt;Username&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;1&lt;/td&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;2&lt;/td&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;3&lt;/td&gt;
      &lt;td&gt;Larry&lt;/td&gt;
      &lt;td&gt;the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</pre>
        </div>
      </div>
    </div><!--/HTML-->

    <div class="tab-pane" id="tablesCSS">
      <div class="row">
        <div class="span8">
          <h3>Table</h3>
          <pre class="prettyprint linenums">table {
  max-width: 100%;
  background-color: transparent;
  border-collapse: collapse;
  border-spacing: 0;
}</pre>
          <h3>Table Bordered</h3>
          <pre class="prettyprint linenums">.table-bordered {
  border: 1px solid #ddd;
  border-collapse: separate;
  border-left: 0;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}</pre>
          <h3>Table Striped</h3>
          <pre class="prettyprint linenums">.table-striped tbody > tr:nth-child(odd) > td,
.table-striped tbody > tr:nth-child(odd) > th {
  background-color: #f9f9f9;
}</pre>
        </div>
      </div>
    </div><!--/CSS-->

  </div><!--/tablesMenu-->


  
</section>
</div>
