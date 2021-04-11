<?php
declare(strict_types = 1);
require_once 'class.php';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=book;', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'SELECT * FROM book';

    $pdoStatement = $pdo->prepare($sql);
    $pdoStatement->execute();
    $books = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);


    $publicationBooks = [];

    foreach ($books as $book) {
        $className = 'Book' . ucfirst($book['type_file']);
        $publicationBooks[] = new $className ($book);
    }

} catch (PDOException $e) {
    echo $e->getMessage();
}