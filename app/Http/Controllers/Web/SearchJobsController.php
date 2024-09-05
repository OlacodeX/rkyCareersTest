<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

class SearchJobsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'location' => ['sometimes', 'required', 'string'],
            'category' => ['sometimes', 'required', 'string'],
        ]);
        
        $query_params = null;
        if (count(array_filter($request->all())) > 0) {
            foreach ($request->all() as $key => $value) {
                if (!$query_params) {
                    $query_params = "$key=$value";
                }else{
                    $query_params .= "&$key=$value";
                }
            }
        }

        $req = $query_params ? $request->create('/api/jobs?'.$query_params, 'GET') : $request->create('/api/jobs', 'GET');
        try {
           $response = Route::dispatch($req);
        } catch (\Throwable $th) {
            return ;
        }
        $data = [
            'jobs' => $response->getData()->data,
            'links' => $response->getData()->links,
        ];
        return view('jobs.search', $data);
    }
}
