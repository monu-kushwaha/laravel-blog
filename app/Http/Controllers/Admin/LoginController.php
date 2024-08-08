<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return render_admin('login');
    }

    public function signup(){
        return render_admin('signup');
    }


    public function setupSignup(Request $req){
        $req->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ], [
            'confirm_password.same' => 'The confirmation password does not match.',
        ]);

        $existingAdmin = DB::table('tbl_admin')->where('admin_email', $req->email)->first();
        if ($existingAdmin) {
            return redirect()->route('signup')->with('message', 'The email address is already in use. Please use a different email.');
        }

        $admin = DB::Table('tbl_admin')->insert(
            [
                'admin_name' => $req->name,
                'admin_email' => $req->email,
                'admin_password' => bcrypt($req->password),
                'admin_created_at' => date('Y-m-d H:i:s'),
                'admin_updated_at' => date('Y-m-d H:i:s')
            ]
        );
        if($admin == true){
            return redirect()->route('signup')->with('message', 'signup Successfully');
        }
        return redirect()->route('signup')->with('message', 'Admin Not Sign please Try Agian');

    }

    public function setuplogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = [
            'admin_email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin/dashboard');
        } else {
            return redirect()->route('login')->withErrors(['login_error' => 'Invalid credentials']);
        }
    }


    public function dashboad(){
        die('here');
        if (Auth::guard('admin')->check()) {
            return view('index');
        } else {
            return redirect()->route('login');
        }
    }


}