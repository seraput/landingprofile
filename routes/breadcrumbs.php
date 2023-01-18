<?php // routes/breadcrumbs.php
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('dashboard', route('dashboard'));
});

// Home > Blog
Breadcrumbs::for('master', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Blog', route('master'));
});

// Home > Blog > [Category]
Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category));
});