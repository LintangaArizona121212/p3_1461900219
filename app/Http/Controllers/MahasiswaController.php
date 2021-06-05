<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::orderBy('id','asc')->paginate(5);
        return view('mahasiswa.index',compact('mahasiswas'))
                ->with('i',(request()->input('page',1) -1)*5);
    }

    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'NamaMahasiswa'=>'required',
            'NBIMahasiswa' => 'required',
            'angkatanMahasiswa'=>'required',
            'judulskripsiMahasiswa' => 'required',
            'pembimbing1'=>'required',
            'pembimbing2' => 'required',
            //'gambarMahasiswa' => 'required|image|mimes:jpg,png,jpeg'
        ]);
 
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')
                         ->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.detail', compact('mahasiswa'));
    }

    /**
     * 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'NamaMahasiswa'=>'required',
            'NBIMahasiswa' => 'required',
            'angkatanMahasiswa'=>'required',
            'judulskripsiMahasiswa' => 'required',
            'pembimbing1'=>'required',
            'pembimbing2' => 'required',
            //'gambarMahasiswa' => 'required|image|mimes:jpg,png,jpeg'
        ]);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->NamaMahasiswa = $request->get('NamaMahasiswa');
        $mahasiswa->NBIMahasiswa = $request->get('NBIMahasiswa');
        $mahasiswa->angkatanMahasiswa = $request->get('angkatanMahasiswa');
        $mahasiswa->judulskripsiMahasiswa = $request->get('judulskripsiMahasiswa');
        $mahasiswa->pembimbing1 = $request->get('pembimbing1');
        $mahasiswa->pembimbing2 = $request->get('pembimbing2');
        $mahasiswa->save();
        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data Alumni berhasil dihapus');
    }
}
