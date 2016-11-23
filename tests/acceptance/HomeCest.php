<?php
use yii\helpers\Url as Url;

class HomeCest
{
    public function _before(\AcceptanceTester $I)
    {
        $I->amOnPage(Url::toRoute('/site/index'));
    }

    public function ensureThatHomePageWorks(AcceptanceTester $I)
    {
        $I->see('My Company');
        
        $I->seeLink('About');
        $I->click('About');
        $I->wait(2); // wait for page to be opened
        
        $I->see('This is the About page.');
    }

    public function ensureThatModalWorks(AcceptanceTester $I)
    {
        $I->see('click me', 'button');

        $I->click('click me');
        $I->wait(1); // wait for modal to be opened

        $I->see('Home modal');
        $I->see('this is modal', 'p');

        $I->click('close modal');
        $I->wait(1);

        $I->dontSee('Home modal');
        $I->dontSee('this is modal', 'p');
    }
}
