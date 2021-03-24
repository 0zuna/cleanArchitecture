<?php                                                                                                                                                                                                                                      
namespace Kernel\Infrastructure\Eloquent;
 
use Illuminate\Database\Eloquent\Model;
use Kernel\Domain\Repositories\UserRepositoryInterface;
use Kernel\Domain\Entities\User\User;
use Kernel\Domain\Entities\User\UserId;
use Kernel\Domain\Entities\User\UserName;
use Illuminate\Database\Eloquent\Collection;

class UserRepository extends Model implements UserRepositoryInterface
{
    protected $table = 'users';
    protected $fillable = ['name'];
 
    public function getAll(): array
    {
        //return parent::all()->toarray();
        return $this->collectionToEntityArray(parent::all());
    }
    private function collectionToEntityArray(Collection $collection): array
    {
        $returns = [];
        foreach ($collection as $row) {

            $userId = new UserId($row->id);
            $userName = new UserName($row->name);
            $obj = new User($userId, $userName);

            $returns[] = $obj->toarray();
        }
        return $returns;
    }
 
    public function store(User $user): User
    {
        $newUser = parent::create([
            'name' => $user->name()->value(),
        ]);
        return $this->toEntity($newUser);
    }       

    private function toEntity(UserRepository $eloquentObj): User
    {
        $id = new UserId($eloquentObj->id);
        $name = new UserName($eloquentObj->name);
	$user = new User($id, $name);
        return $user;
    }
}

