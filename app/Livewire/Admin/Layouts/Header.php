<?php

namespace App\Livewire\Admin\Layouts;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component {
    public function logOut(Request $request) {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return $this->redirect(route('login'), navigate: true);
    }

    public function render() {
        return view('livewire.admin.layouts.header');
    }
}
