<?php

use VaahCms\Modules\Blog\Http\Controllers\Backend\contentsController;

Route::group(
    [
        'prefix' => 'backend/blog/contents',
        
        'middleware' => ['web', 'has.backend.access'],
        
],
function () {
    /**
     * Get Assets
     */
    Route::get('/assets', [contentsController::class, 'getAssets'])
        ->name('vh.backend.blog.contents.assets');
    /**
     * Get List
     */
    Route::get('/', [contentsController::class, 'getList'])
        ->name('vh.backend.blog.contents.list');
    /**
     * Update List
     */
    Route::match(['put', 'patch'], '/', [contentsController::class, 'updateList'])
        ->name('vh.backend.blog.contents.list.update');
    /**
     * Delete List
     */
    Route::delete('/', [contentsController::class, 'deleteList'])
        ->name('vh.backend.blog.contents.list.delete');


    /**
     * Fill Form Inputs
     */
    Route::any('/fill', [contentsController::class, 'fillItem'])
        ->name('vh.backend.blog.contents.fill');

    /**
     * Create Item
     */
    Route::post('/', [contentsController::class, 'createItem'])
        ->name('vh.backend.blog.contents.create');
    /**
     * Get Item
     */
    Route::get('/{id}', [contentsController::class, 'getItem'])
        ->name('vh.backend.blog.contents.read');
    /**
     * Update Item
     */
    Route::match(['put', 'patch'], '/{id}', [contentsController::class, 'updateItem'])
        ->name('vh.backend.blog.contents.update');
    /**
     * Delete Item
     */
    Route::delete('/{id}', [contentsController::class, 'deleteItem'])
        ->name('vh.backend.blog.contents.delete');

    /**
     * List Actions
     */
    Route::any('/action/{action}', [contentsController::class, 'listAction'])
        ->name('vh.backend.blog.contents.list.actions');

    /**
     * Item actions
     */
    Route::any('/{id}/action/{action}', [contentsController::class, 'itemAction'])
        ->name('vh.backend.blog.contents.item.action');

    //---------------------------------------------------------

});
