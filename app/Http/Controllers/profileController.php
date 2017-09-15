<?php

namespace App\Http\Controllers;
use Response;
use Session;
use DB;
use Uuid;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function profile(){
      $userlogin = Session::get('Correctlogin');
        if(isset($userlogin) && !empty($userlogin)){
          $getId = DB::table('userLogin')->where('userName',$userlogin)->first();
          $getShop = DB::table('branch_info')->where('user_id',$getId->id)->first();
          Session::flash('userDetails',$getShop);
      return Response::view('profile');
    }else {
      return redirect('/');
    }
    }

    public function shopin(Request $request){
        $shopname = $request->input('shopName');
        $add1 = $request->input('add1');
        $add2 = $request->input('add2');
        $city = $request->input('city');
        $country = $request->input('country');
        $mob = $request->input('mob');
        $email = $request->input('email');
        $gst = $request->input('gst');
        $pan = $request->input('pan');
        $state = $request->input('state');
        $pin = $request->input('pin');

        $branchinfo = array(
            'shopName' => $shopname,
            'add1' => $add1,
            'add2' =>$add2,
            'city'=>$city,
            'country'=>  $country,
            'mob'=>$mob,
            'email'=>$email,
            'gst'=>$gst,
            'pan' =>$pan,
            'state'=>$state,
            'pin'=>$pin,
        );
          $userlogin = Session::get('Correctlogin');
          if(isset($userlogin) && !empty($userlogin)){
            $getId = DB::table('userLogin')->where('userName',$userlogin)->first();
            $newShop = DB::table('branch_info')->where('user_id',$getId->id)->update($branchinfo);
          }
          return redirect('/profile');
    }
}
