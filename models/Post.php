<?php

class Post {
    private $post_type, $region, $platform, $description

    function __construct($post_type, $region, $platform, $description) {
        $this->post_type = $post_type;
        $this->region = $region;
        $this->platform = $platform;
        $this->description = $description;
    }

    function getPostType() {
        return $this->post_type;
    }

    function getRegion() {
        return $this->region;
    }

    function getPlatform() {
        return $this->platform;
    }

    function getDescription() {
        return $this->description;
    }

    function setPostType($post_type) {
        $this->post_type = $post_type;
    }

    function setRegion($region){
        $this->region = $region;
    }

    function setPlatform($platform) {
        $this->platform = $platform;
    }

    function setDescription($description) {
        $this->description = $description;
    }
}