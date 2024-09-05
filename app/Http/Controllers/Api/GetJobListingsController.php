<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\JobListingResource;
use App\Models\JobListing;
use Illuminate\Http\Request;

class GetJobListingsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'location' => ['sometimes', 'required', 'string'],
            'category' => ['sometimes', 'required', 'string'],
            'title' => ['sometimes', 'required', 'string'],
        ]);

        $query = JobListing::query();

        $query->when($request->location, function($q) use($request) {
            return $q->where('location', $request->location);
        });

        $query->when($request->title, function($q) use($request) {
            return $q->where('title', 'like', '%'.$request->title.'%');
        });

        $query->when($request->category, function($q) use($request) {
            return $q->where('category', $request->category);
        });

        $jobs = $query->paginate(3);

        return JobListingResource::collection($jobs);
    }
}
