<!-- Forms
================================================== -->
<div class="tab-pane" id="formsection">
<section id="forms">
  <div class="page-header">
    <h1>Forms</h1>
  </div>

  <ul class="nav nav-tabs" id="formsMenu">
    <li class="active"><a href="#formsVisual" data-toggle="tab">Visual</a></li>
    <li><a href="#formsHTML" data-toggle="tab">HTML</a></li>
    <li><a href="#formsCSS" data-toggle="tab">CSS</a></li>
  </ul>

  <div class="tab-content">
    <div class="tab-pane active" id="formsVisual">
      <div class="row">
      <div class="span10">

        <form class="well form-search">
          <input type="text" class="input-medium search-query">
          <button type="submit" class="btn">Search</button>
        </form>

          <form class="well form-search">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <button type="submit" class="btn">Go</button>
          </form>


        <form class="form-horizontal well">
          <fieldset>
            <legend>Form Elements</legend>
            <div class="control-group">
              <label class="control-label" for="input01">Text input</label>
              <div class="controls">
                <input type="text" class="input-xlarge" id="input01">
                <p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="optionsCheckbox">Checkbox</label>
              <div class="controls">
                <label class="checkbox">
                  <input type="checkbox" id="optionsCheckbox" value="option1">
                  Option one is this and that&mdash;be sure to include why it's great
                </label>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="select01">Select list</label>
              <div class="controls">
                <select id="select01">
                  <option>something</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="multiSelect">Multicon-select</label>
              <div class="controls">
                <select multiple="multiple" id="multiSelect">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="fileInput">File input</label>
              <div class="controls">
                <input class="input-file" id="fileInput" type="file">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="textarea">Textarea</label>
              <div class="controls">
                <textarea class="input-xlarge" id="textarea" rows="3"></textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="focusedInput">Focused input</label>
              <div class="controls">
                <input class="input-xlarge focused" id="focusedInput" type="text" value="This is focused…">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Uneditable input</label>
              <div class="controls">
                <span class="input-xlarge uneditable-input">Some value here</span>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="disabledInput">Disabled input</label>
              <div class="controls">
                <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="Disabled input here…" disabled>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="optionsCheckbox2">Disabled checkbox</label>
              <div class="controls">
                <label class="checkbox">
                  <input type="checkbox" id="optionsCheckbox2" value="option1" disabled>
                  This is a disabled checkbox
                </label>
              </div>
            </div>
            <div class="control-group warning">
              <label class="control-label" for="inputWarning">Input with warning</label>
              <div class="controls">
                <input type="text" id="inputWarning">
                <span class="help-inline">Something may have gone wrong</span>
              </div>
            </div>
            <div class="control-group error">
              <label class="control-label" for="inputError">Input with error</label>
              <div class="controls">
                <input type="text" id="inputError">
                <span class="help-inline">Please correct the error</span>
              </div>
            </div>
            <div class="control-group success">
              <label class="control-label" for="inputSuccess">Input with success</label>
              <div class="controls">
                <input type="text" id="inputSuccess">
                <span class="help-inline">Woohoo!</span>
              </div>
            </div>
            <div class="control-group info">
              <label class="control-label" for="selectError">Select with info</label>
              <div class="controls">
                <select id="selectError">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
                <span class="help-inline">Woohoo!</span>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    </div><!--/Visual-->


    <div class="tab-pane" id="formsHTML">
      <div class="row">
        <div class="span10">
          <h3>Text Input</h3>
          <pre class="prettyprint linenums">&lt;input type=&quot;text&quot; class=&quot;input-xlarge&quot; id=&quot;input01&quot;&gt;</pre>
          <h3>Check Box</h3>
          <pre class="prettyprint linenums">&lt;input type=&quot;checkbox&quot; id=&quot;optionsCheckbox&quot; value=&quot;option1&quot;&gt;</pre>
          <h3>Select List</h3>
          <pre class="prettyprint linenums">&lt;select id=&quot;select01&quot;&gt;
  &lt;option&gt;something&lt;/option&gt;
  &lt;option&gt;2&lt;/option&gt;
  &lt;option&gt;3&lt;/option&gt;
  &lt;option&gt;4&lt;/option&gt;
  &lt;option&gt;5&lt;/option&gt;
&lt;/select&gt;</pre>
          <h3>Multicon Select</h3>
          <pre class="prettyprint linenums">&lt;select multiple=&quot;multiple&quot; id=&quot;multiSelect&quot;&gt;
  &lt;option&gt;1&lt;/option&gt;
  &lt;option&gt;2&lt;/option&gt;
  &lt;option&gt;3&lt;/option&gt;
  &lt;option&gt;4&lt;/option&gt;
  &lt;option&gt;5&lt;/option&gt;
