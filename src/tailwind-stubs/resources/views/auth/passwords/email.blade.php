@extends('layouts.master')

@section('content')
    <div class="h-2 bg-indigo"></div>
    <div class="container mx-auto px-8 py-4">
    	@include('auth.partials._nav')

        <div class="mx-auto max-w-sm mt-16">
            <div class="bg-white rounded shadow">
                <div class="border-b border-grey-lighter py-8 font-bold text-grey-darkest text-center text-xl tracking-wide uppercase">
                    {{ __('Reset Password') }}
                </div>

                <form class="px-8 py-8" method="POST" action="{{ route('password.email') }}">
                    @csrf

                    @if (session('status'))
                        <div class="bg-red-lightest border-l-4 border-red text-red-dark p-4 mb-6" role="alert">
                            <p class="font-bold">{{ session('status') }}</p>
                        </div>
                    @endif

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="email" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                                {{ __('E-Mail Address') }}
                            </label>

                            <input type="email" name="email" id="email" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter focus:outline-none focus:border-indigo-dark rounded py-3 px-4 mb-3" placeholder="johndoe@example.com" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <div class="mt-2" role="alert">
                                    <p class="text-red text-xs font-semibold tracking-wide">{{ $errors->first('email') }}</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <button type="submit" class="rounded bg-indigo hover:bg-indigo-dark w-full p-4 text-sm text-white uppercase font-bold tracking-wide focus:outline-none">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
