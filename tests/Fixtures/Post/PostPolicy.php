<?php

namespace Binaryk\LaravelRestify\Tests\Fixtures\Post;

use Binaryk\LaravelRestify\Tests\Fixtures\User\User;

class PostPolicy
{
    /**
     * Determine if the given user can use repository.
     *
     * @param User|null $user
     * @return bool|mixed
     */
    public function allowRestify($user = null)
    {
        return $_SERVER['restify.post.allowRestify'] ?? true;
    }

    /**
     * Determine if post can be show.
     */
    public function show($user = null)
    {
        return $_SERVER['restify.post.show'] ?? true;
    }

    /**
     * Determine if posts can be created.
     */
    public function store($user = null)
    {
        return $_SERVER['restify.post.store'] ?? true;
    }

    /**
     * Determine if posts can be stored bulk.
     */
    public function storeBulk($user)
    {
        return $_SERVER['restify.post.storeBulk'] ?? true;
    }

    public function update($user, $post)
    {
        return $_SERVER['restify.post.update'] ?? true;
    }

    public function deleteBulk($user, $post)
    {
        return $_SERVER['restify.post.deleteBulk'] ?? true;
    }

    public function delete($user, $post)
    {
        return $_SERVER['restify.post.delete'] ?? true;
    }

    public function attachUser(object $user = null, $post, $userToAttach)
    {
        return $_SERVER['restify.post.allowAttachUser'] ?? true;
    }
}
