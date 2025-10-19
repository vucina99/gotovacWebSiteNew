<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConsultationReservation;
use App\Http\Requests\ContactValidate;
use App\Http\Resources\BlogListResource;
use App\Mail\SendGotovacMail;
use App\Models\Blog;
use App\Models\Consultation;
use App\Traits\StatusCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    use StatusCode;
    public function index()
    {
        $blogsData = Blog::with("blogCategory")->activeBlog()->orderByDesc("date" , "desc")->take(3)->get();
        $blogs = BlogListResource::collection($blogsData);
        return view('index' , compact("blogs"));
    }

    public function contact()
    {
        return view("pages.contact");
    }
    public function tariff()
    {
        return view("pages.tarifa");
    }

    public function consultation()
    {
        return view("pages.consultation");
    }


    public function allowanceCalculator()
    {
        return view("pages.calculator");
    }

    public function gallery()
    {
        return view("pages.gallery");
    }

    public function europeanAccidentReports()
    {
        return view("car_accident_pages.ear");
    }
    public function casco()
    {
        return view("car_accident_pages.casco");
    }
    public function walk()
    {
        return view("car_accident_pages.walker");
    }
    public function publicTransport()
    {
        return view("car_accident_pages.publicTransport");
    }
    public function deathCases()
    {
        return view("car_accident_pages.deathCases");

    }
    public function vehicleDamage()
    {
        return view("car_accident_pages.vehicleDamage");

    }
    public function truckDamage()
    {
        return view("car_accident_pages.truckDamage");

    }
    public function physicalInjuries()
    {
        return view("car_accident_pages.physicalInjuries");

    }

    public function flightDelays()
    {
        return view("car_accident_pages.flightDelays");
    }
    public function carAccident()
    {
        return view("car_accident_pages.carAccident");
    }
    public function monthlyAnnuity()
    {
        return view("car_accident_pages.monthlyAnnuity");

    }
    public function workPlaceInjures()
    {
        return view("car_accident_pages.workPlaceInjures");

    }
    public function damagesTypes()
    {
        return view("car_accident_pages.typesDamage");
    }
    public function motociklesDamage()
    {
        return view("car_accident_pages.motociklesDamage");
    }
    public function contactGotovac(ContactValidate $request)
    {
        Mail::to(env("MAIL_FROM_ADDRESS"))->send(new SendGotovacMail($request->name, $request->subjcet, $request->email, $request->message));

        return  redirect()
            ->to(url()->previous() . '#contact-form')->with('success',  __("index.uspesno slanje poruke"));
    }

    public function consultationReservation( ConsultationReservation $request)
    {
        Consultation::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->number,
            "message" => $request->message,
            "date_time" => $request->date_time
        ]);

        return $this->success( 201 , "New row has been added successfully");
    }

    public function changeLanguage($lang)
    {
        $allowedLang = ["sr" , "en"];
        if(in_array($lang , $allowedLang)){
            session()->put("language" , $lang);
        }
        return back();
    }

}
