<?php
    function load_stylesheet()
    {
        wp_register_style('style12',get_template_directory_uri() . '/assets/css/style.css ',array(),1,'all');
        wp_enqueue_style('style12');
        wp_register_style('style6',get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css ',array(),1,'all');
        wp_enqueue_style('style6');
        wp_register_style('style1',get_template_directory_uri() . '/assets/img/favicon.png ',array(),1,'all');
        wp_enqueue_style('style1');
        wp_register_style('style7',get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css',array(),1,'all');
        wp_enqueue_style('style7');
        wp_register_style('style8',get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css ',array(),1,'all');
        wp_enqueue_style('style8');
        wp_register_style('style10',get_template_directory_uri() . '/assets/vendor/remixicon/remixicon.css ',array(),1,'all');
        wp_enqueue_style('style10');
        wp_register_style('style3',get_template_directory_uri() . '/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i ',array(),1,'all');
        wp_enqueue_style('style3');
        wp_register_style('style9',get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css',array(),1,'all');
        wp_enqueue_style('style9');
        wp_register_style('style2',get_template_directory_uri() . '/assets/img/apple-touch-icon.png ',array(),1,'all');
        wp_enqueue_style('style2');  
        wp_register_style('style4',get_template_directory_uri() . '/assets/vendor/animate.css/animate.min.css ',array(),1,'all');
        wp_enqueue_style('style4');
        wp_register_style('style11',get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css ',array(),1,'all');
        wp_enqueue_style('style11');     
    }
    add_action('wp_enqueue_scripts','load_stylesheet');

    function add_js()
    {
       
        wp_register_script('js0',get_template_directory_uri() . '/ assets/js/main.js',array(),1,1,1);
      wp_enqueue_script('js0');
        wp_register_script('js',get_template_directory_uri() . '/assets/vendor/aos/aos.js',array(),1,1,1);
      wp_enqueue_script('js');

      wp_register_script('js1',get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',array(),1,1,1);
      wp_enqueue_script('js1');

      wp_register_script('js2',get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js',array(),1,1,1);
      wp_enqueue_script('js2');
      
      wp_register_script('js3',get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js',array(),1,1,1);
      wp_enqueue_script('js3');

      wp_register_script('js4',get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js',array(),1,1,1);
      wp_enqueue_script('js4');
      
      wp_register_script('js5',get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js',array(),1,1,1);
      wp_enqueue_script('js5');

      wp_register_script('js6',get_template_directory_uri() . '/assets/vendor/waypoints/noframework.waypoints.js',array(),1,1,1);
      wp_enqueue_script('js6');
    }
    add_action('wp_enqueue_scripts','add_js');

?>