<?php

namespace Elshaden\LivewireUsermgt\Actions;

use Elshaden\LivewireUsermgt\Repositories\UserRepository;

class UserActions
{

    protected UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function count(){
        return $this->repository->all()->count() ;
    }

}
                                                                 ;
