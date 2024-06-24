<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Header Content') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Website Header Content Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your website 's Main Header Content") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('update-header-content') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
       

        <div>
            <x-input-label for="name" :value="__('Main Name')" />
            <x-text-input id="name" name="main_name" type="text" class="mt-1 block w-full"  required autofocus autocomplete="Main Name" value="{{$header_data->main_name}}" />
            <x-input-error class="mt-2" :messages="$errors->get('main_name')" />
        </div>

        <div>
    <x-input-label for="description" :value="__('Description')" />
    <textarea id="description" name="description" class="mt-1 block w-full" required autofocus autocomplete="description">{{$header_data->description}}</textarea>
    <x-input-error class="mt-2" :messages="$errors->get('description')" />
</div>


        <div>
           
            <x-input-label for="name" :value="__('Main Header Image')" />
            
            <img  id="image-preview" src="/assets/img/{{$header_data->image}}" style="height: 80px; width: 80px; border-radius: 50%;" alt="">
           

            <x-text-input id="image" name="image" type="file" class="mt-1 block w-full"   required autofocus autocomplete="off"  accept="image/*"/>
            <x-input-error class="mt-2" :messages="$errors->get('image')" />
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
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
            $('#image').on('change', function(event) {
                var file = event.target.files[0];
                if (file) {
                    // Get the file name
                    var fileName = file.name;
                    

                    // Create a URL for the file to use it for preview
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image-preview').attr('src', e.target.result).show();
                    }
                    reader.readAsDataURL(file);
                } else {
                    $('#file-info').text('No file selected');
                    $('#image-preview').empty();
                }
            });
        });
</script>
