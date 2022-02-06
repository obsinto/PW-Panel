<?php


/*
 * @author Harris Marfel <hrace009@gmail.com>
 * @link https://www.hrace009.com
 * @copyright Copyright (c) 2022.
 */

namespace App\View\Components\Hrace009;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Balance extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render()
    {
        $balance = Auth::user()->money . ' ' . config('pw-config.currency_name');
        return view('components.hrace009.balance', [
            'balance' => $balance,
        ]);
    }
}