<?php

namespace App\Http\Controllers;

use App\Models\FPKRequest;
use App\Models\User;
use App\Models\Employee;
use App\Mail\FPKCrewEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class InputController extends Controller
{
    public function input()
    {
        $id_user = Auth::id();
        $type = Auth::user();

        $table_users = Employee::where('id', $id_user)->get();

        return view('input.input', compact('table_users'));
    }


    public function store(Request $request)
    {
        
        $id_inputer = Auth::id();
        $nama_inputer = Employee::where('id', $id_inputer)->first();
        
        
        $superior_data = User::where('id',$request->next_approval)->first();
        
        

        $db_new =  DB::table('fpk_requests')
        ->insertGetId([
            'nik'                   =>  $request->nik,
            'nama'                  =>  $request->nama,
            'jenis'                 =>  $request->jenis,
            'tanggal_masuk'         =>  $request->tanggal_masuk,
            'jabatan_lama'          =>  $request->jabatan_lama,
            'jabatan_baru'          =>  $request->jabatan_baru,
            'level_lama'            =>  $request->level_lama,
            'grade_lama'            =>  $request->grade_lama,
            'level_baru'            =>  $request->level_baru,
            'grade_baru'            =>  $request->grade_baru,
            'divisi_lama'           =>  $request->divisi_lama,
            'divisi_baru'           =>  $request->divisi_baru,
            'status_karyawan_lama'  =>  $request->status_karyawan_lama,
            'status_karyawan_baru'  =>  $request->status_karyawan_baru,
            'tanggal_efektif'       =>  $request->tanggal_efektif,
            'note'                  =>  $request->note,
            'ishc'                  =>  0,
            'next_approval'         =>  $request->direct_superior,
            'created_by'            =>  $id_inputer
        ]);

        

        $id_fpk_request = $db_new;
        $nama = $nama_inputer->nama;
        $nama_penyetuju = null;
        $status = null;
        $email_pengaju = null;
        $email_superior = $superior_data->email;

        // Mail::send(new FPKCrewEmail($id_fpk_request, $nama, $nama_penyetuju, $status, $email_pengaju, $email_superior));
        toastr()->success('Data Berhasil Di input');

        return redirect()->to('/')->with('message', [
            'type'  =>  'success',
            'msg'   =>  'Berhasil'
        ]);
    }


    public function edit($id_request)
    {
        $fpk_req = FPKRequest::where('id', $id_request)->get();

        return view('input.edit', compact('fpk_req'));
    }


    public function update(Request $request)
    {
        \DB::table('fpk_requests')->where('id', $request->id)
        ->update([
            'nik'                   =>  $request->nik,
            'nama'                  =>  $request->nama,
            'jenis'                 =>  $request->jenis,
            'tanggal_masuk'         =>  $request->tanggal_masuk,
            'jabatan_lama'          =>  $request->jabatan_lama,
            'jabatan_baru'          =>  $request->jabatan_baru,
            'level_lama'            =>  $request->level_lama,
            'level_baru'            =>  $request->level_baru,
            'divisi_lama'           =>  $request->divisi_lama,
            'divisi_baru'           =>  $request->divisi_baru,
            'status_karyawan_lama'  =>  $request->status_karyawan_lama,
            'status_karyawan_baru'  =>  $request->status_karyawan_baru,
            'tanggal_efektif'       =>  $request->tanggal_efektif,
            'note'                  =>  $request->note
        ]);

        toastr()->success('Data Berhasil Diperbaharui');

        return redirect()->to('/')->with('message', [
            'type'  =>  'success',
            'msg'   =>  'Berhasil'
        ]);
    }
}
