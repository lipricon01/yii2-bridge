<?php

namespace naffiq\bridge\controllers;

/**
 * SettingsController implements the CRUD actions for [[app\modules\admin\models\Settings]] model.
 * @see \naffiq\bridge\models\Settings
 */
class SettingsGroupController extends BaseAdminController
{
    /**
     * @inheritdoc
     */
    public $modelClass = 'naffiq\bridge\models\SettingsGroup';

    /**
     * @inheritdoc
     */
    public function accessRules()
    {
        return [
            [
                'allow' => true,
                'roles' => ['admin'],
            ],
        ];
    }


    public function actions()
    {
        return [
            'create' => [
                'class' => 'yii2tech\admin\actions\Create',
                'scenario' => $this->createScenario,
                'returnUrl' => function () {
                    return ['/admin/settings/index', 'group' => \Yii::$app->request->get('id', 'misc')];
                }
            ],
            'update' => [
                'class' => 'yii2tech\admin\actions\Update',
                'scenario' => $this->updateScenario,
                'returnUrl' => function () {
                    return ['/admin/settings/index', 'group' => \Yii::$app->request->get('id', 'misc')];
                }
            ],
            'delete' => [
                'class' => 'yii2tech\admin\actions\Delete',
                'returnUrl' => function () {
                    return ['/admin/settings/index', 'group' => \Yii::$app->request->post('id', 'misc')];
                }
            ],
        ];
    }
}
