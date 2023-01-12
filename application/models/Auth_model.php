<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public $table = 'tb_user';
    public $id = 'tb_user.id';

    public function __construct()
    {
        parent::__construct();
    }

    public function login($email, $password)
    {
        $query = $this->db->get_where($this->table, array('email' => $email, 'password' => $password));
        return $query->row_array();
    }
}
