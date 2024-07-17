<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageMail;

class HomeController extends Controller
{
    // public function index(){
    //     die('here');
    //     return view('home');
    // }

    public function index(){
        return render_view('index');
    }

    public function about(){
        return render_view('about');
    }

    public function contact(){
        return render_view('contact');
    }

    public function project(){
        return render_view('project');
    }

    public function service(){
        return render_view('service');
    }

    public function blog(){
        return render_view('blog');
    }

    public function submitForm(Request $req){
        $req->validate(
            [
                'name' =>  ['required'],
                'email' =>  'required |email',
                'reason' =>  'required|min:5',
                'message' =>  'required|min:5',
            ]
        );
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
            'reason' => $req->reason,
            'message' => $req->message,
            'added_at' => now(),
        ];
        $user = DB::table('tbl_contact')->insert($data);
        try {
            Mail::to('nkmk3841210@gmail.com')->send(new ContactMessageMail($data));
            return redirect()->route('contact-us')->with('message', 'Your request submitted successfully. I will respond as soon as possible.');
        } catch (Exception $e) {
            return redirect()->route('contact-us')->with('message', 'Request failed due to a technical issue.');
        }
    }
}
