<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public $class;
    public function __construct($type = 'info')
    {
        switch($type){
            case 'info':
                $this->class = 'bg-blue-100 text-blue-700';
                break;
            case 'success':
                $this->class = 'bg-green-100 text-green-700';
                break;
            case 'error':
                $this->class = 'bg-red-100 text-red-700';
                break;
            default:
                $this->class = 'bg-gray-100 text-gray-700';
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
