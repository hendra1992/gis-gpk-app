<?php

class Get_namainstansi_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function get_instansi() {
        $query = $this->db->query("SELECT * FROM tr_instansi LIMIT 1")->row();
        return $query->result();
    }
}

?>
