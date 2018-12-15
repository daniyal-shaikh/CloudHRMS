<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Responce;
use validator;
use Redirect;
use Session;
use URL;
use Mail;

class LoginController extends InitialController
{
    public function login(Request $req){
    	try{
    		if($req->phoneno != null && $req->phoneno != ''){
    			$data = DB::select('call login(?)',array($req->phoneno));
	    		if($data[0]->SaveStatus != '1'){
	    			return $this::send_success_response("Login successfully","Success",$data);
	    		}else{
	    			return $this::send_failure_response($data[0]->Message,"Failure",$data);
	    		}
    		}else{
    			return $this::send_failure_response("Please enter phoneno","Failure",[]);
    		}	
    	}catch(Exception $e){
    		return $this::send_failure_response($e->getMessage(),"failure",$e->getMessage());
    	}
    }
}

        