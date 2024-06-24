<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pricing Content') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Website Pricing Content Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your website 's Pricing Content") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('update-pricing-content') }}" class="mt-6 space-y-6">
        @csrf
       
        <div>
            <x-input-label for="starter" :value="__('Starter Pricing')" />
            <x-text-input id="starter" name="starter" type="text" class="mt-1 block w-full"  required autofocus autocomplete="starter" value="{{$pricing_data->starter}}"/>
            <x-input-error class="mt-2" :messages="$errors->get('starter')" />
        </div>

        <div>
            <x-input-label for="exclusive" :value="__('Exclusive Pricing')" />
            <x-text-input id="exclusive" name="exclusive" type="text" class="mt-1 block w-full"  required autofocus autocomplete="exclusive" value="{{$pricing_data->exclusive}}" />
            <x-input-error class="mt-2" :messages="$errors->get('exclusive')" />
        </div>

        <div>
            <x-input-label for="premium" :value="__('Premium Pricing')" />
            <x-text-input id="premium" name="premium" type="text" class="mt-1 block w-full"  required autofocus autocomplete="premium" value="{{$pricing_data->premium}}" />
            <x-input-error class="mt-2" :messages="$errors->get('premium')" />
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
