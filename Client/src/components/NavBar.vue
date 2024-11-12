<script setup>
import Post from "@/components/Post.vue";
import {ref} from "vue";
import {RouterLink} from "vue-router";
import useSession from "@/composables/useSession.js";
import {Button, InputText, InputGroup, InputGroupAddon} from 'primevue';
import Popover from 'primevue/popover';

const showPost = ref(false)
const {id} = useSession()

const togglePost = () => {
  showPost.value = !showPost.value;
};


const op = ref();
const members = ref([
  {name: 'Amy Elsner', image: 'amyelsner.png', email: 'amy@email.com', role: 'Owner'},
  {name: 'Bernardo Dominic', image: 'bernardodominic.png', email: 'bernardo@email.com', role: 'Editor'},
  {name: 'Ioni Bowcher', image: 'ionibowcher.png', email: 'ioni@email.com', role: 'Viewer'}
]);

const toggle = (event) => {
  op.value.toggle(event);
}

const logout = () => {

}

</script>

<template>
  <aside id="default-sidebar"
         class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
         aria-label="Sidenav">
    <div class="bg-black dark:border-gray-700 ">
      <h3 class="text-2xl font-black text-white p-3">Instagram Clone</h3>
    </div>
    <div class="py-5 px-3 h-full border-r  dark:border-gray-700 ">
      <ul class="space-y-2  ">
        <li>
          <RouterLink to="/"
                      class="flex items-center p-3 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="#D3D3D3" width="20">
              <path
                  d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/>
            </svg>

            <span class="ml-3">Home</span>
          </RouterLink>
        </li>

        <li>
          <a
              class="flex items-center p-3 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#D3D3D3" width="20">
              <path
                  d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
            </svg>
            <span class="ml-3">Search</span>
          </a>
        </li>

        <li>
          <a
              class="flex items-center p-3 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#D3D3D3" width="20">
              <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path
                  d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm306.7 69.1L162.4 380.6c-19.4 7.5-38.5-11.6-31-31l55.5-144.3c3.3-8.5 9.9-15.1 18.4-18.4l144.3-55.5c19.4-7.5 38.5 11.6 31 31L325.1 306.7c-3.2 8.5-9.9 15.1-18.4 18.4zM288 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/>
            </svg>
            <span class="ml-3">Explore</span>
          </a>
        </li>

        <li>
          <a
              class="flex items-center p-3 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="#D3D3D3" width="20" height="24">
              <!-- Clapperboard Top -->
              <path
                  d="M480 96H352V48h96c13.25 0 24 10.75 24 24s-10.75 24-24 24zM272 48h-96v48h96V48zm-176 0H48C21.5 48 0 69.5 0 96s21.5 48 48 48h48V48zm384 64c35.25 0 64-28.75 64-64S515.25 0 480 0H48C21.5 0 0 21.5 0 48v128c0 26.5 21.5 48 48 48h528c26.5 0 48-21.5 48-48v-48c0-26.5-21.5-48-48-48H480z"/>

              <!-- Clapperboard Base -->
              <path d="M576 240H0v224c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V240z"/>

              <!-- Play Button -->
              <path d="M240 384v-128l128 64-128 64z" fill="#FFF"/>
            </svg>
            <span class="ml-3">Reels</span>
          </a>
        </li>


        <li>
          <a
              class="flex items-center p-3 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#D3D3D3" width="20">
              <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path
                  d="M256.6 8C116.5 8 8 110.3 8 248.6c0 72.3 29.7 134.8 78.1 177.9 8.4 7.5 6.6 11.9 8.1 58.2A19.9 19.9 0 0 0 122 502.3c52.9-23.3 53.6-25.1 62.6-22.7C337.9 521.8 504 423.7 504 248.6 504 110.3 396.6 8 256.6 8zm149.2 185.1l-73 115.6a37.4 37.4 0 0 1 -53.9 9.9l-58.1-43.5a15 15 0 0 0 -18 0l-78.4 59.4c-10.5 7.9-24.2-4.6-17.1-15.7l73-115.6a37.4 37.4 0 0 1 53.9-9.9l58.1 43.5a15 15 0 0 0 18 0l78.4-59.4c10.4-8 24.1 4.5 17.1 15.6z"/>
            </svg>
            <span class="ml-3">Messages</span>
          </a>
        </li>


        <li>
          <a
              class="flex items-center p-3 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#D3D3D3" width="20">
              <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path
                  d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8l0-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5l0 3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20-.1-.1s0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5l0 3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2l0-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/>
            </svg>
            <span class="ml-3">Notification</span>
          </a>
        </li>

        <li>
          <a @click="togglePost"
             class="flex items-center p-3 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="20">
              <path
                  d="M576 64c0-35.3-28.7-64-64-64H64C28.7 0 0 28.7 0 64v384c0 35.3 28.7 64 64 64h448c35.3 0 64-28.7 64-64V64zM288 288H192v96c0 8.5-6.5 16-16 16s-16-7.5-16-16v-96h-96c-8.5 0-16-6.5-16-16s7.5-16 16-16h96v-96c0-8.5 6.5-16 16-16s16 7.5 16 16v96h96c8.5 0 16 6.5 16 16s-7.5 16-16 16z"
                  fill="#D3D3D3"/>
            </svg>
            <span class="ml-3">Create</span>

          </a>

        </li>


        <li>
          <RouterLink :to="{name: 'user.profile', params: {id:id}}"
                      class="flex items-center p-3 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
            <span class="flex-shrink-0"><img src="/avatr.png" class="rounded-full size-9" alt=""> </span>
            <span class="ml-3">Profile</span>
          </RouterLink>
        </li>

        <li>

          <!--          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#D3D3D3" width="20">-->
          <!--            <path-->
          <!--                d="M48 128c-17.7 0-32 14.3-32 32s14.3 32 32 32l352 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L48 128zm0 192c-17.7 0-32 14.3-32 32s14.3 32 32 32l352 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L48 320z"/>-->
          <!--          </svg>-->

          <div
              class="flex items-center p-3 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">

            <Button type="button" icon="pi pi-share-alt" label="More" @click="toggle"/>

            <Popover ref="op">
              <div
                  class="flex items-center p-3 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                <div>
                  <span class="p-2 rounded mt-6">
                      <button @click="logout"> LogOut </button>
                  </span>
                </div>
              </div>
            </Popover>
          </div>
        </li>
      </ul>
    </div>
  </aside>


  <div v-if="showPost">
    <Post/>
  </div>

</template>

<style scoped>

</style>