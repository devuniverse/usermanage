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
      $perPage = Config::get('usermanage.perpage');
      $users = User::paginate($perPage);
      return view('usermanage::usermanage', ['users' => $users]);

    }
    public function edit(Request $request){
      $user = $request->user;
      $decoded = \Crypt::decryptString($user);
      $useObj = User::find($decoded);
      return view('usermanage::useredit', ['user' => $useObj]);
    }


}
