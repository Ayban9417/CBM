<?php

namespace App\Http\Controllers;

use App\AppAccount;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class AppAccountController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $accounts = AppAccount::all();
        return view('app_accounts')->with(['accounts' => $accounts]);
    }

    public function getData()
    {
        $accounts = AppAccount::all();
        return view('users')->with(['accounts' => $accounts]);
    }


    public function validator(array $data) {
        return Validator::make($data, [
            'email' => 'required|string|min:3',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255|unique:app_accounts',
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($data)
    {   
        return AppAccount::create([
            'email' => $data['email'],
            'name' => $data['name'],
            'phone' => $data['phone'],
            'id' => $data['id'],
        ]);
        
    }

    public function store(Request $request)
    {   
       
        $this->validator($request->all())->validate();
        
        $data = $request->all();

        $data['id'] = Auth::id();

        $account = $this->create($data);

        return redirect()->back();
    }

  

  
    public function update(Request $request, AppAccount $appAccount)
    {

        $appAccount->name = $request->name;
        $appAccount->phone = $request->phone;
        $appAccount->email = $request->email;

        $appAccount->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AppAccounts  $AppAccounts
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppAccount $appAccount)
    {
        $appAccount->delete();
        
        return redirect()->back();
    }
}
