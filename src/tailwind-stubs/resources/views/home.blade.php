@extends('layouts.master')

@section('content')
	<div class="h-2 bg-indigo-dark"></div>
	<div class="container mx-auto px-8 py-4">
	    <nav class="flex justify-between items-center py-2 px-4 border-b border-grey-light mb-10">
	        <div class="mr-6">
	            <a href="{{ url('/') }}" class="text-2xl font-bold text-indigo hover:text-indigo-dark no-underline">
	                Laravel
	            </a>
	        </div>

	        <div>
	            <ul class="list-reset">
	                <li>
	                    <a href="{{ route('logout') }}" class="text-base no-underline text-grey-darker hover:text-grey-darkest" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
	                </li>
	            </ul>
	        </div>
	    </nav>

		<div class="max-w-sm mx-auto">
            <div class="bg-white rounded shadow">
                <div class="border-b border-grey-lighter py-8 font-bold text-grey-darkest text-center text-xl tracking-wide uppercase">
                    Dashboard
                </div>

                <div class="px-8 py-8">
					@if (session('status'))
                        <div class="bg-green-lightest border-l-4 border-green text-green-dark p-4 mb-6" role="alert">
                            <p class="font-bold">{{ session('status') }}</p>
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
	</div>
@endsection
