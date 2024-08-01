<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Inertia\Inertia;

class fronContr extends Controller
{
    public function HomeView()
    {
        return Inertia::render('Admin/Home');
    }

    public function BlogView()
    {
        return Inertia::render('Admin/Blog/Blog');
    }

    public function BlogAddView()
    {
        return Inertia::render('Admin/Blog/Add');
    }

    public function loginView()
    {
        return Inertia::render('Auth/Login');
    }

    public function regiView()
    {
        return Inertia::render('Auth/Register');
    }

    
}
