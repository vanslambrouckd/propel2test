<?php
require 'setup.php';

$author = new Author();
$author->setFirstName('david');
$author->setLastName('vansl');
$author->save();

$book = new Book();
$book->setTitle('war en peace');
$book->setAuthor($author);
$book->save();