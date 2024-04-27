<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['patientName'])) {
        $patientName = $_POST['patientName'];
        $doctorName = $_POST['doctor'] ?? 'No doctor selected';
        $date = $_POST['date'] ?? 'No date selected';

        if (!empty($patientName) && !empty($doctorName) && !empty($date)) {
            $message = "Thank you, $patientName. Your appointment with Dr. $doctorName on $date has been received.";
        } else {
            $message = "Failed to book appointment. Please make sure all required fields are filled out correctly.";
        }
    } elseif (isset($_POST['fullName'])) {
        $fullName = $_POST['fullName'];
        $feedback = $_POST['feedback'] ?? '';

        if (!empty($fullName) && !empty($feedback)) {
            $message = "Thank you for contacting us, $fullName. Your message has been received.";
        } else {
            $message = "Please make sure all required fields are filled out correctly.";
        }
    } else {
        $message = "Invalid form submission.";
    }

    $message = urlencode($message);
    header("Location:confirmation.php?message=$message");
    exit;
}
?>
