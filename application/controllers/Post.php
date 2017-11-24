<?php

class Post extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model("post_model");
    }

    public function index(){


        $viewData = new stdClass();
        $viewData->user = $this->session->userdata("user");

        $viewData->posts = $this->post_model->get_all();

        $this->load->view("post_list_v", $viewData);

    }

}