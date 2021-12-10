<?php

namespace App\Http\Controllers\Forntend;
use App\Models\BookingCall;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use HelloSign\Client;
use HelloSign\SignatureRequest;
use HelloSign\TemplateSignatureRequest;

class TestController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      // $file = $_SERVER["DOCUMENT_ROOT"]."/property-santa/public/nda.pdf";
      // // die;
      $apikey="195a5a6eb1c13392a8455afa59718e6e7a24aa1e008e2285a125389a93670dcf";
      $client = new Client($apikey);
      // $request = new SignatureRequest;
      // $request->enableTestMode();
      // $request->setTitle('NDA with Acme Co.');
      // $request->setSubject('The NDA we talked about');
      // $request->setMessage('Please sign this NDA and let\'s discuss.');
      // $request->addSigner('jack@example.com', 'Jack');
      // $request->addSigner('jill@example.com', 'Jill');
      // $request->addCC('lawyer@example.com');
      // $request->addFile($file); //Adding file from local
      // $response = $client->sendSignatureRequest($request);
      // echo"<pre>";
      // $client = new Client($apikey);
      // $client = new Client('SIGN_IN_AND_CREATE_API_KEY_FIRST');
      $response =   $client->getTemplate('5a1e7e86a33d9d03a629f09caedcbafe7bc13983');
      echo"<pre>";
      print_r($response);
      die;
    
    }
  
}
