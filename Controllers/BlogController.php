<?php

namespace App\Blog\Controllers;

use Controller;

class BlogController extends Controller {
	protected $viewPath = 'blog';

	public function getIndex() {
		$this->template('index');
	}
}