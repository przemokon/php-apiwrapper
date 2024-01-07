<?php

namespace Prz\Apiwrapper\Models;

use Prz\Apiwrapper\Request;

class Post
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function getPosts()
    {
        return $this->request->get('posts');
    }

    public function getPostComments(int $postId)
    {
        return $this->request->get('posts/' . $postId . '/comments');
    }

    public function getPostWithComments(int $postId)
    {
        $post = $this->request->get('posts/' . $postId);

        $comments = $this->getPostComments($postId);

        $post['comments'] = $comments;

        return $post;
    }
}