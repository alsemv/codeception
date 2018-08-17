<?php
require_once "Super.php";


class BasicCest extends Super
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }


    public function registrationTest(AcceptanceTester $I)
    {
        $this->generateEmail();
        $I->amOnPage('/');
        $I->see('Slim', 'h1');
    }

    public function validationTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Slim', 'h1');
    }
}
