<?php

namespace App\Http\Controllers;

use App\Services\Web\Abstracts\PostServiceInterface;

class PostController extends Controller
{
    /**
     * @param PostServiceInterface $service
     */
    public function __construct(
        public PostServiceInterface $service,
    )
    {
    }

    public function index() {
        return view('home', ['posts' => $this->service->getPosts()]);
    }


}
