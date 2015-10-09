<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>

<?php get_template_part( 'template-parts/home', 'hero' ); ?>
<?php get_template_part( 'template-parts/home', 'opt-in' ); ?>
<?php get_template_part( 'template-parts/home', 'income' ); ?>
<?php get_template_part( 'template-parts/home', 'who' ); ?>
<?php get_template_part( 'template-parts/home', 'course' ); ?>
<?php get_template_part( 'template-parts/home', 'project' ); ?>

<!-- VIDEO FEATURETTE
================================================== -->
<section id="featurette">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2>Watch the Course Introduction</h2>
        <iframe width="100%" height="415" src="//www.youtube.com/embed/q-mJJsnOHew" frameborder="0" allowfullscreen></iframe>
      </div><!-- end col -->
    </div><!-- row -->
  </div><!-- container -->
</section><!-- featurette -->

<?php get_template_part( 'template-parts/home', 'instructor' ); ?>
<?php get_template_part( 'template-parts/home', 'testimonials' ); ?>

<?php get_footer(); ?>
