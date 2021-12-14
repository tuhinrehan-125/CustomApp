@extends('layouts.master-layouts')

@section('title') Article @endsection

@section('css')
@endsection

@section('content')

	

	<!-- home section starts  -->

	<section class="home" id="home">
		<div class="profile">
			<h2>Username: {{ $LoggedUserInfo['name'] }}</h2>
	    	<h2>Email: {{ $LoggedUserInfo['email'] }}</h2>
		</div>
	    

	</section>

	@endsection

@section('script')
@endsection