<script setup>

import {reactive} from "vue";
import axios from "axios";
import router from "@/router/index.js";

const state = reactive({
  formInput:{
    full_name: '',
    email: '',
    phone: '',
    password: '',
    username: ''
  }
})

const Router = router
const register = async () =>{
  try {
    const response =  await axios.post(`http://127.0.0.1:8002/api/register`, state.formInput)
    await Router.push('login')
  }catch (err){
    alert(err.data.message)
  }
}

</script>

<template>
  <div class="p-4 lg:p-2">
    <div
        class="mt-20 sm:mx-auto sm:w-full sm:max-w-sm border border-gray-300 rounded-lg  p-10 pt-10  pb-20 shadow-lg bg-white"><div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
        Instagram Clone
      </h2>
      <p class="text-gray-400 w-full max-w-xs mx-auto text-center whitespace-normal text-lg">
        Sign up to see photos and videos from your friends.
      </p>
    </div>



      <form class="border-solid " @submit.prevent="register">

        <div class="mt-3">
          <input v-model="state.formInput.email" id="email" type="email" autocomplete="email" required placeholder=" email address"
                 class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
        </div>

        <div class="mt-3">
          <input v-model="state.formInput.phone" id="email" type="tel" autocomplete="email" required placeholder="Mobile Number"
                 class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
        </div>

        <div class="mt-3">
          <input v-model="state.formInput.password" id="password" type="password" required placeholder="Password"
                 class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
        </div>

        <div class="mt-3">
          <input v-model="state.formInput.full_name" id="full_name" type="text" autocomplete="full_name" required placeholder="Full Name"
                 class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
        </div>

        <div class="mt-3">
          <input v-model="state.formInput.username" id="email" type="text" autocomplete="email" required placeholder="Username"
                 class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"/>
        </div>


          <p class="text-gray-400 mt-3 text-xs ">
            People who use our service may have uploaded your contact information to Instagram. <b class="text-blue-400">
            Learn more
          </b>
          </p>

          <p class="text-gray-400 mt-4 text-xs">
            By signing up, you agree to our Terms, Privacy Policy and Cookies Policy.
          </p>


        <div class="mt-4">
          <button type="submit"
                  class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Sign up
          </button>
        </div>




      </form>
    </div>

    <div class="  mt-5 sm:mx-auto sm:w-full sm:max-w-sm border border-gray-300 rounded-lg p-5 shadow-lg bg-white">
      <p class=" text-center text-sm">
        Have an account?
        <router-link to="login" class="leading-6 text-sky-500 hover:text-indigo-500">Login</router-link>
      </p>
    </div>
  </div>

</template>

<style scoped>

</style>