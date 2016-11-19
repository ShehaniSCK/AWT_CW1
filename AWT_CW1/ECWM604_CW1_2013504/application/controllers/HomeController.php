<?php

class HomeController extends CI_Controller{
    public function index(){
        $data['val'] = array("Shehani", "Chamoda", "Kalapuge");
        $this->load->view('HomeView', $data);
    }
    
    public function test(){
        echo "Test function";
    }
}
?>

