<x-guest-layout>
    <x-jet-authentication-card>
   

        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        

        <x-jet-validation-errors class="mb-4" />
        <h2 class="text-center">Update User</h2><br>

        <form method="POST" action="{{route('updateUser')}}" class="form-horizontal" class="dropzone" enctype="multipart/form-data">
            @csrf

            <input name="id" type="hidden" class="form-control" id="fname" value="{{$edits->id}}">

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name"  required autofocus autocomplete="name" value="{{$edits->name}}"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$edits->email}}" required />
            </div>

<br>
            <x-jet-button class="ml-4">
                    {{ __('Update') }}
                </x-jet-button>

            
        </form>

        @if(session('success_msg'))
        <span style="color:green">{{session('success_msg')}}</span>
        @endif


    </x-jet-authentication-card>
</x-guest-layout>
