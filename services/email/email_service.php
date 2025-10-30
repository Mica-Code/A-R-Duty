<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PhpMailer/vendor/autoload.php'; // Adjust path if needed

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
        return true;
    } catch (Exception $e) {
        error_log("PHPMailer error: " . $mail->ErrorInfo); // log full error
        return $mail->ErrorInfo; // return error string instead of false
    }
}
