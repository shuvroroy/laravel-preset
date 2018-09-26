@extends('layouts.master')

@section('content')
    <div class="h-2 bg-indigo"></div>
    <div class="container mx-auto px-8 py-4">
    	@include('auth.partials._nav')

        <div class="mx-auto max-w-sm mt-16">
            <div class="bg-white rounded shadow">
                <div class="border-b border-grey-lighter py-8 font-bold text-grey-darkest text-center text-xl tracking-wide uppercase">
                    Verify Your Email Address
                </div>

                <div class="px-8 py-8">
                    @if (session('resent'))
                        <div class="bg-indigo-lightest border-l-4 border-indigo text-indigo-dark p-4 mb-6" role="alert">
                            <p class="font-bold">A fresh verification link has been sent to your email address.</p>
                        </div>
                    @endif

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <p class="text-base text-grey-darker tracking-wide leading-normal">Before proceeding, please check your email for a verification link.
                    If you did not receive the email, <a href="{{ route('verification.resend') }}" class="font-bold text-indigo hover:text-indigo-dark no-underline">click here to request another</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
