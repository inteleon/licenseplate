<?php

use Inteleon\LicensePlates\SwedishLicensePlate;

class SwedishLicensePlateTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function getLicense()
    {
        $slp = new SwedishLicensePlate('abc');
        $this->assertEquals('abc', $slp->getLicense());
    }

    public function formatNormalLicensePlatesProvider()
    {
        return [
            ['xyz123', 'XYZ123'],
            ['abc 123', 'ABC123'],
            ['batman', 'BATMAN'],
            ['foo bar', 'FOO BAR']
        ];
    }

    /**
     * @test
     * @dataProvider formatNormalLicensePlatesProvider
     * @param string $license
     * @param string $expected
     */
    public function formatNormalLicensePlates($license, $expected)
    {
        $slp = new SwedishLicensePlate($license);
        $this->assertEquals($expected, $slp->format());
    }

    public function normalLicensePlatesProvider()
    {
        return [
            ['abc 123'],
            ['yxa 321'],
            ['abc321'],
            ['yxz999'],
            ['AAA 12A'],
            ['AAA12A'],

        ];
    }

    /**
     * @test
     * @dataProvider normalLicensePlatesProvider
     * @param string $license
     */
    public function isNormalPlate($license)
    {
        $slp = new SwedishLicensePlate($license);
        $this->assertTrue($slp->isNormalPlate());
    }

    public function personalLicensesPlates()
    {
        return [
            ['aa', true],
            ['321abc3', true],
            ['pac man', true],
            ['batman', true],
            ['green lantern', false],
            ['abc 123', false],
            ['SASA554', true],

        ];
    }

    /**
     * @test
     * @dataProvider personalLicensesPlates
     * @param string $license
     * @param string $expected
     */
    public function isValidPersonalLicenseplate($license, $expected)
    {
        $slp = new SwedishLicensePlate($license);
        $this->assertEquals(
            $expected,
            $slp->isPersonalPlate()
        );
    }

    public function isValidLicenesPlateProvider()
    {
        return [
            ['aa'],
            ['321abc3'],
            ['pac man'],
            ['batman'],
            ['abc 123'],
            ['yxa 321'],
            ['abc321'],
            ['yxz999'],
            ['AAA 12A'],
            ['AAA12A'],
            ['SASA554'],
        ];
    }

    /**
     * @test
     * @dataProvider isValidLicenesPlateProvider
     * @param string $license
     */
    public function isValid($license)
    {
        $slp = new SwedishLicensePlate($license);
        $this->assertTrue($slp->isValid());
    }
}
