<?php
namespace App\Http\Controllers;
use DB;
use Session;
use Response;
use Uuid;
use Illuminate\Http\Request;

class shopController extends Controller
{
    public function shopbills($shopid){
      $userlogin = Session::get('Correctlogin');
      if(isset($userlogin) && !empty($userlogin)){
        $allbills = DB::table('bill_info')->where('shop_id',$shopid)->get();
        Session::flash('getbills',$allbills);
        return Response::view('shoplist');
      }
      else {
        return redirec('/');
      }
    }

    public function addshops(){
      $userlogin = Session::get('Correctlogin');
      if(isset($userlogin) && !empty($userlogin)){
        $user = DB::table('userLogin')->where('userName',$userlogin)->first();
        $allshops = DB::table('shop_info')->where('user_id',$user->id)->get();
        Session::flash('allshops',$allshops);
        return Response::view('addshops');
      }
      else {
        return redirec('/');
      }
    }
    public function listshops(){
      $userlogin = Session::get('Correctlogin');
      if(isset($userlogin) && !empty($userlogin)){
        $user = DB::table('userLogin')->where('userName',$userlogin)->first();
        $getowners = DB::table('shop_info')->where('user_id',$user->id)->get();
        Session::flash('owners',$getowners);
        return Response::view('listshops');
      }
      else {
        return redirec('/');
      }
    }

    public function ownerin(Request $request){
      $userlogin = Session::get('Correctlogin');
      if(isset($userlogin) && !empty($userlogin)){
        $getId = DB::table('userLogin')->where('userName',$userlogin)->first();
      }
      $shopname = $request->input('shopname');
      $id = Uuid::generate();
      $ownername = $request->input('ownername');
      $add1 = $request->input('shopadd1');
      $add2 = $request->input('shopadd2');
      $city = $request->input('shopcity');
      $country = $request->input('shopcountry');
      $mob = $request->input('shopmob');
      $email = $request->input('shopemail');
      $gst = $request->input('shopgst');
      $state = $request->input('shopstate');
      $placeofsup = $request->input('placeofsup');
      $pin = $request->input('shoppin');


      $ownerinfo = array(
          'id' =>$id,
          'user_id' => $getId->id,
          'shopName' => $shopname,
          'ownerName' => $ownername,
          'add1' => $add1,
          'add2' =>$add2,
          'city'=>$city,
          'country'=>  $country,
          'mob'=>$mob,
          'email'=>$email,
          'gst'=>$gst,
          'place_of_sup'=>$placeofsup,
          'state'=>$state,
          'pin'=>$pin,
      );
        $newShop = DB::table('shop_info')->insert($ownerinfo);
        return redirect('/addshops');
    }

    public function deleteshop($deleteid){
      DB::table('shop_info')->where('id',$deleteid)->delete();
      $get_bills = DB::table('bill_info')->where('shop_id',$deleteid)->get();
      foreach($get_bills as $getbill){
          $deleteitems = DB::table('item_info')->where('bill_id',$getbill->bill_id)->delete();
      }
      DB::table('bill_info')->where('shop_id',$deleteid)->delete();
      return redirect('/addshops');
    }

    public function editshop($shopid){
      $userlogin = Session::get('Correctlogin');
      if(isset($userlogin) && !empty($userlogin)){
        $getId = DB::table('userLogin')->where('userName',$userlogin)->first();
      }
      $getshopdetail = DB::table('shop_info')->where('user_id',$getId->id)->where('id',$shopid)->first();
      Session::flash('ownerdetail',$getshopdetail);
      return Response::view('editshop');
    }

    public function editowner(Request $request){
      $id = $request->input('ownerid');
      $shopname = $request->input('shopName');
      $add1 = $request->input('add1');
      $add2 = $request->input('add2');
      $city = $request->input('city');
      $country = $request->input('country');
      $ownername = $request->input('ownername');
      $mob = $request->input('mob');
      $email = $request->input('email');
      $gst = $request->input('gst');
      $placeofsup = $request->input('placeofsup');
      $state = $request->input('state');
      $pin = $request->input('pin');

      $ownerinfo = array(
          'id' =>$id,
          'shopName' => $shopname,
          'ownername'=>$ownername,
          'add1' => $add1,
          'add2' =>$add2,
          'city'=>$city,
          'country'=>  $country,
          'mob'=>$mob,
          'email'=>$email,
          'gst'=>$gst,
          'place_of_sup'=>$placeofsup,
          'state'=>$state,
          'pin'=>$pin,
      );

      $userlogin = Session::get('Correctlogin');
      if(isset($userlogin) && !empty($userlogin)){
        $newShop = DB::table('shop_info')->where('id',$id)->update($ownerinfo);
      }
      return redirect('/addshops');
    }
}
