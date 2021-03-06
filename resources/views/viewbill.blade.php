<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=8">
<title>Eagle Trading.htm</title>
<style type="text/css">
table { page-break-inside:auto }
   tr   { page-break-inside:avoid; page-break-after:always }
   td{height: 10px;}
   thead { display:table-header-group }
   tfoot { display:table-footer-group }
   @media print
{
table {page-break-after:always}
}
</style>
<center>
  <button onclick="myFunction()" class="btn btn-primary">Print</button>
<script>
function myFunction() {
    window.print();
}
</script>
  <?php $getbill = Session::get('sendbill');?>
  <?php $user =  DB::table('branch_info')->where('id',$getbill[0]->branch_id)->first(); ?>
  <div>
    <div align="left">
    <img src="{{URL::asset('images/etc.png')}}" style="padding-left:5em" height="60px;"width="100px;">
    </div>
    <div align="center">
      <span contenteditable="true" style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">Subject to Vyara Junction</span>
    </div>
  <div align="center">
    <span contenteditable="true" style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">TAX INVOICE</span>
  </div>
  <div align="right" style="padding-right:1em;">
    <span contenteditable="true" style="font-size: 12.0pt; font-family: 'Times New Roman',serif;padding-right:3em">Orginal Receiptant</span>
  </div>

</div>
  <div class="tablecontainer">
<table style="height: 48em;width: 50em;">
<tbody>
<tr style="height:;">
<td style="width: 310px; border: 1pt solid windowtext; padding: 0in 5.4pt; height: 38px;" colspan="4" rowspan="2"><strong><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">{{$user->shopName}}</span></strong><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;<br />{{$user->add1}}<br/> {{$user->add2}} <br />{{$user->state}} , {{$user->pin}}<br />GSTIN/UIN: {{$user->gst}}<br/>Pan No:{{$user->pan}}<br/>Mob: {{$user->mob}}</span>
</td>
<td style="width: 168px; border-top: 1pt solid windowtext; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-image: initial; border-left: none; padding: 0in 5.4pt; height: 26px;" colspan="7">
<strong><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">Invoice No:</span></strong>
<strong><span contenteditable="true" style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">{{$getbill[0]->invoice_no}}</span></strong>
</td>
<td style="width: 185px; border-top: 1pt solid windowtext; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-image: initial; border-left: none; padding: 0in 5.4pt; height: 26px;" colspan="4">
<strong><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">Date:</span></strong>
<strong><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">{{str_replace('-','/',date('d-m-Y',strtotime($getbill[0]->date)))}}</span></strong>
</td>
</tr>
<tr style="height:;">
<td style="width: 168px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 12px;" colspan="7">
<strong><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">Supplier Ref:</span></strong>
<strong><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">{{$getbill[0]->sup_ref}}</span></strong>
</td>
<td style="width: 185px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 12px;" colspan="4">
<strong><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">Other Ref:</span></strong>
<strong><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">{{$getbill[0]->other_ref}}</span></strong>
</td>
</tr>
<tr style="height:;">
<td style="width: 310px; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0in 5.4pt; height: 26px;" colspan="15">
  <?php $owner =  DB::table('shop_info')->where('id',$getbill[0]->shop_id)->first(); ?>
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;Buyer: </span><strong><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">{{$owner->shopName}} ,{{$owner->add1}} ,{{$owner->state}},{{$owner->pin}} <br/>GSTIN/UIN: {{$owner->gst}} , Mob: {{$owner->mob}}<br/><br/><strong>Place of Supply</strong>:{{$owner->place_of_sup}} </span></strong>
</td>
</tr>
<tr style="height:">
<td style="width: 55px; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0in 5.4pt; height: 5px;">
<strong><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">Sr No</span></strong>
</td>
<td style="width: 162px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 5px;">
<strong><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;Description</span></strong>
</td>
<td style="width: 103px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 5px;" colspan="3">
<strong><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;HSN/SAC</span></strong>
</td>
<td style="width: 91px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 5px;" colspan="3">
<strong><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;Quantity</span></strong>
</td>
<td style="width: 59px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 5px;" colspan="2">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;<strong>Rate</strong></span>
</td>
<td style="width: 72px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 5px;" colspan="2">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;<strong>Per</strong></span>
</td>
<td style="width: 121px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 5px;" colspan="3">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span>
<strong><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">Amount</span></strong>
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span>
</td>
</tr>
<?php $items = DB::table('item_info')->where('bill_id',$getbill[0]->bill_id)->get();  ?>
<?php $counter =1; $total_net =0; $total_gst = 0; $total_quantity = 0;?>
<tr style="height:;">
<td style="width: 55px; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0in 5.4pt; height: 24px;">
@foreach($items as $item)
  <span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">{{$counter++}}</span><br/>
