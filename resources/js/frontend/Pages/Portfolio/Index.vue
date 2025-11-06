<template>
  <div
    class="breadcumb-wrapper background-image"
    style="background-image: url('assets/frontend/img/common/2.jpeg')"
  >
    <div class="container">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title mt-5">Properties</h1>
        <ul class="breadcumb-menu">
          <li><Link href="/">Home</Link></li>
          <li>Properties</li>
        </ul>
      </div>
    </div>
  </div>
  <section class="th-blog-wrapper space-top space-extra-bottom mx-5">
    <div class="">
      <!-- Properties Slider Section -->
      <div class="properties-slider-section">
        <!-- Completed Properties Section -->
        <div class="property-category-section mb-5">
          <div class="section-header">
            <div class="header-content">
              <div class="category-badge completed">
                <i class="fas fa-check-circle"></i>
                <span>Completed</span>
              </div>
              <h2 class="category-title">Our Completed Properties</h2>
              <p class="category-description">
                Explore our successfully delivered projects showcasing quality
                and excellence
              </p>
            </div>
            <!-- Navigation Arrows -->
            <div class="slider-navigation">
              <!-- <div class="slider-indicator">
                {{
                  Math.min(
                    completedCurrentIndex + visibleSlides,
                    completedProperties.length
                  )
                }}
                of {{ completedProperties.length }}
              </div> -->
              <button class="slider-nav-btn prev-btn" @click="prevCompleted">
                <i class="fas fa-chevron-left"></i>
              </button>
              <button class="slider-nav-btn next-btn" @click="nextCompleted">
                <i class="fas fa-chevron-right"></i>
              </button>
            </div>
          </div>

          <div
            class="property-cards-wrapper"
            @mouseenter="stopAutoSlide('completed')"
            @mouseleave="startAutoSlide('completed', 3000)"
          >
            <div class="properties-slider-container">
              <!-- Navigation arrows directly on slider images -->
              <div class="slider-image-navigation">
                <button
                  class="slider-image-nav-btn slider-image-prev"
                  @click="prevCompleted"
                >
                  <i class="fas fa-chevron-left"></i>
                </button>
                <button
                  class="slider-image-nav-btn slider-image-next"
                  @click="nextCompleted"
                >
                  <i class="fas fa-chevron-right"></i>
                </button>
              </div>

              <div
                class="properties-slider"
                ref="completedSlider"
                :style="{
                  transform: `translateX(-${
                    completedCurrentIndex * slideWidth
                  }%)`,
                }"
              >
                <div
                  v-for="property in completedProperties"
                  :key="property.id"
                  class="property-slide"
                >
                  <PropertySliderCard
                    :property="property"
                    :isLoading="loading"
                    status="completed"
                  />
                </div>
                <!-- Loading cards -->
                <div
                  v-if="loading"
                  v-for="n in 3"
                  :key="`completed-skeleton-${n}`"
                  class="property-slide"
                >
                  <PropertySliderCard
                    :property="{}"
                    :isLoading="true"
                    status="completed"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Upcoming Properties Section -->
        <div class="property-category-section">
          <div class="section-header">
            <div class="header-content">
              <div class="category-badge upcoming">
                <i class="fas fa-clock"></i>
                <span>Upcoming</span>
              </div>
              <h2 class="category-title">Upcoming Properties</h2>
              <p class="category-description">
                Discover our exciting upcoming projects currently in development
              </p>
            </div>
            <!-- Navigation Arrows -->
            <div class="slider-navigation">
              <!-- <div class="slider-indicator">
                {{
                  Math.min(
                    upcomingCurrentIndex + visibleSlides,
                    upcomingProperties.length
                  )
                }}
                of {{ upcomingProperties.length }}
              </div> -->
              <button class="slider-nav-btn prev-btn" @click="prevUpcoming">
                <i class="fas fa-chevron-left"></i>
              </button>
              <button class="slider-nav-btn next-btn" @click="nextUpcoming">
                <i class="fas fa-chevron-right"></i>
              </button>
            </div>
          </div>

          <div
            class="property-cards-wrapper"
            @mouseenter="stopAutoSlide('upcoming')"
            @mouseleave="startAutoSlide('upcoming', 3000)"
          >
            <div class="properties-slider-container">
              <!-- Navigation arrows directly on slider images -->
              <div class="slider-image-navigation">
                <button
                  class="slider-image-nav-btn slider-image-prev"
                  @click="prevUpcoming"
                >
                  <i class="fas fa-chevron-left"></i>
                </button>
                <button
                  class="slider-image-nav-btn slider-image-next"
                  @click="nextUpcoming"
                >
                  <i class="fas fa-chevron-right"></i>
                </button>
              </div>

              <div
                class="properties-slider"
                ref="upcomingSlider"
                :style="{
                  transform: `translateX(-${
                    upcomingCurrentIndex * slideWidth
                  }%)`,
                }"
              >
                <div
                  v-for="property in upcomingProperties"
                  :key="property.id"
                  class="property-slide"
                >
                  <PropertySliderCard
                    :property="property"
                    :isLoading="loading"
                    status="upcoming"
                  />
                </div>
                <!-- Loading cards -->
                <div
                  v-if="loading"
                  v-for="n in 3"
                  :key="`upcoming-skeleton-${n}`"
                  class="property-slide"
                >
                  <PropertySliderCard
                    :property="{}"
                    :isLoading="true"
                    status="upcoming"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Traditional Grid/List View (Optional Toggle) -->
      <div class="traditional-view" v-if="showTraditionalView">
        <div class="row justify-content-center">
          <div class="col-xl-7">
            <div class="title-area text-center mb-2">
              <p
                class="sub-title fadeinup wow"
                data-wow-duration="1.5s"
                data-wow-delay="0.1s"
              >
                <span class="double-line"></span> Projects
              </p>
              <h2
                class="sec-title mb-4 fadeinup wow"
                data-wow-duration="1.5s"
                data-wow-delay="0.3s"
              >
                Welcome to Our Projects
              </h2>
              <p
                class="chat-text-wrap text-center pe-xl-5 ps-xl-5 mb-5 fadeinup wow"
              >
                Our projects, including 21 Towers, Rose Garden Towers, DGC-G
                Plot, Mirpur Model Towers, and Sun View Towers, showcase modern
                design, durability, and innovation. Every project reflects our
                commitment to quality, transparency, and long-term client value.
              </p>
            </div>
          </div>
        </div>
        <!-- View Toggle -->
        <div class="view-toggle-section text-center mb-4">
          <button
            @click="showTraditionalView = false"
            :class="['view-toggle-btn', { active: !showTraditionalView }]"
          >
            <i class="fas fa-images"></i>
            Slider View
          </button>
          <button
            @click="showTraditionalView = true"
            :class="['view-toggle-btn', { active: showTraditionalView }]"
          >
            <i class="fas fa-th"></i>
            Grid View
          </button>
        </div>

        <div class="th-sort-bar property-style">
          <div class="row justify-content-between align-items-center">
            <div class="col-md">
              <h4
                class="box-title text-start fadeinup wow"
                data-wow-duration="1.5s"
                data-wow-delay="0.1s"
                style="
                  visibility: visible;
                  animation-duration: 1.5s;
                  animation-delay: 0.1s;
                  animation-name: fadeinup;
                "
              >
                Property Listing
              </h4>
            </div>
            <div class="col-md-auto">
              <div
                class="sorting-filter-wrap fadeinup wow"
                data-wow-duration="1.5s"
                data-wow-delay="0.3s"
                style="
                  visibility: visible;
                  animation-duration: 1.5s;
                  animation-delay: 0.3s;
                  animation-name: fadeinup;
                "
              >
                <div class="nav" role="tablist">
                  <a
                    class="active"
                    href="#"
                    id="tab-shop-list"
                    data-bs-toggle="tab"
                    data-bs-target="#tab-list"
                    role="tab"
                    aria-controls="tab-grid"
                    aria-selected="false"
                    ><i class="fa-solid fa-list"></i
                  ></a>
                  <a
                    href="#"
                    id="tab-shop-grid"
                    data-bs-toggle="tab"
                    data-bs-target="#tab-grid"
                    role="tab"
                    aria-controls="tab-grid"
                    aria-selected="true"
                    ><i class="fa-light fa-grid-2"></i
                  ></a>
                </div>
                <form class="woocommerce-ordering" method="get">
                  <select
                    name="orderby"
                    class="orderby"
                    aria-label="Shop order"
                    @change="onCategoryChange"
                  >
                    <option value="all" selected="selected">
                      Default Sorting
                    </option>
                    <option
                      v-for="category in property_categories?.data"
                      :key="category.id"
                      :value="category.id"
                    >
                      Sort by {{ category.name }}
                    </option>
                  </select>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-content" id="nav-tabContent">
          <div
            class="tab-pane fade"
            id="tab-grid"
            role="tabpanel"
            aria-labelledby="tab-shop-grid"
          >
            <div class="row gy-40">
              <!-- Show skeleton placeholders when loading -->
              <template v-if="loading">
                <PropertySingleItemGrid
                  v-for="n in 6"
                  :key="`skeleton-${n}`"
                  :property="{}"
                  :is-loading="true"
                />
              </template>
              <!-- Show actual data when loaded -->
              <template v-else>
                <template
                  v-for="(property, index) in properties?.data"
                  :key="index"
                >
                  <PropertySingleItemGrid
                    :property="property"
                    :is-loading="false"
                  />
                </template>
              </template>

              <!-- <Pagination /> -->
              <div class="col-xxl-12">
                <Pagination
                  :currentPage="properties.current_page || 1"
                  :totalPages="properties.last_page || 1"
                  @prev="goToPage(properties.current_page - 1)"
                  @next="goToPage(properties.current_page + 1)"
                  @change="goToPage"
                />
              </div>
            </div>
          </div>
          <div
            class="tab-pane fade active show"
            id="tab-list"
            role="tabpanel"
            aria-labelledby="tab-shop-list"
          >
            <div class="row gy-40 justify-content-center">
              <div class="col-xl-8 col-lg-12">
                <div class="row gy-30">
                  <!-- Show skeleton placeholders when loading -->
                  <template v-if="loading">
                    <PropertySingleItemList
                      v-for="n in 4"
                      :key="`skeleton-list-${n}`"
                      :property="{}"
                      :is-loading="true"
                    />
                  </template>
                  <!-- Show actual data when loaded -->
                  <template v-else>
                    <template
                      v-for="(property, index) in properties?.data"
                      :key="index"
                    >
                      <PropertySingleItemList
                        :property="property"
                        :is-loading="false"
                      />
                    </template>
                  </template>

                  <div class="col-xxl-12">
                    <Pagination
                      :currentPage="properties.current_page || 1"
                      :totalPages="properties.last_page || 1"
                      @prev="goToPage(properties.current_page - 1)"
                      @next="goToPage(properties.current_page + 1)"
                      @change="goToPage"
                    />
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-lg-12">
                <SidebarArea />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { Link } from "@inertiajs/vue3";

