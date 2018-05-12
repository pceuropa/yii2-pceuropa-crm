<?php namespace app\commands;

use yii\console\Controller;
use yii\helpers\Console;

class HelloController extends Controller
{
    public $message;

    public function options($actionID)
    {
        return ['message'];
    }

    public function optionAliases()
    {
        return ['m' => 'message'];
    }

    public function actionIndex()
    {
        Console::clearScreen();

        if (Console::confirm("Are you sure?")) {
            echo "user typed yes\n";
            echo $this->message . "\n";
            Console::stderr('error');
            Console::stdin('in');
            Console::stdout('out');
            Console::startProgress(0, 10);

            for ($n = 1; $n <= 10; $n++) {
                usleep(10);
                Console::updateProgress($n, 10);
            }

            Console::endProgress();;

        } else {
            echo "user typed no\n";
            $name = $this->ansiFormat('Alex', Console::FG_YELLOW);
            echo "Hello, my name is $name.";
        }

    }
} ?>


