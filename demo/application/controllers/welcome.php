<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 public function __construct() {
	        parent::__construct();      
	        //date_default_timezone_set('Asia/Dhaka');
	    }
	public function index()
	{
		$this->load->view('dashboard/login');
	}
        public function login(){
            $this->load->model('model_login');
            $post = $this->input->post();
            $login = $this->model_login->login_chk($post['user_name'],$post['password']);
            if(empty($login)){
                //var_dump('ok');die;
                redirect('welcome');
                //$this->index();
            }else{
                //var_dump('die');die;
                //$this->dashboard();
                redirect('welcome/dashboard');
            }
        }

        public function dashboard()
	{
		$data['main_content']='dashboard/dashboard';
		$this->load->view('includes/template',$data);
	}
	
	public function ajax_ionrange()
	{
		$ionrange = $this->input->post('build');
		if($ionrange==1){
			$this->load->view('ionrange/ionrange');
		}elseif($ionrange==2){
			$this->load->view('ionrange/ionrange2');
		}elseif($ionrange==3){
			$this->load->view('ionrange/ionrange3');
		}elseif($ionrange==4){
			$this->load->view('ionrange/ionrange4');
		}elseif($ionrange==5){
			$this->load->view('ionrange/ionrange5');
		}elseif($ionrange==6){
			$this->load->view('ionrange/ionrange6');
		}elseif($ionrange==7){
			$this->load->view('ionrange/ionrange7');
		}elseif($ionrange==8){
			$this->load->view('ionrange/ionrange8');
		}elseif($ionrange==9){
			$this->load->view('ionrange/ionrange9');
		}elseif($ionrange==10){
			$this->load->view('ionrange/ionrange10');
		}elseif($ionrange==11){
			$this->load->view('ionrange/ionrange11');
		}elseif($ionrange==12){
			$this->load->view('ionrange/ionrange12');
		}elseif($ionrange==13){
			$this->load->view('ionrange/ionrange13');
		}elseif($ionrange==14){
			$this->load->view('ionrange/ionrange14');
		}elseif($ionrange==15){
			$this->load->view('ionrange/ionrange15');
		}elseif($ionrange==16){
			$this->load->view('ionrange/ionrange16');
		}elseif($ionrange==17){
			$this->load->view('ionrange/ionrange17');
		}elseif($ionrange==18){
			$this->load->view('ionrange/ionrange18');
		}elseif($ionrange==19){
			$this->load->view('ionrange/ionrange19');
		}elseif($ionrange==20){
			$this->load->view('ionrange/ionrange20');
		}elseif($ionrange==21){
			$this->load->view('ionrange/ionrange21');
		}elseif($ionrange==22){
			$this->load->view('ionrange/ionrange22');
		}elseif($ionrange==23){
			$this->load->view('ionrange/ionrange23');
		}elseif($ionrange==24){
			$this->load->view('ionrange/ionrange24');
		}elseif($ionrange==25){
			$this->load->view('ionrange/ionrange25');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */