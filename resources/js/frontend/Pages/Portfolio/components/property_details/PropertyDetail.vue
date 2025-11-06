<template>
  <div class="hightlighes-title-wrap mb-25 fadeinup wow">
    <h2 class="page-title mb-2">Property Excellence & Features</h2>
    <!-- <h5 class="house-sell">Property {{ property_status }}</h5> -->
  </div>
  <div class="fadeinup wow mb-40">
    <p v-html="property_detail"></p>
  </div>
</template>

<script>
export default {
  props: {
    property_detail: {
      type: Object,
      required: true,
    },
    property_status: {
      type: String,
      required: true,
    },
  },
};
</script>

<style scoped>
@media (max-width: 767px) {
  .page-title {
    font-size: 20px !important;
  }
}
</style>
