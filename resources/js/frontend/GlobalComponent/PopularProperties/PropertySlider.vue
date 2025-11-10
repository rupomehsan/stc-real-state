<template>
  <div class="property-slider-container">
    <!-- Hero Subtitle Section -->
    <!-- <div class="hero-subtitle-section text-center mb-60">
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
    </div> -->

    <!-- Modern Property Slider -->
    <div class="modern-property-slider">
      <div class="slider-container">
        <!-- Left Content Panel -->
        <div class="content-panel">
          <div class="project-header">
            <h2 class="main-title">STC Featured Projects</h2>
            <div class="project-info">
              <h3 class="project-name">
                {{
                  currentSlide?.property_name ||
                  currentSlide?.title ||
                  "Sheltech Cityscape Heights"
                }}
              </h3>
              <div class="project-meta">
                <span class="project-type">{{
                  currentSlide?.category?.name || "Featured Property"
                }}</span>

                <span class="separator">•</span>
                <span class="project-location">{{
                  currentSlide?.property_address || "Dhaka"
                }}</span>
              </div>
            </div>
          </div>

          <!-- Navigation Controls -->
          <div class="slider-controls">
            <button
              class="control-btn prev-btn"
              @click="prevSlide"
              aria-label="Previous slide"
            >
              <i class="fas fa-arrow-left"></i>
            </button>
            <button
              class="control-btn next-btn"
              @click="nextSlide"
              aria-label="Next slide"
            >
              <i class="fas fa-arrow-right"></i>
            </button>
          </div>
        </div>

        <!-- Right Image Panel -->
        <div class="image-panel">
          <!-- Main Slider -->
          <div
            ref="mainSliderRef"
            class="main-image-slider swiper"
            v-if="!loading && slides.length > 0"
          >
            <div class="swiper-wrapper">
              <div
                v-for="slide in slides"
                :key="`main-${slide.id}`"
                class="swiper-slide"
              >
                <Link
                  :href="`/portfolio/property-details?slug=${slide.slug}`"
                  class="image-container"
                  :title="`View details of ${
                    slide.property_name || slide.title
                  }`"
                >
                  <img
                    class="property-image"
                    :src="getPropertyImage(slide)"
                    :alt="slide.property_name || slide.title"
                    loading="eager"
                    @error="handleImageError"
                    @load="handleImageLoad"
                  />
                  <div class="image-overlay">
                    <div class="view-details-overlay">
                      <i class="fas fa-eye"></i>
                      <span>View Details</span>
                    </div>
                  </div>
                </Link>
              </div>
            </div>

            <!-- Main Image Navigation Arrows -->
            <div class="main-image-navigation" v-if="showNavigation">
              <button
                ref="prevButtonRef"
                class="main-nav-btn main-prev-btn"
                @click="prevSlide"
                :aria-label="navigationLabels.prev"
              >
                <i class="fas fa-chevron-left"></i>
              </button>
              <button
                ref="nextButtonRef"
                class="main-nav-btn main-next-btn"
                @click="nextSlide"
                :aria-label="navigationLabels.next"
              >
                <i class="fas fa-chevron-right"></i>
              </button>
            </div>

            <!-- Mobile Navigation Arrows (inside image slider) -->
            <div class="mobile-slider-controls">
              <button
                class="mobile-control-btn mobile-prev-btn"
                @click="prevSlide"
                aria-label="Previous slide"
              >
                <i class="fas fa-chevron-left"></i>
              </button>
              <button
                class="mobile-control-btn mobile-next-btn"
                @click="nextSlide"
                aria-label="Next slide"
              >
                <i class="fas fa-chevron-right"></i>
              </button>
            </div>
          </div>
          <!-- Loading State -->
          <div v-else-if="loading" class="loading-state">
            <div class="loading-spinner"></div>
            <p>Loading properties...</p>
          </div>
          <!-- Empty State -->
          <div v-else class="empty-state">
            <p>No properties found.</p>
          </div>

          <!-- Thumbnail Navigation -->
          <div
            class="thumbnail-navigation"
            v-if="!loading && slides.length > 0"
          >
            <div ref="thumbSliderRef" class="thumbnail-slider swiper">
              <div class="swiper-wrapper">
                <div
                  v-for="(slide, index) in slides"
                  :key="`thumb-${slide.id}`"
                  class="thumb-item swiper-slide"
                  :class="{
                    'swiper-slide-active': index === currentSlideIndex,
                    'manual-active': index === currentSlideIndex,
                  }"
                  @click="goToSlide(index)"
                >
                  <img
                    class="thumb-image"
                    :src="getPropertyImage(slide)"
                    :alt="slide.property_name || slide.title"
                    loading="lazy"
                  />
                  <!-- Debug indicator -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import {
  ref,
  onMounted,
  onUnmounted,
  computed,
  getCurrentInstance,
  watch,
  nextTick,
} from "vue";
import { Swiper } from "swiper";
import "swiper/css";
import "swiper/css/effect-fade";
import "swiper/css/pagination";
import { store as propertiesStore } from "./Store/propertiesStore.js";
import { mapState, mapActions } from "pinia";
import { Link } from "@inertiajs/vue3";

export default {
  name: "PropertySlider",
  components: {
    Link,
  },
  props: {
    showNavigation: {
      type: Boolean,
      default: true,
    },
    autoplay: {
      type: Boolean,
      default: false,
    },
    autoplayDelay: {
      type: Number,
      default: 3000,
    },
  },
  created() {
    console.log("PropertySlider created, fetching properties...");
    this.fetch_properties({ page: 1 });
  },
  mounted() {
    console.log(
      "PropertySlider mounted - Loading:",
      this.loading,
      "Slides:",
      this.slides.length
    );
  },
  computed: {
    ...mapState(propertiesStore, ["properties", "loading", "error"]),
    // Get slides from store data
    slides() {
      return this.properties?.data || [];
    },
    // Current slide based on index
    currentSlide() {
      const index = this.currentSlideIndex || 0;
      return this.slides[index] || this.slides[0] || {};
    },
  },
  watch: {
    slides: {
      handler(newSlides, oldSlides) {
        // Initialize sliders when data becomes available
        if (
          newSlides &&
          newSlides.length > 0 &&
          (!oldSlides || oldSlides.length === 0)
        ) {
          console.log("Slides data loaded, reinitializing...");
          this.$nextTick(() => {
            this.reinitializeSliders();
          });
        }
      },
      immediate: true,
    },
    loading(newLoading, oldLoading) {
      // When loading finishes and we have data, initialize sliders
      if (oldLoading && !newLoading && this.slides.length > 0) {
        console.log("Loading finished, attempting to initialize sliders...");
        setTimeout(() => {
          this.reinitializeSliders();
        }, 100);
      }
    },
  },
  methods: {
    ...mapActions(propertiesStore, ["fetch_properties"]),
    reinitializeSliders() {
      // Force re-initialization of sliders
      this.$nextTick(() => {
        if (this.slides.length > 0) {
          console.log("Manually reinitializing sliders...");
          // Destroy existing sliders if they exist
          if (this.mainSlider) {
            this.mainSlider.destroy(true, true);
            this.mainSlider = null;
          }
          if (this.thumbSlider) {
            this.thumbSlider.destroy(true, true);
            this.thumbSlider = null;
          }
          // Reinitialize
          this.initializeSliders();
        }
      });
    },
    getPropertyImage(property) {
      // Handle both old format (image) and new format (banner_image)
      if (property.image) {
        return property.image;
      }
      if (property.banner_image) {
        // If banner_image is an array, get the first image
        if (
          Array.isArray(property.banner_image) &&
          property.banner_image.length > 0
        ) {
          return property.banner_image[0];
        }
        // If it's a string, return it directly
        if (typeof property.banner_image === "string") {
          return property.banner_image;
        }
      }
      // Fallback image
      return "https://www.sheltech-bd.com/cms/admin/uploads/product/sheltech-khan-legacy/1744282377cFRqd.jpg";
    },
  },
  setup(props) {
    const instance = getCurrentInstance();
    const mainSliderRef = ref(null);
    const thumbSliderRef = ref(null);
    const nextButtonRef = ref(null);
    const prevButtonRef = ref(null);
    const currentSlideIndex = ref(0);
    let mainSlider = null;
    let thumbSlider = null;

    // Get slides from component instance
    const getSlides = () => {
      return instance?.proxy?.slides || [];
    };

    const imageConfig = {
      main: { width: 1200, height: 800 },
      thumb: { width: 1200, height: 800 },
    };

    const navigationLabels = {
      next: "Go to next slide",
      prev: "Go to previous slide",
    };

    const formatDate = (dateString) => {
      const options = { year: "numeric", month: "long", day: "numeric" };
      return new Date(dateString).toLocaleDateString(undefined, options);
    };

    // Force update thumbnail active states
    const updateThumbnailActiveStates = (activeIndex) => {
      if (thumbSliderRef.value) {
        const thumbnails = thumbSliderRef.value.querySelectorAll(".thumb-item");
        thumbnails.forEach((thumb, index) => {
          // Remove all active classes first
          thumb.classList.remove("swiper-slide-active", "manual-active");

          // Add active classes to the current slide
          if (index === activeIndex) {
            thumb.classList.add("swiper-slide-active", "manual-active");
          }
        });
        console.log("Updated thumbnail active states for index:", activeIndex);
      }
    };

    const initializeSliders = () => {
      if (!mainSliderRef.value || !thumbSliderRef.value) {
        console.warn("Slider refs not available");
        return;
      }

      const slides = getSlides();
      console.log("Initializing sliders with", slides.length, "slides");

      if (slides.length === 0) {
        console.warn("No slides data available for initialization");
        return;
      }

      // Initialize thumbnail slider first
      thumbSlider = new Swiper(thumbSliderRef.value, {
        direction: "vertical",
        speed: 400,
        touchRatio: 0.2,
        slideToClickedSlide: true,
        loop: false,
        spaceBetween: 20,
        slidesPerView: "auto",
        freeMode: true,
        watchSlidesProgress: true,
        mousewheel: {
          releaseOnEdges: true,
        },
        on: {
          init: function () {
            console.log(
              "Thumbnail slider initialized with",
              slides.length,
              "slides"
            );
            this.update();
          },
          slideChange: function () {
            // Sync main slider when thumbnail changes
            const activeIndex = this.realIndex;
            currentSlideIndex.value = activeIndex;
            console.log("Thumbnail slider changed to index:", activeIndex);
            // Force update of active states
            updateThumbnailActiveStates(activeIndex);
          },
        },
      });

      // Initialize main slider
      mainSlider = new Swiper(mainSliderRef.value, {
        effect: "slide",
        speed: 600,
        loop: false,
        grabCursor: true,
        autoplay: props.autoplay
          ? {
              delay: props.autoplayDelay,
              disableOnInteraction: false,
            }
          : false,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          renderBullet: function (index, className) {
            return `<span class="${className}" role="tab" aria-label="Go to slide ${
              index + 1
            }"></span>`;
          },
        },
        thumbs: {
          swiper: thumbSlider,
        },
        on: {
          init: function () {
            console.log("Main slider initialized");
            this.update();
          },
          slideChange: function () {
            // Sync thumbnail slider when main slider changes
            const activeIndex = this.realIndex;
            currentSlideIndex.value = activeIndex;
            console.log("Main slider changed to index:", activeIndex);
            if (thumbSlider) {
              thumbSlider.slideToLoop
                ? thumbSlider.slideToLoop(activeIndex)
                : thumbSlider.slideTo(activeIndex);
            }
            // Force update of active states
            updateThumbnailActiveStates(activeIndex);
          },
        },
      });

      // Controller connection for synchronized navigation
      if (mainSlider && thumbSlider) {
        mainSlider.controller.control = thumbSlider;
        thumbSlider.controller.control = mainSlider;
        console.log("Sliders connected successfully");
      }
    };

    const destroySliders = () => {
      if (mainSlider) {
        mainSlider.destroy(true, true);
        mainSlider = null;
      }
      if (thumbSlider) {
        thumbSlider.destroy(true, true);
        thumbSlider = null;
      }
    };

    const nextSlide = () => {
      if (mainSlider && thumbSlider) {
        console.log("Moving to next slide");
        mainSlider.slideNext();
        // Force thumbnail slider to sync
        setTimeout(() => {
          if (mainSlider && thumbSlider) {
            const activeIndex = mainSlider.realIndex;
            thumbSlider.slideToLoop(activeIndex);
          }
        }, 50);
      } else {
        console.warn("Sliders not initialized");
      }
    };

    const prevSlide = () => {
      if (mainSlider && thumbSlider) {
        console.log("Moving to previous slide");
        mainSlider.slidePrev();
        // Force thumbnail slider to sync
        setTimeout(() => {
          if (mainSlider && thumbSlider) {
            const activeIndex = mainSlider.realIndex;
            thumbSlider.slideToLoop(activeIndex);
          }
        }, 50);
      } else {
        console.warn("Sliders not initialized");
      }
    };

    const handleKeyboardNavigation = (event) => {
      if (event.key === "ArrowLeft") {
        event.preventDefault();
        prevSlide();
      } else if (event.key === "ArrowRight") {
        event.preventDefault();
        nextSlide();
      }
    };

    const goToSlide = (index) => {
      console.log("goToSlide called with index:", index);
      console.log("mainSlider exists:", !!mainSlider);
      console.log("thumbSlider exists:", !!thumbSlider);
      console.log("current currentSlideIndex:", currentSlideIndex.value);

      const slides = getSlides();
      if (index >= 0 && index < slides.length) {
        // Update the current slide index immediately
        currentSlideIndex.value = index;

        // Force update thumbnail active states immediately
        updateThumbnailActiveStates(index);

        // Navigate sliders if they exist
        if (mainSlider) {
          if (mainSlider.slideToLoop) {
            mainSlider.slideToLoop(index);
          } else {
            mainSlider.slideTo(index);
          }
        }

        if (thumbSlider) {
          if (thumbSlider.slideToLoop) {
            thumbSlider.slideToLoop(index);
          } else {
            thumbSlider.slideTo(index);
          }
        }

        console.log("Successfully navigated to slide:", index);
        console.log("Updated currentSlideIndex to:", currentSlideIndex.value);
      } else {
        console.warn("Invalid index:", index);
      }
    };

    // Watch for slides data changes and initialize sliders when data is available
    watch(
      () => instance?.proxy?.slides,
      (newSlides) => {
        console.log("Setup watcher triggered, slides:", newSlides?.length || 0);
        if (newSlides && newSlides.length > 0 && !mainSlider && !thumbSlider) {
          console.log("Setup: Data loaded, initializing sliders...");
          nextTick(() => {
            initializeSliders();
            // Initialize first thumbnail as active
            setTimeout(() => {
              updateThumbnailActiveStates(0);
            }, 200);
          });
        }
      },
      { immediate: true }
    );

    onMounted(() => {
      // Add keyboard navigation support
      document.addEventListener("keydown", handleKeyboardNavigation);

      // Fallback initialization in case watch doesn't trigger
      setTimeout(() => {
        const slides = getSlides();
        if (slides.length > 0 && !mainSlider && !thumbSlider) {
          console.log("Fallback initialization...");
          initializeSliders();
          setTimeout(() => {
            updateThumbnailActiveStates(0);
          }, 200);
        }
      }, 2000); // Wait 2 seconds for data to load
    });

    onUnmounted(() => {
      destroySliders();
      // Remove keyboard event listener
      document.removeEventListener("keydown", handleKeyboardNavigation);
    });

    // Image error handling
    const handleImageError = (event) => {
      console.error("Image failed to load:", event.target.src);
      // Set a placeholder image or hide the broken image
      event.target.style.display = "none";
    };

    const handleImageLoad = (event) => {
      console.log("Image loaded successfully:", event.target.src);
      event.target.style.display = "block";
    };

    return {
      mainSliderRef,
      thumbSliderRef,
      nextButtonRef,
      prevButtonRef,
      currentSlideIndex,
      imageConfig,
      navigationLabels,
      formatDate,
      nextSlide,
      prevSlide,
      goToSlide,
      handleKeyboardNavigation,
      handleImageError,
      handleImageLoad,
      initializeSliders,
      destroySliders,
      // Expose slider instances for access from methods
      get mainSlider() {
        return mainSlider;
      },
      get thumbSlider() {
        return thumbSlider;
      },
      set mainSlider(value) {
        mainSlider = value;
      },
      set thumbSlider(value) {
        thumbSlider = value;
      },
    };
  },
};
</script>

