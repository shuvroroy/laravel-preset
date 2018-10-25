<nav class="flex justify-between items-center py-2 px-4 border-b border-grey-light">
	<div class="mr-6">
		<a href="{{ url('/') }}" class="text-2xl font-bold text-indigo hover:text-indigo-dark no-underline">
			{{ config('app.name', 'Laravel') }}
		</a>
	</div>

	<div>
		<ul class="list-reset flex">
			@if (Route::has('login'))
				@auth
					<li class="flex items-center cursor-pointer text-grey-darker mr-4">
						<svg class="w-4 h-4 mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"/></svg>
						<p class="text-base">{{ Auth::user()->name }}</p>
					</li>
					<li class="flex items-center cursor-pointer text-grey-darker">
						<svg class="w-4 h-4 mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.16 4.16l1.42 1.42A6.99 6.99 0 0 0 10 18a7 7 0 0 0 4.42-12.42l1.42-1.42a9 9 0 1 1-11.69 0zM9 0h2v8H9V0z"/></svg>
						<a href="{{ route('logout') }}" class="text-base no-underline text-grey-darker" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
					</li>
				@else
					<li class="mr-4">
						<a href="{{ route('login') }}" class="text-base no-underline text-grey-darker hover:text-grey-darkest">Login</a>
					</li>
					<li>
						<a href="{{ route('register') }}" class="text-base no-underline text-grey-darker hover:text-grey-darkest">Register</a>
					</li>
				@endauth
			@endif
		</ul>
	</div>
</nav>
