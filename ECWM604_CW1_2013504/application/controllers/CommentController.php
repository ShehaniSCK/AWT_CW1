<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class CommentController extends CI_Controller {
    public function index(){
        $this->load->model('CommentModel');
//        $this->getComments(1);
    }
    
    public function getComments($postId) {
        $this->load->model('CommentModel');
        $data['records'] = $this->CommentModel->getAllComments($postId+1);
        $this->load->view('comment_view', $data);
    }
}

?>

