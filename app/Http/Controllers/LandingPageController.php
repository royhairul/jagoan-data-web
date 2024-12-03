<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Team;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Tampilkan halaman welcome dengan data Teams dan Blog.
     */
    public function index()
    {
        // Ambil data teams dan blog
        $teams = Team::all();  // Ambil semua data tim
        $blogs = Blog::latest()->get();  // Ambil 3 blog terbaru

        // Kirim data ke view
        return view('welcome', compact('teams', 'blogs'));
    }
}
