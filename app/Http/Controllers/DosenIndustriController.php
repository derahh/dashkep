<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\DosenIndustriExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class DosenIndustriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \App\DosenIndustriModel::all();

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
        return Excel::download(new DosenIndustriExport, 'Dosen Industri.xlsx');
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
        $jabatan_akademik = $request->input('jabatan_akademik');
        $sertifikat_pendidik_profesional = $request->input('sertifikat_pendidik_profesional');
        $mata_kuliah = $request->input('mata_kuliah');
        $bidang_keahlian_mata_kuliah = $request->input('bidang_keahlian_mata_kuliah');
    
        $data = new \App\DosenIndustriModel();
        $data->nama_dosen = $nama_dosen;
        $data->nidn = $nidn;
        $data->pendidikan_pasca_sarjana = $pendidikan_pasca_sarjana;
        $data->bidang_keahlian = $bidang_keahlian;
        $data->jabatan_akademik = $jabatan_akademik;
        $data->sertifikat_pendidik_profesional = $sertifikat_pendidik_profesional;
        $data->mata_kuliah = $mata_kuliah;
        $data->bidang_keahlian_mata_kuliah = $bidang_keahlian_mata_kuliah;
    
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
        //
    }
}
