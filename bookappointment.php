<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST" &&
isset($_POST['patientName']) &&
isset($_POST['doctorName']) &&
isset($_POST['departmentName']) &&
isset($_POST['phone']) &&
isset($_POST['symptoms']) &&
isset($_POST['appointmentDate'])) {
    echo 'Dear ' . $_POST['patientName'] . ',' . '<br>';
    echo '<p>Thank you for scheduling your appointment with us at MICO HOSPITAL</p>' . '<br>';
    echo 'Appointment Details: <br>
    Doctor: ' . $_POST['doctorName']  . '<br>';
    echo 'Department: ' . $_POST['departmentName']  . '<br>';
    echo 'Date:' . $_POST['appointmentDate'];
    echo '<br>' . '<br>';
   
    echo 'Please arrive 15 minutes earlier than your scheduled appointment time to complete any necessary paperwork and ensure a timely start to your visit.' . '<br>' .
    'We look forward to seeing you!';

} else {    
    echo "All fields must be filled. Please go back and complete the form.";
    }
?>