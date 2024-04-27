<?php
include 'variables.php';
function generateHtmlHeader(){
    echo '
    <!DOCTYPE html>
    <html>

    <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Mico</title>


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- nice select -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
    <!-- datepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

    </head>

    <body class="sub_page">

    <div class="hero_area">';
}

function generateHeader($header_info, $nav_links, $logo_url)
{
    echo '<header class="header_section">
            <div class="header_top">
                <div class="container">
                    <div class="contact_nav">';
    
    foreach ($header_info as $info) {
        echo '<a href="' . $info['link'] . '">
                <i class="' . $info['icon'] . '" aria-hidden="true"></i>
                <span>' . $info['text'] . '</span>
              </a>';
    }
    
    echo '</div>
          </div>
      </div>
      <div class="header_bottom">
          <div class="container-fluid">
              <nav class="navbar navbar-expand-lg custom_nav-container">
                  <a class="navbar-brand" href="index.php">
                      <img src="' . $logo_url . '" alt="">
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                          <ul class="navbar-nav">';
    
    foreach ($nav_links as $name => $url) {
        $active = ($name === 'Home' ? 'active' : '');
        echo '<li class="nav-item ' . $active . '">
                <a class="nav-link" href="' . $url . '">' . $name;
        if ($name === 'Home') {
            echo '<span class="sr-only">(current)</span>';
        }
        echo '</a></li>';
    }
    
    echo '</ul>
          </div>
          <div class="quote_btn-container">
              <a href="#">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>Login</span>
              </a>
              <a href="#">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>Sign Up</span>
              </a>
              <form class="form-inline">
                  <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
                      <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
              </form>
          </div>
      </div>
  </nav>
  </div>
  </div>
  </header>';
}

function generateSlider($slider_content)
{
    echo '<section class="slider_section ">
            <div class="dot_design">
                <img src="images/dots.png" alt="">
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">';
    
    foreach ($slider_content as $index => $slide) {
        echo '<div class="carousel-item ' . ($index == 0 ? 'active' : '') . '">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="detail-box">
                                <div class="play_btn">
                                    <button>
                                        <i class="fa fa-play" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <h1>' . $slide['title'] . '<br>
                                    <span>' . $slide['span'] . '</span>
                                </h1>
                                <p>' . $slide['text'] . '</p>
                                <a href="' . $slide['button_link'] . '">' . $slide['button_text'] . '</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-box">
                                <img src="' . $slide['image'] . '" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    }
    
    echo '</div>
        <div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                <img src="images/prev.png" alt="">
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                <img src="images/next.png" alt="">
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
 </div>';
}

function generateBookSection($doctors_info, $treatments) {
    echo '<section class="book_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <form action="process_form.php" method="post">
                        <input type="hidden" name="formType" value="booking">
                            <h4>BOOK <span>APPOINTMENT</span></h4>
                            <div class="form-row">
                                <div class="form-group col-lg-4">
                                    <label for="inputPatientName">Patient Name</label>
                                    <input type="text" class="form-control" name="patientName" id="inputPatientName" placeholder="" required>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="inputDoctorName">Doctor\'s Name</label>
                                    <select name="doctor" class="form-control wide" id="inputDoctorName" required>';
    
    foreach ($doctors_info as $doctor) {
        echo '<option value="' . $doctor['name'] . '">' . $doctor['name'] . '</option>';
    }
    
    echo '</select>
        </div>
        <div class="form-group col-lg-4">
            <label for="inputDepartmentName">Department\'s Name</label>
            <select name="department" class="form-control wide" name="date" id="inputDepartmentName">';
    
    foreach ($treatments as $treatment) {
        echo '<option value="' . $treatment['title'] . '">' . $treatment['title'] . '</option>';
    }
    
    echo '</select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-lg-4">
                <label for="inputPhone">Phone Number</label>
                <input type="number" class="form-control" id="inputPhone" placeholder="XXXXXXXXXX">
            </div>
            <div class="form-group col-lg-4">
                <label for="inputSymptoms">Symptoms</label>
                <input type="text" class="form-control" id="inputSymptoms" placeholder="">
            </div>
            <div class="form-group col-lg-4">
                <label for="inputDate">Choose Date</label>
                <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                    <input type="text" class="form-control" id="inputDate" name="date" required>
                    <span class="input-group-addon date_icon">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="btn-box">
            <button type="submit" class="btn">Submit Now</button>
        </div>
    </form>
</div>
</div>
</div>
</section>';
}

