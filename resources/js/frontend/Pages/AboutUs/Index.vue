<template>
  <!-- Professional Hero/Breadcrumb Section -->
  <div
    class="professional-hero-section"
    data-bg-src="assets/frontend/img/common/2.jpeg"
    style="background-image: url('assets/frontend/img/common/2.jpeg')"
  >
    <div class="hero-background-overlay"></div>
    <div class="hero-pattern"></div>
    <div class="container">
      <div class="hero-content">
        <!-- Enhanced Breadcrumb Navigation -->

        <!-- Professional Hero Content -->
        <div class="hero-text-content mt-5">
          <h1 class="hero-title">
            About <span class="title-highlight">Our Company</span>
          </h1>
          <p class="hero-subtitle">
            Discover our journey, values, and commitment to excellence that
            drives us forward every day
          </p>
        </div>

        <!-- Trust Indicators -->
        <div class="trust-indicators">
          <div class="trust-item">
            <div class="trust-icon">
              <i class="fas fa-award"></i>
            </div>
            <div class="trust-text">
              <span class="trust-number">10+</span>
              <span class="trust-label">Years Experience</span>
            </div>
          </div>
          <div class="trust-item">
            <div class="trust-icon">
              <i class="fas fa-users"></i>
            </div>
            <div class="trust-text">
              <span class="trust-number">500+</span>
              <span class="trust-label">Satisfied Clients</span>
            </div>
          </div>
          <div class="trust-item">
            <div class="trust-icon">
              <i class="fas fa-star"></i>
            </div>
            <div class="trust-text">
              <span class="trust-number">99%</span>
              <span class="trust-label">Success Rate</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="scroll-indicator">
      <div class="scroll-mouse">
        <div class="scroll-wheel"></div>
      </div>
      <span class="scroll-text">Scroll Down</span>
    </div>
  </div>

  <!-- AboutUs Section - Raw Code for Customization -->
  <!-- Skeleton Loader -->
  <div
    class="about-1-wrapper space overflow-hidden position-relative"
    id="about-sec"
    v-if="showSkeleton"
  >
    <div class="shape-mockup" data-bottom="0" data-left="0">
      <div class="skeleton-shape skeleton-shimmer"></div>
    </div>
    <div
      class="shape-mockup bird jump d-none d-lg-block"
      data-bottom="11%"
      data-left="5%"
    >
      <div class="skeleton-shape skeleton-shimmer"></div>
    </div>
    <div class="container">
      <div class="row gy-40 gx-70 justify-content-center">
        <div class="col-xl-7">
          <div class="img-box1 about-1">
            <!-- Skeleton Logo Section -->
            <div class="about-logo-wrap-2">
              <div class="logo-icon-wrap">
                <div class="logo-icon skeleton-circle skeleton-shimmer"></div>
                <div class="skeleton-circle-text">
                  <div class="skeleton-circle-ring skeleton-shimmer"></div>
                </div>
              </div>
            </div>

            <!-- Skeleton Image Gallery -->
            <div class="skeleton-image-gallery">
              <div class="about-left">
                <div class="img-box large">
                  <div
                    class="skeleton-placeholder w-100 d-flex justify-content-center align-items-center"
                  >
                    <div
                      class="skeleton-image skeleton-image-large skeleton-shimmer"
                    ></div>
                  </div>
                </div>
                <div class="img-box small">
                  <div
                    class="skeleton-placeholder w-100 d-flex justify-content-center align-items-center"
                  >
                    <div
                      class="skeleton-image skeleton-image-small skeleton-shimmer"
                    ></div>
                  </div>
                </div>
              </div>

              <div class="about-middle">
                <div
                  class="skeleton-main-placeholder w-100 d-flex justify-content-center align-items-center"
                >
                  <div
                    class="skeleton-image skeleton-image-middle skeleton-shimmer"
                  ></div>
                </div>
              </div>

              <div class="about-right">
                <div class="img-box small">
                  <div
                    class="skeleton-placeholder w-100 d-flex justify-content-center align-items-center"
                  >
                    <div
                      class="skeleton-image skeleton-image-small skeleton-shimmer"
                    ></div>
                  </div>
                </div>
                <div class="img-box big">
                  <div
                    class="skeleton-placeholder w-100 d-flex justify-content-center align-items-center"
                  >
                    <div
                      class="skeleton-image skeleton-image-large skeleton-shimmer"
                    ></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-5">
          <!-- Skeleton Title Area -->
          <div class="title-area text-left mb-50">
            <div class="skeleton-subtitle">
              <div
                class="skeleton-line skeleton-line-xs skeleton-shimmer"
              ></div>
            </div>
            <div class="skeleton-title" style="margin-top: 16px">
              <div
                class="skeleton-line skeleton-line-xl skeleton-shimmer"
              ></div>
              <div
                class="skeleton-line skeleton-line-lg skeleton-shimmer"
                style="margin-top: 8px"
              ></div>
            </div>
            <div class="skeleton-description" style="margin-top: 20px">
              <div
                class="skeleton-line skeleton-line-md skeleton-shimmer"
              ></div>
              <div
                class="skeleton-line skeleton-line-md skeleton-shimmer"
                style="margin-top: 8px"
              ></div>
              <div
                class="skeleton-line skeleton-line-sm skeleton-shimmer"
                style="margin-top: 8px"
              ></div>
            </div>
          </div>

          <!-- Skeleton Feature Items -->
          <div class="row gy-4 gx-60 mb-4">
            <div class="col-lg-6 col-md-6" v-for="n in 4" :key="n">
              <div class="about-1-item">
                <div class="icon">
                  <div class="skeleton-icon skeleton-shimmer"></div>
                </div>
                <div class="content">
                  <div class="skeleton-feature-title">
                    <div
                      class="skeleton-line skeleton-line-sm skeleton-shimmer"
                    ></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Skeleton Button -->
          <div class="row">
            <div class="col-lg-12">
              <div class="about-bottom-wrap">
                <div class="skeleton-button skeleton-shimmer"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Actual Content -->
  <div
    class="about-1-wrapper space overflow-hidden position-relative"
    id="about-sec"
    v-if="showContent"
  >
    <div class="shape-mockup" data-bottom="0" data-left="0">
      <img src="/assets/frontend/img/icon/about-2-shape.png" alt="img" />
    </div>
    <div
      class="shape-mockup bird jump d-none d-lg-block"
      data-bottom="11%"
      data-left="5%"
    >
      <img src="/assets/frontend/img/icon/about-inner-shape.png" alt="img" />
    </div>
    <div class="container">
      <div class="row gy-40 gx-70 justify-content-center">
        <div class="col-xl-7 mx-0 px-0 d-none">
          <div class="img-box1 about-1 fadeinup wow justify-content-center">
            <div class="about-logo-wrap-2">
              <div class="logo-icon-wrap">
                <div class="logo-icon">
                  <img :src="'/' + about_us?.secondary_image" alt="img" />
                </div>
                <CircleText :text="about_us?.quotation" />
              </div>
            </div>
            <div class="about-main-image w-100">
              <div
                class="w-100 d-flex justify-content-center align-items-center position-relative"
              >
                <!-- Image skeleton loader - shows while image is loading -->
                <div
                  v-if="!isImageLoaded && about_us?.primary_image?.[0]"
                  class="image-skeleton-placeholder w-100 d-flex justify-content-center align-items-center"
                >
                  <div
                    class="skeleton-image skeleton-image-main skeleton-shimmer"
                  ></div>
                </div>
                <!-- Actual image - only show when loaded -->
                <img
                  v-if="about_us?.primary_image?.[0]"
                  v-show="isImageLoaded"
                  class="img-fluid rounded w-100 fade-in"
                  :src="about_us.primary_image[0]"
                  alt="About Us Main Image"
                  @load="handleImageLoad"
                  @error="handleImageError"
                  ref="aboutMainImage"
                />
                <!-- Fallback when no image -->
                <div
                  v-if="!about_us?.primary_image?.[0]"
                  class="no-image-placeholder w-100 d-flex justify-content-center align-items-center"
                >
                  <div
                    class="skeleton-image skeleton-image-main skeleton-shimmer"
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8">
          <!-- Professional Content Section -->
          <div class="professional-content-area">
            <!-- Section Badge -->
            <div
              class="content-badge fadeinup wow"
              data-wow-duration="1.5s"
              data-wow-delay="0.1s"
            >
              <i class="fas fa-building"></i>
              <span>About Our Company</span>
            </div>

            <!-- Enhanced Title -->
            <h2
              class="professional-title fadeinup wow"
              data-wow-duration="1.5s"
              data-wow-delay="0.3s"
            >
              {{ about_us?.title || "Excellence in Every Endeavor" }}
            </h2>

            <!-- Professional Description -->
            <div
              class="professional-description fadeinup wow"
              data-wow-duration="1.5s"
              data-wow-delay="0.5s"
            >
              <div
                v-if="about_us?.description"
                v-html="about_us.description"
                class="content-text"
              ></div>
              <div v-else class="content-text">
                <p>
                  We are dedicated to delivering exceptional results through
                  innovation, expertise, and unwavering commitment to quality.
                  Our team combines years of experience with cutting-edge
                  solutions to exceed expectations and drive success.
                </p>
                <p>
                  Built on a foundation of trust, integrity, and continuous
                  improvement, we strive to create lasting partnerships that
                  generate meaningful value for our clients and communities.
                </p>
              </div>
            </div>

            <!-- Key Highlights -->
            <!-- <div
              class="key-highlights fadeinup wow"
              data-wow-duration="1.5s"
              data-wow-delay="0.7s"
            >
              <div class="highlight-item">
                <div class="highlight-icon">
                  <i class="fas fa-check-circle"></i>
                </div>
                <div class="highlight-content">
                  <h4>Quality Assurance</h4>
                  <p>Rigorous standards ensure exceptional outcomes</p>
                </div>
              </div>
              <div class="highlight-item">
                <div class="highlight-icon">
                  <i class="fas fa-lightbulb"></i>
                </div>
                <div class="highlight-content">
                  <h4>Innovation Focus</h4>
                  <p>Cutting-edge solutions for modern challenges</p>
                </div>
              </div>
              <div class="highlight-item">
                <div class="highlight-icon">
                  <i class="fas fa-handshake"></i>
                </div>
                <div class="highlight-content">
                  <h4>Client Partnership</h4>
                  <p>Collaborative approach to achieve your goals</p>
                </div>
              </div>
            </div> -->
          </div>

          <!-- Enhanced Features Grid -->
          <div class="professional-features-grid">
            <div class="features-header">
              <h3 class="features-title">Our Core Strengths</h3>
              <p class="features-subtitle">
                The key advantages that set us apart
              </p>
            </div>

            <div class="features-container">
              <div
                class="professional-feature-card fadeinup wow"
                v-for="(item, index) in about_us?.features || defaultFeatures"
                :key="index"
                :data-wow-delay="`${0.2 * (index + 1)}s`"
              >
                <div class="feature-number">
                  {{ String(index + 1).padStart(2, "0") }}
                </div>
                <div class="feature-icon-wrapper">
                  <div class="feature-icon">
                    <i :class="item?.icon || 'fas fa-star'"></i>
                  </div>
                </div>
                <div class="feature-content">
                  <h4 class="feature-title">
                    {{ item?.title || `Feature ${index + 1}` }}
                  </h4>
                  <p class="feature-description">
                    {{
                      item?.description ||
                      "Professional excellence delivered through expertise and dedication to quality results."
                    }}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Fallback Content (if data loading fails) -->
  <div
    class="about-1-wrapper space overflow-hidden position-relative"
    id="about-fallback"
    v-if="!showSkeleton && !showContent"
  >
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8 text-center">
          <div class="title-area mb-50">
            <p class="sub-title"><span class="double-line"></span> About Us</p>
            <h2 class="sec-title">Welcome to Our Company</h2>
            <p class="sec-text">
              We are committed to providing exceptional service and quality in
              everything we do. Our team is dedicated to excellence and customer
              satisfaction.
            </p>
            <div class="about-bottom-wrap">
              <Link class="th-btn pill bg-black" href="/contact">
                Contact Us
              </Link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Add your custom sections here -->
  <!-- TeamSlider section -->
  <!-- TeamSlider section -->

  <TeamSlider />

  <!-- TeamSlider section -->
  <!-- TeamSlider section -->

  <!-- Service section -->
  <!-- Service section -->

  <Service />

  <!-- Service section -->
  <!-- Service section -->

  <!-- Debug Section (remove in production) -->
