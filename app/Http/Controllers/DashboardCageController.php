<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cage;
use App\Models\Size;
use App\Models\Status;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class DashboardCageController extends Controller
{
    
    public function index(Request $request)
    {
        if($request->has('search')){
            $dtCage     = Cage::where('kode_kandang', 'LIKE', '%' . $request->search . '%')->get();
            $dtStatus   = Status::all();
            $dtSize     = Size::all();
            
        }else{
            $dtCage     = Cage::With('status','size')->get();
            $dtStatus   = Status::all();
            $dtSize     = Size::all();
        }

        return view('Admin.Cage.Cage', compact('dtCage', 'dtStatus', 'dtSize'));
    }

    
    public function create()
    {
        $dtCage     = Cage::With('status','size')->get();
        $dtStatus   = Status::all();
        $dtSize     = Size::all();
        return view('Admin.Cage.Create_Cage', compact('dtCage', 'dtStatus', 'dtSize'));
    }

    
    public function store(Request $request)
    {

        $validateData = $request->validate([

            'nama_kandang'  => 'required',
            'gambar'        => 'required',
        ]);

        if($request->hasfile('gambar'))
        {

            $file      = $request->file('gambar');
            $namaFile  = $file->getClientOriginalName();
            $file->move(public_path().'/img-Cage', $namaFile);

        }

        $config      = ['table'=>'cages','field'=>'kode_kandang', 'length'=>7,'prefix'=>'KC-'];
        $kode_kandang   = IdGenerator::generate($config);

        $cage = new Cage;
        $cage->kode_kandang = $kode_kandang;
        $cage->nama_kandang = $request->nama_kandang;
        $cage->size_id      = $request->size_id;
        $cage->harga_id     = $request->harga_id;
        $cage->status_id    = $request->status_id;
        $cage->gambar       = $namaFile;
        $cage->save();

        return redirect('/cage')->with('success', 'Kandang sudah ditambahkan!');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $siCage     = Cage::with('status', 'size')->findorfail($id);
        $dtStatus   = Status::all();
        $dtSize     = Size::all();
        return view('Admin.Cage.Edit_Cage', compact('siCage', 'dtStatus', 'dtSize'));
    }

    
    public function update(Request $request, $id)
    {
        $siCage = Cage::findorfail($id);
        $siCage->update($request->all());
        return redirect('/cage')->with('success','Kandang berhasil di update!');
    }

    
    public function destroy($id)
    {
        $siCage = Cage::findorfail($id);
        $siCage->delete();
        return back()->with('delete','Kandang berhasil di hapus !');
    }
}
