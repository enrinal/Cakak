<?php 
/**
* 
*/
class Rute extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Rute_model');

		if($this->session->userdata('logined')&& $this->session->userdata('logined') != true)
		{
			redirect('/');
		}
			
	}

	function index()
	{
		$data['rute']=$this->Rute_model->ambil_data();
		$this->load->view('Rute/Rute_list',$data);
	}

	function tambah(){
		$data=array(
			'no'=>set_value('no'),
			'origin'=>set_value('origin'),
			'destination'=>set_value('destination'),
			'waypoint0'=>set_value('waypoint0'),
			'waypoint1'=>set_value('waypoint1'),
			'waypoint2'=>set_value('waypoint2'),
			'waypoint3'=>set_value('waypoint3'),
			'button'=>'Tambah',
			'action'=>site_url('Rute/tambah_aksi'),
			);
		$this->load->view('Rute/rute_form',$data);
	}

	function tambah_aksi(){
		$data=array(
			'no'=>set_value('no'),
			'origin'=>set_value('origin'),
			'destination'=>set_value('destination'),
			'waypoint0'=>set_value('waypoint0'),
			'waypoint1'=>set_value('waypoint1'),
			'waypoint2'=>set_value('waypoint2'),
			'waypoint3'=>set_value('waypoint3'),

			);
		$this->Rute_model->tambah_data($data);
		redirect(site_url('Rute'));
	}
	function delete($id){
		$this->Rute_model->hapus_data($id);
		redirect(site_url('Rute'));
	}
	function edit($id){
		$krw=$this->Rute_model->ambil_data_id($id);
		$data=array(
			'no'	=>set_value('no',$krw->no),
			'origin'	=>set_value('origin',$krw->origin),
			'destination'	=>set_value('destination',$krw->destination),
			'waypoint0'	=>set_value('waypoint0',$krw->waypoint0),
			'waypoint1'	=>set_value('waypoint1',$krw->waypoint1),
			'waypoint2'	=>set_value('waypoint2',$krw->waypoint2),
			'waypoint3'	=>set_value('waypoint3',$krw->waypoint3),
			'button'	=>'Edit',
			'action'	=>site_url('Rute/edit_aksi'),
			);
		$this->load->view('Rute/rute_form',$data);
	}

	function edit_aksi(){
		$data=array(
			'no'=>$this->input->post('no'),
			'origin'=>$this->input->post('origin'),
			'destination'=>$this->input->post('destination'),
			'waypoint0'=>$this->input->post('waypoint0'),
			'waypoint1'=>$this->input->post('waypoint1'),
			'waypoint2'=>$this->input->post('waypoint2'),
			'waypoint3'=>$this->input->post('waypoint3'),
			);
		$id=$this->input->post('no');
		$this->Rute_model->edit_data($id,$data);
		redirect(site_url('Rute'));
	}


}
 ?>