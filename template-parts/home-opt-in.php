<?php

  $opt_in_text = get_post_meta( 8, 'opt_in_text', true );
  $opt_in_button_text = get_post_meta( 8, 'opt_in_button_text', true );

?>

<!-- OPT IN SECTION
================================================== -->
<section id="optin">
  <div class="container">
    <div class="row">

      <div class="col-sm-8">
        <p class="lead"><?php echo $opt_in_text; ?></p>
      </div><!-- end col -->

      <div class="col-sm-4">
        <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
          <?php echo $opt_in_button_text; ?>
        </button>
      </div><!-- end col -->

    </div><!-- row -->
  </div><!-- container -->
</section><!-- optin -->
