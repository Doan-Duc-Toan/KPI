<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function login()
    {
        return view('login');
    }
    function register()
    {
        return view('register');
    }
    function recover()
    {
        return view('recover_pass');
    }
    function settingStatus(Request $request)
    {
        $id = $request->get('id');
        //    return response()->json(['id' => $id]);
        return response()->json(['html' => view($id)->render()]);
    }
    
    function settingType(Request $request)
    {
        $id = $request->get('id');
        //    return response()->json(['id' => $id]);
        return response()->json(['html' => view($id)->render()]);
    }
}