<style scoped lang="scss">
@import url("https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  vertical-align: middle;
}

.property-slider-container {
  width: 100%;

  margin: 0 auto;
  padding: 0 20px;
  font-family: "Poppins", sans-serif;
}

/* Modern Property Slider */
.modern-property-slider {
  background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
  position: relative;
  min-height: 800px; /* Much bigger minimum height */
}

.slider-container {
  display: flex;
  height: 800px; /* Much bigger height for professional look */
  position: relative;
}

/* Left Content Panel */
.content-panel {
  flex: 0 0 45%; /* 25% width */
  padding: 80px 50px; /* Much bigger padding for professional look */
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  position: relative;
  z-index: 2;
  background: rgba(44, 62, 80, 0.95);
  backdrop-filter: blur(10px);
}

.project-header {
  color: white;
}

.main-title {
  font-size: 4rem; /* Much bigger for professional look */
  font-weight: 700;
  line-height: 1;
  margin: 0 0 40px 0; /* Increased margin */
  color: #ffffff;
  text-transform: uppercase;
  letter-spacing: -1px;
}

.project-info {
  margin-top: 30px;
}

.project-name {
  font-size: 2.4rem; /* Much larger project name */
  font-weight: 600;
  color: #ffffff;
  margin: 0 0 25px 0;
  line-height: 1.2;
}

