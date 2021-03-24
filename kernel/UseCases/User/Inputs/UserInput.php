<?php																																																									  
namespace Kernel\UseCases\User\Inputs;
 
class UserInput
{
	private $name;

	public function __construct(string $name)
	{
		$this->name = $name;
	}
 
	public function name(): string
	{
		return $this->name;
	}
}
