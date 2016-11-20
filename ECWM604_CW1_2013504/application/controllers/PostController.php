<?php
/**
 * This class will act as controller to handle posts
 *
 * @author Shehanik
 */
class PostController extends CI_Controller {

    public function index() {
        $this->load->model('PostModel');
        $this->getAllPosts();
        //$this->load->view('add_post_view');
    }

    public function getAllPosts() {
        $data['records'] = $this->PostModel->getPosts();
        $this->load->view('post_view', $data);
//        echo 'getAllPosts'.$post;
//        echo 'other'.$other;
    }

    public function creatPost() {
        $username = "Kalapuge";
        $link = "http://buzzfeed.com";
        $description = "Buzzfeed Site";

        $this->PostModel->createPost($username, $link, $description);
    }

    public function getComments($postId) {
        $data['records'] = $this->PostModel->getAllComments($postId+1);
        $this->load->view('post_view', $data);
    }

    public function getVoteCount() {
        $data['records'] = $this->PostModel->getAllComments(2);
        $this->load->view('post_view', $data);
    }
    
    public function increaseVote($post_id, $vote_count){
        $this->load->model('PostModel');
        $this->PostModel->votePost($post_id, $vote_count+1);
        $this->getAllPosts();
    }
    
    public function decreaseVote($post_id, $vote_count){
        $this->load->model('PostModel');
        $this->PostModel->votePost($post_id, $vote_count-1);
        $this->getAllPosts();
    }

}

?>