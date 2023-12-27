<?php

namespace App\Http\Controllers;

use PDF;
use Excel;
use Carbon\Carbon;
use App\Models\mhs;
use App\Models\Tahun;
use App\Exports\ExportMhs;
use App\Imports\ImportMhs;
use App\Imports\MhsImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Console\View\Components\Alert;

class MhsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function mahasiswa(){
    //     return view('mahasiswa.mahasiswa');
    // }

    // public function evaluasi(){
    //     return view('mahasiswa.evaluasi');
    // }

    public function index(Request $request)
    {
            $sematik = mhs::when($request->tahun != null, function ($q) use ($request){
                return $q->where('tahun', $request->tahun);
            })
            ->when($request->semester != null, function ($q) use ($request){
                return $q->where('semester', $request->semester);
            })
            
            ->orderBy('tahun','asc')
            ->paginate(100);

            $mhseval = mhs::where('ipk','<=', 1.99)->count();
            $mhsno = mhs::where('ipk','>=', 2.00)->count();
            $mhs = mhs::whereNotNull('nim')->count();

            $tahuns = mhs::where('tahun', '2020')->get();

            

            
            //  return $sematik;

            return view('mahasiswa.mahasiswa',compact('sematik','mhseval','mhsno','mhs','tahuns'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mhseval = mhs::where('ipk','<=', 1.99)->count();
        $mhsno = mhs::where('ipk','>=', 2.00)->count();
        $mhs = mhs::whereNotNull('nim')->count();
        return view('mahasiswa.create', compact('mhseval','mhsno','mhs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(),[
                'nim'  => 'unique:mhs,nim',
                'nama'  => 'required',
                'tahun'  => 'required|numeric|digits:4',
                'semester'  => 'required|integer|min:1|max:14',
                'jumlahsks'  => 'required|integer|min:0|max:145',
                'ipk'  => 'required|regex:/^\d+(\.\d{1,2})?$/',
            ]);
    
            if($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();
            
            $data['nim'] = $request->nim;
            $data['nama'] = $request->nama;
            $data['tahun'] = $request->tahun;
            $data['semester'] = $request->semester;
            $data['jumlahsks'] = $request->jumlahsks;
            $data['ipk'] = $request->ipk;
    
            mhs::create($data);
    
            return redirect()->route('mahasiswa')->with('success','Data berhasil ditambahkan');
    }
    


    /**
     * Display the specified resource.
     */
    // public function show()
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,  $id)
    {
        //
        $data = mhs::find($id);

            $mhseval = mhs::where('ipk','<=', 1.99)->count();
            $mhsno = mhs::where('ipk','>=', 2.00)->count();
            $mhs = mhs::whereNotNull('nim')->count();
            
            return view('mahasiswa.edit',compact('data','mhseval','mhsno','mhs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'nim'  => 'required',
            'nama'  => 'required',
            'tahun'  => 'required',
            'semester'  => 'required',
            'jumlahsks'  => 'required',
            'ipk'  => 'required',
            // jika password maka nullable
            
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        
        $data['nim'] = $request->nim;
        $data['nama'] = $request->nama;
        $data['tahun'] = $request->tahun;
        $data['semester'] = $request->semester;
        $data['jumlahsks'] = $request->jumlahsks;
        $data['ipk'] = $request->ipk;
       
        
        mhs::whereId($id)->update($data);

        return redirect()->route('mahasiswa')->with('success','Data berhasil di ubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        // dd($request->all());
        $data = mhs::find($id);

        if(!$data){
            echo"data tidak ditemukan";
        }
        $data->delete();
       

        return redirect()->route('mahasiswa');

    }


    public function search(Request $request)
    {
            $query = $request->input('keyword');
            $mhseval = mhs::where('ipk','<=', 1.99)->count();
            $mhsno = mhs::where('ipk','>=', 2.00)->count();
            $mhs = mhs::whereNotNull('nim')->count();
            $sematik = mhs::where('nim','LIKE','%'.$query.'%')
            ->orWhere('nama','LIKE','%'.$query.'%')
            ->orWhere('tahun','LIKE','%'.$query.'%')
            ->orWhere('ipk','LIKE','%'.$query.'%')
            ->orWhere('jumlahsks','LIKE','%'.$query.'%')
            ->paginate(100);
             // $keyword = $request->keyword;

            return view('mahasiswa.mahasiswa',compact('sematik','mhs','mhseval','mhsno','query'));

    }
    
    public function downloaddata()
    {
        // $export = ;
        return Excel::download(new ExportMhs, 'DataMahasiswa.xlsx');
         

    }



    public function impor()
    {
        $mhseval = mhs::where('ipk','<=', 1.99)->count();
        $mhsno = mhs::where('ipk','>=', 2.00)->count();
        $mhs = mhs::whereNotNull('nim')->count();
        // $export = ;
        // return Excel::download(new ExportMhs, 'DataMahasiswa.xlsx');
         return view('mahasiswa.upload', compact('mhseval','mhsno','mhs'));

    }
    
    public function importdata(Request $request)
    {
       

        Excel::import(new MhsImport, $request->file('file'));
            // dd($request->all());
    
        return redirect()->route('mahasiswa')->with('success', 'File excel berhasil diunggah.');
       
    }


    public function cetak()
    {
        
        
        $date = [
            'date' => Carbon::now()->translatedFormat('d F Y') 
        ];
        $years = [2021, 2020, 2022, 2023, 2019, 2018, 2017, 2016];
        $nilai = 1.99;
        $data = mhs::whereIn('tahun', $years) 
        //nilai ipkc
            ->where(function ($query) use ($nilai) {
                $query->orWhere('ipk', '<=', $nilai);
            })
            ->where(function ($query) {
                // minimum sks yang dicapai
                $query->orWhere(function ($subquery) {
                    $subquery->where('semester', 3)
                        ->where('jumlahsks', '<=', 40);
                })
                    ->orWhere(function ($subquery) {
                        $subquery->where('semester', 5)
                            ->where('jumlahsks', '<=', 50);
                    })
                    ->orWhere(function ($subquery) {
                        $subquery->where('semester', 7)
                            ->where('jumlahsks', '<=', 70);
                    })
                    ->orWhere(function ($subquery) {
                        $subquery->where('semester', 14)
                            ->where('jumlahsks', '<=', 135);
                    });
            })
            ->orderBy('semester','desc')
            ->get();
        
        $pdf = PDF::loadView('mahasiswa.cetakpdf', compact('data'), $date);
        $pdf->setPaper('f4', 'portrait');
        return $pdf->stream('mahasiswa.cetakpdf');
        

    }


    // public function filterdata(){

    //    $tahuns = mhs::where('tahun', '2020')->get();

       
        
    // }
    


}