<script setup>
import {reactive} from "vue";

const state = reactive({
  formInput:{
    input: '',
    password: ''
  }
})

const login = () =>{
  try{
    const response =
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
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
          Instagram
        </h2>
      </div>

      <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="border-solid" @submit.prevent="login">

            <div class="mt-3">
              <input id="email" type="text" autocomplete="email" required placeholder="Phone number, username or email address"
                    v-model="state.formInput.input"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
            </div>

            <div class="mt-3">
              <input id="password" type="password" required placeholder="Password"
                    v-model="state.formInput.password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
            </div>

            <div class="text-sm text-right mt-2">
              <router-link to="forgot_password" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</router-link>
            </div>

            <div class="mt-4">
              <button type="submit"
                      class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Log in
              </button>
            </div>

        </form>

        <p class="mt-4 text-center text-sm text-gray-500">
          Not a member?
          <router-link to="register" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Register Now!</router-link>
        </p>
      </div>
    </div>
  </div>

</template>

<style scoped>

</style>