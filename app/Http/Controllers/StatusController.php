<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StatusController extends Controller
{
    public function index()
    {
        $status = Status::with('user')->latest()->get();
        return response([
            'status' => $status
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'body' => 'required'
        ]);

        $user = User::find(1);

        $status = $user->statuses()->create(['body' => $request->body]);

        return $status->load('user');
    }
}
