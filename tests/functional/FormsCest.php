<?php
/**
 * Test for module Yii2
 *
 * Check actions of controlles {Form, FormBuilder}
 *
 * @author Rafal Marguzewicz
 * @licence MIT
 */

class FormsCest
{

    /**
     * @var string Logo of page
     */
    public $logo = 'a.navbar-brand';

    /**
     * @var string title form builder on create and update
     */

    public $formBuilderTitle = 'Form Builder';
    /**
     * @var string Header title on form view
     */
    public $formPreview = 'Form preview:';
    
    /**
     * @var string Header title on page end registration
     */
    public $endRegistration = 'End registration';
    
    /**
     * @var string Message for logged or onwer form 
     */
    public $notAllow = 'You are not allowed to perform this action.';
    
    /**
     * @var string Only post method for delete
     */
    public $onlyPost = 'Method Not Allowed. This url can only handle the following request methods: POST.';
    
    
    /**
     * @var string Message on site/login page
     */
    public $siteLogin= 'I forgot password.';
    
    /**
     * @var string index
     */
    public $index = 'forms/module/index';

    /**
     * @var string user
     */
    public $user = 'forms/module/user';

    /**
     * @var string list rout
     */
    public $list = 'forms/module/list';


    /**
     * @var string create rout
     */
    public $create = 'forms/module/create';

    /**
     * @var string update rout
     */
    public $update = 'forms/module/update';

    /**
     * @var string delete form action
     */
    public $delete = 'forms/module/delete';

    /**
     * @var string view
     */
    public $view = 'forms/module/view';




    public function _before(\FunctionalTester $I) {
    }

    /**
     * Tests for pceuropa/yii-forms
     * Pages dont need authetications
     * @return void
     */
    public function openFormsPages(\FunctionalTester $I) {

        $I->amOnRoute($this->index);                 $I->seeElement($this->logo);
        $I->amOnRoute($this->user);                  $I->seeElement($this->logo);
        $I->amOnPage([$this->list, 'id' => 15]);     $I->seeElement($this->logo);
        $I->amOnRoute($this->create);                $I->see($this->siteLogin);
        $I->amOnPage([$this->update, 'id' => 1]);    $I->see($this->siteLogin);
        $I->amOnPage([$this->delete, 'id' => 1]);    $I->see($this->siteLogin);
        $I->amOnPage([$this->view, 'url' => 'url']); $I->seeElement($this->logo);
    }

    /**
     * Create, update and delete forms
     * Need access
     * @author Rafal Marguzewicz
     * @licence MIT
     */
    
    public function openFormsOnlyLoggedUser(\FunctionalTester $I) {
        $I->amLoggedInAs(1);

        $I->amOnRoute($this->index);                 $I->see('Forms');
        $I->amOnRoute($this->user);                  $I->see('Forms');
        $I->amOnRoute($this->list);                  $I->seeElement($this->logo);
        $I->amOnRoute($this->create);                $I->see($this->formBuilderTitle);
        $I->amOnPage([$this->update, 'id' => 1]);    $I->see($this->formBuilderTitle);
        $I->amOnPage([$this->delete, 'id' => 1]);    $I->see($this->onlyPost);
        $I->amOnPage([$this->view, 'url' => 'url']); $I->seeElement($this->logo);
    }

    /**
     * Update own form
     * Need access but for only owner
     * @author Rafal Marguzewicz
     * @licence MIT
     */
    
    public function openFormsPageByAnotherUser(\FunctionalTester $I) {
        $I->amLoggedInAs(2);

        $I->amOnRoute($this->index);                 $I->see('Forms');
        $I->amOnRoute($this->list);                  $I->seeElement($this->logo);
        $I->amOnRoute($this->create);                $I->see($this->formBuilderTitle);
        $I->amOnPage([$this->update, 'id' => 1]);    $I->see($this->notAllow);
        $I->amOnPage([$this->delete, 'id' => 20]);   $I->see($this->onlyPost);
        $I->amOnPage([$this->view, 'url' => 'url']); $I->seeElement($this->logo);
    }
    /**
     * Access after end registrations
     * @author Rafal Marguzewicz
     * @licence MIT
     */
    
