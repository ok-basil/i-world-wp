<?php

/**
 * Template name: Front Page
 * The template for displaying all single posts
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * 
 * @package asauk
 */

    get_header();
    $post_id = get_the_ID();
?>

<main>
    <section class="first-section">
        <div class="site-wrapper">
            <div class="container">
                <div class="first-half">
                    <h4><?php echo get_field('title', $post_id); ?></h4>
                    <h1><?php echo get_field('subtitle', $post_id); ?></h1>
                </div>
                <div class="second-half">
                    <img src="<?php echo get_template_directory_uri(); ?> /assets/img/hero-image.png" alt="hero-image">
                </div>
            </div>
        </div>
    </section>
    <section class="second-section">
        <div class="site-wrapper">
            <div class="second-container">
                <span class="second-section-title">
                    <h1><?php echo get_field('section_title', $post_id); ?></h1>
                    <span class="lines">
                        <img src="<?php echo get_template_directory_uri(); ?> /assets/icons/first-line.png" alt="green-line">
                        <img src="<?php echo get_template_directory_uri(); ?> /assets/icons/second-line.png" alt="orange-line">
                    </span>
                </span>
                <div class="hostel-div">
                    <div class="hostel-content">
                        <h3><?php echo get_field('category_1', $post_id); ?></h3>
                        <h2><?php echo get_field('hostel_title', $post_id); ?></h2>
                        <h5><?php echo get_field('hostel_content', $post_id); ?></h5>
                        <button><h5>Get Started</h5></button>
                    </div>
                    <div class="hostel-image">
                        <img src="<?php echo get_template_directory_uri(); ?> /assets/icons/vector.png" alt="vector">
                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/hostel.png" alt="hostel-image">
                    </div>
                </div>
                <div class="campus-div">
                    <div class="campus-image">
                        <img src="<?php echo get_template_directory_uri(); ?> /assets/icons/vector.png" alt="vector">
                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/campus.png" alt="campus-image">
                    </div>
                    <div class="campus-content">
                        <h3><?php echo get_field('category_2', $post_id); ?></h3>
                        <h2><?php echo get_field('campus_title', $post_id); ?></h2>
                        <h5><?php echo get_field('campus_content', $post_id); ?></h5>
                        <button><h5>Get Started</h5></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>