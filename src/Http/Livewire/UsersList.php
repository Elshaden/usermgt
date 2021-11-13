<?php

namespace Elshaden\LivewireUsermgt\Http\Livewire;

//use Elshaden\LivewireUsermgt\Respository\Contracts\PermissionRepositoryInterface;
//use Elshaden\LivewireUsermgt\Respository\Contracts\RoleRepositoryInterface;
//use Elshaden\LivewireUsermgt\Respository\Contracts\UserRepositoryInterface;
//use Elshaden\LivewireUsermgt\Respository\Eloquents\UserRepository;

use Elshaden\LivewireUsermgt\Repositories\UserRepository;
use Livewire\Component;
use Livewire\WithPagination;

class UsersList extends Component
{
    use WithPagination;

    protected $Users = [];
    protected $Count = null;
    public $SelectedUser = [];
    public $UserCreate = false;

    public function mount()
    {
    }

    public function paginationView()
    {
        return 'usermgt::short-pagination';
    }

    public function SelectUser($UserId)
    {
        $this->UserCreate = false;
        $this->SelectedUser = app(UserRepository::class)->find($UserId);
    }

    public function UserCreateNew($UserId)
    {
        $this->SelectedUser = null;
        $this->UserCreate = true;
    }

    public function render()
    {
        $this->Count = app(UserRepository::class)->all()->count();
        $this->Users = app(UserRepository::class)->with(['roles', 'permissions'])->orderBy('name', 'asc')->paginate(10);//  App\Models\User::with(['roles', 'permissions'])->orderBy('name', 'asc')->paginate(10);

        return view('usermgt::user-list', ['Users' => $this->Users, 'Count' => $this->Count]);
    }
}
