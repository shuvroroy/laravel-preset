@extends('layouts.master')

@section('content')
	<div class="h-2 bg-indigo-dark"></div>
	<div class="container mx-auto px-8 py-4">
	    @include('layouts.partials._nav')

		<div class="max-w-sm mx-auto mt-16">
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
