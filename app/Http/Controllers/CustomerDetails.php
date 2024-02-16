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

    public function delete($id)
    {
        Customer::find($id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        if(!is_null($customer))
        {
            $url = url('customer/update'). '/' . $id;
            $title = 'Update Customer Details';
            return view('customer-form', compact('url', 'title', 'customer'));
        }
    }

    public function update($id, Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $customer = Customer::find($id);
        $customer->name = $req['name'];
        $customer->email = $req['email'];
        $customer->save();

        return redirect('customer/view');
    }

    public function trash()
    {
        $customer = Customer::onlyTrashed()->get();
        return view('customer-trash', compact('customer'));
    }

    public function restore($id)
    {
        Customer::withTrashed()->find($id)->restore();
        return redirect()->back();
    }

    public function force_delete($id)
    {
        $customer = Customer::withTrashed()->find($id);
        if(!is_null($customer))
        {
            $customer->forceDelete();
        }
        return redirect('customer/trash');
    }
}
