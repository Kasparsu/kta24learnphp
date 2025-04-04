<?php

use App\Controllers\PostsController;
use App\Controllers\PublicController;
use App\Router;

Router::get('/', [PublicController::class, 'index']);
Router::get('/us', [PublicController::class, 'us']);
Router::get('/form', [PublicController::class, 'form']);
Router::post('/formanswer', [PublicController::class, 'answer']);
Router::get('/formanswer', [PublicController::class, 'getAnswer']);

Router::get('/admin/posts', [PostsController::class, 'index']);
Router::get('/admin/posts/create', [PostsController::class, 'create']);
Router::post('/admin/posts', [PostsController::class, 'store']);
Router::get('/admin/posts/edit', [PostsController::class, 'edit']);
Router::post('/admin/posts/edit', [PostsController::class, 'update']);
Router::get('/admin/posts/show', [PostsController::class, 'show']);
Router::get('/admin/posts/delete', [PostsController::class, 'destroy']);