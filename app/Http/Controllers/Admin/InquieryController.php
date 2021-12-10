<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\inquiryee;

class InquieryController extends Controller
{
       public function __invoke()
    {
        // ...
    }
    public function index()
    {
        $inquirys = inquiryee::orderBy('id', 'desc')

        -> get();
      
        return view('backend.inquire.inquiry',compact('inquirys'));
    }   
    public function inqueryViews($id)
    {
        $inquirys = inquiryee::where ('id', '=', $id)->first();
        inquiryee::where ('id', '=', $id)->update(['notification_status' => 1]);
     
        return view('backend.inquire.inquiryForm',compact('inquirys'));
    }   
    public function inqueryDelete($id)
    {
            inquiryee::where ('id', '=', $id)->delete();
            return redirect('admin/inquery');

    }   
    public function inquerySetPrice($id ,Request $request)
    {
        $adminPrice = $request->adminPrice;

        $inquirys = inquiryee::where('id', $id)
        ->update(['admin_price' => $adminPrice,'admin_status' => 1]);
        return redirect('admin/inquery');
    }   
    public function getInqueryByAjax()
    {

        $inquiryes = inquiryee::where('notification_status',0)->orderBy('id','desc')->get();
        $html = false; 
         foreach($inquiryes as $inquirye )
       {
            $html .= "<li><a href=".url('admin/inqueryView/' . $inquirye->id)."> New Inquery </a></li>";

       }
       return $html;
    }   

    public function exportInquery()
    {
        $inquirys = inquiryee::get();
        $query =   $inquirys;      

         
        if($query){ 
            $delimiter = ","; 
            $filename = "members-data_" . date('Y-m-d') . ".csv"; 
             
            // Create a file pointer 
            $f = fopen('php://memory', 'w'); 
             
            // Set column headers 
            $fields = array('ID', 'Address', 'Price'); 
            fputcsv($f, $fields, $delimiter); 
             
            // Output each row of the data, format line as csv and write to file pointer 
            $sr = 1; 
            foreach($inquirys as $inquiry)
              {
                $lineData = array( $sr++,$inquiry->user_address, $inquiry->user_rate); 
                fputcsv($f, $lineData, $delimiter); 
        
              }
              
           
             
            // Move back to beginning of file 
            fseek($f, 0); 
             
            // Set headers to download file rather than displayed 
            header('Content-Type: text/csv'); 
            header('Content-Disposition: attachment; filename="' . $filename . '";'); 
             
            //output all remaining data on a file pointer 
            fpassthru($f); 
        } 
        exit; 
        
       
    }
}