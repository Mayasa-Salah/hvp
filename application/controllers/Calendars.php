<?php
class Calendars extends CI_Controller{

	public function add()
	{
	 $data=$this->input->post(null,true);
	 $this->load->model('calendar');
	 $this->calendar->add_event($data);
	 redirect('Routing/admin');
	}

	public function edit($id)
	{
	 $this->load->model('calendar');
	 $data=$this->calendar->get_one($id);
	 $this->load->view('edit',$data);
	 redirect('Routing/admin');
	}

	public function edit_event()
	{
	  $data=$this->input->post(null,true);
	  $this->load->model('calendar');
	  $this->calendar->update($data);
	  redirect('/')	;
	}



}

?>
