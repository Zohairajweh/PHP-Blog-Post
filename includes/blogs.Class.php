<?php 
include_once dirname( __FILE__ ) . '/Blog.Class.php';
class Blogs
{
  private $allBlogs = array();
  function __construct ( $jsonFilePath = '' )
  { 
    if ( file_exists( $jsonFilePath ) )
    { 
      $jsonString = file_get_contents( $jsonFilePath );
      $jsonObject = json_decode( $jsonString );
      if ( is_array( $jsonObject->articles ) )
      { 
        $this->allBlogs = $jsonObject->articles;
      }
      else
      { 
        echo '<p>WARNING: The blogs appear to be malformed!</p>';
      }
    }
    else
    { 
      echo '<p>WARNING: Your file doesn\'t exist!</p>';
    }
  }
  public function output ()
  { 
    if ( is_array( $this->allBlogs ) && !empty( $this->allBlogs ) )
    { 
      echo '<h2>Blogs List</h2><ul>';
      foreach ( $this->allBlogs as $blog )
      { 
        $newBlog = new blog( $blog->id, $blog->title, $blog->content );
        echo '<li>'.$newBlog->output( FALSE ).'</li>';
      } 
      echo '</ul>';
    }
  }
  public function findBlogByIndex ( $FindID = FALSE )
  { 
    if ( is_integer( $FindID ) )
    { 
      if ( isset( $this->allBlogs[$FindID] ) )
      { 
        $foundBlog = new Blog(
          $this->allBlogs[$FindID]->id,
          $this->allBlogs[$FindID]->title,
          $this->allBlogs[$FindID]->content
        );
        $foundBlog->output();
      }
      else
      { 
        echo '<p>Sorry, we couldn\'t find a blog at ID: '.$FindID.'!</p>';
      }
    }
    else
    { 
      echo '<p>No ID, or an invalid ID was passed; unable to find blog for ID: '.$FindID.'.</p>';
    }
  }
}