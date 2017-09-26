<?php

      if (empty($_POST) === false) {
            $errors = array();
            $email = $_POST["email"];
            $emailSubject = "New Bulk Order";
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $tel = $_POST["tel"];  
            $address = $_POST["address"];
            $event = $_POST["event"];
            $eventDate = $_POST["eventDate"];
            $deliveryDate = $_POST["deliveryDate"];
            $peppermintLavender = $_POST["peppermintLavender"];
            $thieves = $_POST["thieves"];
            $lemongrass = $_POST["lemongrass"];
            $tripleMint = $_POST["tripleMint"];
            $vanilla = $_POST["vanilla"];
            $coconutMango = $_POST["coconutMango"];
            $lavenderTangerine = $_POST["lavenderTangerine"];
            $strawberry = $_POST["strawberry"];
            $freeClear = $_POST["freeClear"];
            $tintedRose = $_POST["tintedRose"];
            $tintedGrapefruit = $_POST["tintedGrapefruit"];
            $coffeeTalk = $_POST["coffeeTalk"];
            $customScent = $_POST["customScent"];
            $theme = $_POST["theme"];
            $tubeColor = $_POST["tubeColor"]; 
            $labelColor = $_POST["labelColor"];
            $eventLogo = $_POST["eventLogo"];
            $eventImage = $_POST["eventImage"];
            $font1 = $_POST["font1"];
            $font2 = $_POST["font2"];
            $customFont = $_POST["customFont"];
            $color1 = $_POST["color1"];
            $color2 = $_POST["color2"];
            $color3 = $_POST["color3"];
            $emailMessage = "New Order Details\n\n\n"."Customer Info"."\n\n"."First Name: ".$firstName."\n"."Last Name: ".$lastName."\n"."Email: ".$email."\n"."Telephone: ".$tel."\n"."Shipping Address: ".$address."\n\n"."Event Info"."\n\n"."Event Type: ".$event."\n"."Event Date: ".$eventDate."\n"."Requested Delivery Date: ".$deliveryDate."\n"."Event Theme: ".$theme."\n\n"."Lip Balm Selection"."\n\n"."Peppermint Lavender: ".$peppermintLavender."\n"."Thieves: ".$thieves."\n"."Lemongrass: ".$lemongrass."\n"."Triple Mint: ".$tripleMint."\n"."Vanilla: ".$vanilla."\n"."Coconut Mango: ".$coconutMango."\n"."lavenderTangerine: ".$lavenderTangerine."\n"."Strawberry: ".$strawberry."\n"."Free & Clear: ".$freeClear."\n"."Tinted Rose: ".$tintedRose."\n"."Tinted Grapefruit: ".$tintedGrapefruit."\n"."Coffee Talk: ".$coffeeTalk."\n"."Custom Scent Request: ".$customScent."\n\n"."Customization"."\n\n"."Tube Color: ".$tubeColor."\n"."Label Color: ".$labelColor."\n"."Do You Have An Event Logo? ".$eventLogo."\n"."Event Image: ".$eventImage."\n"."Font Selection 1: ".$font1."\n"."Font Selection 2: ".$font2."\n"."Other Font: ".$customFont."\n"."Color Selection 1: ".$color1."\n"."Color Selection 2: ".$color2."\n"."Color Selection 3: ".$color3."\n";
            if (empty($email) === true || empty($tel) === true || empty($address) === true || empty($event) === true || empty($eventDate) === true || empty($deliveryDate) === true)   {
                  $errors[] = "Please fill out all of the required fields";
            }
            else {
                  if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                        $errors[] = "Invalid email address, please review";
                  }

                  if (ctype_alpha($firstName) === false || ctype_alpha($lastName) === false) {
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
                  @mail("hannah@purejoybody.com", $emailSubject, $emailMessage, "From: " . $email);
                  header("Location:thank you - new order.html");
                  exit();
            }
        }
?>