.project-meta {
  display: flex;
  align-items: center;
  gap: 15px;
  flex-wrap: wrap;
}

.project-type,
.project-series,
.project-location {
  font-size: 1.4rem; /* Larger meta text */
  color: #bdc3c7;
  font-weight: 500;
}

.separator {
  color: #7f8c8d;
  font-size: 0.8rem;
}

/* Navigation Controls */
.slider-controls {
  display: flex;
  gap: 15px;
  margin-top: 40px;
}

.control-btn {
  width: 80px; /* Much bigger buttons */
  height: 80px; /* Much bigger buttons */
  border: 3px solid rgba(255, 255, 255, 0.3);
  background: rgba(255, 255, 255, 0.1);
  border-radius: 50%;
  color: white;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
  backdrop-filter: blur(10px);

  &:hover {
    background: rgba(255, 255, 255, 0.2);
    border-color: rgba(255, 255, 255, 0.6);
    transform: translateY(-3px);
  }

  i {
    font-size: 24px; /* Larger icons */
  }
}

/* Mobile Navigation Arrows - Hidden on desktop */
.mobile-slider-controls {
  display: none;
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  transform: translateY(-50%);
  justify-content: space-between;
  padding: 0 15px;
  pointer-events: none;
  z-index: 10;
}

.mobile-control-btn {
  width: 45px;
  height: 45px;
  border: 2px solid rgba(255, 255, 255, 0.9);
  background: rgba(0, 0, 0, 0.6);
  backdrop-filter: blur(8px);
  border-radius: 50%;
  color: white;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
  pointer-events: auto;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);

  &:active {
    transform: scale(0.9);
    background: rgba(0, 0, 0, 0.8);
  }

  i {
    font-size: 18px;
  }
}

