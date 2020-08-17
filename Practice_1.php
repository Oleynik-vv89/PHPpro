<?php

#Задание 1-4.

class Good
{
    public $id;
    protected $name;
    private $info;
    public $price;

    public function __construct(int $id, string $name, $info, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->info = $info;
        $this->price = $price;
    }
  
    public function display():
    {
        
    }

    private function getPrice()
    {
       
    }
}

final class BreadGood extends Good
{
    public $date;

    public function __construct(int $id, string $name, $info, $price, $date)
    {
        $this->date = $date;
        parent::__construct($id, $name, $info, $price);
    }

}

?>

Задание 5. 
Выведется 1234, потому-что в данном случае будут созданы два экземпляра одного класса 
и х - статическая переменная, а статические методы и свойства принадлежат классу, а не его экземплярам, соответственно каждый вызов функции foo() у разных экзепляров будет обращаться
к одной и той же переменной х.

Задание 6. 
Выведется 1122, потому-что в данном случае будут созданы два экземпляра двух разных классов, соответственно у класса А и класса В своя статисческая переменная х. каждый вызов функции foo() у разных экзепляров будет обращаться к переменной своего класса.

Задание 7. 
Выведется 1122, поскольку записи 6 и 7 заданий отличаються только скобками при создании новых
экземпляров ($a1 = new A(); $a1 = new A;). Скобки предназначены для передачи данных в
конструктор при создании нового экземляра. Оба варианта отработают правильно.

