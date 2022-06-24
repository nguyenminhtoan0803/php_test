<?php

class Food{}

class AnimalFood extends Food{

}

abstract class Animal
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function eat(AnimalFood $food){
        echo $this->name . " eats " . get_class($food);
    }

    abstract public function speak();
}

class Dog extends Animal
{
    public function speak()
    {
        echo $this->name . " barks";
    }

    public function eat(Food $food)
    {
        echo $this->name . " eats " . get_class($food);
    }
}

class Cat extends Animal
{
    public function speak()
    {
        echo $this->name . " meows";
    }
}

interface AnimalShelter
{
    public function adopt(string $name): Animal;
}

class CatShelter implements AnimalShelter
{
    public function adopt(string $name): Cat // instead of returning class type Animal, it can return class type Cat
    {
        return new Cat($name);
    }
}

class DogShelter implements AnimalShelter
{
    public function adopt(string $name): Dog // instead of returning class type Animal, it can return class type Dog
    {
        return new Dog($name);
    }
}

$kitty = (new CatShelter)->adopt("Ricky");
$catFood = new AnimalFood();
$kitty->eat($catFood);
//$kitty->speak();
echo "\n";

$doggy = (new DogShelter)->adopt("Mavrick");
$banana = new Food();
$doggy->eat($banana);
$kitty->eat($banana);
//$doggy->speak();
?>