<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use App\Models\Admin;

class LoginController extends Controller
{
    public function login(Request $request){
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin/dashboard');
        }
        $cookie = $request->cookie('admin_login');
        $data = json_decode($cookie);
        return render_admin('login', ['email' => $data->email ?? '', 'password' => $data->password ?? '']);
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
                'password' => 'required',
            ]);
            $admin = Admin::where('admin_email', $request->email)->first();
            if ($admin && Hash::check($request->password, $admin->admin_password)) {
                if (Hash::needsRehash($admin->admin_password)) {
                    $admin->admin_password = Hash::make($request->password);
                    $admin->save();
                }
                Auth::guard('admin')->login($admin);

                if($request->checked){
                    $cookieName = 'admin_login';
                    $minutes = 60 * 24 * 7;
                    Cookie::queue($cookieName, json_encode(['email' => $admin->admin_email, 'password' => $request->password]), $minutes);
                }
                return redirect()->route('admin/dashboard');
            } else {
                return redirect()->route('login')->withErrors([
                    'login_error' => 'Invalid email or password.',
                ])->withInput();
            }
        }



}