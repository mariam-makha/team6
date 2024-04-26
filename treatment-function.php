<!-- treatment section -->

<section class="treatment_section layout_padding">
    <div class="side_img">
      <img src="images/treatment-side-img.jpg" alt="">
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Hospital <span>Treatment</span>
        </h2>
      </div>
      <div class="row">
      <?php
            $index = 0;
            $count = count($treatments);
            while ($index < $count) {
                $treatment = $treatments[$index];
                echo '<div class="col-md-6 col-lg-3">';
                echo '    <div class="box ">';
                echo '        <div class="img-box">';
                echo '            <img src="' . ($treatment['img_src']) . '" alt="">';
                echo '        </div>';
                echo '        <div class="detail-box">';
                echo '            <h4>' . ($treatment['title']) . '</h4>';
                echo '            <p>' . ($treatment['description']) . '</p>';
                echo '            <a href="' . ($treatment['read_more_link']) . '">Read More</a>';
                echo '        </div>';
                echo '    </div>';
                echo '</div>';
                $index++;
            }
            ?>
        </div>
    </div>
  </section>

  <!-- end treatment section -->