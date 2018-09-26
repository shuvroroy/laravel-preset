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
	                    <a href="{{ url('/home') }}" class="text-base no-underline text-grey-darker hover:text-grey-darkest">Home</a>
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
