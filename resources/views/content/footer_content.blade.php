<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Footer Content') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Website Footer Content Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your website 's Footer Content") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('update-footer-content') }}" class="mt-6 space-y-6">
        @csrf
        
        <div>
            <x-input-label for="name" :value="__('Main Name')" />
            <x-text-input id="name" name="main_name" type="text" class="mt-1 block w-full"  required autofocus autocomplete="Main Name" value="{{$footer_data->main_name}}"/>
            <x-input-error class="mt-2" :messages="$errors->get('main_name')" />
        </div>

        <div>
    <x-input-label for="description" :value="__('Footer Description')" />
    <textarea id="description" name="description" class="mt-1 block w-full" required autofocus autocomplete="description">{{$footer_data->description}}</textarea>
    <x-input-error class="mt-2" :messages="$errors->get('description')" />
</div>


        

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

                </div>
            </div>

           
        </div>
    </div>
</x-app-layout>
