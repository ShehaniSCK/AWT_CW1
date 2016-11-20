<?php

class PostController extends CI_Controller {

    public function index() {
        $this->load->model('PostModel');
        $this->getAllPosts();
    }

    public function getAllPosts() {
        $data['records'] = $this->PostModel->getPosts();
        $this->load->view('post_view', $data);
    }

    public function creatPost() {
        $username = "Kalapuge";
        $link = "http://buzzfeed.com";
        $description = "Buzzfeed Site";

        $this->PostModel->createPost($username, $link, $description);
    }

    public function getComments() {
        $data['records'] = $this->PostModel->getAllComments(2);
        $this->load->view('post_view', $data);
    }

    public function getVoteCount() {
        $data['records'] = $this->PostModel->getAllComments(2);
        $this->load->view('post_view', $data);
    }

}

?>