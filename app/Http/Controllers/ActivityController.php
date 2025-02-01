<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Update the last_activity timestamp.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request)
    {
        if ($request->ajax()) {
            // Update the last_activity session variable
            session(['last_activity' => time()]);

            return response()->json(['status' => 'success']);
        }

        return response()->json(['status' => 'failed'], 400);
    }
}
