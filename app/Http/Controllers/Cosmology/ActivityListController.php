<?php

namespace App\Http\Controllers\Cosmology;

use App\Contracts\CosmologyInterface;
use App\Http\Controllers\Controller;
use App\Services\ArcSecondService;
use Illuminate\Http\JsonResponse;

class ActivityListController extends Controller
{
    public function __invoke(): JsonResponse
    {
        $activities = resolve(CosmologyInterface::class)
            ->getActivities();

        return response()->json([
            'data' => $activities,
        ]);
    }
}
