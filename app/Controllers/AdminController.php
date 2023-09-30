<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function admin()
    {
        return view ('/admin/index');

    }
}
