<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // return home page
   public function getHome(){
       return view('pages.home');
   }
   // return about us page
   public function getAboutUs(){
       return view('pages.about-us');
   }
   // return contact page
   public function getContact(){
       return view('pages.contact');
   }
}
