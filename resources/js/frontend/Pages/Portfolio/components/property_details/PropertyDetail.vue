<template>
  <div v-show="property_description != '' && property_description != null">
    <div class="hightlighes-title-wrap mb-25 fadeinup wow">
      <h2 class="page-title mb-2">Property Description</h2>
      <!-- <h5 class="house-sell">Property {{ property_status }}</h5> -->
    </div>
    <div class="fadeinup wow mb-40">
      <div v-html="property_description"></div>
    </div>
  </div>
  <div v-show="hasPropertyDetail">
    <div class="hightlighes-title-wrap mb-25 fadeinup wow">
      <h2 class="page-title mb-2">Property Details</h2>
      <!-- <h5 class="house-sell">Property {{ property_status }}</h5> -->
    </div>
    <div class="fadeinup wow mb-40">
      <p v-html="property_detail"></p>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    property_detail: {
      type: [String, Object],
      required: true,
    },
    property_description: {
      type: [String, Object],
      required: true,
    },
    property_status: {
      type: String,
      required: true,
    },
  },
  computed: {
    hasPropertyDetail() {
      const val = this.property_detail;
      if (val == null) return false;
      // Normalize to string (handles cases where prop may be an object)
      const str =
        typeof val === "object"
          ? val.toString
            ? val.toString()
            : JSON.stringify(val)
          : String(val);
      // Remove HTML tags and non-breaking spaces, then trim whitespace
      const plain = str
        .replace(/<[^>]*>/g, "")
        .replace(/&nbsp;/g, "")
        .trim();
      // If after stripping tags and whitespace there's any visible text, show it
      return plain.length > 0 && plain !== "<br>";
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
