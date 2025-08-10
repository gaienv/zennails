<?php

    $business_info = [
        'name' => "Zen Nails Laveen",
        'address' => '6115 S 51st Ave, # 200 Laveen, AZ, United States, Arizona',
        'contact' => '+1 602-237-2252',
        'hours' => '<strong>Monday - Saturday:</strong>&nbsp;9:30 AM - 7:00 PM<br><strong>Sunday:</strong>&nbsp;10:00 AM - 5:00 PM</p><p>
        ',
        'booking' => 'tel:+1 602-237-2252',
        'facebook' => 'https://www.facebook.com/p/Zen-nails-Laveen-100063804900130/',
        'google' => 'https://share.google/48wx2njqi2h5ZiJDp',
        'instagram' => 'https://www.instagram.com/zen_nails_laveen',
    ];

    $services = [
        'PEDICURES' => [
            'pedi',
            "",
            'Menu' => [
                'Basic Pedicure' => ['$28', ''],
                'Add Gel Polish On Toenails' => ['$15', ''],
                'Gel Polish Change' => ['$25', ''],
                'Polish Change' => ['$15', ''],
                'Polish Change French Tips' => ['$21', ''],
                'Gel Polish Take Off Only' => ['$8', ''],
            ],
            'images'=>['pedi.jpg']
        ],
        'MANICURE' => [
            'mani',
            "",
            'Menu' => [
                'Basic Manicure' => ['$25', '',],
                'Gel Manicure' => ['$35', '',],
                'Polish Change' => ['$12', '',],
                'Gel Polish Change' => ['$25', '',],
                'Gel Polish Take Off' => ['$10', '',],
            ],
            'images'=>['mani.jpg']
        ],
        'FILLS' => [
            'fill',
            "Same Price for Regular or Gel Polish",
            'Menu' => [
                'Regular' => ['$40+', '',],
                'Special Shapes' => ['$40+', '',],
                'White Tips' => ['$40+', '',],
                'Regular With Pink Powder' => ['$40+', '',],
                'Back Fill' => ['$55+', '',],
                'Ombre Pink Fill' => ['$40+', '',],
                'Ombre Pink with Special Shapes' => ['$45+', '',],
                'Repair Each Nail' => ['$5+', '',],
            ],
            'images'=>['fills.jpg']
        ],
       'FULLSETS' => [
    'fullsets',
    "",
    'Menu' => [
        'Regular (Short & Square)' => ['$50+', '',],
        'Any Other Shapes' => ['$55+', '',],
        'White Tips' => ['$50+', '',],
        'Full Set On Toenails' => ['$50+', '',],
        'Full Set With Clear Pink Powder' => ['$50+', '',],
        'Ombre/ Pink & White (Top Gel Included)' => ['',''], 
        'Pink & White' => ['$65+', '',],
        'Ombre' => ['$65+', '',],
        'Nude Pink' => ['$60+', '',],
        'Glow In The Dark' => ['$55+', '',],
        'Gel X Full Set' => ['$60+', '',],
        'SNS Organic Dipping Powder' => ['$45-$55',''],
    ],
    'images' => ['fullset.jpg']
],
'ADDITIONAL SERVICES' => [
    'additional',
    "",
    'Menu' => [
        'Regular Polish Change' => ['$15 - $21 (French)', '',],
        'Gel Polish Change' => ['$25 - $31 (French)', '',],
        'Color Change On Acrylic (Gel)' => ['$25', '',],
        'Design 2 Fingers' => ['$8', '',],
        'Repair' => ['$7+', '',],
        'Cut Down' => ['$3', '',],
        'Shape Changing' => ['$5', '',],
        'Take Off Acrylic' => ['$15+', '',],
        'French Tips' => ['$6', '',],
        'Chrome Nails' => ['$15', '',],
    ],
    'images' => ['additional.jpg']
],  
'SPA PEDICURE' => [
    'spa',
    "",
    'Menu' => [
        'The Organic Diva' => ['$65', 'This package uses all organic ingredients. Give your feet and toes the LOVE they deserve. <br> Organic Sea-salt Rock <br> Callus Removal <br> Organic Sugar Scrubs <br> Praffin Wax <br> Organic Moisture Mask <br> Extended Massage with Hot Stones and Fresh Orange.',],
        'The Deluxe' => ['$55', 'This Premium pedicure will give you more relaxation and care with paraffin wax. This warm heat therapy wil lhelp with sore joints, muscles and moisturizing skin. <br> Sea-salt Soak <br> Callus Removal <br> Sugar Scrubs <br> Paraffin Wax <br> Hot Stones Massage',],
        'The Zens' => ['$45', 'Step it up and enjoy an enhanced version of our spa pedicure. Starts with basic pedicure and adding mask which are used to moisturize the skin <br> Moisturizer Mask <br> Callus Removal <br> Hot Stone Massage',],
        'The Essential' => ['$33', 'Need Extra Work on Removing your callus? Add Callus Removal to this package. <br> Nails Trimming, shapiong and cuticle grooming. <br> Callus Removal <br> Massage & Warm Towels <br> Polish of your choice. ',],
      
    ],
    'images' => ['spa.jpg']
],   
       
     ];



    $gallery = glob('assets/img/gallery/'.'*.*');
    $compile = glob('assets/img/gallery/compilation/'.'*.*');
    $popup = glob('assets/img/popup/'.'*.*');
?>