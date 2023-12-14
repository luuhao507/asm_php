
@section('title')
{{$title}}
@endsection
<script src="https://kit.fontawesome.com/abe2ad21fc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
<div class="login-wrap">
	<div class="login-html">
		<div class="x-logout"><a href="{{route('index')}}"><i class="fa-solid fa-xmark"></i></a></div>
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Đăng Nhập</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Đăng Ký</label>
        <div class="login-form">
		
			<div class="sign-in-htm">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email Address -->
                    <div>
                        <x-label for="email" :value="__('Email')" />
                        <x-input style=" width: 80%;margin-left: 8%;border-radius:10px;"  id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />
                        <x-input style=" width: 78%;margin-left: 2%;border-radius:10px;" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>
        
                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-200">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-200 hover:text-gray-900" style="color:white;" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        <x-button class="ml-3 btn btn-primary">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>	
			</div>
			<div class="sign-up-htm">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
        
                    <!-- Name -->
                    <div>
                        <x-label for="name" :value="__('Name')" />
                        <x-input style=" width: 68%;margin-left: 21%;border-radius:10px;" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    </div>
        
                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-label for="email" :value="__('Email')" />
        
                        <x-input style=" width: 66%;margin-left: 22%;border-radius:10px;" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    </div>
        
                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />
                        <x-input style=" width: 66%;margin-left: 15%;border-radius:10px;" id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
                    </div>
        
                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-label for="password_confirmation" :value="__('Confirm Password')" />
        
                        <x-input style=" width: 65%;margin-left: 2%;border-radius:10px;" id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required />
                    </div>
        
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-200 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
        
                        <x-button class="ml-4 btn btn-primary">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                </form>
			</div>
		</div>
	</div>
</div>
<div class="login-backgroud"></div>
