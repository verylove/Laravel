<?php

namespace App\Http\Controllers\Member;

use Cache;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Models\Users as MUser;

class MemberController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('member.auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $value = MUser::getUser(1);
        echo '-------';
        echo $value;exit;
        //return view('home');
    }

//    public function login()
//    {
//        return view('member.auth.login');
//    }


    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
        $user = Cache::get('user:'.$id);

        return view('profile', ['user' => $user]);
    }


}
