<?php
class Blog {
  public $id  = 0;
  public $title = '';
  public $content  = '';
  function __construct ( $id = 0, $title = 'no title', $content = 'Uncategorized' )
  {
    if ( is_integer( $id ) && !empty( $id ) )
      $this->id = $id;
      if ( is_string( $title ) && !empty( $title ) )
      $this->title = $title;
    if ( is_string( $content ) && !empty( $content ) )
      $this->content = $content;
  }
  public function output ( $echo = TRUE )
  {
    $output = '';
    ob_start(); 
    ?>
      <dl>
        <dt>ID : </dt>
        <dd><?php echo $this->id; ?></dd>
        <dt>Title :</dt>
        <dd><?php echo $this->title; ?></dd>
        <dt>Content : </dt>
        <dd><?php echo $this->content; ?></dd>
      </dl>
    <?php 
    $output = ob_get_clean(); 
    if ( $echo === TRUE ) echo $output; 
    return $output; 
  }
}