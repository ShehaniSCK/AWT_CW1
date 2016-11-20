<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CommentModel extends CI_Model {
    public function getAllComments($post_id) {
//        $this->db->select('comment_id', 'post_id', 'comment');
//        $this->db->from('comment');
//        $this->db->where('post_id', $post_id);
//        
//        $query = $this->db->get();

        $query = $this->db->get_where('comment', array('post_id' => $post_id));
        return $query->result();
    }
    
}

?>