import PropertySingleItemGrid from "./components/PropertySingleItemGrid.vue";
import PropertySingleItemList from "./components/PropertySingleItemList.vue";
import PropertySliderCard from "./components/PropertySliderCard.vue";
import Pagination from "../../GlobalComponent/Pagination/Pagination.vue";
import SidebarArea from "./components/SidebarArea.vue";
import { store as property_store } from "./Store/propertiesStore.js";
import { mapState, mapActions } from "pinia";

import $ from "jquery";
import "magnific-popup";
import "magnific-popup/dist/magnific-popup.css";

export default {
  components: {
    Link,
    PropertySingleItemGrid,
    PropertySingleItemList,
    PropertySliderCard,
    Pagination,
    SidebarArea,
  },

  data() {
    return {
      showTraditionalView: false,
      completedCurrentIndex: 0,
      upcomingCurrentIndex: 0,
      slideWidth: 25, // 25% for 4 items per row
      visibleSlides: 4, // Show 4 properties at a time
      completedAutoInterval: null,
      upcomingAutoInterval: null,
    };
  },

  created: function () {
    console.log("Portfolio component created");
    this.fetch_property_categories();
    const urlParams = new URLSearchParams(window.location.search);
    const categoryId = urlParams.get("property_category_id");
    if (categoryId) {
      console.log("Setting category ID:", categoryId);
      this.set_property_category_id(categoryId);
    } else {
      console.log("Fetching initial properties, page 1");
      this.fetch_properties({ page: 1 });
    }
  },

  mounted() {
    this.updateSlideWidth();
    window.addEventListener("resize", this.updateSlideWidth);

    // Auto-play functionality (optional)
    // this.startAutoplay();
  },

  beforeUnmount() {
    window.removeEventListener("resize", this.updateSlideWidth);
    // Clean up auto-slide intervals
    this.stopAutoSlide("completed");
    this.stopAutoSlide("upcoming");
  },

  methods: {
    ...mapActions(property_store, [
      "fetch_properties",
      "fetch_property_categories",
      "set_property_category_id",
    ]),

    // Multi-item Slider Navigation - Shows 4 items minimum
    nextCompleted() {
      if (this.completedProperties.length === 0) return;

      const maxIndex = Math.max(
        0,
        this.completedProperties.length - this.visibleSlides
      );

      if (this.completedCurrentIndex < maxIndex) {
        // Move by visible slides count for faster navigation
        this.completedCurrentIndex = Math.min(
          this.completedCurrentIndex + this.visibleSlides,
          maxIndex
        );
      } else {
        // Loop back to start
        this.completedCurrentIndex = 0;
      }
    },

    prevCompleted() {
      if (this.completedProperties.length === 0) return;

      const maxIndex = Math.max(
        0,
        this.completedProperties.length - this.visibleSlides
      );

      if (this.completedCurrentIndex > 0) {
        // Move by visible slides count for faster navigation
        this.completedCurrentIndex = Math.max(
          this.completedCurrentIndex - this.visibleSlides,
          0
        );
      } else {
        // Loop to end
        this.completedCurrentIndex = maxIndex;
      }
    },

    nextUpcoming() {
      if (this.upcomingProperties.length === 0) return;

      const maxIndex = Math.max(
        0,
        this.upcomingProperties.length - this.visibleSlides
      );

      if (this.upcomingCurrentIndex < maxIndex) {
        // Move by visible slides count for faster navigation
        this.upcomingCurrentIndex = Math.min(
          this.upcomingCurrentIndex + this.visibleSlides,
          maxIndex
        );
      } else {
        // Loop back to start
        this.upcomingCurrentIndex = 0;
      }
    },

    prevUpcoming() {
      if (this.upcomingProperties.length === 0) return;

      const maxIndex = Math.max(
        0,
        this.upcomingProperties.length - this.visibleSlides
      );

      if (this.upcomingCurrentIndex > 0) {
        // Move by visible slides count for faster navigation
        this.upcomingCurrentIndex = Math.max(
          this.upcomingCurrentIndex - this.visibleSlides,
          0
        );
      } else {
        // Loop to end
        this.upcomingCurrentIndex = maxIndex;
      }
    },

    // Auto navigation methods for continuous looping
    startAutoSlide(section = "completed", interval = 4000) {
      if (section === "completed") {
        this.completedAutoInterval = setInterval(() => {
          this.nextCompleted();
        }, interval);
      } else {
        this.upcomingAutoInterval = setInterval(() => {
          this.nextUpcoming();
        }, interval);
      }
    },

    stopAutoSlide(section = "completed") {
      if (section === "completed" && this.completedAutoInterval) {
        clearInterval(this.completedAutoInterval);
        this.completedAutoInterval = null;
      } else if (section === "upcoming" && this.upcomingAutoInterval) {
        clearInterval(this.upcomingAutoInterval);
        this.upcomingAutoInterval = null;
      }
    },

    // Responsive slide calculation for 4 items minimum
    updateSlideWidth() {
      const screenWidth = window.innerWidth;

      if (screenWidth <= 576) {
        // Mobile: 1 item per row
        this.visibleSlides = 1;
        this.slideWidth = 100;
      } else if (screenWidth <= 768) {
        // Small tablet: 2 items per row
        this.visibleSlides = 2;
        this.slideWidth = 50;
      } else if (screenWidth <= 992) {
        // Tablet: 3 items per row
        this.visibleSlides = 3;
        this.slideWidth = 33.333;
      } else {
        // Desktop: 4 items per row (minimum requirement)
        this.visibleSlides = 4;
        this.slideWidth = 25;
      }
    },

    goToPage(page) {
      console.log("Going to page:", page);
      console.log(
        "Current properties.current_page:",
        this.properties.current_page
      );
      console.log("Total pages:", this.properties.last_page);

      if (page < 1 || page > (this.properties.last_page || 1)) {
        console.log("Page out of range, ignoring");
        return;
      }

      console.log("Fetching page:", page);
      this.fetch_properties({ page });
    },
    onCategoryChange(event) {
      const categoryId = event.target.value;
      if (categoryId !== "menu_order") {
        this.set_property_category_id(categoryId);
      }
    },
  },
  computed: {
    ...mapState(property_store, [
      "properties",
      "property_categories",
      "loading",
    ]),

    completedProperties() {
      if (!this.properties?.data) return [];
      // Filter properties that are completed (you can adjust this logic based on your data structure)
      return this.properties.data.filter(
        (property) =>
          property.category?.name == "completed" ||
          property.category?.name == "Completed"
      );
    },

    upcomingProperties() {
      if (!this.properties?.data) return [];
      // Filter properties that are upcoming/under construction
      return this.properties.data.filter(
        (property) => property.category?.name == "upcoming"
      );
    },
  },
  watch: {
    loading(newValue, oldValue) {
      console.log("Portfolio loading state changed:", {
        old: oldValue,
        new: newValue,
      });
      console.log(
        "Properties data:",
        this.properties?.data?.length || 0,
        "items"
      );
    },

    "properties.current_page"(newValue, oldValue) {
      console.log("Current page changed:", { old: oldValue, new: newValue });
      console.log("Total pages:", this.properties?.last_page);
    },
  },
};
</script>

