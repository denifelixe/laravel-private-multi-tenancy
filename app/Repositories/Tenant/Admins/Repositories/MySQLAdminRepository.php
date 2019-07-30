<?php 

namespace App\Repositories\Tenant\Admins\Repositories;

use App\Models\Tenant\Admins\AdminModel;
use App\Repositories\Tenant\Admins\AdminInterface;

class MySQLAdminRepository implements AdminInterface
{
	protected $admins;

	/**
     * Create a new Repository instance.
     *
     * @return void
     */
    public function __construct(AdminModel $admins)
    {
        $this->admins = $admins;
    }

	public function getTableName()
    {
        return $this->admins->getTable();
    }

    public function getAllAdmins()
    {
        return $this->admins->all()->toArray();
    }
}