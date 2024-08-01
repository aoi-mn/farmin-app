<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

use Inertia\Inertia;

class frontContr extends Controller
{

    public function HomeView()
    {
        return Inertia::render('Web/Home');
    }

    public function AboutView()
    {
        return Inertia::render('Web/About');
    }

    public function ContView()
    {
        return Inertia::render('Web/Contect');
    }

    public function BlogView()
    {
        $blog = Blog::get();
        return Inertia::render('Web/Blog',[
            'blog' => $blog
        ]);
    }

    public function ShowView()
    {
        return Inertia::render('Web/NewDeta');
    }
}
