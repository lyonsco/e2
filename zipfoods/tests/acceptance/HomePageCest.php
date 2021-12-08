<?php

class HomePageCest
{
    public function welcomeMessage(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/');

        # Assert the correct title is set on the page
        $I->see('Welcome!');
    }
}