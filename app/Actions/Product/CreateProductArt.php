<?php

namespace App\Actions\Product;

use function str;

class CreateProductArt
{
   public function __invoke($productType, $productId): string
   {
      $template = "%s%03d-%s";
      // BT034-170423
      // BT = Bracelet, first and last letter in singular
      // 034 = Product id
      // 170423 = Current Date 17.04.2023
      $singularUppercaseForm = str($productType)->singular()->upper();
      $getFirstAndLastLetters = substr($singularUppercaseForm, 0, 1) . substr($singularUppercaseForm, -1, 1);
      $productType = $getFirstAndLastLetters;

      return sprintf($template, $productType, $productId, date('dmy'));
   }
}