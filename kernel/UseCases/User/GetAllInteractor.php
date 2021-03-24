<?php
namespace Kernel\UseCases\User;
 
use Kernel\Domain\Repositories\UserRepositoryInterface;
 
class GetAllInteractor implements GetAllInterface
{

	private $repository;

	public function __construct(UserRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}
	public function handle(): array
	{
		return $this->repository->getAll();
	}
}

