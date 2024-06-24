<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Services Content') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Website Services Content Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your website 's Services Content") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('update-services-content') }}" class="mt-6 space-y-6">
        @csrf

        <div>
    <x-input-label for="refreshing_design" :value="__('Refreshing Design : Description')" />
    <textarea id="refreshing_design" name="refreshing_design" class="mt-1 block w-full" required autofocus autocomplete="refreshing_design">{{$services_data->refreshing_design}}</textarea>
    <x-input-error class="mt-2" :messages="$errors->get('refreshing_design')" />
</div>


<div>
    <x-input-label for="solid_bootstrap" :value="__('Solid Bootstrap : Description')" />
    <textarea id="solid_bootstrap" name="solid_bootstrap" class="mt-1 block w-full" required autofocus autocomplete="solid_bootstrap">{{$services_data->solid_bootstrap}}</textarea>
    <x-input-error class="mt-2" :messages="$errors->get('solid_bootstrap')" />
</div>

<div>
    <x-input-label for="speed" :value="__('Speed : Description')" />
    <textarea id="speed" name="speed" class="mt-1 block w-full" required autofocus autocomplete="speed">{{$services_data->speed}}</textarea>
    <x-input-error class="mt-2" :messages="$errors->get('speed')" />
</div>

<div>
    <x-input-label for="fully_customizable" :value="__('Fully Customizable : Description')" />
    <textarea id="fully_customizable" name="fully_customizable" class="mt-1 block w-full" required autofocus autocomplete="fully_customizable">{{$services_data->fully_customizable}}</textarea>
    <x-input-error class="mt-2" :messages="$errors->get('fully_customizable')" />
</div>

<div>
    <x-input-label for="regular_updates" :value="__('Regular Updates : Description')" />
    <textarea id="regular_updates" name="regular_updates" class="mt-1 block w-full" required autofocus autocomplete="regular_updates">{{$services_data->regular_updates}}</textarea>
    <x-input-error class="mt-2" :messages="$errors->get('regular_updates')" />
</div>


<div>
    <x-input-label for="components" :value="__('Components : Description')" />
    <textarea id="components" name="components" class="mt-1 block w-full" required autofocus autocomplete="components">{{$services_data->components}}</textarea>
    <x-input-error class="mt-2" :messages="$errors->get('components')" />
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
