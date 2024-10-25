<?php

namespace App\Livewire\Admin\Layouts;

use Livewire\Component;

class Breadcrumb extends Component {
    public ?string $parent;

    public function render() {
        return view('livewire.admin.layouts.breadcrumb', [
            'parent' => $this->parent
        ]);
    }
}
