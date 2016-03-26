<?php require_once('../../lib/includes.php');?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Basic Proof of Concept Bootstrap Template</title>
    <?php \POC\Renderer::render_css();?>
    <?php \POC\Renderer::render_header_js();?>
  </head>
  <body>

  <h1>Hello, world!</h1>
  <?php echo $user->getUsername();?>

  <?php \POC\Renderer::render_footer_js();?>
  </body>
</html>