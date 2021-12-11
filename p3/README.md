# Project 3
+ By: Courtney Lyons
+ URL: <http://e2p3.hesclyons.me>

## Graduate requirement
+ [x] I have integrated testing into my application
+ [ ] I am taking this course for undergraduate credit and have opted out of integrating testing into my application

## Outside resources
n/a

## Notes for instructor
n/a

## Codeception testing output
```
root@hes:/var/www/e2/p3# php vendor/bin/codecept run acceptance --steps
Codeception PHP Testing Framework v4.1.22
Powered by PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Acceptance Tests (3) --------------------------------------------------------------------------------------------------------------------
P3Cest: Play game
Signature: P3Cest:playGame
Test: tests/acceptance/P3Cest.php:playGame
Scenario --
 I am on page "/"
 I fill field "[test=guess-text]","9"
 I click "[test=submit-button]"
 I see element "[test=results-div]"
 I grab text from "[test=target-output]"
 The target number was: 1
 I see element "[test=lost-output]"
 PASSED 

P3Cest: Validate form
Signature: P3Cest:validateForm
Test: tests/acceptance/P3Cest.php:validateForm
Scenario --
 I am on page "/"
 I fill field "[test=guess-text]","b"
 I click "[test=submit-button]"
 I see element "[test=validation-error]"
 PASSED 

P3Cest: Show history and round details
Signature: P3Cest:showHistoryAndRoundDetails
Test: tests/acceptance/P3Cest.php:showHistoryAndRoundDetails
Scenario --
 I am on page "/history"
 I grab multiple "[test=round-link]"
 I assert greater than or equal 10,58
 I grab text from "[test=round-link]"
 I click "2021-12-11 10:30:46"
 I see "2021-12-11 10:30:46"
 PASSED 

-----------------------------------------------------------------------------------------------------------------------------------------


Time: 00:00.522, Memory: 12.00 MB

OK (3 tests, 6 assertions)
```