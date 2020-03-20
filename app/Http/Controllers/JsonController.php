<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Response;
use  GuzzleHttp \Client ;
class JsonController extends Controller
{  
    public function jsonorden($id){
        $nuevaorden =  App\Orden::findOrFail($id);
         if (function_exists('random_bytes')) {
            $nonce = bin2hex(random_bytes(16));
        } elseif (function_exists('openssl_random_pseudo_bytes')) {
            $nonce = bin2hex(openssl_random_pseudo_bytes(16));
        } else {
            $nonce = mt_rand();
        }
        
        $nonceBase64 = base64_encode($nonce);
        $seed = date('c');
        $secretKey = "024h1IlD";
        $trankey =  base64_encode(sha1($nonce . $seed . $secretKey, true));
      
    // CREACION DE LA AUTENTICACION
          $auth = array(
                'login' => '6dd490faf9cb87a9862245da41170ff2',
                'tranKey' => $trankey,
                'nonce'=> $nonceBase64,
                'seed' => $seed,
            );

           $buyer = array(
                        'name'=>$nuevaorden->name,
                        'surname'=>$nuevaorden->surname,
                        'email'=>$nuevaorden->email,
                        'document'=>$nuevaorden->document,
                        'documentType'=>$nuevaorden->documenttype,
                        'mobile'=>$nuevaorden->phone
                    );
            $amount = array(
                        'currency'=>"COP",
                        'total'=>100000,
            );

           $payment = array(
                        'reference'=>"123",
                        'description'=>"Ventas por internet",
                        'amount'=> $amount,
                    );
                $arguments  = json_encode (array(
                                'auth' => $auth,
                                'buyer' => $buyer,
                                'payment'=>$payment,
                                'expiration'=>date('c', strtotime('+1 hour')),
                                'ipAddress'=>"192.168.1.12",
                                'returnUrl'=>"http://127.0.0.1:8000/respuesta/$id",
                                'userAgent'=> "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36",
                                'paymentMethod'=> null,
            ));
        
        $client = new Client([
            'headers' => ['Content-Type' => 'application/json']
        ]);
        $response = $client->post('https://test.placetopay.com/redirection/api/session/', 
                ['body' => $arguments]
        );
        $response = json_decode($response->getBody(), true);
        $RequestId=($response['requestId']);
        $nuevaorden->RequestID=$RequestId;
        $nuevaorden->save();
        $dir=($response['processUrl']);
        return redirect($dir);
    }

    public function respuesta($id){
        $nuevaorden =  App\Orden::findOrFail($id);
        $RequestId=$nuevaorden->RequestID;
        if (function_exists('random_bytes')) {
            $nonce = bin2hex(random_bytes(16));
        } elseif (function_exists('openssl_random_pseudo_bytes')) {
            $nonce = bin2hex(openssl_random_pseudo_bytes(16));
        } else {
            $nonce = mt_rand();
        }
        
        $nonceBase64 = base64_encode($nonce);
        $seed = date('c');
        $secretKey = "024h1IlD";
        $trankey =  base64_encode(sha1($nonce . $seed . $secretKey, true));
      
    // CREACION DE LA AUTENTICACION
          $auth =array(
                'login' => '6dd490faf9cb87a9862245da41170ff2',
                'tranKey' => $trankey,
                'nonce'=> $nonceBase64,
                'seed' => $seed,
            );
            $arguments  = json_encode(array(
                'auth' => $auth,));
           //print ($arguments);
            $client = new Client([
                'headers' => ['Content-Type' => 'application/json']
            ]);
            $response = $client->post("https://test.placetopay.com/redirection/api/session/$RequestId", 
                    ['body' => $arguments]
            );
            $response = json_decode($response->getBody()->getContents(), true);
            $status=($response['status']);
            if(($status['status'])=="APPROVED"){
                $statu="PAYED";
            }else{
                $statu=($status['status']);
            }
            $nuevaorden->status=$statu;
            $nuevaorden->save();
            return view('orden');
    }
}