<style scoped>
@import url("./css/index.css");

/* ========================================
   PROPERTY SLIDER SECTION STYLES
   ======================================== */

.properties-slider-section {
  margin-bottom: 80px;
}

.property-category-section {
  margin-bottom: 80px;
}

/* Section Header */
.section-header {
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
  margin-bottom: 50px;
  position: relative;
}

.header-content {
  text-align: center;
  flex: 1;
}

/* Navigation Arrows */
.slider-navigation {
  display: flex;
  gap: 15px;
  align-items: center;
}

.slider-nav-btn {
  width: 50px;
  height: 50px;
  border: none;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.95);
  color: #333;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.15);
  opacity: 0.9;
}

.slider-nav-btn:hover {
  transform: scale(1.05);
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.25);
  background: rgba(255, 255, 255, 1);
  opacity: 1;
}

.slider-nav-btn:active {
  transform: translateY(-1px);
}

.slider-nav-btn i {
  font-size: 1.2rem;
  color: #333;
  font-weight: 600;
}

.slider-nav-btn:disabled {
  opacity: 0.4;
  cursor: not-allowed;
  transform: none;
  background: rgba(255, 255, 255, 0.6);
}

/* Slider Image Navigation - Hidden on desktop, visible on mobile */
.slider-image-navigation {
  display: none; /* Hidden on desktop by default */
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  pointer-events: none;
  z-index: 10;
}

