<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    function index($page)
    {
        $list_page  = ['home' => 'Trang chủ', 'manage' => 'Quản lý KPI', 'statistical' => 'Thống kê', 'calendar' => "Lịch", 'setting' => 'Cài đặt'];
        if (!array_key_exists($page, $list_page)) {
            return abort(404);
        }
        return view($page,compact('list_page','page'));
    }
}
