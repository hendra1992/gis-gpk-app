<?php

class Getklasifikasi_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function get_klas_surat() {
        $query = $this->db->query('SELECT kode, nama FROM ref_klasifikasi ORDER BY id ASC');
        return $query->result();
        /*
        if ($query->num_rows() > 0) {
            $dropdowns = $query->result();
            
            $dropDownList[''] = 'Please Select';    // default selection item
            foreach($dropdowns as $dropdown) {
                $dropDownList[$dropdown->nama] = $dropdown->nama;
            }
            //echo implode(' %% ', $dropDownList);
            return $dropDownList;
        } else {
            return false;       // return false if no items for dropdown
        }
        */
    }
}

?>
