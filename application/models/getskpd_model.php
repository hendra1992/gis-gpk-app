<?php

class Getskpd_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function get_list_skpd() {
        $query = $this->db->query('SELECT id_skpd, nama_skpd, singkatan_skpd FROM t_skpd ORDER BY id_skpd ASC');
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
