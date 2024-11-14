<script setup>
import Stepper from 'primevue/stepper';
import StepList from 'primevue/steplist';
import StepPanels from 'primevue/steppanels';
import StepItem from 'primevue/stepitem';
import Step from 'primevue/step';
import StepPanel from 'primevue/steppanel';
import Button from 'primevue/button';
import FileUpload from 'primevue/fileupload';


import usePost from "@/composables/usePost.js";

const { add_post, state, handleFileUpload } = usePost();

const post = async () => {
  await add_post();
};
</script>

<template>


  <div
      class="p-6 bg-white rounded-lg shadow-md transition duration-75 hover:bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">

    <Stepper value="1">
      <StepList class="mb-6">
        <Step>Upload Picture</Step>
      </StepList>
      <form @submit.prevent="post" enctype="multipart/form-data">
        <StepPanels>
          <StepPanel v-slot="{ activateCallback }" value="1">
            <div class="mb-6">
              <input
                  type="file"
                  @change="handleFileUpload"
                  class="flex flex-col w-full h-48 bg-gray-50 border-2 border-dashed border-gray-300 rounded-lg p-4 justify-center items-center text-gray-500 hover:bg-gray-100 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-400"
              />
            </div>

            <div class="mb-4">
              <input
                  type="text"
                  v-model="state.formInput.title"
                  class="w-full p-3 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-300 focus:border-blue-300 shadow-sm text-gray-900 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100"
                  placeholder="Title"
              />
            </div>

            <div class="mb-4">
            <textarea
                v-model="state.formInput.post"
                class="w-full p-3 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-300 focus:border-blue-300 shadow-sm text-gray-900 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100"
                placeholder="Write anything here"
                rows="4"
            ></textarea>
            </div>

            <div class="mb-6">
              <input
                  v-model="state.formInput.location"
                  type="text"
                  placeholder="Add location"
                  class="w-full p-3 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-300 focus:border-blue-300 shadow-sm text-gray-900 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-100"
              />
            </div>

            <div class="flex justify-end">
              <button
                  type="submit"
                  class="w-full p-3 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
              >
                Submit
              </button>
            </div>
          </StepPanel>
        </StepPanels>
      </form>
    </Stepper>
  </div>

</template>
