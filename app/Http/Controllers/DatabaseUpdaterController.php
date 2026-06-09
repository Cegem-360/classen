<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Jobs\UpdateWebsiteDatabase;

final class DatabaseUpdaterController extends Controller
{
    public function trigger()
    {

        dispatch(new UpdateWebsiteDatabase());

        return response()->json(['message' => 'Database update job has been dispatched']);
    }
}
