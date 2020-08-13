<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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


     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeUser(Request $request)
    {

        $this->validate($request,[
            'name' => "required|min:3|max:100",
            'nim' => "required|min:10|max:15|unique:users,nim",
            'prodi' => "required",
            'kelas' => "required",
            'semester' => "required",
        ],[
            'nim.unique' => 'Sepertinya NIM Sudah ada',
            'name.min' => 'Jumlah Nama Minimal 3 Karakter ',
            'nim.min' => 'Jumlah NIM Minimal 10 Angka ',
            'name.required' => 'Nama wajib di isi !',
            'nim.required' => 'NIM wajib di isi !'
        ]);

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
                return redirect()->back()->with('success','Data Berhasil Dimasukan');
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
                'datas' => $query,
                'kelas' => $kelas,
            ]);

    }

    public function showUser($id)
    {
        $datas = User::find($id);
        return view('admin/form-user-edit',[
            'datas' => $datas
        ]);
    }

    public function editUser(Request $request,$id)
    {

        $kelas = $request->semester. "-" .$request->prodi. "-" .$request->kelas;

        $query = User::where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->nim,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'kelas' => $kelas,
            'password' => bcrypt($request->nim),
        ]);

        if($query){
            echo "Ok!";
        }
            
    }
    

    public function searchUser()
    {
        return view('admin/showVoter');
    }

    public function destroyUser($id)
    {
        $query = User::where('id',$id)->delete();
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        if($query){
            return redirect()->route('admin.search');
        }
    }
}
