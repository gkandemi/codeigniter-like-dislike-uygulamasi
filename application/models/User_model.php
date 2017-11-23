<?php
/**
 * Created by gkandemir
 * User: gkandemir
 */

class User_model extends CI_Model {

    public $table;

    public function __construct()
    {
        parent::__construct();

        $this->table = "users";
    }

    public function get($where = array()){

        return $this->db->where($where)->get($this->table)->row();

    }


}
