<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function getXinChao($ten, $namSinh) {
        return 'Xin chao ' . $ten . ' - ' . $namSinh;
    }
}
