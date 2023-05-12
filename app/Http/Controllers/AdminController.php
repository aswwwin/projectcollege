<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;

use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
         return view('admin.index');
        
    }

function settings(){
    return view('admin.settings');
}
    

    /**
     * Show the form for creating a new resource.
     */
    
    public function userList()
    {
        $user=User::where('role','>',1)->get();
        return view('admin.userlist',["user"=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function postusercreation(Request $request)
    {
        $usedetails = new User;
        $var="TOK";
        $random = rand(10000, 99999);
        $token=$var.$random;
        $usedetails->token = $token;
        $usedetails->email = request("email");
        $usedetails->password = Hash::make($request->password);
        $usedetails->remember_token = 1;
        $usedetails->user_name = request("user_name");
        $usedetails->user_mobile = request("user_mobile");
        $usedetails->role = 2;
        $usedetails->email_verified = 1;
        $usedetails->status = 1;
        $usedetails->save();
        return redirect()->back()->with('message', 'User created successfully!');
    }

    public function creation()
    {
        return view('admin.usercreation');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function postdeptcreation(Request $request)
    {
        $dept_details = new Department;
        $dept_details->dept_name = request("dept_name");
        $dept_details->save();
        return redirect()->back()->with('message', 'Department created successfully!');
    }

    public function departmentcreation()
    {
        return view('admin.dept-creation');
    }
    public function deptList()
    {
        $dept=Department::get();
        return view('admin.deptlist',["dept"=>$dept]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $ids = $request->ids;

        User::whereIn('id',$ids)->delete();
          
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }
    public function approve(Request $request)
    {
        $ids = $request->ids;

        User::whereIn('id',$ids)->approve();
          
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }
    public function decline(Request $request)
    {
        $ids = $request->ids;

        User::whereIn('id',$ids)->decline();
          
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }
}
