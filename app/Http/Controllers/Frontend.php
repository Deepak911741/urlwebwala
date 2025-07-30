<?php

namespace App\Http\Controllers;

use App\Models\blogModel;
use App\Models\categoryModel;
use App\Models\clientModel;
use App\Models\seoContentModel;
use App\Models\serviceModel;
use App\Models\testinomialModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class Frontend extends Guest
{
    public function __construct(){
		parent::__construct();
	}

	public function getSeoContent($pagename){
		$whereData['v_pagename'] = $pagename;
		$whereData['singleRecord'] = true;
		$seo =  (new seoContentModel)->getRecordDetails($whereData);
		$data = [];
		$data['pageTitle'] = (isset($seo['v_page_title']) && !empty($seo['v_page_title']) ? $seo['v_page_title'] : '');
		$data['description'] = (isset($seo['v_description']) && !empty($seo['v_description']) ? $seo['v_description'] : '');
		$data['keywords'] = (isset($seo['v_keywords']) && !empty($seo['v_keywords']) ? $seo['v_keywords'] : '');
		$data['author'] = (isset($seo['v_author']) && !empty($seo['v_author']) ? $seo['v_author'] : 'Urlwebwala LLP');
		$data['canonical'] = (isset($seo['v_canonical_url']) && !empty($seo['v_canonical_url']) ? $seo['v_canonical_url'] : '');
		$data['seo_url'] = (isset($seo['v_seo_url']) && !empty($seo['v_seo_url']) ? $seo['v_seo_url'] : '');
		$data['robots'] = (isset($seo['v_robots']) && !empty($seo['v_robots']) ? $seo['v_robots'] : 'index, follow');
		return $data;
	}

    public function Home() {
		$data = $this->getSeoContent('home');
		$data['clients'] = (new clientModel)->getRecordDetails();
		$data['testimonials'] = (new testinomialModel)->getRecordDetails();

		$whereData['limit'] = 3;
		$whereData['order_by'] =  [ 'i_id' =>  'desc'];
		$data['blogs'] = (new blogModel)->getRecordDetails($whereData);

		$data['services'] = (new serviceModel)->getRecordDetails();
		return $this->guestView($this->adminFolderName . 'home.home', $data);
	}

	public function About() {
		$data = $this->getSeoContent('about');
		return $this->guestView($this->adminFolderName . 'about.about', $data);
	}

	public function Career() {
		$data = $this->getSeoContent('carrer');
		return $this->guestView($this->adminFolderName . 'career.career', $data);
	}

	public function Devlopment() {
		$data = $this->getSeoContent('devlopment');
		return $this->guestView($this->adminFolderName . 'devlopment.devlopment', $data);
	}

	public function Webdevlopment() {
		$data = $this->getSeoContent('webdevlopment');
		return $this->guestView($this->adminFolderName . 'service.webdevlopment', $data);
	}

	public function Appdevlopment() {
		$data = $this->getSeoContent('appdevlopment');
		return $this->guestView($this->adminFolderName . 'service.appdevlopment', $data);
	}

	public function Digitalmarketing() {
		$data = $this->getSeoContent('digitalmarketing');
		return $this->guestView($this->adminFolderName . 'service.digitalmarketing', $data);
	}

	public function Graphicslogo() {
		$data = $this->getSeoContent('graphicslogo');
		return $this->guestView($this->adminFolderName . 'service.graphicslogo', $data);
	}

	public function Qatesting() {
		$data = $this->getSeoContent('qatesting');
		return $this->guestView($this->adminFolderName . 'service.qatesting', $data);
	}

	public function Digitalcard() {
		$data = $this->getSeoContent('digitalcard');
		return $this->guestView($this->adminFolderName . 'service.digitalcard', $data);
	}

	public function Hostingservice() {
		$data = $this->getSeoContent('hostingservice');
		return $this->guestView($this->adminFolderName . 'service.hostingservice', $data);
	}

	public function Support() {
		$data = $this->getSeoContent('support');
		return $this->guestView($this->adminFolderName . 'service.support', $data);
	}

	public function Phpinternship() {
		$data = $this->getSeoContent('phpinternship');
		return $this->guestView($this->adminFolderName . 'internship.phpinternship', $data);
	}

	public function Webinternship() {
		$data = $this->getSeoContent('webinternship');
		return $this->guestView($this->adminFolderName . 'internship.webinternship', $data);
	}

	public function Flutterinternship() {
		$data = $this->getSeoContent('flutterinternship');
		return $this->guestView($this->adminFolderName . 'internship.flutterinternship', $data);
	}

	public function Reactinternship() {
		$data = $this->getSeoContent('reactinternship');
		return $this->guestView($this->adminFolderName . 'internship.reactinternship', $data);
	}

	public function Nodeinternship() {
		$data = $this->getSeoContent('nodeinternship');
		return $this->guestView($this->adminFolderName . 'internship.nodeinternship', $data);
	}

	public function Portfolio() {
		$data = $this->getSeoContent('portfolio');
		return $this->guestView($this->adminFolderName . 'portfolio.portfolio', $data);
	}

	public function Blog(Request $request) {
		$data = $this->getSeoContent('blog');
		$data['categories'] = (new categoryModel)->getRecordDetails();

		$categoryId = $request->get('filter');
		$where = [];
		
		if (!empty($categoryId) && $categoryId !== 'all') {
        	$where['i_category_id'] = $categoryId;
    	}

		
		$data['blogs'] = (new blogModel)->getRecordDetails($where);
		if ($request->ajax()) {
        	return view($this->adminFolderName . 'blog._blog_list', $data)->render();
        }

		return $this->guestView($this->adminFolderName . 'blog.blog', $data);
	}

	public function Contact() {
		$data = $this->getSeoContent('contact');
		$data['services'] = (new serviceModel)->getRecordDetails();
		return $this->guestView($this->adminFolderName . 'contact.contact', $data);
	}

	public function Service() {
		$data = $this->getSeoContent('service');
		return $this->guestView($this->adminFolderName . 'service.service', $data);
	}

	public function Internship() {
		$data = $this->getSeoContent('internship');
		return $this->guestView($this->adminFolderName . 'internship.internship', $data);
	}

	public function BlogSlug($slug) {
		$data = $this->getSeoContent('blog');
		$whereData['v_seo_url'] = $slug;
		$whereData['singleRecord'] = true;
		$data['blog'] = (new blogModel)->getRecordDetails($whereData);
		
		if(!empty($data['blog']) && isset($data['blog']->i_id) && $data['blog']->i_id > 0){
			$updateData['i_view_count'] = $data['blog']->i_view_count + 1;
			(new blogModel)->updateTableData(config('constants.BLOG_TABLE'),  $updateData, ['i_id' => $data['blog']->i_id]);
		}
		unset($whereData);
		if (empty($data['blog'])) {
			return redirect(config('constants.BLOG_URL'));
		}

		$whereData['limit'] = 3;
		$whereData['order_by'] =  [ 'i_id' =>  'desc'];
		$data['related_blogs'] = (new blogModel)->getRecordDetails($whereData);

		return $this->guestView($this->adminFolderName . 'blog.blog-details', $data);
	}

	public function PrivicyPolicy() {
		$data = $this->getSeoContent('privacypolicy');
		return $this->guestView($this->adminFolderName . 'other.privacypolicy', $data);
	}

	public function TermCondition() {
		$data = $this->getSeoContent('termcondition');
		return $this->guestView($this->adminFolderName . 'other.privacypolicy', $data);
	}

}