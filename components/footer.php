<?php
include './functions/variables.php';  ?>
<section class="info_section">
            <div class="container">
                <div class="info_top">
                    <div class="info_logo">
                        <a href="#"><img src="images/logo.png" alt=""></a>
                    </div>
                    <div class="info_form">
                        <form action="">
                            <input type="email" placeholder="Your email">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="info_bottom layout_padding2">
                    <div class="row info_main_row">
<!-- Address and Social Links -->
            <div class="col-md-6 col-lg-3">
                <h5>Address</h5>
                <div class="info_contact">
<?php
    foreach ($info_contacts as $contact) {
        echo '<a href="' . $contact['link'] . '">
                <i class="' . $contact['icon'] . '" aria-hidden="true"></i>
                <span>' . $contact['text'] . '</span>
              </a>';
    } ?>
                </div>
                <div class="social_box">
<?php
    foreach ($social_media_links as $media => $link) {
        echo '<a href="' . $link . '">
                <i class="fa fa-' . $media . '" aria-hidden="true"></i>
              </a>';
    } ?>
                </div>
            </div>

<!-- Useful Links -->
            <div class="col-md-6 col-lg-3">
                <h5>Useful Links</h5>
                <div class="info_links">
                    <ul class="info_links_menu">
<?php
    foreach ($info_links as $name => $url) {
        echo '<li><a href="' . $url . '">' . $name . '</a></li>';
    } ?>
                </ul>
                </div>
            </div>

    <!-- Latest Posts -->
        <div class="col-md-6 col-lg-3">
            <h5>LATEST POSTS</h5>
<?php
    foreach ($latest_posts as $post) {
        echo '<div class="post_box">
                <div class="img-box">
                    <img src="' . $post['image'] . '" alt="">
                </div>
                <p>' . $post['text'] . '</p>
              </div>';
    } ?>
        </div>

<!-- news -->
        <div class="col-md-6 col-lg-3">
            <h5>News</h5>
<?php
    foreach ($news_items as $news) {
        echo '<div class="post_box">
                <div class="img-box">
                    <img src="' . $news['image'] . '" alt="">
                </div>
                <p>' . $news['text'] . '</p>
              </div>';
    } ?>
        </div>

    </div></div></div></section>


<footer class="footer_section">
            <div class="container">
                <p>&copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="https://html.design/">Free Html Templates</a></p>
            </div>
        </footer>
        <!-- jQery -->
        <script src="js/jquery-3.4.1.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.js"></script>
        <!-- nice select -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
        <!-- owl slider -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <!-- datepicker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
        <!-- custom js -->
        <script src="js/custom.js"></script>
        </body>

        </html>