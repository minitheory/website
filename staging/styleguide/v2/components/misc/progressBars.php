<!-- Miscellaneous
================================================== -->
<div class="tab-pane" id="progressBars">
<section id="progressBars">
  <div class="page-header">
    <h1>Progress Bars</h1>
  </div>

  <ul class="nav nav-tabs" id="progressBarMenu">
    <li class="active"><a href="#progressBarVisual" data-toggle="tab">Visual</a></li>
    <li><a href="#progressBarHTML" data-toggle="tab">HTML</a></li>
    <li><a href="#progressBarCSS" data-toggle="tab">CSS</a></li>
  </ul>



  <div class="tab-content">
    <div class="tab-pane active" id="progressBarVisual">
      <h4>Solid Progress Bar</h4>
      <hr>
      <div class="row">
        <div class="span10">
          <h5>Solid</h5>
          <div class="progress">
            <div class="bar" style="width: 10%;"></div>
          </div>
          <h5>Info</h5>
          <div class="progress progress-info">
            <div class="bar" style="width: 20%"></div>
          </div>
          <h5>Success</h5>
          <div class="progress progress-success">
            <div class="bar" style="width: 40%"></div>
          </div>
          <h5>Warning</h5>
          <div class="progress progress-warning">
            <div class="bar" style="width: 60%"></div>
          </div>
          <h5>Danger</h5>
          <div class="progress progress-danger">
            <div class="bar" style="width: 80%"></div>
          </div>
        </div>
      </div>


      <h4>Striped Progress Bar</h4>
      <hr>
      <div class="row">
        <div class="span10">
          <h5>Info</h5>
          <div class="progress progress-info progress-striped">
            <div class="bar" style="width: 20%"></div>
          </div>
          <h5>Success</h5>
          <div class="progress progress-success progress-striped">
            <div class="bar" style="width: 40%"></div>
          </div>
          <h5>Warning</h5>
          <div class="progress progress-warning progress-striped">
            <div class="bar" style="width: 60%"></div>
          </div>
          <h5>Danger</h5>
          <div class="progress progress-danger progress-striped">
            <div class="bar" style="width: 80%"></div>
          </div>
        </div>
      </div>
      

      <h4>Animated Striped Progress Bar</h4>
      <hr>
      <div class="row">
        <div class="span10">
          <h5>Info</h5>
          <div class="progress progress-info progress-striped active">
            <div class="bar" style="width: 10%"></div>
          </div>
          <h5>Success</h5>
          <div class="progress progress-success progress-striped active">
            <div class="bar" style="width: 20%"></div>
          </div>
          <h5>Warning</h5>
          <div class="progress progress-warning progress-striped active">
            <div class="bar" style="width: 40%"></div>
          </div>
          <h5>Danger</h5>
          <div class="progress progress-danger progress-striped active">
            <div class="bar" style="width: 60%"></div>
          </div>
        </div>
      </div>
    </div><!--/Visual-->


   <div class="tab-pane" id="progressBarHTML">
    <div class="row">
      <div class="span10">
        <h3>Solid Progress Bar</h3>
        <pre class="prettyprint linenums">&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;bar&quot; style=&quot;width: 60%;&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</pre>
        <h3>Striped Progress Bar</h3>
        <pre class="prettyprint linenums">&lt;div class=&quot;progress progress-info progress-striped&quot;&gt;
  &lt;div class=&quot;bar&quot; style=&quot;width: 20%;&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</pre>
        <h3>Animated Progress Bar</h3>
        <pre class="prettyprint linenums">&lt;div class=&quot;progress progress-danger progress-striped active&quot;&gt;
  &lt;div class=&quot;bar&quot; style=&quot;width: 45%&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</pre>
      </div>
    </div>
  </div><!--/html-->


    <div class="tab-pane" id="progressBarCSS">
    <div class="row">
      <div class="span10">
        <h3>Solid Progress Bar</h3>
        <pre class="prettyprint linenums">progress {
  height: 20px;
  margin-bottom: 20px;
  overflow: hidden;
  background-color: #f7f7f7;
  background-image: -moz-linear-gradient(top,#f5f5f5,#f9f9f9);
  background-image: -webkit-gradient(linear,0 0,0 100%,from(#f5f5f5),to(#f9f9f9));
  background-image: -webkit-linear-gradient(top,#f5f5f5,#f9f9f9);
  background-image: -o-linear-gradient(top,#f5f5f5,#f9f9f9);
  background-image: linear-gradient(to bottom,#f5f5f5,#f9f9f9);
  background-repeat: repeat-x;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff5f5f5',endColorstr='#fff9f9f9',GradientType=0);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}</pre>
        <pre class="prettyprint linenums">.progress .bar {
  float: left;
  width: 0;
  height: 100%;
  font-size: 12px;
  color: #fff;
  text-align: center;
  text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
  background-color: #0e90d2;
  background-image: -moz-linear-gradient(top,#149bdf,#0480be);
  background-image: -webkit-gradient(linear,0 0,0 100%,from(#149bdf),to(#0480be));
  background-image: -webkit-linear-gradient(top,#149bdf,#0480be);
  background-image: -o-linear-gradient(top,#149bdf,#0480be);
  background-image: linear-gradient(to bottom,#149bdf,#0480be);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff149bdf',endColorstr='#ff0480be',GradientType=0);
  -webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,0.15);
  -moz-box-shadow: inset 0 -1px 0 rgba(0,0,0,0.15);
  box-shadow: inset 0 -1px 0 rgba(0,0,0,0.15);
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: width .6s ease;
  -moz-transition: width .6s ease;
  -o-transition: width .6s ease;
  transition: width .6s ease;
}</pre>
        <h3>Striped Progress Bar</h3>
        <pre class="prettyprint linenums">.progress-info.progress-striped .bar,
.progress-striped .bar-info {
  background-color: #5bc0de;
  background-image: -webkit-gradient(linear,0 100%,100% 0,color-stop(0.25,rgba(255,255,255,0.15)),color-stop(0.25,transparent),color-stop(0.5,transparent),color-stop(0.5,rgba(255,255,255,0.15)),color-stop(0.75,rgba(255,255,255,0.15)),color-stop(0.75,transparent),to(transparent));
  background-image: -webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
  background-image: -moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
  background-image: -o-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
  background-image: linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
}</pre>
        <h3>Animated Progress Bar</h3>
        <pre class="prettyprint linenums">.progress-info.progress-striped .bar,
.progress-striped .bar-info {
  background-color: #5bc0de;
  background-image: -webkit-gradient(linear,0 100%,100% 0,color-stop(0.25,rgba(255,255,255,0.15)),color-stop(0.25,transparent),color-stop(0.5,transparent),color-stop(0.5,rgba(255,255,255,0.15)),color-stop(0.75,rgba(255,255,255,0.15)),color-stop(0.75,transparent),to(transparent));
  background-image: -webkit-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
  background-image: -moz-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
  background-image: -o-linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
  background-image: linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
}</pre>
        <pre class="prettyprint linenums">.progress.active .bar {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
  -moz-animation: progress-bar-stripes 2s linear infinite;
  -ms-animation: progress-bar-stripes 2s linear infinite;
  -o-animation: progress-bar-stripes 2s linear infinite;
  animation: progress-bar-stripes 2s linear infinite;
}</pre>
        <pre class="prettyprint linenums"></pre>
      </div>
    </div>
  </div><!--/CSS-->





  


</section>
</div>
