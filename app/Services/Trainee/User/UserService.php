<?php

namespace App\Services\Trainee\User;

use App\Models\{
    User
};

class UserService {
    public function __construct(
        protected User $userModel
    )
    {}
    
    public function getUserById($id, $columns = ["*"], $with = [])
    {
        $query = $this->userModel->query()->select($columns);

        if(!empty($with)) {
            $query->with($with);
        }

        return $query->findOrFail($id);
    }
    
}