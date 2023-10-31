<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function landpage()
   {
    return view('techstone.landpage');
   }
   public function aboutpage()
   {
    return view('techstone.aboutpage');
   }
   public function servicepage()
   {
    return view('techstone.servicepage');
   }
   public function requestpage()
   {
     return view('techstone.requestpage');
   }
   public function contactpage()
   {
     return view('techstone.contactpage');
   }
   public function thankyoupage()
   {
    return view('emails.thankyou');
   }
}
