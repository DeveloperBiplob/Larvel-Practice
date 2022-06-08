<?php

namespace App\View\Composers;
use Illuminate\View\View;

class ViewNameComposer
{
    public function compose(View $view)
    {
        $view->with('roll', 202020202505);
    }
}
