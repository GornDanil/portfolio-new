<?php

namespace App\Repositories\Web\Abstracts;


use Illuminate\Database\Eloquent\Collection;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface PostRepository.
 *
 * @package namespace App\Repositories;
 */
interface PostRepositoryInterface extends RepositoryInterface
{

    /**
     * @return Collection
    */
    public function getPosts(): Collection;
}
