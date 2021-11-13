<?php

namespace Elshaden\LivewireUsermgt\Http\Livewire;

//use Elshaden\LivewireUsermgt\Respository\Contracts\PermissionRepositoryInterface;
//use Elshaden\LivewireUsermgt\Respository\Contracts\RoleRepositoryInterface;
//use Elshaden\LivewireUsermgt\Respository\Contracts\UserRepositoryInterface;
//use Elshaden\LivewireUsermgt\Respository\Eloquents\UserRepository;

use Elshaden\LivewireUsermgt\Repositories\UserRepository;
use Livewire\Component;

class UserProfile extends Component
{
    protected $User = [];

    private UserRepository $user;
//    private PermissionRepositoryInterface $permission;
//    private RoleRepositoryInterface $role;

    public function __construct($id = null)
    {
        parent::__construct($id);
    }

    public function mount($UserId)
    {
        try {
            $this->User = app(UserRepository::class)->find($UserId);
        } catch (\Exception $e) {
            $this->Error = $e->getMessage();
        }
    }

    public function render()
    {
        return view('profile.show', [
            'request' => [],
            'user' => $this->User,
        ]);
    }
}
