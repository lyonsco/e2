<?php

class AllProductsCest
{
    public function checkProducts(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/products');

        # Assert the correct title is set on the page
        $I->see('Welcome!');
    }
}