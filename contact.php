<?php

      if (empty($_POST) === false) {
            $errors = array();
            $email = $_POST["email"];
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $message = $_POST["message"];
            $emailSubject = "New Message";  
            
            if (empty($email) === true || empty($firstName) === true || empty($message) === true)   {
                  $errors[] = "Please fill out all of the required fields";
            }
            else {
                  if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                        $errors[] = "Invalid email address, please review";
                  }

                  if (ctype_alpha($firstName) === false) {
                        $errors[] = "Name field can only contain letters";
                  }
            }
            if (empty($errors) === false) {
                  echo "<ul>";
                  foreach ($errors as $error) {
                       echo "<li>", $error, "</li>";
                  }
                  echo "</ul>";
            }
            if (empty($errors) === true) {
                  @mail("hannah@purejoybody.com", $emailSubject, $message, "From: " . $email);
                  header("Location:thank you - contact us.html");
                  exit();
            }
        }
?>