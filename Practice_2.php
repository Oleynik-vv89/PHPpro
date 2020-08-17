<?php
	abstract class AbstractProduct{

        protected $name;
        public $sellPrice;
        protected $purchasePrice;
//
        protected function __construct($name, $purchasePrice, $sellPrice) {
        $this->name = $name;
        $this->purchasePrice = $purchasePrice;
        $this->sellPrice = $sellPrice;
    }

		abstract protected function getPrice();
		abstract protected function getProfit();
	}

    class digitalProduct extends AbstractProduct {

		function __construct($name, $purchasePrice, $sellPrice) {
            parent::__construct($name, $purchasePrice, $sellPrice);
		}

		function getPrice() {
			return $this->sellPrice;
		}
		function getProfit() {
			return $profit = ( $this->sellPrice - $this->purchasePrice );
		}
		function getInfo() {
			$i = "Название: {$this->name}; ";
			$i.= "Цена закупки {$this->purchasePrice} руб.; ";
			$i.= "Цена продажи {$this->sellPrice} руб.; ";
			$i.= "Доход с продажи: {$this->getProfit()} руб.";
			$i.= "</br>";
			return $i;
		}
	}

	class physicalProduct extends digitalProduct {
		function __construct($name, $purchasePrice, $sellPrice) {
			parent::__construct($name, $purchasePrice, $sellPrice);
		}
        function getPrice() {
            return $this->sellPrice;
        }
        function getProfit() {
            return $profit = ( $this->sellPrice - $this->purchasePrice );
        }
	}

	class productByWeight extends digitalProduct {
		protected $quantity;

		function __construct($name, $purchasePrice, $sellPrice, $quantity) {
			parent::__construct($name, $purchasePrice, $sellPrice);
			$this->quantity = $quantity;
		}
		function getProfit() {
			return $profit = ( $this->sellPrice - $this->purchasePrice) * $this->quantity;
		}
	}

	$digital = new digitalProduct( "Цифровой товар", 1500, 3500);
	$physical = new physicalProduct ("Штучный физический товар", 1500, $digital->sellPrice * 2);
	$product = new productByWeight("Весовой товар", 1350, 1850, 10);
	echo $digital->getInfo();
	echo $physical->getInfo();
	echo $product->getInfo();
