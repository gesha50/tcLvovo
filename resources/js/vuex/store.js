import Vue from 'vue'
import Vuex from 'vuex'
import 'es6-promise/auto';
import getters from './getters/getters'
import actions from './actions/actions'
import mutations from './mutations/mutations'

Vue.use(Vuex);

let store = new Vuex.Store({
    state: {

    },
    mutations,
    actions,
    getters,
});

export default store;
