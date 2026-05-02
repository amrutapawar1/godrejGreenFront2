<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = $_POST['Name'] ?? '';
    $Email = $_POST['Email'] ?? '';
    $Mob = $_POST['Mob'] ?? '';
    $message = $_POST['message'] ?? '';

    $to = "botmediadigitalmarketing@gmail.com"; //harshad.bhosale4378@gmail.com
    $subject = "New Lead Notification - Website";

    $message = "
    <html>
    <head>
    
    <title>New Lead</title></head>
    <body>
    <h3>Lead Details</h3>
    <table border='1' cellspacing='0' cellpadding='6'>
        <tr><td><strong>Name</strong></td><td>$Name</td></tr>
        <tr><td><strong>Email</strong></td><td>$Email</td></tr>
        <tr><td><strong>Contact</strong></td><td>$Mob</td></tr>
        <tr><td><strong>Message</strong></td><td>$message</td></tr>
    </table>
    </body>
    </html>
    ";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <no_reply@GodrejPtoperties.com>' . "\r\n";
$headers .= 'Cc: botmediadigitalmarketing@gmail.com' . "\r\n";

if(mail($to,$subject,$message,$headers)) //Send an Email. Return true on success or false on error


{
echo 

"<script>window.location.href='thankyou.html';</script>";
}
else
{
echo "<script>
alert('Plz Try Agian');
window.location.href='index.html'

;
</script>";
}
}
?>
