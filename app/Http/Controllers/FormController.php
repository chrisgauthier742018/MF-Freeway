<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{

    public function display()
    {
        return view('form');
    }

    public function formSubmit(Request $request)
    {
        print_r($request->all());
        print_r($request->cafftypes);

        $validated = $request->validate([
            'numofcups' => 'required|max:2|integer'

        ]);
    }
}
