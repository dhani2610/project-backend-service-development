<?php

namespace App\Http\Controllers;

use App\Models\HistoryLog;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title'] = 'Pemesanan';
        $data['breadcumb'] = 'Pemesanan';
        $data['pemesanan'] = Pemesanan::get();


        return view('pemesanan.index', $data);
    }

    public function cekPesanan(){
        $data['page_title'] = 'Cek Pemesanan';
        $data['breadcumb'] = 'Cek Pemesanan';
        if (Auth::user()->getRoleNames()[0] == 'Admin') {
            $data['pemesanan'] = Pemesanan::get();
        } else {
            $data['pemesanan'] = Pemesanan::where('user_id',Auth::user()->id)->get();
        }
        return view('pemesanan.cek-pesanan', $data);
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
        try {
            $validateData = $request->validate([
                'nama_project'   => 'required',
                'domain' => 'required',
                'deskripsi_project' => 'required',
                'tlp'   => 'required|numeric',
                'nama_pemesan'   => 'required',
                'status' => 'required',
                'user_id' => 'required',
            ]);
            
            $newHistoryLog = new HistoryLog();
            $newHistoryLog->datetime = date('Y-m-d H:i:s');
            $newHistoryLog->type = 'Add Pemesanan';
            $newHistoryLog->user_id = auth()->user()->id;
            $newHistoryLog->save();
            
            $pemesanan = new Pemesanan();
            $pemesanan->nama_pemesan =  $validateData['nama_pemesan'];
            $pemesanan->tlp = $validateData['tlp'];
            $pemesanan->nama_project = $validateData['nama_project'];
            $pemesanan->deskripsi_project = $validateData['deskripsi_project'];
            $pemesanan->status = $validateData['status'];
            $pemesanan->domain = $validateData['domain'];
            $pemesanan->user_id = $validateData['user_id'];
            $pemesanan->save();
    
            return redirect()->route('pemesanan-cek')->with(['success' => 'Pesanan added successfully!']);
    
        } catch (\Throwable $th) {
            return redirect()->back()->with(['failed' => $th->getMessage()]);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['page_title'] = 'Edit Pesanan';
        $data['breadcumb'] = 'Edit Pesanan';
        $data['pemesanan'] = Pemesanan::findOrFail($id);

        return view('pemesanan.edit', $data);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validateData = $request->validate([
            'nama_project'   => 'required',
            'domain' => 'required',
            'deskripsi_project' => 'required',
            'tlp'   => 'required|numeric',
            'nama_pemesan'   => 'required',
            'status' => 'required',
            'user_id' => 'required',
        ]);

        $newHistoryLog = new HistoryLog();
        $newHistoryLog->datetime = date('Y-m-d H:i:s');
        $newHistoryLog->type = 'Update Pemesanan';
        $newHistoryLog->user_id = auth()->user()->id;
        $newHistoryLog->save();

        $pemesanan = Pemesanan::findOrFail($request->idpm);
        $pemesanan->nama_pemesan =  $validateData['nama_pemesan'];
        $pemesanan->tlp = $validateData['tlp'];
        $pemesanan->nama_project = $validateData['nama_project'];
        $pemesanan->deskripsi_project = $validateData['deskripsi_project'];
        $pemesanan->status = $validateData['status'];
        $pemesanan->domain = $validateData['domain'];
        $pemesanan->user_id = $validateData['user_id'];
        $pemesanan->save();

        return redirect()->route('pemesanan-cek')->with(['success' => 'Pemesanan edited successfully!']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::transaction(function () use ($id) {
            $pemesanan = Pemesanan::findOrFail($id);
            $newHistoryLog = new HistoryLog();
            $newHistoryLog->datetime = date('Y-m-d H:i:s');
            $newHistoryLog->type = 'Delete Pesanan';
            $newHistoryLog->user_id = auth()->user()->id;
            $newHistoryLog->save();

            $pemesanan->delete();
        });

        return redirect()->route('pemesanan-cek')->with(['success' => 'Pesanan Deleted successfully!']);
    }
}
