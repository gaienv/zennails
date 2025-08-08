<?php

    $business_info = [
        'name' => "Zen Nails Laveen",
        'address' => '6115 S 51st Ave, # 200 Laveen, AZ, United States, Arizona',
        'contact' => '+1 602-237-2252',
        'hours' => '<strong>Monday - Saturday:</strong>&nbsp;9:30 AM - 7:00 PM<br><strong>Sunday:</strong>&nbsp;10:00 AM - 5:00 PM</p><p>
        ',
        'booking' => '',
        'facebook' => 'https://www.facebook.com/p/Zen-nails-Laveen-100063804900130/',
        'google' => 'https://share.google/48wx2njqi2h5ZiJDp',
        'instagram' => 'https://www.instagram.com/zen_nails_laveen',
    ];

    $services = [
        // 'PEDICURE' => [
        //     'pedi',
        //     "",
        //     'Menu' => [
        //         'Herbal Luxury Spa Pedicure' => ['$48', 'Massage (12 mins) GEL/Shellac Polish (Extra) $15 Includes relaxing foot soaks in warm water, cuticle care & callus remote. Next, you get an Herbal scrub of your choice. Which gently exfoliates, removes dead skin cells & allows the skin to breathe. Plus natural Herbal mask of your choice, warm fragrant essential oil, hot stone massage & paraffin treatment, because you deserve it.  '],
        //         'Detox Volcano Spa Pedicure' => ['$68', 'Massage (15 mins) GEL/Shellac Polish (Extra) $15 Includes relaxing foot soaks in warm water. cuticle care & callus remote. Next, you get a VOLCANO scrub of your choice, which gently exfoliates, removes dead skin cells & allows the skin to breathe. Followed by VOLCANO mask of your choke, hot stone hot towel wrap on both legs & feet. longer massage with VOLCANO lotion color, fresh oranges & hot stones massage. This pedicure soothes, regenerates & softens skin. Added Collagen: 1. DETOX VOLCANO CRYSTALS 2. DETOX VOLCANO ACTIVATOR 3. EXFOLIATING SUGAR SCRUB 4. COLLAGEN CREAM MASK 5. COLLAGEN MASSAGE LOTION'],
        //         'Detox Volcano Luxury Spa Pedicure' => ['$88', 'Massage ( 25 mins) GEL/Shellac Polish (Extra) $15 Includes relaxing foot soaks in warm water. cuticle care & callus real. Next, you get an llerbal scrub of your choice, which gently exfoliates, re es dead skin cells & allows the skin to breathe. Plus natural VOLCANO mask of your choice, warm fragrant essential oil, hot stone massage & paraffin treatment, because you deserve it SANITIZING WIPE & DISPOSABLE KIT INCLUDED 10 STEP SYSTEM 1-2: CBD DETOX VOLCANO CRYSTALS & ACTIVATOR WITH BUBBLING & FIZZING 3: CBD EXFOLIATING SUGAR SCRUB 4: CBD COLLAGEN CREAM MASK 5: CBD COLLAGEN MASSAGE LOTION 6-10: DISPOSABLE SANITIZING WIPE, SPA LINER, BUFFER, PUMICE & NAIL FILE '],
        //         'Deluxe Spa Pedicure' => ['$38', 'Massage (8 mins) GEL/Shellac Polish (Extra) $15 Includes relaxing foot soaks in warm water, cuticle care, callus removal. Herbal scrub of your choice, which gently exfoliates, fresh oranges removes dead skin cells & allows the skin to breathe. Finished with a hot stone massage with warm towels.   '],
        //         'Basic Spa Pedicure' => ['$28', 'Massage (5 mins) GEL/Shellac Polish (Extra) $15 Gently soak, cuticles clean, sugars, massage hot stone.'],
        //         'Shading' => ['$28', ''],
        //     ],
        //     'images'=>['pedi.jpg']
        // ],
        // 'MANICURE' => [
        //     'mani',
        //     "",
        //     'Menu' => [
        //         'ADD ON Paraffin' => ['$10', '',],
        //         'ADD ON Callus Remove' => ['$7', '',],
        //         'ADD ON Gel/Regular French' => ['$7', '',],
        //         'Luxury Spa Manicure + Healthy Detox (With Gel $58)' => ['$45', '',],
        //         'Herbal Spa Manicure + Package Skin Cell Wrap (With Gel $48) ' => ['$35', '',],
        //         'Deluxe Manicure (With Gel $38)' => ['$25', '',],
        //         'Mini Manicure' => ['$20', '',],
        //         'Gel Manicure' => ['$35', '',],

        //     ],
        //     'images'=>['mani.jpg']
        // ],
        'EYELASH EXTENSIONS' => [
            'eyelash-extension',
            'Enhance your natural beauty with our eyelash extension services. Choose from various styles to achieve the look you desire.',
            'Menu' => [
                'Glamour Volume Set' => ['$120', 'A glamorous set of voluminous eyelash extensions for a bold look.'],
                'Natural Classic Set' => ['$80', 'A classic set of eyelash extensions for a natural and subtle enhancement.'],
                'Lash Refill (45 Mins)' => ['$50', 'Maintenance refill to keep your lashes looking fresh.'],
            ],
            'images' => ['eye-ext.jpg']
        ],
        'ADD-ON LASH SERVICES' => [
            'additional',
            'Explore our additional lash services designed to maintain and enhance your eyelash beauty.',
            'Menu' => [
                'Lash Tinting' => ['$20', 'Enhance your lashes with a tint for a darker and more defined look.'],
                'Lash Lift' => ['$40', 'Lift and curl your natural lashes for a wide-eyed and awake appearance.'],
            ],
            'images' => ['touchlash.jpg']
        ],
        'PERMANENT MAKEUP' => [
            'makeup',
            'Discover the convenience of permanent makeup. Wake up with makeup every day!',
            'Menu' => [
                'Brow Microblading' => ['$200', 'Sculpt your brows with microblading for a natural and defined look.'],
                'Lip Blush' => ['$150', 'Add a touch of color to your lips with our lip blush service.'],
                'Eyeliner Tattoo' => ['$180', 'Define your eyes with permanent eyeliner tattooing.'],
            ],
            'images' => ['makeup.jpg']
        ],
        // ... Repeat the structure for other services
        'HAIR REMOVAL' => [
            'Removal',
            'Achieve smooth, hair-free skin with our hair removal services covering various areas of the body.',
            'Menu' => [
                '<b>Hair Removal</b>' => ['Single Treatment &nbsp;&nbsp;&nbsp; Package of 6', ''],
                'Upper Lip' => ['$25 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $120', ''],
                'Chin' => ['$30 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $150', ''],
                'Face' => ['$50 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $250', ''],
                'Underarms' => ['$40 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $200', ''],
                'Forearms' => ['$60 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $300', ''],
                'Full Arms' => ['$100 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $500', ''],
                'Back' => ['$80 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $400', ''],
                'Bikini' => ['$50 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $250', ''],
                'Lower Legs' => ['$70 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $350', ''],
                'Full Legs' => ['$120 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $600', ''],
                'Leg Vein Clearance' => ['Single Treatment &nbsp;&nbsp;&nbsp; Series of 2', ''],
                '🦵' => ['$60 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $150', ''],
                'Pigmented Lesions' => ['Single Treatment &nbsp;&nbsp;&nbsp; Series of 2', ''],
                '💋' => ['$80 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $200', ''],
                '<b>Skin Revitalization</b>' => ['Single Treatment &nbsp;&nbsp;&nbsp; Series of 3', ''],
                '🧖‍♀️' => ['$120 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $300', ''],
            ],
            'images' => ['hairremoval.jpg']
        ],
        // ... Add more services as needed
     ];



    $gallery = glob('assets/img/gallery/'.'*.*');
    $compile = glob('assets/img/gallery/compilation/'.'*.*');
    $popup = glob('assets/img/popup/'.'*.*');
?>