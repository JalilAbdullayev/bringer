<?php

namespace App\Livewire\Admin;

use Exception;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Settings as SettingsModel;
use Livewire\WithFileUploads;
use RuntimeException;

class Settings extends Component {
    use WithFileUploads;

    public array $languages;
    #[Validate('required')]
    public string $title_en;
    #[Validate('required')]
    public string $title_az;
    #[Validate('required')]
    public string $title_ru;
    #[Validate('required')]
    public string $author_en;
    #[Validate('required')]
    public string $author_az;
    #[Validate('required')]
    public string $author_ru;
    #[Validate('required')]
    public string $description_en;
    #[Validate('required')]
    public string $description_az;
    #[Validate('required')]
    public string $description_ru;
    #[Validate('required')]
    public string $keywords_en;
    #[Validate('required')]
    public string $keywords_az;
    #[Validate('required')]
    public string $keywords_ru;
    #[Validate('image|max:2048')]
    public $logo;
    public $preLogo;
    #[Validate('image|max:2048')]
    public $favicon;
    public $preFavicon;

    public function mount(): void {
        $this->languages = ['en', 'az', 'ru'];
        $settings = SettingsModel::first();
        foreach($this->languages as $language) {
            $this->{'title_' . $language} = $settings->getTranslation('title', $language);
            $this->{'author_' . $language} = $settings->getTranslation('author', $language);
            $this->{'description_' . $language} = $settings->getTranslation('description', $language);
            $this->{'keywords_' . $language} = $settings->getTranslation('keywords', $language);
        }
        $this->preLogo = asset("storage/settings/$settings->logo");
        $this->preFavicon = asset("storage/settings/$settings->favicon");
    }

    public function submit(): void {
        $settings = SettingsModel::first();
        try {
            foreach($this->languages as $language) {
                if(!$this->{"title_$language"} || !$this->{"author_$language"} || !$this->{"description_$language"} || !$this->{"keywords_$language"}) {
                    throw new RuntimeException();
                }
                $settings->setTranslation('title', $language, $this->{"title_$language"});
                $settings->setTranslation('author', $language, $this->{"author_$language"});
                $settings->setTranslation('description', $language, $this->{"description_$language"});
                $settings->setTranslation('keywords', $language, $this->{"keywords_$language"});
            }
            if($this->logo) {
                $settings->logo = $this->logo->hashName();
                $this->logo->store('settings', 'public');
            }
            if($this->favicon) {
                $settings->favicon = $this->favicon->hashName();
                $this->favicon->store('settings', 'public');
            }
            $settings->save();
            session()->flash('success', __("main.operation_success"));
        } catch(Exception) {
            session()->flash('error', __("main.operation_error"));
        }
    }

    public function closeAlert(): void {
        session()->flash('success', null);
        session()->flash('error', null);
    }

    #[Layout('admin.master')]
    public function render(): View {
        return view('livewire.admin.settings');
    }
}
