<?php
    $email; $name; $phone; $message; $captcha;
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
    $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
    $name = $fname. " ". $lname;
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    $captcha = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING);

    if($name && $fname && $email) {

        $htmlmsg = '<html>
                    <head>
                        <title>Mayra Digital Website Contact Inquiry</title>
                    </head>
                    <body>
                        <h1>Hi! <br>Please find below contact details.</h1>
                        <table>
                            <tr>
                                <td>Name : </td>
                                <td>'.$name.'</td>
                            </tr>
                            <tr>
                                <td>Email : </td>
                                <td>'.$email.'</td>
                            </tr>
                            
                            <tr>
                                <td>Message : </td>
                                <td>'.$message.'</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Thanks,</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Admin</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </body>
                </html>';
        $to = 'vinod@mayradigital.com';

        // Subject
        
        $subject = 'EET Retail Contact Us';

        $headers = "MIME-Version: 1.0" . "\r\n";

        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: EET Retail <retail@eetfuels.com>" . "\r\n";
    
        if(mail($to, $subject, $htmlmsg, $headers))
            header("Location: speak-to-us.html?success=yes");
        else
            header("Location: speak-to-us.html?success=no");

    }
    else{
        header("Location: speak-to-us.html?success=empty");
    }
?>