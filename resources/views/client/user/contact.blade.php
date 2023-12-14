@extends('user');
@section('title')
{{$title}}
@endsection
@section('container')
<div id="colorlib-contact">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3>Thông tin liên lạc</h3>
				<div class="row contact-info-wrap">
					<div class="col-md-4">
						<p><span><i class="icon-location"></i></span> 288 Nguyễn Văn Linh <br>Phường Hưng Lợi, Quận Ninh Kiều,TP Cần Thơ</p>
					</div>
					<div class="col-md-2">
						<p><span><i class="icon-phone3"></i></span> <a href="tel://0839207820">+8439207820</a></p>
					</div>
					<div class="col-md-4">
						<p><span><i class="icon-paperplane"></i></span> <a href="mailto:luonghoangphat2001@gmail.com">luonghoangphat2001@gmail.com</a></p>
					</div>
					<div class="col-md-2">
						<p><span><i class="icon-globe"></i></span> <a href="#">footwear.com</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="contact-wrap">
					<h3>Liên Lạc</h3>
					<form action="#" class="contact-form">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="fname">Họ và tên</label>
									<input type="text" id="fname" class="form-control" placeholder="Họ và tên">
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-sm-12">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" id="email" class="form-control" placeholder="Địa chỉ eamil">
								</div>
							</div>
							<div class="w-100"></div>
					
							<div class="w-100"></div>
							<div class="col-sm-12">
								<div class="form-group">
									<label for="message">Nội Dung</label>
									<textarea name="message" id="message" cols="30" rows="10" class="form-control"
										placeholder="Bạn hãy nhập nội dung bạn muốn nhắn cho chúng tôi"></textarea>
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-sm-12">
								<div class="form-group">
									<input type="submit" value="Gửi tin nhắn" class="btn btn-primary">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-6">
				<div id="map" class="colorlib-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.878873932077!2d105.7551225146157!3d10.026853092832743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a088476bb00027%3A0xd3c02747d1cbc8c6!2zMjg4IMSQxrDhu51uZyBOZ3V54buFbiBWxINuIExpbmgsIEjGsG5nIEzhu6NpLCBOaW5oIEtp4buBdSwgQ-G6p24gVGjGoSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1658738073416!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection