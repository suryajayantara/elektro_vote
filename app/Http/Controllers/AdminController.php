<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use PDO;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:admin'); 
    }


    public function indexUser()
    {
        return view('admin/form-user');
    }

    public function storeUser(Request $request)
    {

        $kelas = $request->semester.$request->prodi.$request->kelas;

        $query = User::create([
            'name' => $request->name,
            'email' => $request->nim,
            'nim' => $request->nim,
            'kelas' => $kelas,
            'status_pilih' => false,
            'password' => bcrypt($request->nim),
        ]);
        $query->assignRole('mahasiswa');
        
        if($query){
            echo "Ok !";        
        }
    }
}
