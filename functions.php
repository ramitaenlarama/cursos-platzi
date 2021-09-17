<?php 


function plz_assets(){

    wp_register_style("google-font","https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700",array(),false,'all');
    wp_register_style("google-font-2","https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap",array(),false,'all');
    wp_register_style("bootstrap","https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css",array(),"5-1",'all');

    wp_enqueue_style("estilos", get_template_directory_uri()."/assets/css/style.css", array("google-font","bootstrap"));

    wp_enqueue_script("yardsale-js",get_template_directory_uri()."/assets/js/script.js");
}

add_action("wp_enqueue_scripts","plz_assets");

function plz_analytics(){
    ?>
    
    <?php
}

add_action("wp_body_open","plz_analytics");