<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    // Public: Store feedback
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Feedback::create($request->all());

        return redirect()->back()->with('success', 'Terima kasih atas saran dan masukan Anda!');
    }

    // Admin: List all feedbacks
    public function index()
    {
        $feedbacks = Feedback::latest()->get();
        return view('admin.feedbacks.index', compact('feedbacks'));
    }

    // Admin: Delete feedback
    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        return redirect()->route('admin.feedbacks.index')->with('success', 'Feedback berhasil dihapus.');
    }
}
