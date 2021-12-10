<?php

namespace App\Http\Controllers\Forntend;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Questionfurnishedrental;
use App\Models\inquiryee;
use Illuminate\Http\Request;
use App\Models\QuestionVactionalHome;


class BuildPackage extends Controller
{
   public function index(Request $request)
   {
     
       $biuldPackage = $request->session()->get('customRateForm');
       
        if($biuldPackage['step_1'] ==  'Furnished rental')
        {
            $request->session()->put('biuldPackage','furnished');

        }
        else
        {
            $request->session()->put('biuldPackage','residentional');

        }
    return redirect('forntendlogin');

   }
   public function vactional(Request $request)
   {


    $request->session()->put('biuldPackage','vactional');
    return redirect('forntendlogin');

   }
 
   public function cutomPackageQuestion()
   {
    $Question = new Question;
    $questions = Question::get();
    $inquiryee = inquiryee::orderBy('id', 'desc')->where('user_Ip','=',$this->getIPAddress())->first();
    $percentage = ($inquiryee->admin_price * 2);
    $percentage = ($percentage /100);
    
    return view('forntend.CustomePackageQuestion.Question1',compact('questions','inquiryee','percentage'));
   }
   public function cutomFurnishedPackageQuestion()
   {
    $Question = new Questionfurnishedrental;
    $questions = Questionfurnishedrental::get();
    $inquiryee = inquiryee::orderBy('id', 'desc')->where('user_Ip','=',$this->getIPAddress())->first();
    $percentage = ($inquiryee->admin_price * 2);
    $percentage = ($percentage /100);
    
    return view('forntend.CustomePackageQuestion.Furnishedquestion',compact('questions','inquiryee','percentage'));
   }
   public function vactionslHomeQuestion()
   {
    $Question = new QuestionVactionalHome;
    $questions = QuestionVactionalHome::get();
    $inquiryee = inquiryee::orderBy('id', 'desc')->where('id','=','1')->first();
    $percentage = ($inquiryee->admin_price * 2);
    $percentage = ($percentage /100);
    
    return view('forntend.CustomePackageQuestion.vactionalHomeForm',compact('questions','inquiryee','percentage'));
   }

   
    function getIPAddress() {  
        if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                    $ip = $_SERVER['HTTP_CLIENT_IP'];  
            }  
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
        }  
        else{  
                $ip = $_SERVER['REMOTE_ADDR'];  
        }  
        return $ip;  
    }  
}
