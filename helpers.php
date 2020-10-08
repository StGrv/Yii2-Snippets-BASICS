<?php // HTML Helpers - Tags ?>

<?= Html::tag('h2', 'People must explore h2', ['class' => 'post-title', 'style' => 'font-size:30px; color:red']) ?>

<?= Html::tag('h3', 'People must explore h3', ['class' => 'post-subtitle']) ?>

<?=Html::tag('p', 'People must explore p', ['class' => 'post-meta'] ) ?>

<?php // HTML Helpers - ActiveForm ?>

<?php $form = ActiveForm::begin([
    'options' => ['enctype' => 'multipart/form-data']
]) ?>

    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
    <?= $form->field($avatar, 'image[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
    <?= $form->field($model, 'subject')->dropDownList('first', 'second', 'third') ?>

<?php ActiveForm::end() ?>

<?php // HTML Helpers - Img/Link ?>

<?=Html::img(Url::to('@web/images/test.jpg'), ['class' => 'img-responsive']) ?>

<img src="<?=Url::to('@web/img/test.jpg')?>" tag="Image" class="myclass">

<?=Html::a('This is the title', ['/site/about']) ?>
