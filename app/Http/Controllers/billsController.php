<?php

namespace App\Http\Controllers;
use Session;
use Response;
Use DB;
use Uuid;
use Redirect;
use DateTime;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class billsController extends Controller
{
  public function indexbills(){
    $userlogin = Session::get('Correctlogin');
    if(isset($userlogin) && !empty($userlogin)){
      $userDetail = DB::table('userLogin')->where('userName',$userlogin)->first();
      $branchDetail = DB::table('branch_info')->where('user_id',$userDetail->id)->get();
      $ownerdetails = DB::table('shop_info')->where('user_id',$userDetail->id)->get();
      Session::flash('userDetail',$userDetail);
      Session::flash('branchDetail',$branchDetail);
      Session::flash('ownerDetails',$ownerdetails);
      return Response::view('addbills');
    }
    else {
      return redirect('/');
    }

  }
  public function billprint($billid){
    $userlogin = Session::get('Correctlogin');
    if(isset($userlogin) && !empty($userlogin)){
      $sendbill = DB::table('bill_info')->where('bill_id',$billid)->get();
      Session::flash('sendbill',$sendbill);
      return Response::view('viewbill');
    }
    else {
      return redirec('/');
    }
  }

  public function billgenerate(Request $request){
    $itemcounter = $request->input('itemcounter');
    $invoice = $request->input('invoice');
    $billcreate = $request->input('billcreate');
    $branchinfo = $request->input('branchinfo');
    $ownerinfo = $request->input('ownerinfo');
    $sgst = $request->input('sgst');
    $cgst = $request->input('cgst');
    $supref = $request->input('supref');
    $oref = $request->input('oref');
    $date = $request->input('billdate');
    $bill_id = Uuid::generate();
    $userlogin = Session::get('Correctlogin');
    $total_bill_net=0;
    $total_bill_gross = 0;
    $timestamp = new DateTime();
    if(isset($userlogin) && !empty($userlogin)){
      $user = DB::table('userLogin')->where('userName',$userlogin)->first();
    }
    $bill_info = array(
        'invoice_no' =>$invoice,
        'bill_id' => $bill_id,
        'user_id' => $user->id,
        'branch_id' => $branchinfo,
        'shop_id' => $ownerinfo,
        'date' => $date,
        'sgst' =>$sgst,
        'cgst' =>$cgst,
        'sup_ref' => $supref,
        'other_ref' => $oref,
        'createdDatetime' =>$timestamp
    );
    if(isset($ownerinfo) && !empty($ownerinfo)){
    $bill_insert = DB::table('bill_info')->insert($bill_info);
    if(isset($bill_insert)){
      for($i=0;$i<=(int)$itemcounter;$i++){
        $total_net = 0;
        $ind_gst = 0;
        $total_gross = 0;
        $item_id = Uuid::generate();
        $item = $request->input('item'.$i);
        $rate = $request->input('rate'.$i);
        $quantity = $request->input('quantity'.$i);
        $hsn_sac = $request->input('hsn_sac'.$i);
        $total_net = $rate * $quantity;
        $total_bill_net = $total_bill_net+$total_net;
        $total_gst = $sgst + $cgst;
        $ind_gst = $total_net * $total_gst/100;
        $total_gross = $total_net + ($total_net * $total_gst/100);
        $total_bill_gross =$total_bill_gross+$total_gross;
        $itemarray = array(
          'id' => $item_id,
          'bill_id' =>$bill_id,
          'item' => $item,
          'rate' => $rate,
          'quantity' => $quantity,
          'sgst' => $sgst,
          'cgst' => $cgst,
          'hsn_sac'=>$hsn_sac,
          'total_gst' =>$ind_gst,
          'total_net' =>$total_net,
          'total_gross' => $total_gross
        );
        $item_insert = DB::table('item_info')->insert($itemarray);
      }
    }
    $bill_final = array('bill_net'=>$total_bill_net,'bill_gross'=>$total_bill_gross);
    $update_bill_net = DB::table('bill_info')->where('bill_id',$bill_id)->update($bill_final);
    if($billcreate == "generate"){
      return redirect('viewbill/'.$bill_id);
    }elseif($billcreate == "save"){
      return redirect('/listbills');
    }
  }else{
    return redirect('/addbills');
  }
}

  public function listbills(){
    $userlogin = Session::get('Correctlogin');
    if(isset($userlogin) && !empty($userlogin)){
    $get_bills = db::table('bill_info')->orderBy('createdDatetime','asc')->get();
    Session::flash('getbills',$get_bills);
    return Response::view('listbills');
    }

  }

  public function deletebill($deleteid){
    $deletebill = DB::table('bill_info')->where('bill_id',$deleteid)->delete();
    $deleteitem = DB::table('item_info')->where('bill_id',$deleteid)->delete();
    return Redirect::back();
  }
}
