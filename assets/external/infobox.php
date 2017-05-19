<?php

$currentLocation = "";

// ---------------------------------------------------------------------------------------------------------------------
// Here comes your script for loading from the database.
// ---------------------------------------------------------------------------------------------------------------------

// Remove this example in your live site and replace it with a connection to database //////////////////////////////////

ob_start();
include 'data.php';
ob_end_clean();

for( $i=0; $i < count($data); $i++){
    if( $data[$i]['id'] == $_POST['id'] ){
        $currentLocation = $data[$i]; // Loaded data must be stored in the "$currentLocation" variable
    }
}

// End of example //////////////////////////////////////////////////////////////////////////////////////////////////////

// Infobox HTML code

echo
'<div class="item infobox" data-id="'. $currentLocation['id'] .'">
    <a href="'. $currentLocation['url'] .'">
        <div class="description">';

        
            if( !empty($currentLocation['featured']) ){
                echo
                    '<div class="recommeded">Recommended Job</div>';
            }



            // Category ------------------------------------------------------------------------------------------------

            // if( !empty($currentLocation['category']) ){
            //     echo
            //         '<div class="label label-default">'. $currentLocation['category'] .'</div>';
            // }

            // Title ---------------------------------------------------------------------------------------------------

            if( !empty($currentLocation['title']) ){
                echo
                    '<h3>'. $currentLocation['title'] .'</h3>';
            }

            // Location ------------------------------------------------------------------------------------------------

            if( !empty($currentLocation['company']) ){
                echo
                    '<h4>'. $currentLocation['company'] .'</h4>';
            }
            echo

        '</div>
        <!--end description-->';

        // Image thumbnail -------------------------------------------------------------------------

        // if( !empty($currentLocation['gallery'][0]) ){
        //     echo
        //     '<div class="image" style="background-image: url('. $currentLocation['gallery'][0] .')"></div>';
        // }
        // else {
        //     echo
        //     '<div class="image" style="background-image: url(assets/img/items/default.png)"></div>';
        // }
        
        if( !empty($currentLocation['gallery'][0]) ){
            echo
            '<img class="card-img-logo" src="'. $currentLocation['gallery'][0] .'">';
        }
        else {
            echo
            '<div class="card-img-logo"></div>';
            // '<div class="image" style="background-image: url(assets/img/items/default.png)"></div>';
        }

        echo
        '<!--end image-->
    </a>';
if( !empty( $currentLocation['rating'] ) ){
    echo
    '<div class="rating-passive">';
        for($i=0; $i < 5; $i++){
            if( $i < $currentLocation['rating'] ){
                echo '<span class="stars"><figure class="active fa fa-star"></figure></span>';
            }
            else {
                echo '<span class="stars"><figure class="fa fa-star"></figure></span>';
            }
        }
        echo
        '<span class="reviews">'. $currentLocation['reviews_number'] .'</span>'.
        '<br><br> <span class="salary-digit" style="line-height: 1">'.$currentLocation['salary'].'</span>'.
    '</div>';
}
echo
    '<div class="col-md-12 card-options">
        <div class="compare-btn"><img style="width: 25px" src="assets/img/compare-icon.png" alt=""> <a href="javascript:void(0)" class="card-options-btn" style="color: #fff"> Add to compare</a></div>
        <div class="save-btn"><img style="width: 20px;" src="assets/img/star-icon.svg" alt=""> <a href="" class="card-options-btn">Save Job</a></div>
    </div>
    <!--end controls-more-->

</div>
<!--end item-->';
