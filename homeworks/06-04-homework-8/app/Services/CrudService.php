<?php

namespace App\Services;

use App\Models\CRUD;

class CrudService
{
    private CRUD $categoriesCRUD;

    public function __construct()
    {
        $this->categoriesCRUD = new CRUD();
    }

    public function getCategories() {
        return $this->categoriesCRUD->listCategories();
    }

    public function serviceDelCategory($catCode) {
        $this->categoriesCRUD->crudDeleteCategory($catCode);
    }

    public function serviceCreateCategory($cat_name, $cat_code) {
        $this->categoriesCRUD->modelCreateCategory($cat_name, $cat_code);
    }

    public function serviceUploadCategoryName($catCode, $newCatName) {
        return $this->categoriesCRUD->modelUploadCategoryName($catCode, $newCatName);
    }
    public function serviceUploadCategoryCode($catCode, $newCatCode) {
        return $this->categoriesCRUD->modelUploadCategoryCode($catCode, $newCatCode);
    }
}