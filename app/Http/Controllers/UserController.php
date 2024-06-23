<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function show(){
        // $user = DB::table('users')->select('id','name','email', 'age', 'city')->get();
        // $user = DB::table('users')->orderBy('name')->simplePaginate(6);
        // $user = DB::table('users')->orderBy('name')->paginate(2, ['name', 'city']);
        // $user = DB::table('users')->orderBy('name')->paginate(2, ['*'], 'p',3); //3 = page number 
        // $user = DB::table('users')->orderBy('name')->paginate(4)->appends(['sort' => 'kannauj','test'=>'abc']);  
        // $user = DB::table('users')->orderBy('name')->paginate(4)->fragment('users');  // Add value in url with #
        // $user = DB::table('users')->orderBy('name')->cursorPaginate(4); 

        // $user = DB::table('users')
        // ->join('city', 'city.city_id','=' ,'users.city')
        // ->select('users.*','city.city_name')
        // // ->select(DB::raw('count(*) as test'))
        // // ->where('users.id', '=', 6)
        // // ->where('city.city_name', '=', 'kannauj')
        // // ->count();
        // // ->groupBy('city.city_name')
        // ->get(); //inner Join
        // // return $user;
        // // dd($user);

        $user = DB::table('users')
        ->Leftjoin('city', 'city.city_id','=' ,'users.city')
        ->select('users.*','city.city_name')
        ->get();


        // $user = DB::table('users')
        //         ->Leftjoin('city', function(JoinClause $join){
        //             $join->on('users.city','=' ,'city.id');
        //         })
        //         ->get();


        
        // $user = DB::table('city')
        //     ->select(DB::raw("name COLLATE utf8mb4_unicode_ci as name"));

        // $union = DB::table('users')
        //             ->select(DB::raw("name COLLATE utf8mb4_unicode_ci as name"))
        //             ->union($user)
        //             ->get();


        // $user = DB::table('users')
        //             ->where(true, function($query){
        //                 $query->where('age', '>', 20);
        //             })
        //             ->get();


        // $user = DB::table('users')
        //             ->orderBy('id')
                    // ->chunk(1, function($user){
                    //     echo "<div style='border:red solid;'>";
                    //     foreach($user as $data){
                    //         preArray($data).'<br>';
                    //     }
                    //     echo "</div>";
                    // });

                    // Update karanme ke lye
                    // ->chunkById(1, function($user){
                    //     foreach($user as $data){
                            
                    //         DB::table('users')
                    //         ->where('id', $data->id)
                    //         ->update(['name' => 'Updateed Name']);
                    //     }
                    // });
                    // ->get();

        // preArray($user);die;
        return view('user', ['date' => $user]);
    }
    
    
    public function singleUser(string $id){
        $user = DB::table('users')->select('id','name','email')->where('id', $id)->get();
        return view('singleUser', ['data' => $user]);

    }

    public function insertUser(Request $req){
        $req->validate(
            [
                'name' =>  'required',
                'email' =>  'required |email',
                // 'age' =>  'required|numeric|min:10',
                'age' =>  'required|numeric|between:10,20',
                'pass' =>  'required|alpha_num|min:5',
                'city' =>  'required',
            ],
            [
                'name.required' => 'Name Hona Hi chahiye'
            ]
        );
        return $req->all();

         $user = DB::table('users')->insert(
             [
                'name'=> $req->name,
                'email'=> $req->email,
                'age'=> $req->age,
                'city'=> $req->city,
                'created_at'=> now(),
                'updated_at'=> now(),
            ]
            );
        if($user == true){
            // return view('addUser', ['msg' => 'Add successfully']);
            return redirect()->route('show');
        }
        return "Not Add";
    }

    public function addUser(){
        return view('addUser');
        // $user = DB::table('users')->select('id','name','email')->where('id', $id)->get();
        // $user = DB::table('users')->insert(
        //     [
        //         'name'=> 'msanjay Kushwaha',
        //         'email'=> 'sanjey12@gmail.com',
        //         'age'=> '22',
        //         'city'=> 'delhi',
        //         'created_at'=> now(),
        //         'updated_at'=> now(),
        //     ]
        //     );
        // $user = DB::table('users')->insertOrIgnore(
        //     [
        //         'name'=> 'msanjay Kushwaha',
        //         'email'=> 'sanjey1d2@gmail.com',
        //         'age'=> '22',
        //         'city'=> 'delhi',
        //         'created_at'=> now(),
        //         'updated_at'=> now(),
        //     ]
        //     );

        // $user = DB::table('users')->upsert(
        //     [
        //         'name'=> 'msanjay Kushwaha',
        //         'email'=> 'sanjey1d2@gmail.com',
        //         'age'=> '112',
        //         'city'=> 'delhi',
        //         'created_at'=> now(),
        //         'updated_at'=> now(),
        //     ],
        //     ['email'] //unique column
        //     );

        $user = DB::table('users')->insertGetId(
            [
                'name'=> 'msanjay Kushwaha test',
                'email'=> 'sanjey1ssd212@gmail.com',
                'age'=> '112',
                'city'=> 'delhi',
                'created_at'=> now(),
                'updated_at'=> now(),
            ]
            );
        if($user == true){
            return redirect()->route('show');
        }else{
            echo "data Not Added";
        }
        // return view('user', ['data' => $user]);

    }


    public function updateUser(){
        // $user = DB::table('users')->where('id', 1)->update(
        //     [
        //         'name'=> 'msanjay Kushwaha',
        //         'email'=> 'sanjey12213as@gmail.com',
        //         'age'=> '22',
        //         'city'=> 'delhi',
        //         'created_at'=> now(),
        //         'updated_at'=> now(),
        //     ]
        //     );
        // $user = DB::table('users')->updateOrInsert(
        //     [
        //     'email' => 'sanjey12213asasa@gmail.com',
        //     ],
        //     [
        //         'name'=> 'msanjay Kushwaha',
        //         'email'=> 'sanjey12213aass@gmail.com',
        //         'age'=> '232',
        //         'city'=> 'delhi',
        //         'created_at'=> now(),
        //         'updated_at'=> now(),
        //     ]
        //     );
        // $user = DB::table('users')->where('id', 1)->increment('age',2);
        // $user = DB::table('users')->where('id', 1)->decrement('age',2);
        // return $user;
        // return view('user',compact('id'));


    }

    public function deleteUser(string $id){
        $user = DB::table('users')->where('id', $id)->delete();
        // $user = DB::table('users')->truncate();
        // $user = DB::table('users')->delete(); //delete All
        if($user == true){
            return redirect()->route('show');
        }else{
            return "<h1>Something went wrong</h1>";
        } 
    }


    // public function showBlock(string $id){
    //     return view('showBlock',compact('id'));
    // }
    
    public function updateUsers(string $id){
        // $user = DB::table('users')->where('id', $id)->get();
        $user = DB::table('users')->find($id);
        return view('updateUser', ['user' => $user]);
    }
    public function update(Request $data, $id){
        $user = DB::table('users')->where('id',$id)->update(
            [
                'name' => $data->name,
                'email' => $data->email,
                'age' => $data->age,
                'city' => $data->city,
                'updated_at' => now(),
            ]
        );
        
        if($user == true){
            return redirect()->route('show');
        }
        echo "something Went wrong";
    }

}
