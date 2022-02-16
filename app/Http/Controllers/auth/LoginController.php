<?php

namespace App\Http\Controllers\auth;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\inquiryee;


class LoginController extends Controller
{
    public function adminLogin()
    {
        return view('login');
// test
    }
    public function  forntendSignup (Request $request)
    {
            $biuldPackage = $request->session()->get('biuldPackage');

        $user = User::where('email','=',$request->email)->where('userType','=','forntend')->first();
        if(empty($user))
        {
            $user = new User;

            $user->email = $request->email;
            $user->password = md5($request->password);
            $user->userType ='forntend';
         
            $user->save();
            $users = User::where('email','=', $request->email)->where('password','=',md5($request->password))->where('userType','=','forntend')->first();
            if(!empty($users))
            {
                Auth::login($users);
                if(Auth::check())
                {
             
                   
                    $biuldPackage = $request->session()->get('biuldPackage');
       
                  
                    

                    switch ($biuldPackage) {
                      case "furnished":
                        return redirect('cutomPackageFurnishedQuestion');
                        break;
                      case "residentional":
                        return redirect('cutomPackageQuestion');

                        break;
                      case "vactional":
                        return redirect('vactionslHomeQuestion');

                        break;
                      default:
                      return redirect('hellosign');

                   
                   
                   
                    }
             
                }
            }
            else
            {
                return redirect('forntendlogin');
            }
     
        }
        else
        {
            return redirect('forntendlogin');

        }

    }
    public function forntendLogin(Request $request)
    {
        // $user = Auth::user();
        // if(!empty($user->email))
        // {
        //     $biuldPackage = $request->session()->get('biuldPackage');
   
        //     if (!empty($biuldPackage) && $biuldPackage == true) {
        //         return redirect('cutomPackageQuestion');

        //     }
        //     else
        //     {
        //         return redirect('hellosign');

        //     }

        // }
        // else
        // {
       
        // } 
        return view('forntend.login.login');
    }

    public function adminValidtion(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email','=',$email)->where('password','=',md5($password))->where('userType','=','Admin')->first();
        
        if(!empty($user))
        {
            Auth::login($user);
            if(Auth::check())
            {
             return redirect('admin/dashborad');
            }
        }
        else
        {
            return redirect('adminlogin');
        }

    }
    public function forntendLoginVerify(Request $request)
    {

        
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email','=',$email)->where('password','=',md5($password))->where('userType','=','forntend')->first();
      
        if(!empty($user))
        {
            Auth::login($user);
            if(Auth::check())
            {
         
               
   
            
                $biuldPackage = $request->session()->get('biuldPackage');
       
                  
                    

                switch ($biuldPackage) {
                  case "furnished":
                    return redirect('cutomPackageFurnishedQuestion');
                    break;
                  case "residentional":
                    return redirect('cutomPackageQuestion');

                    break;
                  case "vactional":
                    return redirect('vactionslHomeQuestion');

                    break;
                  default:
                  return redirect('hellosign');

                  }
         
            }
        }
        else
        {
            return redirect('forntendlogin');
        }
    }
}
