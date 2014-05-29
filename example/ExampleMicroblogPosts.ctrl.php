<?php
  class ExampleMicroblogPostsCtrl extends API{
    public function __construct(){
      parent::__construct();
    }
    public function getPosts(){
      
      $posts = [
        [
          'date'=>'4/2/2014',
          'user' => 'twitter_user',
          'post' => 'my returned post'
        ],
        [
          'date'=>'4/5/2014',
          'user' => 'twitter_user',
          'post' => 'my SECOND returned post'
        ]
      ];
      echo json_encode($posts);
    }

    public function submitPost(){
      
      $data = $this->cleanParams;

      foreach ($data as $key => $value) {
        $postRtn[$key] = $value;
      }
      
      echo json_encode($postRtn);
    }
  }
?>