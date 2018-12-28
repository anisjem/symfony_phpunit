<?php
/**
 * Created by PhpStorm.
 * User: anis
 * Date: 28/12/18
 * Time: 18:52
 */

namespace Tests\AppBundle\Entity;

use AppBundle\Entity\Product;
//use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class ProductTest extends WebTestCase
{
    public function priceForFoodProduct()
    {
        return [
            [0, 0.0],
            [20, 1.1],
            [100, 5.5]
        ];
    }

    /**
     * @param $price
     * @param $expectedTva
     * @dataProvider priceForFoodProduct
     */
    public function testComputeTVAfoodProduct($price, $expectedTva)
    {
        $product = new Product('test product', Product::FOOD_PRODUCT,$price);
        $this->assertSame($expectedTva, $product->computeTVA());
    }


    /*    public function testComputeTVAfoodProduct()
        {
            $product = new Product('nom du produit', Product::FOOD_PRODUCT, 20);
            //$this->assertSame(1.1, $product->compteTVA());
            $this->assertSame(1.1,$product->computeTVA());
        }*/

    public function testComputeTVAOtherFood()
    {
        $product = new Product('test prod', 'notFood', 20);
        $this->assertSame(3.92, $product->computeTVA());
    }

    public function testComputeTVANegativPrice()
    {
        $product = new Product('test product', 'any type', -10);
        $this->expectException('LogicException');
        $product->computeTVA();
    }
}
