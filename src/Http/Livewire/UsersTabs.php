<?php

namespace Elshaden\LivewireUsermgt\Http\Livewire;

//use Elshaden\LivewireUsermgt\Respository\Contracts\PermissionRepositoryInterface;
//use Elshaden\LivewireUsermgt\Respository\Contracts\RoleRepositoryInterface;
//use Elshaden\LivewireUsermgt\Respository\Contracts\UserRepositoryInterface;
//use Elshaden\LivewireUsermgt\Respository\Eloquents\UserRepository;

use Elshaden\LivewireUsermgt\Actions\UserActions;
use Elshaden\LivewireUsermgt\Repositories\UserRepository;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTabs extends Component
{
    use WithPagination;
     protected $listeners = ['HasSelection']   ;
     protected $UserId = Null;
    public $SelectedUser = [];
    private UserRepository $user;



    public function mount($UserId)
    {
      $this->UserId = $UserId;

    }

    public function HasSelection($UserId){
        $this->UserId = $UserId;
        dd($UserId);
    }

    public function render()
    {
        $this->SelectedUser = app(UserRepository::class)->find($this->UserId);
        return view('usermgt::user-tabs');
    }
}
