<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var backend\models\Users $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'username' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Username...', 'maxlength' => 255]],

            'auth_key' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Auth Key...', 'maxlength' => 32]],

            'password_hash' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Password Hash...', 'maxlength' => 255]],

            'email' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Email...', 'maxlength' => 255]],

            'created_at' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Created At...']],

            'updated_at' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Updated At...']],

            'driver_number' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Driver Number...']],

            'driver_date' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATE]],

            'driver_expire' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATE]],

            'driver_register_url' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Enter Driver Register Url...','rows' => 6]],

            'driver_check_url' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Enter Driver Check Url...','rows' => 6]],

            'driver_check_expire' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATE]],

            'accept_vehicle' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Accept Vehicle...']],

            'accept_truck' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Accept Truck...']],

            'accept_container' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Accept Container...']],

            'accept_contract_vehicle' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Accept Contract Vehicle...']],

            'accept_contract_truck' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Accept Contract Truck...']],

            'accept_contract_container' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Accept Contract Container...']],

            'expired_reset_token' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Expired Reset Token...']],

            'owner_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Owner ID...']],

            'status' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Status...']],

            'push_os' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Push Os...']],

            'verify_number' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Verify Number...']],

            'confirmed_email' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Confirmed Email...']],

            'vehicle_type_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Vehicle Type ID...']],

            'is_personal' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Is Personal...']],

            'is_admin_active' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Is Admin Active...']],

            'is_processing' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Is Processing...']],

            'identity_date' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATE]],

            'password_reset_token' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Password Reset Token...', 'maxlength' => 255]],

            'access_token' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Access Token...', 'maxlength' => 255]],

            'device_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Device ID...', 'maxlength' => 255]],

            'push_token' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Push Token...', 'maxlength' => 255]],

            'family_register_url' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Family Register Url...', 'maxlength' => 255]],

            'driver_license_url' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Driver License Url...', 'maxlength' => 255]],

            'current_role' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Current Role...', 'maxlength' => 255]],

            'first_name' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter First Name...', 'maxlength' => 50]],

            'last_name' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Last Name...', 'maxlength' => 100]],

            'avatar_url' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Avatar Url...', 'maxlength' => 100]],

            'identity_number' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Identity Number...', 'maxlength' => 100]],

            'identity_url' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Identity Url...', 'maxlength' => 100]],

            'phone' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Phone...', 'maxlength' => 20]],

            'address' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Address...', 'maxlength' => 250]],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
