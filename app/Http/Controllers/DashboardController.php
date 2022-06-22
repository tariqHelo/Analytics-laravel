<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tblleads             = DB::table('tblleads')
                                 ->selectRaw('count(*) as total')
                                 ->selectRaw('count(case when status = 3 then 1 end) as Completed')
                                 ->selectRaw('count(case when status = 2 then 1 end) as Processing')
                                 ->selectRaw('count(case when status = 2 then 1 end) as Cancelled')->first();
        $tblestimate_requests = DB::table('tblestimate_requests')
                                ->selectRaw('count(*) as total')
                                ->selectRaw('count(case when status = 3 then 1 end) as Completed')
                                ->selectRaw('count(case when status = 2 then 1 end) as Processing')
                                ->selectRaw('count(case when status = 2 then 1 end) as Cancelled')->first();
        $tblprojects          = DB::table('tblprojects') 
                                ->selectRaw('count(*) as total')
                                ->selectRaw('count(case when status = 3 then 1 end) as Completed')
                                ->selectRaw('count(case when status = 2 then 1 end) as Processing')
                                ->selectRaw('count(case when status = 2 then 1 end) as Cancelled')->first();
        $tblproposals         = DB::table('tblproposals')
                                ->selectRaw('count(*) as total')
                                ->selectRaw('count(case when status = 3 then 1 end) as Completed')
                                ->selectRaw('count(case when status = 2 then 1 end) as Processing')
                                ->selectRaw('count(case when status = 2 then 1 end) as Cancelled')->first();
        $tbltasks             = DB::table('tbltasks') 
                                ->selectRaw('count(*) as total')
                                ->selectRaw('count(case when status = 3 then 1 end) as Completed')
                                ->selectRaw('count(case when status = 2 then 1 end) as Processing')
                                ->selectRaw('count(case when status = 2 then 1 end) as Cancelled')->first();


        $tblinvoices      = DB::table('tblinvoices')->select('datecreated' , 'duedate', 'total')->get();
         //CHEACK IF THE DATE IS LESS THAN TODAY
        $tblinvoices_due  = DB::table('tblinvoices')->select('duedate', 'total')->where('status', 4)->where('duedate', '<', date('Y-m-d'))->sum('total');
        // HOW TO GET OUTSTANDING iNVOICES (DUE DATE GREATER THAN TODAY)
        $tblinvoices_outstanding = DB::table('tblinvoices')->select('duedate', 'total')->where('status', 4)->where('duedate', '>', date('Y-m-d'))->sum('total');
        //how to get Paid invoices
        $tblinvoices_paid = DB::table('tblinvoices')->where('status', 2)->sum('total');
      //  dd($tblinvoices_paid);       
     //   $tblinvoices_total    = DB::table('tblinvoices')->selectRaw('sum(total) as total')->first();     
      
     

      // dd($tblinvoices);
        return view('layouts.admin',compact('tblleads','tblinvoices_due','tblinvoices_outstanding','tblinvoices_paid' ,'tblestimate_requests','tblprojects','tblproposals','tbltasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
