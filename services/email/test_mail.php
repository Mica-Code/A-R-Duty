<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PhpMailer/vendor/autoload.php';

// $mail = new PHPMailer(true);

// try {
//     $mail->isSMTP();
//     $mail->Host       = 'mail.barnabernafoundation.org';
//     $mail->SMTPAuth   = true;
//     $mail->Username   = 'test@barnabernafoundation.org';
//     $mail->Password   = '2dpDz5RAjYmmidT';
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//     $mail->Port       = 587;
//     $mail->SMTPOptions = [
//         'ssl' => [
//             'verify_peer' => false,
//             'verify_peer_name' => false,
//             'allow_self_signed' => true
//         ]
//     ];
//     $mail->Timeout    = 15;
//     $mail->SMTPDebug  = 2;
//     $mail->Debugoutput = 'html';

//     $mail->setFrom('test@barnabernafoundation.org', 'Test Sender');
//     $mail->addAddress('soniasamson72@gmail.com', 'Test Receiver');

//     $mail->isHTML(true);
//     $mail->Subject = 'Test Email';
//     $mail->Body    = '<h1>This is a test email</h1>';
//     $mail->AltBody = 'This is a test email';

//     $mail->send();
//     echo "Email sent successfully!";
// } catch (Exception $e) {
//     echo "Mailer Error: " . $mail->ErrorInfo;
// }


function sendEmail($to, $toName, $subject, $htmlBody, $altBody = '') {
    $mail = new PHPMailer(true);

    try {
        // SMTP settings for your webmail
        $mail->isSMTP();
        $mail->Host       = 'mail.barnabernafoundation.org'; // your webmail SMTP host
        $mail->SMTPAuth   = true;
        $mail->Username   = 'test@barnabernafoundation.org';
        $mail->Password   = '2dpDz5RAjYmmidT';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ]
        ];

        $mail->Timeout    = 15;
        // $mail->SMTPDebug  = 2;
        // $mail->Debugoutput = 'html';

        // Sender and recipient
        $mail->setFrom('test@barnabernafoundation.org', 'A&R Duties');
        $mail->addAddress($to, $toName);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $htmlBody;
        $mail->AltBody = $altBody;

        $mail->send();
        echo "Email sent successfully!";
    } catch (Exception $e) {
        error_log("PHPMailer error: " . $mail->ErrorInfo); // log full error
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}

    $otp_code = rand(100000, 999999);
    $email = 'soniasamson72@gmail.com';
    $token = bin2hex(random_bytes(32));
    $name = 'Sonia Samson';
    $subject = "Verify your registration";
    $htmlBody = '
        <html>
        <head>
            <style>
                .otp-box {
                    font-size: 24px;
                    font-weight: bold;
                    color: #ff6600;
                }
            </style>
        </head>
        <body>
            <h2>Welcome to A&amp;R Duties!</h2>
            <p>Your OTP code is:</p>
            <div class="otp-box">' . htmlspecialchars($otp_code) . '</div>
            <p>Or click below to verify:</p>
            <a href="http://localhost/A&RDuties/verify.php?email=' . urlencode($email) . '&token=' . urlencode($token) . '">Verify Now</a>
        </body>
        </html>
    ';

    $altBody = "Your OTP is $otp_code. Visit: http://localhost/A&RDuties/verify.php?email=$email&token=$token";

sendEmail($email, $name, $subject, $htmlBody, $altBody);

?>