</template>

<script>
import { ref, computed } from "vue";
import { Link } from "@inertiajs/vue3";
import CircleText from "../Home/components/CircleText.vue";
import { store as about_us_store } from "../../GlobalComponent/AboutUs/Store/aboutStore.js";
import { mapActions, mapState } from "pinia";
import TeamSlider from "../../GlobalComponent/TeamSlider/TeamSlider.vue";
import Service from "../../GlobalComponent/Service/Service.vue";

export default {
  name: "AboutUsPage",
  components: {
    Link,
    CircleText,
    TeamSlider,
    Service,
  },

  setup() {
    const isLoading = ref(true);
    const isImageLoaded = ref(false);
    const imageLoadTimeout = ref(null);

    return {
      isLoading,
      isImageLoaded,
      imageLoadTimeout,
    };
  },

  created() {
    this.isLoading = true;
    this.isImageLoaded = false;
    console.log("AboutUs page created, fetching data...");
    this.fetch_about_us_data();
  },

  mounted() {
    console.log("AboutUs page mounted");
    // Check if images are already loaded when component mounts
    this.$nextTick(() => {
      this.checkImageLoadingState();
    });

    // Add fallback timeout to prevent infinite loading
    setTimeout(() => {
      if (this.isLoading) {
        console.log("Fallback: Force showing content after 5 seconds");
        this.isLoading = false;
      }
    }, 5000);
  },

  activated() {
    // Handle keep-alive component activation (when navigating back)
    console.log("AboutUs component activated");
    this.$nextTick(() => {
      // If we have data but image isn't marked as loaded, check again
      if (this.about_us?.primary_image?.[0] && !this.isImageLoaded) {
        this.checkImageLoadingState();
      }
    });
  },

  watch: {
    about_us: {
      handler(newData, oldData) {
        console.log("About us data changed:", { newData, oldData });
        if (newData && Object.keys(newData).length > 0) {
          console.log("About us data loaded successfully");
          // Reset image loading state when new data arrives
          this.isImageLoaded = false;
          // Add a small delay for smooth transition
          setTimeout(() => {
            this.isLoading = false;
            // Check if image is already cached and loaded
            this.$nextTick(() => {
              this.checkImageLoadingState();
            });
          }, 300);
        } else {
          console.log("About us data is empty or not available");
          this.isLoading = true;
          this.isImageLoaded = false;
        }
      },
      immediate: true,
      deep: true,
    },

    loading: {
      handler(newLoading) {
        console.log("Store loading state changed:", newLoading);
      },
      immediate: true,
    },
  },

  methods: {
    ...mapActions(about_us_store, ["fetch_about_us_data"]),

    handleImageLoad() {
      console.log("Image loaded successfully");
      // Add a small delay for smooth transition
      setTimeout(() => {
        this.isImageLoaded = true;
      }, 100);
    },

    handleImageError(event) {
      console.error("Failed to load about us image:", event);
      // Still show the image area even if there's an error
      setTimeout(() => {
        this.isImageLoaded = true;
      }, 100);
    },

    resetImageLoadingState() {
      console.log("Resetting image loading state");
      this.isImageLoaded = false;
    },

    checkImageLoadingState() {
      // Check if the main image exists and is complete (already loaded)
      const imgElement = this.$refs.aboutMainImage;
      if (imgElement) {
        if (imgElement.complete && imgElement.naturalHeight !== 0) {
          console.log("Image already loaded (cached)");
          this.isImageLoaded = true;
        } else {
          console.log("Image not yet loaded, waiting for load event");
          // For server environments, give it a bit more time
          setTimeout(() => {
            if (imgElement.complete && imgElement.naturalHeight !== 0) {
              this.isImageLoaded = true;
            }
          }, 500);
        }
      } else if (this.about_us?.primary_image?.[0]) {
        // If we have image data but no DOM element yet, wait a bit more
        setTimeout(() => {
          this.checkImageLoadingState();
        }, 200);
      }
    },

    // Handle component unmount/cleanup
    beforeUnmount() {
      // Clear any pending timeouts to prevent memory leaks
      if (this.imageLoadTimeout) {
        clearTimeout(this.imageLoadTimeout);
      }
    },
  },

  computed: {
    ...mapState(about_us_store, ["about_us", "loading"]),

    showSkeleton() {
      const shouldShowSkeleton =
        this.isLoading ||
        this.loading ||
        !this.about_us ||
        Object.keys(this.about_us || {}).length === 0;
      console.log("Show Skeleton:", shouldShowSkeleton, {
        isLoading: this.isLoading,
        loading: this.loading,
        hasAboutUs: !!this.about_us,
        aboutUsKeys: Object.keys(this.about_us || {}).length,
      });
      return shouldShowSkeleton;
    },

    showContent() {
      const shouldShowContent =
        !this.isLoading &&
        !this.loading &&
        this.about_us &&
        Object.keys(this.about_us || {}).length > 0;
      console.log("Show Content:", shouldShowContent);
      return shouldShowContent;
    },

    defaultFeatures() {
      return [
        {
          icon: "fas fa-shield-alt",
          title: "Security First",
          description:
            "Advanced security protocols to protect your data and ensure complete privacy and confidentiality.",
        },
        {
          icon: "fas fa-clock",
          title: "24/7 Support",
          description:
            "Round-the-clock customer support with dedicated professionals ready to assist you anytime.",
        },
        {
          icon: "fas fa-chart-line",
          title: "Growth Focused",
          description:
            "Strategic solutions designed to accelerate your business growth and maximize potential.",
        },
        {
          icon: "fas fa-cogs",
          title: "Custom Solutions",
          description:
            "Tailored approaches that perfectly align with your unique business requirements and objectives.",
        },
      ];
    },
  },
};
</script>

