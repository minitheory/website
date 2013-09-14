<!-- Typography
================================================== -->
<div class="tab-pane active" id="typography">
<section id="typography">
  <div class="page-header">
    <h1>Typography</h1>
  </div>

  <ul class="nav nav-tabs" id="typographyMenu">
    <li class="active"><a href="#typoVisual" data-toggle="tab">Visual</a></li>
    <li><a href="#typoHTML" data-toggle="tab">HTML</a></li>
    <li><a href="#typoCSS" data-toggle="tab">CSS</a></li>
  </ul>


  <div class="tab-content">
    <div class="tab-pane active" id="typoVisual">
      <div class="row">
        <div class="span4">
          <div class="well">
            <h1>h1. Heading 1</h1>
            <h2>h2. Heading 2</h2>
            <h3>h3. Heading 3</h3>
            <h4>h4. Heading 4</h4>
            <h5>h5. Heading 5</h5>
            <h6>h6. Heading 6</h6>
          </div>
        </div>

        <div class="span4">
            <h3>Example body text</h3>
            <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>
        </div>

        <div class="span4">
            <h3>Example addresses</h3>
            <address>
              <strong>Twitter, Inc.</strong><br>
              795 Folsom Ave, Suite 600<br>
              San Francisco, CA 94107<br>
              <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>
            <address>
              <strong>Full Name</strong><br>
              <a href="mailto:#">first.last@gmail.com</a>
            </address>
        </div>

      </div>
        
      <div class="row">
        <div class="span4">
          <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
          </blockquote>
        </div>
        <div class="span4">
          <blockquote class="pull-right">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
          </blockquote>
        </div>
      </div>
    </div><!--/visual-->


    <div class="tab-pane" id="typoHTML">
      <div class="row">
        <div class="span8">
          <h3>Headers</h3>
          <pre class="prettyprint linenums">&lt;h1&gt;Header 1&lt;h1&gt;
&lt;h2&gt;Header 1&lt;/h2&gt;
&lt;h3&gt;Header 1&lt;/h3&gt;
&lt;h4&gt;Header 1&lt;/h4&gt;
&lt;h5&gt;Header 1&lt;/h5&gt;
&lt;h6&gt;Header 1&lt;/h6&gt;</pre>
          <h3>Paragraph</h3>
          <pre class="prettyprint linenums">&lt;p&gt;Paragraph Text&lt;/p&gt;</pre>
          <h3>Block Quote</h3>
          <pre class="prettyprint linenums">&lt;blockquote class=&quot;pull-right&quot;&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
  &lt;small&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;&lt;/small&gt;
&lt;/blockquote&gt;</pre>
          <h3>Address</h3>
          <pre class="prettyprint linenums">&lt;address&gt;
  &lt;strong&gt;Twitter, Inc.&lt;/strong&gt;&lt;br&gt;
  795 Folsom Ave, Suite 600&lt;br&gt;
  San Francisco, CA 94107&lt;br&gt;
  &lt;abbr title=&quot;Phone&quot;&gt;P:&lt;/abbr&gt; (123) 456-7890
&lt;/address&gt;</pre>
        </div>
      </div>
      <br/>
    </div><!--/html-->
    
    <div class="tab-pane" id="typoCSS">
      <div class="row">
        <div class="span8">
          <h3>Font Family</h3>
          <pre class="prettyprint linenums">body { font-family:"Helvetica Neue",Helvetica,Arial,sans-serif; }</pre>
          <h3>Headers</h3>
          <pre class="prettyprint linenums lang-cs">.h1 { font-size:38.5px; line-height:40px;}
.h2 { font-size:31.5px; line-height:40px;}
.h3 { font-size:24.5px; line-height:40pxx;}
.h4 { font-size:17.5px; line-height:40px;}
.h5 { font-size:14px; line-height:40px;}
.h6 { font-size:11.9px; line-height:40px;}</pre>
        <h3>Paragraph</h3>
        <pre class="prettyprint linenums">p { margin: 0 0 10px; font-size:14px; }</pre>
        <h3>Block Quote</h3>
        <pre class="prettyprint linenums">blockquote {
  padding: 0 0 0 15px;
  margin: 0 0 20px;
  border-left: 5px solid #eee;
}</pre>
        <pre class="prettyprint linenums">blockquote p {
  margin-bottom: 0;
  font-size: 17.5px;
  font-weight: 300;
  line-height: 1.25;
}</pre>
        <pre class="prettyprint linenums">blockquote small {
  display: block;
  line-height: 20px;
  color: #999;
}</pre>
        <h3>Address</h3>
        <pre class="prettyprint linenums">address {
  display: block;
  margin-bottom: 20px;
  font-style: normal;
  line-height: 20px;
}</pre>
        </div>
      </div>
    </div><!--/css-->
  </div><!--/tab-content-->

</section>
</div><!--/typography Tab-->