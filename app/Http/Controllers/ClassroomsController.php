<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ClassroomsController extends Controller
{
    public function index(Request $request): Renderable
    {
        return view();
    }

    public function store(): RedirectResponse
    {
        return redirect();
    }

    public function create(): Renderable
    {
        return view();
    }

    public function show(): Renderable
    {
        return view();
    }

    public function edit(): Renderable
    {
        return view();
    }

    public function update(): RedirectResponse
    {
        return redirect();
    }

    public function destroy(): RedirectResponse
    {
        return redirect();
    }
}
