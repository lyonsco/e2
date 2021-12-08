<?php

class NewProductCest
{
    public function newProductConfirmation(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/products/new');

        # Assert the correct title is set on the page
        $I->see('Welcome!');
    }
}