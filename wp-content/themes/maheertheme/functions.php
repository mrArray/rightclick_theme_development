<?php
//add dynamic title tag 

add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');



function maheer_menu()
{
$locations = array(  

    'primary'=>"Desktop Primary Left Sidebar",
    'footer'=>"Footer Menu Items"
);
    register_nav_menus($locations);
    

}
    add_action('init','maheer_menu');



function maheer_register_style()
{

$version = wp_get_theme()->get('Version');
wp_enqueue_style('maheer_style',get_template_directory_uri(). "/style.css", array ('maheer_bootstrap'), $version ,'all');
wp_enqueue_style('maheer_bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array (),'4.4.1','all');
wp_enqueue_style('maheer_fontawesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css",array (),'5.13.0','all');


}
 add_action('wp_enqueue_scripts', 'maheer_register_style');


 function maheer_register_scripts()
 {
    wp_enqueue_script('maheer_jquery','https://code.jquery.com/jquery-3.4.1.slim.min.js', array (), '3.4.1',true);
    wp_enqueue_script('maheer_popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array (), '1.16.0',true);
    wp_enqueue_script('maheer_bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array (), '4.4.1',true);
    wp_enqueue_script('maheer_main',get_template_directory_uri()."/asset/js/main.js", array (), '1.0',true);


 }

 add_action('wp_enqueue_scripts', 'maheer_register_scripts');



 //create widget area of the whole system
 function maheer_widget_areas()
 
 {
     //header sidebar
    register_sidebar(  
         array(

        'before_title'=>'',
        'after_title'=>'',
        'before_widget'=>'',
        'after_widget'=>'',
        'name'=>'Header Widget Area',
        'id'=>'sidebar-1',
        'description'=>'Sidebar Widget Area'
    )
);

// footer sidebar 
register_sidebar(  
    array(

   'before_title'=>'',
   'after_title'=>'',
   'before_widget'=>'',
   'after_widget'=>'',
   'name'=>'Footer Widget Area',
   'id'=>'footer-1',
   'description'=>'footer Widget Area'
)
    );
}

add_action('widgets_init', 'maheer_widget_areas');


?>
