<?php 
/**
* 
*/
class Users extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('users_m');
		$this->load->library('session');

		$this->load->library('pagination');
		
	}

	function index($page = 0){
		//echo $page;
		
		$config['base_url'] = base_url('users');
		$config['total_rows'] = $this->users_m->num_rows();
		$config['per_page'] = 2;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$this->pagination->initialize($config);
		$users = $this->users_m->getAll(null, $config['per_page'], $page);
		$data['title']  = 'Users List';
		$data['users'] = $users;
		$this->load->view('users/users_list.php', $data);
	}

	function add_user(){
		$data['title'] = 'Add User';
		if($this->input->post('add_user') == 1){

			$fname = $this->input->post('fname');
			$lname = $this->input->post('lname');
			$email = $this->input->post('email');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$confirm_password = $this->input->post('confirm_password');

			$this->form_validation->set_rules('fname', 'first name', 'required|trim');
			$this->form_validation->set_rules('lname', 'last name', 'required|trim');
			$this->form_validation->set_rules('username', 'username', 'required|trim|min_length[5]|max_length[12]|is_unique[users.username]');
			$this->form_validation->set_rules('email', 'email', 'required|trim|is_unique[users.email]');
			$this->form_validation->set_rules('password', 'password', 'required|trim');
			$this->form_validation->set_rules('confirm_password', 'confirm password', 'required|trim|matches[password]');
			//$this->form_validation->set_rules('user_image', 'user image', 'required');
			

			if($this->form_validation->run() == TRUE){

			$config = array( 
					'upload_path' => './assets/user_images/', 
					'allowed_types' => 'jpg|jpeg|png|gif'
				);

			$this->load->library('upload',$config);

			if ( $this->upload->do_upload('user_image')){
				$upload_data  = $this->upload->data();
				$user_image = $upload_data['file_name']; 
            }else{
            	$error = $this->upload->display_errors();
            	echo '<pre>';
				print_r($error);
				echo '</pre>';

            }

			$user_data = array(
					'fname'=> $fname,
					'lname'=> $lname,
					'username'=> $username,
					'email'=> $email,
					'password'=> $password,
					'image' => $user_image
				);
			
			if($this->users_m->create_user($user_data)){

				$this->session->set_flashdata('done', 'New user added successfull');
				redirect('users');

			}else{
				echo 'New user not create!';
			}

		  }

		}
		
		$this->load->view('users/add_user', $data);
	}

	function update($id){
		$user = $this->users_m->getAll($id);
		$data['title'] = 'User Edit';
		$data['user'] = $user[0];
		$this->load->view('users/user_edit', $data);
	}

	function do_update(){
		//echo '<pre>';
		//print_r($_POST);
		//echo '</pre>';
		$this->form_validation->set_rules('fname', 'first name', 'trim|required');
		$this->form_validation->set_rules('lname', 'last name', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('id', 'id', 'trim|required');
		$this->form_validation->set_rules('old_image', 'old image', 'trim');
		if($this->form_validation->run() == TRUE){
			$id = $this->input->post('id');
			$data['fname'] = $this->input->post('fname');
			$data['lname'] = $this->input->post('lname');
			$data['email'] = $this->input->post('email');
			$data['username'] = $this->input->post('username');

			$config = array( 
						'upload_path' => './assets/user_images/', 
						'allowed_types' => 'jpg|jpeg|png|gif'
					);

			$this->load->library('upload',$config);

			if($this->upload->do_upload('user_image')){
				$upload_data  = $this->upload->data();
				$user_image = $upload_data['file_name']; 
				$data['image'] = $user_image;			
			}


			if($this->users_m->update_user($id, $data)){
				$this->session->set_flashdata('done', 'Update Successfull');
				redirect('users');

			}else{

				$this->session->set_flashdata('error', 'Update not done');
				redirect('users');
			}

		}else{
			$data['title'] = 'User Edit';
			$this->load->view('users/user_edit', $data);
		}
	}

	function details($id){
		$data['title'] = 'User Profile';
		$user = $this->users_m->getAll($id);
		$data['user'] = $user[0];
		$this->load->view('users/user_details',$data);
	}

	function delele($id){
		if($this->users_m->delete_user($id)){
			$this->session->set_flashdata('done', 'User delete Successfull');
			redirect('users');

		}else{

			$this->session->set_flashdata('error', 'User delete not done');
			redirect('users');
		}
		
	}


}
