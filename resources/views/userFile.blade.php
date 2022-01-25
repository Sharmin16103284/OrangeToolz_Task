<x-app-layout>

    <div class="container mt-5">
    <form method="POST" action="{{route('insertFile')}}" class="form-horizontal" id="form" enctype="multipart/form-data">
            @csrf 

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="file" value="{{ __('Select a csv File') }}" />
                <x-jet-input id="file" class="block mt-1 w-full" type="file" name="file" :value="old('file')" accept=".csv" required />
            </div>



            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Submit') }}
                </x-jet-button>
            </div>
        </form>
    </div>

</x-app-layout>
