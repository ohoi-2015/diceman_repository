<?php

namespace App\Policies;

use App\Models\Topic;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TopicPolicy
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
    public function view(User $user, Topic $topic): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function index(User $user, Topic $topic): bool
    {
        return $topic->user()->is($user);
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
    public function update(User $user, Topic $topic): bool
    {
        return $this->index($user, $topic);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Topic $topic): bool
    {
        return $this->index($user, $topic);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Topic $topic): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Topic $topic): bool
    {
        //
    }
}
