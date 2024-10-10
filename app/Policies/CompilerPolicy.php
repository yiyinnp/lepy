<?php

namespace App\Policies;

use App\Models\Compiler;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompilerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Compiler  $compiler
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Compiler $compiler)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Compiler  $compiler
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Compiler $compiler)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Compiler  $compiler
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Compiler $compiler)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Compiler  $compiler
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Compiler $compiler)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Compiler  $compiler
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Compiler $compiler)
    {
        //
    }
}
