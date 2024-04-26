<?php
// Array for testimonial
$testimonials = [
    [
        'name' => 'Morijorch',
        'subtitle' => 'Default model text',
        'text' => 'Editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various'
    ],
    [
        'name' => 'Rochak',
        'subtitle' => 'Default model text',
        'text' => 'Various editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.'
    ],
    [
        'name' => 'Brad Johns',
        'subtitle' => 'Default model text',
        'text' => 'Various editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy, editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various'
    ]
];


// Array for treatment
$treatments = [
    [
        'img_src' => 'images/t1.png',
        'title' => 'Nephrologist Care',
        'description' => 'Alteration in some form, by injected humour, or randomised words which don\'t look even slightly sure there isn\'t anything.',
        'read_more_link' => '#'
    ],
    [
        'img_src' => 'images/t2.png',
        'title' => 'Eye Care',
        'description' => 'Alteration in some form, by injected humour, or randomised words which don\'t look even slightly sure there isn\'t anything.',
        'read_more_link' => '#'
    ],
    [
        'img_src' => 'images/t3.png',
        'title' => 'Pediatrician Clinic',
        'description' => 'Alteration in some form, by injected humour, or randomised words which don\'t look even slightly sure there isn\'t anything.',
        'read_more_link' => '#'
    ],
    [
        'img_src' => 'images/t4.png',
        'title' => 'Parental Care',
        'description' => 'Alteration in some form, by injected humour, or randomised words which don\'t look even slightly sure there isn\'t anything.',
        'read_more_link' => '#'
    ]
];
// Array for Dcotors
$doctors = [
    [
        'name' => 'Jessica',
        'qualification' => 'MBBS',
        'image' => 'images/team1.jpg',
        'social_media' => [
            'facebook' => '#',
            'twitter' => '#',
            'linkedin' => '#',
            'instagram' => '#'
        ]
    ],
    [
        'name' => 'Jenny',
        'qualification' => 'MBBS',
        'image' => 'images/team2.jpg',
        'social_media' => [
            'facebook' => '#',
            'twitter' => '#',
            'linkedin' => '#',
            'instagram' => '#'
        ]
    ],
    [
        'name' => 'Ben',
        'qualification' => 'MBBS',
        'image' => 'images/team3.jpg',
        'social_media' => [
            'facebook' => '#',
            'twitter' => '#',
            'linkedin' => '#',
            'instagram' => '#'
        ]
    ]
];

  function doctorsection($doctors){
    foreach ($doctors as $doctor){
        echo '<div class="item">
        <div class="box">
          <div class="img-box">
            <img src="'. $doctor['image'].'" alt="" />
          </div>
          <div class="detail-box">
            <h5>
            ' . $doctor['name'].'
            </h5>
            <h6>
            ' . $doctor['qualification'].'
            </h6>
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>';
    }
}


?>








 




