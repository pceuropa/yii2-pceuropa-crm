<?php namespace app\commands;

use Yii;
use yii\console\Controller;
use yii\helpers\Console;

class RbacController extends Controller {

    /**
     * Generate only welcome test message
     * @return void
     */
    public function actionIndex()
    {
        Console::clearScreen();
        $this->stdout("The fallowing commands are available\n", Console::BOLD);
        $this->stdout("Create permission\n", Console::BOLD);
        $this->stdout("Create roles\n", Console::BOLD);
        $this->stdout("Create Assign role to users\n", Console::BOLD);
    }

    /**
     * Create rule updateOwnForm
     * @return void
     */
    public function actionRule()
    {
        $auth = Yii::$app->authManager;
        $rule = new \app\rbac\AuthorRule;	// add the rule
        $auth->add($rule);

        // add the "updateOwnForm" permission and associate the rule with it.
        $updateOwnForm = $auth->createPermission('updateOwnForm');
        $updateOwnForm->description = 'Update own form';
        $updateOwnForm->ruleName = $rule->name;
        $auth->add($updateOwnForm);

        $user = $auth->getRole('user');
        $auth->addChild($user, $updateOwnForm);
    }
    /**
     * Create admin role and asign to user id 1
     * @return void
     */
    public function actionAdmin() {
      
        $auth = Yii::$app->authManager;
        $user = $auth->getRole('user');

        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $user);

        $auth->assign($admin, 1);
    }

}



