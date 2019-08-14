<?php

namespace App\Http\Controllers;

use App\Http\Requests\Step1Request;
use App\Http\Requests\Step3Request;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StepController extends Controller
{
    public function step1(Step1Request $request)
    {

    }

    public function step3(Step3Request $request)
    {

    }

    public function contact(Request $request)
    {
        Mail::to('admin@bearstrat.com')->send(new ContactMail($request->all()));
    }
}
