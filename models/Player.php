<?php
require_once 'User.php';
require_once 'Post.php';

class Player extends User {
    private $user, $post;
    
    function __construct(User $user, Post $post) {
        $this->user = $user;
        $this->post = $post;
    }

    function getUser() {
        return $this->user;
    }

    function getPost() {
        return $this->post;
    }

    function setUser(User $user) {
        $this->user = $user;
    }

    function setPost(Post $post) {
        $this->post = $post;
    }
}