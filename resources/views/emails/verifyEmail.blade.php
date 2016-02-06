<body style="background: #000;">
	<img src="{{ URL::asset('img/logo.png') }}" alt="Cocobrico" style="width: 90%; max-width: 300px; display: block; margin: 30px auto;">
	<div style="background: #fff; color: #000; padding: 20px; width: 90%; margin: 20px auto;">
		<p>Dear customer,</p>
		<p>Please verify your email address to continue your registration with Cocobrico Commercial Customers:</p>

		<p style="text-align: center; margin: 30px 0;">
			<span style="background: #ee1d23; padding: 10px; color: #fff; font-size: 1.25em;">
				{!! link_to('http://cb.pcserve.eu/register/'.$user->register_token, $title = 'Click here to verify your email address', $attributes = array(), $secure = null); !!}
			</span>
		</p>

		<p>If you have trouble activating your account, please contact us at info@cocobrico.com</p>
	</div>
	<div style="text-align: center; color: #fff;">&copy; <?=date("Y");?> Cocobrico Europe Ltd</div>
</body>