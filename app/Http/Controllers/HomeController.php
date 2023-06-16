<?php

namespace App\Http\Controllers;

use App\Models\FPKRequest;
use App\Models\User;
use App\Models\Employee;
use App\Imports\EmployeeImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        // $fpk_req = FPKRequest::where('created_by', '=', $id)->orderBy('status', 'ASC')->orderBy('created_at', 'DESC')->get();
        $fpk_req = FPKRequest::all();
        return view('home.index', compact('fpk_req'));
    }

    public function detail($id)
    {
        $fpk_req = FPKRequest::where('id', $id)->get();

        $list_approve = DB::table('fpk_requests_approvals')
        ->select(
            'fpk_requests_approvals.fpk_req_id',
            'fpk_requests_approvals.employee_id',
            'employees.nama',
            'fpk_requests_approvals.status',
            'fpk_requests_approvals.note')
        ->join('employees','employees.id','=','fpk_requests_approvals.employee_id')
        ->where('status', 'Approve')
        ->where('fpk_req_id', $id)
        ->get();

        $list_reject = DB::table('fpk_requests_approvals')
        ->select(
            'fpk_requests_approvals.fpk_req_id',
            'fpk_requests_approvals.employee_id',
            'employees.nama',
            'fpk_requests_approvals.status',
            'fpk_requests_approvals.note')
        ->join('employees','employees.id','=','fpk_requests_approvals.employee_id')
        ->where('status', 'Reject')
        ->where('fpk_req_id', $id)
        ->get();

        $id_employee = DB::table('fpk_requests_approvals')->where('fpk_req_id', $id)
        ->get();

        return view('home.detail', compact('fpk_req', 'id_employee','list_approve','list_reject'));
    }

    public function delete($id)
    {
        $fpk_req = FPKRequest::where('id', $id)->delete();

        toastr()->success('Data Berhasil dihapus');
        return redirect('/');
    }

    public function indeximport()
    {
        return view('home.import');
    }

    public function import(Request $req)
    {
        // return $req;
        Excel::import(new EmployeeImport, $req->file('file'));
        return back()->with('message', [
            'type' => 'Berhasil diimport!',
            'msg' => 'Berhasil!',
        ]);
    }
}
