<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shorten; // Assuming your model name is 'Shorten'

class ShortenController extends Controller
{
    public function createShortUrl(Request $request)
    {
        // Validates the given request values
        $request->validate([
            'original_url' => 'required|url',
            'short_code' => 'required|unique:shorten|alpha_num|max:255',
        ]);

        // Create a new Shorten model value
        $shorten = new Shorten();
        $shorten->original_url = $request->input('original_url');
        $shorten->short_code = $request->input('short_code');
        
        // Save the model to the Database
        $shorten->save();

        return response()->json(['message' => 'Short URL created successfully', 'data' => $shorten], 201);
    }
    public function findOriginalUrl($shortCode)
    {
        // Search the database for the original URL based on the short code
        $shorten = Shorten::where('short_code', $shortCode)->first();

        if ($shorten) {
            // Redirect the user to the original URL
            return redirect()->to($shorten->original_url);
        } else {
            // Handle the case when the short code is not found
            return response()->json(['error' => 'Short code not found'], 404);
        }
    }
}