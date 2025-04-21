<?php
// Абстрактный класс Animal
abstract class Animal
{
    protected $name;
    protected $species;

    private $age;

    public function __construct(string $name, int $age, string $species)
    {
        $this->name = $name;
        $this->age = $age;
        $this->species = $species;
    }

    // Общие методы для всех животных
    public function eat(string $food): void
    {
        echo $this->name . " ест " . $food . ".\n";
    }

    public function sleep(int $hours): void
    {
        echo $this->name . " спит " . $hours . " часов.\n";
    }

    abstract public function makeSound(): void;

    // Методы для работы с приватными свойствами
    public function getAge(): int
    {
        return $this->age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSpecies(): string
    {
        return $this->species;
    }

    // Общий метод для вывода информации о животном
    public function displayInfo(): void
    {
        echo "Имя: " . $this->name . "\n";
        echo "Вид: " . $this->species . "\n";
        echo "Возраст: " . $this->age . " лет\n";
    }
}

// Класс Cat (наследуется от Animal)
class Cat extends Animal
{
    private $color;

    public function __construct(string $name, int $age, string $color)
    {
        parent::__construct($name, $age, "Кошка");
        $this->color = $color;
    }

    public function makeSound(): void
    {
        echo $this->name . " говорит: Мяу!\n";
    }

    public function purr(): void
    {
        echo $this->name . " мурлычет: Мрррр...\n";
    }

    public function displayInfo(): void
    {
        parent::displayInfo();
        echo "Цвет: " . $this->color . "\n";
    }
}

// Класс Dog (наследуется от Animal)
class Dog extends Animal
{
    private $breed;

    public function __construct(string $name, int $age, string $breed)
    {
        parent::__construct($name, $age, "Собака");
        $this->breed = $breed;
    }

    public function makeSound(): void
    {
        echo $this->name . " лает: Гав-гав!\n";
    }

    public function wagTail(): void
    {
        echo $this->name . " виляет хвостом.\n";
    }

    public function displayInfo(): void
    {
        parent::displayInfo();
        echo "Порода: " . $this->breed . "\n";
    }
}

// Класс Bird (наследуется от Animal)
class Bird extends Animal
{
    private $wingspan;

    public function __construct(string $name, int $age, float $wingspan)
    {
        parent::__construct($name, $age, "Птица");
        $this->wingspan = $wingspan;
    }

    public function makeSound(): void
    {
        echo $this->name . " поет: Чик-чирик!\n";
    }

    public function fly(): void
    {
        echo $this->name . " летает с размахом крыльев " . $this->wingspan . " см.\n";
    }

    public function displayInfo(): void
    {
        parent::displayInfo();
        echo "Размах крыльев: " . $this->wingspan . " см\n";
    }
}

// Демонстрация работы классов

// Создаем массив животных
$animals = [
    new Cat("Барсик", 3, "рыжий"),
    new Dog("Рекс", 5, "овчарка"),
    new Bird("Кеша", 2, 25.5),
    new Cat("Мурка", 2, "серая"),
    new Dog("Бобик", 7, "дворняжка")
];

// Демонстрация полиморфизма
foreach ($animals as $animal) {
    echo "\n=== " . $animal->getName() . " (" . $animal->getSpecies() . ") ===\n";
    $animal->displayInfo();
    $animal->eat("корм");
    $animal->sleep(8);
    $animal->makeSound(); // Полиморфизм - каждый тип животного издает свой звук

    // Вызов специфических методов для каждого класса
    if ($animal instanceof Cat) {
        $animal->purr();
    } elseif ($animal instanceof Dog) {
        $animal->wagTail();
    } elseif ($animal instanceof Bird) {
        $animal->fly();
    }
}

echo "\n=== Работа с отдельными животными ===\n";

// Работа с конкретными животными
$myCat = new Cat("Васька", 4, "черный");
$myCat->eat("рыбу");
$myCat->makeSound();
$myCat->purr();

$myDog = new Dog("Шарик", 6, "лабрадор");
$myDog->sleep(10);
$myDog->makeSound();
$myDog->wagTail();
