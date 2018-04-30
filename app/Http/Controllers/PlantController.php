<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlantController extends Controller
{
    protected $_category;

    function __construct()
    {
        $this->_category = 'plant';
    }

    public function lists()
    {
        $list  = DB::select('SELECT * FROM blog_posts WHERE category = "plant" ORDER BY post_datetime DESC');
        $posts = [];
        $years = [];
        if ($list) {
            foreach ($list as $item) {
                $year                       = substr($item->post_datetime, 0, 4);
                $month                      = substr($item->post_datetime, 5, 2);
                $day                        = substr($item->post_datetime, 8, 2);
                $posts[$year][$month][$day] = $item;
                $years[]                    = $year;
            }
        }
        return view('list.poem', ['posts' => $posts, 'years' => $years, 'category' => $this->_category]);
    }
}
