<?php
use yii\helpers\Url as Url;

class HomeCest
{
    public function homePageWorks(AcceptanceTester $I)
    {
        $I->amOnPage(Url::toRoute('/site/index'));        
        $I->see('Free Software');
        
        $I->seeLink('Contact');
        $I->click('Contact');
        $I->see('info@ pceuropa .net');
    }
}
