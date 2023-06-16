<?php

namespace App\Http\Controllers;

use App\Models\FPKRequest;
use App\Models\User;
use App\Models\Employee;
use App\Exports\FPKExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Excel as ExcelExcel;

class ReportController extends Controller
{
    public function report(){
        $fpk_req = FPKRequest::all();
        // return $fpk_req;

        $tanggal_input = FPKRequest::get(['created_at']);
        // return $tanggal_input;

        $new_date = date("Y-m-d",strtotime($tanggal_input));
        // return $new_date;
        
        // $timestamp = strtotime($row['DATETIMEAPP']);
        // $date = date('d-m-Y', $timestamp);
        // return$date;

        return view('report.report', compact('fpk_req'));
    }

    public function export(Request $request)
    {
        // return $request;


        $request->validate([
            'dari_tanggal_data'     =>  'bail|nullable|date',
            'sampai_tanggal_data'   =>  'bail|nullable|date'
        ]);

        // $params = [
        //     'dari_tanggal_data'     =>  $request->dari_tanggal_data,
        //     'sampai_tanggal_data'   =>  $request->sampai_tanggal_data
        // ];

            $from_date  =   $request->dari_tanggal_data;
            $to_date    =   $request->sampai_tanggal_data;

            // return$to_date;

            $data   =   FPKRequest::whereBetween('created_at', [$from_date, $to_date])
                        ->select('created_at', 'nik', 'nama', 'jenis', 'tanggal_masuk', 'jabatan_lama',
                        'jabatan_baru', 'level_lama', 'grade_lama', 'level_baru', 'grade_baru', 'divisi_lama', 
                        'divisi_baru', 'status_karyawan_lama', 'status_karyawan_baru', 'tanggal_efektif', 'note', 'next_approval')
                        ->get([
                            'Date(created_at)', 'nik', 'nama', 'jenis', 'tanggal_masuk', 'jabatan_lama',
                        'jabatan_baru', 'level_lama', 'grade_lama', 'level_baru', 'grade_baru', 'divisi_lama', 
                        'divisi_baru', 'status_karyawan_lama', 'status_karyawan_baru', 'tanggal_efektif', 'note', 'next_approval'
                        ]);
        // return $data;
                        
        // return FPKRequest::select('created_at')->toDateTimeString('created_at')->get();
        
        return Excel::download(new FPKExport($from_date, $to_date), 'FPKCrew-export '.date('d-m-Y').'.xlsx', ExcelExcel::XLSX);
    }
}
