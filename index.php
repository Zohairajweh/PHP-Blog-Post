<?php
  ini_set( 'display_errors', 1 );
  ini_set( 'display_startup_errors', 1 );
  error_reporting( E_ALL );
  include './includes/Blogs.Class.php';
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
</head>
<body>
  <h1>Blog</h1>
  <?php
    $blogs = new Blogs( dirname( __FILE__ ) . '/data/blog.json' );
    $blogs->output();
  ?>
  <h2>find blogs</h2>
  <p>blogs</p>
 
   <?php
  
  $blogs->findBlogByIndex(4);
?>>
</body>
</html>
