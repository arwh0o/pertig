<?php

namespace App\Http\Controllers;

use App\Models\GalleryLink;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        // List upcoming or recent dates for admin management
        $links = GalleryLink::orderBy('photo_date', 'desc')->get();
        return view('admin.gallery.index', compact('links'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo_date' => 'required|date',
            'drive_url' => 'required|url',
        ]);

        // Update if exists, or create new
        GalleryLink::updateOrCreate(
            ['photo_date' => $request->photo_date],
            ['drive_url' => $request->drive_url]
        );

        return redirect()->route('gallery.index')->with('success', 'Link berhasil disimpan!');
    }

    public function destroy(GalleryLink $galleryLink)
    {
        $galleryLink->delete();
        return redirect()->route('gallery.index')->with('success', 'Link berhasil dihapus.');
    }
}
