<?php

use Prz\Apiwrapper\Models\Comment;
use Prz\Apiwrapper\Models\Post;
use Prz\Apiwrapper\Request;

require './vendor/autoload.php';

$request = new Request();
$post = new Post($request);
$postWithComments = $post->getPostWithComments(1);
dump($postWithComments);