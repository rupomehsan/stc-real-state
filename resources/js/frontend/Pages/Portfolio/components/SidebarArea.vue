<template>
  <aside class="sidebar-area">
    <AtAGlance :property="property" v-if="property" />

    <WidgetSearch />

    <Widget />

    <SidebarContactForm />

    <!-- <WidgetBanner /> -->
  </aside>
</template>

<script>
import AtAGlance from "./AtAGlance.vue";
import WidgetSearch from "./WidgetSearch.vue";
import Widget from "./Widget.vue";
import SidebarContactForm from "./SidebarContactForm.vue";
import WidgetBanner from "./WidgetBanner.vue";

export default {
  components: {
    AtAGlance,
    WidgetSearch,
    Widget,
    SidebarContactForm,
    WidgetBanner,
  },
  props: {
    property: {
      type: Object,
      required: false,
    },
  },
};
</script>

<style lang="scss" scoped></style>
