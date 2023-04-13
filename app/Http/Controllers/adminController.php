<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\about;
use App\Models\contact;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\fast_sec_add;
use App\Models\workphoto;


class adminController extends Controller
{
   public function logout (){
    Auth::logout();
    return redirect('login');
   }

//    public function usrd(){
//     return view('frontend.user-dashbord');
//    }

   public function dashbord (){
    if(auth::check()){
    if (Auth::user()->role == 1) {
        return view('backend.dashbord');

    }

    elseif (Auth::user()->role == 0){
    return view('frontend.user-dashbord');

    }

}
else {
    return redirect('login');
}
   }
    public function me(){
        $data=fast_sec_add::latest()->take(1)->get();
        $data1=about::latest()->take(1)->get();
        $data2=workphoto::take(6)->get();
        return view('frontend.me', compact(['data','data1','data2']));
    }
    public function home (){
        return view('backend.home');
    }
    public function show(){
        // $usr = DB::select('select * from users');
          $usr= user::get();
        return view('backend.showusr',['usr'=>$usr]);
    }

    public function edit($id){
        $user= user::find($id);

        return view('backend.editusr',['user'=>$user]);

    }
    public function update( Request $request, $id )
    {

        $user=user::find($id);

        $user->email=$request->input('email');
        $user->role=$request->input('role');

        $user->save();
        return redirect('show')->with('success','data update');
    }
        public function fast(){
            return view('backend.fast_sec_add');
        }

        public function fast_store(Request $request){

        $data= new fast_sec_add();
        $data->name=$request->input('name');
        $data->detail=$request->input('detail');


        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        // ]);



            $fileName = time().'_'.$request->file('image')->getClientOriginalName();
            // $fileext = $fileName.'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('public/uploads', $fileName);
        $data->image= $fileName;
        $data->save();
        return redirect('fast')->with('success','data update');

        }


        public function about(){
            return view('backend.second_sec_add');
        }
public function abouts(Request $request){
    $data = new about();
    $data->title=$request->input('title');
    $data->detail=$request->input('detail');
    $data->save();
    return redirect('about')->with('success', 'Data update');
}

public function workphoto(){

return view('backend.workphoto');

}

public function store_workphoto( Request $request){


    $data2= new workphoto();
    $data2->name=$request->input('name');
    $data2->detail=$request->input('detail');



    $fileName = time().'_'.$request->file('image')->getClientOriginalName();

    $request->file('image')->storeAs('public/uploads', $fileName);
    $data2->image= $fileName;
    $data2->save();
    return redirect('projectpic')->with('success','Data update');

}


public function contact(Request $request){
    $data2= new contact();
    $data2->name=$request->input('name');
    $data2->email=$request->input('email');
    $data2->subject=$request->input('subject');
    $data2->massage=$request->input('massage');
    $data2->save();
    return redirect('/me');
}
 public function contact_show(){

    $data=contact::take(10)->get();
    return view('backend.contact',compact(['data']));
 }

}
