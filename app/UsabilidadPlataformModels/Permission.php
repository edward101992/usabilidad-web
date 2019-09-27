<?php

namespace App\UsabilidadPlataformModels;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    protected $table = 'permissions';
}
