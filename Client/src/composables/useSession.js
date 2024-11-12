export default function useSession(){

    const username = localStorage.getItem("USERNAME")
    const id = localStorage.getItem("USER_ID")

    return{
        username,
        id
    }
}