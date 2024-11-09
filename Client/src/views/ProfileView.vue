<script setup>

import NavBar from "@/components/NavBar.vue";
</script>

<template>
  <NavBar/>
  <section class="md:ml-64 p-4 md:p-10 h-screen bg-black">
    <div
        class="mx-auto sm:py-20 lg:py-2 lg:ml-96 flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-8 text-white overflow-hidden">
      <img src="/login.jpg" alt="profile" class="rounded-full w-24 h-24 sm:w-32 sm:h-32">

      <!-- Profile Info and Buttons -->
      <div class="flex flex-col items-center sm:items-start">
        <div class="flex flex-col sm:flex-row items-center sm:items-baseline space-y-2 sm:space-y-0 sm:space-x-4">
          <div class="text-2xl font-semibold">mr.tetteh80</div>
          <div class="flex space-x-2">
            <button class="bg-gray-700 text-white px-3 py-1 rounded-md text-sm">Edit Profile</button>
            <button class="bg-gray-700 text-white px-3 py-1 rounded-md text-sm">View Archive</button>
            <button class="bg-gray-700 text-white px-3 py-1 rounded-md text-sm">Rounded</button>
          </div>
        </div>

        <div class="flex space-x-6 text-lg sm:mt-2">
          <div><span class="font-semibold text-white">3</span> posts</div>
          <div><span class="font-semibold text-white">1,244</span> followers</div>
          <div><span class="font-semibold text-white">1,145</span> following</div>
        </div>

        <div class="flex space-x-6 text-lg sm:mt-2 font-serif">
          <div><span class="font-semibold text-white">Daniel Tetteh</span></div>
        </div>


        <div class="flex space-x-6 text-sm sm:mt-2 font-serif">
          <div><span class="font-semibold text-white">I’m Daniel. I’m interested in Python, PHP, Swift and iOS development, FX and Data Science.
        </span></div>
        </div>
      </div>
    </div>

    <div class="mx-auto lg:ml-96  mt-64  text-white overflow-hidden">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-1">
          <img src="/login.jpg" alt="profile" class="w-full h-auto rounded-md sm:w-48 sm:h-48">
          <img src="/login.jpg" alt="profile" class="w-full h-auto rounded-md sm:w-48 sm:h-48">
          <img src="/login.jpg" alt="profile" class="w-full h-auto rounded-md sm:w-48 sm:h-48">
          <img src="/login.jpg" alt="profile" class="w-full h-auto rounded-md sm:w-48 sm:h-48">
          <img src="/login.jpg" alt="profile" class="w-full h-auto rounded-md sm:w-48 sm:h-48">
          <img src="/login.jpg" alt="profile" class="w-full h-auto rounded-md sm:w-48 sm:h-48">
          <img src="/login.jpg" alt="profile" class="w-full h-auto rounded-md sm:w-48 sm:h-48">
      </div>

    </div>
  </section>

</template>

<style scoped>

</style>