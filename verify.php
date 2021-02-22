<?php
$email = $_POST['mail'];
;
// -----------------------------------------------
$subject = "Email Content";
mail($email, $subject);
// -----------------------------------------------
echo "sent " . $email . " this message " . $subject
echo "This api mail() is slow so it can take a while and most likly will go to spam!"
?>
   