<script setup>
import NavBar from "@/components/NavBar.vue";
import usePost from "@/composables/usePost.js";
import {onMounted} from "vue";


const {posts, get_all_post} = usePost()

onMounted(() => get_all_post())

</script>

<template>

  <NavBar/>
  <section class="md:ml-24 lg:ml-44 p-4 md:p-10 h-screen text-white">
    <div class="flex flex-col items-center space-y-6">
      <div v-for="post in posts" class="w-full max-w-md lg:max-w-lg xl:max-w-2xl bg-gray-800 rounded-lg p-6 space-y-6">

        <div class="flex items-center space-x-3">
          <img src="/login.jpg" alt="profile pic" class="rounded-full w-16 h-16 border-2 border-gray-600">
          <h3 class="text-lg font-semibold">tv_ghana</h3>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-blue-400">
            <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49...Z" clip-rule="evenodd"/>
          </svg>
          <span class="text-gray-400">.{{ post.created_at }}</span>
        </div>

        <img :src="post.image" alt="post" class="w-full h-auto border-2 border-gray-600 rounded-lg">

        <div class="flex space-x-4 text-white">
          <button class="focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-6 h-6">
              <path d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7..."/>
            </svg>
          </button>
          <button class="focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-6 h-6">
              <path d="M123.6 391.3c12.9-9.4 29.6-11.8 44.6-6.4..."/>
            </svg>
          </button>
        </div>

        <p class="font-semibold">506 likes</p>

        <p class="leading-relaxed">
          {{ post.title }}<br>
          {{ post.post }}
        </p>

        <form class="flex items-center space-x-2">
          <input type="text" placeholder="Add a comment..." class="p-2 w-full rounded-lg border border-gray-300 text-black focus:ring-0 focus:border-gray-400 text-sm"/>
          <button type="submit" class="text-indigo-600 hover:text-indigo-500 font-medium">Post</button>
        </form>

      </div>
    </div>
  </section>

</template>
