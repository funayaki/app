<?php
use Migrations\AbstractSeed;

/**
 * Acos seed.
 */
class AcosSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'parent_id' => NULL,
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'controllers',
                'lft' => '1',
                'rght' => '144',
            ],
            [
                'id' => '2',
                'parent_id' => '1',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'Pages',
                'lft' => '2',
                'rght' => '5',
            ],
            [
                'id' => '3',
                'parent_id' => '2',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'display',
                'lft' => '3',
                'rght' => '4',
            ],
            [
                'id' => '4',
                'parent_id' => '1',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'Admin',
                'lft' => '6',
                'rght' => '43',
            ],
            [
                'id' => '5',
                'parent_id' => '4',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'Dashboards',
                'lft' => '7',
                'rght' => '10',
            ],
            [
                'id' => '6',
                'parent_id' => '5',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'index',
                'lft' => '8',
                'rght' => '9',
            ],
            [
                'id' => '7',
                'parent_id' => '4',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'Roles',
                'lft' => '11',
                'rght' => '22',
            ],
            [
                'id' => '8',
                'parent_id' => '7',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'index',
                'lft' => '12',
                'rght' => '13',
            ],
            [
                'id' => '9',
                'parent_id' => '7',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'view',
                'lft' => '14',
                'rght' => '15',
            ],
            [
                'id' => '10',
                'parent_id' => '7',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'add',
                'lft' => '16',
                'rght' => '17',
            ],
            [
                'id' => '11',
                'parent_id' => '7',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'edit',
                'lft' => '18',
                'rght' => '19',
            ],
            [
                'id' => '12',
                'parent_id' => '7',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'delete',
                'lft' => '20',
                'rght' => '21',
            ],
            [
                'id' => '13',
                'parent_id' => '4',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'Users',
                'lft' => '23',
                'rght' => '42',
            ],
            [
                'id' => '14',
                'parent_id' => '13',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'index',
                'lft' => '24',
                'rght' => '25',
            ],
            [
                'id' => '15',
                'parent_id' => '13',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'view',
                'lft' => '26',
                'rght' => '27',
            ],
            [
                'id' => '16',
                'parent_id' => '13',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'add',
                'lft' => '28',
                'rght' => '29',
            ],
            [
                'id' => '17',
                'parent_id' => '13',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'edit',
                'lft' => '30',
                'rght' => '31',
            ],
            [
                'id' => '18',
                'parent_id' => '13',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'delete',
                'lft' => '32',
                'rght' => '33',
            ],
            [
                'id' => '19',
                'parent_id' => '13',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'login',
                'lft' => '34',
                'rght' => '35',
            ],
            [
                'id' => '20',
                'parent_id' => '13',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'logout',
                'lft' => '36',
                'rght' => '37',
            ],
            [
                'id' => '21',
                'parent_id' => '13',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'forgot',
                'lft' => '38',
                'rght' => '39',
            ],
            [
                'id' => '22',
                'parent_id' => '13',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'reset',
                'lft' => '40',
                'rght' => '41',
            ],
            [
                'id' => '23',
                'parent_id' => '1',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'AclManager',
                'lft' => '44',
                'rght' => '95',
            ],
            [
                'id' => '24',
                'parent_id' => '23',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'Admin',
                'lft' => '45',
                'rght' => '94',
            ],
            [
                'id' => '25',
                'parent_id' => '24',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'Acos',
                'lft' => '46',
                'rght' => '57',
            ],
            [
                'id' => '26',
                'parent_id' => '25',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'index',
                'lft' => '47',
                'rght' => '48',
            ],
            [
                'id' => '27',
                'parent_id' => '25',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'emptyAcos',
                'lft' => '49',
                'rght' => '50',
            ],
            [
                'id' => '28',
                'parent_id' => '25',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'buildAcl',
                'lft' => '51',
                'rght' => '52',
            ],
            [
                'id' => '29',
                'parent_id' => '25',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'pruneAcos',
                'lft' => '53',
                'rght' => '54',
            ],
            [
                'id' => '30',
                'parent_id' => '25',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'synchronize',
                'lft' => '55',
                'rght' => '56',
            ],
            [
                'id' => '31',
                'parent_id' => '24',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'Aros',
                'lft' => '58',
                'rght' => '93',
            ],
            [
                'id' => '32',
                'parent_id' => '31',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'index',
                'lft' => '59',
                'rght' => '60',
            ],
            [
                'id' => '33',
                'parent_id' => '31',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'check',
                'lft' => '61',
                'rght' => '62',
            ],
            [
                'id' => '34',
                'parent_id' => '31',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'users',
                'lft' => '63',
                'rght' => '64',
            ],
            [
                'id' => '35',
                'parent_id' => '31',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'updateUserRole',
                'lft' => '65',
                'rght' => '66',
            ],
            [
                'id' => '36',
                'parent_id' => '31',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'ajaxRolePermissions',
                'lft' => '67',
                'rght' => '68',
            ],
            [
                'id' => '37',
                'parent_id' => '31',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'rolePermissions',
                'lft' => '69',
                'rght' => '70',
            ],
            [
                'id' => '38',
                'parent_id' => '31',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'userPermissions',
                'lft' => '71',
                'rght' => '72',
            ],
            [
                'id' => '39',
                'parent_id' => '31',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'emptyPermissions',
                'lft' => '73',
                'rght' => '74',
            ],
            [
                'id' => '40',
                'parent_id' => '31',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'clearUserSpecificPermissions',
                'lft' => '75',
                'rght' => '76',
            ],
            [
                'id' => '41',
                'parent_id' => '31',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'grantAllControllers',
                'lft' => '77',
                'rght' => '78',
            ],
            [
                'id' => '42',
                'parent_id' => '31',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'denyAllControllers',
                'lft' => '79',
                'rght' => '80',
            ],
            [
                'id' => '43',
                'parent_id' => '31',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'getRoleControllerPermission',
                'lft' => '81',
                'rght' => '82',
            ],
            [
                'id' => '44',
                'parent_id' => '31',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'grantRolePermission',
                'lft' => '83',
                'rght' => '84',
            ],
            [
                'id' => '45',
                'parent_id' => '31',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'denyRolePermission',
                'lft' => '85',
                'rght' => '86',
            ],
            [
                'id' => '46',
                'parent_id' => '31',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'getUserControllerPermission',
                'lft' => '87',
                'rght' => '88',
            ],
            [
                'id' => '47',
                'parent_id' => '31',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'grantUserPermission',
                'lft' => '89',
                'rght' => '90',
            ],
            [
                'id' => '48',
                'parent_id' => '31',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'denyUserPermission',
                'lft' => '91',
                'rght' => '92',
            ],
            [
                'id' => '49',
                'parent_id' => '1',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'Attachments',
                'lft' => '96',
                'rght' => '107',
            ],
            [
                'id' => '50',
                'parent_id' => '49',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'Admin',
                'lft' => '97',
                'rght' => '106',
            ],
            [
                'id' => '51',
                'parent_id' => '50',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'Attachments',
                'lft' => '98',
                'rght' => '105',
            ],
            [
                'id' => '52',
                'parent_id' => '51',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'index',
                'lft' => '99',
                'rght' => '100',
            ],
            [
                'id' => '53',
                'parent_id' => '51',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'add',
                'lft' => '101',
                'rght' => '102',
            ],
            [
                'id' => '54',
                'parent_id' => '51',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'delete',
                'lft' => '103',
                'rght' => '104',
            ],
            [
                'id' => '55',
                'parent_id' => '1',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'Settings',
                'lft' => '108',
                'rght' => '143',
            ],
            [
                'id' => '56',
                'parent_id' => '55',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'Admin',
                'lft' => '109',
                'rght' => '142',
            ],
            [
                'id' => '57',
                'parent_id' => '56',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'Languages',
                'lft' => '110',
                'rght' => '125',
            ],
            [
                'id' => '58',
                'parent_id' => '57',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'index',
                'lft' => '111',
                'rght' => '112',
            ],
            [
                'id' => '59',
                'parent_id' => '57',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'add',
                'lft' => '113',
                'rght' => '114',
            ],
            [
                'id' => '60',
                'parent_id' => '57',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'edit',
                'lft' => '115',
                'rght' => '116',
            ],
            [
                'id' => '61',
                'parent_id' => '57',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'delete',
                'lft' => '117',
                'rght' => '118',
            ],
            [
                'id' => '62',
                'parent_id' => '57',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'moveup',
                'lft' => '119',
                'rght' => '120',
            ],
            [
                'id' => '63',
                'parent_id' => '57',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'movedown',
                'lft' => '121',
                'rght' => '122',
            ],
            [
                'id' => '64',
                'parent_id' => '57',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'select',
                'lft' => '123',
                'rght' => '124',
            ],
            [
                'id' => '65',
                'parent_id' => '56',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'Settings',
                'lft' => '126',
                'rght' => '141',
            ],
            [
                'id' => '66',
                'parent_id' => '65',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'index',
                'lft' => '127',
                'rght' => '128',
            ],
            [
                'id' => '67',
                'parent_id' => '65',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'add',
                'lft' => '129',
                'rght' => '130',
            ],
            [
                'id' => '68',
                'parent_id' => '65',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'edit',
                'lft' => '131',
                'rght' => '132',
            ],
            [
                'id' => '69',
                'parent_id' => '65',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'delete',
                'lft' => '133',
                'rght' => '134',
            ],
            [
                'id' => '70',
                'parent_id' => '65',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'prefix',
                'lft' => '135',
                'rght' => '136',
            ],
            [
                'id' => '71',
                'parent_id' => '65',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'moveUp',
                'lft' => '137',
                'rght' => '138',
            ],
            [
                'id' => '72',
                'parent_id' => '65',
                'model' => NULL,
                'foreign_key' => NULL,
                'alias' => 'moveDown',
                'lft' => '139',
                'rght' => '140',
            ],
        ];

        $table = $this->table('acos');
        $table->insert($data)->save();
    }
}
