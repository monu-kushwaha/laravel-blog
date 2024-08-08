<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if (Auth::guard('admin')->check()) {
            return render_admin('index');
        } else {
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin');
    }
}