    public function openFormsEndRegistration(\FunctionalTester $I) {

        $I->amOnPage([$this->view, 'url' => 'date']);                $I->see($this->endRegistration);
        $I->amOnPage([$this->view, 'url' => 'maximum']);             $I->see($this->endRegistration);
        $I->amOnPage([$this->view, 'url' => 'date-and-maximum']);    $I->see($this->endRegistration);
        $I->amOnPage([$this->view, 'url' => 'date-null']);           $I->see($this->endRegistration);
        $I->amOnPage([$this->view, 'url' => 'url']);                 $I->seeElement($this->logo);
    }

    /**
     * input field test
     * @return void
     */
    public function inputRender(\FunctionalTester $I) {
      
        $I->amOnPage([$this->view, 'url' => 'input']);

        $I->seeElement('div', ['class'=> 'col-md-12']);
        $I->see('label');
        $I->seeElement('label', ['class'=> 'control-label']);
        $I->seeElement('input', [
                  'id' => 'id', 
                  'class'=> 'class', 
                  'value' => 'value', 
                  'type' => 'text', 
                  'aria-required' => 'true', 
                  'placeholder' => 'placeholder', 
                  'name' => 'DynamicModel[name]']);
    }

    /**
     * TextArea test
     * @return void
     */
    public function textareaRender(\FunctionalTester $I) {
      
        $I->amOnPage([$this->view, 'url' => 'textarea']);

        $I->seeElement('div', ['class'=> 'col-md-12']);
        $I->seeElement('label', ['class'=> 'control-label']);
        $I->seeInField('textarea','value');
        $I->seeElement('textarea', [
                    'id' => 'id', 
                    'class'=> 'class', 
                    'aria-required' => 'true', 
                    'placeholder' => 'placeholder', 
                    'name' => 'DynamicModel[name]']);
        $I->see('description');
    // [[{"field":"textarea","width":"col-md-12","name":"name","label":"label","value":"value","placeholder":"placeholder","helpBlock":"description","id":"id","class":"class","require":true}]]
    }

    /**
     * Radio test
     * @return void
     */
    public function radioRender(\FunctionalTester $I) {
        $I->amOnPage([$this->view, 'url' => 'radio']);
        $I->seeElement('div', ['class'=> 'col-md-12']);
        $I->seeElement('label', ['class'=> 'control-label']);
        $I->seeElement('input', [
          'type' => 'radio', 
          'value' => 1,
          'name' => 'DynamicModel[name]']);
        $I->see('description');
    }

    /**
     * Radio test
     * @return void
     */
    public function checkboxRender(\FunctionalTester $I){
        $I->amOnPage([$this->view, 'url' => 'checkbox']);
        $I->seeElement('div', ['class'=> 'col-md-12']);
        $I->seeElement('label', ['class'=> 'control-label']);
        $I->seeElement('input', ['checked' => false, 'type' => 'checkbox', 'value' => 1, 'name' => 'DynamicModel[name][]']);
        $I->seeElement('input', ['checked' => true,  'type' => 'checkbox', 'value' => 2, 'name' => 'DynamicModel[name][]']);
        $I->seeCheckboxIsChecked('div.checkbox input[value=2]');
        $I->seeElement('input', ['checked' => false, 'type' => 'checkbox', 'value' => 3, 'name' => 'DynamicModel[name][]']);
        $I->see('description');
    }

    /**
       Select (dropDown menu) test
     * @return void
     */
    public function selectRender(\FunctionalTester $I){
        $I->amOnPage([$this->view, 'url' => 'select']);
        $I->seeElement('div', ['class'=> 'col-md-12']);
        $I->dontSeeElement('label', ['class'=> 'control-label']);
        $I->see('description');
    }
}

