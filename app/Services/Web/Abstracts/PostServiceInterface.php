<?php

namespace App\Services\Web\Abstracts;



use Illuminate\Database\Eloquent\Collection;

interface PostServiceInterface
{
    /**
     * @return Collection
    */
    public function getPosts(): Collection;
}
