<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
class ValidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function phone()
    {
        //
        return view('phone');
    }
    public function check(Request $request)
    {
        //

        Validator::make($request->all(), [
            'phone' => 'required|in_phone',

        ])->validate();

    }

    public function register(){
        return view('register');
    }
    public function registerCheck(Request $request)
    {
        //

        Validator::make($request->all(), [
            'email'=>'required',
            'username'=>'required',
            'phone' => 'required|in_phone|digits_between:10,11',
            'birthday'=>'required|date_birthday',
            'idnumber'=>'required|id_number'
        ])->validate();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        Validator::make($request->all(), [
            'email' => 'required|min:5',
            'password' => 'required',
        ])->validate();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
