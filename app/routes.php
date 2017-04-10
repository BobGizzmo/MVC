<?php

// Home page
$app->get('/', function () use ($app) {
    $books = $app['dao.book']->findAll();
    return $app['twig']->render('index.html.twig', array('books' => $books));
})->bind('home');

//Books details with comments
$app->get('/book/{id}/{authorId}', function ($id, $authorId) use ($app) {
    $book = $app['dao.details']->findAllBybook($id, $authorId);
    return $app['twig']->render('book.html.twig', array("book" => $book));
})->bind('details');