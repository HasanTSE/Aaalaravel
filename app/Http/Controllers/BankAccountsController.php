<?php

namespace App\Http\Controllers;

use App\Models\Bank_Accounts;
use App\Models\Bank_Information;
use Illuminate\Http\Request;

class BankAccountsController extends Controller
{
    protected $bank_acnt;

    public function __construct(Request $request){
        
        $this->bank_acnt = new Bank_Accounts();
    }

    public function index(Request $request)
    {
        $query=Bank_Accounts::query();
       
        if($request->search && $request->search!=null)
        {
          $query->where('account_name',$request->search);   
        }
        
         $bank_acnts = $query->latest()->get();

        return view('pages.bankAcnt_View', compact('bank_acnts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {       
    //      $bank_informations = Bank_Information::all();
    //      return view('pages.bankAcnt_Create', compact('bank_informations'));
    //      return redirect('bankAcnt_View');
     
    // }

    public function create()
{       
    $bank_informations = Bank_Information::all();
    
    return view('pages.bankAcnt_Create', compact('bank_informations'));
    // return view('pages.bankAcnt_Create', compact('bank_informations'));
    // return redirect('bankAcnt_View');
}



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $this->bank_acnt->create($request->all());
        //return redirect()->back();   
        //return redirect('bankAcnt_View');
        return redirect()->route('bankAcnt.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Bank_Accounts $bank_Accounts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $bank_acnt = Bank_Accounts::find($id);
         $bank_informations = Bank_Information::all();
       
        return view('pages.bankAcnt_Edit', compact('bank_informations', 'bank_acnt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bank_acnt = $this->bank_acnt->find($id);
        $bank_acnt->update($request->all());
        return redirect('bankAcnt_View');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bank_acnt = $this->bank_acnt->find($id);
        $bank_acnt->delete();
        return redirect('bankAcnt_View');
    }
}
