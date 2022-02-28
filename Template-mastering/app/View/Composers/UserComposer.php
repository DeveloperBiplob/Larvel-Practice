<?php

namespace App\View\Composers;

use App\Models\Shop;
use Illuminate\View\View;

class UserComposer
{
    public function compose(View $view)
    {
        $view->with('shop_names', Shop::get());
    }
}
