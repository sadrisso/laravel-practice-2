<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Customer extends Controller
{
    public function index()
    {
        $url = url('customer/register');
        $title = 'Customer Registration';
        return view('customer-form', compact('url', 'title'));
    }

    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        echo '<pre>';
        print_r($req);
        echo '</pre>';
    }
}
