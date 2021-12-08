<?php

class ProductPageCest
{
    // tests
    public function pageLoads(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/product?sku=driscolls-strawberries');

        # Assert the correct title is set on the page
        $I->seeInTitle('Driscoll’s Strawberries');

        # Assert the existence of certain text on the page
        $I->see('Driscoll’s Strawberries');

        # Assert the existence of a certain element on the page
        $I->seeElement('.product-thumb');

        # Assert the existence of text within a specific element on the page
        $I->see('$4.99', '.product-price');
    }

    public function productNotFound(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/product?sku=driscolls-strawberrie');

        # Assert the correct title is set on the page
        $I->seeInTitle('Product Not Found');
    }

    public function reviewAProductTest(AcceptanceTester $I)
    {
        $I->amOnPage('/product?sku=driscolls-strawberries');

        $I->fillField('[test=reviewer-name-input]', 'Bob');

        $I->fillField('[test=review-textarea]', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in pulvinar libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in pulvinar libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.');

        $I->click('[test=review-submit-button]');

        $I->seeElement('[test=review-confirmation]');
    }

    public function reviewValidation(AcceptanceTester $I)
    {
        $I->amOnPage('/product?sku=driscolls-strawberries');

        $I->fillField('[test=reviewer-name-input]', 'Bob');

        $I->fillField('[test=review-textarea]', 'Test');

        $I->click('[test=review-submit-button]');

        $I->seeElement('[test=validation-error]');
    }
}