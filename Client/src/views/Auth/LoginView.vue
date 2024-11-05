<script setup>
import {reactive} from "vue";
import axios from "axios";
import {useRouter} from "vue-router";

const state = reactive({
  formInput:{
    identifier: '',
    password: ''
  }
})

const Route = useRouter()
const login = async () =>{
  try{
    const response = await axios.post('http://127.0.0.1:8002/api/login', state.formInput)
    const token = response.data.authorisation.token
    localStorage.setItem("AUTH_TOKEN", token)
    localStorage.setItem("USERNAME", response.data.user.username)
    localStorage.setItem("PHONE", response.data.user.phone)
    localStorage.setItem("FULL_NAME", response.data.user.full_name)
    Route.push('/')
  }catch (err){
    alert(err.response.data.message)
  }
}
</script>

<template>
  <div class="grid grid-cols-1 lg:grid-cols-2 min-h-screen items-center gap-0 px-4 lg:px-2 lg:gap-4 shadow-2xl">

    <!-- Image Container -->
    <div class="flex justify-center lg:p-0">
      <img src="/login.jpg" alt="Login Image" class="max-w-full h-auto lg:max-w-md lg:m-0 " />
    </div>

    <!-- Form Container -->
    <div class="p-4 lg:p-2">
      <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm border border-gray-300 rounded-lg  p-10 pt-20  pb-20 shadow-lg bg-white">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
          Instagram Clone
        </h2>
      </div>

        <form class="border-solid " @submit.prevent="login">

            <div class="mt-3">
              <input id="email" type="text" autocomplete="email" required placeholder="Phone number, username or email address"
                    v-model="state.formInput.identifier"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
            </div>

            <div class="mt-3">
              <input id="password" type="password" required placeholder="Password"
                    v-model="state.formInput.password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
            </div>

            <div class="mt-4">
              <button type="submit"
                      class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Log in
              </button>
            </div>


          <div class=" ml-20 mt-5">
            <router-link to="forgot_password" class=" text-sky-500 hover:text-indigo-500">Forgot password?</router-link>
          </div>

        </form>
      </div>

      <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm border border-gray-300 rounded-lg  p-5 shadow-lg bg-white">

        <p class="mt-4 text-center text-sm">
         Don't have an account?
          <router-link to="register" class="leading-6 text-sky-500 hover:text-indigo-500">Signup up</router-link>
        </p>
      </div>
    </div>

  </div>

</template>

<style scoped>

</style>