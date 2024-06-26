<?php
include './functions/variables.php';
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
    echo    '</div>
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
function generateBookSection($doctors_info, $treatments)
{
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
                for ($i = 0; $i < count($treatments); $i++) {
                    $treatment = $treatments[$i];
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
                    $i = 0;
                    while ($i < count($doctors_info)) {
                        $doctor = $doctors_info[$i];
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
                        $i++;
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
                    if (count($testimonials) > 0) {
                        $index = 0;
                        do {
                            $testimonial = $testimonials[$index];
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
                            $index++;
                        } while ($index < count($testimonials));
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
                                <div><input type="text" name="feedback" class="message-box" placeholder="Write your concern" required /></div>
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
?>