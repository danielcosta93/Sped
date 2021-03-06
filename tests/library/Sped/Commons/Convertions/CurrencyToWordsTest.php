<?php

namespace Sped\Commons\Convertions;

/**
 * Test class for CurrencyInWords.
 * Generated by PHPUnit on 2012-08-02 at 08:56:29.
 */
class CurrencyToWordsTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var CurrencyInWords
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new CurrencyToWords;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
     * @todo Implement testToWords().
     */
    public function testToWordsBy1000()
    {
        $i = 1;
        $coeficiente = 10;
        while ($i < 10000000) {
            var_dump($i . ' = ' . $this->object->setValue($i)->toWords());
            $i = $i * $coeficiente;
        }
    }

    /**
     * @todo Implement testToWords().
     */
    public function testToWordsUntil1000WithCents()
    {
        $j = 0;
        for ($i = 200; $i <= 300; $i++) {
            if (++$j > 9)
                $j = 0;
            $i = $i + ($j * 0.001);
            $toWords = new CurrencyToWords($i);
            var_dump($i . ' = ' . $toWords->toWords());
        }
    }

}

?>
