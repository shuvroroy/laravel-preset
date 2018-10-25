@extends('layouts.master')

@section('content')
    <div class="h-2 bg-indigo"></div>
    <div class="container mx-auto px-8 py-4">
    	@include('layouts.partials._nav')

        <div class="mx-auto max-w-md mt-16">
            <div class="bg-white rounded shadow">
                <div class="border-b border-grey-lighter py-8 font-bold text-grey-darkest text-center text-xl tracking-wide uppercase">
                    {{ __('Register') }}
                </div>

                <form class="px-8 py-8" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <label for="name" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                                {{ __('Name') }}
                            </label>

                            <input type="text"
                            name="name" id="name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded border-grey-lighter focus:outline-none focus:border-indigo-dark py-3 px-4 mb-3" placeholder="John Doe" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <div class="mt-2" role="alert">
                                    <p class="text-red text-xs font-semibold tracking-wide">{{ $errors->first('name') }}</p>
                                </div>
                            @endif
                        </div>
                    </div>

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
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label for="password" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                                {{ __('Password') }}
                            </label>

                            <input type="password" name="password" id="password" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter focus:outline-none focus:border-indigo-dark rounded py-3 px-4 mb-3" placeholder="********" required>

                            @if ($errors->has('password'))
                                <div class="mt-2" role="alert">
                                    <p class="text-red text-xs font-semibold tracking-wide">{{ $errors->first('password') }}</p>
                                </div>
                            @endif
                        </div>

                        <div class="w-full md:w-1/2 px-3">
                            <label for="password-confirm" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">
                                {{ __('Confirm Password') }}
                            </label>

                            <input type="password" name="password_confirmation" id="password-confirm" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter focus:outline-none focus:border-indigo-dark rounded py-3 px-4 mb-3" placeholder="********" required>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <button type="submit" class="rounded bg-indigo hover:bg-indigo-dark w-full p-4 text-sm text-white uppercase font-bold tracking-wide focus:outline-none">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>

                <div class="border-t border-grey-lighter px-8 py-6">
                    <a href="{{ route('login') }}" class="font-bold text-indigo hover:text-indigo-dark no-underline">Already have an account?</a>
                </div>
            </div>
        </div>
    </div>
@endsection