@endforeach
@for($i=count($items);$i<12;$i++)
  <p>&nbsp;</p>
@endfor
</td>

<td style="width: 162px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 24px;">
@foreach($items as $item)
  <span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">{{$item->item}}</span><br/>
@endforeach
@for($i=count($items);$i<12;$i++)
  <p>&nbsp;</p>
@endfor
</td>
<td style="width: 103px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 24px;" colspan="3">
  @foreach($items as $item)
    <span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">{{$item->hsn_sac}}</span><br/>
  @endforeach
  @for($i=count($items);$i<12;$i++)
    <p>&nbsp;</p>
  @endfor
</td>

<td style="width: 91px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 24px;" colspan="3">
  @foreach($items as $item)
    <span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">{{$item->quantity}}</span><br/>
  @endforeach
  @for($i=count($items);$i<12;$i++)
    <p>&nbsp;</p>
  @endfor
</td>

<td style="width: 59px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 24px;" colspan="2">
  @foreach($items as $item)
    <span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">{{$item->rate}}</span><br/>
  @endforeach
  @for($i=count($items);$i<12;$i++)
    <p>&nbsp;</p>
  @endfor
</td>
<td style="width: 72px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 24px;" colspan="2">
@foreach($items as $item)
  <span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">nos</span><br/>
@endforeach
@for($i=count($items);$i<12;$i++)
  <p>&nbsp;</p>
@endfor
</td>
<td style="width: 121px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 24px;" colspan="3">
@foreach($items as $item)
  <span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">{{$item->total_net}}</span><br/>
  <?php $total_net = $total_net +  $item->total_net; ?>
  <?php $total_gst =  $total_gst+ $item->total_gst; ?>
  <?php $total_quantity =  $total_quantity+ $item->quantity; ?>
@endforeach
@for($i=count($items);$i<12;$i++)
  <p>&nbsp;</p>
