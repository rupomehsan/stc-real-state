<template>
  <div
    class="breadcumb-wrapper"
    data-bg-src="/assets/frontend/img/common/2.jpeg"
    style="background-image: url('/assets/frontend/img/common/2.jpeg')"
  >
    <div class="container">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title mt-5">Property Details</h1>
        <ul class="breadcumb-menu">
          <li><Link href="/">Home</Link></li>
          <li>Property Details</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- {{ single_property }} -->
  <section class="property-details space overflow-hidden">
    <div class="container">
      <!-- Hero Section with Image and At A Glance -->

      <div class="row gy-40 gx-50 mb-5 justify-content-center">
        <div class="col-lg-5">
          <div
            class="page-title-wrap fadeinup wow"
            style="visibility: visible; animation-name: fadeinup"
          >
            <h2 class="page-title mb-2">Property Overview & Specifications</h2>
          </div>
          <BannerImageSlider
            :banner_images="single_property?.banner_image || []"
          />
        </div>
        <div class="col-lg-5">
          <AtAGlance
            :property="single_property?.facts_and_features"
            v-if="single_property"
          />
        </div>
      </div>

      <!-- Main Content Section -->
      <div class="row gy-40 gx-50 justify-content-center">
        <div class="col-md-10">
          <div class="row gy-30">
            <div class="col-12">
              <div class="property-page-single">
                <div class="page-content">
                  <!-- ----------------------------------------------------------------------
                  ---------------------- PropertyDetail Component ----------------------
                  ---------------------------------------------------------------------- -->
                  <PropertyDetail
                    :property_detail="single_property?.property_detail"
                    :property_status="
                      single_property?.property_status == 'sale'
                        ? 'For Sale'
                        : 'For Rent'
                    "
                  />

                  <!-- ----------------------------------------------------------------------
                  ---------------------- FactsAndFeatures Component ----------------------
                  ---------------------------------------------------------------------- -->
                  <!-- <FactsAndFeatures
                    :facts_and_features="single_property?.facts_and_features"
                  /> -->

                  <!-- ----------------------------------------------------------------------
                  ---------------------- Gallery Component ----------------------
                  ---------------------------------------------------------------------- -->
                  <Gallery :gallery="single_property?.gallery" />

                  <!-- ----------------------------------------------------------------------
                  ---------------------- Amenities Component ----------------------
                  ---------------------------------------------------------------------- -->
                  <Amenities :amenities="single_property?.amenities" />

                  <Location
                    :map_location_url="single_property?.map_location_url"
                    :property_address="single_property?.property_address"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="col-xl-4 col-lg-5">
          <SidebarArea :property="single_property" />
        </div> -->
      </div>
    </div>
  </section>
</template>

<script>
import AtAGlance from "./components/AtAGlance.vue";
import SidebarArea from "./components/SidebarArea.vue";
import BannerImageSlider from "./components/property_details/BannerImageSlider.vue";
import PropertyDetail from "./components/property_details/PropertyDetail.vue";
import FactsAndFeatures from "./components/property_details/FactsAndFeatures.vue";
import FloorPlan from "./components/property_details/FloorPlan.vue";
import Location from "./components/property_details/Location.vue";
import Gallery from "./components/property_details/Gallery.vue";
import Amenities from "./components/property_details/Amenities.vue";

import "magnific-popup";
import "magnific-popup/dist/magnific-popup.css";

import { store as property_details_store } from "./Store/property_details_store.js";
import { mapActions, mapState } from "pinia";

export default {
  components: {
    AtAGlance,
    SidebarArea,
    BannerImageSlider,
    PropertyDetail,
    FactsAndFeatures,
    FloorPlan,
    Location,
    Gallery,
    Amenities,
  },
  created: function () {
    const urlParams = new URLSearchParams(window.location.search);
    const slug = urlParams.get("slug");
    if (slug) {
      this.fetch_single_property(slug);
    } else {
      console.error("No slug parameter found in the URL.");
    }
  },
  methods: {
    ...mapActions(property_details_store, ["fetch_single_property"]),
  },
  computed: {
    ...mapState(property_details_store, ["single_property"]),
  },
};
</script>

<style lang="scss" scoped></style>
