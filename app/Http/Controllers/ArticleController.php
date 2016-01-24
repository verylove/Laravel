<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     *   Route::resource('article', 'ArticleController');
     *
        请求方法	请求 URI	对应的控制器方法	代表的意义
        GET	/article	index	索引/列表
        GET	/article/create	create	创建（显示表单）
        POST	/article	store	保存你创建的数据
        GET	/article/{id}	show	显示对应id的内容
        GET	/article/{id}/edit	edit	编辑（显示表单）
        PUT/PATCH	/article/{id}	save	保存你编辑的数据
        DELETE	/article/{id}	destroy	删除
     */

    public function index(){
        echo 'index';
    }

    public function  create(){
        echo 'create';
    }
}