/* Right Image Panel - Takes remaining 75% */
.image-panel {
  flex: 0 0 55%; /* Exactly 75% of total width */
  position: relative;
  overflow: hidden;
  display: flex;
  gap: 30px; /* Bigger gap for professional spacing */
  padding: 40px; /* Much bigger padding */
  height: 100%;
}

/* Main Large Image - Reduced width for better proportion */
.main-image-slider {
  flex: 0 0 55%; /* Reduced from 66.67% to 55% for smaller image */
  height: 100%;
  position: relative;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
  min-width: 0; /* Prevent flex shrinking issues */
  background: #f0f0f0; /* Fallback background */

  /* Ensure swiper wrapper takes full size */
  .swiper-wrapper {
    width: 100%;
    height: 100%;
  }

  .swiper-slide {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
  }
}

.image-container {
  width: 100%;
  height: 100%;
  position: relative;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #e0e0e0; /* Fallback background */
  cursor: pointer;
  text-decoration: none;

  &:hover .property-image {
    transform: scale(1.05);
  }

  &:hover .image-overlay {
    background: rgba(0, 0, 0, 0.3);
  }

  &:hover .view-details-overlay {
    opacity: 1;
    transform: translateY(0);
  }
}

.property-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  transition: transform 0.6s ease;
  display: block;
  max-width: 100%;
  max-height: 100%;

  &:hover {
    transform: scale(1.05);
  }
}

.image-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(
    45deg,
    rgba(44, 62, 80, 0.1) 0%,
    transparent 50%,
    rgba(52, 73, 94, 0.2) 100%
  );
  pointer-events: none;
  display: flex;
  align-items: center;
  justify-content: center;

  .view-details-overlay {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: white;
    background: rgba(0, 0, 0, 0.7);
    padding: 20px;
    border-radius: 10px;
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.3s ease;
    pointer-events: auto;

    i {
      font-size: 24px;
      margin-bottom: 8px;
    }

    span {
      font-size: 14px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1px;
    }
  }
}

/* Main Image Navigation Arrows - Mobile Only */
.main-image-navigation {
  display: none; /* Hidden on desktop by default */
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  pointer-events: none;
  z-index: 10;
}

.main-nav-btn {
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

.main-prev-btn {
  left: 20px;
}

.main-next-btn {
  right: 20px;
}

/* Vertical Thumbnail Navigation - Increased width to balance layout */
.thumbnail-navigation {
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  flex: 0 0 45%; /* Increased from 33.33% to 45% to complement smaller main image */
  padding: 40px 20px; /* Much bigger padding */
  z-index: 3;
  min-height: 100%;
}

.thumbnail-slider {
  width: 100%;
  height: 100%;

  .swiper-wrapper {
    flex-direction: column;
    height: auto;
  }

  .swiper-slide {
    height: auto !important;
    margin-bottom: 20px;
  }

  /* Custom scrollbar */
  &::-webkit-scrollbar {
    width: 3px;
  }

  &::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 2px;
  }

  &::-webkit-scrollbar-thumb {
    background: rgba(255, 255, 255, 0.3);
    border-radius: 2px;

    &:hover {
      background: rgba(255, 255, 255, 0.5);
    }
  }
}

.thumb-item {
  width: 180px; /* Restore original width for better proportions */
  height: 130px; /* Restore original height for better proportions */
  border-radius: 12px;
  overflow: hidden;
  cursor: pointer;
  border: 3px solid transparent;
  transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  opacity: 0.8; /* More visible when inactive */
  position: relative;
  flex-shrink: 0;
  margin-top: 15px !important;

  &::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(44, 62, 80, 0.4);
    transition: opacity 0.3s ease;
  }

  &:hover {
    border-color: rgba(255, 255, 255, 0.6);
    opacity: 0.8;
    transform: translateX(-3px) scale(1.02); /* Smaller hover effect */
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);

    &::after {
      opacity: 0.2;
    }
  }

  &.swiper-slide-active {
    border-color: #ffffff;
    opacity: 1;
    transform: translateX(-3px) scale(1.02); /* Reduced to prevent image cropping */
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    overflow: hidden; /* Prevent image overflow */

    &::after {
      opacity: 0;
    }

    .thumb-image {
      transform: none; /* Prevent additional image scaling */
      object-fit: cover; /* Ensure proper image fitting */
    }
  }
}

.thumb-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.3s ease;
}

/* Debug and Manual Active Styles */
.debug-active-indicator {
  position: absolute;
  top: 5px;
  left: 5px;
  background: red;
  color: white;
  padding: 2px 5px;
  font-size: 10px;
  z-index: 10;
  border-radius: 3px;
}

