<?php
/**
 * Created by gkandemir
 * User: gkandemir
 */

class Vote_model extends CI_Model {

    public $table;

    public function __construct()
    {
        parent::__construct();

        $this->table = "votes";
    }

    public function get($where = array()){

        return $this->db->where($where)->get($this->table)->row();

    }

    public function add($insert = array()){
        return $this->db->insert($this->table, $insert);
    }

}
