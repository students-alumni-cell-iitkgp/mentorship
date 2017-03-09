<?php

/**
 * Created by PhpStorm.
 * User: naoh
 * Date: 3/9/2017
 * Time: 8:22 AM
 */
class GetAdminData extends CI_Model
{
    public function index(){




}
public function getdata(){

    $data = array();
    $query = $this->db->get('users');
    $res   = $query->result();
    return $res;
}

}