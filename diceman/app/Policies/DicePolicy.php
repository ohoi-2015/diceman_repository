<?php

namespace App\Policies;

use App\Models\Dice;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class DicePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Dice $dice): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function index(User $user, Dice $dice): bool
    {
        return $dice->user()->is($user);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Dice $dice): bool
    {
        return $this->index($user, $dice);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Dice $dice): bool
    {
        return $this->index($user, $dice);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Dice $dice): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Dice $dice): bool
    {
        //
    }
}
