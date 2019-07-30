<?php

namespace App\Http\Controllers\Web\Tenant\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Repositories\Tenant\Admins\AdminInterface;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $adminRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AdminInterface $admin_repository)
    {
        //
        $this->adminRepository = $admin_repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = $this->adminRepository->getAllAdmins();

        return view('tenant.superadmin.dashboard', compact('admins'));
    }
}
