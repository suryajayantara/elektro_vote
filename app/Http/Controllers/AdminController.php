<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:admin'); 
    }

    public function index(){
        return view('admin.dashboard');
    }

    public function formUser()
    {
        return view('admin/form-user');
    }

    public function storeUser(Request $request)
    {

        $kelas = $request->semester. "-" .$request->prodi. "-" .$request->kelas;

        try {
            $query = User::create([
                'name' => $request->name,
                'email' => $request->nim,
                'nim' => $request->nim,
                'prodi' => $request->prodi,
                'kelas' => $kelas,
                'status_pilih' => false,
                'password' => bcrypt($request->nim),
            ]);
            $query->assignRole('mahasiswa');

            if($query){
                return redirect()->back()->with('success','Data Berhasil Masuk !');
            }

        } catch (\Throwable $th) {
            report($th);
            return false;
        }


    }

    public function indexUser(Request $request)
    {
            $kelas = $request->semester. "-" .$request->prodi. "-" .$request->kelas;
    
            $query = User::where('kelas',$kelas)->orderBy('nim','ASC')->get();
            return view('admin.user-list',[
                'datas' => $query
            ]);

    }

    public function searchUser()
    {
        return view('admin/showVoter');
    }
}
