<?php                                                                                                                                                                                                                                      
namespace Kernel\Domain\Entities\User;
 
final class UserId
{

    private $id;

    public function __construct(?int $id)
    {
        if (is_null($id)) {
            $this->id = $id;
            return;
        }
        if (!is_int($id)) {
            throw new \InvalidArgumentException('user id must be an integer or null');
        }
        if ($id < 1) {
            throw new \InvalidArgumentException('user id must be an integer more than 1');
        }
        $this->id = $id;
    }
 
    public function value(): ?int
    {
        return $this->id;
    }
}

