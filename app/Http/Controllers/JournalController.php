<?php

namespace App\Http\Controllers;

use App\Models\JournalFolder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class JournalController extends Controller
{
    public function index(Request $request)
    {
        $folders = JournalFolder::with(['journalPosts'])->where('user_id', $request->user()->id)->get();
        return Inertia::render('journal/JournalMainPage', compact(['folders']));
    }
}
