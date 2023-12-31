<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Gender;
use App\Models\Level;
use Illuminate\Support\Facades\Hash;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class DashboardUserController extends Controller
{
    public function index(Request $request)
    {

        if($request->has('search')){
            $dtUser    = User::where('nama_user', 'LIKE', '%' . $request->search . '%')->get();
            $dtGender  = Gender::all();
            $dtLevel   = Level::all();

        }else{
            $dtUser    = User::With('gender')->get();
            $dtGender  = Gender::all();
            $dtLevel   = Level::all();
        }

        return view('Admin.User.Pengguna.User_Pengguna',compact('dtUser', 'dtGender', 'dtLevel'));
    }


    public function create()
    {

        $dtGender  = Gender::all();
        $dtLevel   = Level::all();
        return view('Admin.User.Pengguna.Create_Pengguna', compact('dtGender', 'dtLevel'));

    }


    public function store(Request $request)
    {
        // dd($request->all());

        $config      = ['table'=>'users','field'=>'kode_user', 'length'=>7,'prefix'=>'usr-'];
        $kode_user   = IdGenerator::generate($config);

        $validateData = $request->validate([
            'nama_user' => 'required',
            'gender_id' => 'required',
            'level_id' => 'required',
            'email' => 'required',
            'no_tlpn' => 'required|min:10|max:13',
            'alamat' => 'required|min:15|max:255',
            'password' => 'required',
        ]);

        $User = new User;
        $User->kode_user    = $kode_user;
        $User->nama_user    = $request->nama_user;
        $User->gender_id    = $request->gender_id;
        $User->level_id     = $request->level_id;
        $User->email        = $request->email;
        $User->no_tlpn      = $request->no_tlpn;
        $User->alamat       = $request->alamat;
        $User->password     = Hash::make($request->password);
        $User->save();

        return redirect('/user-pengguna')->with('success', 'Berhasil menambahkan User !');

    }

   
    public function show($id)
    {
        //
    }


    public function edit($id)
    {

        $siUser    = User::findorfail($id);
        $dtGender  = Gender::all();
        $dtLevel   = Level::all();

        return view('Admin.User.Pengguna.Edit_Pengguna',compact('siUser', 'dtGender', 'dtLevel'));

    }


    public function update(Request $request, $id)
    {

        $siUser = User::findorfail($id);

        $input = $request->all();

        $input['nama_user'] = $request['nama_user'];
        $input['gender_id'] = $request['gender_id'];
        $input['level_id'] = $request['level_id'];
        $input['email'] = $request['email'];
        $input['alamat'] = $request['alamat'];
        $input['no_tlpn'] = $request['no_tlpn'];
        $input['password'] = Hash::make($request['password']);

        User::find($id)->update($input);

        // $siUser->update($request->all());

        return redirect('/user-pengguna')->with('success', 'User Telah di Update !');

    }


    public function changePasswordPengguna($id)
    {

        $siUser    = User::findorfail($id);

        return view('Admin.User.Pengguna.Change_Password_Pengguna',compact('siUser'));

    }



    public function updatePasswordPengguna(Request $request, $id)
    {

        $siUser = User::findorfail($id);

        $input = $request->all();

        $validateData = $request->validate([
            
            'password' => 'required',
            
        ]);

        $input['password'] = Hash::make($request['password']);

        User::find($id)->update($input);

        return redirect('/user-pengguna')->with('success', 'Password Telah di Update !');

    }


    public function destroy($id)
    {

        $siUser = User::findorfail($id);
        $siUser->delete();

        return back()->with('delete', 'User Telah di Hapus !');

    }
}
