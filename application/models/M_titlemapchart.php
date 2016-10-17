<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_titlemapchart extends CI_model{

  function getAll(){
      return $this->db->get('titlemapchart');
  }

  function m_create($data)
	{
		$this->db->insert('titlemapchart',$data);
  }

  function m_create_map($data2)
  {
    $this->db->insert_batch('mapchart',$data2);
  }

	function m_delete($data)
	{
		$this->db->delete('titlemapchart',$data);
	}

	function m_edit($data){
		$this->db->where($data);
		$edit = $this->db->get('titlemapchart');
		return $edit->result();
	}

	function m_update($data,$id){
		$this->db->where('id', $id);
		$this->db->update('titlemapchart',$data);
	}

}
