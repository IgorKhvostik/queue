<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function send()
    {
        $this->dispatch(new SendEmail());
        return redirect()->route('index');
    }

}
