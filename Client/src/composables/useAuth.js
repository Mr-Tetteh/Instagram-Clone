import axios from "axios";
import {ref} from "vue";
import router from "@/router/index.js";


export default function useAuth() {
    const user = ref([]);
    const profile = ref(null);

    const get_user = async (id) => {

        const token = localStorage.getItem('AUTH_TOKEN')
        const config = {
            headers: {Authorization: `Bearer ${token}`}
        }
        let response = await axios.get(`http://127.0.0.1:8001/api/users/${id}`,  config);
        user.value = response.data;
    }



    const get_public_user_profile = async (id) => {
        try {
            const token = localStorage.getItem("AUTH_TOKEN");
            const config = {
                headers: { Authorization: `Bearer ${token}` },
            };
            let response = await axios.get(`http://127.0.0.1:8001/api/public_profile/${id}`, config);
            profile.value = response.data;
        } catch (error) {
            alert(error)
            // console.error("Error fetching public user profile:", error);
        }
    };



    const logout = async () =>{
        const token = localStorage.getItem('AUTH_TOKEN')
        const config = {
            headers: {Authorization: `Bearer ${token}`}
        }

        let response = await axios.post(`http://127.0.0.1:8001/api/logout`, {},config)
        localStorage.removeItem("AUTH_TOKEN")
        localStorage.removeItem("USERNAME")
        localStorage.removeItem("FULL_NAME")
        localStorage.removeItem("PHONE")
        localStorage.removeItem("USER_ID")
        await router.push('/login')
    }



    return {
        get_user,
        logout,
        get_public_user_profile,
        profile,
        user
    }
}