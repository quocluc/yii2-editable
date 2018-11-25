<?php
/**
 * Created by PhpStorm.
 * User: quocl
 * Date: 11/7/2018
 * Time: 10:37
 */

use kartik\helpers\Html;
use kartik\detail\DetailView;
use yii\helpers\Url;

?>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="row">
                <div class="label label-info">Avatar</div>
            </div>
            <div class="row">
                <img src="https://cdn.iconscout.com/icon/free/png-256/avatar-369-456321.png">
            </div>

        </div>
        <div class="col-sm-9">
            <?php
            echo DetailView::widget([
                'model' => $model,
                'condensed' => true,
                'hover' => true,
                'mode' => DetailView::MODE_VIEW,
                'panel' => [
                    'heading' => "Thông tin người dùng",
                    'type' => DetailView::TYPE_INFO,
                ],

                'bordered' => true,
                'striped' => true,
                'responsive' => true,
                'deleteOptions' => [ // your ajax delete parameters
                    'params' => ['id' => $model->id, 'kvdelete' => true],
                ],
//                'formOptions' => [
//                    'action' => ['user/update'],
//                    'method' => 'post'
//                ],
                'attributes' => [
                    [
                        'group' => true,
                        'label' => 'Thông tin cơ bản - ' . $model->getFullName(),
                        'rowOptions' => ['class' => 'table-info']
                    ],
                    [
                        'columns' => [
                            [
                                'attribute' => 'username',
                                'label' => 'Username',
                                'displayOnly' => true,
                                'valueColOptions' => ['style' => 'width:30%']
                            ],
                            [
                                'attribute' => 'id',
                                'format' => 'raw',
                                'value' => '<kbd>' . $model->id . '</kbd>',
                                'valueColOptions' => ['style' => 'width:30%'],
                                'displayOnly' => true
                            ],
                        ],
                    ],
                    [
                        'columns' => [
                            [
                                'attribute' => 'first_name',
                                'valueColOptions' => ['style' => 'width:30%'],
                                'type' => DetailView::INPUT_TEXT,
                            ],
                            [
                                'attribute' => 'last_name',
                                'format' => 'raw',
                                'type' => DetailView::INPUT_TEXT,
                                'valueColOptions' => ['style' => 'width:30%'],
                            ],
                        ],
                    ],
                    [
                        'columns' => [
                            [
                                'attribute' => 'phone',
                                'valueColOptions' => ['style' => 'width:30%'],
                                'type' => DetailView::INPUT_TEXT,
                            ],
                            [
                                'attribute' => 'email',
                                'valueColOptions' => ['style' => 'width:30%'],
                                'type' => DetailView::INPUT_TEXT,
                            ],
                        ]
                    ],
                    [
                        'columns' => [
                            [
                                'attribute' => 'address',
                                'valueColOptions' => ['style' => 'width:100%'],
                                'type' => DetailView::INPUT_TEXT,
                            ],
                        ],
                    ],
//                    [
//                        'group' => true,
//                        'label' => 'SECTION 2: Price / Valuation Amounts',
//                        'rowOptions' => ['class' => 'table-info'],
//                        //'groupOptions'=>['class'=>'text-center']
//                    ],
//                    [
//                        'attribute' => 'username',
//                        'label' => 'Buy Amount ($)',
////            'format' => ['decimal', 2],
//                        'inputContainer' => ['class' => 'col-sm-6'],
//                    ],
//                    [
//                        'attribute' => 'username',
//                        'label' => 'Sale Amount ($)',
////            'format' => ['decimal', 2],
//                        'inputContainer' => ['class' => 'col-sm-6'],
//                    ],
//                    [
//                        'label' => 'Difference ($)',
//                        'value' => '123456789',
////            'format' => ['decimal', 2],
//                        'inputContainer' => ['class' => 'col-sm-6'],
//                        // hide this in edit mode by adding `kv-edit-hidden` CSS class
//                        'rowOptions' => ['class' => 'warning kv-edit-hidden', 'style' => 'border-top: 5px double #dedede'],
//                    ],
//                    [
//                        'group' => true,
//                        'label' => 'SECTION 3: Book Details',
//                        'rowOptions' => ['class' => 'table-info'],
//                        //'groupOptions'=>['class'=>'text-center']
//                    ],
//                    [
//                        'columns' => [
//                            [
//                                'attribute' => 'username',
////                    'format' => 'date',
//                                'type' => DetailView::INPUT_DATE,
//                                'widgetOptions' => [
//                                    'pluginOptions' => ['format' => 'yyyy-mm-dd']
//                                ],
//                                'valueColOptions' => ['style' => 'width:30%']
//                            ],
//                            [
//                                'attribute' => 'status',
//                                'label' => 'Available?',
//                                'format' => 'raw',
//                                'value' => $model->status ? '<span class="badge badge-success">Yes</span>' : '<span class="badge badge-danger">No</span>',
//                                'type' => DetailView::INPUT_SWITCH,
//                                'widgetOptions' => [
//                                    'pluginOptions' => [
//                                        'onText' => 'Yes',
//                                        'offText' => 'No',
//                                    ]
//                                ],
//                                'valueColOptions' => ['style' => 'width:30%']
//                            ],
//                        ]
//                    ],
//                    [
//                        'columns' => [
//                            [
//                                'attribute' => 'username',
//                                'format' => 'raw',
//                                'value' => Html::a('John Steinbeck', '#', ['class' => 'kv-author-link']),
//                                'type' => DetailView::INPUT_SELECT2,
//                                'widgetOptions' => [
////                        'data' => ArrayHelper::map(Author::find()->orderBy('name')->asArray()->all(), 'id', 'name'),
//                                    'options' => ['placeholder' => 'Select ...'],
//                                    'pluginOptions' => ['allowClear' => true, 'width' => '100%'],
//                                ],
//                                'valueColOptions' => ['style' => 'width:30%']
//                            ],
//                            [
//                                'attribute' => 'username',
//                                'label' => 'Remember?',
//                                'format' => 'raw',
//                                'type' => DetailView::INPUT_SWITCH,
//                                'widgetOptions' => [
//                                    'pluginOptions' => [
//                                        'onText' => 'Yes',
//                                        'offText' => 'No',
//                                    ]
//                                ],
//                                'value' => $model->username ? '<span class="badge badge-success">Yes</span>' : '<span class="badge badge-danger">No</span>',
//                                'valueColOptions' => ['style' => 'width:30%']
//                            ],
//                        ]
//                    ],
//                    [
//                        'attribute' => 'username',
//                        'format' => 'raw',
//                        'value' => '<span class="text-justify"><em>' . $model->username . '</em></span>',
//                        'type' => DetailView::INPUT_TEXTAREA,
//                        'options' => ['rows' => 4]
//                    ]

                ]
            ]);


            ?>
        </div>
    </div>
</div>
