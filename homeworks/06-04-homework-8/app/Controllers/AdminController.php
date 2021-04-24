<?php


namespace App\Controllers;

use App\Services\CrudService;

class AdminController extends Controller
{
    private CrudService $crudCategory;

    public function __construct()
    {
        parent::__construct();
        $this->crudCategory = new CrudService();
    }

    public function allCategory()
    {
        try {
            $this->view->categories = $this->crudCategory->getCategories();
            $this->view->serialNumber = 1;
            $this->view->generate('admin_template_view.phtml', 'admin/crud.phtml');
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    public function deleteCategory($catCode)
    {
        try {
           $this->crudCategory->serviceDelCategory($catCode);
            header('Location: /admin');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    private function filterData($value = "")
    {                               // очистка пришедших данных от ненужных символов
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);

        return $value;
    }

    public function createCategory()
    {
        try {
            if (isset($_POST['cat_submit']) && isset($_POST['cat_name']) && isset($_POST['cat_code'])) {
                $_POST['cat_name'] = $this->filterData($_POST['cat_name']);
                $_POST['cat_code'] = $this->filterData($_POST['cat_code']);

                $this->crudCategory->serviceCreateCategory($_POST['cat_name'], $_POST['cat_code']);
                header('Location: /admin');
            } else {
                header('Location: ' . $_SERVER['HTTP_REFERER']);                             // если форма не пришла или не со всеми данными, то ставим флаг false
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    public function messageCreateCategory()
    {
        try {
            $this->view->generate('admin_template_view.phtml', 'admin/updateMessage.phtml');
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    public function uploadCategory($catCode)
    {
        try {
            if (isset($_POST['upload-submit']) && isset($_POST['cat_name'])) {

                $_POST['cat_name'] = $this->filterData($_POST['cat_name']);

                $this->crudCategory->serviceUploadCategoryName($catCode, $_POST['cat_name']);
                header('Location: /admin');
            } elseif (isset($_POST['upload-submit']) && isset($_POST['cat_code'])) {
                $_POST['cat_code'] = $this->filterData($_POST['cat_code']);

                $this->crudCategory->serviceUploadCategoryCode($catCode, $_POST['cat_code']);
                header('Location: /admin');
            } else {
                header('Location: ' . $_SERVER['HTTP_REFERER']);                             // если форма не пришла или не со всеми данными, то ставим флаг false
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }


}