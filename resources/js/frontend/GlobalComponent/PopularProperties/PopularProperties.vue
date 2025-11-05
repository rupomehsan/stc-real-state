<template>
  <section class="popular-sec-1 space">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <!-- Hero Subtitle Section -->
          <div class="hero-subtitle-section text-center mb-60">
            <div
              class="hero-subtitle-wrapper fadeInUp wow"
              data-wow-duration="1.4s"
              data-wow-delay="0.1s"
            >
              <div class="hero-subtitle-background">
                <div class="floating-particles"></div>
                <div class="hero-subtitle-indicator">
                  <span class="hero-double-line"></span>
                  <div class="hero-subtitle-dot"></div>
                  <span class="hero-double-line"></span>
                </div>
                <h3 class="hero-sub-title-text">Featured Projects</h3>
                <div class="hero-subtitle-underline"></div>
              </div>
            </div>
          </div>

          <!-- Enhanced Main Title -->
          <div
            class="main-title-wrapper fadeinup wow"
            data-wow-duration="1.3s"
            data-wow-delay="0.3s"
          >
            <h2 class="professional-main-title">
              Our Premium Property
              <span class="title-highlight">Portfolio</span>
            </h2>
            <div class="title-underline">
              <div class="underline-accent"></div>
            </div>
          </div>

          <!-- Professional Description -->
          <div
            class="title-description fadeinup wow"
            data-wow-duration="1.4s"
            data-wow-delay="0.5s"
          >
            <p class="description-text">
              Discover our carefully curated collection of premium properties,
              designed to meet the highest standards of luxury and innovation.
            </p>
          </div>

          <!-- Professional Filter Menu -->
          <div
            class="professional-filter-section mt-4 fadeinup wow"
            data-wow-duration="1.5s"
            data-wow-delay="0.7s"
          >
            <div class="filter-menu-wrapper">
              <div class="filter-label">
                <span class="filter-text">Browse by Category:</span>
              </div>
              <div
                class="filter-menu indicator-active filter-menu-active justify-content-center"
              >
                <button
                  data-filter="*"
                  :class="[
                    'th-btn tab-btn',
                    { active: property_category_id === null },
                  ]"
                  type="button"
                  @click.prevent.stop="handleCategoryFilter(null)"
                >
                  View All
                </button>
                <button
                  v-for="category in property_categories?.data"
                  :key="category.id"
                  @click.prevent.stop="handleCategoryFilter(category?.id)"
                  :class="[
                    'th-btn tab-btn',
                    { active: property_category_id === category.id },
                  ]"
                  type="button"
                >
                  {{ category?.name }}
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row gy-30 justify-content-center filter-active">
      <!-- <p>{{ properties }} Properties Found</p> -->
      <template v-for="(property, index) in properties?.data" :key="index">
        <PopularPropertiesSingleItem :property="property" />
      </template>
    </div>
    <div class="col-xxl-12 text-center mt-5">
      <!-- <Pagination
          :currentPage="properties.current_page || 1"
          :totalPages="properties.last_page || 1"
          @prev="goToPage(properties.current_page - 1)"
          @next="goToPage(properties.current_page + 1)"
          @change="goToPage"
        /> -->
      <Link class="th-btn rounded" href="/portfolio">See more</Link>
    </div>
  </section>
</template>

<script>
import Pagination from "../Pagination/Pagination.vue";
import PopularPropertiesSingleItem from "./PopularPropertiesSingleItem.vue";
import { store as property_store } from "./Store/propertiesStore.js";
import { mapState, mapActions } from "pinia";
export default {
  components: {
    PopularPropertiesSingleItem,
    Pagination,
  },
  created: function () {
    this.fetch_property_categories();
    this.fetch_properties({ page: 1 });
  },
  methods: {
    ...mapActions(property_store, [
      "fetch_properties",
      "fetch_property_categories",
      "set_property_category_id",
    ]),
    goToPage(page) {
      console.log("Going to page:", page);
      if (page < 1 || page > (this.properties.last_page || 1)) return;
      this.fetch_properties({ page });
    },
    handleCategoryFilter(categoryId) {
      // Prevent event bubbling that might affect other components
      event?.stopPropagation();
      this.set_property_category_id(categoryId);
    },
  },
  computed: {
    ...mapState(property_store, [
      "properties",
      "property_categories",
      "property_category_id",
    ]),
  },
};
</script>

