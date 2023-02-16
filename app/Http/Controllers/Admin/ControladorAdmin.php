<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class ControladorAdmin extends Controller
{
    protected function mapAdminRoutes()
    {
        /*Route::middleware('web')
            ->namespace($this->namespace. '\Admin')
            ->group(base_path('routes/admin.php'));*/
    }
}
