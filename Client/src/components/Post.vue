<script setup>
import Stepper from 'primevue/stepper';
import StepList from 'primevue/steplist';
import StepPanels from 'primevue/steppanels';
import StepItem from 'primevue/stepitem';
import Step from 'primevue/step';
import StepPanel from 'primevue/steppanel';
import Button from 'primevue/button';
import FileUpload from 'primevue/fileupload';

import {reactive, ref} from 'vue';
import {TransitionRoot, TransitionChild, Dialog, DialogPanel, DialogTitle} from '@headlessui/vue';
import {useToast} from 'primevue/usetoast';
import usePost from "@/composables/usePost.js";

const isOpen = ref(true);

function closeModal() {
  isOpen.value = false;
}


const showPost = ref(false);

const togglePost = () => {
  showPost.value = !showPost.value;
};

const onFileSelect = (event) => {
  const file = event.files[0]; // Access file directly from event in PrimeVue
  console.log("File selected:", file);
};

const handleFileChange = (event) => {
  state.formInput.image = event.target.files[0];  // Set the image file
};

function openModal() {
  isOpen.value = true;
}


const {add_post, state} = usePost()

const post = async () =>{

 await add_post()
}
</script>

<template>
  <div class="fixed inset-0 flex items-center justify-center">
    <button
        type="button"
        @click="openModal"
        class="rounded-md bg-gray-800 px-4 py-2 text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-opacity-75"
    >
      Open dialog
    </button>
  </div>

  <TransitionRoot appear :show="isOpen" as="template">
    <Dialog as="div" @close="closeModal" class="relative z-10">
      <TransitionChild
          as="template"
          enter="duration-300 ease-out"
          enter-from="opacity-0"
          enter-to="opacity-100"
          leave="duration-200 ease-in"
          leave-from="opacity-100"
          leave-to="opacity-0"
      >
        <div class="fixed inset-0 bg-black/50"/>
      </TransitionChild>

      <div class="fixed inset-0 overflow-y-auto">
        <div class="flex min-h-full items-center justify-center p-4 text-center">
          <TransitionChild
              as="template"
              enter="duration-300 ease-out"
              enter-from="opacity-0 scale-95"
              enter-to="opacity-100 scale-100"
              leave="duration-200 ease-in"
              leave-from="opacity-100 scale-100"
              leave-to="opacity-0 scale-95"
          >
            <DialogPanel
                class="w-full max-w-lg transform overflow-hidden rounded-2xl bg-white shadow-xl transition-all">
              <DialogTitle class="text-lg font-semibold text-gray-900 p-4 border-b border-gray-200">
                Payment successful
              </DialogTitle>

              <div class="p-6">
                <Stepper value="1">
                  <StepList>
                    <Step>Upload Picture</Step>
                  </StepList>
                  <form @submit.prevent="post" enctype="multipart/form-data">

                    <StepPanels>
                      <StepPanel v-slot="{ activateCallback }" value="1">
                        <div
                            class="flex flex-col h-48 bg-gray-100 border-2 border-dashed border-gray-300 rounded-lg p-4 justify-center items-center">
                          <FileUpload v-model="state.formInput.image" name="image" :auto="false" accept="image/*" :maxFileSize="1000000" @select="onFileSelect">
                            <template #empty>
                              <span>Drag and drop files here to upload.</span>
                            </template>
                          </FileUpload>

<!--                        <input type="file" @change="handleFileChange" class="block w-full rounded-md" />-->
                        </div>


                        <input type="text" v-model="state.formInput.title"
                               class="w-full p-3 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-gray-300 focus:border-gray-300 shadow-sm text-gray-900"
                               placeholder="title">

                        <textarea name="" id="" v-model="state.formInput.post"
                                  class="w-full p-3 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-gray-300 focus:border-gray-300 shadow-sm text-gray-900"
                                  placeholder="Write anything here"></textarea>

                        <input
                            v-model="state.formInput.location"
                            type="text"
                            placeholder="Add location"
                            class="w-full p-3 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-gray-300 focus:border-gray-300 shadow-sm text-gray-900"
                        />

                        <div class="flex pt-6 justify-end">
                          <button
                              class="w-full p-3 border rounded-md focus:outline-none focus:ring-1 shadow-sm text-gray-900 bg-blue-300 hover:bg-gray-100"
                          >Submit
                          </button>
                        </div>
                      </StepPanel>
                    </StepPanels>
                  </form>
                </Stepper>

              </div>
            </DialogPanel>
          </TransitionChild>
        </div>

      </div>
    </Dialog>
  </TransitionRoot>
</template>
