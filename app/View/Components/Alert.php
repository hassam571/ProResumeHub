<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public $icon;
    public $title;
    public $message;

    public function __construct($type = 'info', $icon = null, $title = '', $message = '')
    {
        $this->type = $type;
        $this->icon = $icon;
        $this->title = $title;
        $this->message = $message;
    }

    public function render()
    {
        return view('components.alert');
    }
}
