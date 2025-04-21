<?php

abstract class Animal
{
    protected $name;
    protected $species;
    private $age;

    public function __construct($name, $age, $species)
    {
        $this->name = $name;
        $this->age = $age;
        $this->species = $species;
    }

    public function eat($food)
    {
        echo $this->name." ест ".$food.".\n";
    }

    public function sleep($hours)
    {
        echo $this->name." спит ".$hours." часов.\n";
    }

    abstract public function makeSound();

    public function getAge()
    {
        return $this->age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSpecies()
    {
        return $this->species;
    }

    public function displayInfo()
    {
        echo "Имя: ".$this->name."\n";
        echo "Вид: ".$this->species."\n";
        echo "Возраст: ".$this->age." лет\n";
    }
}

class Cat extends Animal
{
    private $color;

    public function __construct($name, $age, $color)
    {
        parent::__construct($name, $age, "Кошка");
        $this->color = $color;
    }

    public function makeSound()
    {
        echo $this->name." говорит: Мяу!\n";
    }

    public function purr()
    {
        echo $this->name." мурлычет: Мрррр...\n";
    }

    public function displayInfo()
    {
        parent::displayInfo();
        echo "Цвет: ".$this->color."\n";
    }
}

// Демонстрация
$cat = new Cat("Мурка", 2, "серая");
$cat->makeSound();