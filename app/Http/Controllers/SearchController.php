<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Get the search query from the form input
        $query = $request->input('query');

        // Perform the search using the model (replace 'column_name' with your actual column)
        $results = Contact::where('name', 'LIKE', "%{$query}%")->get();

        //Return the search results to a view 
        return view('search-results', compact('results'));
    }
}
