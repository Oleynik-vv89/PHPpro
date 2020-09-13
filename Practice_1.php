<?php

#Задание 1-4.

class PriceTag
{
    public $id;
    protected $nameGood;
    public $price;

    public function __construct($id, $nameGood, $price)
    {
        $this->id = $id;
        $this->nameGood = $nameGood;
        $this->price = $price;
    }
  
    public function display() {
	$i = "Название товара: {$this->nameGood}; ";
	$i.= "Цена товара: {$this->price} руб.; ";
	$i.= "Артикул {$this->id}; ";
	$i.= "</br>";
	return $i;
    }

    function getPrice() 
    {
	return $this->Price;
    }
}

class Discount extends PriceTag
{
    public $newPrice;

    public function __construct($id, $nameGood, $price, $newPrice)
    {
        $this->newPrice = $newPrice;
        parent::__construct($id, $nameGood, $price);
    }
    
    function getDiscountAmount() 
    {
	return $discountAmount = ($this->price - $this->newPrice);
    }

public function display() {
	$i = "Название товара: {$this->nameGood}; ";
	$i.= "Цена товара: {$this->newPrice} руб.; ";
	$i.= "Старая цена: {$this->price} руб.; ";
	$i.= "Скидка : {$this->getDiscountAmount()} руб.; ";
	$i.= "Артикул {$this->id}; ";
	$i.= "</br>";
	return $i;
    }
}

$price = new PriceTag(12548, "Книга", 2500);
$sale = new Discount(25483, "Книга", 2500, 1500);
echo $price->display();
echo $sale->display();
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

