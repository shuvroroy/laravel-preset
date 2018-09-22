@extends('layouts.master')

@section('content')
	<div class="h-2 bg-indigo-dark"></div>
	<div class="container mx-auto px-8 py-4">
	    <nav class="flex justify-between items-center py-2 px-4 border-b border-grey-light">
	        <div class="mr-6">
	            <a href="{{ url('/') }}" class="text-2xl font-bold text-indigo hover:text-indigo-dark no-underline">
	                Laravel
	            </a>
	        </div>
	        <div>
	            <ul class="list-reset flex">
	            	@if (Route::has('login'))
		            	@auth
		            		<li>
			                    <a href="{{ url('/home') }}" class="text-xl no-underline text-grey-darker hover:text-grey-darkest">Home</a>
			                </li>
	                    @else
	                    	<li class="mr-4">
			                    <a href="{{ route('login') }}" class="text-xl no-underline text-grey-darker hover:text-grey-darkest">Login</a>
			                </li>
			                <li>
			                    <a href="{{ route('register') }}" class="text-xl no-underline text-grey-darker hover:text-grey-darkest">Register</a>
			                </li>
	                    @endauth
                    @endif
	            </ul>
	        </div>
	    </nav>

		<div class="min-h-screen flex items-center justify-center -my-24">
		    <h1 class="text-2xl sm:text-5xl text-indigo font-sans">Laravel Tailwindcss Preset.</h1>
		</div>
	</div>
@endsection
