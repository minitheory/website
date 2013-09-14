<?php
  $thisPage = 'project-planner';
  $bodyClass = 'project-planner';
  $title = "Project Received - Minitheory";
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
    <div class="eight columns centered">
      <h2 class="title">Project Plan Submitted</h2>
    </div>
  </div> 
  
  <?php

  // email contents
  $name = $_POST['name'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];

  $projectType = $_POST['project-type'];
  $organisation = $_POST['organisation'];
  $description = $_POST['description'];
  $serviceTypeArray = $_POST['service-type'];
  $N = count($serviceTypeArray);
  for($i=0; $i<$N; $i++){
    $serviceType .= $serviceTypeArray[$i]."; ";
  }

  $startMonth = $_POST['start-month'];
  $startYear = $_POST['start-year'];
  $startHurry = $_POST['start-hurry'];

  $launchMonth = $_POST['launch-month'];
  $launchYear = $_POST['launch-year'];
  $launchHurry = $_POST['launch-hurry'];

  $projectBudget = $_POST['project-budget'];
  
  //sending
  $email_to = "hi@minitheory.com";
  $email_subject = "New project plan received";
  $email_message = "New project plan received via project planner:.\n\n";
  function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
  }
  $email_message .= "Name: ".clean_string($name)."\n";
  $email_message .= "Email: ".clean_string($email)."\n";
  $email_message .= "Contact: ".clean_string($contact)."\n";
  $email_message .= "Project Type: ".$projectType."\n";
  $email_message .= "Organisation: ".clean_string($organisation)."\n";
  $email_message .= "Description: ".clean_string($description)."\n";
  $email_message .= "What you need us to do: ".clean_string($serviceType)."\n";
  $email_message .= "Start Month: ".clean_string($startMonth)."\n";
  $email_message .= "Start Year: ".clean_string($startYear)."\n";
  $email_message .= "In a hurry?: ".clean_string($startHurry)."\n";
  $email_message .= "Launch Month: ".clean_string($launchMonth)."\n";
  $email_message .= "Launch Year: ".clean_string($launchYear)."\n";
  $email_message .= "In a hurry?: ".clean_string($launchHurry)."\n";
  $email_message .= "Likely Budget: ".clean_string($projectBudget)."\n";

  // create email headers
  $headers = 'From: '.$email."\r\n".
  'Reply-To: '.$email."\r\n" .
  'X-Mailer: PHP/' . phpversion();
  if(mail($email_to, $email_subject, $email_message, $headers)){
    //echo("</p>message sent</p>");
  }
  else {
    //echo('<p>message phailed</p>');
  }
  ?>
  <div class="row">
    <div class="eight columns centered">
      <p class="text-centered">Thank you for contacting us. We will review your requirements and get in touch with you very soon.</p>
    </div>
  </div>




<hr/>
<?php
include_once 'footer.php';
?>
  
  
