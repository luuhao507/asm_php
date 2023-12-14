
@section('title')
{{$title}}
@endsection
<script src="https://kit.fontawesome.com/abe2ad21fc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
<div class="login-wrap">
	<div class="login-html">
		<div class="x-logout"><a href="{{route('index')}}"><i class="fa-solid fa-xmark"></i></a></div>
        <div class="login-form">
                    <div class="mb-4 text-sm text-gray-200">
                        {{ __('Cảm ơn bạn đã đăng ký! Trước khi bắt đầu, bạn có thể xác minh địa chỉ email của mình bằng cách nhấp vào liên kết mà chúng tôi vừa gửi qua email cho bạn không? Nếu bạn không nhận được email, chúng tôi sẽ sẵn lòng gửi cho bạn một email khác.') }}
                    </div>
            
                    @if (session('status') == 'verification-link-sent')
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                        </div>
                    @endif
            
                    <div class="mt-4 flex items-center justify-between">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
            
                            <div class="btn btn-primary">
                                <button style="    background: none;
                                border: none;">
                                    {{ __('Xác nhận Email') }}
                                </button>
                            </div>
                        </form>
            
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
            
                            <button style="    background: none;
                            border: none;" type="submit" class="btn btn-primary">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>
             
			
		</div>
	</div>
</div>
<div class="login-backgroud"></div>
