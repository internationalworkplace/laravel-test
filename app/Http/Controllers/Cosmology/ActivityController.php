<?php

namespace App\Http\Controllers\Cosmology;

use App\Contracts\CosmologyInterface;
use App\Http\Controllers\Controller;
use App\Services\ArcSecondService;
use Illuminate\Http\JsonResponse;

class ActivityController extends Controller
{
    public function __invoke(int $id): JsonResponse
    {
        $activities = resolve(CosmologyInterface::class)
            ->getActivityById($id);

        return response()->json([
            'data' => $activities,
        ]);
    }
}
