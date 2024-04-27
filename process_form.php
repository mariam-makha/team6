<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $patientName = isset($_POST['patientName']) ? $_POST['patientName'] : 'No name provided';
    $doctorName = isset($_POST['doctor']) ? $_POST['doctor'] : 'No doctor selected';
    $date = isset($_POST['date']) ? $_POST['date'] : 'No date selected';

    if (!empty($patientName) && !empty($doctorName) && !empty($date)) {
        $message = urlencode("Thank you, $patientName. Your appointment with Dr. $doctorName on $date has been received.");
    } else {
        $message = urlencode("Failed to book appointment. Please make sure all required fields are filled out correctly.");
    }
    header("Location: confirmation.php?message=$message");
    exit;
}
?>