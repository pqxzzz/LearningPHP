<?php 
  class Post {
    protected int $id;
    private int $likes = 0;

    protected function setId($id){
      $this->id = $id;
    }
    public function getId(){
      return $this->id;
    }

    public function setLikes($likes){
      $this->likes = $likes;
    }
    public function getLikes(){
      return $this->likes;
    }
  }
  class Photo extends Post {
    private $url;
    
    public function __construct($id){
      $this->setId($id);
    }

    public function getUrl(){
      return $this->url;
    }
  }

  $foto = new Photo(20);
  $foto->setLikes(12);

  echo  "Foto: #".$foto->getId()." - ".$foto->getLikes()." likes.";


?>