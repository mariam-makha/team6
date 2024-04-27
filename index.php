<?php
include './functions/variables.php'; 
include './functions/functions.php'; 
include './components/header.php';

generateSlider($slider_content);

generateBookSection($doctors_info, $treatments);

generateAboutSection($about_image, $about_text);

generateTreatmentSection($treatments);

generateTeamSection($doctors_info);

generateClientSection($testimonials);

generateContactSection();

include './components/footer.php';
?>