<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
		$data = array();
		$data['page'] = 'home/mainHome';
        return view(LAYOUT_HEADER, $data);
    }
}
