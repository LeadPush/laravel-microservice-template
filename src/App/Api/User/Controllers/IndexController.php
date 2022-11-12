<?php

namespace App\Api\User\Controllers;

use App\Api\User\Resources\UserResource;
use Illuminate\Http\Request;

class IndexController
{
    public function __invoke(
        Request $request
    ): UserResource {
        return new UserResource($request->user());
    }
}
