<body style="background: #000;">
	<img src="{{ URL::asset('img/logo.svg') }}" alt="Cocobrico" style="width: 300px; display: block; margin: 0 auto 30px">
	<div style="background: #fff; color: #000; padding: 20px; width: 600px; margin: 20px auto;">
		<p>Dear customer,</p>
		<p>Please verify your email address to continue your registration with Cocobrico Commercial Customers:</p>

		<p style="text-align: center;"><span style="background: #ee1d23; padding: 10px; color: #fff; font-size: 1.25em;">{!! link_to('http://cb.pcserve.eu/register/'.$user->register_token, $title = 'Click here to verify your email address', $attributes = array(), $secure = null); !!}</span></p>

		<p>If you have trouble activating your account, please contact us at info@cocobrico.com</p>
	</div>
	<div style="text-align: center; color: #fff;">&copy; <?=date("Y");?> Cocobrico Europe Ltd</div>
</body>