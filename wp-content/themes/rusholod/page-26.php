<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <style>
            #map_wrapper {
                height: 400px;
            }
            .one_third {
                width: 33.3%;
                padding: 5px;
            }
            #map_canvas {
                width: 100%;
                height: 100%;
            }
             .entry-content {
                 margin-left: 5%;
                 margin-right: 5%;
             }
        </style>
        <script>
            jQuery(function($) {
                // Asynchronously Load the map API
                var script = document.createElement('script');
                script.src = "https://maps.googleapis.com/maps/api/js?callback=initialize&key=AIzaSyDSh6GdV195b1Cs6lwxjd4xqcI2CVc_-Mc";
                document.body.appendChild(script);
            });

            function initialize() {
                var map;
                var bounds = new google.maps.LatLngBounds();
                var myLatlng = {lat: 59.977560, lng: 30.331928};
                var mapOptions = {
                    mapTypeId: 'roadmap',
                    center: myLatlng
                };

                // Display a map on the page
                map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
                map.setTilt(45);

                // Multiple Markers
                var markers = [
                    ['Представительство в СПб', 59.977560, 30.331928],
                    ['Филиал в Астрахани', 46.327499, 48.028513],
                    ['Представительство по Перми и Пермскому краю', 44.556559, 33.515537],
                    ['Филиал в Севастополе', 57.967130, 56.223950]
                ];

                // Info Window Content
                var infoWindowContent = [
                    ['<div class="info_content">' +
                    '<h3>Представительство в СПб</h3>' +
                    '<p>Офис: ул. Матросова д.4, Литер П</p>' + '</div>'],
                    ['<div class="info_content">' +
                    '<h3>Филиал в Астрахани</h3>' +
                    '<p>ул. Брестская, д. 7</p>' + '</div>'],
                    ['<div class="info_content">' +
                    '<h3>Представительство по Перми и Пермскому краю</h3>' +
                    '<p>ул. Лодыгина 53</p>' + '</div>'],
                    ['<div class="info_content">' +
                    '<h3>Филиал в Севастополе</h3>' +
                    '<p>ул. Индустриальная д 28/28, ТЦ Мельница</p>' + '</div>']
                ];

                // Display multiple markers on a map
                var infoWindow = new google.maps.InfoWindow(), marker, i;

                // Loop through our array of markers & place each one on the map
                for( i = 0; i < markers.length; i++ ) {
                    var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                    bounds.extend(position);
                    marker = new google.maps.Marker({
                        position: position,
                        map: map,
                        title: markers[i][0]
                    });


                    // Allow each marker to have an info window
                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            infoWindow.setContent(infoWindowContent[i][0]);
                            infoWindow.open(map, marker);
                        }
                    })(marker, i));


                    // Automatically center the map fitting all markers on the screen
                    map.fitBounds(bounds);
                }

                // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
               /* var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                    this.setZoom(14);
                    google.maps.event.removeListener(boundsListener);
                });*/

            }
        </script>
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            // Include the page content template.
            get_template_part( 'template-parts/content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }

            // End of the loop.
        endwhile;
        ?>

    </main><!-- .site-main -->

    <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_footer(); ?>