.thumb-item.manual-active {
  border-color: #ff0000 !important;
  opacity: 1 !important;
  transform: translateX(-3px) scale(1.02) !important; /* Reduced scale and movement to prevent cropping */
  box-shadow: 0 8px 20px rgba(255, 0, 0, 0.4) !important;
  margin-left: 10px !important;
  overflow: hidden !important; /* Ensure no image overflow */

  .thumb-image {
    transform: none !important; /* Prevent image scaling */
    object-fit: cover !important; /* Ensure proper image fitting */
  }
}

/* Responsive Design */
@media (max-width: 1200px) {
  .slider-container {
    height: 550px;
  }

  .content-panel {
    padding: 40px 35px;
  }

  .main-title {
    font-size: 2.8rem;
  }

  .project-name {
    font-size: 1.5rem;
  }
}

@media (max-width: 768px) {
  .hero-subtitle-section {
    margin-bottom: 0px !important;
  }
  .property-slider-container {
    padding: 0;
  }

  .modern-property-slider {
    min-height: auto;
    border-radius: 0;
  }

  .slider-container {
    flex-direction: column;
    height: auto;
  }

  .content-panel {
    flex: none;
    padding: 40px 30px;
    order: 2;
  }

  .image-panel {
    flex: none;
    height: auto;
    order: 1;
    flex-direction: column;
    gap: 0;
    padding: 0;
    position: relative;
  }

  .main-image-slider {
    flex: 1;
    min-height: 400px;
    position: relative;
    width: 100%;
    margin: 0;
    padding: 0;
    border-radius: 0;
    margin-bottom: -25px;

    .image-container {
      border-radius: 0;
      margin: 0;
      padding: 0;
    }

    .property-image {
      border-radius: 0;
    }
  }

  .thumbnail-navigation {
    width: 100%;
    padding: 0;
    display: none; /* Hide thumbnails on mobile */
  }

  .thumbnail-slider {
    flex-direction: row;
    width: 100%;
    height: auto;
    overflow-x: auto;
    overflow-y: hidden;
    padding-bottom: 5px;
    padding-right: 0;

    .swiper-wrapper {
      // flex-direction: row !important;
      display: none;
    }

    &::-webkit-scrollbar {
      height: 4px;
      width: auto;
    }
  }

  .thumb-item {
    width: 80px;
    height: 60px;
    flex-shrink: 0;

    &:hover,
    &.swiper-slide-active {
      transform: translateY(-2px) scale(1.02);
      overflow: hidden;
    }
  }

  .main-title {
    font-size: 2.2rem;
  }

  .project-name {
    font-size: 1.3rem;
  }

  /* Hide desktop controls on mobile */
  .slider-controls {
    display: none !important;
  }

  /* Show mobile navigation arrows */
  .mobile-slider-controls {
    display: flex !important;
  }

  /* Show main image navigation arrows on mobile */
  .main-image-navigation {
    display: block !important;
  }

  .main-nav-btn {
    width: 45px;
    height: 45px;

    i {
      font-size: 16px;
    }
  }

  .main-prev-btn {
    left: 15px;
  }

  .main-next-btn {
    right: 15px;
  }

  .mobile-control-btn {
    width: 45px;
    height: 45px;

    i {
      font-size: 18px;
    }
  }
}

@media (max-width: 480px) {
  .property-slider-container {
    padding: 0;
  }

  .modern-property-slider {
    border-radius: 0;
  }

  .content-panel {
    padding: 30px 20px;
  }

  .image-panel {
    padding: 0;
    gap: 0;
  }

  .main-image-slider {
    min-height: 300px;
    border-radius: 0;
  }

  .main-title {
    font-size: 1.8rem;
  }

  .project-name {
    font-size: 1.1rem;
  }

  .project-meta {
    font-size: 0.9rem;
  }

  /* Adjust mobile controls for smaller screens */
  .mobile-slider-controls {
    padding: 0 8px;
  }

  .mobile-control-btn {
    width: 38px;
    height: 38px;

    i {
      font-size: 15px;
    }
  }

  /* Smaller main navigation arrows for small mobile */
  .main-nav-btn {
    width: 40px;
    height: 40px;

    i {
      font-size: 14px;
    }
  }

  .main-prev-btn {
    left: 10px;
  }

  .main-next-btn {
    right: 10px;
  }

  .thumbnail-slider {
    gap: 8px;
  }

  .thumb-item {
    width: 60px;
    height: 45px;
  }
}

