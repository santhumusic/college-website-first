<?php
//PHP code to sent contact form to both client and owner
if (isset($_POST['submit'])) { //Check if user enter data 
    $mailto= "santhoshpodili874@gmail.com"; //My email address
    $from = $_POST['email']; //Senders email address
    $name = $_POST['name']; //User name
    $subject2 = "Your Message Submitted Successfully | HMA WebDesign"; //This is for client
    $message="Client Name: ". $name. "Wrote the Following Message". "/n/n". $_POST['message'];
    $message2 = "Dear ". $name. "/n/n" "Thank You for contacting us! We'll get back to you shortly"; //Thi
    $headers "From: ". $from; // User entered email address
    $headers2 = "From: ". Smailto; //This will receive to client
    $result = mail (Smailto, $subject, $message, $headers); //send email to website owner
    $result2 = mail($from, $subject2, $message2, $headers2); //send email to User as well
    if ($result) { //if email is submitted successfullysuccessfully
        echo '<script type="text/javascript">alert("Message was sent Successfully,We will contact you sortly!") </script>';
} else {
    echo '<script type="text/javascript">alert("Submission failed! Try gain ") </script>';
}
