<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;

class SkillController extends Controller
{

    public function index()
    {
        //  $data['companies'] = Company::orderby('id', 'desc')->paginate(5);
        //  return view('companies.index', $data);
        $data['Users'] = User::where('name', '=', '')->orwhere('lang_id', '=', 1);
        return view('user.search', $data);
    }

    public function search(Request $request)
    {

        $request->validate(
            [

                /*
               'name' => 
                [
                    'required',
                    'min:8',
                    'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/'
                   
                ]

                */]
        );

        if ($request->hasFile('file')) {

            $request->validate([
                'file' => 'required|mimes:png|max:200' // Only allow .jpg, .bmp and .png file types.
            ]);


            $file = $request->file('file');
            $request->file->store('pic', 'public');

            $name = $file->hashName();

            $upload = Storage::put("avatars/{$name}", $file);
        }

        // $data['Users'] = User::where('name', '=', $request->name)->orwhere('lang_id', '=', 1) ;
        return redirect()->route('skill.index')->with('success', 'ค้นหาสำเร็จ');
    }



    //
}
