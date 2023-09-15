<?php

namespace App\DTO;

class CosmologyDTO
{
    public function __construct(
        public int $id,
        public string $title,
        public string $content,
        public string $organisation,
        public ?string $telescope,
        public string $creationDate,
    ) {
    }
}
