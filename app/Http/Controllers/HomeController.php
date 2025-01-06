<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Client;
use App\Models\Faq;
use App\Models\Service;
use App\Models\Team;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $services = Service::query()->orderBy('sort_order')->get();

        $news = Blog::query()->orderBy('created_at', 'desc')->paginate(6);

        return view('Frontend.index', compact('services', 'news'));
    }

    public function contact(): View
    {
        return view('Frontend.contact');
    }

    public function clients(): View
    {
        $clients = Client::query()->orderBy('created_at', 'desc')->get();

        return view('Frontend.clients', compact('clients'));
    }

    public function about(): View
    {
        $teams = Team::query()->orderBy('sort_order')->get();

        return view('Frontend.about', compact('teams'));
    }

    public function faq(): View
    {
        $faqs = Faq::query()->orderBy('created_at', 'desc')->get();

        return view('Frontend.faq', compact('faqs'));
    }

    public function singleNews(string $slug): View
    {
        $singleBlog = Blog::query()->where('slug', $slug)->first();

        return view('Frontend.singleNews', compact('singleBlog'));
    }

    public function singleTeam(string $slug): View
    {
        $singleTeam = Team::query()->where('slug', $slug)->first();

        return view('Frontend.singleTeam', compact('singleTeam'));
    }
}
