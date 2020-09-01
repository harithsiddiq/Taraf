<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Carrer;
use App\Models\Cv;
use App\Models\News;
use App\Models\Slider;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class HomePageController extends Controller
{
    public function index()
    {
        $news = News::all();
        $page = getLocal() == 'en' ? 'index-en': 'index';
        return view('site.pages.'.$page, compact('news', 'slider'));
    }


    public function about()
    {
        $page = getLocal() == 'en' ? 'about-en': 'about';
        return view('site.pages.'.$page);
    }

    public function cv()
    {
        $cvs = Cv::all();
        $page = getLocal() == 'en' ? 'cv-en': 'cv';
        return view('site.pages.'.$page, compact('cvs'));
    }

    public function service()
    {
        $page = getLocal() == 'en' ? 'serve-en': 'serve';
        return view('site.pages.'.$page);
    }

    public function order()
    {
        $jobs = Carrer::all();
        $page = getLocal() == 'en' ? 'talab-en': 'talab';
        return view('site.pages.'.$page, compact('jobs'));
    }

    public function search()
    {
        $page = getLocal() == 'en' ? 'search-en': 'search';
        return view('site.pages.'.$page);
    }
}
