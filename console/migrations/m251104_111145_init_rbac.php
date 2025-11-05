<?php

use yii\db\Migration;

class m251104_111145_init_rbac extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;

        // Permissions
        $createProduct = $auth->createPermission('createProduct');
        $createProduct->description = 'Create a product';
        $auth->add($createProduct);

        $updateProduct = $auth->createPermission('updateProduct');
        $updateProduct->description = 'Update product';
        $auth->add($updateProduct);

        $viewProduct = $auth->createPermission('viewProduct');
        $viewProduct->description = 'View product';
        $auth->add($viewProduct);

        // Roles
        $moderator = $auth->createRole('moderator');
        $auth->add($moderator);
        $auth->addChild($moderator, $createProduct);
        $auth->addChild($moderator, $viewProduct);

        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $updateProduct);
        $auth->addChild($admin, $moderator); // admin inherits all moderator permissions

        // Assign roles to users
        $auth->assign($admin, 1);       // user_id 1 = admin
        $auth->assign($moderator, 2);   // user_id 2 = moderator
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        Yii::$app->authManager->removeAll();

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m251104_111145_init_rbac cannot be reverted.\n";

        return false;
    }
    */
}
