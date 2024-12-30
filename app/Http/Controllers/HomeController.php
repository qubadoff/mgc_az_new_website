<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Faq;
use App\Models\Service;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $services = Service::query()->orderBy('created_at', 'desc')->get();

        return view('Frontend.index', compact('services'));
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
