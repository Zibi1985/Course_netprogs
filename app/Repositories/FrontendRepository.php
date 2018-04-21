<?php

namespace App\Repositories;
use App\Hotel;

class FrontendRepository {


	public function getHotelsForMainPage()
	{

		return Hotel::all();
	}


}