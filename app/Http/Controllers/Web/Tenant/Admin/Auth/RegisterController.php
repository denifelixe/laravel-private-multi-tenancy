<?php

namespace App\Http\Controllers\Web\Tenant\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Tenant\SuperAdmin\Admin\Register\RegisterRequestValidation;
use App\Models\Tenant\Admins\AdminModel;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{	
    //
	public function __construct()
	{
		//
	}

    public function showAdminRegistrationForm()
    {
    	return view('tenant.admin.auth.register');
    }

    public function adminRegister(RegisterRequestValidation $request)
    {
        $admin_created = AdminModel::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('web.tenant.superadmin.dashboard', ['tenant' => subdomain()]);
    }
}
