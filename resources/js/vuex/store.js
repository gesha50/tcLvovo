import Vue from 'vue'
import Vuex from 'vuex'
import 'es6-promise/auto';
import * as getters from './getters/getters'
import * as actions from './actions/actions'
import * as mutations from './mutations/mutations'
import createPersistedState from "vuex-persistedstate";

Vue.use(Vuex);

let store = new Vuex.Store({
    namespaced: true,
    state: {
        favourites: [],
        cart: [],
    },
    mutations,
    actions,
    getters,

    plugins: [createPersistedState()],
});

export default store;
