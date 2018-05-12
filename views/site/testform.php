<form method="post" id="mainform">
<label for="site"><?= Yii::t("app", "URL");?></label>
  <div class="row">

    <div class="col-md-10">
      <input value="http://" class="form-control col-md-10" require="true" name="site" id="site" type="text">
    </div>
<input id="form-token" type="hidden" name="csrfmiddlewaretoken" value="<?=Yii::$app->request->csrfToken?>"/>
    <div class="col-md-2">
    <button type="submit" class="btn btn-success"><?= Yii::t("app", "Test");?></button>
    </div>

  </div>
</form>
