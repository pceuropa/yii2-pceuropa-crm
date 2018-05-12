<?php
namespace app\tests\unit;

use yii\test\DbTestCase;
use app\tests\fixtures\UserFixture;

class UserTest extends DbTestCase
{
    public function fixtures()
    {
        return [
            'profiles' => UserFixture::className(),
        ];
    }

    public function testMe()
    {

    }
    // ...test methods...
}
