<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 19.08.2018
 * Time: 13:00
 */

namespace App\Controllers;

use App\Services\CategoriesService;
use App\Services\NewsService;

class NewsController extends Controller
{
    private NewsService $newsService;
    private CategoriesService $categoriesService;

    function __construct()
    {
        parent::__construct();                                          // вызываем констракт-метод родителя, в котором создаётся объект View
        $this->newsService = new NewsService();
        $this->categoriesService = new CategoriesService();
    }

    public function index($category = NULL)
    {                     // экшн для отображения всех новостей или по категориям
        try {
            if ($category == NULL) {
                $result = $this->newsService->getNewslist();              // если категория не задана, то получаем все новости
            } else {
                $result = $this->newsService->getCategoryNews($category); // если есть категория, то получаем новости по категории
            }

            $lastNews = $this->newsService->getLastNews();                // получаем последние новости для правого сайдбара

            $this->view->news = $result;
            $this->view->lastNews = $lastNews;
            $this->view->categories = $this->categoriesService->getCategories();

            $this->view->generate('template_view.phtml', 'news/index.phtml'); // формируем вьюшку

        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return true;
    }

    public function detail($newsCode)
    {                            // экшн для отображения детальной новости
        $this->view->detailNews = $this->newsService->getNewsByCode($newsCode); // получаем строку новости по пришедшему в параметр newsId
        $this->view->lastNews = $this->newsService->getLastNews();          // получаем последние новости для правого сайдбара
        $this->view->categories = $this->categoriesService->getCategories();// получаем категории для блока категорий

        $this->newsService->setNewsViews($newsCode);                   // прибавляем единицу к полю счётчика просмотров новости

        $this->view->newsComments = $this->newsService->getNewsComments($newsCode);

        $this->view->generate('template_view.phtml', 'news/detail.phtml');

        return true;
    }

}

?>