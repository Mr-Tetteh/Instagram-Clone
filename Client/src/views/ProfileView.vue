<script setup>

import NavBar from "@/components/NavBar.vue";
import useAuth from "@/composables/useAuth.js";
import {onMounted} from "vue";
import usePost from "@/composables/usePost.js";

const {user, get_user} = useAuth()
const {posts, get_all_user_post} = usePost()

const props = defineProps({
  id: {
    type: String,
    required: true
  }
})

onMounted(() => {
  get_user(props.id), get_all_user_post()
})
</script>

<template>
  <NavBar/>
  <section class="md:ml-24 lg:ml-44 p-4 md:p-10 h-screen bg-black text-white ">
    <div
        class="flex flex-col sm:flex-row items-center lg:ml-96 mx-auto sm:py-20 lg:py-4 space-y-6 sm:space-y-0 sm:space-x-8">

      <!-- Profile Image -->
      <img src="/login.jpg" alt="profile" class="rounded-full w-28 h-28 sm:w-36 sm:h-36 border-2 border-gray-600">

      <!-- Profile Info and Buttons -->
      <div class="flex flex-col items-center sm:items-start text-center sm:text-left">
        <!-- Username and Action Buttons -->
        <div class="flex flex-col sm:flex-row items-center sm:items-baseline space-y-3 sm:space-y-0 sm:space-x-4">
          <div class="text-2xl font-semibold">{{ user.username }}</div>
          <div class="flex space-x-3">
            <button class="bg-gray-700 text-white px-3 py-1 rounded-md text-sm">Edit Profile</button>
            <button class="bg-gray-700 text-white px-3 py-1 rounded-md text-sm">View Archive</button>
            <button class="bg-gray-700 text-white px-3 py-1 rounded-md text-sm">Options</button>
          </div>
        </div>

        <!-- Stats -->
        <div class="flex space-x-8 text-lg sm:mt-3">
          <div><span class="font-semibold">3</span> posts</div>
          <div><span class="font-semibold">1,244</span> followers</div>
          <div><span class="font-semibold">1,145</span> following</div>
        </div>

        <!-- Name and Bio -->
        <div class="mt-3 text-lg font-serif">
          <div class="font-semibold">{{ user.full_name }}</div>
        </div>
        <div class="mt-2 text-sm font-serif motion-preset-pop motion-duration-1500">
          {{ user.bio }}
        </div>
      </div>
    </div>

    <!-- Gallery Section -->
    <section class="mx-auto lg:ml-96 mt-16 text-white">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <div v-for="post in posts" :key="post.id">
          <img :src="post.image" alt="gallery-image" class="w-96 h-96 object-cover rounded-md motion-preset-expand motion-duration-2000">
        </div>
      </div>
    </section>

  </section>


</template>

<style scoped>

</style>