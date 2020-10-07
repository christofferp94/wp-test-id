<?php
    add_filter( "wp_image_editors", function() { return array( "WP_Image_Editor_GD" ); } );
?>