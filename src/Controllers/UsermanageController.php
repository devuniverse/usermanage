<?php

namespace Devuniverse\Usermanage\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Config;
use Auth;
use App\User;

class UsermanageController extends Controller
{

    public function __construct()
    {

    }
    public function index(){
      $users = User::paginate(1);
      return view('usermanage::usermanage', ['users' => $users]);

    }



}
