<?php

// ta bort header från alla sidor
 add_action( 'wp', 'remove_astra_header_callback');
function remove_astra_header_callback(){
remove_action( 'astra_header', 'astra_header_markup' );
} 

//Lägg till en banan
  add_action('astra_content_before' , 'greetings_after_products');
function greetings_after_products() {
    //if(is_store()) {}
    echo '-  banan istället för header.............. Tada!!';
}  

 add_action( 'wp' , 'remove_single_header');
function remove_single_header() {
    remove_all_actions('astra_single_header');
} 
 


 //ändra lite i texten vid kassan
 add_action('astra_policy_before' , 'greetings_from_jail');
function greetings_from_jail() {
    echo 'Dina personuppgifter kommer användas för att sätta dig i fängelse, förbättra din upplevelse på webbplatsen och i framtida cell genom att läsa vår';
}

 // Lägg till support för saker
 add_theme_support('post-thumbnails');
    
 add_theme_support('widgets');

 add_theme_support('menus');

 //Lägg till menyer
 add_action('after_setup_theme', 'register_menu');

 function register_menu() {
     register_nav_menu('footermenu', 'Sociala medier');
 }

 register_sidebar( 
    [
        'name' => 'widget sidebar',
        'id' => 'widget-sidebar',
        'description' => 'Det här är en sidebar widget'
    ]
);

register_sidebar( 
    [
        'name' => 'SocialMedia',
        'id' => 'Social-sidebar',
        'description' => 'Det här är en social media widget'
    ]
);

//add_filter( 'astra_enable_woocommerce_integration', '__return_false' );
    ?>
 