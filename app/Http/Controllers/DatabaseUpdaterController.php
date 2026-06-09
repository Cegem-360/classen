<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Jobs\UpdateWebsiteDatabase;
use Illuminate\Http\JsonResponse;

final class DatabaseUpdaterController extends Controller
{
    public function trigger(): JsonResponse
    {

        dispatch(new UpdateWebsiteDatabase());

        return response()->json(['message' => 'Database update job has been dispatched']);
    }
}