.slider-image-nav-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 50px;
  height: 50px;
  border: none;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.95);
  color: #333;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.2);
  pointer-events: auto;
  opacity: 0.9;

  &:hover {
    background: rgba(255, 255, 255, 1);
    opacity: 1;
    transform: translateY(-50%) scale(1.05);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
  }

  &:active {
    transform: translateY(-50%) scale(0.95);
  }

  i {
    font-size: 18px;
    color: #333;
    font-weight: 600;
  }
}

.slider-image-prev {
  left: 20px;
}

.slider-image-next {
  right: 20px;
}

/* Properties slider container positioning */
.properties-slider-container {
  position: relative;
}

/* Slider Indicator */
.slider-indicator {
  background: rgba(37, 99, 235, 0.1);
  color: #2563eb;
  padding: 8px 16px;
  border-radius: 20px;
  font-weight: 600;
  font-size: 0.9rem;
  margin-right: 15px;
  border: 2px solid rgba(37, 99, 235, 0.2);
}

.category-badge {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 12px 24px;
  border-radius: 50px;
  font-weight: 600;
  font-size: 0.9rem;
  margin-bottom: 20px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

.category-badge.completed {
  background: linear-gradient(135deg, #10b981, #059669);
  color: white;
}

.category-badge.upcoming {
  background: linear-gradient(135deg, #f59e0b, #d97706);
  color: white;
}

/* Slider Styles */
.property-cards-wrapper {
  overflow: hidden;
  position: relative;
}

.properties-slider-container {
  overflow: hidden;
  width: 100%;
  margin: 0 auto;
  position: relative;
}

.properties-slider {
  display: flex;
  gap: 20px;
  transition: transform 0.7s cubic-bezier(0.23, 1, 0.32, 1);
  will-change: transform;
  width: 100%;
}

.property-slide {
  flex: 0 0 calc(25% - 15px); /* Default: 4 items per row with gap */
  min-width: 280px;
  display: flex;
  justify-content: center;
  align-items: center;
  box-sizing: border-box;
}

.category-title {
  font-size: 2.5rem;
  font-weight: 700;
  color: #1f2937;
  margin-bottom: 15px;
  line-height: 1.2;
}

.category-description {
  font-size: 1.1rem;
  color: #6b7280;
  max-width: 600px;
  margin: 0 auto;
  line-height: 1.6;
}

/* Property Cards Wrapper */
.property-cards-wrapper {
  margin: 0 auto;
}

.properties-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 30px;
  justify-items: center;
}

.property-card-container {
  width: 100%;
  max-width: 400px;
}

/* View Toggle Section */
.view-toggle-section {
  margin-bottom: 40px;
}

.view-toggle-btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 24px;
  margin: 0 10px;
  border: 2px solid #e5e7eb;
  background: white;
  color: #6b7280;
  border-radius: 25px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
}

.view-toggle-btn.active {
  background: linear-gradient(135deg, #2563eb, #1d4ed8);
  color: white;
  border-color: #2563eb;
  transform: translateY(-2px);
  box-shadow: 0 5px 20px rgba(37, 99, 235, 0.4);
}

.view-toggle-btn:not(.active):hover {
  border-color: #2563eb;
  color: #2563eb;
  transform: translateY(-1px);
}

/* Traditional View */
.traditional-view {
  margin-top: 60px;
}

/* ========================================
   RESPONSIVE DESIGN
   ======================================== */

@media (max-width: 1200px) {
  .category-title {
    font-size: 2.2rem;
  }

  .properties-grid {
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 25px;
  }

  /* Slider Responsive - 4 items on desktop */
  .section-header {
    flex-direction: column;
    gap: 25px;
    text-align: center;
  }

  .slider-navigation {
    order: -1;
    justify-content: center;
  }

  .property-slide {
    flex: 0 0 calc(25% - 15px); /* 4 items per row */
    min-width: 280px;
  }
}

@media (max-width: 992px) {
  .category-title {
    font-size: 2rem;
  }

  .properties-grid {
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
  }

  /* Slider: 3 items per row on tablets */
  .property-slide {
    flex: 0 0 calc(33.333% - 14px);
    min-width: 260px;
  }
}

@media (max-width: 768px) {
  .properties-slider-section {
    margin-bottom: 60px;
  }

  section.th-blog-wrapper {
    margin: 0 !important;
  }

  .property-category-section {
    margin-bottom: 60px;
  }

  .section-header {
    margin-bottom: 40px;
    gap: 20px;
  }

  .category-title {
    font-size: 1.8rem;
  }

  /* Slider Mobile Styles - 2 items per row */
  .property-slide {
    flex: 0 0 calc(50% - 10px);
    min-width: 240px;
  }

  .properties-slider {
    gap: 15px;
  }

  .slider-nav-btn {
    width: 45px;
    height: 45px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
  }

  /* Hide top navigation arrows on mobile */
  .slider-navigation {
    display: none !important;
  }

  /* Show slider image navigation arrows on mobile */
  .slider-image-navigation {
    display: block !important;
  }

  .slider-image-nav-btn {
    width: 45px;
    height: 45px;

    i {
      font-size: 16px;
    }
  }

  .slider-image-prev {
    left: 15px;
  }

  .slider-image-next {
    right: 15px;
  }

  .category-description {
    font-size: 1rem;
  }

  .property-cards-wrapper {
    margin: 0 15px;
  }

  .properties-grid {
    grid-template-columns: 1fr;
    gap: 20px;
  }

  .view-toggle-section {
    margin-bottom: 30px;
  }

  .view-toggle-btn {
    padding: 10px 20px;
    margin: 0 5px;
    font-size: 0.9rem;
  }
}

@media (max-width: 576px) {
  .category-title {
    font-size: 1.5rem;
  }

  .category-badge {
    padding: 8px 16px;
    font-size: 0.8rem;
  }

  .property-cards-wrapper {
    margin: 0 10px;
  }

  .properties-grid {
    gap: 15px;
  }

  .property-card-container {
    max-width: 100%;
  }

  /* Slider Small Mobile - 1 item per row */
  .property-slide {
    flex: 0 0 calc(100% - 10px);
    min-width: 280px;
  }

  .properties-slider {
    gap: 10px;
  }

  .slider-nav-btn {
    width: 40px;
    height: 40px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.18);
  }

  .slider-nav-btn i {
    font-size: 1rem;
    color: #333;
  }

  /* Smaller slider image navigation arrows for small mobile */
  .slider-image-nav-btn {
    width: 40px;
    height: 40px;

    i {
      font-size: 14px;
    }
  }

  .slider-image-prev {
    left: 10px;
  }

  .slider-image-next {
    right: 10px;
  }

  .slider-navigation {
    display: none !important;
  }

  .view-toggle-btn {
    display: block;
    width: 100%;
    margin: 5px 0;
    text-align: center;
  }
}

/* Loading Animation */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.property-category-section {
  animation: fadeInUp 0.6s ease-out;
}

.property-category-section:nth-child(2) {
  animation-delay: 0.2s;
}
</style>