<style scoped>
/* ========================================
   PROFESSIONAL HERO SECTION
   ======================================== */

.professional-hero-section {
  position: relative;
  min-height: 70vh;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  display: flex;
  align-items: center;
  overflow: hidden;
}

.hero-background-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(
    135deg,
    rgb(5 15 36 / 80%) 0%,
    rgb(17 36 90 / 80%) 50%,
    rgba(134, 4, 4, 0.9) 100%
  );
  z-index: 1;
}

.hero-pattern {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-image: radial-gradient(
      circle at 25% 25%,
      rgba(255, 255, 255, 0.1) 1px,
      transparent 1px
    ),
    radial-gradient(
      circle at 75% 75%,
      rgba(255, 255, 255, 0.1) 1px,
      transparent 1px
    );
  background-size: 60px 60px;
  z-index: 2;
}

.hero-content {
  position: relative;
  z-index: 3;
  color: white;
  text-align: center;
}

/* Modern Breadcrumb */
.modern-breadcrumb {
  margin-bottom: 40px;
}

.breadcrumb-list {
  display: flex;
  justify-content: center;
  align-items: center;
  list-style: none;
  margin: 0;
  padding: 0;
  gap: 15px;
}

.breadcrumb-item {
  display: flex;
  align-items: center;
}

