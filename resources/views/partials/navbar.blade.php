<nav class="sticky top-0 z-30 shadow bg-gray-800">
  <div class="container flex items-center py-6 px-[0px] xs:px-[18px] mx-auto capitalize text-gray-200">
    <a href="/" class="{{ ($active === "Home") ? ' text-gray-200 border-b-2 border-blue-600 mx-1.5 sm:mx-6 xs:mr-3' : 'border-b-2 border-transparent hover:text-gray-200 hover:border-blue-600 mx-1.5 sm:mx-6 xs:mr-3' }} ">Home</a>
    <a href="/books" class="{{ ($active === "Books") ? ' text-gray-200 border-b-2 border-blue-600 mx-1.5 sm:mx-6 xs:mr-3' : 'border-b-2 border-transparent hover:text-gray-200 hover:border-blue-600 mx-1.5 sm:mx-6 xs:mr-3' }} ">Books</a>
    <a href="/authors" class="{{ ($active === "Authors") ? ' text-gray-200 border-b-2 border-blue-600 mx-1.5 sm:mx-6 xs:mr-3' : 'border-b-2 border-transparent hover:text-gray-200 hover:border-blue-600 mx-1.5 sm:mx-6 xs:mr-3' }} ">Authors</a>
    <a href="/genres" class="{{ ($active === "Genres") ? ' text-gray-200 border-b-2 border-blue-600 mx-1.5 sm:mx-6 xs:mr-3' : 'border-b-2 border-transparent hover:text-gray-200 hover:border-blue-600 mx-1.5 sm:mx-6 xs:mr-3' }} ">Genres</a>
    <a href="/about" class="{{ ($active === "About") ? ' text-gray-200 border-b-2 border-blue-600 mx-1.5 sm:mx-6 xs:mr-3' : 'border-b-2 border-transparent hover:text-gray-200 hover:border-blue-600 mx-1.5 sm:mx-6 xs:mr-3' }} ">About</a>
    <div class="flex justify-end flex-1 mx-1.5">
      @auth
        <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" class="text-gray-200 bg-gray-600 font-normal rounded-lg text-md px-3.5 py-2.5 text-center inline-flex items-center" type="button">Profile <svg class="ml-2 w-3.5 h-3.5" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
        <div id="dropdownInformation" class="hidden z-10 w-48 bg-gray-600 rounded divide-y divide-gray-200 shadow" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 68px auto auto; margin: 0px; transform: translate3d(0px, 9.6px, 0px);">
          <div class="py-3 px-4 text-md text-gray-200">
            <div>{{ auth()->user()->name }}</div>
          </div>
          <ul class="py-1 text-md text-gray-200" aria-labelledby="dropdownInformationButton">
            <li>
              <a href="/dashboard" class="block py-2 px-4 text-md hover:text-gray-100">Dashboard</a>
            </li>
            <li>
              <a href="/dashboard/books" class="block py-2 px-4 text-md hover:text-gray-100">My Books</a>
            </li>
            {{-- If Admin show This, Else Hidden --}}
            @can('isAdmin')
              <li>
                <a href="/dashboard/genres" class="block py-2 px-4 text-md hover:text-gray-100">Genres</a>
              </li>
            @endcan
          </ul>
          <div class="py-1">
            <form action="/logout" method="POST">
              @csrf
              <button type="submit" class="block py-2 px-4 text-md hover:text-gray-100">Logout</button>
            </form>
          </div>
        </div>
      @else
        <a href="/login" class="{{ ($active === "Login") ? ' text-gray-200 border-b-2 border-blue-600 mx-1.5 sm:mx-6' : 'border-b-2 border-transparent hover:text-gray-200 hover:border-blue-600 mx-1.5 sm:mx-6' }} ">Login</a>
      @endauth
    </div>
  </div>
</nav>