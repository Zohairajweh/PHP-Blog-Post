<?php
class Blog {
  public $id  = 0.00;
  public $title = '';
  public $content  = '';
  function __construct ( $id = 0.00, $title = 'no title', $content = 'Uncategorized' )
  {
    if ( is_float( $id ) && !empty( $id ) )
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
        <dt>id</dt>
        <dd><?php echo $this->id; ?></dd>
        <dt>title</dt>
        <dd><?php echo $this->title; ?></dd>
        <dt>content</dt>
        <dd><?php echo $this->content; ?></dd>
      </dl>
    <?php 
    $output = ob_get_clean(); 
    if ( $echo === TRUE ) echo $output; 
    return $output; 
  }
}