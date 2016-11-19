<?php
class PostModel extends CI_Model{
    public function getPosts(){
        //$this->db->select('post_id', 'username', 'link', 'description');
        //$this->db->from('post');
        
        $query = $this->db->get('post');
        return $query->result();
      
//      if ($query->num_rows() >= 1){

    }
    
    public function createPost($username, $link, $description){
        
        $data = array('username' => $username,
                      'link' => $link,
                      'description' => $description);

        $this->db->insert('post', $data); 
        
        echo 'Data Entered Succesfully';
    }
    
    public function getAllComments($post_id){
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