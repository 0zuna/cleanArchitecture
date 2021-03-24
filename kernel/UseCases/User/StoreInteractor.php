<?php
namespace Kernel\UseCases\User;

use Kernel\Domain\Repositories\UserRepositoryInterface;

use Kernel\Domain\Entities\User\User;
use Kernel\Domain\Entities\User\UserId;
use Kernel\Domain\Entities\User\UserName;
use Kernel\UseCases\User\Inputs\UserInput;

class StoreInteractor implements StoreInterface
{
	private $repository;

	public function __construct(UserRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	public function handle(UserInput $input): User
	{
		$id = new UserId(null);
		$userName = new UserName($input->name());
		$user = new User($id, $userName);
		return $this->repository->store($user);
	}
}
