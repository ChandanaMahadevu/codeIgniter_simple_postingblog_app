<?php

namespace App\Controllers;

use App\Models\Blogmodel;

class Blog extends BaseController {

	function post($slug) {
		$model = new Blogmodel();
		$data['post'] = $model->getposts($slug);
		
		// to open view
		echo view('templates/header', $data);
		echo view('blog/post');
		echo view('templates/footer');
	}

	function create() {
		helper('form');
		$model = new Blogmodel();
		
		if ( ! $this->validate([
		  // this is create.php input field name="title"
		  'title' => 'required|min_length[10]|max_length[255]',
		  'body' =>   'required'
		])) {
			echo view('templates/header');
			echo view('blog/create');
			echo view('templates/footer');
		}
		else {
			$model->save([
				'title' => $this->request->getVar('title'),
				'body'  => $this->request->getvar('body'),
				'slug'  => url_title($this->request->getVar('title'))
			]);

			// Initializing session
			$session = \Config\Services::session();
			$session->setFlashdata('success', 'New post was created');

			// This is use to redirect to the home page
			return redirect()->to('/');
		}
	}
}
