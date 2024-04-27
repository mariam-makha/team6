<?php
include 'functions.php'; 
include 'variables.php';

generateHtmlHeader();

generateHeader($header_info, $nav_links, $logo_url);

generateSlider($slider_content);

generateBookSection($doctors_info, $treatments);

generateAboutSection($about_image, $about_text);

generateTreatmentSection($treatments);

generateTeamSection($doctors_info);

generateClientSection($testimonials);

generateContactSection();

generateInfoSection($info_contacts, $social_media_links, $info_links, $latest_posts, $news_items);

generateFooter();

?>