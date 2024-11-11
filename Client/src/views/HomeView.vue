<script setup>
import NavBar from "@/components/NavBar.vue";
</script>

<template>

  <NavBar/>
  <section class="md:ml-24 lg:ml-44 p-4 md:p-10 h-screen   text-white ">
    <div
        class="flex flex-col sm:flex-col items-center lg:ml-96 mx-auto sm:py-20 lg:py-4 space-y-6 sm:space-y-0 sm:space-x-8 ">

      <div>
        <div class="flex flex-row space-x-2 col-span-2">
          <img src="/login.jpg" alt="profile pic"
               class="rounded-full w-28 h-28 sm:w-16 sm:h-16 border-2 border-gray-600">
          <h3>tv_ghana</h3>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-blue-400">
            <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0 1 12 2.25c1.357 0 2.573.6 3.397 1.549a4.49
        4.49 0 0 1 3.498 1.307 4.491 4.491 0 0 1 1.307 3.497A4.49 4.49 0 0 1 21.75 12a4.49 4.49 0 0 1-1.549 3.397 4.491 4.491 0 0 1-1.307 3.497 4.491 4.491 0 0 1-3.497 1.307A4.49 4.49 0 0 1 12 21.75a4.49 4.49 0 0 1-3.397-1.549 4.49 4.49 0 0 1-3.498-1.306 4.491 4.491 0 0 1-1.307-3.498A4.49 4.49 0 0 1 2.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 0 1 1.307-3.497 4.49 4.49 0 0 1 3.497-1.307Zm7.007 6.387a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                  clip-rule="evenodd"/>
          </svg>
          <span> 2d</span>
        </div>
        <img src="/login.jpg" alt="post" width="700" height="700" class="border-2 border-gray-600 rounded-2xl">

        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" viewBox="0 0 512 512" width="30">
          <path
              d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8l0-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5l0 3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20-.1-.1s0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5l0 3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2l0-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/>
        </svg>

        <p class="text-white font-sans">506 likes </p>


        <p class="mt-6">In total, I spend GHC18,000 - GHC20,000 on medications every month - Traditional Ghanaian
          musician, Micheal Adangba .</p>
        <div class="mt-6">
          <form action="" class="flex items-center space-x-2">
            <input type="text" placeholder="Add a comment..."
                   class="p-2 text-black block w-full rounded-lg border border-gray-300 focus:ring-0 focus:border-gray-400 text-sm"/>
            <button type="submit"
                    class="text-sm font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none">
              Post
            </button>
          </form>

        </div>

      </div>


    </div>
    <div
        class="flex flex-col sm:flex-col items-center lg:ml-96 mx-auto sm:py-20 lg:py-4 space-y-6 sm:space-y-0 sm:space-x-8">

      <div>
        <div class="flex flex-row space-x-2 col-span-2">
          <img src="/login.jpg" alt="profile pic"
               class="rounded-full w-28 h-28 sm:w-16 sm:h-16 border-2 border-gray-600">
          <h3>tv_ghana</h3>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-blue-400">
            <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0 1 12 2.25c1.357 0 2.573.6 3.397 1.549a4.49
        4.49 0 0 1 3.498 1.307 4.491 4.491 0 0 1 1.307 3.497A4.49 4.49 0 0 1 21.75 12a4.49 4.49 0 0 1-1.549 3.397 4.491 4.491 0 0 1-1.307 3.497 4.491 4.491 0 0 1-3.497 1.307A4.49 4.49 0 0 1 12 21.75a4.49 4.49 0 0 1-3.397-1.549 4.49 4.49 0 0 1-3.498-1.306 4.491 4.491 0 0 1-1.307-3.498A4.49 4.49 0 0 1 2.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 0 1 1.307-3.497 4.49 4.49 0 0 1 3.497-1.307Zm7.007 6.387a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                  clip-rule="evenodd"/>
          </svg>
          <span> 2d</span>
        </div>
        <img src="/login.jpg" alt="post" width="700" height="700" class="border-2 border-gray-600">

        <svg xmlns="http://www.w3.org/2000/svg" class="text-white" viewBox="0 0 512 512" width="30">
          <path
              d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8l0-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5l0 3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20-.1-.1s0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5l0 3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2l0-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/>
        </svg>


        <p class="text-white font-sans">506 likes </p>

        <p class="mt-6">In total, I spend GHC18,000 - GHC20,000 on medications every month - Traditional Ghanaian
          musician, Micheal Adangba .</p>
        <div class="mt-6">
          <form action="">
            <input type="text" placeholder="Add a comment"
                   class="p-1 text-black block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
            <button
                class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
              Add comment
            </button>
          </form>
        </div>

      </div>


    </div>

  </section>

</template>
