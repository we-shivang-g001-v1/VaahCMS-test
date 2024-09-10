<?php
use VaahCms\Modules\Blog\Http\Controllers\Backend\contentsController;
/*
 * API url will be: <base-url>/public/api/blog/contents
 */
Route::group(
    [
        'prefix' => 'blog/contents',
        'namespace' => 'Backend',
    ],
function () {

    /**
     * Get Assets
     */
    Route::get('/assets', [contentsController::class, 'getAssets'])
        ->name('vh.backend.blog.api.contents.assets');
    /**
     * Get List
     */
    Route::get('/', [contentsController::class, 'getList'])
        ->name('vh.backend.blog.api.contents.list');
    /**
     * Update List
     */
    Route::match(['put', 'patch'], '/', [contentsController::class, 'updateList'])
        ->name('vh.backend.blog.api.contents.list.update');
    /**
     * Delete List
     */
    Route::delete('/', [contentsController::class, 'deleteList'])
        ->name('vh.backend.blog.api.contents.list.delete');


    /**
     * Create Item
     */
    Route::post('/', [contentsController::class, 'createItem'])
        ->name('vh.backend.blog.api.contents.create');
    /**
     * Get Item
     */
    Route::get('/{id}', [contentsController::class, 'getItem'])
        ->name('vh.backend.blog.api.contents.read');
    /**
     * Update Item
     */
    Route::match(['put', 'patch'], '/{id}', [contentsController::class, 'updateItem'])
        ->name('vh.backend.blog.api.contents.update');
    /**
     * Delete Item
     */
    Route::delete('/{id}', [contentsController::class, 'deleteItem'])
        ->name('vh.backend.blog.api.contents.delete');

    /**
     * List Actions
     */
    Route::any('/action/{action}', [contentsController::class, 'listAction'])
        ->name('vh.backend.blog.api.contents.list.action');

    /**
     * Item actions
     */
    Route::any('/{id}/action/{action}', [contentsController::class, 'itemAction'])
        ->name('vh.backend.blog.api.contents.item.action');



});
