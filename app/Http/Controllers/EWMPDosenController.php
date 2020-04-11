<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\EWMPDosenExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class EWMPDosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \App\EWMPDosenModel::all();

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
        return Excel::download(new EWMPDosenExport, 'EWMP Dosen.xlsx');
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
        $dtps = $request->input('dtps');
        $ps_akreditasi = $request->input('ps_akreditasi');
        $pslain_dalam_pt = $request->input('pslain_dalam_pt');
        $pslain_luar_pt = $request->input('pslain_luar_pt');
        $penelitian = $request->input('penelitian');
        $pkm = $request->input('pkm');
        $tugas_tambahan = $request->input('tugas_tambahan');
        $jumlah_sks = $request->input('jumlah_sks');
        $sks_per_semester = $request->input('sks_per_semester');
    
        $data = new \App\EWMPDosenModel();
        $data->nama_dosen = $nama_dosen;
        $data->dtps = $dtps;
        $data->ps_akreditasi = $ps_akreditasi;
        $data->pslain_dalam_pt = $pslain_dalam_pt;
        $data->pslain_luar_pt = $pslain_luar_pt;
        $data->penelitian = $penelitian;
        $data->pkm = $pkm;
        $data->tugas_tambahan = $tugas_tambahan;
        $data->jumlah_sks = $jumlah_sks;
        $data->sks_per_semester = $sks_per_semester;
    
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
