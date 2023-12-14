






@section('title')
{{$title}}
@endsection
<script src="https://kit.fontawesome.com/abe2ad21fc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
<div class="login-wrap">
	<div class="login-html">
		<div class="x-logout"><a href="{{route('index')}}"><i class="fa-solid fa-xmark"></i></a></div>
		<p>Quên mật khẩu? Không vấn đề gì. Chỉ cần cho chúng tôi biết địa chỉ email của bạn và chúng tôi sẽ gửi cho bạn một liên kết đặt lại mật khẩu qua email cho phép bạn chọn một mật khẩu mới.</p>
        <div class="login-form">
          
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
            
                        <!-- Email Address -->
                        <div>
                            <x-label for="email" :value="__('Email')" />
            
                            <x-input id="email" style=" width: 78%;margin-left: 2%;border-radius:10px;"  class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>
            
                        <div class="mt-4 btn btn-primary">
                            <button style="    background: none;
                            border: none;">
                                {{ __('Gửi Link Email') }}
                            </button>
                        </div>
                    </form>
             
		</div>
	</div>
</div>
<div class="login-backgroud"></div>
