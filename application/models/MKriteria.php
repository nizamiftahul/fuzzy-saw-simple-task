<?php

class MKriteria extends CI_Model
{
    public $bobot;
    public $created_at;
    public $updated_at;

    public function get_entries()
    {
        $query = $this->db->get('kriteria');
        return $query->result();
    }

    public function get_entries_by_id($id)
    {
        $query = $this->db->get_where('kriteria', ['id' => $id]);
        return $query->row();
    }

    public function update_entry($id, $bobot)
    {
        $this->bobot        = $bobot;
        $this->updated_at   = date('Y-m-d H:i:s');

        $this->db->trans_start();
        $this->db->update('kriteria', $this, ['id' => $id]);
        $this->db->trans_complete();
    }
}
