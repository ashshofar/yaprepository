<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapchart extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->_init();
        $this->load->model(array('m_mapchart'));
    }

    private function _init()
    {
        $this->output->set_template('admin');
    }

    public function index(){
        // menyimpan data user untuk dipassing ke view
        $data['mapcharts'] = $this->M_mapchart->getAll();
        $this->load->view('mapchart/index',$data);
    }

    public function create(){
        $this->load->view('mapchart/create');
    }

    public function save(){
        $data=array(
            'id' => $this->input->post('id'),
            'kategori' => $this->input->post('kategori'),
            'deskripsi' => $this->input->post('deskripsi')
            );
        $this->m_kategori->m_create($data);
        redirect(base_url().'kategori/');
    }

    public function delete($id){
        $data=array(
            'id' => $id
            );
        $this->m_kategori->m_delete($data);
        redirect(base_url().'kategori/');
    }

    public function edit($id){
        $data=array(
            'id'=>$id
            );
        $data['data_edit']=$this->m_kategori->m_edit($data);
        $this->load->view('kategori/edit',$data);
    }

    public function view($id){
        $data=array(
            'titlemapchart'=>$id
            );
        $data['hasil']=$this->m_mapchart->getData($data);
        $this->load->view('mapchart/view',$data);
    }

    function update(){
        $id = $this->input->post('id');
        $data=array(
            'id' => $this->input->post('id'),
            'kategori' => $this->input->post('kategori'),
            'deskripsi' => $this->input->post('deskripsi')
            );
        $this->m_kategori->m_update($data,$id);
        redirect(base_url().'kategori/');
    }
}
