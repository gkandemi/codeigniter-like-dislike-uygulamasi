<?php

class Post extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model("post_model");

        $user = $this->session->userdata("user");

        if(!$user){
            redirect(base_url("giris-yap"));
        }
    }

    public function index(){

        $viewData = new stdClass();
        $viewData->user = $this->session->userdata("user");

//        $viewData->posts = $this->post_model->get_all();
        $viewData->posts = $this->post_model->post_list();

        $this->load->view("post_list_v", $viewData);

    }

    public function vote(){

        $post_id     = $this->input->post("post_id");
        $vote_status = $this->input->post("vote_status");

        $user        = $this->session->userdata("user");
        $user_id     = $user->id;

        $this->load->model("vote_model");

        $insert = $this->vote_model->add(
            array(
                "post_id"       => $post_id,
                "user_id"       => $user_id,
                "vote_status"   => $vote_status
            )
        );

        echo $insert;

    }


}