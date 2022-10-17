<nav class="bg-white shadow dark:bg-gray-800">
  <div class="container flex items-center justify-center p-6 mx-auto text-gray-600 capitalize dark:text-gray-300">
    <a href="/" class="{{ ($title === "Home") ? 'text-gray-800 dark:text-gray-200 border-b-2 border-blue-500 mx-1.5 sm:mx-6' : 'border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6' }} ">Home</a>
    <a href="/books" class="{{ ($title === "Books") ? 'text-gray-800 dark:text-gray-200 border-b-2 border-blue-500 mx-1.5 sm:mx-6' : 'border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6' }} ">Books</a>
    <a href="/about" class="{{ ($title === "About") ? 'text-gray-800 dark:text-gray-200 border-b-2 border-blue-500 mx-1.5 sm:mx-6' : 'border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6' }} ">About</a>
  </div>
</nav>