<?php
namespace Kernel\Domain\Repositories;
 
use Kernel\Domain\Entities\User\User;
 
interface UserRepositoryInterface
{
	public function getAll(): array;
	public function store(User $user): User;
}
