<div>
    <livewire:admin.layouts.breadcrumb :parent='__("main.settings")'/>
    <div class="card">
        <div class="card-body">
            <div @class(['relative px-4 py-3 mb-3 text-sm bg-white border rounded-md dark:bg-zink-700 opacity-0',
                'text-green-500 border-green-300 dark:border-green-500 opacity-100' => session('success'),
                'text-red-500 border-red-300 dark:border-red-500 opacity-100' => session('error')])>
                <button @class(['absolute top-0 bottom-0 right-0 p-3 transition',
                    'text-green-200 hover:text-green-500 dark:text-green-400/50 dark:hover:text-green-500' => session('success'),
                    'text-red-200 hover:text-red-500 dark:text-red-400/50 dark:hover:text-red-500' => session('error')])
                        wire:click="closeAlert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         data-lucide="x" class="lucide lucide-x h-5">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
                @if(session('success'))
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         data-lucide="check-circle"
                         class="lucide lucide-check-circle inline-block size-4 mt-0.5 shrink-0">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <path d="m9 11 3 3L22 4"></path>
                    </svg>
                    {{ session('success') }}
                @elseif(session('error'))
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         data-lucide="alert-triangle"
                         class="lucide lucide-alert-triangle inline-block size-4 mt-0.5 shrink-0">
                        <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path>
                        <path d="M12 9v4"></path>
                        <path d="M12 17h.01"></path>
                    </svg>
                    {{ session('error') }}
                @endif
            </div>
            <form wire:submit.prevent="submit" method="POST" enctype="multipart/form-data">
                <div>
                    <ul class="flex flex-wrap w-full text-sm font-medium text-center nav-tabs">
                        @foreach($this->languages as $language)
                            <li @class(['group', 'active' => $loop->first])>
                                <a href="javascript:void(0);" data-tab-toggle data-target="{{ $language }}"
                                   class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 group-[.active]:text-white hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]">
                                    @lang("main.$language")
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="mt-5 tab-content">
                        @foreach($this->languages as $language)
                            <div @class(['tab-pane', 'block' => $loop->first, 'hidden' => !$loop->first])
                                 id="{{ $language }}">
                                <div class="mb-3">
                                    <label for="title" class="inline-block mb-2 text-base font-medium">
                                        @lang("main.title") <span class="text-red-500">
                                            *
                                        </span>
                                    </label>
                                    <input type="text" id="title" wire:model="title_{{ $language }}" required
                                           placeholder="@lang("main.title")"
                                           class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"/>
                                </div>
                                <div class="mb-3">
                                    <label for="author" class="inline-block mb-2 text-base font-medium">
                                        @lang("main.author") <span class="text-red-500">
                                            *
                                        </span>
                                    </label>
                                    <input type="text" id="author" wire:model="author_{{ $language }}" required
                                           placeholder="@lang("main.author")"
                                           class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"/>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="inline-block mb-2 text-base font-medium">
                                        @lang("main.description") <span class="text-red-500">
                                            *
                                    </span>
                                    </label>
                                    <textarea id="description" placeholder="@lang("main.description")" rows="3"
                                              required wire:model="description_{{ $language }}"
                                              class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="keywords" class="inline-block mb-2 text-base font-medium">
                                        @lang("main.keywords") <span class="text-red-500">
                                            *
                                    </span>
                                    </label>
                                    <textarea id="keywords" placeholder="@lang("main.keywords")" rows="3" required
                                              wire:model="keywords_{{ $language }}"
                                              class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"></textarea>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="grid grid-cols-2 gap-4 mb-3">
                        <div class="mb-3">
                            <input type="file" accept="image/*" wire:model="logo"
                                   class="cursor-pointer form-file form-file-sm border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500"/>
                            @if($logo)
                                <img src="{{ $logo->temporaryUrl() }}" alt="" class="size-24 my-3 mx-auto"/>
                            @else
                                <img src="{{ $preLogo }}" alt="" class="size-24 my-3 mx-auto"/>
                            @endif
                        </div>
                        <div class="mb-3">
                            <input type="file" accept="image/*" wire:model="favicon"
                                   class="cursor-pointer form-file form-file-sm border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500"/>
                            @if($favicon)
                                <img src="{{ $favicon->temporaryUrl() }}" alt="" class="size-24 my-3 mx-auto"/>
                            @else
                                <img src="{{ $preFavicon }}" alt="" class="size-24 my-3 mx-auto"/>
                            @endif
                        </div>
                    </div>
                </div>
                <button type="submit"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                    @lang("main.update")
                </button>
            </form>
        </div>
    </div>
</div>
