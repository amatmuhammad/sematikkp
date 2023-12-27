<?php

namespace App\Http\Controllers;
use App\Models\mhs;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    //
    public function index(){

        // $this->authorize('admin');
        return view ('mahasiswa.login');
    
    }


    public function loginproses(Request $request){
        // dd($request->all());
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);


        $data = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if(Auth::attempt($data)){
            return redirect()->route('dashboard')->with('success','selamat datang');
        }else{
            return redirect()->route('login')->with('failed','Email atau password anda salah');
        }

    }


    public function daftar()
    {
        return view('mahasiswa.daftar');
    }
    
    public function daftarproses(Request $request)
    {
        // return view('mahasiswa.daftar');
        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'username'  => 'required',
            'password'  => 'required',
            'level'  => 'required',

            // 'tahunmasuk'  => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();
        
        $data['username'] = $request->username;
        $data['password'] = hash::make($request->input('password'));
        $data['level'] = $request->input('level');
      
        user::create($data);

        return redirect()->route('login');
    }

    public function logout(){
        // dd('oke');
        Auth::logout();
        return redirect()->route('login')->with('success','Berhasil keluar');
    }


    public function kelola(){
        // dd('oke');
        // Auth::logout();
        // return redirect()->route('login')->with('success','Berhasil keluar');
        $sematik = user::paginate(5);
        
        $mhseval = mhs::where('ipk','<=',1.99)->count();
        $mhsno = mhs::where('ipk','>=',2.00)->count();
        $mhs = mhs::whereNotNull('nim')->count();
        return view('mahasiswa.kelolauser',compact('sematik','mhseval','mhsno','mhs'));
        // return view('mahasiswa.kelolauser',['sematik'=>$sematik]);
    }

    public function editUser(Request $request,$id){

        $data = user::find($id);
        $mhseval = mhs::where('ipk','<=',1.99)->count();
        $mhsno = mhs::where('ipk','>=',2.00)->count();
        $mhs = mhs::whereNotNull('nim')->count();
        return view('mahasiswa.edituser',compact('data','mhseval','mhsno','mhs'));
        // return view('mahasiswa.edituser', compact('data'));
    }



    public function updateUser(Request $request, $id){

        $validator = Validator::make($request->all(),[
            'username'  => 'required',
            'password'  => '' ?? null,
            'level'     => 'required',

            // 'tahunmasuk'  => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();
        
        $data['username'] = $request->username;
        // $data['password'] = hash::make($request->$password);
        $data['level'] = $request->level;

        if($request->password){
                $data['password'] = Hash::make($request->password);
            }
      
        user::whereId($id)->update($data);

        return redirect()->route('kelolaUser')->with('Data User Berhasil di Update');
    }


    public function hapusdata($id)
    {
        //
        // dd($request->all());
        $data = user::find($id);

        if(!$data){
            echo"data tidak ditemukan";
        }
        $data->delete();
       

        return redirect()->route('kelolaUser');

    }
}
