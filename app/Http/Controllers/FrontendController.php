<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('pages.frontend.home');
    }
    public function news(){
        return view('pages.frontend.news');
    }
    public function rukavodstva(){
        return view('pages.frontend.rukavodstva');
    }
    public function investoram(){
        return view('pages.frontend.investoram');
    }
    public function zakupki(){
        return view('pages.frontend.zakupki');
    }
    public function media(){
        return view('pages.frontend.media');
    }
    public function contact(){
        return view('pages.frontend.contact');
    }
    public function ustav(){
        return view('pages.frontend.ustav');
    }
    public function struktura(){
        return view('pages.frontend.struktura');
    }
    public function supervisory_board(){
        return view('pages.frontend.supervisory-board');
    }
    public function board(){
        return view('pages.frontend.board');
    }
    public function decision(){
        return view('pages.frontend.decision-on-the-initial-issue');
    }
    public function reports(){
        return view('pages.frontend.reports');
    }
    public function balance(){
        return view('pages.frontend.balance');
    }
    public function income(){
        return view('pages.frontend.income');
    }
    public function spisok(){
        return view('pages.frontend.spisok');
    }
    public function share_struktura(){
        return view('pages.frontend.share-sturukture');
    }
    public function kodeks(){
        return view('pages.frontend.kodeks');
    }
}
