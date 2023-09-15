<?php

namespace App\Contracts;

use App\DTO\CosmologyDTO;
use Illuminate\Support\Collection;

interface CosmologyInterface
{
    public function getActivities(): Collection;

    public function getActivityById(int $id): CosmologyDTO;
}