function generateAboutSection($about_image, $about_text)
{
    echo '<section class="about_section">
            <div class="container  ">
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="img-box">
                            <img src="' . $about_image . '" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="heading_container">
                                <h2>
                                    About <span>Hospital</span>
                                </h2>
                            </div>
                            <p>' . $about_text . '</p>
                            <a href="">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>';
}
function generateTreatmentSection($treatments)
{
    echo '<section class="treatment_section layout_padding">
            <div class="side_img">
                <img src="images/treatment-side-img.jpg" alt="">
            </div>
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        Hospital <span>Treatment</span>
                    </h2>
                </div>
                <div class="row">';
    
    foreach ($treatments as $index => $treatment) {
        echo '<div class="col-md-6 col-lg-3">
                <div class="box">
                    <div class="img-box">
                        <img src="' . $treatment['image'] . '" alt="">
                    </div>
                    <div class="detail-box">
                        <h4>' . $treatment['title'] . '</h4>
                        <p>' . $treatment['description'] . '</p>
                        <a href="' . $treatment['link'] . '">Read More</a>
                    </div>
                </div>
            </div>';
    }
    
    echo '</div>
        </div>
    </section>';
}
function generateTeamSection($doctors_info)
{
    echo '<section class="team_section layout_padding">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        Our <span>Doctors</span>
                    </h2>
                </div>
                <div class="carousel-wrap ">
                    <div class="owl-carousel team_carousel">';
    
    foreach ($doctors_info as $doctor) {
        echo '<div class="item">
                <div class="box">
                    <div class="img-box">
                        <img src="' . $doctor['image'] . '" alt="" />
                    </div>
                    <div class="detail-box">
                        <h5>' . $doctor['name'] . '</h5>
                        <h6>' . $doctor['qualification'] . '</h6>
                        <div class="social_box">';
        
        foreach ($doctor['social_links'] as $key => $link) {
            echo '<a href="' . $link . '">
                    <i class="fa fa-' . $key . '" aria-hidden="true"></i>
                  </a>';
        }
        
        echo '</div>
                </div>
            </div>
        </div>';
    }
    
    echo '</div>
        </div>
    </div>
</section>';
}

function generateClientSection($testimonials)
{
    echo '<section class="client_section layout_padding">
            <div class="container">
                <div class="heading_container">
                    <h2>
                        <span>Testimonial</span>
                    </h2>
                </div>
            </div>
            <div class="container px-0">
                <div id="customCarousel2" class="carousel carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">';
    
    foreach ($testimonials as $index => $testimonial) {
        echo '<div class="carousel-item ' . ($index == 0 ? 'active' : '') . '">
                <div class="box">
                    <div class="client_info">
                        <div class="client_name">
                            <h5>' . $testimonial['name'] . '</h5>
                            <h6>' . $testimonial['role'] . '</h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>' . $testimonial['quote'] . '</p>
                </div>
            </div>';
    }
    
    echo '</div>
        <div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
</section>';
}

function generateContactSection()
{
    echo '<section class="contact_section layout_padding-bottom">
            <div class="container">
                <div class="heading_container">
                    <h2>Get In Touch</h2>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="form_container">
                            <form action="process_form.php" method="post">
                            <input type="hidden" name="formType" value="contact">
                                <div><input type="text" name="fullName" placeholder="Full Name" required /></div>
                                <div><input type="email" name="email" placeholder="Email" /></div>
                                <div><input type="text" name="phoneNumber" placeholder="Phone Number" /></div>
                                <div><input type="text" name="feedback" class="message-box" placeholder="feedback" required /></div>
                                <div class="btn_box"><button>SEND</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="img-box">
                            <img src="images/contact-img.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>';
}
function generateInfoSection($info_contacts, $social_media_links, $info_links, $latest_posts, $news_items)
{
    echo '<section class="info_section">
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
                    <div class="row info_main_row">';

    // Address and Social Links
    echo '<div class="col-md-6 col-lg-3">
            <h5>Address</h5>
            <div class="info_contact">';
    foreach ($info_contacts as $contact) {
        echo '<a href="' . $contact['link'] . '">
                <i class="' . $contact['icon'] . '" aria-hidden="true"></i>
                <span>' . $contact['text'] . '</span>
              </a>';
    }
    echo '</div><div class="social_box">';
    foreach ($social_media_links as $media => $link) {
        echo '<a href="' . $link . '">
                <i class="fa fa-' . $media . '" aria-hidden="true"></i>
              </a>';
    }
    echo '</div></div>';

    // Useful Links
    echo '<div class="col-md-6 col-lg-3">
            <h5>Useful Links</h5>
            <div class="info_links">
                <ul class="info_links_menu">';
    foreach ($info_links as $name => $url) {
        echo '<li><a href="' . $url . '">' . $name . '</a></li>';
    }
    echo '</ul></div></div>';

    // Latest Posts
    echo '<div class="col-md-6 col-lg-3">
            <h5>LATEST POSTS</h5>';
    foreach ($latest_posts as $post) {
        echo '<div class="post_box">
                <div class="img-box">
                    <img src="' . $post['image'] . '" alt="">
                </div>
                <p>' . $post['text'] . '</p>
              </div>';
    }
    echo '</div>';

    // News
    echo '<div class="col-md-6 col-lg-3">
            <h5>News</h5>';
    foreach ($news_items as $news) {
        echo '<div class="post_box">
                <div class="img-box">
                    <img src="' . $news['image'] . '" alt="">
                </div>
                <p>' . $news['text'] . '</p>
              </div>';
    }
    echo '</div>';

    echo '</div></div></div></section>';
}

function generateFooter()
{
    echo '<footer class="footer_section">
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
        ';
}
?>