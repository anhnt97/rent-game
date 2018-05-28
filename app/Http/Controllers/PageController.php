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
   public function getCategoryGame($category){
       return view('pages.category-games',compact('id_category','name_category'));
   }
   public function getProductDetails(){
       return view('pages.product-details');
   }
}
