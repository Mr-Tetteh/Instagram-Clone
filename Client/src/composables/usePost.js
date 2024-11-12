import axios from "axios";
import {reactive} from "vue";
import router from "@/router/index.js";

export default function usePost() {


    const state = reactive({
        formInput: {
            image: '',
            title: '',
            post: '',
            location: ''

        }

    })
    const add_post = async () => {
        const formData = new FormData();
        Object.keys(state.formInput).forEach((key) => {
            formData.append(key, state.formInput[key]);
        });
        const token = localStorage.getItem('AUTH_TOKEN');

        const config = {
            headers: {
                Authorization: `Bearer ${token}`,
                'Content-Type': 'multipart/form-data',
            },
        };
        try {
            await axios.post('http://127.0.0.1:8001/api/post', formData, config);
            router.push('/');
        } catch (err) {
            console.error("Failed to add post:", err);
            alert("Failed to add post");
        }
    };



    return {
        add_post,
        state,
    }
}