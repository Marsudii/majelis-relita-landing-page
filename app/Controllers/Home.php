<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('view/1_head');
		echo view('view/2_service');
		echo view('view/3_portofolio');
		echo view('view/1_1conten');
		echo view('view/4_about');
		echo view('view/5_team');
		echo view('view/7_contact');
		echo view('view/6_client');
		echo view('view/8_footer');
		echo view('view/1_1conten');
	}
}
