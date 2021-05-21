<template>
<div>
    <carousel></carousel>
    <RentPlace
        :works_room="works_room"
    ></RentPlace>
    <ServiceReview></ServiceReview>
    <AllServices></AllServices>
    <Partners></Partners>
    <Contact></Contact>
</div>
</template>

<script>
import carousel from "../../components/carousels/carousel";
import RentPlace from "./RentPlace";
import ServiceReview from "./ServiceReview";
import AllServices from "./AllServices";
import Partners from "./Partners";
import Contact from "./Contact";

export default {
    data() {
      return {
          works_room: null,
      }
    },
    mounted() {
        this.getWorksRoom()
    },
    name: "IndexComponent",
    components: {
        carousel,
        RentPlace,
        ServiceReview,
        AllServices,
        Partners,
        Contact,
    },
    methods: {
        getWorksRoom() {
          axios.get('/api/information')
          .then(res => {
              this.works_room = res.data.works_room
          })
          .catch(e => {
              console.log(e)
          })
        },
    },
}
</script>

<style scoped>

</style>
