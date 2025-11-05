<template>
  <div
    class="breadcumb-wrapper background-image"
    style="background-image: url('/assets/frontend/img/common/2.jpeg')"
  >
    <div class="container">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title mt-5">Amazing Video Gallery</h1>
        <ul class="breadcumb-menu">
          <li><Link href="/">Home</Link></li>
          <li><Link href="/gallery/videos">Gallery Videos</Link></li>
        </ul>
      </div>
    </div>
  </div>
  <section class="gallery-inner-sec space">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7">
          <div class="title-area text-center mb-2">
            <p
              class="sub-title fadeinup wow"
              data-wow-duration="1.5s"
              data-wow-delay="0.1s"
            >
              <span class="double-line"></span> Gallery
            </p>
            <h2
              class="sec-title mb-4 fadeinup wow"
              data-wow-duration="1.5s"
              data-wow-delay="0.3s"
            >
              Stunning Gallery
            </h2>
            <div
              class="filter-menu style-2 indicator-active filter-menu-active mt-2 justify-content-center fadeinup wow"
              data-wow-duration="1.5s"
              data-wow-delay="0.5s"
            >
              <button
                v-if="videos?.data?.length"
                data-filter="*"
                :class="[
                  'th-btn',
                  'tab-btn',
                  {
                    active:
                      video_category_id === null ||
                      video_category_id === undefined,
                  },
                ]"
                type="button"
                @click.prevent="handleCategoryClick(null)"
              >
                View All
              </button>
              <button
                v-for="category in video_categories?.data"
                :key="category.id"
                @click.prevent="handleCategoryClick(category?.id)"
                :class="[
                  'th-btn',
                  'tab-btn',
                  { active: video_category_id === category.id },
                ]"
                type="button"
              >
                {{ category?.name }}
              </button>
            </div>
          </div>
        </div>
      </div>
      <div
        class="row gy-4 justify-content-center filter-active"
        v-if="videos?.data?.length"
      >
        <Videos :videos="videos?.data" />
      </div>
    </div>
  </section>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import { ref, onMounted } from "vue";
import Videos from "../components/Videos.vue";
import { store as gallery_store } from "../Store/gallery_store";
import { mapState, mapActions } from "pinia";

export default {
  components: {
    Link,
    Videos,
  },
  created: function () {
    this.fetch_videos();
    this.fetch_video_categories();
    console.log("Gallery Videos component created");
  },
  mounted() {
    console.log(
      "Component mounted. Initial video_category_id:",
      this.video_category_id
    );
    console.log("Initial video_categories:", this.video_categories);
  },
  methods: {
    ...mapActions(gallery_store, [
      "fetch_images",
      "fetch_videos",
      "fetch_image_categories",
      "fetch_video_categories",
      "set_image_category_id",
      "set_video_category_id",
    ]),
    handleCategoryClick(categoryId) {
      console.log("Category clicked:", categoryId);
      this.set_video_category_id(categoryId);
    },
  },
  computed: {
    ...mapState(gallery_store, [
      "images",
      "videos",
      "image_categories",
      "video_categories",
      "image_category_id",
      "video_category_id",
    ]),
  },
  watch: {
    video_category_id(newVal, oldVal) {
      console.log("Video category ID changed from", oldVal, "to", newVal);
    },
    video_categories: {
      handler(newVal) {
        console.log("Video categories loaded:", newVal);
      },
      deep: true,
    },
  },
};
</script>
<style lang="scss" scoped>
.gallery-inner-sec {
  .title-area {
    .sec-title {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
    }
  }
}

.filter-menu {
  .tab-btn {
    transition: all 0.3s ease;
    border: 2px solid transparent;

    &:hover {
      opacity: 0.8;
    }

    &.active {
      background-color: var(--theme-color, #007bff) !important;
      color: white !important;
      border-color: var(--theme-color, #007bff) !important;
      font-weight: 600;
    }
  }
}
</style>
