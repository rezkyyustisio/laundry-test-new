<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function index(): View
    {
        $user = User::latest()->paginate(10);
        return view('users.index', compact('user'));
    }
    public function create()
    {
    }
    public function store(Request $request)
    {
    }
    public function edit($id)
    {
    }
    public function update(Request $request, $id)
    {
    }
    public function destroy($id)
    {
    }
    public function show($id)
    {
        return back();
    }
}
