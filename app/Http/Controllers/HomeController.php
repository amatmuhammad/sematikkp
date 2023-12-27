<?php

namespace App\Http\Controllers;

use App\Models\mhs;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        $mhseval = mhs::where('ipk','<=',1.99)->count();
        $mhsno = mhs::where('ipk','>=',2.00)->count();
        $mhs = mhs::whereNotNull('nim')->count();


        // $jumlahDataAktif = DataModel::where('status', 'aktif')->count();
        return view('master',compact('mhseval','mhsno','mhs'));

    }

   

    public function index()
    {
        //
        // $sematik = User::get();
        // return view('master', ['sematik' => $sematik]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