<style lang="scss" scoped>
/* Scoped styles to prevent conflicts with other components */
.popular-sec-1 {
  isolation: isolate;
  padding: 80px 0;
  background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
  position: relative;

  &::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(
      135deg,
      transparent 0%,
      rgba(239, 68, 68, 0.02) 50%,
      transparent 100%
    );
    pointer-events: none;
  }
}

/* Hero Subtitle Section Styles (from AboutUs component) */
.hero-subtitle-section {
  position: relative;
  z-index: 10;
  margin-bottom: 60px;
}

.hero-subtitle-wrapper {
  position: relative;
  display: inline-block;
}

.hero-subtitle-background {
  position: relative;
  background: linear-gradient(
    135deg,
    rgba(255, 255, 255, 0.95) 0%,
    rgba(248, 250, 252, 0.9) 100%
  );
  backdrop-filter: blur(15px);
  border-radius: 50px;
  padding: 25px 50px;
  border: 1px solid rgba(239, 68, 68, 0.1);
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08), 0 1px 3px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.floating-particles {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  pointer-events: none;
}

.floating-particles::before,
.floating-particles::after {
  content: "";
  position: absolute;
  width: 6px;
  height: 6px;
  background: linear-gradient(45deg, #ef4444, #dc2626);
  border-radius: 50%;
  animation: floatParticles 3s ease-in-out infinite;
}

.floating-particles::before {
  top: 20%;
  left: 15%;
  animation-delay: 0s;
}

.floating-particles::after {
  bottom: 25%;
  right: 20%;
  animation-delay: 1.5s;
}

@keyframes floatParticles {
  0%,
  100% {
    transform: translateY(0px) scale(1);
    opacity: 0.6;
  }
  50% {
    transform: translateY(-8px) scale(1.2);
    opacity: 1;
  }
}

.hero-subtitle-indicator {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 15px;
  margin-bottom: 15px;
}

.hero-double-line {
  width: 40px;
  height: 2px;
  background: linear-gradient(90deg, #ef4444 0%, #dc2626 100%);
  border-radius: 1px;
  position: relative;
}

.hero-subtitle-dot {
  width: 12px;
  height: 12px;
  background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
  border-radius: 50%;
  position: relative;
  box-shadow: 0 2px 8px rgba(239, 68, 68, 0.4);

  &::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 6px;
    height: 6px;
    background: rgba(255, 255, 255, 0.8);
    border-radius: 50%;
  }
}

.hero-sub-title-text {
  font-size: 18px;
  font-weight: 600;
  color: #ef4444;
  text-transform: uppercase;
  letter-spacing: 1.2px;
  margin: 0;
  font-family: "Poppins", sans-serif;
  line-height: 1.2;
}

.hero-subtitle-underline {
  width: 60px;
  height: 3px;
  background: linear-gradient(90deg, #ef4444 0%, #dc2626 50%, #ef4444 100%);
  border-radius: 2px;
  margin: 12px auto 0;
  position: relative;

  &::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: inherit;
    border-radius: inherit;
    filter: blur(2px);
    opacity: 0.5;
  }
}

/* Professional Title Section Styles */
.professional-title-section {
  position: relative;
  z-index: 2;
  max-width: 800px;
  margin: 0 auto;
  padding: 0 20px;
}

.subtitle-wrapper {
  margin-bottom: 20px;
}

.subtitle-decoration {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 15px;
  margin-bottom: 12px;
}

.decoration-line {
  width: 40px;
  height: 2px;
  background: linear-gradient(
    90deg,
    transparent 0%,
    #ef4444 50%,
    transparent 100%
  );

  &.left {
    background: linear-gradient(90deg, transparent 0%, #ef4444 100%);
  }

  &.right {
    background: linear-gradient(90deg, #ef4444 0%, transparent 100%);
  }
}

.subtitle-icon {
  width: 40px;
  height: 40px;
  background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 16px;
  box-shadow: 0 4px 15px rgba(239, 68, 68, 0.3);
}

.professional-subtitle {
  font-size: 16px;
  font-weight: 600;
  color: #ef4444;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin: 0;
  font-family: "Poppins", sans-serif;
}

.main-title-wrapper {
  margin-bottom: 25px;
}

.professional-main-title {
  font-size: 3rem;
  font-weight: 700;
  color: #1f2937;
  line-height: 1.2;
  margin: 0;
  font-family: "Poppins", sans-serif;

  .title-highlight {
    background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    position: relative;

    &::after {
      content: "";
      position: absolute;
      bottom: -4px;
      left: 0;
      right: 0;
      height: 3px;
      background: linear-gradient(90deg, #ef4444 0%, #dc2626 100%);
      border-radius: 2px;
      opacity: 0.3;
    }
  }
}

.title-underline {
  display: flex;
  justify-content: center;
  margin-top: 16px;
}

.underline-accent {
  width: 80px;
  height: 4px;
  background: linear-gradient(90deg, #ef4444 0%, #dc2626 50%, #ef4444 100%);
  border-radius: 2px;
  position: relative;

  &::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 12px;
    height: 12px;
    background: #ef4444;
    border-radius: 50%;
    box-shadow: 0 2px 8px rgba(239, 68, 68, 0.4);
  }
}

.title-description {
  margin-bottom: 30px;
}

.description-text {
  font-size: 18px;
  color: #6b7280;
  line-height: 1.6;
  margin: 0;
  max-width: 600px;
  margin-left: auto;
  margin-right: auto;
  font-family: "Inter", sans-serif;
}

/* Professional Filter Section */
.professional-filter-section {
  background: rgba(255, 255, 255, 0.8);
  backdrop-filter: blur(10px);
  padding: 30px;
  border-radius: 20px;
  border: 1px solid rgba(239, 68, 68, 0.1);
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.06);
}

.filter-menu-wrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 20px;
}

.filter-label {
  .filter-text {
    font-size: 16px;
    font-weight: 600;
    color: #374151;
    font-family: "Poppins", sans-serif;
  }
}

.filter-menu {
  position: relative;
  z-index: 1;
  display: flex;
  flex-wrap: wrap;
  gap: 12px;

  .tab-btn {
    position: relative;
    z-index: 2;
    padding: 12px 24px;
    border: 2px solid #e5e7eb;
    background: #ffffff;
    color: #6b7280;
    border-radius: 30px;
    font-weight: 500;
    transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    font-family: "Poppins", sans-serif;

    &:hover {
      border-color: #ef4444;
      color: #ef4444;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(239, 68, 68, 0.15);
    }

    &.active {
      background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
      border-color: #ef4444;
      color: white;
      box-shadow: 0 4px 15px rgba(239, 68, 68, 0.3);

      &:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(239, 68, 68, 0.4);
      }
    }
  }
}

/* Responsive Design */
@media (max-width: 768px) {
  .professional-main-title {
    font-size: 2.2rem;
  }

  .professional-filter-section {
    padding: 20px;
    margin: 0 15px;
  }

  .filter-menu {
    justify-content: center;

    .tab-btn {
      padding: 10px 18px;
      font-size: 14px;
    }
  }

  .description-text {
    font-size: 16px;
    padding: 0 15px;
  }
}

@media (max-width: 480px) {
  .professional-main-title {
    font-size: 1.8rem;
  }

  .subtitle-decoration {
    gap: 10px;
  }

  .decoration-line {
    width: 25px;
  }

  .subtitle-icon {
    width: 35px;
    height: 35px;
    font-size: 14px;
  }
}
</style>
