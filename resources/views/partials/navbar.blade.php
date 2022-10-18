<nav class="bg-white shadow dark:bg-gray-800">
  <div class="container flex items-center justify-center p-6 mx-auto text-gray-600 capitalize dark:text-gray-300">
    <a href="/" class="{{ ($active === "Home") ? 'text-gray-800 dark:text-gray-200 border-b-2 border-blue-500 mx-1.5 sm:mx-6' : 'border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6' }} ">Home</a>
    <a href="/books" class="{{ ($active === "Books") ? 'text-gray-800 dark:text-gray-200 border-b-2 border-blue-500 mx-1.5 sm:mx-6' : 'border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6' }} ">Books</a>
    <a href="/authors" class="{{ ($active === "Authors") ? 'text-gray-800 dark:text-gray-200 border-b-2 border-blue-500 mx-1.5 sm:mx-6' : 'border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6' }} ">Authors</a>
    <a href="/genres" class="{{ ($active === "Genres") ? 'text-gray-800 dark:text-gray-200 border-b-2 border-blue-500 mx-1.5 sm:mx-6' : 'border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6' }} ">Genres</a>
    <a href="/about" class="{{ ($active === "About") ? 'text-gray-800 dark:text-gray-200 border-b-2 border-blue-500 mx-1.5 sm:mx-6' : 'border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6' }} ">About</a>
  </div>
</nav>