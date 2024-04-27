<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullName = $_POST['fullName'] ?? 'Anonymous';
    $feedback = $_POST['feedback'] ?? '';


    if (!empty($fullName) && !empty($feedback)) {
        $confirmationMessage = "Thank you for contacting us, $fullName. Your message has been received.";
    } else {
        $confirmationMessage = "Please make sure all required fields are filled out correctly.";
    }

    $confirmationMessage = urlencode($confirmationMessage);
    header("Location: confirmation2.php?message=$confirmationMessage");
    exit;
}
?>