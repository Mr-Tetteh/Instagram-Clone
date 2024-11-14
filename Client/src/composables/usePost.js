import axios from "axios";
import {reactive} from "vue";
import router from "@/router/index.js";

export default function usePost() {


    const state = reactive({
        formInput: {
            title: '',
            post: '',
            location: '',
            image: null // or any default you want
        }
    });

    const handleFileUpload = (event) => {
        state.formInput.image = event.target.files[0];
    };

    const add_post = async () => {

        const token = localStorage.getItem('AUTH_TOKEN')
        const config = {
            headers: {Authorization: `Bearer ${token}`}
        }

        const formData = new FormData();
        formData.append('title', state.formInput.title);
        formData.append('post', state.formInput.post);
        formData.append('location', state.formInput.location);
        formData.append('image', state.formInput.image);

        try {
            const response = await axios.post('http://127.0.0.1:8001/api/post',formData, config )
            await router.push('/')
        } catch (error) {
            console.error('Failed to add post:', error);
        }
    };


    return {
        add_post,
        state,
        handleFileUpload
    }
}