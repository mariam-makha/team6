<?php
include 'functions.php'; 

generateHtmlHeader();
generateHeader($header_info, $nav_links, $logo_url);
generateClientSection($testimonials);
generateInfoSection($info_contacts, $social_media_links, $info_links, $latest_posts, $news_items);
generateFooter();
?>