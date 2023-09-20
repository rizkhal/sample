<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\TestResource;
use App\Models\User;
use Illuminate\Support\Facades\Response;

class TestController extends Controller
{
    public function map()
    {
        $data = config('dummy.data');

        return TestResource::make($data);
    }

    public function relation(Request $request)
    {
        $user = User::query()->whereEmail('test@example.com')->first();

        $roles = $user->roles()->with('roleType')->get();

        return Response::make([
            'data' => [
                'user' => $user,
                'roles' => $roles,
            ],
        ], 200);
    }
}
