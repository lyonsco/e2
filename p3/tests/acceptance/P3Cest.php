<?php

class P3Cest
{

    public function playGame(AcceptanceTester $I)
    {
        $I->amOnPage('/');

        $I->fillField('[test=guess-text]', '9');

        $I->click('[test=submit-button]');

        $I->seeElement('[test=results-div]');

        $targetOutput = $I->grabTextFrom('[test=target-output]');
        $I->comment('The target number was: ' .$targetOutput);

        if($targetOutput == '9') {
            $I->seeElement('[test=won-output]');
        } else {
            $I->seeElement('[test=lost-output]');
        }
    }


    public function validateForm(AcceptanceTester $I)
    {
        $I->amOnPage('/');

        $I->fillField('[test=guess-text]', 'b');

        $I->click('[test=submit-button]');

        $I->seeElement('[test=validation-error]');
    }

    public function showHistoryAndRoundDetails(AcceptanceTester $I)
    {
        $I->amOnPage('/history');

        $roundCount = count($I->grabMultiple('[test=round-link]'));
        $I->assertGreaterThanOrEqual(10, $roundCount);

        $timestamp = $I->grabTextFrom('[test=round-link]');
        $I->click($timestamp);
        $I->see($timestamp);
    }
}