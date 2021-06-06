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
        //some error checking to see if we're getting the form request back
        print_r($request->all());
        print_r($request->cafftypes);

        //validating the form with requirements
        $validated = $request->validate([
            'numofcups' => 'required|max:2|integer'

        ]);

        //here is where i start with the database work.
        //Connect to the database
        //Select the caffene amounts and serving info from the db
        // use this:   Max Caffeine (500) - (caf from db * servings)
        //Then we're going to need some error checking here to ensure if the 
        //required caffamount is not a negative number (if it is, we have went over our budget)
    }
}
