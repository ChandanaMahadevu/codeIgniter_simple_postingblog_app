<?php

namespace App\Controllers;

use App\Models\Blogmodel;

class Pages extends BaseController
{
	// This act like a constructor
	public function index()
	{
		$model = new Blogmodel();
		$data['news'] = $model->getposts();


		// to open view
		echo view('templates/header', $data);
		echo view('pages/home', $data);
		echo view('templates/footer', $data);
	}
	// this is one single file, url => localhost/showme
	//localhost/showme/aboutme => then $page value be 'aboutme'
	function showme($page = 'home') {

		if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php')) {
			// throw an error if file does not exists
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}
		// to open view
		echo view('templates/header');
		echo view('pages/'.$page);
		echo view('templates/footer');
	}
}
