<?PHP

/**
*
*/
class Emails extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library(array('form_validation','session'));
	}
	public function index()
	{

		$this->form_validation->set_rules('first_name','First name','required|alpha',array(
			'required'=>'You must eneter data to the field',
			'alpha'=>'Please enter only letters'
		));
			$this->form_validation->set_rules('last_name','Last name','required|alpha',array(
			'required'=>'You must eneter data to the field',
			'alpha'=>'Please enter only letters'
		));
		$this->form_validation->set_rules('email','Email','required|valid_email',array(
			'required'=>'You must eneter data to the field',
			'valid_email'=>'please enter a valid email address'
		));
			$this->form_validation->set_rules('comments','Comments','required|max_length[300]|min_length[10]',array(
			'required'=>'You must eneter data to the field',
			'max_length'=>'U kunt niet meer dan 300 letters schrijven.',
			'min_length'=>'U moet minimaal 10 letters schrijven.'
		));

		require 'vendor/autoload.php';
		if ($this->form_validation->run()==false) {
						$this->load->view('contact');
		}
		else {
						$message['success'] = "Your message has been sent successfully";
						$this->load->view('contact', $message);
    }


		$from = new SendGrid\Email( $_POST['first_name'], $_POST['email']);
		$subject = "Sending with SendGrid is Fun";
		$to = new SendGrid\Email("mayasa", "mayasa-89@hotmail.com");
		$message = new SendGrid\Content("text/plain", $_POST['comments']);
		$mail = new SendGrid\Mail($from, $subject, $to, $message);
		$apiKey = getenv('SENDGRID_API_KEY');
		$sg = new \SendGrid("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 ");
		$response = $sg->client->mail()->send()->post($mail);
		var_dump($_ENV);
		echo $response->statusCode();
		echo "string";
		echo $apiKey;
		echo $response->body();

	}
}

?>
