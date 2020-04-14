<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\DosenTetapExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class DosenTetapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \App\DosenTetapModel::all();

        if(count($data) > 0)
        {
            $res['message'] = "Success";
            $res['values'] = $data;
            return response($res);
        }
        else
        {
            $res['message'] = "Empty!";
            return response($res);
        }
    }

    /**
     * export to excel a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function export_excel()
    {
        return Excel::download(new DosenTetapExport, 'Dosen Tetap.xlsx');
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
        $nama_dosen = $request->input('nama_dosen');
        $nidn = $request->input('nidn');
        $pendidikan_pasca_sarjana = $request->input('pendidikan_pasca_sarjana');
        $bidang_keahlian = $request->input('bidang_keahlian');
        $kompetensi_inti_ps = $request->input('kompetensi_inti_ps');
        $jabatan_akademik = $request->input('jabatan_akademik');
        $sertifikat_pendidik_profesional = $request->input('sertifikat_pendidik_profesional');
        $sertifikat_kompetensi = $request->input('sertifikat_kompetensi');
        $mata_kuliah = $request->input('mata_kuliah');
        $bidang_keahlian_mata_kuliah = $request->input('bidang_keahlian_mata_kuliah');
        $mata_kuliah_ps_lain = $request->input('mata_kuliah_ps_lain');
    
        $data = new \App\DosenTetapModel();
        $data->nama_dosen = $nama_dosen;
        $data->nidn = $nidn;
        $data->pendidikan_pasca_sarjana = $pendidikan_pasca_sarjana;
        $data->bidang_keahlian = $bidang_keahlian;
        $data->kompetensi_inti_ps = $kompetensi_inti_ps;
        $data->jabatan_akademik = $jabatan_akademik;
        $data->sertifikat_pendidik_profesional = $sertifikat_pendidik_profesional;
        $data->sertifikat_kompetensi = $sertifikat_kompetensi;
        $data->mata_kuliah = $mata_kuliah;
        $data->bidang_keahlian_mata_kuliah = $bidang_keahlian_mata_kuliah;
        $data->mata_kuliah_ps_lain = $mata_kuliah_ps_lain;
    
        if($data->save()){
            $res['message'] = "Success!";
            $res['value'] = "$data";
            return response($res);
        }
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
        $data = \App\DosenTetapModel::where('id',$id)->first();
    
        if($data->delete()){
            $res['message'] = "Success!";
            $res['value'] = "$data";
            return response($res);
        }
        else{
            $res['message'] = "Failed!";
            return response($res);
        }
    }
}
