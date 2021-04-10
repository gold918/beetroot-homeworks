<?php
/**
 * Created by PhpStorm.
 * User: Vadim
 * Date: 05.09.2018
 * Time: 19:06
 */

namespace App\Models;

use PDO;

class CRUD extends AbstractModel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function listCategories() {
        $sql = $this->connection->prepare("SELECT  ANY_VALUE(cat_name) AS cat_name, cat_code, COUNT(news_id) AS count_news FROM category LEFT JOIN news ON cat_id = news_cat_id GROUP BY cat_code ORDER BY  ANY_VALUE(cat_name)");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function crudDeleteCategory($catCode) {
        $sql = $this->connection->prepare("DELETE FROM category WHERE cat_code = :cat_code");
        $sql->bindParam(':cat_code', $catCode, PDO::PARAM_STR);
        $sql->execute();
    }

    public function modelCreateCategory($catName, $catCode) {
        $sql = $this->connection->prepare("INSERT INTO category (cat_id, cat_code, cat_name) VALUES (NULL, :cat_code, :cat_name)");
        $sql->bindParam(':cat_code', $catCode, PDO::PARAM_STR);
        $sql->bindParam(':cat_name', $catName, PDO::PARAM_STR);
        $sql->execute();
    }

    public function modelUploadCategoryName($catCode, $newCatName) {
        $sql = $this->connection->prepare("UPDATE category SET cat_name = :new_cat_name WHERE cat_code = :cat_code)");
        $sql->bindParam(':cat_code', $catCode, PDO::PARAM_STR);
        $sql->bindParam(':new_cat_name', $newCatName, PDO::PARAM_STR);
        $sql->execute();
    }
}