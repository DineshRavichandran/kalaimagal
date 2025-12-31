<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['submit'])) {

    $student_name   = $_POST['student_name'] ?? '';
    $dob            = $_POST['dob'] ?? '';
    $grade          = $_POST['grade'] ?? '';
    $current_school = $_POST['current_school'] ?? '';
    $father_name    = $_POST['father_name'] ?? '';
    $mother_name    = $_POST['mother_name'] ?? '';
    $contact        = $_POST['contact'] ?? '';
    $alt_contact    = $_POST['alt_contact'] ?? '';
    $email          = $_POST['email'] ?? '';
    $address        = $_POST['address'] ?? '';

    $mail = new PHPMailer(true);

    try {
        // SMTP CONFIG
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'yourgmail@gmail.com';   // YOUR GMAIL
        $mail->Password   = 'your_app_password';     // GMAIL APP PASSWORD
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // MAIL SETTINGS
        $mail->setFrom('yourgmail@gmail.com', 'Admission Form');
        $mail->addAddress('schoolmail@gmail.com');   // SCHOOL EMAIL
        $mail->addReplyTo($email ?: 'yourgmail@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'New Admission Application';

        $mail->Body = "
        <h3>New Admission Application</h3>
        <table border='1' cellpadding='8'>
            <tr><td>Student Name</td><td>$student_name</td></tr>
            <tr><td>DOB</td><td>$dob</td></tr>
            <tr><td>Grade</td><td>$grade</td></tr>
            <tr><td>Current School</td><td>$current_school</td></tr>
            <tr><td>Father Name</td><td>$father_name</td></tr>
            <tr><td>Mother Name</td><td>$mother_name</td></tr>
            <tr><td>Contact</td><td>$contact</td></tr>
            <tr><td>Alt Contact</td><td>$alt_contact</td></tr>
            <tr><td>Email</td><td>$email</td></tr>
            <tr><td>Address</td><td>$address</td></tr>
        </table>";

        $mail->send();

        echo "<script>alert('Admission submitted successfully'); window.location.href='admission.html';</script>";

    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}
?>
