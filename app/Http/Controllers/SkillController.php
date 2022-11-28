<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SkillController extends Controller
{

    public function index()
    {
      //  $data['companies'] = Company::orderby('id', 'desc')->paginate(5);
      //  return view('companies.index', $data);
      return view('user.search') ;
    }

    public function search(Request $request)
    {
     
        $request->validate(
            [
                'name' => 'required'
                
            ]
        );


        $data['Users'] = User::orderby('id', 'desc') ;
        
    
        return redirect()->route('skill.index')->with('success', 'ค้นหาสำเร็จ');
    }



    //
}
