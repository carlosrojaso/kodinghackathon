<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		{{trans('emails.header')}}
		<a href="{{ URL::to('users') }}/{{ $userId }}/activate/{{ urlencode($activationCode) }}">{{trans('emails.click')}}.</a>
		{{trans('emails.footer')}}
	</body>
</html>