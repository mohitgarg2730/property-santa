<?php

namespace App\Http\Controllers\Forntend;
use App\Models\inquiryee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomRateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

  
        $customRateForm = $request->session()->get('customRateForm');

        if(!empty($customRateForm))
        {
   
          $inquiry = new inquiryee;
          $inquiry = inquiryee::whereid($customRateForm['id'])->where('locked_status', '0')->first();   
        
          
          return view('forntend.customrate.custom_rate',compact('inquiry'));

        }
        else
        {
            return view('forntend.customrate.custom_rate');

        }
    }
    public function customRateFormSetup(Request $request)
    {

   

      $inquiry = new inquiryee;

      $inquiry->step_1 = $request->step_1;
      $inquiry->step_2 = $request->step_2;
      $inquiry->step_3 = $request->step_3;
      $inquiry->user_Ip  =  $this->getIPAddress();
      $inquiry->user_rate =  $request->amount;
      $inquiry->user_address = $request->address;
      // $inquiry->admin_price = $request->name;

      $inquiry->save();

      
      $customRateForm = ['address'=> $request->address,
      'step_1'=> $request->step_1,
      'step_2'=> $request->step_2,
      'step_3'=> $request->step_3,
      'amount'=> $request->amount,
      'userIp'=> $this->getIPAddress(),
      'id'=>   $inquiry->id
    ];
      $request->session()->put('customRateForm',$customRateForm);




      return redirect('customRate#forms');

    }

    public function cutomRateGetAdminPrice($id)
    {

             $inquiry = new inquiryee;
             $inquiry = inquiryee::whereid($id)->first();   
             if(!empty( $inquiry->admin_price))
             {
              return $inquiry->admin_price;

             }
             else
             {
              return false;

             }
    }
    function getIPAddress() {  
      //whether ip is from the share internet  
       if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                  $ip = $_SERVER['HTTP_CLIENT_IP'];  
          }  
      //whether ip is from the proxy  
      elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
       }  
  //whether ip is from the remote address  
      else{  
               $ip = $_SERVER['REMOTE_ADDR'];  
       }  
       return $ip;  
  }  

  public function packageSelect(Request $request)
  {

    $customRateForm = $request->session()->get('customRateForm');
    $request->session()->put('biuldPackage',false);

    if (!empty($customRateForm)) {
        $inquiry = new inquiryee;
        $inquiry = inquiryee::whereid($customRateForm['id'])->first();

        $inquirys = inquiryee::where('id', $customRateForm['id'])
        ->update(['locked_status' => 1]);
        if (!empty($inquiry->admin_price)) {
           
          $percentage = ($inquiry->admin_price * 2);
          $percentage = ($percentage /100);
            return view('forntend.customrate.custom_form',['adminPrice'=>$inquiry->admin_price ,'percentage'=>$percentage,'step3'=>$inquiry->step_3]);
        }
        else
        {
          return redirect('customRate');
        }
    
    }
    else
    {
      return redirect('customRate');
    }

  

  }
}
