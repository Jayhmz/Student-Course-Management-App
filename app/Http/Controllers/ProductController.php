<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
      $title = "James Is Gonna be A Great Man in this present world";
      $data = [
        'name' => 'James',
        'skills' => 'Laravel'
      ];

      // return view('homepage', compact('title'));// this can be used to send multiple data but in comma sepperatedformats
      // return view('homepage')->with('data', $data); // this sends data to the view also but one data at a time. it is mostly used to send single data like error, session and so.
    }

    public function show($id)
    {
      $data = [
        'iphone' => 'iPhone',
        'samsung' => 'Samsung'
      ];

      return view('homepage', [
        'phone' => $data[$id] ?? 'Product '.$id.' does not exists, please use a valid one'
      ]);

    }
}
