<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgrammingController extends Controller
{
    protected $_category;

    function __construct()
    {
        $this->_category = 'programming';
    }

    public function lists()
    {
        $list = DB::select('SELECT * FROM blog_posts WHERE category = "programming" ORDER BY post_datetime');
        $posts = [];
        $years = [];
        if ($list) {
            foreach ($list as $item) {
                $year  = substr($item->post_datetime, 0, 4);
                $month = substr($item->post_datetime, 5, 2);
                $day   = substr($item->post_datetime, 8, 2);
                $posts[$year][$month][$day] = $item;
                $years[] = $year;
            }
        }
        $years = array_unique($years);
        return view('list.programming', ['posts' => $posts, 'years' => $years, 'category' => $this->_category]);
    }

    // get post by plug
    public function plug($plug)
    {
        $post = DB::selectOne("SELECT * FROM blog_posts WHERE plug = '$plug'");
        if ($post) {
            $postContent = DB::selectOne("SELECT * FROM blog_posts_content WHERE blog_posts_id = {$post->id}");
            $post->content = $postContent->content;
            return view('content.programming', ['post' => $post, 'category' => $this->_category]);
        } else {
            return view('error404');
        }
    }
}
