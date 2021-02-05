import Vue from 'vue';
import VueBreadcrumbs from 'vue-2-breadcrumbs';

Vue.use(VueBreadcrumbs, {
    template:
        '        <nav v-if="$breadcrumbs.length" aria-label="breadcrumb">\n' +
        '            <ol class="breadcrumb">\n' +
        '                <li v-for="(crumb, key) in $breadcrumbs" v-if="crumb.meta.breadcrumb" :key="key" class="breadcrumb-item" aria-current="page">\n' +
        '                    <router-link class="my_css " :to="{ path: getPath(crumb) }">{{ getBreadcrumb(crumb.meta.breadcrumb) }}</router-link>' +
        '                </li>\n' +
        '            </ol>\n' +
        '        </nav>'
});

export default {

}
