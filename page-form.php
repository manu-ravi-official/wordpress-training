<?php
/**
Template Name:testing
*/

get_header();

?>
<div class="pt-5 ml-4">
    <?php
    
    echo do_shortcode('[contact-form-7 id="25098" title="contact"]'); ?>
</div>
<?php
get_footer();
?>