<?php
  $thisPage = 'project-planner';
  $bodyClass = 'project-planner';
  $title = "Project Planner - Minitheory";
  $metaDesc = "Want to work with us on a project? Use our project planner!";
  include_once'header.php';
  ?>


  <div class="banner">
    <div class="row">
      <div class="twelve columns">
        <h1>Project Planner</h1>
      </div>
    </div>
  </div>
  <div class="row preamble">
    <div class="six columns centered">
      <p>Want to work with us on a project? <br/>Take some time to give us all the details below, and we’ll contact you as soon as possible!</p>
    </div>
  </div> 
  <form class="form-project-planner custom" action="project-received.php" method="post">
    <div class="row">
      <div class="twelve columns">
        <h3>Tell us who you are!</h3>
        <ul class="block-grid three-up mobile-one-up">
          <li><input type="text" placeholder="Name" name="name"/></li>
          <li><input type="text" placeholder="Email Address" name="email"/></li>
          <li><input type="text" placeholder="Contact Number" name="contact"/></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="twelve columns">
        <h3>Type of Project?</h3>
        <ul class="block-grid three-up planner-radio mobile-one-up">
          <li><input type="radio" id="radio-website" name="project-type" value="Website"><label class="button" for="radio-website">Website</label></li>
          <li><input type="radio" id="radio-applications" name="project-type" value="Applications"><label class="button" for="radio-applications">Applications</label></li>
          <li><input type="radio" id="radio-others" name="project-type" value="Others"><label class="button" for="radio-others">Others</label></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="twelve columns">
        <h3>Please describe what your organisation does</h3>
        <textarea name="organisation" placeholder="Let us know as much as you can provide about your organisation."></textarea>
      </div>
    </div>
    <div class="row">
      <div class="twelve columns">
        <h3>Brief Description</h3>
        <textarea name="description" placeholder="Let us know as much as you can provide about your project."></textarea>
      </div>
    </div>
    <div class="row">
      <div class="twelve columns">
        <h3>What can we do for you?</h3>
        <ul class="block-grid three-up planner-checkbox mobile-one-up">
          <li><input type="checkbox" id="checkbox-interface-design" name="service-type[]" value="Interface Design"><label class="button" for="checkbox-interface-design">Interface Design</label></li>
          <li><input type="checkbox" id="checkbox-product-design" name="service-type[]" value="Product Design"><label class="button" for="checkbox-product-design">Product Design</label></li>
          <li><input type="checkbox" id="checkbox-ux" name="service-type[]" value="UX"><label class="button" for="checkbox-ux">UX</label></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="twelve columns">
        <h3>Your Ideal Start Date?</h3>
        <ul class="block-grid three-up planner-date planner-checkbox mobile-one-up">
          <li>
            <select name="start-month">
              <option value="0" disabled selected>Select Month</option>
              <option value="1">January</option>
              <option value="2">February</option>
              <option value="3">March</option>
              <option value="4">April</option>
              <option value="5">May</option>
              <option value="6">June</option>
              <option value="7">July</option>
              <option value="8">August</option>
              <option value="9">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
            </select>
          </li>
          <li>
            <select name="start-year">
              <option value="0" disabled>Select Year</option>
              <option value="2013" selected>2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
            </select>
          </li>
          <li><input type="checkbox" id="checkbox-start-hurry" name="start-hurry" value="Yes in a hurry"><label class="button" for="checkbox-start-hurry">In a hurry</label></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="twelve columns">
        <h3>Your Ideal Launch Date?</h3>
        <ul class="block-grid three-up planner-date planner-checkbox mobile-one-up">
          <li>
            <select name="launch-month">
              <option value="0" disabled selected>Select Month</option>
              <option value="1">January</option>
              <option value="2">February</option>
              <option value="3">March</option>
              <option value="4">April</option>
              <option value="5">May</option>
              <option value="6">June</option>
              <option value="7">July</option>
              <option value="8">August</option>
              <option value="9">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
            </select>
          </li>
          <li>
            <select name="launch-year">
              <option value="0" disabled selected>Select Year</option>
              <option value="2013" selected>2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
            </select>
          </li>
          <li><input type="checkbox" id="checkbox-launch-hurry" name="launch-hurry" value="Yes in a hurry"><label class="button" for="checkbox-launch-hurry">In a hurry</label></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="twelve columns">
        <h3>What's Your Likely Budget?</h3>
        <ul class="block-grid four-up planner-radio mobile-one-up">
          <li><input type="radio" id="radio-budget-1" name="project-budget" value="5k - 9k"><label class="button" for="radio-budget-1">USD 5,000 - 9,000</label></li>
          <li><input type="radio" id="radio-budget-2" name="project-budget" value="10k - 14k"><label class="button" for="radio-budget-2">USD 10,000 - 14,000</label></li>
          <li><input type="radio" id="radio-budget-3" name="project-budget" value="15k - 20k"><label class="button" for="radio-budget-3">USD 15,000 - 20,000</label></li>
          <li><input type="radio" id="radio-budget-4" name="project-budget" value="over 25k"><label class="button" for="radio-budget-4">Over USD 20,000</label></li>
        </ul>
      </div>
    </div>
    <div class="row submit">
      <div class="twelve columns">
        <h3>All Done?</h3>
        <input class="button submit" type="submit" value="Submit!" />
      </div>
    </div>
  </form>

<hr/>
<?php
include_once 'footer.php';
?>
  
  
