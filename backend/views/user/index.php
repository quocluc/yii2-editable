<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>

    <p>
        <?php /* echo Html::a('Create Users', ['create'], ['class' => 'btn btn-success'])*/ ?>
    </p>

    <?php Pjax::begin();
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            [
                'class' => 'kartik\grid\ExpandRowColumn',
                'width' => '50px',
                'value' => function ($model, $key, $index, $column) {
                    return GridView::ROW_COLLAPSED;
                },
                'detail' => function ($model, $key, $index, $column) {
                    return Yii::$app->controller->renderPartial('_expand-row-details', ['model' => $model]);
                },
                'headerOptions' => ['class' => 'kartik-sheet-style'],
                'expandOneOnly' => true
            ],
            'username',
//            'auth_key',
//            'password_hash',
//            'password_reset_token',
//            'expired_reset_token', 
//            'email:email',
            'owner_id',
            'status',
            'created_at:datetime',
            'updated_at:datetime',
//            'access_token',
//            'device_id',
//            'push_token',
//            'push_os',
//            'first_name',
//            'last_name',
//            'phone',
//            'address',
//            'avatar_url:url',
//            'identity_number',
//            ['attribute' => 'identity_date', 'format' => ['date', (isset(Yii::$app->modules['datecontrol']['displaySettings']['date'])) ? Yii::$app->modules['datecontrol']['displaySettings']['date'] : 'd-m-Y']],
//            'identity_url:url',
//            'verify_number',
//            'confirmed_email:email',
//            'family_register_url:url',
//            'driver_number',
//            'driver_license_url:url',
//            ['attribute' => 'driver_date', 'format' => ['date', (isset(Yii::$app->modules['datecontrol']['displaySettings']['date'])) ? Yii::$app->modules['datecontrol']['displaySettings']['date'] : 'd-m-Y']],
//            ['attribute' => 'driver_expire', 'format' => ['date', (isset(Yii::$app->modules['datecontrol']['displaySettings']['date'])) ? Yii::$app->modules['datecontrol']['displaySettings']['date'] : 'd-m-Y']],
//            'driver_register_url:ntext',
//            'driver_check_url:ntext',
//            ['attribute' => 'driver_check_expire', 'format' => ['date', (isset(Yii::$app->modules['datecontrol']['displaySettings']['date'])) ? Yii::$app->modules['datecontrol']['displaySettings']['date'] : 'd-m-Y']],
//            'vehicle_type_id',
//            'is_personal',
//            'is_admin_active',
//            'is_processing',
//            'current_role',
//            'accept_vehicle',
//            'accept_truck',
//            'accept_container',
//            'accept_contract_vehicle',
//            'accept_contract_truck',
//            'accept_contract_container',

            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>',
                            Yii::$app->urlManager->createUrl(['user/view', 'id' => $model->id, 'edit' => 't']),
                            ['title' => Yii::t('yii', 'Edit'),]
                        );
                    }
                ],
            ],
        ],
        'responsive' => true,
        'hover' => true,
        'condensed' => true,
        'floatHeader' => true,

        'panel' => [
            'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-th-list"></i> ' . Html::encode($this->title) . ' </h3>',
            'type' => 'info',
            'before' => Html::a('<i class="glyphicon glyphicon-plus"></i> Add', ['create'], ['class' => 'btn btn-success']),
            'after' => Html::a('<i class="glyphicon glyphicon-repeat"></i> Reset List', ['index'], ['class' => 'btn btn-info']),
            'showFooter' => false
        ],
    ]);
    Pjax::end(); ?>

</div>
