<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\RekognisiDosenExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class RekognisiDosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \App\RekognisiDosenModel::all();

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
        return Excel::download(new RekognisiDosenExport, 'Rekognisi Dosen.xlsx');
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
        $bidang_keahlian = $request->input('bidang_keahlian');
        $tingkat_wilayah = $request->input('tingkat_wilayah');
        $tingkat_nasional = $request->input('tingkat_nasional');
        $tingkat_internasional = $request->input('tingkat_internasional');
        $tahun = $request->input('tahun');
    
        $data = new \App\RekognisiDosenModel();
        $data->nama_dosen = $nama_dosen;
        $data->bidang_keahlian = $bidang_keahlian;
        $data->tingkat_wilayah = $tingkat_wilayah;
        $data->tingkat_nasional = $tingkat_nasional;
        $data->tingkat_internasional = $tingkat_internasional;
        $data->tahun = $tahun;
    
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
        $data = \App\RekognisiDosenModel::where('id',$id)->first();
    
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
