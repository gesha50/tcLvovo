<template>
    <footer class="footer">

        <footer-up-component
            :name="name"
            :description="description"
        ></footer-up-component>

        <footer-middle-component></footer-middle-component>

        <footer-down-component
            :company_name="company_name"
        ></footer-down-component>

    </footer>
</template>

<script>
import FooterUpComponent from "./FooterUpComponent";
import FooterMiddleComponent from "./FooterMiddleComponent";
import FooterDownComponent from "./FooterDownComponent";

export default {
    data() {
      return {
          name: '',
          company_name: '',
          description: '',
          year: (new Date()).getFullYear(),
      }
    },
    name: "Footer",
    components: {
        FooterUpComponent,
        FooterMiddleComponent,
        FooterDownComponent,
    },
    mounted() {
      this.getInformation()
    },
    methods: {
        getInformation() {
            axios.get('/api/information')
            .then(res => {
                this.name = res.data.name
                this.company_name = res.data.company_name
                this.description = res.data.description
            })
        },
    },
}
</script>

<style lang="scss">

</style>
