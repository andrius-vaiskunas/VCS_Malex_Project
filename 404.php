<?php
/*Template Name: 404*/
get_header();
$hero = get_field('hero');
?>

<div id="container" class="p-5">
    <div id="main">
        <div class="p-5">
            <div class="container py-5 pt-5">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/dino.png" alt="Photo" class="dino" />
                <h1 class="page-secondary-text">404 Error</h1>
                <p class="col-md-4 page-secondary-text pb-3">
                    The page you are looking for couldn't be found or still under
                    construction.
                </p>
                <?php if ($hero['link']) : ?>
                    <a class="btn btn-outline-dark btn-square-md" href="<?php echo $hero['link']; ?>" role="button">Back to Homepage</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>



<?php
get_footer();
?>