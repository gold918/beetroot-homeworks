<?php
declare(strict_types=1);

/*Задача 2
1) Создать класс Figure - плоская геометрическая фигура. У этого класса есть такие свойства: площадь, цвет. И константа: количество сторон.
2) Для класса Figure написать метод infoAbout(). Этот метод возвращает сообщение: "Это геометрическая фигура!".
3) От класса Figure унаследовать классы: Rectangle, Triangle, Square.
4) Добавить для Rectangle приватные свойства a,b - длины сторон.
5) Добавить для Square приватное свойство a - длина стороны.
6) Добавить для Triangle приватные свойства a, b, c - длины сторон.
7) Для каждого из классов Rectangle, Triangle, Square определить значение константы: количество сторон.
Например, для квадрата: const SIDES_COUNT = 4;
8) Создать конструкторы для классов Rectangle, Triangle, Square для инициализации значений длин сторон.
(Подсказка: принцип такой же, как и в предыдущем занятии – ООП #1).
9) Для каждого из классов Rectangle, Triangle, Square реализовать метод getArea() - подсчет площади. Методы возвращают значение площади. Подсказки ниже.
10) Для каждого из классов Rectangle, Triangle, Square переопределить метод infoAbout() так, что б он возвращал строку такого содержания: (пример для квадрата):
      "Это класс квадрата. У него 4 стороны".
      Аналогично для других классов.
Подсказка: использовать константу класса для вывода количество сторон.
11) Сделать методы infoAbout() финальными.
10) Для каждого класса Rectangle, Triangle, Square создать по 2 объекта (с передачей
значений длин сторон в конструктор).
11) Вызвать для всех объектов методы getArea(), вывести результаты*/

class Figure
{
    public const NUMB_OF_SIDES = 2;
    public $area;
    public $color;

    /**
     * infoAbout
     *
     * @return string
     */

    public static function infoAbout(): string
    {
        return 'Это геометрическая фигура!';
    }

}

class Rectangle extends Figure
{
    public const NUMB_OF_SIDES = 4;
    private $a;
    private $b;

    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * getArea
     *
     * @return int
     */

    public function getArea(): int
    {
        return $this->a * $this->b;
    }

    final public  static function infoAbout() : string
    {
        return 'Это класс прямоугольник. У него ' . self::NUMB_OF_SIDES . ' стороны';
    }
}

class Triangle extends Figure
{
    public const NUMB_OF_SIDES = 3;
    private $a;
    private $b;
    private $c;

    public function __construct(int $a, int $b, int $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    /**
     * getArea
     *
     * @return float
     */
    public function getArea(): float
    {
        $a = $this->a;
        $b = $this->b;
        $c = $this->c;
        $p = ($a + $b + $c) / 2;
        $area = ($p * ($p - $a) * ($p - $b) * ($p - $c)) ** .5;
        return round($area, 2);
    }

    final public static function infoAbout() : string
    {
        return 'Это класс треугольник. У него ' . self::NUMB_OF_SIDES . ' стороны';
    }
}

class Square extends Figure
{
    public const NUMB_OF_SIDES = 4;
    private $a;

    public function __construct(int $a)
    {
        $this->a = $a;
    }

    /**
     * getArea
     *
     * @return int
     */

    public function getArea(): int
    {
        return $this->a ** 2;
    }

    final public static function infoAbout() : string
    {
        return 'Это класс квадрат. У него ' . self::NUMB_OF_SIDES . ' стороны';
    }
}

$rectangle1 = new Rectangle(2, 6);
$rectangle2 = new Rectangle(54, 20);
$triangle1 = new Triangle(6, 4, 4);
$triangle2 = new Triangle(24, 44, 33);
$square1 = new Square(3);
$square2 = new Square(67);

$figures = [$rectangle1, $rectangle2, $triangle1, $triangle2, $square1, $square2];

foreach ($figures as $figure) {
    echo "Площадь данной геометрической фигуры: {$figure->getArea()} </br>";
}