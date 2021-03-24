<?php

namespace Kernel\UseCases\User;

use Kernel\Usecases\User\Inputs\UserInput;
use Kernel\Domain\Entities\User\User;

interface StoreInterface
{
	public function handle(UserInput $input): User;
}
