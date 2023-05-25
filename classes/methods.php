<?php 
    interface PaymentInterface {
        public function payNow();
    }


    class Paypal implements PaymentInterface{
        public function loginFirst() {
            echo "Logado <br>";
        }
        public function payNow() {
            echo "Paypal";
        }
        public function paymentProcess() {
            $a = $this->loginFirst();
            echo $a;
            $this->payNow();
        }

    }

    class Visa implements PaymentInterface{
        public function payNow() {
            echo "Visa";
        }
        public function paymentProcess() {
            $this->payNow();
        }
    }

    class Cash implements PaymentInterface{
        public function payNow() {
            echo "cash";
        }
        public function paymentProcess() {
            $this->payNow();
        }
    }

    class BuyProduct {
        public function pay(PaymentInterface $paymentType) {
            $paymentType->paymentProcess();
        }
    }

$paymentType = new Paypal();
$BuyProduct = new BuyProduct();
$BuyProduct->pay($paymentType);