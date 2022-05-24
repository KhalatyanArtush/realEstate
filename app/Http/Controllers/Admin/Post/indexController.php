<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Posts;

use App\Http\Requests\creatRequest;


class IndexController extends Controller
{
    public function __invoke()
    {


       return view('admin.post.index');
    }
}

