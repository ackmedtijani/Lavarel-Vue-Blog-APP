import { createStore } from 'vuex';

var store = createStore({
    namespace:true , 

    state(){
        return {
        user: null,
        token: null,
        }
    },
    mutations: {

        setUser(state, user) {
                state.user = user;
        },

        setToken(state, token) {
                state.token = token;
        },
    },
    actions: {},
    getters: {
        isLoggedIn(state) {
        return !!state.token;
        },
    },
});

export default store