<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    // Admin Dashboard: List all menus
    public function index()
    {
        $menus = Menu::all();
        return view('admin.dashboard', compact('menus'));
    }

    // Show Create Form
    public function create()
    {
        return view('admin.form');
    }

    // Store New Menu
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'category' => 'required|in:coffee,non-coffee,snack',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('menus', 'public');
            $validated['image'] = $path;
        }

        Menu::create($validated);

        return redirect()->route('admin.dashboard')->with('success', 'Menu created successfully.');
    }

    // Show Edit Form
    public function edit(Menu $menu)
    {
        return view('admin.form', compact('menu'));
    }

    // Update Existing Menu
    public function update(Request $request, Menu $menu)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'category' => 'required|in:coffee,non-coffee,snack',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('menus', 'public');
            $validated['image'] = $path;
        }

        $menu->update($validated);

        return redirect()->route('admin.dashboard')->with('success', 'Menu updated successfully.');
    }

    // Delete Menu
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Menu deleted successfully.');
    }
}
