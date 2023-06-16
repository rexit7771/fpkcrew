<?php

namespace App\Exports;

use App\Models\User;
use App\Models\FPKRequest;
use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\Exportable;
// use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Events\AfterSheet;
use Illuminate\Support\Facades\DB;

class FPKExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;
    protected $params;

    public function __construct($from_date, $to_date){
        // $this->params   =   (object) $params;
        $this->from_date    =   $from_date;
        $this->to_date      =   $to_date;
        // return $params;
    }

    public function collection()
    {   

        // return $params;

        
        $query = "SELECT DATE(created_at) as created_at, nik, nama, jenis, tanggal_masuk, jabatan_lama, jabatan_baru, level_lama, level_baru,
                grade_lama, grade_baru, divisi_lama, divisi_baru, status_karyawan_lama, status_karyawan_baru, 
                tanggal_efektif, note FROM fpk_requests WHERE DATE(created_at) BETWEEN '$this->from_date' AND '$this->to_date'";
        
        return collect(DB::select($query));
        
        
        // FPKRequest::select('created_at', 'nik', 'nama', 'jenis', 'tanggal_masuk', 'jabatan_lama',
        //                 'jabatan_baru', 'level_lama', 'grade_lama', 'level_baru', 'grade_baru', 'divisi_lama', 
        //                 'divisi_baru', 'status_karyawan_lama', 'status_karyawan_baru', 'tanggal_efektif', 'note', 'next_approval')->whereBetween('created_at', [$dari_tanggal_data, $sampai_tanggal_data]
        // whereDate('created_at', '>=', $dari_tanggal_data)->whereDate('created_at', '<=', $sampai_tanggal_data));
        // return $type;

        // if($this->params->dari_tanggal_data && $this->params->sampai_tanggal_data) {
        //     $query = " and created_at between '{$this->params->dari_tanggal_data}' and '{$this->params->dari_tanggal_data}'";
        // }
        
        // $tanggal_input = FPKRequest::get(['created_at']);
        // return $tanggal_input;

        // $new_date = date("Y-m-d",strtotime($tanggal_input));

        $data   =   FPKRequest::whereBetween('created_at', [$this->from_date, $this->to_date])
                        ->select('created_at', 'nik', 'nama', 'jenis', 'tanggal_masuk', 'jabatan_lama',
                        'jabatan_baru', 'level_lama', 'grade_lama', 'level_baru', 'grade_baru', 'divisi_lama', 
                        'divisi_baru', 'status_karyawan_lama', 'status_karyawan_baru', 'tanggal_efektif', 'note', 'next_approval')
                        ->get([
                            'Date(created_at)', 'nik', 'nama', 'jenis', 'tanggal_masuk', 'jabatan_lama',
                        'jabatan_baru', 'level_lama', 'grade_lama', 'level_baru', 'grade_baru', 'divisi_lama', 
                        'divisi_baru', 'status_karyawan_lama', 'status_karyawan_baru', 'tanggal_efektif', 'note', 'next_approval'
                        ]);
        // return $data;
        
        
        
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(20);
            },
        ];
    }

    public function headings(): array
    {
        return[
            'Tanggal Input',
            'NIK',
            'Nama',
            'Jenis FPK',
            'Tanggal Masuk',
            'Jabatan Lama',
            'Jabatan Baru',
            'Level Lama',
            'Level Baru',
            'Grade Lama',
            'Grade Baru',
            'Divisi Lama',
            'Divisi Baru',
            'Status Karyawan Lama',
            'Status Karyawan Baru',
            'Tanggal Efektif',
            'Note',
        ];
    }
    
    public function map($row): array
    {
        return [
            date('d-m-Y', strtotime($row->created_at)),
            $row->nik,
            $row->nama,
            $row->jenis,
            date('d-m-Y', strtotime($row->tanggal_masuk)),
            $row->jabatan_lama,
            $row->jabatan_baru,
            $row->level_lama,
            $row->level_baru,
            $row->grade_lama,
            $row->grade_baru,
            $row->divisi_lama,
            $row->divisi_baru,
            $row->status_karyawan_lama,
            $row->status_karyawan_baru,
            date('d-m-Y', strtotime($row->tanggal_efektif)),
            $row->note,
            
        ];
        }
    
    
}