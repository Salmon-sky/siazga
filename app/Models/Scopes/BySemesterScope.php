<?php

namespace App\Models\Scopes;

use App\Models\Semester;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class BySemesterScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     */
    public function apply(Builder $builder, Model $model): void
    {
        //
        $currentSemester = Semester::where('is_active', 1)->first();
        $builder->where('semester_id', $currentSemester->id);
    }
}
