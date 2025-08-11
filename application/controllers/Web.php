<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index()
	{
		$header['page'] = "home";

		$this->load->view('web/header',$header);
		$this->load->view('web/home');
		$this->load->view('web/footer');
	}

	public function about()
	{
		$header['page'] = "about";
		
		$this->load->view('web/header',$header);
		$this->load->view('web/about');
		$this->load->view('web/footer');
	}

	public function gallery()
	{
		$header['page'] = "gallery";
		
		$this->load->view('web/header',$header);
		$this->load->view('web/gallery');
		$this->load->view('web/footer');
	}
	
	public function join_us()
	{
		$header['page'] = "join-us";
		
		$this->load->view('web/header',$header);
		$this->load->view('web/join_us');
		$this->load->view('web/footer');
	}
	public function sales()
	{
		$header['page'] = "sales";
		
		$this->load->view('web/header',$header);
		$this->load->view('web/sales');
		$this->load->view('web/footer');
	}

	public function service()
	{
		{
			$header['page'] = "service";
			
			$this->load->view('web/header',$header);
			$this->load->view('web/service.php');
			$this->load->view('web/footer');
		}
	}

	public function support()
	{
		{
			$header['page'] = "support";
			
			$this->load->view('web/header',$header);
			$this->load->view('web/support.php');
			$this->load->view('web/footer');
		}
	}


	public function blog()
	{
		{
			$header['page'] = "blog";
			
			$this->load->view('web/header',$header);
			$this->load->view('web/blog.php');
			$this->load->view('web/footer');
		}
	}


	public function policy()
	{
		{
			$header['page'] = "Policy";
			
			$this->load->view('web/header',$header);
			$this->load->view('web/policy.php');
			$this->load->view('web/footer');
		}
	}
	public function privacy_policy()
	{
		{
			$header['page'] = "privacy-policy";
			
// 			$this->load->view('web/header',$header);
			$this->load->view('web/privacy-policy.php');
// 			$this->load->view('web/footer');
		}
	}
	
	public function condition()
	{
		{
			$header['page'] = "condition";
			
			$this->load->view('web/header',$header);
			$this->load->view('web/condition.php');
			$this->load->view('web/footer');
		}
	}
	public function delete()
	{
		{
			$header['page'] = "delete";
			
			// $this->load->view('web/header',$header);
			$this->load->view('web/delete.php');
			// $this->load->view('web/footer');
		}
	}
		public function casestudies()
	{
		{
			$header['page'] = "casestudies";
			
			$this->load->view('web/header',$header);
			$this->load->view('web/casestudies.php');
			$this->load->view('web/footer');
		}
	}
	public function blog_1()
	{
		{
			$header['page'] = "blog_1";
			
			$this->load->view('web/header',$header);
			$this->load->view('web/blog_1.php');
			$this->load->view('web/footer');
		}
	}
	public function blog_2()
	{
		{
			$header['page'] = "blog_2";
			
			$this->load->view('web/header',$header);
			$this->load->view('web/blog_2.php');
			$this->load->view('web/footer');
		}
	}
}
