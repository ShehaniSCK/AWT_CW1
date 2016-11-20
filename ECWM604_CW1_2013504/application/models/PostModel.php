<?php

class PostModel extends CI_Model {

    public function getPosts() {
        //$this->db->select('post_id', 'username', 'link', 'description');
        //$this->db->from('post');
        //$this->db->get('post');
        //$query = $this->db->order_by("vote_count", "desc");
        
        $this->db->from('post');
        $this->db->order_by("vote_count", "desc");
        $query = $this->db->get();
        return $query->result();

//      if ($query->num_rows() >= 1){
    }

    public function createPost($username, $link, $description) {

        $data = array('username' => $username,
            'link' => $link,
            'description' => $description);

        $this->db->insert('post', $data);

        echo 'Data Entered Succesfully';
    }

    public function votePost($post_id, $vote_count){
        $this->db->set('vote_count', $vote_count); 
        $this->db->where(array('post_id' => $post_id));
        $this->db->update('post'); 
    }

}

?>