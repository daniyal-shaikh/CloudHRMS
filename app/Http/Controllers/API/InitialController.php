<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;

class InitialController extends Controller
{
	public function send_success_response($message,$status,$data){
		$res = array('Message' => $message, 'Status' => $status, 'StatusCode' =>0, 'Data' =>$data);
		return Response::Json($res);
	} 

	public function send_failure_response($message,$status,$data){
  		$res = array('Message' =>$message ,'Status'=>$status,'StatusCode'=>1,'Data'=>[] );
  		return Response::json($res);
  	}   
}
