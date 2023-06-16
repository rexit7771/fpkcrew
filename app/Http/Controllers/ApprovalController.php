<?php

namespace App\Http\Controllers;

use App\Models\FPKRequest;
use App\Models\User;
use App\Models\Employee;
use App\Mail\FPKCrewEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class ApprovalController extends Controller
{
    public function index() {
        $id = Auth::id();
        // return $id;

        $approval = FPKRequest::where('next_approval', $id)->get();
        // return $approval;

        // $type = Auth::user();
        // return $type;

        $direct_superior_check = Employee::where('id', $id)->first();
        // return $direct_superior_check->direct_superior;

        $email_dir_pengaju = User::where('id', $direct_superior_check->direct_superior)->first();
        // return $email_dir_pengaju->email;

        return view('approval.index', compact('approval'));
    }

    public function detail($id) {
        $fpk_req = FPKRequest::where('id', $id)->get();
        // return $fpk_req;

        return view('approval.detail', compact('fpk_req'));
    }

    public function approve(Request $request)
    {
        

        $type = Auth::user();
        // return $type;

        $join_nama_user = DB::table('employees')
                                ->select()
                                ->join('users', 'users.employee_id', '=', 'employees.id')
                                ->where('employee_id', $type->id)
                                ->get();
        
        foreach ($join_nama_user as $key) {
            $nama_user = $key->nama;
        }
        // return $join_nama_user;
        
        $nama_superior = $nama_user;
        // return $nama_superior;

        $employee_id = $type->employee_id; //<- untuk mengambil ID Employee
        // return $employee_id;

        $check_superior = Employee::where('id', $type->employee_id)->first(); //<- CEK PROFIL User Berdasarkan id user yang sedang login
        // return $check_superior;

        $id_user = Auth::id(); //<- untuk mengambil ID User
        // return $id_user;

        $employee_data = Employee::where('id',$type->id)->get();
        foreach ($employee_data as $key) {
            $direct_superior_check = $key->direct_superior; //<- direct_superior yang login
        }
        // return $direct_superior_check;

        $id_spv_check = FPKRequest::where('id', $request->id)->first();
        
        $id_spv = $id_spv_check->created_by;

        $nama_spv_check = Employee::where('id', $id_spv)->first();
        $nama_spv = $nama_spv_check->nama;


        $app_req_email = User::where('id', 1)->first(); //<- Cek Email SPV pengaju
        // return $app_req_email->email;

        $next_superior = User::where('employee_id', $direct_superior_check)->first(); //<-Profil User berdasarkan direct_superior akun approval
        // return $next_superior->email;

        $id_req = FPKRequest::where('id', $request->id)->first(); //<- CEK ID Sesuai dengan Halaman Approval Yang Dibuka
        // return $id_req;

        $ishc = $id_req->ishc;

        $last_direct = $id_req->last_direct; //<- Mengambil data Last Direct
        // return $last_direct;

        //CEK EMAIL Superior Berdasarkan Employee ID superior yang sedang login
        $superior_data = User::where('employee_id', $direct_superior_check)->first();
        // return $superior_data->email;

        $email_pengaju_check = DB::table('fpk_requests')
                                            ->select('users.email', 'fpk_requests.created_by', 'fpk_requests.id')
                                            ->join('users', 'users.employee_id', '=', 'fpk_requests.created_by')
                                            ->where('fpk_requests.id', $request->id)
                                            ->get();
                    foreach ($email_pengaju_check as $key) {
                        $email_pertama = $key->email;
                        
                    }
                



        if ($ishc == 0) //Kondisi ishc == 0
        {
            if($direct_superior_check == null) //Kondisi ishc == 0 && direct_superior == null
            {
                if($request->status == 'Approve') //Kondisi ishc == 0 && direct_superior == null && status == approve 
                {
                    
                    
                    $full_approve = FPKRequest::where('id', $request->id)
                    ->update([
                        'ishc'          =>  1,
                        'next_approval' =>  2,    //<-- Id konstan manajer hcm
                        
                    ]);

                    $approve = \DB::table('fpk_requests_approvals')
                    ->insert([
                        'fpk_req_id'    =>  $request->id,
                        'employee_id'   =>  $id_user,
                        'status'        =>  $request->status,
                        'note'          =>  $request->note
                    ]);
                    
                    $email_man_hcm = User::where('id', 2)->first(); //_____
                    $id_fpk_request = $id_req->id;                    
                    $nama = $nama_spv;                            
                    $nama_superior = $nama_user;                      
                    $status = null;                       
                    $email_pengaju = $email_pertama;           
                    $email_superior = $email_man_hcm->email;

                    // Mail::send(new FPKCrewEmail($id_fpk_request, $nama, $nama_superior, $status, $email_pengaju, $email_superior));
                    toastr()->success('Berhasil Submit Approval');
                    return redirect('/');

                } else { //Kondisi ishc == 0 && direct_superior == null && status == reject 

                    
                    $full_approve = FPKRequest::where('id', $request->id)
                    ->update([
                        'full_approve'  =>  0,
                        'status'        => 'Reject',
                        'ishc'          =>  null,
                        'next_approval' =>  null,
                        
                    ]);

                    $reject = \DB::table('fpk_requests_approvals')
                    ->insert([
                        'fpk_req_id'    =>  $request->id,
                        'employee_id'   =>  $id_user,
                        'status'        =>  $request->status,
                        'note'          =>  $request->note
                    ]);

                    

                    $id_fpk_request = $id_req->id;                    
                    $nama = $nama_spv;                            
                    $nama_superior = $nama_user;                      
                    $status = $request->status;                       
                    $email_pengaju = $email_pertama;           
                    $email_superior = null;

                    // Mail::send(new FPKCrewEmail($id_fpk_request, $nama, $nama_superior, $status, $email_pengaju, $email_superior));
                    toastr()->success('Berhasil Submit Approval');
                    return redirect('/');
                }
            } else { //Kondisi ishc == 0 && direct_superior != null
                
                if ($request->status == 'Reject')  //Kondisi ishc == 0 && direct_superior != null && status == Reject
                {   
                    

                    
                    $full_approve = FPKRequest::where('id', $request->id)
                    ->update([
                        'full_approve'  =>  0,
                        'status'        => 'Reject',
                        'ishc'          =>  null,
                        'next_approval' =>  null,
                        
                    ]);

                    $reject = \DB::table('fpk_requests_approvals')
                    ->insert([
                        'fpk_req_id'    =>  $request->id,
                        'employee_id'   =>  $id_user,
                        'status'        =>  $request->status,
                        'note'          =>  $request->note
                    ]);

                    

                    $id_fpk_request = $id_req->id;                    
                    $nama = $nama_spv;                            
                    $nama_superior = $nama_user;                      
                    $status = $request->status;                       
                    $email_pengaju = $email_pertama;           
                    $email_superior = null;

                    // Mail::send(new FPKCrewEmail($id_fpk_request, $nama, $nama_superior, $status, $email_pengaju, $email_superior));
                    toastr()->success('Berhasil Submit Approval');
                    return redirect('/');
                } else { //Kondisi ishc == 0 && direct_superior != null && Status == Approve
                    
                    $full_approve = FPKRequest::where('id', $request->id)
                    ->update([
                        'next_approval' =>  $direct_superior_check,
                        
                    ]);

                    $approve = \DB::table('fpk_requests_approvals')
                    ->insert([
                        'fpk_req_id'    =>  $request->id,
                        'employee_id'   =>  $id_user,
                        'status'        =>  $request->status,
                        'note'          =>  $request->note
                    ]);
                    
                    
                    $id_fpk_request = $id_req->id;                    
                    $nama = $nama_spv;                            
                    $nama_superior = $nama_user;                      
                    $status = null;                       
                    $email_pengaju = null;           
                    $email_superior = $superior_data->email;

                    // Mail::send(new FPKCrewEmail($id_fpk_request, $nama, $nama_superior, $status, $email_pengaju, $email_superior));
                    toastr()->success('Berhasil Submit Approval');
                    return redirect('/');
                }
            }
        } else { // Kondisi jika ishc == 1
            if($direct_superior_check == null){ //Kondisi jika ishc == 1 && direct_superior == null
                if($request->status == 'Approve') { //Kondisi jika ishc == 1 && direct_superior == null && status == Approve
                    

                    $full_approve = FPKRequest::where('id', $request->id)
                    ->update([
                        'full_approve'  =>  1,
                        'status'        =>  'Approve',
                        'ishc'          =>  NULL,
                        'next_approval' =>  NULL,
                        
                    ]);

                    $approve = \DB::table('fpk_requests_approvals')
                    ->insert([
                        'fpk_req_id'    =>  $request->id,
                        'employee_id'   =>  $id_user,
                        'status'        =>  $request->status,
                        'note'          =>  $request->note
                    ]);
                    
                    

                    $id_fpk_request = $id_req->id;
                    $nama = $nama_spv;
                    $nama_superior = $nama_user;
                    $status = $request->status;
                    $email_pengaju = $email_pertama;
                    $email_superior = NULL;

                    // Mail::send(new FPKCrewEmail($id_fpk_request, $nama, $nama_superior, $status, $email_pengaju, $email_superior));
                    toastr()->success('Berhasil Submit Approval');
                    return redirect('/');
                } else { //Kondisi jika ishc == 1 && direct_superior == null && status == Reject
                    $full_approve = FPKRequest::where('id', $request->id)
                    ->update([
                        'full_approve'  =>  0,
                        'status'        => 'Reject',
                        'ishc'          =>  null,
                        'next_approval' =>  null,
                        
                    ]);

                    $reject = \DB::table('fpk_requests_approvals')
                    ->insert([
                        'fpk_req_id'    =>  $request->id,
                        'employee_id'   =>  $id_user,
                        'status'        =>  $request->status,
                        'note'          =>  $request->note
                    ]);

                    

                    $id_fpk_request = $id_req->id;                    
                    $nama = $nama_spv;                            
                    $nama_superior = $nama_user;                      
                    $status = $request->status;                       
                    $email_pengaju = $email_pertama;           
                    $email_superior = null;

                    // Mail::send(new FPKCrewEmail($id_fpk_request, $nama, $nama_superior, $status, $email_pengaju, $email_superior));
                    toastr()->success('Berhasil Submit Approval');
                    return redirect('/');
                }
            } else { //Kondisi jika ishc == 1 && direct_superior != null
                if ($request->status == 'Approve') { //Kondisi jika ishc == 1 && direct_superior != null && status == Approve
                    $full_approve = FPKRequest::where('id', $request->id)
                    ->update([
                        'next_approval' =>  $direct_superior_check,
                        
                    ]);

                    $approve = \DB::table('fpk_requests_approvals')
                    ->insert([
                        'fpk_req_id'    =>  $request->id,
                        'employee_id'   =>  $id_user,
                        'status'        =>  $request->status,
                        'note'          =>  $request->note
                    ]);

                    $id_fpk_request = $id_req->id;
                    $nama = $nama_spv;
                    $nama_superior = $type->name;
                    $status = null;
                    $email_pengaju = null;
                    $email_superior = $superior_data->email;

                    // Mail::send(new FPKCrewEmail($id_fpk_request, $nama, $nama_superior, $status, $email_pengaju, $email_superior));
                    toastr()->success('Berhasil Submit Approval');
                    return redirect('/');
                } else { //Kondisi jika ishc == 1 && direct_superior != null && status == Reject
                    
                    $full_approve = FPKRequest::where('id', $request->id)
                    ->update([
                        'full_approve'  =>  0,
                        'status'        => 'Reject',
                        'ishc'          =>  null,
                        'next_approval' =>  null,
                        
                    ]);

                    $reject = \DB::table('fpk_requests_approvals')
                    ->insert([
                        'fpk_req_id'    =>  $request->id,
                        'employee_id'   =>  $id_user,
                        'status'        =>  $request->status,
                        'note'          =>  $request->note
                    ]);

                    

                    $id_fpk_request = $id_req->id;                    
                    $nama = $nama_spv;                            
                    $nama_superior = $nama_user;                      
                    $status = $request->status;                       
                    $email_pengaju = $email_pertama;           
                    $email_superior = null;

                    // Mail::send(new FPKCrewEmail($id_fpk_request, $nama, $nama_superior, $status, $email_pengaju, $email_superior));
                    toastr()->success('Berhasil Submit Approval');
                    return redirect('/');
                }
                
            }
        }
        
        
        
        
        
        
        
        //Konsep Approval Selang seling
        // if($direct_superior_check == NULL) { // Kondisi jika direct_superior == NULL
        //     if($check_superior->id == 125) { // kondisi jika direct_superior == NULL & employee_id user == 5
        //         if($request->status == 'Approve') { //kondisi jika direct_superior == null, employee_id user == 5 & pemilihan status approve
        //             $full_approve = FPKRequest::where('id', $request->id)
        //             ->update([
        //                 'full_approve'  =>  1,
        //                 'status'        =>  'Approve',
        //                 'last_direct'   =>  NULL,
        //                 'next_approval' =>  NULL,
        //                 'note'          =>  $request->note
        //             ]);

        //             $approve = \DB::table('fpk_requests_approvals')
        //             ->insert([
        //                 'fpk_req_id'    =>  $request->id,
        //                 'employee_id'   =>  $id_user,
        //                 'status'        =>  $request->status,
        //                 'note'          =>  $request->note
        //             ]);

        //             $id_fpk_request = $id_req->id;
        //             $nama = $id_req->nama;
        //             $nama_superior = $type->name;
        //             $status = $request->status;
        //             $email_pengaju = $app_req_email->email;
        //             $email_superior = NULL;

        //             Mail::send(new FPKCrewEmail($id_fpk_request, $nama, $nama_superior, $status, $email_pengaju, $email_superior));
        //             toastr()->success('Berhasil Submit Approval');
        //             return redirect('/');
        //         } else { //kondisi jika direct_superior == null, employee_id user == 5 & pemilihan status reject
        //             $full_approve = FPKRequest::where('id', $request->id)
        //             ->update([
        //                 'full_approve'  =>  0,
        //                 'status'        => 'Reject',
        //                 'last_direct'   =>  null,
        //                 'next_approval' =>  null,
        //                 'note'          =>  $request->note
        //             ]);

        //             $reject = \DB::table('fpk_requests_approvals')
        //             ->insert([
        //                 'fpk_req_id'    =>  $request->id,
        //                 'employee_id'   =>  $id_user,
        //                 'status'        =>  $request->status,
        //                 'note'          =>  $request->note
        //             ]);

        //             $id_fpk_request = $id_req->id;
        //             $nama = $id_req->nama;
        //             $nama_superior = $type->name;
        //             $status = $request->status;
        //             $email_pengaju = $app_req_email->email;
        //             $email_superior = null;

        //             Mail::send(new FPKCrewEmail($id_fpk_request, $nama, $status, $nama_superior, $email_pengaju, $email_superior));
        //             toastr()->success('Berhasil Submit Approval');
        //             return redirect('/');
        //         }
        //     } else { // kondisi jika direct_superior = null & employee_id user != 5
        //         if ($request->status == 'Reject') { // kondisi jika direct_superior = null & employee_id user != 5 & pemilihan status == Reject
                    
                    
        //             $full_approve = FPKRequest::where('id', $request->id)
        //             ->update([
        //                 'status'        =>  'Reject',
        //                 'full_approve'  =>  0,
        //                 'next_approval' =>  null,
        //                 'note'          =>  $request->note
        //             ]);

        //             $reject = \DB::table('fpk_requests_approvals')
        //             ->insert([
        //                 'fpk_req_id'    =>  $request->id,
        //                 'employee_id'   =>  $id_user,
        //                 'status'        =>  $request->status,
        //                 'note'          =>  $request->note
        //             ]);

        //             $id_fpk_request = $id_req->id;
        //             $nama = $id_req->nama;
        //             $nama_superior = $type->name;
        //             $status = $request->status;
        //             $email_pengaju = $app_req_email->email;
        //             $email_superior = NULL;

        //             Mail::send(new FPKCrewEmail($id_fpk_request, $nama, $status, $nama_superior, $email_pengaju, $email_superior));
        //             toastr()->success('Berhasil Submit Approval');
        //             return redirect('/');
        //         } else { // Kondisi jika direct_superior = null & employee_id user != 5 & pemilihan status == approve
        //             $approve = FPKRequest::where('id', $request->id)
        //             ->update([
        //                 'full_approve'  =>  null,
        //                 'next_approval' =>  125,
        //                 'note'          =>  $request->note
        //             ]);

        //             $checking = \DB::table('fpk_requests_approvals')->where('id', $request->id)
        //             ->insert([
        //                 'fpk_req_id'    =>  $request->id,
        //                 'employee_id'   =>  $id_user,
        //                 'status'        =>  $request->status,
        //                 'note'          =>  $request->note
        //             ]);

        //             $email_dir_hcm = User::where('id', 5)->first();
        //             $email_pengaju = $app_req_email->email;
        //             $email_superior = $email_dir_hcm->email;
        //             $id_fpk_request = $id_req->id;
        //             $nama = $id_req->nama;
        //             $nama_superior = $type->name;
        //             $status = $request->status;

        //             Mail::send(new FPKCrewEmail($id_fpk_request, $nama, $status, $nama_superior, $email_pengaju, $email_superior));
        //             toastr()->success('Berhasil Submit Approval');
        //             return redirect('/');
        //         }
        //     }
        // } else { // kondisi jika direct_superior != null
        //     if ($request->status == 'Reject') { // kondisi jika direct_superior != null & Status == Reject
        //         $full_approve = FPKRequest::where('id', $request->id)
        //         ->update([
        //             'status'        =>  'Reject',
        //             'full_approve'  =>  0,
        //             'next_approval' =>  null,
        //             'note'          =>  $request->note
        //         ]);

        //         $reject = \DB::table('fpk_requests_approvals')
        //         ->insert([
        //             'fpk_req_id'    =>  $request->id,
        //             'employee_id'   =>  $id_user,
        //             'status'        =>  $request->status,
        //             'note'          =>  $request->note
        //         ]);

        //         $id_fpk_request = $id_req->id;
        //         $nama = $id_req->nama;
        //         $nama_superior = $type->name;
        //         $status = $request->status;
        //         $email_pengaju = $app_req_email->email;
        //         $email_superior = $superior_data->email;


        //         Mail::send(new FPKCrewEmail($id_fpk_request, $nama, $status, $nama_superior, $email_pengaju, $email_superior));
        //         toastr()->success('Berhasil Submit Approval');
        //         return redirect('/');
        //     } else { // kondisi jika direct_superior != null & Status == approve
        //         $checking = \DB::table('fpk_requests_approvals')->where('id', $request->id)
        //         ->insert([
        //             'fpk_req_id'    =>  $request->id,
        //             'employee_id'   =>  $id_user,
        //             'status'        =>  $request->status,
        //             'note'          =>  $request->note
        //         ]);

        //         if ($direct_superior_check == 125) { // Cek Jika Direct Superior == 5, maka Next Approvalnya = Manajer Pengaju
        //             $cek_id_superior_pengaju = FPKRequest::where('id', $request->id)->first();
        //             $email_superior_pengaju = User::where('employee_id', $cek_id_superior_pengaju->last_direct)->first();
        //             $id_fpk_request = $id_req->id;
        //             $nama = $id_req->nama;
        //             $status = $request->status;
        //             $email_pengaju = $app_req_email->email;
        //             $email_superior = $email_superior_pengaju->email;
                    
        //             DB::table('fpk_requests')->where('id', $request->id)
        //             ->update([
        //                 'next_approval' =>  $last_direct,
        //                 'last_direct'   =>  $direct_superior_check
        //             ]);

        //             Mail::send(new FPKCrewEmail($id_fpk_request, $nama, $status, $nama_superior, $email_pengaju, $email_superior));
        //             toastr()->success('Berhasil Submit Approval');
        //             return redirect('/');
        //         } else { //Jika Direct Superior != 5, maka next_approval = 4

        //             // $email_man_hcm = User::where('id', 124)->first(); //_____
        //             // return $id_fpk_request = $id_req->id;                    |  
        //             // return $nama = $id_req->nama;                            |
        //             // return $nama_superior = $nama_user;                      |______ Untuk Cek apa aja yang dikirim
        //             // return $status = $request->status;                       |       Sebelum mengirim email
        //             // return $email_pengaju = $app_req_email->email;           |
        //             // return $email_superior = $email_man_hcm->email;     _____
                    
        //             DB::table('fpk_requests')->where('id', $request->id)
        //             ->update([
        //                 'last_direct'   => $check_superior->direct_superior,
        //                 'next_approval' => "124"
        //             ]);

        //             $email_man_hcm = User::where('id', 124)->first();
        //             $id_fpk_request = $id_req->id;
        //             $nama = $id_req->nama;
        //             $nama_superior = $type->name;
        //             $status = $request->status;
        //             $email_pengaju = $app_req_email->email;
        //             $email_superior = $email_man_hcm->email;

        //             Mail::send(new FPKCrewEmail($id_fpk_request, $nama, $status, $nama_superior, $email_pengaju, $email_superior));

        //             toastr()->success('Berhasi Submit Approval');
        //             return redirect('/');
        //         }

        //         $data_employee = \DB::table('fpk_requests')->where('id', $request->id)->get();
        //         toastr()->success('Data Berhasil Disubmit');
        //         return redirect('/');
        //     }
        // }
    }
}
