<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $status = Status::with('user')->latest()->get();
        return response([
            'status' => $status
        ]);
    }
}
