<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function dd()
    {
        ob_start();
        echo '<pre>';

        var_dump($_SERVER);

        return ob_get_clean();;
    }
}
