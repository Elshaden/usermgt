<?php

namespace Elshaden\LivewireUsermgt\Http\Livewire;

//use Elshaden\LivewireUsermgt\Respository\Contracts\PermissionRepositoryInterface;
//use Elshaden\LivewireUsermgt\Respository\Contracts\RoleRepositoryInterface;
//use Elshaden\LivewireUsermgt\Respository\Contracts\UserRepositoryInterface;
//use Elshaden\LivewireUsermgt\Respository\Eloquents\UserRepository;

use Elshaden\LivewireUsermgt\Repositories\UserRepository;
use Livewire\Component;

class UserCreate extends Component
{
    protected $User = [];

    private UserRepository $user;

    public function mount()
    {
        $this->FormInputs = config('usermgt.user_profile');
    }

    public function render()
    {
        return view('usermgt::user-create');
    }
}
