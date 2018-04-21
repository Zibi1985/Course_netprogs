<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\FrontendRepository;

class FrontendController extends Controller
{

    public function __construct(FrontendRepository $repository)
    {
        $this->fR = $repository;
    }

    public function index() {
        $hotels = $this->fR->getHotelsForMainPage();

        dd( $hotels );
    	return view('frontend.index', ['hotels' => $hotels ]);
    }

    public function article() {
    	return view('frontend.article');
    }

    public function object() {
    	return view('frontend.object');
    }

    public function person() {
    	return view('frontend.person');
    }

    public function room() {
    	return view('frontend.room');
    }

     public function roomsearch() {
    	return view('frontend.roomsearch');
    }    
           
}
