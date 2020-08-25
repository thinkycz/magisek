<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push(__('global.home'), route('home'));
});

// Home > Categories
Breadcrumbs::for('categories', function ($trail) {
    $trail->parent('home');
    $trail->push(__('global.all_categories'), route('categories.index'));
});

// Home > Categories > [Category]
Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('categories');
    $trail->push($category->name, route('categories.show', $category));
});

// Home > Categories > [Category] > Product
Breadcrumbs::for('product', function ($trail, $product) {
    $trail->parent('category', $product->categories->first());
    $trail->push($product->name, route('products.show', $product));
});
