<?php


class home_controller extends CI_Controller
{
	
	
		public function __construct()
		{
			parent::__construct();
			$this->load->model('news_model');
			$this->load->model('upcoming_model');
			$this->load->model('bannerLink_model');
			$this->load->model('cusec_model');
		}
	
		public function getNews()
		{
			$data['news'] = $this->news_model->get_news();
			return $data['news'];
		}
		
		public function getEvents()
		{
			$data['upcoming'] = $this->upcoming_model->getEvents();
			return $data['upcoming'];
		}
		
		public function getLink()
		{
			$data['link'] = $this->bannerLink_model->getBannerLink();
			return $data['link'];
		}
		
		public function getQandA()
		{
			$data['qA'] = $this->cusec_model->getQandA();
			return $data['qA'];
		}
	
		public function index($page = 'home')
		{
			
			/* Loads the html helper for link_tag, and runs initial view */
			$this->load->helper('html');
			$this->load->helper('url');
				
			if ( ! file_exists('application/views/pages/'.$page.'.php'))
			{
				// Whoops, we don't have a page for that!
				show_404();
			}
				
				
			/* Decipher the link array for the banner Link */
			$data['linkArr'] = $this->getLink();
			foreach ($data['linkArr'] as $link)
			{
				$data['link'] = $link['link'];
			}
			
			/* Sends all the link information to the view */
			$data['css'] = link_tag('css/siteStyle.css');
			$data['logo_link'] = img('images/seLogo.jpg');
			$data['banner'] = img ($data['link']);
			$data['tex_link'] = 'images/cpaper.jpg';
			
			/* Links to the pages */		
			$data['home'] = anchor('home','HOME','id="news"');
			$data['contact'] = anchor('contact','CONTACT','id="contact"');
			$data['gallery'] = anchor('gallery','GALLERY','id="gallery"');
			$data['cusec'] = anchor('cusec','CUSEC','id="cusec"');	
			
			
			/* Title of the page */
			$data['title'] = ucfirst($page);
			
			
			
			
			$data['news'] = $this->getNews();
			$data['upcoming'] = $this->getEvents();	
			$data['qAndA'] = $this->getQandA();		
			
			$this->load->view("pages/".$page,$data);
		}
		
		
		
}