<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Safaricom\Mpesa\Mpesa;

class paycontroller extends Controller
{
    //
    public function stk(){
        $mpesa= new \Safaricom\Mpesa\Mpesa();
        $BusinessShortCode= "174379";
        $LipaNaMpesaPasskey="bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
        $TransactionType="CustomerPayBillOnline";
        $Amount="5";
        $PartyA="2547********";
        $PartyB="174379";
        $PhoneNumber="2547********";
        $CallBackURL="http://172.30.0.3/mpesa/cofirmation";
        $AccountReference="account reference"; 
        $TransactionDesc="transdesc";
        $Remarks="remarks";



$stkPushSimulation=$mpesa->STKPushSimulation(
    $BusinessShortCode,
     $LipaNaMpesaPasskey,
      $TransactionType,
       $Amount,
        $PartyA, 
        $PartyB,
         $PhoneNumber,
          $CallBackURL, 
          $AccountReference, 
          $TransactionDesc,
           $Remarks);
           dd($stkPushSimulation);
    }
}
 