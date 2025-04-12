<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MemoQueue;

class MemoController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'memo_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'memo_no' => 'required|string|max:255',
        'series' => 'nullable|string|max:255',
        'to_for' => 'nullable|string|max:255',
        'from_' => 'nullable|string|max:255',
        'subject' => 'nullable|string|max:255',
        'venue' => 'nullable|string|max:255',
        'date' => 'nullable|date',
    ]);

    if ($request->hasFile('memo_image')) {
        $image = $request->file('memo_image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('image/uploads'), $imageName);
    }

    MemoQueue::create([
        'memo_image' => 'image/uploads/' . $imageName,
        'memo_no' => $request->memo_no,
        'series' => $request->series,
        'to_for' => $request->to_for,
        'from_' => $request->from, // <-- updated
        'subject' => $request->subject,
        'venue' => $request->venue,
        'date' => $request->date,
    ]);
    

    return redirect()->back()->with('memo_success', true);
}

}
