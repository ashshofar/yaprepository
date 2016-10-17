<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Titlemapchart extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->_init();
        $this->load->model(array('M_titlemapchart'));
    }

    private function _init()
    {
        $this->output->set_template('admin');
    }

    public function index(){
        // menyimpan data user untuk dipassing ke view
        $data['titlemapcharts'] = $this->M_titlemapchart->getAll();
        $this->load->view('titlemapchart/index',$data);
    }

    public function create(){
        $this->load->view('titlemapchart/create');
    }

    public function save(){
        $data=array(
            'id' => $this->input->post('id'),
            'title' => $this->input->post('title'),
            );
        $this->M_titlemapchart->m_create($data);

        $data2=array(
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-ac',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-kl',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-jt',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-be',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-bt',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-kb',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-bb',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-ba',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-ji',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-ks',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-nt',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-se',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-kr',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-lb',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-su',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-ri',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-sw',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-la',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-sb',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-ma',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-nb',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-sg',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-st',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-pa',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-jr',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-1024',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-jk',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-go',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-yo',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-kt',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-sl',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-sr',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
          array(
            'id' => $this->input->post('id'),
            'hc-key' => 'id-ja',
            'value' => '0',
            'titlemapchart' => $this->db->insert_id()
          ),
        );

        $this->M_titlemapchart->m_create_map($data2);
        redirect(base_url().'titlemapchart/');
    }

    public function delete($id){
        $data=array(
            'id' => $id
            );
        $this->M_titlemapchart->m_delete($data);
        redirect(base_url().'titlemapchart/');
    }

    public function edit($id){
        $data=array(
            'id'=>$id
            );
        $data['data_edit']=$this->M_titlemapchart->m_edit($data);
        $this->load->view('titlemapchart/edit',$data);
    }

    public function view($id){
        $data=array(
            'id'=>$id
            );
        $data['data_edit']=$this->m_kategori->m_edit($data);
        $this->load->view('kategori/view',$data);
    }

    function update(){
        $id = $this->input->post('id');
        $data=array(
            'id' => $this->input->post('id'),
            'kategori' => $this->input->post('kategori'),
            );
        $this->M_titlemapchart->m_update($data,$id);
        redirect(base_url().'titlemapchart/');
    }
}
