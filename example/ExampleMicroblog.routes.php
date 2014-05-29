<?php

  require_once('../ngrest/v1/ngrest.php');
  
  require_once('ExampleMicroblogPosts.ctrl.php');
  $posts = new ExampleMicroblogPostsCtrl();


  $router->get('posts.json', ['controller'=>$posts, 'action' => 'getPosts' ] );
  $router->post('posts.json', ['controller'=>$posts, 'action' => 'submitPost' ] );
  $router->put('posts.json', ['controller'=>$posts, 'action' => 'submitPost' ] );
  $router->delete('posts.json', ['controller'=>$posts, 'action' => 'submitPost', ] );

?>