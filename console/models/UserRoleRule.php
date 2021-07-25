<?php


namespace console\models;

use common\models\User;
use yii\helpers\ArrayHelper;
use yii\rbac\Rule;

/**
 * User role rule
 */
class UserRoleRule extends Rule
{
    public $name = 'userRole';

    /**
     * {@inheritdoc}
     * @throws \Exception
     */
    public function execute($user, $item, $params): bool
    {
        $user = ArrayHelper::getValue($params, 'user', User::findOne($user));

        if ($user) {
            $role = (int) $user->role;

            if ($item->name === 'admin' ) {
                return $role === User::ROLE_ADMIN;
            } elseif ($item->name === 'user') {
                return $role === User::ROLE_ADMIN || $role === User::ROLE_USER;
            }
        }

        return false;
    }
}
