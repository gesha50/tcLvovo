import Vue from 'vue'
import Vuex from 'vuex'
import 'es6-promise/auto';
import getters from './getters/getters'
import actions from './actions/actions'
import mutations from './mutations/mutations'

// import getters from "@/vuex/getters/getters";
// import actions from "@/vuex/actions/actions";
// import mutations from "@/vuex/mutations/mutations";

// const actions = {...commonActions, ...apiRequests}

Vue.use(Vuex);

let store = new Vuex.Store({
    state: {

    },
    mutations,
    actions,
    getters,
});

export default store;
