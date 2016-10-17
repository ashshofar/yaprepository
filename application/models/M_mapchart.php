<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mapchart extends CI_model{

    function getAll(){
        return $this->db->get('mapchart');
    }

    function getData($data){
      $this->db->select('*');
      $this->db->from('mapchart');
      $this->db->where($data);
      $this->db->join('titlemapchart', 'mapchart.titlemapchart = titlemapchart.id');

      $query = $this->db->get();
        if($query->num_rows() > 0 ){
          foreach ($query->result() as $isi){
            $hasil[] = $isi;
          }
        return $hasil;
        }
    }

    function m_create($data)
	{
		$this->db->insert('mapchart',$data);
	}

	function m_delete($data)
	{
		$this->db->delete('mapchart',$data);
	}

	function m_edit($data){
		$this->db->where($data);
		$edit = $this->db->get('mapchart');
		return $edit->result();
	}

	function m_update($data,$id){
		$this->db->where('hc-key', $id);
		$this->db->update('mapchart',$data);
	}

}
