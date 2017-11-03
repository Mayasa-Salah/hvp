<?php
/**
 *
 */
class Routing extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('url','form'));
    $this->load->library(array('form_validation','session'));
  }
  public function index()
	{
		$this->load->view('home');
	}

  public function about()
  {
    $this->load->view('about');
  }

  public function projects()
	{
		$this->load->view('projects');
	}

  public function events()
	{
		$this->load->model('calendar');
		$data=$this->calendar->get_all();
		$this->load->view('events',['data' =>$data]);
	}

  public function join(){
    	$this->load->view('join');
  }

	public function contact()
	{
		$this->load->view('contact');
	}
  public function login()
	{
		$this->load->view('login');
	}



  public function login_user()
	{
	      $post['user_name']=$this->input->post('user_name',TRUE);
        $post['password'] = $this->input->post('password', TRUE);
        $this->load->model('calendar');
        $result=$this->calendar->is_user($post);
        if($result)
        {
        	$this->load->model('calendar');
			    $data=$this->calendar->get_all();
			    $this->load->view('admin',['data'=>$data]);

        }
        else
        {
          $message['error']="Invalid user name or password";
          $this->load->view('login',$message);
        }

	}




}

?>
