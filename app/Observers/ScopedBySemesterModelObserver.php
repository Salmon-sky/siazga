<?php

namespace App\Observers;

use App\Models\Semester;

class ScopedBySemesterModelObserver
{
    //
    public function creating($model)
    {
        $model->semester_id = Semester::where('is_active', 1)->first()->id;
    }
}
