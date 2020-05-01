<?php

  ini_set( 'display_errors', 1 );
  ini_set( 'display_startup_errors', 1 );
  error_reporting( E_ALL );
  include './includes/Blogs.Class.php';
  
  if ( isset( $_POST ) && !empty( $_POST ) ) 
  {
   
    }
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">

  <title>Blog</title>
</head>
<body>
  <h1>Blog</h1>
  <?php
    $blogs = new Blogs( dirname( __FILE__ ) . '/data/blog.json' );
    $blogs->output();
  ?>

  <h2>find blogs :</h2>
  <p>blogs:</p>
  <div> 
<?php 

     $blogs->findBlogByIndex(21)
     
?>
</div>

</body>
</html>
