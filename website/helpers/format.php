<?php
    class Format {
        public function textShorten($text, $limit = 400) {
            $text = $text.' ';
            $text = substr($text, 0, $limit);
            $text = substr($text, 0, strrpos($text, ' '));
            $text = $text.'.....';
            return $text;
        }

        public function price($priceFloat) {
            $symbol = 'đ';
            $symbol_thousand = '.';
            $decimal_place = 0;
            $price = number_format($priceFloat, $decimal_place, '', $symbol_thousand);
            return $price.$symbol;
        }
    }
?>