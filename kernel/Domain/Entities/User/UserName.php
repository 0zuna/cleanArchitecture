<?php
namespace Kernel\Domain\Entities\User;

final class UserName
{
	private $name;
	public function __construct(string $name)
	{
		if (mb_ereg_match("^(\s|　)+$", $name)) {
			throw new \InvalidArgumentException('User name must contain a non-blank string');
		}
		if ($name === '') {
			throw new \InvalidArgumentException('User name must not be blank');
		}
		$this->name = $name;
	}
 
	public function value(): string
	{
		return $this->name;
	}
}
