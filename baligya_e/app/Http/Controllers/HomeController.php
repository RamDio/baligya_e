<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        echo "iyotski";
    }
    public function contact()
    {
        return view('contact');
    }
    public function contactpost(Request $request)
    {
        $all = $request->url();
        print_r($all);

        // $name = $request->input('name');
        // $email = $request->input('email');
        // echo $name;
        // echo '<br>';
        // echo $email;
    }
}
