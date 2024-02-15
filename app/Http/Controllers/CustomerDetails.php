<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerDetails extends Controller
{
    public function index()
    {
        $url = url('customer/register');
        $title = 'Customer Registration';
        return view('customer-form', compact('url', 'title'));
    }

    public function store(Request $req, Customer $res)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $res->fill($req->all())->save();

        return redirect('customer/view');
    }

    public function view()
    {
        $customer = Customer::all();
        return view('customer-view', compact('customer'));
    }
}
