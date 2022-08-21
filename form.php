<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['nameHASHED']; // Get Name value from HTML Form
        $email_id = $_POST['mailHASHED']; // Get Email Value
        $msg = $_POST['msgHASHED']; // Get Message Value
         
        $to = "hello@tazcreative.io"; // You can change here your Email
        $subject = "'$name' TAZ Creative Contact Form Mail"; // This is your subject
         
        // HTML Message Starts here
        $message ="
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Name: </strong></td>
                            <td style='width:400px'>$name</td>
                        </tr>
                        <br>
                        <tr>
                            <td style='width:150px'><strong>Email ID: </strong></td>
                            <td style='width:400px'>$email_id</td>
                        </tr>
                        <br>
                        <tr>
                            <td style='width:150px'><strong>Message: </strong></td>
                            <td style='width:400px'>$msg</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";
        // HTML Message Ends here
         
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
        // More headers
        $headers .= 'From: Admin <hello@tazcreative.io>' . "\r\n"; // Give an email id on which you want get a reply. User will get a mail from this email id
        $headers .= 'Cc: mateen@tazcreative.io' . "\r\n"; // If you want add cc
        // $headers .= 'Bcc: boss@websapex.com' . "\r\n"; // If you want add Bcc
         
        if(mail($to,$subject,$message,$headers)){
            // Message if mail has been sent
            // echo "<script>
            //         alert('Mail has been sent Successfully.');
            //     </script>";
            header("Location: thanks.html");
        }
 
        else{
            // Message if mail has been not sent
            echo "<script>
                    alert('EMAIL FAILED');
                </script>";
        }
    }
