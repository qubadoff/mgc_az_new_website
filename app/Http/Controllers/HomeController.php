<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Faq;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('Frontend.index');
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
        return view('Frontend.about');
    }

    public function faq(): View
    {
        $faqs = Faq::query()->orderBy('created_at', 'desc')->get();

        return view('Frontend.faq', compact('faqs'));
    }
}
