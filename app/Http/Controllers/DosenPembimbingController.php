<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\DosenPembimbingExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class DosenPembimbingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \App\DosenPembimbingModel::all();

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
        return Excel::download(new DosenPembimbingExport, 'Dosen Pembimbing.xlsx');
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
        $akreditasi_ts_2 = $request->input('akreditasi_ts_2');
        $akreditasi_ts_1 = $request->input('akreditasi_ts_1');
        $akreditasi_ts = $request->input('akreditasi_ts');
        $pslain_ts_1 = $request->input('pslain_ts_1');
        $pslain_ts = $request->input('pslain_ts');
        $jumlah_bimbingan = $request->input('jumlah_bimbingan');
        $jumlah_bimbingan_program = $request->input('jumlah_bimbingan_program');
    
        $data = new \App\DosenPembimbingModel();
        $data->nama_dosen = $nama_dosen;
        $data->nidn = $nidn;
        $data->akreditasi_ts_2 = $akreditasi_ts_2;
        $data->akreditasi_ts_1 = $akreditasi_ts_1;
        $data->akreditasi_ts = $akreditasi_ts;
        $data->pslain_ts_1 = $pslain_ts_1;
        $data->pslain_ts_1 = $pslain_ts_1;
        $data->jumlah_bimbingan = $jumlah_bimbingan;
        $data->jumlah_bimbingan_program = $jumlah_bimbingan_program;
    
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
