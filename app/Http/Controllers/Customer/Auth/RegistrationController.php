<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerModel;
use Hash;
use Auth;
use session;


class RegistrationController extends Controller
{
    protected $redirectTo = '/dashboard';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('customer.Auth.registration');
    }

    public function registration(request $request)
    {
        $request->validate([
            'username' => 'required|alpha|min:3',
            'useremail' =>'required|email|unique:customers,email',
            'userpassword' =>'required|',
            'userprofile' =>'required|mimes:jpg,png,jpeg,webp',
        ]);

        if($request->hasFile('userprofile'))
        {
            $image_name= $request->file('userprofile');
            $image_rename= $request->username. '_'.time(). '.'.$image_name->getClientOriginalExtension();
            $locate_destination = public_path('asset/customer/image/profile/');

            $data = new CustomerModel ;
            $data->name = $request->username;
            $data->email = $request->useremail;
            $data->profile = $image_rename;
            $data->password = Hash::make($request->userpassword);
            $data->save();
            if($data)
            {
                // Auth::attempt([])
                $image_name->move($locate_destination, $image_rename);
                $credentials = $request->only('useremail', 'userpassword');
                // dd(Auth::guard('Customer')->attempt(['email' => $request->useremail, 'password' => $request->userpassword], app(CustomerModel::class)));
                if(Auth::guard('Customer')->attempt(['email' => $request->useremail, 'password' => $request->userpassword]))
                {
                    $request->session()->regenerate();
                    return redirect()->route('customer.dashboard');
                }
                else
                {
                    return redirect()->back()->with('message', 'Somting Wrong');
                }
            }
            else
            {
                return redirect()->back()->with('message', 'Somting Wrong');
            }

        }
        // return view('customer.Auth.registration');
    }
    public function dashboard()
    {
        // dd('1');
        if(Auth::check())
        {
            return view('customer.dashboard.dashboard');
        }

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