@endfor
</td>
</tr>
<!--  blank spaces started-->
{{-- @for($i=0;$i<10;$i++)
<tr style="height:;">
<td style="width: 55px; border-right: 1pt solid windowtext; border-bottom: transparent; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0in 5.4pt; height: 24px;">
  <span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;"></span><br/>
</td>
<td style="width: 162px; border-top: none; border-left: none; border-bottom: transparent; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 24px;">
  <span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;"></span><br/>
</td>
<td style="width: 103px; border-top: none; border-left: none; border-bottom: transparent; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 24px;" colspan="3">

    <span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;"></span><br/>
</td>
<td style="width: 91px; border-top: none; border-left: none; border-bottom: transparent; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 24px;" colspan="3">
    <span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;"></span><br/>
</td>
<td style="width: 59px; border-top: none; border-left: none; border-bottom: transparent; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 24px;" colspan="2">
    <span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;"></span><br/>
</td>
<td style="width: 72px; border-top: none; border-left: none; border-bottom: transparent; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 24px;" colspan="2">
  <span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;"></span><br/>
</td>
<td style="width: 121px; border-top: none; border-left: none; border-bottom: transparent; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 24px;" colspan="3">
  <span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;"></span><br/>
</td>
</tr>
@endfor --}}
<!-- blank spaces below table-->
<tr style="">
<td style="width: 542px; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0in 5.4pt; height: 2px;" colspan="12">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; OUTPUT IGST @ {{$getbill[0]->sgst + $getbill[0]->cgst}}%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
</td>
<td style="width: 121px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0.75pt; height: 2px;" colspan="3">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">₹ {{round($total_gst,2)}}</span>
</td>
</tr>
<tr style="height:;">
<td style="width: 55px; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0in 5.4pt; height: 12px;">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span>
</td>
<td style="width: 162px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 12px;">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;"><strong>Total</strong></span>
</td>
<td style="width: 103px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 12px;" colspan="3">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span>
</td>
<td style="width: 91px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 12px;" colspan="3">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">{{$total_quantity}} nos</span>
</td>
<td style="width: 59px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 12px;" colspan="2">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span>
</td>
<td style="width: 72px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 12px;" colspan="2">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span>
</td>
<td style="width: 121px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 12px;" colspan="3">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span>
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">₹ {{round($total_net + $total_gst,2)}}</span>
</td>
</tr>
<tr style="height:">
<td style="width: 663px; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0in 5.4pt; height: 8px;" colspan="15">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;Amount in words:</span>
<strong><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">Indian Rupees {{getIndianCurrency($total_net + $total_gst)}} Only &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; E & O.E.</span></strong>
</td>
</tr>
<tr style="height:">
<td style="width: 228px; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0in 5.4pt; height: 14px;" colspan="3" rowspan="2">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;HSN/SAC</span>
</td>
<td style="width: 98px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 14px;" colspan="3" rowspan="2">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;Taxable Value</span>
</td>
<td style="width: 222px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 7px;" colspan="5">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;Central Tax</span>
</td>
{{-- <td style="width: 115px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 14px;" colspan="2" rowspan="2">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;Total Tax Amount</span>
</td> --}}
<td style="width: 222px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 7px;" colspan="5">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;State Tax</span>
</td>
</tr>
<tr style="height:">
<td style="width: 91px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 7px;" colspan="1">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;Rate</span>
</td>
<td style="width: 131px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0.75pt; height: 7px;" colspan="4">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;Amount</span>
</td>
<td style="width: 91px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 7px;" colspan="2">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;Rate</span>
</td>
<td style="width: 131px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0.75pt; height: 7px;" colspan="3">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;Amount</span>
</td>
</tr>
<?php $sitems = DB::table('item_info')->where('bill_id',$getbill[0]->bill_id)->get();  ?>
<?php $itmcounter = 0; ?>
<tr style="height:;">
<td style="width: 228px; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0.75pt; height: 30px;" colspan="3">
@foreach ($sitems as $sitem)
  <?php $itmcounter++ ?>
    <span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">{{$itmcounter}})&nbsp;{{$sitem->hsn_sac}}</span><br/>
@endforeach
</td>
<td style="width: 98px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0.75pt; height: 30px;" colspan="3">
@foreach ($sitems as $sitem)
      <span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">₹ {{round($sitem->total_net,2)}}</span><br/>
@endforeach
</td>
<td style="width: 91px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 30px;" colspan="1">
@foreach ($sitems as $sitem)
  <span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">{{$sitem->cgst}} %</span><br/>
@endforeach
</td>
<td style="width: 131px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 30px;" colspan="4">
<?php $totalcgst =0; ?>
@foreach ($sitems as $sitem)
  <span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">₹ {{round(($sitem->cgst * $sitem->total_net)/100,2)}}</span><br/>
     <?php $totalcgst =  $totalcgst + ($sitem->cgst * $sitem->total_net)/100; ?>
