<?php
/**
 * Created by PhpStorm.
 * User: Yangtao
 * Date: 16-1-21
 * Time: 下午12:58
 */


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Controller;

class AdminController extends Controller
{


    public function index()
    {
        return view('admin.home');
    }

    public function login()
    {
        return view('admin.auth.login');
    }

}
