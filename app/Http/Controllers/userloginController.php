<?php
namespace App\Http\Controllers;
use DB;
use Session;
use Response;
use Illuminate\Http\Request;

class userloginController extends Controller
{
  public function login(Request $request){
      $username = $request->input('username');
      $password = $request->input('password');
      $users = DB::table('userLogin')->where('userName',$username)->first();
      if(count($users)>0){
          if($users->userName == $username && $users->passWord == $password){
            Session::put('Correctlogin',$users->userName);
            return redirect('/index');
          }
      }else {
        Session::flash('incorrectLog',1);
        return redirect('/');
      }
  }

  public function index(){
    $colog = Session::get('Correctlogin');
    if(isset($colog) && !empty($colog)){
        return Response::view('index');
    }
  }

  public function logout(){
    Session::flush();
    return redirect('/');
  }

}