.breadcrumb-link {
  display: flex;
  align-items: center;
  gap: 8px;
  color: rgba(255, 255, 255, 0.8);
  text-decoration: none;
  padding: 8px 16px;
  border-radius: 25px;
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  transition: all 0.3s ease;
  font-weight: 500;
}

.breadcrumb-link:hover {
  color: white;
  background: rgba(255, 255, 255, 0.2);
  transform: translateY(-2px);
}

.breadcrumb-separator {
  color: rgba(255, 255, 255, 0.5);
  font-size: 0.8rem;
}

.breadcrumb-item.active span {
  color: white;
  font-weight: 600;
  padding: 8px 16px;
  background: rgba(255, 255, 255, 0.15);
  border-radius: 25px;
  backdrop-filter: blur(10px);
}

/* Hero Text Content */
.hero-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 10px 20px;
  background: rgba(255, 255, 255, 0.15);
  backdrop-filter: blur(10px);
  border-radius: 50px;
  font-size: 0.9rem;
  font-weight: 600;
  margin-bottom: 25px;
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.hero-title {
  font-size: 3.5rem;
  font-weight: 700;
  line-height: 1.2;
  margin-bottom: 25px;
}

.title-highlight {
  background: linear-gradient(45deg, #fbbf24, #f59e0b);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.hero-subtitle {
  font-size: 1.25rem;
  line-height: 1.6;
  color: rgba(255, 255, 255, 0.9);
  max-width: 600px;
  margin: 0 auto 50px;
}

/* Trust Indicators */
.trust-indicators {
  display: flex;
  justify-content: center;
  gap: 40px;
  flex-wrap: wrap;
}

.trust-item {
  display: flex;
  align-items: center;
  gap: 15px;
  padding: 20px 25px;
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  border-radius: 15px;
  border: 1px solid rgba(255, 255, 255, 0.2);
  transition: transform 0.3s ease;
}

.trust-item:hover {
  transform: translateY(-5px);
}

.trust-icon {
  width: 50px;
  height: 50px;
  background: rgba(255, 255, 255, 0.2);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.3rem;
}

.trust-text {
  display: flex;
  flex-direction: column;
  gap: 2px;
}

.trust-number {
  font-size: 1.5rem;
  font-weight: 700;
  color: #fbbf24;
}

.trust-label {
  font-size: 0.9rem;
  color: rgba(255, 255, 255, 0.8);
}

/* Scroll Indicator */
.scroll-indicator {
  position: absolute;
  bottom: 30px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 10px;
  color: rgba(255, 255, 255, 0.7);
}

.scroll-mouse {
  width: 24px;
  height: 40px;
  border: 2px solid rgba(255, 255, 255, 0.5);
  border-radius: 12px;
  position: relative;
}

.scroll-wheel {
  width: 4px;
  height: 8px;
  background: rgba(255, 255, 255, 0.7);
  border-radius: 2px;
  position: absolute;
  top: 6px;
  left: 50%;
  transform: translateX(-50%);
  animation: scroll-wheel 2s infinite;
}

@keyframes scroll-wheel {
  0%,
  20% {
    opacity: 1;
    transform: translateX(-50%) translateY(0);
  }
  80%,
  100% {
    opacity: 0;
    transform: translateX(-50%) translateY(16px);
  }
}

.scroll-text {
  font-size: 0.8rem;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* ========================================
   PROFESSIONAL CONTENT STYLES
   ======================================== */

.about-1-wrapper {
  padding: 100px 0;
  background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
}

.professional-content-area {
  margin-bottom: 60px;
}

.content-badge {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 12px 24px;
  background: linear-gradient(135deg, #b72e26, #1d4ed8);
  color: white;
  border-radius: 50px;
  font-weight: 600;
  font-size: 0.9rem;
  margin-bottom: 30px;
  box-shadow: 0 4px 20px rgba(37, 99, 235, 0.3);
}

.professional-title {
  font-size: 2.75rem;
  font-weight: 700;
  color: #1f2937;
  line-height: 1.3;
  margin-bottom: 30px;
}

.professional-description {
  margin-bottom: 40px;
}

.content-text {
  font-size: 1.1rem;
  line-height: 1.8;
  color: #4b5563;
}

.content-text p {
  margin-bottom: 20px;
}

/* Key Highlights */
.key-highlights {
  display: flex;
  flex-direction: column;
  gap: 20px;
  margin-bottom: 40px;
}

.highlight-item {
  display: flex;
  align-items: center;
  gap: 20px;
  padding: 25px;
  background: white;
  border-radius: 15px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
  border-left: 4px solid #2563eb;
  transition: all 0.3s ease;
}

.highlight-item:hover {
  transform: translateX(10px);
  box-shadow: 0 6px 30px rgba(0, 0, 0, 0.12);
}

.highlight-icon {
  width: 55px;
  height: 55px;
  background: linear-gradient(135deg, #2563eb, #1d4ed8);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 1.3rem;
  flex-shrink: 0;
}

.highlight-content h4 {
  font-size: 1.1rem;
  font-weight: 600;
  color: #1f2937;
  margin-bottom: 8px;
}

.highlight-content p {
  font-size: 0.95rem;
  color: #6b7280;
  margin: 0;
}

/* ========================================
   PROFESSIONAL FEATURES GRID
   ======================================== */

.professional-features-grid {
  margin-top: 60px;
}

.features-header {
  text-align: center;
  margin-bottom: 50px;
}

.features-title {
  font-size: 2.25rem;
  font-weight: 700;
  color: #1f2937;
  margin-bottom: 15px;
}

.features-subtitle {
  font-size: 1.1rem;
  color: #6b7280;
  max-width: 500px;
  margin: 0 auto;
}

.features-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 30px;
}

.professional-feature-card {
  position: relative;
  background: white;
  padding: 35px 25px;
  border-radius: 20px;
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
  transition: all 0.3s ease;
  border: 1px solid rgba(37, 99, 235, 0.1);
  overflow: hidden;
}

.professional-feature-card::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(135deg, #2563eb, #1d4ed8);
  transform: scaleX(0);
  transition: transform 0.3s ease;
}

.professional-feature-card:hover::before {
  transform: scaleX(1);
}

.professional-feature-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.feature-number {
  position: absolute;
  top: 20px;
  right: 25px;
  font-size: 2.5rem;
  font-weight: 800;
  color: rgba(37, 99, 235, 0.1);
  z-index: 1;
}

.feature-icon-wrapper {
  margin-bottom: 25px;
}

.feature-icon {
  width: 65px;
  height: 65px;
  background: linear-gradient(135deg, #2563eb, #1d4ed8);
  border-radius: 16px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.5rem;
  color: white;
  transition: transform 0.3s ease;
}

.professional-feature-card:hover .feature-icon {
  transform: scale(1.1);
}

.feature-title {
  font-size: 1.25rem;
  font-weight: 600;
  color: #1f2937;
  margin-bottom: 12px;
}

.feature-description {
  font-size: 0.95rem;
  line-height: 1.6;
  color: #6b7280;
  margin: 0;
}

/* ========================================
   SKELETON LOADER STYLES
   ======================================== */

.skeleton-line {
  border-radius: 8px;
  background: linear-gradient(90deg, #e2e8f0 25%, #f1f5f9 50%, #e2e8f0 75%);
  background-size: 200% 100%;
  position: relative;
  overflow: hidden;
}

.skeleton-line-xs {
  height: 16px;
  width: 120px;
}

.skeleton-line-sm {
  height: 18px;
  width: 160px;
}

.skeleton-line-md {
  height: 20px;
  width: 100%;
}

.skeleton-line-lg {
  height: 32px;
  width: 90%;
}

.skeleton-line-xl {
  height: 40px;
  width: 100%;
}

/* Skeleton images */
.skeleton-image {
  background: linear-gradient(90deg, #e2e8f0 25%, #f1f5f9 50%, #e2e8f0 75%);
  background-size: 200% 100%;
  border-radius: 12px;
  position: relative;
  overflow: hidden;
}

.skeleton-image-small {
  width: 100%;
  height: 120px;
  min-height: 120px;
}

.skeleton-image-large {
  width: 100%;
  height: 200px;
  min-height: 200px;
}

.skeleton-image-middle {
  width: 100%;
  height: 300px;
  min-height: 300px;
  border-radius: 20px;
}

.skeleton-shape {
  width: 80px;
  height: 80px;
  background: linear-gradient(90deg, #e2e8f0 25%, #f1f5f9 50%, #e2e8f0 75%);
  background-size: 200% 100%;
  border-radius: 50%;
  opacity: 0.3;
}

.skeleton-circle {
  width: 60px;
  height: 60px;
  background: linear-gradient(90deg, #e2e8f0 25%, #f1f5f9 50%, #e2e8f0 75%);
  background-size: 200% 100%;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.skeleton-icon {
  width: 50px;
  height: 50px;
  background: linear-gradient(90deg, #e2e8f0 25%, #f1f5f9 50%, #e2e8f0 75%);
  background-size: 200% 100%;
  border-radius: 12px;
}

.skeleton-button {
  height: 48px;
  width: 180px;
  border-radius: 25px;
  background: linear-gradient(90deg, #e2e8f0 25%, #f1f5f9 50%, #e2e8f0 75%);
  background-size: 200% 100%;
  position: relative;
  overflow: hidden;
}

.skeleton-shimmer {
  animation: shimmer 2s infinite linear;
}

@keyframes shimmer {
  0% {
    background-position: -200% 0;
  }
  100% {
    background-position: 200% 0;
  }
}

.skeleton-shimmer::before {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    90deg,
    transparent,
    rgba(255, 255, 255, 0.4),
    transparent
  );
  animation: shimmerWave 2s infinite;
}

@keyframes shimmerWave {
  0% {
    left: -100%;
  }
  100% {
    left: 100%;
  }
}

.about-main-image .w-100 {
  max-width: 100%;
  height: auto;
  min-height: 300px;
}

.about-main-image img {
  max-width: 100%;
  height: auto;
  object-fit: cover;
  border-radius: 15px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease, opacity 0.5s ease;
}

.about-main-image img:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.fade-in {
  animation: fadeInImage 0.6s ease-in-out;
}

@keyframes fadeInImage {
  from {
    opacity: 0;
    transform: scale(0.95);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}

.sec-text {
  text-align: justify;
}

.image-skeleton-placeholder,
.no-image-placeholder {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  min-height: 300px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.skeleton-image-main {
  width: 100%;
  height: 300px;
  min-height: 500px;
  border-radius: 15px;
  background: linear-gradient(90deg, #e2e8f0 25%, #f1f5f9 50%, #e2e8f0 75%);
  background-size: 200% 100%;
  position: relative;
  overflow: hidden;
}

/* ========================================
   RESPONSIVE DESIGN
   ======================================== */

@media (max-width: 1200px) {
  .hero-title {
    font-size: 3rem;
  }

  .professional-title {
    font-size: 2.5rem;
  }

  .trust-indicators {
    gap: 25px;
  }
}

@media (max-width: 992px) {
  .professional-hero-section {
    min-height: 60vh;
    padding: 80px 0;
  }

  .hero-title {
    font-size: 2.5rem;
  }

  .trust-indicators {
    flex-direction: column;
    align-items: center;
    gap: 20px;
  }

  .trust-item {
    width: 100%;
    max-width: 300px;
    justify-content: center;
  }

  .features-container {
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 25px;
  }

  .key-highlights {
    gap: 15px;
  }

  .highlight-item {
    padding: 20px;
  }

  .highlight-item:hover {
    transform: translateY(-5px);
  }
}

@media (max-width: 768px) {
  .professional-hero-section {
    min-height: 50vh;
    padding: 60px 0;
  }

  .hero-title {
    font-size: 2rem;
  }

  .hero-subtitle {
    font-size: 1rem;
  }

  .breadcrumb-list {
    flex-direction: column;
    gap: 10px;
  }

  .about-1-wrapper {
    padding: 60px 0;
  }

  .professional-title {
    font-size: 2rem;
  }

  .features-title {
    font-size: 1.75rem;
  }

  .features-container {
    grid-template-columns: 1fr;
    gap: 20px;
  }

  .professional-feature-card {
    padding: 25px 20px;
  }

  .highlight-item {
    flex-direction: column;
    text-align: center;
    gap: 15px;
  }

  .trust-indicators {
    margin-top: 30px;
  }
}

@media (max-width: 576px) {
  .hero-title {
    font-size: 1.75rem;
  }

  .hero-badge {
    padding: 8px 16px;
    font-size: 0.8rem;
  }

  .professional-title {
    font-size: 1.75rem;
  }

  .content-text {
    font-size: 1rem;
  }

  .trust-item {
    padding: 15px 20px;
  }

  .trust-text {
    text-align: center;
  }

  .professional-feature-card {
    padding: 20px 15px;
  }

  .feature-number {
    font-size: 2rem;
    top: 15px;
    right: 20px;
  }
}

/* Skeleton images */
.skeleton-image {
  background: linear-gradient(90deg, #e2e8f0 25%, #f1f5f9 50%, #e2e8f0 75%);
  background-size: 200% 100%;
  border-radius: 12px;
  position: relative;
  overflow: hidden;
}

.skeleton-image-small {
  width: 100%;
  height: 120px;
  min-height: 120px;
}

.skeleton-image-large {
  width: 100%;
  height: 200px;
  min-height: 200px;
}

.skeleton-image-middle {
  width: 100%;
  height: 300px;
  min-height: 300px;
  border-radius: 20px;
}

/* Skeleton shapes */
.skeleton-shape {
  width: 80px;
  height: 80px;
  background: linear-gradient(90deg, #e2e8f0 25%, #f1f5f9 50%, #e2e8f0 75%);
  background-size: 200% 100%;
  border-radius: 50%;
  opacity: 0.3;
}

/* Skeleton logo/circle elements */
.skeleton-circle {
  width: 60px;
  height: 60px;
  background: linear-gradient(90deg, #e2e8f0 25%, #f1f5f9 50%, #e2e8f0 75%);
  background-size: 200% 100%;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.skeleton-circle-ring {
  width: 120px;
  height: 120px;
  border: 3px solid #e2e8f0;
  border-radius: 50%;
  background: transparent;
  animation: rotate 3s linear infinite;
}

@keyframes rotate {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

/* Skeleton icon */
.skeleton-icon {
  width: 50px;
  height: 50px;
  background: linear-gradient(90deg, #e2e8f0 25%, #f1f5f9 50%, #e2e8f0 75%);
  background-size: 200% 100%;
  border-radius: 12px;
}

/* Skeleton button */
.skeleton-button {
  height: 48px;
  width: 180px;
  border-radius: 25px;
  background: linear-gradient(90deg, #e2e8f0 25%, #f1f5f9 50%, #e2e8f0 75%);
  background-size: 200% 100%;
  position: relative;
  overflow: hidden;
}

/* Shimmer animation */
.skeleton-shimmer {
  animation: shimmer 2s infinite linear;
}

@keyframes shimmer {
  0% {
    background-position: -200% 0;
  }
  100% {
    background-position: 200% 0;
  }
}

/* Enhanced shimmer effect with pseudo-element */
.skeleton-shimmer::before {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    90deg,
    transparent,
    rgba(255, 255, 255, 0.4),
    transparent
  );
  animation: shimmerWave 2s infinite;
}

@keyframes shimmerWave {
  0% {
    left: -100%;
  }
  100% {
    left: 100%;
  }
}

/* About Us Main Image Styling */
.about-main-image .w-100 {
  max-width: 100%;
  height: auto;
  min-height: 300px; /* Ensure consistent height during loading */
}

.about-main-image img {
  max-width: 100%;
  height: auto;
  object-fit: cover;
  border-radius: 15px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease, opacity 0.5s ease;
}

.about-main-image img:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

/* Image loading animations */
.fade-in {
  animation: fadeInImage 0.6s ease-in-out;
}

@keyframes fadeInImage {
  from {
    opacity: 0;
    transform: scale(0.95);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}

.sec-text {
  text-align: justify;
}

/* Image skeleton placeholder */
.image-skeleton-placeholder,
.no-image-placeholder {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  min-height: 300px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.skeleton-image-main {
  width: 100%;
  height: 300px;
  min-height: 500px;
  border-radius: 15px;
  background: linear-gradient(90deg, #e2e8f0 25%, #f1f5f9 50%, #e2e8f0 75%);
  background-size: 200% 100%;
  position: relative;
  overflow: hidden;
}

/* Enhanced image skeleton shimmer */
.skeleton-image-main.skeleton-shimmer {
  animation: shimmer 2s infinite linear;
}

.skeleton-image-main.skeleton-shimmer::before {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    90deg,
    transparent,
    rgba(255, 255, 255, 0.4),
    transparent
  );
  animation: shimmerWave 2s infinite;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  /* .breadcumb-title {
    font-size: 2rem;
  }

  .breadcumb-wrapper {
    padding: 60px 0;
  } */

  .about-main-image {
    margin-top: 20px;
    padding: 15px;
  }

  .about-main-image img {
    border-radius: 10px;
  }

  .about-main-image .w-100 {
    min-height: 200px;
  }

  .skeleton-image-main {
    height: 200px;
    min-height: 200px;
    border-radius: 10px;
  }

  .image-skeleton-placeholder,
  .no-image-placeholder {
    min-height: 200px;
  }
}

@media (max-width: 576px) {
  .about-main-image .w-100 {
    min-height: 180px;
  }

  .skeleton-image-main {
    height: 180px;
    min-height: 180px;
  }

  .image-skeleton-placeholder,
  .no-image-placeholder {
    min-height: 180px;
  }
}
</style>
