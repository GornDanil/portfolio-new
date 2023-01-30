<?php

namespace App\Services\Web;
use App\Repositories\Web\Abstracts\PostRepositoryInterface;
use App\Services\Web\Abstracts\PostServiceInterface;
use Illuminate\Database\Eloquent\Collection;

class PostService implements PostServiceInterface
{
    public function __construct(
        public PostRepositoryInterface $repository
    )
    {
    }

    /**
     * @inheritDoc
     */
    public function getPosts(): Collection{
        return $this->repository->getPosts();
    }

}
