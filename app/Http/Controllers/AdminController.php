<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * @desc   文章列表
     * @author feiffy <feiffy.song@atommatrix.com>
     */
    public function postList()
    {
        $posts = \App\Models\BlogPosts::all();
        return view('layouts.admin', ['posts' => $posts]);
    }

    /**
     * @desc   单个文章编辑页面
     * @author feiffy <feiffy.song@atommatrix.com>
     */
    public function edit()
    {
        return view('admin.edit');
    }

    /**
     * @desc   单个文章保存页面
     * @author feiffy <feiffy.song@atommatrix.com>
     */
    public function save(Request $request)
    {
        return view('admin.edit');
    }
}