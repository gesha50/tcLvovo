<template>
    <div>
        <top-image
            :headerText="'Фотогаллерея'"
        ></top-image>
        <div class="container">
            <div class="pl-5 pr-5 pb-5" style="min-height: 237px; background: white;">
                <nav class="galleryNav">
                    <span
                        @click="getAllPhoto"
                        class="galleryNav__span"
                        id="all"
                        :class="whoActive(homeLink)"
                    >
                        Все
                    </span>
                    <span
                        v-for="item in data"
                        :key="item.nameForId"
                        :class="whoActive(item.nameForId)"
                        :id="item.nameForId"
                        @click="getFilteredPhoto(item.nameForId)"
                        class="galleryNav__span"
                    >
                        {{item.nameRU}}
                    </span>
                </nav>
                <div class="fullLine"></div>
                <div class="gallerySpinner" v-if="loading">
                    <b-spinner :variant="'warning'" type="grow" label="Loading..."></b-spinner>
                </div>
                <div v-else class="galleryPhoto">
                    <img
                        v-for="item in img"
                        :src="item.img"
                        alt=""
                        class="galleryPhoto__img"
                    >
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import TopImage from "../../components/TopImage";

export default {
    data() {
        return {
            loading: false,
            homeLink: 'all',
            currentLink: 'all',
            data: [],
            img: [],
        }
    },
    name: "GalleryIndex",
    components: {
        TopImage,
    },
    mounted() {
        this.getAllPhoto()
    },
    methods: {
        whoActive(id) {
            if (this.currentLink == id) {
                return 'galleryNav__active'
            }
            return ''
        },
        getFilteredPhoto(searchName) {
            this.currentLink = searchName
            this.loading = true
            axios.get('/api/gallery/photoCategory', {
                params: {
                    searchName: searchName,
                }
            })
            .then(res => {
                this.img = res.data
                this.loading = false
            })
            .catch(e => {
                this.loading = false
                console.log(e)
            })
        },
        getAllPhoto() {
            this.loading = true
            this.currentLink = this.homeLink
            axios.get('/api/gallery/photo')
            .then(res => {
                console.log(res.data.all)
                this.loading = false
                this.data = res.data.uniqueName
                this.img = res.data.all
            })
            .catch(e => {
                this.loading = false
                console.log(e)
            })
        },
    },
}
</script>

<style lang="scss">
.galleryNav {
    display: flex;
    justify-content: space-between;
    width: 75%;
    margin-bottom: 20px;
    &__span {
        cursor: pointer;
        @include miniBodyText($grayText, Montserrat);
        &:hover {
            color: $yellow;
        }
    }
    &__active {
        color: $yellow;
    }
}
.galleryPhoto {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
    &__img {
        width: 100%;
        height: 200px;
    }
}
.gallerySpinner {
    margin-top: 80px;
    text-align: center;
}
</style>
