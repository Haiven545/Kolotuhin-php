<?php

declare(strict_types=1);


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

    public function eat(string $food): void
    {
        echo $this->name . ' ест ' . $food . ".\n";
    }

    public function sleep(int $hours): void
    {
        echo $this->name . ' спит ' . $hours . " часов.\n";
    }

    abstract public function makeSound(): void;

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

    public function displayInfo(): void
    {
        echo 'Имя: ' . $this->name . "\n";
        echo 'Вид: ' . $this->species . "\n";
        echo 'Возраст: ' . $this->age . " лет\n";
    }
}

class Cat extends Animal
{
    private $color;

    public function __construct(string $name, int $age, string $color)
    {
        parent::__construct($name, $age, 'Кошка');
        $this->color = $color;
    }

    public function makeSound(): void
    {
        echo $this->name . ' говорит: Мяу!' . "\n";
    }

    public function purr(): void
    {
        echo $this->name . ' мурлычет: Мрррр...' . "\n";
    }

    public function displayInfo(): void
    {
        parent::displayInfo();
        echo 'Цвет: ' . $this->color . "\n";
    }
}

$cat = new Cat('Мурка', 2, 'серая');
$cat->makeSound();
