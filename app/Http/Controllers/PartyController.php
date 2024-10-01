<?php

namespace App\Http\Controllers;

use App\Models\Party;
use Illuminate\Http\Request;

class PartyController extends Controller
{
      
    public function index()
    {
      //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.partyInfo_Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       $request->validate([
            'party_name'    => 'required',
            'short_name'    => 'required',
        ]);

         $program = new Party;

        $program->party_name   = $request->party_name;
        $program->short_name   = $request->short_name;
        $program->party_code       = $request->party_code;
        $program->present_address         = $request->present_address;
        $program->mobile_no            = $request->mobile_no;
        $program->email_address   = $request->email_address;
        $program->web_address   = $request->web_address;
        $program->party_type       = $request->party_type;
        $program->opening_date         = $request->opening_date;
        $program->opening_balance            = $request->opening_balance;
        //$program->doc_id         = $request->doc_id;
        $program->is_active            = $request->is_active;

        //$program->save();

      // $this->partys->create($request->all());
      //   return redirect()->back();

        return redirect()->route('pages.partyInfo_Create')->with('success', 'Party Created Successfully!');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(Party $party)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Party $party)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Party $party)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Party $party)
    {
        //
    }
}
