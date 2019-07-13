<?php 
    if(isset($_POST["submit"])){
        
        $from = $_POST["email"]; // this is the sender's Email address
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];

        //This is to me
        $to = "ayeliyaz@gmail.com"; // this is your Email address
        $headers = "From:" . $from;
        $subject = "Form submission";
        $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST["message"];

        mail($to,$subject,$message,$headers);

        //To the Person
        $from = $from; //this is the person's email
        $subject2 = "Copy of your form submission";
        $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST["message"];
        $headers2 = "From:" . $to;

        mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
        
        
        echo "Thank you " . $first_name . ", You successfully submit your form, you will be contacted shortly.";
        // You can also use header('Location: thank_you.php'); to redirect to another page.
        }
?>