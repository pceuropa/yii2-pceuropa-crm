<?php

use Codeception\Test\Unit;
use yii\base\Exception;
use yii\helpers\Json;
use pceuropa\forms\{FormBuilder, models\FormModel};

class FormUpdateTest extends Unit {

    /**
     * @var \UnitTester
     */
    protected $tester;
    protected $form = '';
    /**
     * @var string body form
     */
    public $bodyForm = '[[{"field":"input","type":"text","width":"col-md-6","name":"name","label":"Email","require":true},{"field":"input","name":"pass","type":"text","label":"Password","width":"col-md-6","require":true}],[{"field":"checkbox","width":"col-md-12","items":[{"text":"Remember me","checked":true,"value":1}],"name":"remember"}],[{"field":"description","width":"col-md-12","textdescription":"<p><a target=\"_blank\" href=\"https://pceuropa.net/blog/\">I forgot my password.</a></p>","":"https://pceuropa.net/blog/"}],[{"field":"submit","width":"col-md-12","backgroundcolor":"btn-info","label":"Submit"}]]';
/**
 * @var array one field of form
 */
public $field = ["field" =>"input","type" =>"text","width" =>"col-md-6","name" =>"name","label" =>"Email","require" =>true];



    protected function _before() {
        $this->form = new FormBuilder([
                'formTable' => '{{%forms}}',
                'formDataTable' => 'form_',
                ]);
        $this->form->findModel(15);
    }

    public function testInit() {
        $this->assertEquals( $this->form->db, 'db');
        $this->assertFalse( $this->form->test_mode);
        $this->assertTrue( $this->form->easy_mode);
        $this->assertFalse( $this->form->email_response);
        $this->assertFalse( $this->form->success);
    }

    public function testTableSchema() {
        $schema = $this->form->tableSchema($this->bodyForm);
        $this->assertEquals($schema, [
                                'id' => 'pk',
                                'name' => 'string',
                                'pass' => 'string',
                                'remember' => 'string'
                            ]);
    }

    /**
     * Rename column
     * @return void
     */
    public function testRenameColumn() {
        $this->form->findModel(15);

        $this->form->renameColumn(['old' => 'prefere', 'new' => 'sex']);
        $this->assertTrue($this->form->success);

        $this->form->renameColumn(['old' => 'sex', 'new' => 'prefere']);
        $this->assertTrue($this->form->success);

        $this->form->renameColumn(['old' => 'noExist', 'new' => 'newName']);
        $this->assertContains('The SQL being executed was: ALTER TABLE `form_15` CHANGE `noExist` `newName`', $this->form->success);
    }

    /**
     * Add column to table SQL
     * @return void
    */
    public function testAddColumn() {
      $this->form->addColumn($this->field);
      $this->assertTrue($this->form->success);
    }
    /**
     * drop table column
     * @return void
    */
    public function testDropColumn() {
      $this->form->dropColumn($this->field['name']);
      $this->assertTrue($this->form->success);
    }
    /**
     * success function
     * @return void
     */
    public function testResponseFunction() {
      $this->form->success = true;
      $response = $this->form->response();
      $this->assertEquals(['success' => true, 'url' => ''],  $response);
    }

}
