import axios from "axios";
import {ref} from "vue";


export default function useAuth () {
    const user = ref ([]);
    const get_user = async (id) => {

        const token = localStorage.getItem('AUTH_TOKEN')
        const config = {
            headers: {Authorization: `Bearer ${token}`}
        }
            let response = await axios.get(`http://127.0.0.1:8001/api/users/${id}`, config);
            user.value = response.data.data;
    }

    return {
        get_user,
        user
    }
}