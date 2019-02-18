<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserType;
use DB;
use Response;

class UserTypeController extends Controller
{
   function getUserRole()
   {
       //$historyData=DB::row('select count(id_practices_history) from ')
       $usersRole=UserType::select('*') ->get();
       return Response::json(array('success' => TRUE, 'data' => $usersRole), 200);
   }
}