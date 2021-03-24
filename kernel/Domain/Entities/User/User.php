<?php
namespace Kernel\Domain\Entities\User;

final class User
{
	private $id;
	private $name;

	public function __construct(UserId $id, UserName $userName)
	{
		$this->id = $id;
		$this->name = $userName;
	}
	public function id(): UserId
	{
		return $this->id;
	}
	public function name(): UserName {
		return $this->name;
	}
	
	public function toarray(): array
	{
		$id=$this->id->value();
		$name=$this->name->value();
		return ['id' =>$id, 'name'=>$name];
	}
}
