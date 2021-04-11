<?php
declare(strict_types = 1);

abstract class Book
{
    protected $id;
    protected $author;
    protected $title;
    protected $pathFile;
    protected $typeFile;
    protected $sortOrder;

    public function __construct(array $row)
    {
        $this->id = $row['id'];
        $this->author = $row['author'];
        $this->title = $row['title'];
        $this->pathFile = $row['path_file'];
        $this->typeFile = $row['type_file'];
        $this->sortOrder = $row['sort_order'];
    }

    abstract function printInfo ();
}

class BookPdf extends Book
{
    public function printInfo()
    {
        echo '<p style="display: flex; align-items: center">';
            echo '<img style="margin-right:20px" width="50px" src="img/' . $this->typeFile . '.png" alt="pdf">';
            echo '<a style="text-decoration:none" href="' . $this->pathFile . '">' . $this->author .', «' . $this->title . '»</a>';
        echo '</p>';
    }
}

class BookDocx extends Book
{
    public function printInfo()
    {
        echo '<p style="display: flex; align-items: center">';
            echo '<img style="margin-right:20px" width="50px" src="img/' . $this->typeFile . '.png" alt="pdf">';
            echo '<a style="text-decoration:none" href="' . $this->pathFile . '">' . $this->author .', «' . $this->title . '»</a>';
        echo '</p>';
    }
}

class BookTxt extends Book
{
    public function printInfo()
    {
        echo '<p style="display: flex; align-items: center">';
            echo '<img style="margin-right:20px" width="50px" src="img/' . $this->typeFile . '.png" alt="pdf">';
            echo '<a style="text-decoration:none" href="' . $this->pathFile . '">' . $this->author .', «' . $this->title . '»</a>';
        echo '</p>';
    }
}

