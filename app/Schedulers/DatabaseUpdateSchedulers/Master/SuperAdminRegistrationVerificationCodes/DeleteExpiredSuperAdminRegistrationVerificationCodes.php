<?php 

namespace App\Schedulers\DatabaseUpdateSchedulers\Master\SuperAdminRegistrationVerificationCodes;

use App\Repositories\Master\SuperAdminRegistrationVerificationCodes\SuperAdminRegistrationVerificationCodeInterface;

class DeleteExpiredSuperAdminRegistrationVerificationCodes
{
	protected $superAdminRegistrationVerificationCodesRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(SuperAdminRegistrationVerificationCodeInterface $superadmin_registration_verification_codes_repository)
    {
        //
        $this->superAdminRegistrationVerificationCodesRepository = $superadmin_registration_verification_codes_repository;
    }
	
	function __invoke()
	{
		$this->superAdminRegistrationVerificationCodesRepository->deleteExpiredSuperAdminRegistrationVerificationCodes();
	}

}