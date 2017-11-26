<?php

class Post extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model("post_model");

        $user = $this->session->userdata("user");

        if (!$user) {
            redirect(base_url("giris-yap"));
        }
    }

    public function index()
    {

        $viewData = new stdClass();
        $viewData->user = $this->session->userdata("user");

//        $viewData->posts = $this->post_model->get_all();
        $viewData->posts = $this->post_model->post_list();

        $this->load->view("post_list_v", $viewData);

    }

    public function vote()
    {

        $post_id = $this->input->post("post_id");
        $vote_status = $this->input->post("vote_status");

        $user = $this->session->userdata("user");
        $user_id = $user->id;

        $this->load->model("vote_model");


        $vote = $this->vote_model->get(
            array(
                "post_id" => $post_id,
                "user_id" => $user_id,
            )
        );

        if ($vote) {


            if($vote->vote_status == $vote_status){

                $new_vote_status = 0;

            } else {

                $new_vote_status = $vote_status;
                
            }

            $update = $this->vote_model->update(
                array(
                    "post_id" => $post_id,
                    "user_id" => $user_id,
                    "vote_status" => $new_vote_status
                ),
                array(
                    "id" => $vote->id
                )
            );


        } else {

            $insert = $this->vote_model->add(
                array(
                    "post_id" => $post_id,
                    "user_id" => $user_id,
                    "vote_status" => $vote_status
                )
            );

        }

//        $renderData["posts"] = $this->post_model->post_list();
//        echo $this->load->view("renders/post_list_render", $renderData, true);

        $renderData["post"] = $this->post_model->get_post($post_id);
        echo $this->load->view("renders/post_render", $renderData, true);


    }


}