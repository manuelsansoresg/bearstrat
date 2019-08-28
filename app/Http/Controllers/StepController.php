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
        return response()->json('ok');
    }

    public function step3(Step3Request $request)
    {
        return response()->json('ok');
    }

    public function sendContact(Request $request)
    {
        Mail::to('contacto@bearstrat.com')->send(new ContactMail($request->all()));
        return response()->json('ok');
    }
}
