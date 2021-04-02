<?php
declare(strict_types = 1);

/*Задача 1 На основе урока из PHPSTART
Используем класс Car c видео урока
1) Добавить классу 3 свойства на свое усмотрение (например: количество дверей, стоимость, ...). Одному из свойств присвоить значение по умолчанию.
2) Создать 4 объекта класса Car.
3) Для двух объектов задать значения свойств, используя обращение к свойству (например,
    $car1>price).
4) Для двух оставшихся задать свойства используя конструктор (написать констуктор для
инициализации объекта).
5) Написать функцию fuelСonsumption() для расчета количества топлива, затраченного на поездку на заданную дистанцию. Используйте свойство объекта $fuel (расход топлива на 100 км). Задача похожа на пример из занятия.
6) Добавить в класс 3 числовых константы (со значениями, например, 2,5,12). Распечатать значения констант в коде программы (вне класса).
7) Добавить статический метод getMaxConstant(). Этот метод находит наибольшую из констант класса и возвращает её значение. Не забывайте, что статические методы принадлежат классу, и вызываются из контекста класса.*/

class Car
{
    public const NUMB1  = 2;
    public const NUMB2  = 5;
    public const NUMB3  = 12;

    /**
     * getMaxConstant
     *
     * @return int
     */

    public static function getMaxConstant() : int
    {
        return max(self::NUMB1, self::NUMB2, self::NUMB3);
    }

    public $price = 30000;
    public $horsePower;
    public $brandCar;
    private $fuel;

    public function __construct(int $horsePower, string $brandCar, int $price = 30000, int $fuel = 5)
    {
        $this->brandCar = $brandCar;
        $this->horsePower = $horsePower;
        $this->price = $price;
        $this->fuel = $fuel;
    }

    /**
     * fuelConsumption - calculation of the amount of fuel spent on a trip for a given distance;
     *
     * @param int $distance
     * @return float
     */

    function fuelConsumption (int $distance) : float
    {
        return $distance / 100 * $this->fuel;
    }
}

/*$car1 = new Car ();
$car1->price = 40000;
$car1->horsePower = 600;
$car1->brandCar = 'BMW';

$car2 = new Car ();
$car2->price = 50000;
$car2->horsePower = 700;
$car2->brandCar = 'Mercedes-Benz';*/

$car3 = new Car (400, 'Mitsubishi', 33900);
$car4 = new Car (430, 'Peugeot', 37000, 4);

//var_dump($car1, $car2);
var_dump($car3, $car4);

echo "Количества топлива, затраченного на поездку, литр: {$car4->fuelConsumption(303)} </br>";

var_dump(Car::NUMB1, Car::NUMB2, Car::NUMB3);

var_dump(Car::getMaxConstant());
