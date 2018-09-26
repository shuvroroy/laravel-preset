@extends('layouts.master')

@section('content')
    <div class="h-2 bg-indigo-dark"></div>
    <div class="container mx-auto px-8 py-4">
		@include('auth.partials._nav')

        <div class="mx-auto max-w-sm mt-16">
            <div class="bg-white rounded shadow">
                <div class="border-b border-grey-lighter py-8 font-bold text-grey-darkest text-center text-xl tracking-wide uppercase">
                    {{ __('Login') }}
                </div>

                <form class="px-8 py-8" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-8">
                        <label for="email" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                            {{ __('E-Mail Address') }}
                        </label>

                        <input type="email" name="email" id="email" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded p-3 focus:outline-none focus:border-indigo-dark" placeholder="john@example.com" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <div class="mt-2" role="alert">
                                <p class="text-red text-xs font-semibold tracking-wide">{{ $errors->first('email') }}</p>
                            </div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="password" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                            {{ __('Password') }}
                        </label>

                        <input type="password" name="password" id="password" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded p-3 focus:outline-none focus:border-indigo-dark" placeholder="********" required>

                        @if ($errors->has('password'))
                            <div class="mt-2" role="alert">
                                <p class="text-red text-xs font-semibold tracking-wide">{{ $errors->first('password') }}</p>
                            </div>
                        @endif
                    </div>

                    <div class="mb-8">
                        <div class="md:flex md:items-center mb-6">
                            <label class="md:w-2/3 block text-grey font-bold">
                                <input type="checkbox" name="remember" class="mr-2 leading-tight" {{ old('remember') ? 'checked' : '' }}>
                                <span class="uppercase tracking-wide text-grey-darker text-xs font-bold">
                                    {{ __('Remember Me') }}
                                </span>
                            </label>
                        </div>
                    </div>

                    <div class="flex">
                        <button type="submit" class="rounded bg-indigo hover:bg-indigo-dark w-full p-4 text-sm text-white uppercase font-bold tracking-wide">
                            {{ __('Login') }}
                        </button>
                    </div>
                </form>

                <div class="border-t border-grey-lighter px-8 py-6">
                    <div class="flex justify-between">
                        <a href="{{ route('register') }}" class="font-bold text-indigo hover:text-indigo-dark no-underline">Don't have an account?</a>
                        <a href="{{ route('password.request') }}" class="text-grey-darker hover:text-grey-darkest no-underline">{{ __('Forgot Your Password?') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
