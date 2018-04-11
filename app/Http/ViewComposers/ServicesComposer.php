<?php

namespace App\Http\ViewComposers;

use App\Service;
use Illuminate\View\View;

class ServicesComposer
{
    public $services = [];
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct(Service $service)
    {
        $this->services = $service->where('status','published')->get()->pluck('name','slug');
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('services_list', $this->services);
    }
}
