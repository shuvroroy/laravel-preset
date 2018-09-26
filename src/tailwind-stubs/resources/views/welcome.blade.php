@extends('layouts.master')

@section('content')
	<div class="h-2 bg-indigo-dark"></div>
	<div class="container mx-auto px-8 py-4">
	 	@include('auth.partials._nav')

		<div class="min-h-screen flex items-center justify-center -my-24">
		    <h1 class="text-2xl sm:text-5xl text-indigo font-sans">Laravel Tailwindcss Preset.</h1>
		</div>
	</div>
@endsection