/* Hero Subtitle Section Styles */
.hero-subtitle-section {
  position: relative;
  z-index: 10;
  margin-bottom: 60px;
  padding: 20px 0;
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
  border: 1px solid rgba(239, 35, 60, 0.1);
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
  background: linear-gradient(45deg, #ef233c, #d90429);
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
  background: linear-gradient(90deg, #ef233c 0%, #d90429 100%);
  border-radius: 1px;
  position: relative;
}

.hero-subtitle-dot {
  width: 12px;
  height: 12px;
  background: linear-gradient(135deg, #ef233c 0%, #d90429 100%);
  border-radius: 50%;
  position: relative;
  box-shadow: 0 2px 8px rgba(239, 35, 60, 0.4);

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
  color: #ef233c;
  text-transform: uppercase;
  letter-spacing: 1.2px;
  margin: 0;
  font-family: "Poppins", sans-serif;
  line-height: 1.2;
}

.hero-subtitle-underline {
  width: 60px;
  height: 3px;
  background: linear-gradient(90deg, #ef233c 0%, #d90429 50%, #ef233c 100%);
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

@keyframes gradientShift {
  0%,
  100% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
}

.slider-wrapper {
  background: #2b2d42;
  position: relative;
}

.main-slider-wrap {
  height: 100%;
  width: 100%;

  .slide-item {
    display: flex;
    align-items: center;

    .image-wrap {
      width: 100%;
      height: 100%;
      display: flex;
      flex-direction: row-reverse;
      position: relative;
      overflow: hidden;

      &::before {
        position: absolute;
        content: "";
        height: 80px;
        width: 10px;
        background: linear-gradient(180deg, #ef233c 0%, #d90429 100%);
        left: 35%;
        bottom: 0;
        z-index: 5;
        box-shadow: 0 0 20px rgba(239, 35, 60, 0.6);
      }

      &::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(
          135deg,
          rgba(43, 45, 66, 0.7) 0%,
          transparent 50%,
          rgba(239, 35, 60, 0.1) 100%
        );
        z-index: 2;
        pointer-events: none;
      }
    }

    .slide-img {
      width: 100%;
      height: 194px;
      object-fit: cover;
      padding: 0;
      background: linear-gradient(135deg, #ef233c 0%, #d90429 100%);
      transition: transform 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);

      &:hover {
        transform: scale(1.05);
      }
    }

    .content-wrap {
      overflow: hidden;
      padding: 0 20px;
      position: absolute;
      left: 0;
      max-width: 618px;
      z-index: 10;
      animation: fadeInUp 0.8s ease-out;
    }

    .slide-meta-top {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 15px;
      font-size: 12px;
      text-transform: uppercase;
      letter-spacing: 1.5px;
      font-weight: 600;
      animation: slideInLeft 0.6s ease-out;

      .slide-category {
        color: #ef233c;
        background: rgba(239, 35, 60, 0.1);
        padding: 4px 12px;
        border-radius: 20px;
        transition: all 0.3s ease;

        &:hover {
          background: rgba(239, 35, 60, 0.2);
          transform: translateY(-2px);
        }
      }

      .slide-divider {
        color: #8d99ae;
      }

      .slide-date {
        color: #8d99ae;
      }
    }

    .slide-title {
      font-size: 20px;
      font-weight: 700;
      text-transform: capitalize;
      margin-bottom: 30px;
      line-height: 1.4;
      animation: slideInRight 0.8s ease-out;

      a {
        text-decoration: none;
        color: #edf2f4;
        transition: all 0.4s ease;
        display: inline;
        position: relative;

        .title-highlight {
          background: linear-gradient(
            120deg,
            rgba(239, 35, 60, 0.95) 0%,
            rgba(217, 4, 41, 0.95) 100%
          );
          background-repeat: no-repeat;
          background-size: 100% 40%;
          background-position: 0 85%;
          padding: 2px 8px;
          box-decoration-break: clone;
          -webkit-box-decoration-break: clone;
          line-height: 1.6;
          display: inline;
          transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
          position: relative;

          &::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: #fff;
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.4s ease;
          }
        }

        &:hover .title-highlight {
          background-size: 100% 100%;
          color: #fff;
          text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
          transform: translateY(-2px);

          &::after {
            transform: scaleX(1);
            transform-origin: left;
          }
        }

        &:active .title-highlight {
          transform: translateY(0);
        }
      }
    }

    .meta-box-wrap {
      display: flex;
      align-items: center;
      overflow: hidden;
      gap: 30px;

      @media (max-width: 767px) {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
      }
    }

    .author-info {
      display: flex;
      align-items: center;
      animation: fadeIn 1s ease-out 0.2s both;
    }

    .author-img {
      position: relative;
      display: block;

      img {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid rgba(239, 35, 60, 0.5);
        transition: all 0.3s ease;
      }

      .author-badge {
        position: absolute;
        bottom: -2px;
        right: -2px;
        width: 14px;
        height: 14px;
        background: linear-gradient(135deg, #ef233c, #d90429);
        border-radius: 50%;
        border: 2px solid #2b2d42;
        animation: pulse 2s ease-in-out infinite;
      }

      &:hover img {
        transform: scale(1.1);
        border-color: #ef233c;
        box-shadow: 0 4px 12px rgba(239, 35, 60, 0.4);
      }
    }

    .author-text {
      display: flex;
      flex-direction: column;
      font-size: 13px;
      color: #8d99ae;
      text-transform: uppercase;
      padding-left: 15px;
      gap: 4px;

      .author-name {
        text-decoration: none;
        transition: all 0.3s ease;
        color: #cacdce;
        font-weight: 600;
        letter-spacing: 0.5px;
        position: relative;
        display: inline-block;

        &::after {
          content: "";
          position: absolute;
          bottom: -2px;
          left: 0;
          width: 0;
          height: 2px;
          background: #ef233c;
          transition: width 0.3s ease;
        }

        &:hover {
          color: #ef233c;

          &::after {
            width: 100%;
          }
        }
      }

      .comments-count {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 11px;
        color: #8d99ae;

        i {
          color: #ef233c;
          font-size: 12px;
        }
      }
    }

    .button-wrap {
      display: none;

      .read-more-btn {
        text-decoration: none;
        background: linear-gradient(135deg, #ef233c 0%, #d90429 100%);
        border: 2px solid transparent;
        color: #fff;
        padding: 12px 24px;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        text-transform: uppercase;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 1px;
        border-radius: 50px;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(239, 35, 60, 0.3);

        &::before {
          content: "";
          position: absolute;
          top: 50%;
          left: 50%;
          width: 0;
          height: 0;
          border-radius: 50%;
          background: rgba(255, 255, 255, 0.2);
          transform: translate(-50%, -50%);
          transition: width 0.6s ease, height 0.6s ease;
        }

        .btn-text,
        .btn-icon {
          position: relative;
          z-index: 1;
        }

        .btn-icon {
          transition: transform 0.4s ease;
        }

        &:hover {
          transform: translateY(-3px);
          box-shadow: 0 8px 25px rgba(239, 35, 60, 0.5);
          background: linear-gradient(135deg, #d90429 0%, #b00320 100%);

          &::before {
            width: 300px;
            height: 300px;
          }

          .btn-icon {
            transform: translateX(5px);
          }
        }

        &:active {
          transform: translateY(-1px);
          box-shadow: 0 4px 15px rgba(239, 35, 60, 0.4);
        }
      }
    }
  }
}

.pagination-wrap {
  display: none;

  .swiper-pagination {
    bottom: unset;
    display: inline-grid;
    top: 50%;
    right: 3.5%;
    transform: translateY(-50%);
    gap: 8px;
  }

  .swiper-pagination-bullet {
    width: 10px;
    height: 40px;
    display: inline-block;
    border-radius: 5px;
    background: rgba(237, 242, 244, 0.3);
    margin: 0;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    cursor: pointer;

    &::before {
      content: "";
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 4px;
      height: 0;
      background: #fff;
      border-radius: 2px;
      transition: height 0.4s ease;
    }

    &:hover {
      background: rgba(239, 35, 60, 0.5);
      transform: scale(1.1);

      &::before {
        height: 20px;
      }
    }

    &.swiper-pagination-bullet-active {
      background: linear-gradient(180deg, #ef233c 0%, #d90429 100%);
      height: 50px;
      box-shadow: 0 0 20px rgba(239, 35, 60, 0.6);

      &::before {
        height: 30px;
      }
    }
  }
}

.thumbs-slide-wrap {
  width: 100%;
  margin: auto !important;

  .slide-item {
    position: relative;
    cursor: pointer;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    border-radius: 8px;
    overflow: hidden;

    .image-wrap {
      width: 100%;
      height: 100%;
      position: relative;
      overflow: hidden;

      &::before {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        background: linear-gradient(
          to bottom,
          rgba(0, 0, 0, 0.2) 0%,
          rgba(0, 0, 0, 0.7) 100%
        );
        content: "";
        transition: all 0.4s ease;
        z-index: 1;
      }

      &::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, #ef233c 0%, #d90429 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
        z-index: 2;
        mix-blend-mode: multiply;
      }
    }

    .thumb-img {
      height: 97px;
      width: 100%;
      object-fit: cover;
      opacity: 0.4;
      transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      transform: scale(1);
    }

    .content {
      position: absolute;
      bottom: 0;
      padding: 10px;
      z-index: 10;
      width: 100%;
      transform: translateY(0);
      transition: transform 0.4s ease;
    }

    .title {
      font-size: 14px;
      line-height: 22px;
      font-weight: 700;
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      line-clamp: 2;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      color: #fff;
      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
      transition: all 0.3s ease;

      a {
        text-decoration: none;
        color: inherit;
        transition: all 0.3s ease;
        position: relative;

        &:hover {
          color: #fff;
          text-shadow: 0 0 10px rgba(239, 35, 60, 0.8);
        }
      }
    }

    .category {
      text-decoration: none;
      color: #ef233c;
      position: relative;
      padding-right: 10px;
      transition: all 0.3s ease;
      font-weight: 600;
      background: rgba(255, 255, 255, 0.9);
      padding: 2px 8px;
      border-radius: 12px;
      font-size: 9px;
      display: inline-flex;
      align-items: center;
      gap: 4px;

      i {
        font-size: 8px;
      }

      &:hover {
        background: #fff;
        transform: translateY(-2px);
        box-shadow: 0 2px 8px rgba(239, 35, 60, 0.3);
      }
    }

    .date {
      padding-left: 8px;
      color: rgba(255, 255, 255, 0.9);
      font-size: 9px;
      display: inline-flex;
      align-items: center;
      gap: 4px;

      i {
        font-size: 8px;
      }
    }

    .category-date {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      gap: 8px;
      font-size: 9px;
      text-transform: uppercase;
      margin-bottom: 8px;
      font-weight: 700;
    }

    .thumb-overlay {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 5;
      opacity: 0;
      transition: all 0.4s ease;

      .play-icon {
        font-size: 48px;
        color: #fff;
        filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.5));
        animation: pulse 2s ease-in-out infinite;
      }
    }

    &.swiper-slide-thumb-active {
      .thumb-img {
        opacity: 1;
        transform: scale(1.05);
      }

      .image-wrap::before {
        background: linear-gradient(
          to bottom,
          rgba(239, 35, 60, 0.1) 0%,
          rgba(217, 4, 41, 0.4) 100%
        );
      }

      .image-wrap::after {
        opacity: 0.2;
      }

      .title {
        color: #fff;
        text-shadow: 0 2px 8px rgba(0, 0, 0, 0.8);
      }
    }

    &:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);

      .thumb-img {
        opacity: 1;
        transform: scale(1.1);
      }

      .image-wrap::before {
        background: linear-gradient(
          to bottom,
          rgba(0, 0, 0, 0.1) 0%,
          rgba(0, 0, 0, 0.5) 100%
        );
      }

      .image-wrap::after {
        opacity: 0.3;
      }

      .content {
        transform: translateY(-5px);
      }

      .thumb-overlay {
        opacity: 1;
      }

      .title {
        color: #fff;
      }
    }
  }
}

.swiper-container {
  margin-left: unset;
  margin-right: unset;
}

.thumb-slide-navi-wrap {
  display: flex;
  align-items: center;
  position: relative;
  background: #2b2d42;
  transition: all 0.3s ease;
}

.thumb-navi-wrap {
  display: none;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;

  .nav-button {
    writing-mode: vertical-rl;
    text-orientation: mixed;
    font-size: 14px;
    color: #edf2f4;
    text-transform: uppercase;
    font-weight: 700;
    position: absolute;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 5px;
    background: rgba(43, 45, 66, 0.8);
    border: none;
    font-family: inherit;
    z-index: 20;
    padding: 20px 8px;
    pointer-events: auto;
    height: 100%;
    top: 0;
    letter-spacing: 2px;

    i {
      writing-mode: horizontal-tb;
      font-size: 16px;
      transition: all 0.3s ease;
      margin: 5px 0;
    }

    span {
      writing-mode: vertical-rl;
      text-orientation: upright;
    }

    &:hover,
    &:focus {
      color: #fff;
      background: rgba(239, 35, 60, 0.9);
    }

    &:focus {
      outline: 2px solid #ef233c;
      outline-offset: -2px;
    }

    &:active {
      background: rgba(217, 4, 41, 0.95);
    }
  }

  .button-prev {
    left: 0;
    border-right: 2px solid rgba(239, 35, 60, 0.5);
  }

  .button-next {
    right: 0;
    border-left: 2px solid rgba(239, 35, 60, 0.5);
  }
}

// Responsive Design
@media (min-width: 768px) {
  .property-slider-container {
    padding: 0 30px;
  }

  .main-slider-wrap {
    .slide-item {
      .content-wrap {
        padding-left: 50px;
        padding-right: 0;
        max-width: 500px;
      }

      .slide-meta-top {
        font-size: 11px;
        margin-bottom: 18px;
      }

      .slide-title {
        font-size: 28px;
        margin-bottom: 35px;
      }

      .slide-img {
        width: 64.4%;
        height: 267px;
        padding: 0 70px 10px 0;
      }

      .image-wrap::before {
        height: 40px;
        content: "";
      }

      .author-text {
        font-size: 12px;
        padding-left: 12px;
      }

      .author-img img {
        width: 50px;
        height: 50px;
      }

      .button-wrap {
        display: flex;

        .read-more-btn {
          padding: 10px 20px;
          font-size: 12px;
        }
      }

      .meta-box-wrap {
        flex-direction: row;
        gap: 30px;
      }
    }

    .pagination-wrap {
      display: block;

      .swiper-pagination {
        right: 35px;
      }
    }
  }

  .thumbs-slide-wrap {
    width: 81%;

    .slide-item {
      .thumb-img {
        height: 112px;
      }

      .content {
        padding: 20px;
      }

      .category-date {
        font-size: 10px;
        margin-bottom: 10px;
      }

      .title {
        font-size: 14px;
      }
    }
  }

  .thumb-navi-wrap {
    display: block;

    .nav-button {
      font-size: 12px;
      padding: 15px 6px;
    }

    .button-next {
      right: 0;
    }

    .button-prev {
      left: 0;
    }
  }
}

@media (min-width: 1024px) {
  .main-slider-wrap {
    .slide-item {
      .slide-title {
        font-size: 42px;
        line-height: 58px;
        margin-bottom: 80px;
      }

      .content-wrap {
        padding-left: 100px;
        max-width: 668px;
      }

      .slide-meta-top {
        font-size: 13px;
        margin-bottom: 22px;

        .meta-badge {
          padding: 7px 16px;
        }
      }

      .slide-img {
        height: 507px;
        padding: 0 100px 10px 0;
      }

      .image-wrap::before {
        height: 70px;
      }

      .author-text {
        font-size: 14px;
        padding-left: 15px;
      }

      .author-img img {
        width: 60px;
        height: 60px;
      }

      .button-wrap {
        .read-more-btn {
          padding: 14px 28px;
          font-size: 14px;
        }
      }
    }

    .pagination-wrap {
      .swiper-pagination {
        right: 50px;
      }
    }
  }

  .thumbs-slide-wrap {
    width: 79%;

    .slide-item {
      .thumb-img {
        height: 226px;
      }

      .content {
        padding: 40px;
      }

      .category-date {
        font-size: 12px;
        margin-bottom: 20px;
      }

      .title {
        font-size: 18px;
      }
    }
  }

  .thumb-navi-wrap {
    .nav-button {
      font-size: 14px;
      padding: 20px 8px;
    }

    .button-next {
      right: 0;
    }

    .button-prev {
      left: 0;
    }
  }

  .thumbnail-slider-wrap {
    .thumbnail-card {
      height: 145px;

      .thumbnail-content {
        padding: 14px 18px;

        .card-date {
          font-size: 12px;
        }

        .card-title {
          font-size: 14px;
        }

        .card-play-icon {
          font-size: 32px;
        }
      }
    }
  }
}

@media (min-width: 1440px) {
  .thumbs-slide-wrap {
    width: 86%;
  }

  .thumbnail-slider-wrap {
    .thumbnail-card {
      height: 155px;

      .thumbnail-content {
        padding: 16px 20px;

        .card-date {
          font-size: 13px;
        }

        .card-title {
          font-size: 15px;
        }

        .card-play-icon {
          font-size: 36px;
        }
      }
    }
  }

  .main-slider-wrap {
    .slide-item {
      .slide-meta-top {
        font-size: 14px;

        .meta-badge {
          padding: 8px 18px;
        }
      }

      .author-img img {
        width: 65px;
        height: 65px;
      }

      .author-text {
        font-size: 15px;
      }

      .button-wrap {
        .read-more-btn {
          padding: 15px 30px;
          font-size: 15px;
        }
      }
    }
  }
}

// Loading states
.slide-item {
  .slide-img,
  .thumb-img {
    &[src=""],
    &:not([src]) {
      background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
      background-size: 200% 100%;
      animation: loading 1.5s infinite;
    }
  }
}

@keyframes loading {
  0% {
    background-position: 200% 0;
  }
  100% {
    background-position: -200% 0;
  }
}

// Professional animations
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

@keyframes slideInLeft {
  from {
    opacity: 0;
    transform: translateX(-50px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes slideInRight {
  from {
    opacity: 0;
    transform: translateX(50px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

@keyframes pulse {
  0%,
  100% {
    transform: scale(1);
    opacity: 1;
  }
  50% {
    transform: scale(1.1);
    opacity: 0.8;
  }
}

@keyframes shimmer {
  0% {
    background-position: -1000px 0;
  }
  100% {
    background-position: 1000px 0;
  }
}

// Focus indicators for accessibility
.slide-item:focus,
.read-more-btn:focus,
.author-name:focus,
.category:focus {
  outline: 2px solid #ef233c;
  outline-offset: 2px;
}

// High contrast mode support
@media (prefers-contrast: high) {
  .slide-title a {
    background: #000;
    color: #fff;

    &:hover {
      background: #333;
    }
  }

  .read-more-btn {
    border-color: #000;
    color: #000;

    &:hover {
      background: #000;
      color: #fff;
    }
  }
}

// Reduced motion support
@media (prefers-reduced-motion: reduce) {
  * {
    transition: none !important;
    animation: none !important;
  }
}

/* Loading and Empty States */
.loading-state,
.empty-state {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100%;
  min-height: 400px;
  color: #ffffff;
  text-align: center;
}

.loading-spinner {
  width: 50px;
  height: 50px;
  border: 4px solid rgba(255, 255, 255, 0.3);
  border-top: 4px solid #ffffff;
  border-radius: 50%;
  animation: spin 1s linear infinite;
  margin-bottom: 20px;
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

.loading-state p,
.empty-state p {
  font-size: 18px;
  margin: 0;
  opacity: 0.8;
}
</style>