@endforeach
</td>
<td style="width: 115px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0.75pt; height: 30px;" colspan="2">
  @foreach ($sitems as $sitem)
    <span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">{{$sitem->sgst}} %</span><br/>
  @endforeach
</td>
<td style="width: 115px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0.75pt; height: 30px;" colspan="2">
  <?php $totalsgst =0; ?>
  @foreach ($sitems as $sitem)
    <span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">₹ {{round(($sitem->sgst * $sitem->total_net)/100,2)}}</span><br/>
     <?php $totalsgst =  $totalsgst + ($sitem->sgst * $sitem->total_net)/100; ?>
  @endforeach
</td>
</tr>
<tr style="height:;">
<td style="width: 228px; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0.75pt; height: 47px;" colspan="3">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;<strong>Total</strong></span>
</td>
<td style="width: 98px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0.75pt; height: 47px;" colspan="3">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">₹ {{round($total_net,2)}}</span>
</td>
<td style="width: 91px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 47px;" colspan="1">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;"></span>
</td>
<td style="width: 131px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 47px;" colspan="4">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">₹ {{round($totalcgst,2)}}</span>
</td>
<td style="width: 91px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 47px;" colspan="2">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;"></span>
</td>
<td style="width: 115px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0.75pt; height: 47px;" colspan="3">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">₹ {{round($totalsgst,2)}}</span>
</td>
</tr>
<tr style="height:;">
<td style="width: 663px; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0in 5.4pt; height: 46px;" colspan="15">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">Tax Amount: {{getIndianCurrency($total_gst)}} only</span><br/><br/>
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;"><b>Bank Name:</b>Central Bank of India</span><br/>
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;"><b>Account No:</b>3247542689</span><br/>
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;"><b>IFSC Code & Branch:</b>CBIN0284194 , Vyara</span><br/>
</td>
</tr>
<tr style="height:;">
<td style="width: 332px; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0in 5.4pt; height: 39px;" colspan="7">
<span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">Customer Seal and Signature</span></span>
</td>
<td style="width: 331px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 39px;" colspan="8">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;For eagle trading</span><p></p>
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">Authorised Signature</span>
</td>
</tr>
<tr style="height:">
<td style="width: 55px; padding: 0.75pt; height: 9px;">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span>
</td>
<td style="width: 162px; padding: 0.75pt; height: 9px;">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span>
</td>
<td style="width: 11px; padding: 0.75pt; height: 9px;">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span>
</td>
<td style="width: 82px; padding: 0.75pt; height: 9px;">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span>
</td>
<td style="width: 10px; padding: 0.75pt; height: 9px;">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span>
</td>
<td style="width: 6px; padding: 0.75pt; height: 9px;">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span>
</td>
<td style="width: 6px; padding: 0.75pt; height: 9px;">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span>
</td>
<td style="width: 79px; padding: 0.75pt; height: 9px;">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span>
</td>
<td style="width: 6px; padding: 0.75pt; height: 9px;">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span>
</td>
<td style="width: 53px; padding: 0.75pt; height: 9px;">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span>
</td>
<td style="width: 8px; padding: 0.75pt; height: 9px;">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span>
</td>
<td style="width: 64px; padding: 0.75pt; height: 9px;">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span>
</td>
<td style="width: 6px; padding: 0.75pt; height: 9px;">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span>
</td>
<td style="width: 11px; padding: 0.75pt; height: 9px;">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span>
</td>
<td style="width: 104px; padding: 0.75pt; height: 9px;">
<span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span>
</td>
</tr>
<tr>
  <td colspan="20">
    <center><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">(All kinds of M.S Nailes Anil Wire GI Ghamala, Bucket , Trunk , Milk Can , Water Can, PVC Can)</span></center>
  </td>
</tr>

<tr>
  <td colspan="20">
    <center><span style="font-size: 10.0pt; font-family: 'Times New Roman',serif;">This is Computerized Generated Invoice</span></center>
  </td>
</tr>
</tbody>
</table>
</center>
