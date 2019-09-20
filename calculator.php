<?php
    class Calculator {
        private $first;
        private $second;

        public function checkOperator($operator) {
            switch($operator)
            {
                case '+':
                return $this->first + $this->second;
                break;

                case '-':
                return $this->first - $this->second;
                break;

                case '*':
                return $this->first * $this->second;
                break;

                case '/':
                return $this->first / $this->second;
                break;

                default:
                return "Sorry";
            }
        }
        public function getResult($a, $b, $c) {
            $this->first = $a;
            $this->second = $b;
            return $this->checkOperator($c);
        }
    }
?>
