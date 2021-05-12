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
          works_room: 12,
      }
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
}
</script>

<style scoped>

</style>
