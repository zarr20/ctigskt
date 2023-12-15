<?php

namespace App\Http\Controllers;

use App\Models\TrialRequest;
use Illuminate\Http\Request;

class RequestTrialController extends Controller
{

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'corporate_email' => 'required|email',
            'job_title' => 'required',
            'company_name' => 'required',
            'industry' => 'required',
            'phone_number' => 'required',
            'agree' => 'boolean',
        ]);


        // Memastikan 'agree' ada pada data
        $validatedData['agree'] = array_key_exists('agree', $validatedData) ? $validatedData['agree'] : false;


        // $contact = Contact::create($validatedData);
        TrialRequest::saveWithRawSQL($validatedData);

        return redirect()->route('thank_you')->with('success', 'Data has been saved!');
    }
}
