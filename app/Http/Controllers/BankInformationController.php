<?php

namespace App\Http\Controllers;

use App\Models\Bank_Information;
use Illuminate\Http\Request;

class BankInformationController extends Controller
{
   protected $bank_information;
    public function __construct(){
        $this->bank_information = new Bank_Information();
    }
    

    public function index(Request $request)
    {
        //  $bank_informations = Bank_Information::all();

           $query=Bank_Information::query();
        if($request->search && $request->search!=null)
        {
          $query->where('bank_name',$request->search);   
        }

        $bank_informations = $query->latest()->get();
         //$bank_informations = $query->paginate(2);

        return view('pages.bankInfo_View', compact('bank_informations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('pages.bankInfo_Create');
         
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $this->bank_information->create($request->all());
        return redirect('bankInfo_View');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bank_Information $bank_Information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $bank_information = Bank_Information::find($id);
         return view('pages.bankInfo_Edit', compact('bank_information'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $bank_information = $this->bank_information->find($id);
          $bank_information->update($request->all());
          return redirect('bankInfo_View');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bank_information = $this->bank_information->find($id);
        $bank_information->delete();
        return redirect('bankInfo_View');
    }
}


// if ($request->hasFile('file')) {
//             $cp = $request->file('file');
//             $extension = strtolower($cp->getClientOriginalExtension());
//             $randomFileName = $noticeEvent->id.'noticeEvent'.date('Y_m_d_his').'_'.rand(10000000,99999999).'.'.$extension;

//             Storage::disk('public')->put('noticeEventsFiles/'.$randomFileName, File::get($cp));

//             $noticeEvent->file = 'storage/noticeEventsFiles/'.$randomFileName;
//             $noticeEvent->save();
//         }