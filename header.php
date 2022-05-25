<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php
  wp_head();
  ?>

</head>

<header class="site-header">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top p-4">
    <div class="container">
      <div class="nav-icon">

        <?php
        if (function_exists('the_custom_logo')) {
          the_custom_logo();
        }
        ?>
      </div>
      

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarsExample04">

        <?php
        wp_nav_menu(
          array(
            'menu' => 'main-menu',
            'container' => '',
            'theme_location' => 'main-menu',
            'items_wrap' => '<ul id="" class="navbar-nav">%3$s</ul>'
          )
        );
        ?>


      </div>
    </div>
  </nav>
</header>