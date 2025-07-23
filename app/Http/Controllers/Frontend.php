<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontend extends Guest
{
    public function __construct(){
		parent::__construct();
	}

    public function Home(){
		$data['pageTitle'] = trans('messages.contact-us');
		return $this->guestView($this->adminFolderName . 'home.home' , $data);
	}

	public function About(){
		$data['pageTitle'] = trans('messages.contact-us');
		return $this->guestView($this->adminFolderName . 'about.about' , $data);
	}
	
	public function Career(){
		$data['pageTitle'] = trans('messages.contact-us');
		return $this->guestView($this->adminFolderName . 'career.career' , $data);
	}
	
	public function Devlopment(){
		$data['pageTitle'] = trans('messages.contact-us');
		return $this->guestView($this->adminFolderName . 'devlopment.devlopment' , $data);
	}
	
	public function Webdevlopment(){
		$data['pageTitle'] = trans('messages.contact-us');
		return $this->guestView($this->adminFolderName . 'service.webdevlopment' , $data);
	}
	
	public function Appdevlopment(){
		$data['pageTitle'] = trans('messages.contact-us');
		return $this->guestView($this->adminFolderName . 'service.appdevlopment' , $data);
	}
	
	public function Digitalmarketing(){
		$data['pageTitle'] = trans('messages.contact-us');
		return $this->guestView($this->adminFolderName . 'service.digitalmarketing' , $data);
	}
	
	public function Graphicslogo(){
		$data['pageTitle'] = trans('messages.contact-us');
		return $this->guestView($this->adminFolderName . 'service.graphicslogo' , $data);
	}
	
	public function Qatesting(){
		$data['pageTitle'] = trans('messages.contact-us');
		return $this->guestView($this->adminFolderName . 'service.qatesting' , $data);
	}
	
	public function Digitalcard(){
		$data['pageTitle'] = trans('messages.contact-us');
		return $this->guestView($this->adminFolderName . 'service.digitalcard' , $data);
	}
	
	public function Hostingservice(){
		$data['pageTitle'] = trans('messages.contact-us');
		return $this->guestView($this->adminFolderName . 'service.hostingservice' , $data);
	}
	
	public function Support(){
		$data['pageTitle'] = trans('messages.contact-us');
		return $this->guestView($this->adminFolderName . 'service.support' , $data);
	}
	
	public function Phpinternship(){
		$data['pageTitle'] = trans('messages.contact-us');
		return $this->guestView($this->adminFolderName . 'internship.phpinternship' , $data);
	}
	
	public function Webinternship(){
		$data['pageTitle'] = trans('messages.contact-us');
		return $this->guestView($this->adminFolderName . 'internship.webinternship' , $data);
	}
	
	public function Flutterinternship(){
		$data['pageTitle'] = trans('messages.contact-us');
		return $this->guestView($this->adminFolderName . 'internship.flutterinternship' , $data);
	}
	
	public function Reactinternship(){
		$data['pageTitle'] = trans('messages.contact-us');
		return $this->guestView($this->adminFolderName . 'internship.reactinternship' , $data);
	}
	
	public function Nodeinternship(){
		$data['pageTitle'] = trans('messages.contact-us');
		return $this->guestView($this->adminFolderName . 'internship.nodeinternship' , $data);
	}
	
	public function Portfolio(){
		$data['pageTitle'] = trans('messages.contact-us');
		return $this->guestView($this->adminFolderName . 'portfolio.portfolio' , $data);
	}
	
	public function Blog(){
		$data['pageTitle'] = trans('messages.contact-us');
		return $this->guestView($this->adminFolderName . 'blog.blog' , $data);
	}
	
	public function Contact(){
		$data['pageTitle'] = trans('messages.contact-us');
		return $this->guestView($this->adminFolderName . 'contact.contact' , $data);
	}
	
	public function Service(){
		$data['pageTitle'] = trans('messages.contact-us');
		return $this->guestView($this->adminFolderName . 'service.service' , $data);
	}
	
	public function Internship(){
		$data['pageTitle'] = trans('messages.contact-us');
		return $this->guestView($this->adminFolderName . 'internship.internship' , $data);
	}
}