&lt;/select&gt;</pre>
          <h3>File Input</h3>
          <pre class="prettyprint linenums">&lt;input class=&quot;input-file&quot; id=&quot;fileInput&quot; type=&quot;file&quot;&gt;</pre>
          <h3>Text Area</h3>
          <pre class="prettyprint linenums">&lt;textarea class=&quot;input-xlarge&quot; id=&quot;textarea&quot; rows=&quot;3&quot;&gt;&lt;/textarea&gt;</pre>
          <h3>Focused Input</h3>
          <pre class="prettyprint linenums">&lt;input class=&quot;input-xlarge focused&quot; id=&quot;focusedInput&quot; type=&quot;text&quot; value=&quot;This is focused…&quot;&gt;</pre>
          <h3>Uneditable Input</h3>
          <pre class="prettyprint linenums">&lt;span class=&quot;input-xlarge uneditable-input&quot;&gt;Some value here&lt;/span&gt;</pre>
          <h3>Disabled Input</h3>
          <pre class="prettyprint linenums">&lt;input class=&quot;input-xlarge disabled&quot; id=&quot;disabledInput&quot; type=&quot;text&quot; placeholder=&quot;Disabled input here…&quot; disabled&gt;</pre>
          <h3>Disabled Checkbox</h3>
          <pre class="prettyprint linenums">&lt;input type=&quot;checkbox&quot; id=&quot;optionsCheckbox2&quot; value=&quot;option1&quot; disabled&gt;</pre>
          <h3>Input With Warning</h3>
          <pre class="prettyprint linenums">&lt;input type=&quot;text&quot; id=&quot;inputWarning&quot;&gt;</pre>
          <h3>Input With Error</h3>
          <pre class="prettyprint linenums">&lt;input type=&quot;text&quot; id=&quot;inputError&quot;&gt;</pre>
          <h3>Input With Success</h3>
          <pre class="prettyprint linenums">&lt;input type=&quot;text&quot; id=&quot;inputSuccess&quot;&gt;</pre>
          <h3>Select With Info</h3>
          <pre class="prettyprint linenums">&lt;select id=&quot;selectError&quot;&gt;
  &lt;option&gt;1&lt;/option&gt;
  &lt;option&gt;2&lt;/option&gt;
  &lt;option&gt;3&lt;/option&gt;
  &lt;option&gt;4&lt;/option&gt;
  &lt;option&gt;5&lt;/option&gt;
&lt;/select&gt;</pre>
        </div>
      </div>
    </div><!--/HTML-->


    <div class="tab-pane" id="formsCSS">
      <div class="row">
        <div class="span10">
          <h3>Text Input</h3>
          <pre class="prettyprint linenums">textarea, 
input[type="text"], 
input[type="password"], 
input[type="datetime"], 
input[type="datetime-local"], 
input[type="date"], 
input[type="month"], 
input[type="time"], 
input[type="week"], 
input[type="number"], 
input[type="email"], 
input[type="url"], 
input[type="search"], 
input[type="tel"], 
input[type="color"], 
.uneditable-input {
  display: inline-block;
  height: 20px;
  padding: 4px 6px;
  margin-bottom: 10px;
  font-size: 14px;
  line-height: 20px;
  color: #555;
  vertical-align: middle;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}</pre>
          <h3>Focused Input</h3>
          <pre class="prettyprint linenums">input[type="text"], 
input[type="password"], 
input[type="datetime"], 
input[type="datetime-local"], 
input[type="date"], 
input[type="month"], 
input[type="time"], 
input[type="week"], 
input[type="number"], 
input[type="email"], 
input[type="url"], 
input[type="search"], 
input[type="tel"], 
input[type="color"], 
.uneditable-input {
background-color: #fff;
border: 1px solid #ccc;
-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
-webkit-transition: border linear .2s,box-shadow linear .2s;
-moz-transition: border linear .2s,box-shadow linear .2s;
-o-transition: border linear .2s,box-shadow linear .2s;
transition: border linear .2s,box-shadow linear .2s;
}</pre>
          <h3>Disabled Fields</h3>
          <pre class="prettyprint linenums">input[disabled], 
select[disabled], 
textarea[disabled], 
input[readonly], 
select[readonly], 
textarea[readonly] {
  cursor: not-allowed;
  background-color: #eee;
}</pre>
          <h3>Checkbox</h3>
          <pre class="prettyprint linenums">.checkbox {
  min-height: 20px;
  padding-left: 20px;
}</pre>
          <h3>Input With Warning</h3>
          <pre class="prettyprint linenums">.control-group.warning input, 
.control-group.warning select, 
.control-group.warning textarea {
  border-color: #c09853;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
  -moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
  box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
}</pre>
          <h3>Input with Error</h3>
          <pre class="prettyprint linenums">.control-group.error input, 
.control-group.error select, 
.control-group.error textarea {
  border-color: #b94a48;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
  -moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
  box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
}</pre>
          <h3>Input with Success</h3>
          <pre class="prettyprint linenums">.control-group.success input, 
.control-group.success select, 
.control-group.success textarea {
  border-color: #468847;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
  -moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
  box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
}</pre>
          <h3>Select With Info</h3>
          <pre class="prettyprint linenums">.control-group.info input, 
.control-group.info select, 
.control-group.info textarea {
  border-color: #3a87ad;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
  -moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
  box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
}</pre>
        </div>
      </div>
    </div><!--/CSS-->
  </div><!--/Forms Tab-->

  

</section>
</div>


