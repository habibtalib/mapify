<?php

echo json_encode(
    $data = array(
        [
            'id' => 1,
            'latitude' => 3.159567,
            'longitude' => 101.697378,
            'featured' => 1,
            'title' => "Web UI/YX Designer",
            'location' => "Kuala Lumpur",
            'city' => 1,
            'phone' => "361-492-2356",
            'email' => "hello@markys.com",
            'website' => "http:/ww.jobstreet.com",
            'category' => "Restaurant",
            'rating' => "4",
            'reviews_number' => "6",
            'marker_image' => "assets/img/items/logo_jobstreet.jpg",
            'gallery' => array(
                "assets/img/items/logo_jobstreet.jpg",
            ),
            'tags' => array(
                "Wi-Fi",
                "Parking",
                "TV",
                "Vegetarian"
            ),
            'additional_info' => "Average price $30",
            'url' => "detail.html",
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis, arcu non hendrerit imperdiet, metus odio scelerisque elit, sed lacinia odio est ac felis. Nam ullamcorper hendrerit ullamcorper. Praesent quis arcu quis leo posuere ornare eu in purus. Nulla ornare rutrum condimentum. Praesent eu pulvinar velit. Quisque non finibus purus, eu auctor ipsum.",
            'reviews' => array(
                [
                    'author_name' => "Jane Doe",
                    'author_image' => "assets/img/person-01.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros"
                ],
                [
                    'author_name' => "Norma Brown",
                    'author_image' => "assets/img/person-02.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis"
                ]
            ),
            'opening_hours' => array(
                "08:00am - 11:00pm",
                "08:00am - 11:00pm",
                "12:00am - 11:00pm",
                "08:00am - 11:00pm",
                "03:00pm - 02:00am",
                "03:00pm - 02:00am",
                "Closed"
            ),
            'company' => 'Jobstreet.com',
            'salary' => 'MYR 3000 - 4500'
        ],

        [
            'id' => 2,
            'latitude' => 3.143469,
            'longitude' => 101.710741,
            'featured' => 0,
            'title' => "Senior Mobile Developer",
            'location' => "Kuala Lumpur",
            'city' => 1,
            'contact' => "989-410-0777",
            'category' => "Restaurant",
            'rating' => "3",
            'reviews_number' => "12",
            'marker_image' => "assets/img/items/2.jpg",
            'gallery' => array(
                "assets/img/items/logo_mol.jpg"
            ),
            'additional_info' => "",
            'url' => "detail.html",
            'description' => "Aliquam vel turpis sagittis, semper tellus eget, aliquam turpis. Cras aliquam, arcu",
            'today_menu' => array(
                [
                    'meal_type' => "Starter",
                    'meal' => "Smoked Salmon, Classic Condiments, Brioche"
                ],
                [
                    'meal_type' => "Soup",
                    'meal' => "Roasted Golden Beets, Goat Cheese, Hazelnut Granola"
                ],
                [
                    'meal_type' => "Main course",
                    'meal' => "Napoleon of Rabbit Loin, Braised Leek, Fava Bean Puree"
                ]
            ),
            'reviews' => array(
                [
                    'author_name' => "Jane Doe",
                    'author_image' => "assets/img/person-01.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros"
                ],
                [
                    'author_name' => "Norma Brown",
                    'author_image' => "assets/img/person-02.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis"
                ]
            ),
            'company' => 'MOL Accessportal Sdn. Bhd.',
            'salary' => 'MYR 4000 - 6000'
        ],

        [
            'id' => 3,
            'latitude' => 3.133287,
            'longitude' => 101.611809,
            'address' => "Forest Hills, Queens, NY 11375, USA",
            'featured' => 0,
            'title' => "Internship for Software Engineering",
            'location' => "Kuala Lumpur",
            'city' => 1,
            'contact' => "<i class='fa fa-phone'></i>323-843-4729",
            'category' => "Event",
            'rating' => "5",
            'reviews_number' => "15",
            'marker_image' => "assets/img/items/4.jpg",
            'gallery' => array(
                "assets/img/items/logo_dokonee.jpg",
                "assets/img/items/2.jpg",
                "assets/img/items/12.jpg"
            ),
            'tags' => array(
                "Wi-Fi",
                "Parking",
                "TV",
                "Vegetarian"
            ),
            'additional_info' => "Starts at 19:00",
            'url' => "detail.html",
            'description' => "Sed ac dolor auctor, elementum lacus vitae, efficitur magna. Quisque sed semper tellus",
            'reviews' => array(
                [
                    'author_name' => "Jane Doe",
                    'author_image' => "assets/img/person-01.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros"
                ],
                [
                    'author_name' => "Norma Brown",
                    'author_image' => "assets/img/person-02.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis"
                ]
            ),
            'schedule' => array(
                [
                    'date' => "24.03.2017",
                    'time' => "16:00",
                    'location_title' => "Town Square",
                    'location_address' => "458 Brigth Street London"
                ],
                [
                    'date' => "03.04.2017",
                    'time' => "18:00",
                    'location_title' => "Bristol Gallery",
                    'location_address' => "87 Yellow Lane, Manhattan"
                ]
            ),
            'company' => 'DOKONEE SDN BHD',
            'salary' => 'MYR 1000 - 1200'
        ],

        [
            'id' => 4,
            'latitude' => 40.709016,
            'longitude' => -73.844969,
            'featured' => 0,
            'title' => "Cosmopolit",
            'location' => "4209 Glenview Drive",
            'city' => 1,
            'contact' => "<i class='fa fa-phone'></i>323-843-4729",
            'category' => "Wellness",
            'rating' => "5",
            'reviews_number' => "28",
            'marker_image' => "assets/img/items/5.jpg",
            'gallery' => array(
                "assets/img/items/5.jpg",
                "assets/img/items/2.jpg",
                "assets/img/items/12.jpg"
            ),
            'tags' => array(
                "Wi-Fi",
                "Parking",
                "TV",
                "Vegetarian"
            ),
            'additional_info' => "",
            'url' => "detail.html",
            'description' => "Sed ac dolor auctor, elementum lacus vitae, efficitur magna. Quisque sed semper tellus",
            'reviews' => array(
                [
                    'author_name' => "Jane Doe",
                    'author_image' => "assets/img/person-01.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros"
                ],
                [
                    'author_name' => "Norma Brown",
                    'author_image' => "assets/img/person-02.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis"
                ]
            ),
            'opening_hours' => array(
                "08:00am - 11:00pm",
                "08:00am - 11:00pm",
                "12:00am - 11:00pm",
                "08:00am - 11:00pm",
                "03:00pm - 02:00am",
                "03:00pm - 02:00am",
                "Closed"
            )
        ],

    )
);

