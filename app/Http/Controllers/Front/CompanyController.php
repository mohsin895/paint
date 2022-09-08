<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\News;
use App\Models\Video;
use App\Models\CompanyGallery;

class CompanyController extends Controller
{
    public function about_us()
    {
        return view('front.company.about_us');
    }
    public function news()
    {
        $data['news']  = News::get();
        return view('front.company.news',$data);
    }


    public function news_details($slug)
    {
        $data['news']  = News::where('slug',$slug)->first();
        $data['newsall']  = News::take(3)->inRandomOrder()->get();
        return view('front.company.news_details',$data);
    }


    public function brances()
    {
        $data['branch'] = Branch::get();
        return view('front.company.brances',$data);
    }
    public function branches_search()
    {
        $data['branch'] = Branch::get();
        return view('front.company.branches_search');
    }

    
    public function image()
    {
        $data['image'] = CompanyGallery::get();
        return view('front.mediya.image',$data);
    }
    
    public function video()
    {
        $data['video'] = video::get();
        return view('front.mediya.video',$data);
    }
}
