<template>
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
        <div class="col-xl-5">
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
        <div class="col-xl-7">
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
    ref="componentRef"
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
      <!-- Enhanced Hero Subtitle Section -->
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
            <h3 class="hero-sub-title-text">About Our Company</h3>
            <div class="hero-subtitle-underline"></div>
          </div>
        </div>
      </div>

      <div class="row gy-40 gx-70 justify-content-between">
        <div class="col-xl-6 px-lg-5 px-3">
          <!-- Modern Content Card -->
          <div class="modern-content-card">
            <div class="content-card-background">
              <div class="floating-elements">
                <div class="floating-circle circle-1"></div>
                <div class="floating-circle circle-2"></div>
                <div class="floating-circle circle-3"></div>
              </div>

              <div class="title-area text-left mb-50 pe-lg-5">
                <!-- Modern Title Section -->
                <div class="modern-title-wrapper">
                  <h2
                    class="sec-title modern-professional-title fadeInUp wow"
                    data-wow-duration="1.4s"
                    data-wow-delay="0.25s"
                  >
                    <span class="title-emphasis-modern">{{
                      about_us?.title
                    }}</span>
                    <div class="title-decoration"></div>
                  </h2>
                </div>

                <!-- Modern Description Section -->
                <div
                  class="sec-text-wrapper modern-description fadeInUp wow"
                  data-wow-duration="1.3s"
                  data-wow-delay="0.4s"
                >
                  <div class="description-container">
                    <div class="description-icon">
                      <i class="fas fa-quote-left"></i>
                    </div>
                    <div
                      class="sec-text modern-text"
                      v-html="about_us?.description?.slice(0, 150 * 6) + '...'"
                    ></div>
                    <div class="description-accent-line"></div>
                  </div>
                </div>

                <!-- Ultra-Modern CTA Section -->
                <div
                  class="modern-cta-section fadeInUp wow"
                  data-wow-duration="1.2s"
                  data-wow-delay="0.6s"
                >
                  <!-- Primary Action Button -->
                  <div class="primary-action-wrapper">
                    <Link
                      class="ultra-modern-btn primary-action-btn"
                      href="/about-us"
                    >
                      <div class="btn-background-effect"></div>
                      <div class="btn-content-wrapper">
                        <span class="btn-text-modern">Learn More</span>
                        <div class="btn-icon-modern">
                          <i class="fas fa-arrow-right"></i>
                          <div class="icon-background"></div>
                        </div>
                      </div>
                      <div class="btn-shine-effect"></div>
                    </Link>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-5 mx-0 px-0">
          <div
            class="professional-video-showcase fadeInRight wow"
            data-wow-duration="1.3s"
            data-wow-delay="0.3s"
          >
            <!-- Company Metrics Badge Header -->
            <div class="video-header-section">
              <div class="metrics-badge-container">
                <div class="premium-metrics-badge">
                  <div class="badge-indicator">
                    <div class="indicator-pulse"></div>
                  </div>
                  <span class="badge-text">COMPANY METRICS</span>
                </div>
              </div>
            </div>

            <!-- Executive Video Presentation -->
            <div class="executive-video-presentation">
              <!-- Professional Video Theater -->
              <div class="professional-video-theater">
                <!-- Theater Frame Elements -->
                <div class="theater-frame-system">
                  <div class="frame-corner frame-tl"></div>
                  <div class="frame-corner frame-tr"></div>
                  <div class="frame-corner frame-bl"></div>
                  <div class="frame-corner frame-br"></div>
                  <div class="frame-edge frame-top"></div>
                  <div class="frame-edge frame-right"></div>
                  <div class="frame-edge frame-bottom"></div>
                  <div class="frame-edge frame-left"></div>
                </div>

                <!-- Premium Loading State -->
                <div
                  v-if="!isImageLoaded && about_us?.primary_image"
                  class="executive-loading-theater"
                >
                  <div class="loading-theater-content">
                    <div class="professional-loading-animation">
                      <div class="loading-orb orb-center"></div>
                      <div class="loading-orb orb-ring-1"></div>
                      <div class="loading-orb orb-ring-2"></div>
                      <div class="loading-orb orb-ring-3"></div>
                    </div>
                    <div class="loading-progress-system">
                      <div class="progress-indicator">
                        <div class="progress-bar"></div>
                      </div>
                      <div class="loading-status-text">
                        Preparing Presentation...
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Executive Video Display -->
                <div
                  v-if="about_us?.primary_image"
                  v-show="isImageLoaded"
                  class="executive-video-display"
                >
                  <!-- Premium Video Canvas -->
                  <div class="video-canvas-container">
                    <div class="canvas-enhancement-layers">
                      <div class="enhancement-layer layer-ambient"></div>
                      <div class="enhancement-layer layer-depth"></div>
                      <div class="enhancement-layer layer-premium"></div>
                    </div>

                    <img
                      class="executive-video-image professional-fade-in"
                      :src="'/' + about_us.primary_image"
                      alt="Executive Company Presentation"
                      @load="handleImageLoad"
                      @error="handleImageError"
                      ref="aboutMainImage"
                    />

                    <!-- Professional Play Control System -->
                    <div
                      class="professional-play-system"
                      @click="handleVideoPlay"
                    >
                      <!-- Executive Play Button -->
                      <div class="executive-play-button">
                        <!-- Professional Button Core -->
                        <div class="play-button-professional">
                          <div class="button-surface-layers">
                            <div class="surface-layer layer-base"></div>
                            <div class="surface-layer layer-highlight"></div>
                            <div class="surface-layer layer-premium"></div>
                          </div>

                          <div class="play-icon-executive">
                            <svg
                              viewBox="0 0 24 24"
                              fill="currentColor"
                              class="play-svg"
                            >
                              <path d="M8 5v14l11-7z" />
                            </svg>
                          </div>

                          <div class="button-enhancement-system">
                            <div class="enhancement-ring ring-1"></div>
                            <div class="enhancement-ring ring-2"></div>
                            <div class="enhancement-ring ring-3"></div>
                          </div>
                        </div>

                        <!-- Professional Interaction Feedback -->
                        <div class="interaction-feedback-system">
                          <div class="feedback-ripple ripple-1"></div>
                          <div class="feedback-ripple ripple-2"></div>
                          <div class="feedback-ripple ripple-3"></div>
                        </div>
                      </div>

                      <!-- Play System Status -->
                      <div class="play-system-status mt-1">
                        <div class="status-indicator">
                          <div class="status-dot"></div>
                          <span class="status-text">Ready to Play</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Professional Video Information Panel -->
                  <div class="video-information-panel">
                    <div class="panel-content-wrapper">
                      <div class="video-title-section">
                        <div class="title-accent-line"></div>
                      </div>

                      <div class="video-meta-section">
                        <div class="meta-item">
                          <i class="fas fa-video"></i>
                          <span></span>
                        </div>
                        <div class="meta-item">
                          <i class="fas fa-clock"></i>
                          <span></span>
                        </div>
                        <div class="meta-item premium-badge">
                          <i class="fas fa-shield-alt"></i>
                          <span>Overview</span>
                        </div>
                      </div>
                    </div>

                    <div class="panel-gradient-overlay"></div>
                  </div>
                </div>

                <!-- Executive Fallback System -->
                <div
                  v-if="!about_us?.primary_image"
                  class="executive-fallback-system"
                >
                  <div class="fallback-presentation-card">
                    <div class="fallback-header">
                      <div class="fallback-icon-premium">
                        <i class="fas fa-presentation"></i>
                      </div>
                      <h3 class="fallback-title">Presentation Loading</h3>
                    </div>

                    <div class="fallback-content-area">
                      <p class="fallback-description">
                        Preparing our executive presentation for you...
                      </p>
                      <div class="fallback-animation">
                        <div class="animation-dots">
                          <span class="dot dot-1"></span>
                          <span class="dot dot-2"></span>
                          <span class="dot dot-3"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Professional Stats Section -->
              <div class="professional-stats-container mt-4">
                <div
                  class="stats-grid-wrapper d-flex justify-content-center gap-3"
                >
                  <!-- Experience Achievement Card -->
                  <div
                    class="professional-stat-card experience-card slideInUp wow"
                    data-wow-duration="1s"
                    data-wow-delay="0.5s"
                    @click="handleStatClick('experience')"
                  >
                    <div class="stat-card-inner">
                      <div class="card-background-gradient"></div>
                      <div class="card-border-system"></div>

                      <div class="stat-content-area">
                        <!-- Number Display -->
                        <div class="stat-number-section">
                          <span class="stat-number-primary">{{
                            about_us?.years_experience || "10+"
                          }}</span>
                          <div class="number-enhancement">
                            <div class="floating-particles">
                              <span class="particle p-1"></span>
                              <span class="particle p-2"></span>
                              <span class="particle p-3"></span>
                            </div>
                          </div>
                        </div>

                        <!-- Label Display -->
                        <div class="stat-label-area">
                          <div class="label-primary-text">YEARS</div>
                          <div class="label-secondary-text">Of Excellence</div>
                          <div class="label-accent-line"></div>
                        </div>
                      </div>

                      <!-- Hover Enhancement Layer -->
                      <div class="hover-enhancement-layer"></div>
                    </div>
                  </div>

                  <!-- Clients Achievement Card -->
                  <div
                    class="professional-stat-card clients-card slideInUp wow"
                    data-wow-duration="1s"
                    data-wow-delay="0.6s"
                  >
                    <div class="stat-card-inner">
                      <div class="card-background-gradient"></div>
                      <div class="card-border-system"></div>

                      <div class="stat-content-area">
                        <!-- Number Display -->
                        <div class="stat-number-section">
                          <span class="stat-number-primary">{{
                            about_us?.total_clients || "50+"
                          }}</span>
                          <div class="number-enhancement">
                            <div class="floating-particles">
                              <span class="particle p-1"></span>
                              <span class="particle p-2"></span>
                              <span class="particle p-3"></span>
                            </div>
                          </div>
                        </div>

                        <!-- Label Display -->
                        <div class="stat-label-area">
                          <div class="label-primary-text">Our</div>
                          <div class="label-secondary-text text-capitalize">
                            happy clients
                          </div>
                          <div class="label-accent-line"></div>
                        </div>
                      </div>

                      <!-- Hover Enhancement Layer -->
                      <div class="hover-enhancement-layer"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Video Modal Popup -->
  <Transition name="modal-fade">
    <div
      v-if="showVideoModal"
      class="video-modal-overlay"
      @click="closeVideoModal"
    >
      <div class="video-modal-container" @click.stop>
        <button class="video-modal-close" @click="closeVideoModal">
          <i class="fas fa-times"></i>
        </button>
        <div class="video-modal-content">
          <!-- Video Loading State -->
          <div v-if="isVideoLoading" class="video-loading-state">
            <div class="video-loading-wrapper">
              <div class="video-loading-spinner"></div>
              <p class="video-loading-text">Loading video...</p>
            </div>
          </div>

          <!-- Video Error State -->
          <div v-else-if="videoLoadError" class="video-error-state">
            <div class="video-error-wrapper">
              <i class="fas fa-exclamation-triangle video-error-icon"></i>
              <p class="video-error-text">Failed to load video</p>
              <button class="video-retry-btn" @click="handleVideoPlay">
                <i class="fas fa-redo"></i> Retry
              </button>
            </div>
          </div>

          <!-- Video Content -->
          <div v-else class="video-wrapper">
            <iframe
              :src="videoEmbedUrl"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
              class="video-iframe"
              @load="isVideoLoading = false"
              @error="handleVideoError"
            ></iframe>
          </div>
        </div>
      </div>
    </div>
  </Transition>
</template>

<script>
import { ref, computed } from "vue";
import CircleText from "../../Pages/Home/components/CircleText.vue";
import { store as about_us_store } from "./Store/aboutStore.js";
import { mapActions, mapState } from "pinia";

// Utility function for debouncing
function debounce(func, wait) {
  let timeout;
  return function executedFunction(...args) {
    const later = () => {
      clearTimeout(timeout);
      func(...args);
    };
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
  };
}

export default {
  components: {
    CircleText,
  },

  setup() {
    const isLoading = ref(true);
    const isImageLoaded = ref(false);
    const imageLoadTimeout = ref(null);
    const showVideoModal = ref(false);
    const isVideoLoading = ref(false);
    const videoLoadError = ref(false);
    const intersectionObserver = ref(null);
    const componentRef = ref(null);
    const retryCount = ref(0);
    const maxRetries = 3;

    return {
      isLoading,
      isImageLoaded,
      imageLoadTimeout,
      showVideoModal,
      isVideoLoading,
      videoLoadError,
      intersectionObserver,
      componentRef,
      retryCount,
      maxRetries,
    };
  },

  async created() {
    this.isLoading = true;
    this.isImageLoaded = false;
    await this.fetchDataWithRetry();
  },

  mounted() {
    // Initialize intersection observer for lazy loading
    this.initIntersectionObserver();

    // Check if images are already loaded when component mounts
    this.$nextTick(() => {
      this.checkImageLoadingState();
    });
  },

  activated() {
    // Handle keep-alive component activation (when navigating back)
    console.log("AboutUs component activated");
    this.$nextTick(() => {
      // If we have data but image isn't marked as loaded, check again
      if (this.about_us?.primary_image && !this.isImageLoaded) {
        this.checkImageLoadingState();
      }
    });
  },

  watch: {
    about_us: {
      handler(newData) {
        if (newData && Object.keys(newData).length > 0) {
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
          this.isLoading = true;
          this.isImageLoaded = false;
        }
      },
      immediate: true,
      deep: true,
    },
  },

  methods: {
    ...mapActions(about_us_store, ["fetch_about_us_data"]),

    handleVideoPlay() {
      console.log("Video play button clicked");
      this.isVideoLoading = true;
      this.videoLoadError = false;
      this.showVideoModal = true;
      // Prevent body scroll when modal is open
      document.body.style.overflow = "hidden";

      // Add keyboard escape listener
      document.addEventListener("keydown", this.handleEscapeKey);

      // Simulate video load time for better UX
      setTimeout(() => {
        this.isVideoLoading = false;
      }, 800);
    },

    closeVideoModal() {
      this.showVideoModal = false;
      this.isVideoLoading = false;
      this.videoLoadError = false;
      // Restore body scroll
      document.body.style.overflow = "";
      // Remove keyboard listener
      document.removeEventListener("keydown", this.handleEscapeKey);
    },

    handleEscapeKey(event) {
      if (event.key === "Escape" && this.showVideoModal) {
        this.closeVideoModal();
      }
    },

    handleVideoError() {
      this.isVideoLoading = false;
      this.videoLoadError = true;
      console.error("Failed to load video");
    },

    getYouTubeEmbedUrl(url) {
      if (!url) {
        // Default video if none provided - https://www.youtube.com/watch?v=BU_s5NhMLvc&t=9s
        return "https://www.youtube.com/embed/BU_s5NhMLvc?autoplay=1&start=9";
      }

      // Extract video ID from various YouTube URL formats
      let videoId = "";

      // Format: https://www.youtube.com/watch?v=VIDEO_ID
      if (url.includes("youtube.com/watch?v=")) {
        videoId = url.split("watch?v=")[1].split("&")[0];
      }
      // Format: https://youtu.be/VIDEO_ID
      else if (url.includes("youtu.be/")) {
        videoId = url.split("youtu.be/")[1].split("?")[0];
      }
      // Format: https://www.youtube.com/embed/VIDEO_ID
      else if (url.includes("youtube.com/embed/")) {
        videoId = url.split("embed/")[1].split("?")[0];
      }
      // If it's already just the video ID
      else if (url.length === 11 && !url.includes("/")) {
        videoId = url;
      }

      return videoId
        ? `https://www.youtube.com/embed/${videoId}?autoplay=1&start=9`
        : "https://www.youtube.com/embed/mJVuZiK9a6I?autoplay=1&start=9";
    },
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
      } else if (this.about_us?.primary_image) {
        // If we have image data but no DOM element yet, wait a bit more
        setTimeout(() => {
          this.checkImageLoadingState();
        }, 200);
      }
    },

    // Enhanced data fetching with retry logic
    async fetchDataWithRetry() {
      try {
        await this.fetch_about_us_data();
        this.retryCount = 0; // Reset retry count on success
      } catch (error) {
        console.error("Failed to fetch about us data:", error);
        if (this.retryCount < this.maxRetries) {
          this.retryCount++;
          console.log(
            `Retrying... Attempt ${this.retryCount}/${this.maxRetries}`
          );
          setTimeout(() => {
            this.fetchDataWithRetry();
          }, 1000 * this.retryCount); // Exponential backoff
        } else {
          console.error("Max retries reached. Failed to load data.");
          this.isLoading = false;
        }
      }
    },

    // Initialize intersection observer for performance optimization
    initIntersectionObserver() {
      if ("IntersectionObserver" in window) {
        this.intersectionObserver = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                // Component is visible, trigger any lazy loading logic
                this.onComponentVisible();
                this.intersectionObserver.unobserve(entry.target);
              }
            });
          },
          {
            threshold: 0.1,
            rootMargin: "50px",
          }
        );

        if (this.$refs.componentRef) {
          this.intersectionObserver.observe(this.$refs.componentRef);
        }
      }
    },

    onComponentVisible() {
      // Trigger any lazy loading logic when component becomes visible
      if (!this.isImageLoaded && this.about_us?.primary_image) {
        this.preloadImages();
      }
    },

    // Preload images for better performance
    preloadImages() {
      if (this.about_us?.primary_image) {
        const img = new Image();
        img.onload = () => {
          console.log("Image preloaded successfully");
        };
        img.onerror = (error) => {
          console.error("Failed to preload image:", error);
        };
        img.src = "/" + this.about_us.primary_image;
      }
    },

    // Debounced resize handler for performance
    handleResize: debounce(function () {
      // Handle any resize-specific logic
      this.checkImageLoadingState();
    }, 250),

    // Handle component unmount/cleanup
    beforeUnmount() {
      // Clear any pending timeouts to prevent memory leaks
      if (this.imageLoadTimeout) {
        clearTimeout(this.imageLoadTimeout);
      }

      // Clean up intersection observer
      if (this.intersectionObserver) {
        this.intersectionObserver.disconnect();
      }

      // Remove event listeners
      document.removeEventListener("keydown", this.handleEscapeKey);
      window.removeEventListener("resize", this.handleResize);

      // Restore body scroll if modal was open
      document.body.style.overflow = "";
    },
  },

  computed: {
    ...mapState(about_us_store, ["about_us", "loading"]),

    videoEmbedUrl() {
      // Use video_url from about_us data, or fallback to default
      const videoUrl = this.about_us?.video_url || "";
      return this.getYouTubeEmbedUrl(videoUrl);
    },

    showSkeleton() {
      return (
        this.isLoading ||
        this.loading ||
        !this.about_us ||
        Object.keys(this.about_us || {}).length === 0
      );
    },

    showContent() {
      return (
        !this.isLoading &&
        !this.loading &&
        this.about_us &&
        Object.keys(this.about_us || {}).length > 0
      );
    },
  },
};
</script>

<style scoped>
/* Professional AboutUs Skeleton Loader Styles */

/* Base skeleton elements */
.skeleton-line {
  border-radius: 8px;
  background: linear-gradient(90deg, #f0f4f8 25%, #ffffff 37%, #f0f4f8 63%);
  background-size: 400% 100%;
  position: relative;
  overflow: hidden;
  will-change: transform;
}

/* Skeleton line sizes */
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
  background: linear-gradient(90deg, #f0f4f8 25%, #ffffff 37%, #f0f4f8 63%);
  background-size: 400% 100%;
  border-radius: 12px;
  position: relative;
  overflow: hidden;
  will-change: transform;
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

/* Ensure skeleton containers are visible only when skeleton is active */
.skeleton-image-gallery {
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.skeleton-placeholder,
.skeleton-main-placeholder {
  position: relative;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 120px;
}

.skeleton-main-placeholder {
  min-height: 300px;
}

[v-if="showSkeleton"] .about-left .img-box,
[v-if="showSkeleton"] .about-right .img-box,
[v-if="showSkeleton"] .about-middle {
  position: relative;
  display: block;
}

[v-if="showSkeleton"] .about-left .img-box.large {
  min-height: 200px;
}

[v-if="showSkeleton"] .about-left .img-box.small,
[v-if="showSkeleton"] .about-right .img-box.small {
  min-height: 120px;
}

[v-if="showSkeleton"] .about-right .img-box.big {
  min-height: 200px;
}

/* Force skeleton visibility in image containers only during loading */
[v-if="showSkeleton"] .about-left .skeleton-image,
[v-if="showSkeleton"] .about-right .skeleton-image,
[v-if="showSkeleton"] .about-middle .skeleton-image {
  display: block;
  opacity: 1;
  visibility: visible;
}

/* Skeleton shapes */
.skeleton-shape {
  width: 80px;
  height: 80px;
  background: linear-gradient(90deg, #f0f4f8 25%, #ffffff 37%, #f0f4f8 63%);
  background-size: 400% 100%;
  border-radius: 50%;
  opacity: 0.4;
  will-change: transform;
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

/* Optimized shimmer animation */
.skeleton-shimmer {
  animation: shimmer 1.8s ease-in-out infinite;
  transform: translateZ(0);
  -webkit-transform: translateZ(0);
}

@keyframes shimmer {
  0% {
    background-position: -400% 0;
  }
  100% {
    background-position: 400% 0;
  }
}

/* High performance shimmer for GPU acceleration */
.skeleton-shimmer::after {
  content: "";
  position: absolute;
  top: 0;
  left: -150%;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    90deg,
    transparent,
    rgba(255, 255, 255, 0.6),
    transparent
  );
  animation: shimmerGlow 1.8s ease-in-out infinite;
  transform: translateZ(0);
}

@keyframes shimmerGlow {
  0% {
    left: -150%;
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    left: 150%;
    opacity: 0;
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

/* Skeleton section animations with staggered delays */
.skeleton-subtitle {
  animation: fadeInUp 0.6s ease-out;
  animation-delay: 0.1s;
  animation-fill-mode: both;
}

.skeleton-title {
  animation: fadeInUp 0.6s ease-out;
  animation-delay: 0.2s;
  animation-fill-mode: both;
}

.skeleton-description {
  animation: fadeInUp 0.6s ease-out;
  animation-delay: 0.3s;
  animation-fill-mode: both;
}

.about-1-item {
  animation: fadeInUp 0.6s ease-out;
  animation-fill-mode: both;
}

.about-1-item:nth-child(1) {
  animation-delay: 0.4s;
}

.about-1-item:nth-child(2) {
  animation-delay: 0.5s;
}

.about-1-item:nth-child(3) {
  animation-delay: 0.6s;
}

.about-1-item:nth-child(4) {
  animation-delay: 0.7s;
}

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

/* Skeleton image gallery animations */
.about-left {
  animation: slideInLeft 0.8s ease-out;
  animation-delay: 0.2s;
  animation-fill-mode: both;
}

.about-middle {
  animation: fadeIn 0.8s ease-out;
  animation-delay: 0.4s;
  animation-fill-mode: both;
}

.about-right {
  animation: slideInRight 0.8s ease-out;
  animation-delay: 0.6s;
  animation-fill-mode: both;
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

/* Professional Stats Cards Styles */
.professional-stats-container {
  width: 100%;
  padding: 20px 0;
}

.stats-grid-wrapper {
  display: flex;
  align-items: stretch;
  justify-content: center;
  gap: 20px;
  flex-wrap: wrap;
}

.professional-stat-card {
  flex: 1;
  min-width: 200px;
  max-width: 250px;
  height: 160px;
  position: relative;
  cursor: pointer;
  transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  transform-origin: center;
  will-change: transform, box-shadow;
}

.stat-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    135deg,
    rgba(255, 255, 255, 0.95) 0%,
    rgba(248, 250, 252, 0.9) 50%,
    rgba(241, 245, 249, 0.95) 100%
  );
  border-radius: 16px;
  padding: 24px 20px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08), 0 1px 3px rgba(0, 0, 0, 0.1);
  border: 1px solid rgba(255, 255, 255, 0.8);
  backdrop-filter: blur(10px);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.card-background-gradient {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(
    135deg,
    rgba(239, 68, 68, 0.05) 0%,
    rgba(220, 38, 127, 0.05) 100%
  );
  opacity: 0;
  transition: opacity 0.3s ease;
  border-radius: inherit;
}

.card-border-system {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  border-radius: inherit;
  padding: 1px;
  background: linear-gradient(
    135deg,
    rgba(239, 68, 68, 0.2) 0%,
    rgba(220, 38, 127, 0.2) 50%,
    rgba(239, 68, 68, 0.2) 100%
  );
  opacity: 0;
  transition: opacity 0.3s ease;
}

.card-border-system::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  border-radius: inherit;
  background: inherit;
  filter: blur(1px);
}

.stat-content-area {
  position: relative;
  z-index: 2;
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 12px;
}

.stat-number-section {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
}

.stat-number-primary {
  font-size: 2.2rem;
  font-weight: 700;
  background: linear-gradient(135deg, #ef4444 0%, #dc2626 50%, #b91c1c 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  line-height: 1;
  letter-spacing: -0.02em;
  transition: all 0.3s ease;
}

.number-enhancement {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  pointer-events: none;
}

.floating-particles {
  position: relative;
  width: 80px;
  height: 80px;
}

.floating-particles .particle {
  position: absolute;
  width: 6px;
  height: 6px;
  background: linear-gradient(135deg, #ef4444, #dc2626);
  border-radius: 50%;
  opacity: 0.7;
  animation: bubbleFloat 3s ease-in-out infinite;
  box-shadow: 0 2px 8px rgba(239, 68, 68, 0.3);
}

.floating-particles .particle.p-1 {
  top: 15%;
  right: 20%;
  width: 8px;
  height: 8px;
  animation-delay: 0s;
  background: linear-gradient(135deg, #ef4444, #f87171);
}

.floating-particles .particle.p-2 {
  bottom: 25%;
  left: 15%;
  width: 5px;
  height: 5px;
  animation-delay: 1s;
  background: linear-gradient(135deg, #dc2626, #ef4444);
}

.floating-particles .particle.p-3 {
  top: 50%;
  right: 10%;
  width: 7px;
  height: 7px;
  animation-delay: 2s;
  background: linear-gradient(135deg, #b91c1c, #dc2626);
}

@keyframes bubbleFloat {
  0%,
  100% {
    transform: translateY(0px) translateX(0px) scale(1);
    opacity: 0.7;
  }
  25% {
    transform: translateY(-6px) translateX(2px) scale(1.1);
    opacity: 0.9;
  }
  50% {
    transform: translateY(-12px) translateX(-1px) scale(1.2);
    opacity: 1;
  }
  75% {
    transform: translateY(-6px) translateX(-2px) scale(1.1);
    opacity: 0.9;
  }
}

.stat-label-area {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 4px;
}

.label-primary-text {
  font-size: 0.75rem;
  font-weight: 600;
  color: #64748b;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  line-height: 1;
}

.label-secondary-text {
  font-size: 0.9rem;
  font-weight: 500;
  color: #334155;
  line-height: 1.2;
  margin-bottom: 6px;
}

.label-accent-line {
  width: 30px;
  height: 2px;
  background: linear-gradient(90deg, #ef4444, #dc2626);
  border-radius: 1px;
  transition: width 0.3s ease;
}

.hover-enhancement-layer {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(
    135deg,
    rgba(255, 255, 255, 0.1) 0%,
    rgba(239, 68, 68, 0.05) 50%,
    rgba(220, 38, 127, 0.05) 100%
  );
  border-radius: inherit;
  opacity: 0;
  transition: opacity 0.3s ease;
  pointer-events: none;
}

/* Hover Effects */
.professional-stat-card:hover {
  transform: translateY(-8px) scale(1.02);
  box-shadow: 0 12px 40px rgba(239, 68, 68, 0.15), 0 4px 16px rgba(0, 0, 0, 0.1);
}

.professional-stat-card:hover .stat-card-inner {
  box-shadow: 0 8px 32px rgba(239, 68, 68, 0.2), 0 2px 8px rgba(0, 0, 0, 0.1);
}

.professional-stat-card:hover .card-background-gradient {
  opacity: 1;
}

.professional-stat-card:hover .card-border-system {
  opacity: 1;
}

.professional-stat-card:hover .hover-enhancement-layer {
  opacity: 1;
}

.professional-stat-card:hover .stat-number-primary {
  transform: scale(1.1);
  filter: drop-shadow(0 2px 8px rgba(239, 68, 68, 0.3));
}

.professional-stat-card:hover .label-accent-line {
  width: 50px;
}

.professional-stat-card:hover .floating-particles .particle {
  animation-duration: 2s;
  opacity: 1;
  transform: scale(1.3);
}

/* Active/Click Effect */
.professional-stat-card:active {
  transform: translateY(-4px) scale(0.98);
  transition-duration: 0.1s;
}

/* Responsive Design */
@media (max-width: 768px) {
  .stats-grid-wrapper {
    flex-direction: column;
    align-items: center;
    gap: 16px;
  }

  .professional-stat-card {
    max-width: 280px;
    min-width: 250px;
  }

  .stat-number-primary {
    font-size: 2rem;
  }
}

@media (max-width: 480px) {
  .professional-stat-card {
    max-width: 100%;
    min-width: 200px;
    height: 140px;
  }

  .stat-card-inner {
    padding: 20px 16px;
  }

  .stat-number-primary {
    font-size: 1.8rem;
  }

  .label-secondary-text {
    font-size: 0.85rem;
  }
}

/* Pulse effect for overall engagement */

@keyframes pulse {
  0%,
  100% {
    opacity: 1;
  }
  50% {
    opacity: 0.8;
  }
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .skeleton-image-middle {
    height: 200px;
  }

  .skeleton-image-large {
    height: 150px;
  }

  .skeleton-image-small {
    height: 100px;
  }

  .skeleton-line-xl {
    height: 32px;
  }

  .skeleton-line-lg {
    height: 28px;
  }

  .skeleton-button {
    width: 160px;
    height: 44px;
  }

  .skeleton-main-placeholder {
    min-height: 200px;
  }

  [v-if="showSkeleton"] .about-left .img-box.large,
  [v-if="showSkeleton"] .about-right .img-box.big {
    min-height: 150px;
  }

  [v-if="showSkeleton"] .about-left .img-box.small,
  [v-if="showSkeleton"] .about-right .img-box.small {
    min-height: 100px;
  }
}

@media (max-width: 576px) {
  .skeleton-circle-ring {
    width: 80px;
    height: 80px;
  }

  .skeleton-circle {
    width: 40px;
    height: 40px;
  }

  .skeleton-icon {
    width: 40px;
    height: 40px;
  }

  .skeleton-main-placeholder {
    min-height: 180px;
  }

  [v-if="showSkeleton"] .about-left .img-box.large,
  [v-if="showSkeleton"] .about-right .img-box.big {
    min-height: 120px;
  }

  [v-if="showSkeleton"] .about-left .img-box.small,
  [v-if="showSkeleton"] .about-right .img-box.small {
    min-height: 80px;
  }
}

/* Loading transition effect */
.about-1-wrapper {
  transition: opacity 0.3s ease-in-out;
}

/* Skeleton content spacing adjustments */
.skeleton-feature-title {
  margin-top: 8px;
}

.skeleton-circle-text {
  margin-left: 15px;
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

/* Video Play Button with Ripple Effect */
.video-play-button {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  cursor: pointer;
  z-index: 10;
  transition: transform 0.3s ease;
}

.video-play-button:hover {
  transform: translate(-50%, -50%) scale(1.1);
}

.play-icon {
  position: relative;
  width: 80px;
  height: 80px;
  background: linear-gradient(135deg, #e50914, #b20710);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 8px 25px rgba(229, 9, 20, 0.4);
  z-index: 3;
  transition: all 0.3s ease;
}

.play-icon:hover {
  box-shadow: 0 12px 35px rgba(229, 9, 20, 0.6);
  background: linear-gradient(135deg, #f40612, #e50914);
}

.play-icon i {
  color: white;
  font-size: 30px;
  margin-left: 5px;
  transition: transform 0.3s ease;
}

.video-play-button:hover .play-icon i {
  transform: scale(1.1);
}

/* Ripple Effect Animation */
.ripple-effect {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 80px;
  height: 80px;
  border: 3px solid #e50914;
  border-radius: 50%;
  opacity: 0;
  animation: ripple 2s cubic-bezier(0.65, 0, 0.34, 1) infinite;
}

.ripple-delay-1 {
  animation-delay: 0.5s;
}

.ripple-delay-2 {
  animation-delay: 1s;
}

@keyframes ripple {
  0% {
    width: 80px;
    height: 80px;
    opacity: 1;
  }
  50% {
    opacity: 0.6;
  }
  100% {
    width: 150px;
    height: 150px;
    opacity: 0;
    border-width: 2px;
  }
}

/* Pulse animation for play button */
@keyframes pulse-glow {
  0%,
  100% {
    box-shadow: 0 8px 25px rgba(229, 9, 20, 0.4);
  }
  50% {
    box-shadow: 0 8px 35px rgba(229, 9, 20, 0.7);
  }
}

.play-icon {
  animation: pulse-glow 2s ease-in-out infinite;
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

/* ============================================
   PROFESSIONAL VIDEO SHOWCASE STYLES
   ============================================ */

/* Professional Video Showcase Container */
.professional-video-showcase {
  position: relative;
  padding: 32px;
  background: linear-gradient(
    145deg,
    rgba(248, 249, 250, 0.95) 0%,
    rgba(255, 255, 255, 0.98) 35%,
    rgba(248, 249, 250, 0.95) 100%
  );
  backdrop-filter: blur(25px);
  border-radius: 28px;
  border: 2px solid rgba(229, 9, 20, 0.08);
  box-shadow: 0 32px 64px rgba(0, 0, 0, 0.12),
    inset 0 1px 0 rgba(255, 255, 255, 0.8), 0 0 0 1px rgba(229, 9, 20, 0.04);
  overflow: hidden;
  transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
}

.professional-video-showcase::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: radial-gradient(
      circle at 15% 25%,
      rgba(229, 9, 20, 0.03) 0%,
      transparent 35%
    ),
    radial-gradient(
      circle at 85% 75%,
      rgba(255, 69, 0, 0.02) 0%,
      transparent 40%
    );
  z-index: 1;
  pointer-events: none;
}

.professional-video-showcase:hover {
  transform: translateY(-4px);
  border-color: rgba(229, 9, 20, 0.15);
  box-shadow: 0 40px 80px rgba(0, 0, 0, 0.15),
    inset 0 1px 0 rgba(255, 255, 255, 0.9), 0 0 0 1px rgba(229, 9, 20, 0.08);
}

/* ============================================
   EXECUTIVE STATS DASHBOARD
   ============================================ */

/* Dashboard Structure */
.executive-stats-dashboard {
  position: relative;
  margin-bottom: 28px;
  z-index: 2;
}

.dashboard-header {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
  padding: 0 4px;
}

.dashboard-indicator {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 8px 16px;
  background: rgba(229, 9, 20, 0.05);
  border: 1px solid rgba(229, 9, 20, 0.1);
  border-radius: 20px;
  backdrop-filter: blur(10px);
}

.indicator-dot {
  width: 8px;
  height: 8px;
  background: #e50914;
  border-radius: 50%;
  position: relative;
}

.indicator-dot.active::after {
  content: "";
  position: absolute;
  top: -4px;
  left: -4px;
  right: -4px;
  bottom: -4px;
  background: rgba(229, 9, 20, 0.3);
  border-radius: 50%;
  animation: indicator-pulse 2s ease-in-out infinite;
}

@keyframes indicator-pulse {
  0%,
  100% {
    opacity: 0.6;
    transform: scale(1);
  }
  50% {
    opacity: 1;
    transform: scale(1.2);
  }
}

.indicator-text {
  font-size: 13px;
  font-weight: 600;
  color: #1a202c;
  letter-spacing: 0.3px;
}

/* Executive Metrics Grid */
.executive-metrics-grid {
  display: grid;
  grid-template-columns: 1fr auto auto;
  gap: 16px;
  align-items: start;
}

/* Primary Executive Metric Card */
.executive-metric-card.primary-metric {
  background: linear-gradient(
    135deg,
    rgba(229, 9, 20, 0.08) 0%,
    rgba(255, 255, 255, 0.95) 25%,
    rgba(248, 249, 250, 0.98) 75%,
    rgba(229, 9, 20, 0.06) 100%
  );
  backdrop-filter: blur(20px);
  border: 2px solid rgba(229, 9, 20, 0.12);
  border-radius: 20px;
  padding: 24px;
  position: relative;
  overflow: hidden;
  transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
}

.executive-metric-card.primary-metric:hover {
  transform: translateY(-6px) scale(1.02);
  border-color: rgba(229, 9, 20, 0.25);
  box-shadow: 0 25px 50px rgba(229, 9, 20, 0.15),
    inset 0 1px 0 rgba(255, 255, 255, 0.6);
}

.metric-content-wrapper {
  display: flex;
  flex-direction: column;
  gap: 16px;
  position: relative;
  z-index: 2;
}

/* Premium Icon Section */
.metric-icon-section {
  display: flex;
  justify-content: flex-start;
}

.premium-icon-container {
  position: relative;
  width: 56px;
  height: 56px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.icon-background-layers {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

.icon-layer {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  border-radius: 50%;
  transition: all 0.3s ease;
}

.icon-layer.layer-1 {
  background: linear-gradient(135deg, #e50914, #ff1744);
  box-shadow: 0 8px 25px rgba(229, 9, 20, 0.3);
}

.icon-layer.layer-2 {
  background: linear-gradient(
    135deg,
    rgba(255, 255, 255, 0.2),
    rgba(255, 255, 255, 0.1)
  );
  backdrop-filter: blur(10px);
}

.metric-icon {
  position: relative;
  z-index: 3;
  font-size: 24px;
  color: white;
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

.icon-orbital-ring {
  position: absolute;
  top: -6px;
  left: -6px;
  right: -6px;
  bottom: -6px;
  border: 2px solid rgba(229, 9, 20, 0.4);
  border-radius: 50%;
  animation: orbital-rotation 8s linear infinite;
}

@keyframes orbital-rotation {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

/* Executive Number Showcase */
.metric-number-showcase {
  position: relative;
  margin: 12px 0;
}

.executive-number {
  font-size: 42px;
  font-weight: 900;
  background: linear-gradient(
    135deg,
    #1a202c 0%,
    #e50914 25%,
    #ff4569 50%,
    #1a202c 75%,
    #e50914 100%
  );
  background-size: 300% 100%;
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: executive-highlight-flow 4s ease-in-out infinite;
  font-family: "Inter", -apple-system, BlinkMacSystemFont, sans-serif;
  line-height: 1;
  position: relative;
  z-index: 2;
}

@keyframes executive-highlight-flow {
  0%,
  100% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
}

.number-enhancement-effects {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

.number-glow-layer {
  position: absolute;
  top: -8px;
  left: -8px;
  right: -8px;
  bottom: -8px;
  background: linear-gradient(135deg, #e50914, #ff4569);
  opacity: 0.08;
  border-radius: 12px;
  filter: blur(20px);
  animation: executive-glow-pulse 3s ease-in-out infinite;
}

@keyframes executive-glow-pulse {
  0%,
  100% {
    opacity: 0.08;
    transform: scale(0.95);
  }
  50% {
    opacity: 0.15;
    transform: scale(1.05);
  }
}

.number-particle-system {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

.metric-particle {
  position: absolute;
  width: 3px;
  height: 3px;
  background: linear-gradient(45deg, #e50914, #ff4569);
  border-radius: 50%;
  animation: metric-particle-float 6s ease-in-out infinite;
}

.metric-particle.particle-1 {
  top: 15%;
  right: 20%;
  animation-delay: 0s;
}

.metric-particle.particle-2 {
  bottom: 20%;
  left: 25%;
  animation-delay: 2s;
}

.metric-particle.particle-3 {
  top: 70%;
  right: 10%;
  animation-delay: 4s;
}

@keyframes metric-particle-float {
  0%,
  100% {
    opacity: 0;
    transform: translateY(0) scale(0.5);
  }
  50% {
    opacity: 1;
    transform: translateY(-12px) scale(1);
  }
}

/* Professional Metric Labels */
.metric-label-section {
  position: relative;
}

.primary-label {
  font-size: 14px;
  font-weight: 500;
  color: #64748b;
  text-transform: uppercase;
  letter-spacing: 0.8px;
  margin-bottom: 2px;
}

.secondary-label {
  font-size: 16px;
  font-weight: 700;
  color: #1a202c;
  line-height: 1.2;
}

.metric-accent-line {
  width: 40px;
  height: 3px;
  background: linear-gradient(90deg, #e50914, #ff4569);
  border-radius: 2px;
  margin-top: 8px;
  position: relative;
  overflow: hidden;
}

.metric-accent-line::after {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    90deg,
    transparent,
    rgba(255, 255, 255, 0.6),
    transparent
  );
  animation: accent-line-shine 3s ease-in-out infinite;
}

@keyframes accent-line-shine {
  0% {
    left: -100%;
  }
  100% {
    left: 100%;
  }
}

/* Metric Card Effects */
.metric-card-effects {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  pointer-events: none;
}

.card-shimmer-overlay {
  position: absolute;
  top: 0;
  left: -100%;
  width: 50%;
  height: 100%;
  background: linear-gradient(
    90deg,
    transparent,
    rgba(255, 255, 255, 0.15),
    transparent
  );
  transform: skewX(-20deg);
  animation: card-shimmer-flow 4s ease-in-out infinite;
}

@keyframes card-shimmer-flow {
  0% {
    left: -100%;
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    left: 100%;
    opacity: 0;
  }
}

.card-border-glow {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  border: 2px solid transparent;
  border-radius: 20px;
  background: linear-gradient(
      135deg,
      rgba(229, 9, 20, 0.2),
      transparent,
      rgba(255, 69, 0, 0.2)
    )
    border-box;
  mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
  mask-composite: subtract;
  opacity: 0;
  animation: border-glow-pulse 3s ease-in-out infinite;
}

@keyframes border-glow-pulse {
  0%,
  100% {
    opacity: 0;
  }
  50% {
    opacity: 0.6;
  }
}

/* Secondary Metric Card */
.executive-metric-card.secondary-metric {
  background: rgba(255, 255, 255, 0.9);
  backdrop-filter: blur(15px);
  border: 1px solid rgba(229, 9, 20, 0.08);
  border-radius: 16px;
  padding: 16px;
  transition: all 0.4s ease;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
}

.executive-metric-card.secondary-metric:hover {
  transform: translateY(-4px);
  border-color: rgba(229, 9, 20, 0.2);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
}

.compact-metric-layout {
  display: flex;
  align-items: center;
  gap: 12px;
}

.compact-icon-wrapper {
  position: relative;
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 16px;
  color: #e50914;
  transition: all 0.3s ease;
}

.compact-icon-bg {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(229, 9, 20, 0.1);
  border-radius: 50%;
  transition: all 0.3s ease;
}

.executive-metric-card.secondary-metric:hover .compact-icon-bg {
  background: rgba(229, 9, 20, 0.15);
  transform: scale(1.1);
}

.icon-success-indicator {
  position: absolute;
  top: -2px;
  right: -2px;
  width: 12px;
  height: 12px;
  background: #10b981;
  border: 2px solid white;
  border-radius: 50%;
}

.compact-data-section {
  display: flex;
  flex-direction: column;
  gap: 2px;
}

.compact-number {
  font-size: 20px;
  font-weight: 800;
  background: linear-gradient(135deg, #e50914, #ff4569);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
  font-family: "Inter", -apple-system, BlinkMacSystemFont, sans-serif;
  line-height: 1;
}

.compact-label {
  font-size: 11px;
  color: #64748b;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.achievement-badge {
  display: flex;
  align-items: center;
  gap: 4px;
  margin-top: 4px;
}

.achievement-badge i {
  font-size: 8px;
  color: #10b981;
}

.achievement-badge span {
  font-size: 8px;
  color: #10b981;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.3px;
}

/* Professional Certification Badge */
.certification-badge-container {
  display: flex;
  align-items: center;
  justify-content: center;
}

.certification-seal {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 6px;
  padding: 12px;
  background: linear-gradient(
    135deg,
    rgba(16, 185, 129, 0.1),
    rgba(34, 197, 94, 0.05)
  );
  border: 1px solid rgba(16, 185, 129, 0.2);
  border-radius: 12px;
  backdrop-filter: blur(10px);
  transition: all 0.3s ease;
}

.certification-seal:hover {
  transform: scale(1.05);
  border-color: rgba(16, 185, 129, 0.3);
}

.seal-inner {
  width: 32px;
  height: 32px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #10b981, #22c55e);
  border-radius: 50%;
  font-size: 14px;
  color: white;
}

.certification-text {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 1px;
}

.cert-main {
  font-size: 10px;
  font-weight: 800;
  color: #10b981;
  line-height: 1;
}

.cert-sub {
  font-size: 8px;
  font-weight: 500;
  color: #64748b;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

/* ============================================
   PROFESSIONAL VIDEO TOP STATS SECTION
   ============================================ */

/* Video Header Section */
.video-header-section {
  position: relative;
  margin-bottom: 24px;
  text-align: center;
}

/* Video Bottom Stats Section */
.video-bottom-stats-section {
  position: relative;
  margin-top: 24px;
  padding: 24px;
  background: linear-gradient(
    145deg,
    rgba(248, 249, 250, 0.95) 0%,
    rgba(255, 255, 255, 0.98) 35%,
    rgba(248, 249, 250, 0.95) 100%
  );
  backdrop-filter: blur(25px);
  border-radius: 20px;
  border: 2px solid rgba(229, 9, 20, 0.08);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08),
    inset 0 1px 0 rgba(255, 255, 255, 0.8);
  transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
}

.video-bottom-stats-section:hover {
  transform: translateY(-2px);
  border-color: rgba(229, 9, 20, 0.12);
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.12),
    inset 0 1px 0 rgba(255, 255, 255, 0.9);
}

/* Professional Video Index Container */
.professional-video-index {
  position: relative;
}

/* Premium Metrics Badge */
.metrics-badge-container {
  display: flex;
  justify-content: flex-start;
  margin-bottom: 24px;
}

.premium-metrics-badge {
  display: inline-flex;
  align-items: center;
  gap: 12px;
  padding: 12px 24px;
  background: linear-gradient(
    135deg,
    rgba(229, 9, 20, 0.95) 0%,
    rgba(255, 23, 68, 0.9) 100%
  );
  backdrop-filter: blur(25px) saturate(150%);
  border: 2px solid rgba(255, 255, 255, 0.15);
  border-radius: 30px;
  box-shadow: 0 20px 40px rgba(229, 9, 20, 0.4), 0 8px 16px rgba(0, 0, 0, 0.3),
    inset 0 1px 0 rgba(255, 255, 255, 0.2);
  pointer-events: auto;
  transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
  transform: translateZ(0);
}

.premium-metrics-badge:hover {
  transform: translateY(-4px) scale(1.05);
  background: linear-gradient(
    135deg,
    rgba(229, 9, 20, 1) 0%,
    rgba(255, 23, 68, 0.95) 100%
  );
  box-shadow: 0 25px 50px rgba(229, 9, 20, 0.5), 0 12px 20px rgba(0, 0, 0, 0.4),
    inset 0 1px 0 rgba(255, 255, 255, 0.3);
}

.badge-indicator {
  position: relative;
  width: 12px;
  height: 12px;
}

.indicator-pulse {
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.9);
  border-radius: 50%;
  position: relative;
  box-shadow: 0 0 8px rgba(255, 255, 255, 0.6);
}

.indicator-pulse::before {
  content: "";
  position: absolute;
  top: -6px;
  left: -6px;
  right: -6px;
  bottom: -6px;
  background: transparent;
  border: 2px solid rgba(255, 255, 255, 0.4);
  border-radius: 50%;
  animation: pulse-ring 2s cubic-bezier(0.455, 0.03, 0.515, 0.955) infinite;
}

.indicator-pulse::after {
  content: "";
  position: absolute;
  top: -12px;
  left: -12px;
  right: -12px;
  bottom: -12px;
  background: transparent;
  border: 1px solid rgba(255, 255, 255, 0.2);
  border-radius: 50%;
  animation: pulse-ring 2s cubic-bezier(0.455, 0.03, 0.515, 0.955) infinite;
  animation-delay: 0.5s;
}

@keyframes pulse-ring {
  0% {
    transform: scale(0.8);
    opacity: 1;
  }
  80% {
    transform: scale(1.2);
    opacity: 0;
  }
  100% {
    transform: scale(1.2);
    opacity: 0;
  }
}

.badge-text {
  font-size: 11px;
  font-weight: 700;
  color: white;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
  font-family: "Inter", -apple-system, BlinkMacSystemFont, sans-serif;
}

/* Premium Stats Layout */
.premium-stats-layout {
  display: flex;
  gap: 20px;
  align-items: flex-start;
  margin-top: 20px;
}

/* Premium Stat Cards Base */
.premium-stat-card {
  position: relative;
  pointer-events: auto;
  transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
}

/* Experience Card */
.premium-stat-card.experience-card {
  flex: 1;
  max-width: 280px;
}

.card-glass-effect {
  position: relative;
  background: linear-gradient(
    145deg,
    rgba(255, 255, 255, 0.95) 0%,
    rgba(255, 255, 255, 0.85) 50%,
    rgba(248, 250, 252, 0.9) 100%
  );
  backdrop-filter: blur(30px) saturate(200%);
  border: 2px solid rgba(255, 255, 255, 0.3);
  border-radius: 24px;
  padding: 28px 24px;
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15), 0 15px 35px rgba(0, 0, 0, 0.1),
    inset 0 2px 0 rgba(255, 255, 255, 0.8), inset 0 -1px 0 rgba(0, 0, 0, 0.05);
  overflow: hidden;
  transform: translateZ(0);
}

.premium-stat-card.experience-card:hover {
  transform: translateY(-8px) rotateY(5deg) scale(1.02);
}

.premium-stat-card.experience-card:hover .card-glass-effect {
  border-color: rgba(229, 9, 20, 0.4);
  box-shadow: 0 35px 70px rgba(229, 9, 20, 0.25),
    0 20px 40px rgba(0, 0, 0, 0.15), inset 0 2px 0 rgba(255, 255, 255, 0.9),
    inset 0 -1px 0 rgba(229, 9, 20, 0.1);
}

.card-border-glow {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(
    145deg,
    rgba(229, 9, 20, 0.1),
    rgba(255, 69, 105, 0.05)
  );
  border-radius: 24px;
  opacity: 0;
  transition: opacity 0.4s ease;
  pointer-events: none;
}

.premium-stat-card.experience-card:hover .card-border-glow {
  opacity: 1;
}

.card-content-wrapper {
  position: relative;
  z-index: 2;
}

/* Premium Number Display */
.stat-number-display {
  position: relative;
  margin-bottom: 16px;
}

.premium-number {
  font-size: 48px;
  font-weight: 900;
  background: linear-gradient(
    135deg,
    #1a202c 0%,
    #e50914 25%,
    #ff1744 50%,
    #e50914 75%,
    #1a202c 100%
  );
  background-size: 300% 100%;
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: premium-gradient-flow 3s ease-in-out infinite;
  font-family: "Inter", -apple-system, BlinkMacSystemFont, sans-serif;
  line-height: 1;
  display: block;
  text-shadow: 0 4px 8px rgba(229, 9, 20, 0.3);
}

@keyframes premium-gradient-flow {
  0%,
  100% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
}

/* Number Enhancement Effects */
.number-enhancement {
  position: absolute;
  top: -10px;
  left: -10px;
  right: -10px;
  bottom: -10px;
  pointer-events: none;
}

.floating-particles {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

.floating-particles .particle {
  position: absolute;
  width: 4px;
  height: 4px;
  background: linear-gradient(45deg, #e50914, #ff4569);
  border-radius: 50%;
  animation: premium-particle-float 4s ease-in-out infinite;
  box-shadow: 0 0 6px rgba(229, 9, 20, 0.6);
}

.floating-particles .particle.p-1 {
  top: 20%;
  right: 15%;
  animation-delay: 0s;
}

.floating-particles .particle.p-2 {
  bottom: 30%;
  left: 20%;
  animation-delay: 1.5s;
}

.floating-particles .particle.p-3 {
  top: 60%;
  right: 25%;
  animation-delay: 3s;
}

@keyframes premium-particle-float {
  0%,
  100% {
    opacity: 0;
    transform: translateY(0) scale(0.5);
  }
  50% {
    opacity: 1;
    transform: translateY(-15px) scale(1.2);
  }
}

/* Premium Label Section */
.stat-label-section {
  position: relative;
}

.label-primary {
  font-size: 11px;
  font-weight: 600;
  color: #64748b;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-bottom: 4px;
  font-family: "Inter", -apple-system, BlinkMacSystemFont, sans-serif;
}

.label-secondary {
  font-size: 16px;
  font-weight: 700;
  color: #1a202c;
  line-height: 1.3;
  margin-bottom: 12px;
  font-family: "Inter", -apple-system, BlinkMacSystemFont, sans-serif;
}

.premium-accent-bar {
  width: 50px;
  height: 4px;
  background: linear-gradient(90deg, #e50914, #ff4569, #e50914);
  background-size: 200% 100%;
  border-radius: 2px;
  position: relative;
  overflow: hidden;
  animation: accent-bar-flow 3s ease-in-out infinite;
}

@keyframes accent-bar-flow {
  0%,
  100% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
}

.premium-accent-bar::after {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    90deg,
    transparent,
    rgba(255, 255, 255, 0.8),
    transparent
  );
  animation: accent-shine 2s ease-in-out infinite;
}

@keyframes accent-shine {
  0% {
    left: -100%;
  }
  100% {
    left: 100%;
  }
}

/* Clients Card */
.premium-stat-card.clients-card {
  align-self: flex-start;
  margin-top: 12px;
}

.compact-card-wrapper {
  position: relative;
  background: linear-gradient(
    135deg,
    rgba(255, 255, 255, 0.9) 0%,
    rgba(248, 250, 252, 0.95) 100%
  );
  backdrop-filter: blur(25px) saturate(180%);
  border: 2px solid rgba(255, 255, 255, 0.4);
  border-radius: 20px;
  padding: 20px 24px;
  text-align: center;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1), 0 5px 15px rgba(0, 0, 0, 0.08),
    inset 0 1px 0 rgba(255, 255, 255, 0.7);
  transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
  min-width: 120px;
  overflow: hidden;
}

.premium-stat-card.clients-card:hover .compact-card-wrapper {
  transform: translateY(-6px) scale(1.05);
  border-color: rgba(229, 9, 20, 0.3);
  box-shadow: 0 20px 40px rgba(229, 9, 20, 0.15), 0 8px 20px rgba(0, 0, 0, 0.12),
    inset 0 1px 0 rgba(255, 255, 255, 0.8);
}

.compact-number {
  font-size: 28px;
  font-weight: 900;
  background: linear-gradient(135deg, #e50914, #ff4569);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
  font-family: "Inter", -apple-system, BlinkMacSystemFont, sans-serif;
  line-height: 1;
  margin-bottom: 8px;
  display: block;
}

.compact-label {
  font-size: 11px;
  font-weight: 600;
  color: #64748b;
  text-transform: uppercase;
  letter-spacing: 0.8px;
  margin-bottom: 8px;
  font-family: "Inter", -apple-system, BlinkMacSystemFont, sans-serif;
}

.success-indicator {
  position: absolute;
  top: -6px;
  right: -6px;
  width: 24px;
  height: 24px;
  background: linear-gradient(135deg, #10b981, #34d399);
  border: 3px solid rgba(255, 255, 255, 0.9);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 10px;
  color: white;
  box-shadow: 0 4px 12px rgba(16, 185, 129, 0.4);
  animation: success-pulse 2s ease-in-out infinite;
}

@keyframes success-pulse {
  0%,
  100% {
    transform: scale(1);
    box-shadow: 0 4px 12px rgba(16, 185, 129, 0.4);
  }
  50% {
    transform: scale(1.1);
    box-shadow: 0 6px 20px rgba(16, 185, 129, 0.6);
  }
}

/* Video Stats Sections Responsive Design */
@media (max-width: 1024px) {
  .video-header-section {
    margin-bottom: 20px;
  }

  .video-bottom-stats-section {
    padding: 20px;
    margin-top: 20px;
  }

  .premium-stats-layout {
    gap: 16px;
  }

  .premium-number {
    font-size: 40px;
  }

  .compact-number {
    font-size: 24px;
  }
}

@media (max-width: 768px) {
  .video-header-section {
    margin-bottom: 18px;
  }

  .video-bottom-stats-section {
    padding: 18px;
    margin-top: 18px;
    border-radius: 16px;
  }

  .premium-stats-layout {
    flex-direction: column;
    gap: 16px;
    align-items: stretch;
    margin-top: 16px;
  }

  .premium-stat-card.experience-card {
    max-width: none;
  }

  .premium-stat-card.clients-card {
    align-self: stretch;
    margin-top: 0;
  }

  .card-glass-effect {
    padding: 20px 18px;
  }

  .premium-number {
    font-size: 36px;
  }

  .label-secondary {
    font-size: 14px;
  }

  .compact-card-wrapper {
    padding: 16px 20px;
    min-width: auto;
  }

  .compact-number {
    font-size: 22px;
  }
}

@media (max-width: 480px) {
  .video-header-section {
    margin-bottom: 16px;
  }

  .video-bottom-stats-section {
    padding: 16px;
    margin-top: 16px;
    border-radius: 14px;
  }

  .premium-metrics-badge {
    padding: 10px 18px;
  }

  .badge-text {
    font-size: 10px;
  }

  .card-glass-effect {
    padding: 16px 14px;
    border-radius: 18px;
  }

  .premium-number {
    font-size: 28px;
  }

  .label-secondary {
    font-size: 13px;
  }

  .compact-card-wrapper {
    padding: 14px 16px;
    border-radius: 16px;
  }

  .compact-number {
    font-size: 20px;
  }

  .success-indicator {
    width: 20px;
    height: 20px;
    font-size: 8px;
  }
} /* ============================================
   EXECUTIVE VIDEO PRESENTATION
   ============================================ */

/* Professional Video Theater */
.executive-video-presentation {
  position: relative;
  z-index: 2;
}

.professional-video-theater {
  position: relative;
  background: linear-gradient(
    145deg,
    rgba(0, 0, 0, 0.95) 0%,
    rgba(26, 32, 44, 0.98) 50%,
    rgba(0, 0, 0, 0.95) 100%
  );
  border-radius: 20px;
  padding: 20px;
  overflow: hidden;
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5),
    inset 0 1px 0 rgba(255, 255, 255, 0.1);
}

/* Theater Frame System */
.theater-frame-system {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 1;
  pointer-events: none;
}

.frame-corner {
  position: absolute;
  width: 20px;
  height: 20px;
  border: 2px solid rgba(229, 9, 20, 0.6);
}

.frame-corner.frame-tl {
  top: 8px;
  left: 8px;
  border-right: none;
  border-bottom: none;
  border-radius: 8px 0 0 0;
}

.frame-corner.frame-tr {
  top: 8px;
  right: 8px;
  border-left: none;
  border-bottom: none;
  border-radius: 0 8px 0 0;
}

.frame-corner.frame-bl {
  bottom: 8px;
  left: 8px;
  border-right: none;
  border-top: none;
  border-radius: 0 0 0 8px;
}

.frame-corner.frame-br {
  bottom: 8px;
  right: 8px;
  border-left: none;
  border-top: none;
  border-radius: 0 0 8px 0;
}

.frame-edge {
  position: absolute;
  background: linear-gradient(
    90deg,
    transparent,
    rgba(229, 9, 20, 0.3),
    transparent
  );
  animation: frame-edge-flow 4s ease-in-out infinite;
}

.frame-edge.frame-top,
.frame-edge.frame-bottom {
  left: 40px;
  right: 40px;
  height: 1px;
}

.frame-edge.frame-top {
  top: 8px;
}
.frame-edge.frame-bottom {
  bottom: 8px;
}

.frame-edge.frame-left,
.frame-edge.frame-right {
  top: 40px;
  bottom: 40px;
  width: 1px;
}

.frame-edge.frame-left {
  left: 8px;
}
.frame-edge.frame-right {
  right: 8px;
}

@keyframes frame-edge-flow {
  0%,
  100% {
    opacity: 0.3;
  }
  50% {
    opacity: 0.8;
  }
}

/* Executive Loading Theater */
.executive-loading-theater {
  position: relative;
  width: 100%;
  height: 450px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 32px;
  z-index: 2;
}

.loading-theater-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 24px;
}

.professional-loading-animation {
  position: relative;
  width: 120px;
  height: 120px;
}

.loading-orb {
  position: absolute;
  border-radius: 50%;
  animation: loading-orb-rotation 3s ease-in-out infinite;
}

.loading-orb.orb-center {
  top: 50%;
  left: 50%;
  width: 24px;
  height: 24px;
  margin: -12px 0 0 -12px;
  background: linear-gradient(135deg, #e50914, #ff4569);
  box-shadow: 0 0 20px rgba(229, 9, 20, 0.6);
  animation: center-orb-pulse 2s ease-in-out infinite;
}

.loading-orb.orb-ring-1 {
  top: 20px;
  left: 20px;
  right: 20px;
  bottom: 20px;
  border: 2px solid rgba(229, 9, 20, 0.4);
  animation-delay: 0.5s;
}

.loading-orb.orb-ring-2 {
  top: 10px;
  left: 10px;
  right: 10px;
  bottom: 10px;
  border: 2px solid rgba(229, 9, 20, 0.3);
  animation-delay: 1s;
}

.loading-orb.orb-ring-3 {
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  border: 2px solid rgba(229, 9, 20, 0.2);
  animation-delay: 1.5s;
}

@keyframes loading-orb-rotation {
  0% {
    transform: rotate(0deg) scale(1);
    opacity: 0.6;
  }
  50% {
    transform: rotate(180deg) scale(1.05);
    opacity: 1;
  }
  100% {
    transform: rotate(360deg) scale(1);
    opacity: 0.6;
  }
}

@keyframes center-orb-pulse {
  0%,
  100% {
    transform: scale(1);
    box-shadow: 0 0 20px rgba(229, 9, 20, 0.6);
  }
  50% {
    transform: scale(1.2);
    box-shadow: 0 0 30px rgba(229, 9, 20, 0.8);
  }
}

.loading-progress-system {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 16px;
}

.progress-indicator {
  width: 200px;
  height: 4px;
  background: rgba(255, 255, 255, 0.1);
  border-radius: 2px;
  overflow: hidden;
  position: relative;
}

.progress-bar {
  height: 100%;
  background: linear-gradient(90deg, #e50914, #ff4569, #e50914);
  background-size: 200% 100%;
  border-radius: 2px;
  animation: progress-bar-flow 2s ease-in-out infinite;
  width: 100%;
  transform: translateX(-100%);
  animation: progress-loading 3s ease-in-out infinite;
}

@keyframes progress-loading {
  0% {
    transform: translateX(-100%);
  }
  50% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(100%);
  }
}

@keyframes progress-bar-flow {
  0%,
  100% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
}

.loading-status-text {
  font-size: 14px;
  font-weight: 500;
  color: rgba(255, 255, 255, 0.8);
  letter-spacing: 0.5px;
}

/* Executive Video Display */
.executive-video-display {
  position: relative;
  width: 100%;
  min-height: 450px;
  z-index: 2;
}

.video-canvas-container {
  position: relative;
  width: 100%;
  height: 550px;
  border-radius: 16px;
  overflow: hidden;
  background: rgba(0, 0, 0, 0.9);
}

.canvas-enhancement-layers {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 1;
  pointer-events: none;
}

.enhancement-layer {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

.enhancement-layer.layer-ambient {
  background: radial-gradient(
    circle at 30% 20%,
    rgba(229, 9, 20, 0.05) 0%,
    transparent 50%
  );
}

.enhancement-layer.layer-depth {
  background: linear-gradient(
    145deg,
    rgba(0, 0, 0, 0.1) 0%,
    transparent 50%,
    rgba(0, 0, 0, 0.05) 100%
  );
}

.enhancement-layer.layer-premium {
  background: radial-gradient(
    circle at 70% 80%,
    rgba(255, 69, 0, 0.03) 0%,
    transparent 40%
  );
}

.executive-video-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  position: relative;
  z-index: 2;
  transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
}

.professional-fade-in {
  animation: professional-fade-in-animation 1.2s ease-out;
}

@keyframes professional-fade-in-animation {
  from {
    opacity: 0;
    transform: scale(0.95);
    filter: blur(8px) brightness(0.8);
  }
  to {
    opacity: 1;
    transform: scale(1);
    filter: blur(0) brightness(1);
  }
}

/* Professional Play Control System */
.professional-play-system {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 10;
  cursor: pointer;
}

.executive-play-button {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 16px;
}

.play-button-professional {
  position: relative;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
}

.play-button-professional:hover {
  transform: scale(1.1);
}

.surface-layer {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  border-radius: 50%;
  transition: all 0.3s ease;
}

.surface-layer.layer-base {
  background: linear-gradient(135deg, #e50914, #ff1744);
  box-shadow: 0 15px 35px rgba(229, 9, 20, 0.4),
    inset 0 2px 0 rgba(255, 255, 255, 0.2);
}

.surface-layer.layer-highlight {
  background: linear-gradient(135deg, rgba(255, 255, 255, 0.15), transparent);
}

.surface-layer.layer-premium {
  background: radial-gradient(
    circle at 30% 30%,
    rgba(255, 255, 255, 0.1),
    transparent
  );
  opacity: 0;
  transition: opacity 0.3s ease;
}

.play-button-professional:hover .surface-layer.layer-premium {
  opacity: 1;
}

.play-icon-executive {
  position: relative;
  z-index: 3;
  width: 32px;
  height: 32px;
  color: white;
  margin-left: 4px;
  transition: all 0.3s ease;
}

.play-svg {
  filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.3));
}

.play-button-professional:hover .play-icon-executive {
  transform: scale(1.1);
}

.button-enhancement-system {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

.enhancement-ring {
  position: absolute;
  border: 2px solid rgba(229, 9, 20, 0.3);
  border-radius: 50%;
  animation: enhancement-ring-pulse 3s ease-out infinite;
}

.enhancement-ring.ring-1 {
  top: -15px;
  left: -15px;
  right: -15px;
  bottom: -15px;
  animation-delay: 0s;
}

.enhancement-ring.ring-2 {
  top: -25px;
  left: -25px;
  right: -25px;
  bottom: -25px;
  animation-delay: 0.5s;
}

.enhancement-ring.ring-3 {
  top: -35px;
  left: -35px;
  right: -35px;
  bottom: -35px;
  animation-delay: 1s;
}

@keyframes enhancement-ring-pulse {
  0% {
    opacity: 1;
    transform: scale(0.8);
  }
  100% {
    opacity: 0;
    transform: scale(1.5);
  }
}

.interaction-feedback-system {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 200px;
  height: 200px;
  pointer-events: none;
}

.feedback-ripple {
  position: absolute;
  border: 1px solid rgba(229, 9, 20, 0.4);
  border-radius: 50%;
  animation: feedback-ripple-animation 2s ease-out infinite;
}

.feedback-ripple.ripple-1 {
  top: 50px;
  left: 50px;
  right: 50px;
  bottom: 50px;
  animation-delay: 0s;
}

.feedback-ripple.ripple-2 {
  top: 30px;
  left: 30px;
  right: 30px;
  bottom: 30px;
  animation-delay: 0.3s;
}

.feedback-ripple.ripple-3 {
  top: 10px;
  left: 10px;
  right: 10px;
  bottom: 10px;
  animation-delay: 0.6s;
}

@keyframes feedback-ripple-animation {
  0% {
    opacity: 1;
    transform: scale(0.5);
  }
  100% {
    opacity: 0;
    transform: scale(2);
  }
}

.play-system-status {
  display: flex;
  align-items: center;
  gap: 8px;
  padding: 8px 16px;
  background: rgba(0, 0, 0, 0.7);
  backdrop-filter: blur(10px);
  border-radius: 20px;
  border: 1px solid rgba(255, 255, 255, 0.1);
}

.status-indicator {
  display: flex;
  align-items: center;
  gap: 6px;
}

.status-dot {
  width: 6px;
  height: 6px;
  background: #10b981;
  border-radius: 50%;
  animation: status-dot-pulse 2s ease-in-out infinite;
}

@keyframes status-dot-pulse {
  0%,
  100% {
    opacity: 0.6;
  }
  50% {
    opacity: 1;
  }
}

.status-text {
  font-size: 12px;
  font-weight: 500;
  color: rgba(255, 255, 255, 0.8);
  letter-spacing: 0.3px;
}

/* Professional Video Information Panel */
.video-information-panel {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: linear-gradient(
    to top,
    rgba(0, 0, 0, 0.9) 0%,
    rgba(0, 0, 0, 0.7) 50%,
    transparent 100%
  );
  backdrop-filter: blur(15px);
  padding: 24px;
  z-index: 5;
}

.panel-content-wrapper {
  position: relative;
  z-index: 2;
}

.video-title-section {
  margin-bottom: 12px;
}

.video-title {
  font-size: 18px;
  font-weight: 700;
  color: white;
  margin: 0;
  line-height: 1.2;
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
}

.title-accent-line {
  width: 60px;
  height: 2px;
  background: linear-gradient(90deg, #e50914, #ff4569);
  margin-top: 6px;
  border-radius: 1px;
}

.video-meta-section {
  display: flex;
  align-items: center;
  gap: 20px;
  flex-wrap: wrap;
}

.meta-item {
  display: flex;
  align-items: center;
  gap: 6px;
  font-size: 12px;
  color: rgba(255, 255, 255, 0.8);
  font-weight: 500;
}

.meta-item i {
  font-size: 10px;
  opacity: 0.8;
}

.meta-item.premium-badge {
  background: rgba(229, 9, 20, 0.2);
  border: 1px solid rgba(229, 9, 20, 0.3);
  padding: 4px 8px;
  border-radius: 12px;
  backdrop-filter: blur(10px);
}

.meta-item.premium-badge i {
  color: #e50914;
}

.meta-item.premium-badge span {
  color: rgba(255, 255, 255, 0.9);
  font-weight: 600;
}

.panel-gradient-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(
    135deg,
    rgba(229, 9, 20, 0.05) 0%,
    transparent 50%,
    rgba(255, 69, 0, 0.03) 100%
  );
  z-index: 1;
  pointer-events: none;
}

/* Executive Fallback System */
.executive-fallback-system {
  position: relative;
  width: 100%;
  height: 450px;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 2;
}

.fallback-presentation-card {
  background: linear-gradient(
    145deg,
    rgba(255, 255, 255, 0.1) 0%,
    rgba(248, 249, 250, 0.05) 100%
  );
  backdrop-filter: blur(20px);
  border: 2px solid rgba(255, 255, 255, 0.1);
  border-radius: 20px;
  padding: 40px 32px;
  text-align: center;
  max-width: 320px;
  transition: all 0.4s ease;
}

.fallback-presentation-card:hover {
  transform: translateY(-4px);
  border-color: rgba(229, 9, 20, 0.2);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
}

.fallback-header {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 16px;
  margin-bottom: 24px;
}

.fallback-icon-premium {
  width: 64px;
  height: 64px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(
    135deg,
    rgba(229, 9, 20, 0.1),
    rgba(255, 69, 0, 0.05)
  );
  border: 2px solid rgba(229, 9, 20, 0.2);
  border-radius: 50%;
  font-size: 24px;
  color: rgba(229, 9, 20, 0.8);
  animation: fallback-icon-pulse 3s ease-in-out infinite;
}

@keyframes fallback-icon-pulse {
  0%,
  100% {
    transform: scale(1);
    box-shadow: 0 0 0 0 rgba(229, 9, 20, 0.3);
  }
  50% {
    transform: scale(1.05);
    box-shadow: 0 0 0 15px rgba(229, 9, 20, 0);
  }
}

.fallback-title {
  font-size: 20px;
  font-weight: 700;
  color: rgba(255, 255, 255, 0.9);
  margin: 0;
  line-height: 1.2;
}

.fallback-content-area {
  display: flex;
  flex-direction: column;
  gap: 20px;
  align-items: center;
}

.fallback-description {
  font-size: 14px;
  color: rgba(255, 255, 255, 0.7);
  line-height: 1.5;
  margin: 0;
}

.fallback-animation {
  display: flex;
  justify-content: center;
}

.animation-dots {
  display: flex;
  align-items: center;
  gap: 8px;
}

.dot {
  width: 8px;
  height: 8px;
  background: rgba(229, 9, 20, 0.6);
  border-radius: 50%;
  animation: dot-loading 1.5s ease-in-out infinite;
}

.dot.dot-1 {
  animation-delay: 0s;
}
.dot.dot-2 {
  animation-delay: 0.2s;
}
.dot.dot-3 {
  animation-delay: 0.4s;
}

@keyframes dot-loading {
  0%,
  100% {
    opacity: 0.3;
    transform: scale(0.8);
  }
  50% {
    opacity: 1;
    transform: scale(1.2);
  }
}

/* Mobile Responsive Design for Professional Video Showcase */
@media (max-width: 768px) {
  .professional-video-showcase {
    padding: 20px;
    border-radius: 20px;
  }

  .executive-stats-dashboard {
    margin-bottom: 20px;
  }

  .executive-metrics-grid {
    grid-template-columns: 1fr;
    gap: 12px;
  }

  .executive-metric-card.primary-metric {
    padding: 20px;
  }

  .premium-icon-container {
    width: 48px;
    height: 48px;
  }

  .metric-icon {
    font-size: 20px;
  }

  .executive-number {
    font-size: 32px;
  }

  .secondary-label {
    font-size: 14px;
  }

  .executive-metric-card.secondary-metric {
    padding: 12px;
  }

  .compact-icon-wrapper {
    width: 36px;
    height: 36px;
  }

  .compact-number {
    font-size: 18px;
  }

  .certification-seal {
    padding: 10px;
  }

  .seal-inner {
    width: 28px;
    height: 28px;
    font-size: 12px;
  }

  .professional-video-theater {
    padding: 16px;
    border-radius: 16px;
  }

  .video-canvas-container,
  .executive-loading-theater,
  .executive-fallback-system {
    height: 320px;
  }

  .play-button-professional {
    width: 80px;
    height: 80px;
  }

  .play-icon-executive {
    width: 24px;
    height: 24px;
  }

  .video-information-panel {
    padding: 16px;
  }

  .video-title {
    font-size: 16px;
  }

  .fallback-presentation-card {
    padding: 32px 24px;
  }

  .fallback-icon-premium {
    width: 56px;
    height: 56px;
    font-size: 20px;
  }

  .fallback-title {
    font-size: 18px;
  }
}

@media (max-width: 480px) {
  .professional-video-showcase {
    padding: 16px;
  }

  .dashboard-indicator {
    padding: 6px 12px;
  }

  .indicator-text {
    font-size: 11px;
  }

  .executive-metrics-grid {
    gap: 10px;
  }

  .executive-metric-card.primary-metric {
    padding: 16px;
  }

  .executive-number {
    font-size: 28px;
  }

  .video-canvas-container,
  .executive-loading-theater,
  .executive-fallback-system {
    height: 280px;
  }

  .play-button-professional {
    width: 70px;
    height: 70px;
  }

  .play-icon-executive {
    width: 20px;
    height: 20px;
  }

  .video-title {
    font-size: 14px;
  }

  .meta-item {
    font-size: 11px;
  }

  .fallback-presentation-card {
    padding: 24px 20px;
  }

  .fallback-icon-premium {
    width: 48px;
    height: 48px;
    font-size: 18px;
  }
}

/* ============================================
   VIDEO STATS INDEX HEADER
   ============================================ */

/* Video Stats Index Header */
.video-stats-index-header {
  position: relative;
  margin-bottom: 24px;
  z-index: 10;
}

.video-index-stats-container {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  gap: 20px;
  padding: 0 8px;
}

/* Featured Experience Index Card */
.video-index-experience-card {
  position: relative;
  background: linear-gradient(
    135deg,
    rgba(229, 9, 20, 0.25) 0%,
    rgba(255, 69, 0, 0.15) 50%,
    rgba(229, 9, 20, 0.25) 100%
  );
  backdrop-filter: blur(30px);
  border: 2px solid rgba(229, 9, 20, 0.4);
  border-radius: 20px;
  padding: 20px 24px;
  overflow: hidden;
  transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  box-shadow: 0 15px 35px rgba(229, 9, 20, 0.3),
    inset 0 1px 0 rgba(255, 255, 255, 0.15);
  flex: 1;
  max-width: 280px;
}

.video-index-experience-card:hover {
  transform: translateY(-8px) scale(1.03);
  border-color: rgba(229, 9, 20, 0.7);
  box-shadow: 0 25px 50px rgba(229, 9, 20, 0.5), 0 0 0 1px rgba(229, 9, 20, 0.4),
    inset 0 1px 0 rgba(255, 255, 255, 0.25);
}

.index-experience-highlight {
  display: flex;
  align-items: center;
  gap: 16px;
}

/* Index Experience Icon */
.index-experience-icon {
  position: relative;
  width: 50px;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #e50914, #ff1744);
  border-radius: 50%;
  font-size: 20px;
  color: white;
  box-shadow: 0 8px 20px rgba(229, 9, 20, 0.4),
    inset 0 1px 0 rgba(255, 255, 255, 0.2);
}

.index-icon-pulse {
  position: absolute;
  top: -3px;
  left: -3px;
  right: -3px;
  bottom: -3px;
  border: 2px solid rgba(229, 9, 20, 0.6);
  border-radius: 50%;
  animation: index-pulse 2s ease-in-out infinite;
}

@keyframes index-pulse {
  0% {
    opacity: 1;
    transform: scale(1);
  }
  100% {
    opacity: 0;
    transform: scale(1.3);
  }
}

/* Ultra-Highlightable Index Number */
.index-number-container {
  position: relative;
  margin-bottom: 4px;
}

.index-number-ultra {
  font-size: 32px;
  font-weight: 900;
  background: linear-gradient(
    135deg,
    #ffffff 0%,
    #e50914 25%,
    #ff4569 50%,
    #ffffff 75%,
    #e50914 100%
  );
  background-size: 400% 100%;
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: index-highlight-flow 3s ease-in-out infinite;
  font-family: "Inter", -apple-system, BlinkMacSystemFont, sans-serif;
}

@keyframes index-highlight-flow {
  0%,
  100% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
}

.index-number-glow {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(135deg, #e50914, #ff4569);
  opacity: 0.15;
  border-radius: 8px;
  filter: blur(12px);
  animation: index-glow-pulse 2s ease-in-out infinite;
}

@keyframes index-glow-pulse {
  0%,
  100% {
    opacity: 0.15;
    transform: scale(0.9);
  }
  50% {
    opacity: 0.3;
    transform: scale(1.1);
  }
}

.index-experience-label {
  color: rgba(255, 255, 255, 0.9);
  font-size: 14px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

/* Clients Index Card */
.video-index-clients-card {
  background: rgba(255, 255, 255, 0.08);
  backdrop-filter: blur(20px);
  border: 1px solid rgba(255, 255, 255, 0.15);
  border-radius: 16px;
  padding: 16px 20px;
  transition: all 0.4s ease;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.video-index-clients-card:hover {
  transform: translateY(-4px);
  background: rgba(255, 255, 255, 0.12);
  border-color: rgba(229, 9, 20, 0.3);
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2), 0 0 0 1px rgba(229, 9, 20, 0.2);
}

.index-clients-content {
  display: flex;
  align-items: center;
  gap: 12px;
}

.index-clients-icon {
  width: 36px;
  height: 36px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(229, 9, 20, 0.2);
  border-radius: 50%;
  font-size: 16px;
  color: #e50914;
  transition: all 0.3s ease;
}

.video-index-clients-card:hover .index-clients-icon {
  background: rgba(229, 9, 20, 0.3);
  transform: scale(1.1);
}

.index-clients-info {
  display: flex;
  flex-direction: column;
  gap: 2px;
}

.index-clients-number {
  font-size: 18px;
  font-weight: 700;
  background: linear-gradient(135deg, #e50914, #ff4569);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
  font-family: "Inter", -apple-system, BlinkMacSystemFont, sans-serif;
}

.index-clients-label {
  font-size: 10px;
  color: rgba(255, 255, 255, 0.7);
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.3px;
}

/* Video Experience Card */
.video-experience-card {
  position: relative;
  width: 100%;
  min-height: 500px;
  border-radius: 20px;
  overflow: hidden;
  background: rgba(0, 0, 0, 0.4);
  backdrop-filter: blur(15px);
}

/* Decorative Background Effects */
.video-bg-effects {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 1;
  pointer-events: none;
}

.floating-orb {
  position: absolute;
  border-radius: 50%;
  background: linear-gradient(
    135deg,
    rgba(229, 9, 20, 0.3),
    rgba(255, 69, 0, 0.2)
  );
  filter: blur(2px);
  animation: float-orb 8s ease-in-out infinite;
}

.orb-1 {
  width: 120px;
  height: 120px;
  top: 10%;
  left: 5%;
  animation-delay: 0s;
}

.orb-2 {
  width: 80px;
  height: 80px;
  top: 60%;
  right: 10%;
  animation-delay: 2s;
}

.orb-3 {
  width: 60px;
  height: 60px;
  bottom: 15%;
  left: 15%;
  animation-delay: 4s;
}

@keyframes float-orb {
  0%,
  100% {
    transform: translateY(0) rotate(0deg);
    opacity: 0.6;
  }
  33% {
    transform: translateY(-20px) rotate(120deg);
    opacity: 0.8;
  }
  66% {
    transform: translateY(10px) rotate(240deg);
    opacity: 0.4;
  }
}

.gradient-mesh {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: radial-gradient(
      circle at 20% 30%,
      rgba(229, 9, 20, 0.1) 0%,
      transparent 50%
    ),
    radial-gradient(
      circle at 80% 70%,
      rgba(255, 69, 0, 0.1) 0%,
      transparent 50%
    );
  animation: mesh-shift 12s ease-in-out infinite;
}

@keyframes mesh-shift {
  0%,
  100% {
    opacity: 0.3;
    transform: scale(1) rotate(0deg);
  }
  50% {
    opacity: 0.6;
    transform: scale(1.1) rotate(180deg);
  }
}

/* Modern Video Wrapper */
.modern-video-wrapper {
  position: relative;
  z-index: 2;
  width: 100%;
  height: 100%;
}

/* Premium Skeleton Loader */
.premium-skeleton-loader {
  position: relative;
  width: 100%;
  height: 500px;
  border-radius: 16px;
  overflow: hidden;
}

.skeleton-video-frame {
  position: relative;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    135deg,
    rgba(255, 255, 255, 0.1),
    rgba(255, 255, 255, 0.05)
  );
  border-radius: 16px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.skeleton-shimmer-advanced {
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    90deg,
    transparent,
    rgba(255, 255, 255, 0.2),
    rgba(229, 9, 20, 0.1),
    rgba(255, 255, 255, 0.2),
    transparent
  );
  animation: skeleton-shimmer-pro 2s ease-in-out infinite;
}

@keyframes skeleton-shimmer-pro {
  0% {
    left: -100%;
  }
  100% {
    left: 100%;
  }
}

.skeleton-play-button {
  position: relative;
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background: rgba(229, 9, 20, 0.2);
  display: flex;
  align-items: center;
  justify-content: center;
  animation: skeleton-pulse 2s ease-in-out infinite;
}

.skeleton-play-icon {
  width: 0;
  height: 0;
  border-left: 16px solid rgba(255, 255, 255, 0.6);
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  margin-left: 4px;
}

@keyframes skeleton-pulse {
  0%,
  100% {
    transform: scale(1);
    opacity: 0.6;
  }
  50% {
    transform: scale(1.05);
    opacity: 0.8;
  }
}

/* Professional Video Frame */
.professional-video-frame {
  position: relative;
  width: 100%;
  height: 500px;
  border-radius: 20px;
  overflow: hidden;
  background: rgba(0, 0, 0, 0.8);
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5),
    inset 0 1px 0 rgba(255, 255, 255, 0.1);
}

.video-frame-border {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  border: 2px solid transparent;
  border-radius: 20px;
  background: linear-gradient(
      135deg,
      rgba(229, 9, 20, 0.5),
      transparent,
      rgba(255, 69, 0, 0.5)
    )
    border-box;
  mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
  mask-composite: subtract;
  animation: border-glow 3s ease-in-out infinite;
}

@keyframes border-glow {
  0%,
  100% {
    opacity: 0.6;
  }
  50% {
    opacity: 1;
  }
}

.video-inner-container {
  position: relative;
  width: 100%;
  height: 100%;
  border-radius: 18px;
  overflow: hidden;
}

.modern-video-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.fade-in-premium {
  animation: fadeInPremium 1s ease-out;
}

@keyframes fadeInPremium {
  from {
    opacity: 0;
    transform: scale(0.9) translateY(20px);
    filter: blur(10px);
  }
  to {
    opacity: 1;
    transform: scale(1) translateY(0);
    filter: blur(0);
  }
}

/* Ultra-Modern Play Button */
.ultra-modern-play-button {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  cursor: pointer;
  z-index: 10;
  transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.ultra-modern-play-button:hover {
  transform: translate(-50%, -50%) scale(1.1);
}

/* Pulse Rings */
.pulse-ring {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  border: 2px solid rgba(229, 9, 20, 0.6);
  border-radius: 50%;
  animation: pulse-ring-animation 2s ease-out infinite;
}

.pulse-ring-1 {
  width: 120px;
  height: 120px;
  animation-delay: 0s;
}

.pulse-ring-2 {
  width: 140px;
  height: 140px;
  animation-delay: 0.3s;
}

.pulse-ring-3 {
  width: 160px;
  height: 160px;
  animation-delay: 0.6s;
}

@keyframes pulse-ring-animation {
  0% {
    opacity: 1;
    transform: translate(-50%, -50%) scale(0.8);
  }
  100% {
    opacity: 0;
    transform: translate(-50%, -50%) scale(1.5);
  }
}

/* Main Play Button Core */
.play-button-core {
  position: relative;
  width: 90px;
  height: 90px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.3s ease;
}

.play-button-background {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(135deg, #e50914, #ff1744);
  border-radius: 50%;
  transition: all 0.3s ease;
  box-shadow: 0 10px 30px rgba(229, 9, 20, 0.4),
    inset 0 1px 0 rgba(255, 255, 255, 0.2);
}

.play-button-glow {
  position: absolute;
  top: -5px;
  left: -5px;
  right: -5px;
  bottom: -5px;
  background: linear-gradient(135deg, #e50914, #ff1744);
  border-radius: 50%;
  opacity: 0;
  filter: blur(10px);
  transition: opacity 0.3s ease;
}

.play-button-core:hover .play-button-glow {
  opacity: 0.6;
  animation: glow-pulse 2s ease-in-out infinite;
}

@keyframes glow-pulse {
  0%,
  100% {
    opacity: 0.6;
    transform: scale(1);
  }
  50% {
    opacity: 0.8;
    transform: scale(1.1);
  }
}

.play-icon-modern {
  position: relative;
  z-index: 2;
  width: 24px;
  height: 24px;
  color: white;
  margin-left: 3px;
  transition: all 0.3s ease;
}

.play-button-core:hover .play-icon-modern {
  transform: scale(1.1);
}

/* Interactive Particles */
.play-particles {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 200px;
  height: 200px;
  pointer-events: none;
}

.particle {
  position: absolute;
  width: 4px;
  height: 4px;
  background: linear-gradient(45deg, #e50914, #ff4569);
  border-radius: 50%;
  animation: particle-float 4s ease-in-out infinite;
}

.particle-1 {
  top: 20%;
  left: 30%;
  animation-delay: 0s;
}

.particle-2 {
  top: 70%;
  right: 20%;
  animation-delay: 1s;
}

.particle-3 {
  bottom: 30%;
  left: 20%;
  animation-delay: 2s;
}

.particle-4 {
  top: 40%;
  right: 30%;
  animation-delay: 3s;
}

@keyframes particle-float {
  0%,
  100% {
    opacity: 0;
    transform: translateY(0) scale(0.5);
  }
  50% {
    opacity: 1;
    transform: translateY(-20px) scale(1);
  }
}

/* Video Meta Overlay */
.video-meta-overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 24px;
  background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
  backdrop-filter: blur(10px);
}

.video-duration-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 20px;
  background: rgba(229, 9, 20, 0.9);
  backdrop-filter: blur(10px);
  border-radius: 25px;
  color: white;
  font-size: 14px;
  font-weight: 600;
  box-shadow: 0 4px 15px rgba(229, 9, 20, 0.3);
  transition: all 0.3s ease;
}

.video-duration-badge:hover {
  background: rgba(229, 9, 20, 1);
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(229, 9, 20, 0.4);
}

.video-duration-badge i {
  font-size: 16px;
}

/* Premium Fallback */
.premium-fallback-container {
  width: 100%;
  height: 500px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.fallback-video-frame {
  padding: 60px;
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(15px);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 20px;
  text-align: center;
  transition: all 0.3s ease;
}

.fallback-video-frame:hover {
  background: rgba(255, 255, 255, 0.08);
  border-color: rgba(229, 9, 20, 0.3);
}

.fallback-content {
  color: rgba(255, 255, 255, 0.7);
}

.fallback-icon {
  margin-bottom: 16px;
}

.fallback-icon i {
  font-size: 48px;
  color: rgba(229, 9, 20, 0.6);
  animation: fallback-pulse 2s ease-in-out infinite;
}

@keyframes fallback-pulse {
  0%,
  100% {
    opacity: 0.6;
    transform: scale(1);
  }
  50% {
    opacity: 0.9;
    transform: scale(1.05);
  }
}

.fallback-text {
  margin: 0;
  font-size: 16px;
  font-weight: 500;
  color: rgba(255, 255, 255, 0.8);
}

/* Mobile Responsive Design for Video Section */
@media (max-width: 768px) {
  .modern-video-container {
    padding: 24px 16px;
    border-radius: 16px;
  }

  .video-experience-card {
    min-height: 350px;
    border-radius: 16px;
  }

  .professional-video-frame {
    height: 350px;
    border-radius: 16px;
  }

  .floating-orb {
    display: none; /* Hide floating orbs on mobile for better performance */
  }

  .ultra-modern-play-button {
    transform: translate(-50%, -50%) scale(0.9);
  }

  .play-button-core {
    width: 70px;
    height: 70px;
  }

  .pulse-ring-1 {
    width: 90px;
    height: 90px;
  }

  .pulse-ring-2 {
    width: 110px;
    height: 110px;
  }

  .pulse-ring-3 {
    width: 130px;
    height: 130px;
  }

  .play-icon-modern {
    width: 20px;
    height: 20px;
  }

  .video-meta-overlay {
    padding: 16px;
  }

  .video-duration-badge {
    padding: 10px 16px;
    font-size: 12px;
  }

  .premium-skeleton-loader,
  .premium-fallback-container {
    height: 350px;
  }

  .fallback-video-frame {
    padding: 40px 20px;
  }

  .fallback-icon i {
    font-size: 36px;
  }

  /* Video Index Mobile Styles */
  .video-stats-index-header {
    margin-bottom: 20px;
  }

  .video-index-stats-container {
    flex-direction: column;
    gap: 16px;
    align-items: center;
  }

  .video-index-experience-card {
    max-width: 100%;
    padding: 16px 20px;
    border-radius: 16px;
  }

  .index-experience-highlight {
    justify-content: center;
    gap: 12px;
  }

  .index-experience-icon {
    width: 45px;
    height: 45px;
    font-size: 18px;
  }

  .index-number-ultra {
    font-size: 28px;
  }

  .index-experience-label {
    font-size: 12px;
  }

  .video-index-clients-card {
    padding: 12px 16px;
    width: 100%;
    max-width: 200px;
  }

  .index-clients-icon {
    width: 32px;
    height: 32px;
    font-size: 14px;
  }

  .index-clients-number {
    font-size: 16px;
  }

  .index-clients-label {
    font-size: 9px;
  }
}

@media (max-width: 480px) {
  .modern-video-container {
    padding: 20px 12px;
  }

  .video-experience-card {
    min-height: 280px;
  }

  .professional-video-frame {
    height: 280px;
  }

  .play-button-core {
    width: 60px;
    height: 60px;
  }

  .pulse-ring-1 {
    width: 80px;
    height: 80px;
  }

  .pulse-ring-2 {
    width: 95px;
    height: 95px;
  }

  .pulse-ring-3 {
    width: 110px;
    height: 110px;
  }

  .play-icon-modern {
    width: 18px;
    height: 18px;
  }

  .video-duration-badge {
    padding: 8px 12px;
    font-size: 11px;
  }

  .premium-skeleton-loader,
  .premium-fallback-container {
    height: 280px;
  }

  .fallback-video-frame {
    padding: 30px 16px;
  }

  /* Video Index 480px Mobile Styles */
  .video-stats-index-header {
    margin-bottom: 16px;
  }

  .video-index-stats-container {
    gap: 12px;
  }

  .video-index-experience-card {
    padding: 14px 16px;
    border-radius: 14px;
  }

  .index-experience-highlight {
    gap: 10px;
  }

  .index-experience-icon {
    width: 40px;
    height: 40px;
    font-size: 16px;
  }

  .index-number-ultra {
    font-size: 24px;
  }

  .index-experience-label {
    font-size: 11px;
  }

  .video-index-clients-card {
    padding: 10px 14px;
  }

  .index-clients-icon {
    width: 28px;
    height: 28px;
    font-size: 12px;
  }

  .index-clients-number {
    font-size: 14px;
  }

  .index-clients-label {
    font-size: 8px;
  }
}

/* Professional About Us Content Styling */

/* Enhanced Hero Subtitle Section */
.hero-subtitle-section {
  position: relative;
  padding: 40px 0;
  background: linear-gradient(
    135deg,
    rgba(245, 247, 250, 0.8),
    rgba(255, 255, 255, 0.9)
  );
  border-radius: 20px;
  margin-bottom: 60px;
  overflow: hidden;
}

.hero-subtitle-section::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: radial-gradient(
      circle at 20% 50%,
      rgba(229, 9, 20, 0.03) 0%,
      transparent 50%
    ),
    radial-gradient(
      circle at 80% 50%,
      rgba(255, 107, 107, 0.03) 0%,
      transparent 50%
    );
  z-index: 1;
}

.hero-subtitle-wrapper {
  position: relative;
  z-index: 2;
}

.hero-subtitle-background {
  position: relative;
  display: inline-block;
  padding: 30px 50px;
  background: linear-gradient(135deg, #ffffff, #f8f9fa);
  border-radius: 50px;
  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1),
    inset 0 1px 0 rgba(255, 255, 255, 0.8);
  border: 2px solid rgba(229, 9, 20, 0.1);
  overflow: hidden;
}

.hero-subtitle-background::before {
  content: "";
  position: absolute;
  top: -2px;
  left: -2px;
  right: -2px;
  bottom: -2px;
  background: linear-gradient(135deg, #e50914, #ff6b6b, #e50914);
  border-radius: 50px;
  z-index: -1;
  opacity: 0;
  animation: border-glow 4s ease-in-out infinite;
}

@keyframes border-glow {
  0%,
  100% {
    opacity: 0;
  }
  50% {
    opacity: 0.3;
  }
}

.floating-particles {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  overflow: hidden;
  z-index: 1;
}

.floating-particles::before,
.floating-particles::after {
  content: "";
  position: absolute;
  width: 6px;
  height: 6px;
  background: linear-gradient(135deg, #e50914, #ff6b6b);
  border-radius: 50%;
  opacity: 0.4;
  animation: float-particle 8s ease-in-out infinite;
}

.floating-particles::before {
  top: 20%;
  left: 15%;
  animation-delay: 0s;
}

.floating-particles::after {
  top: 60%;
  right: 20%;
  animation-delay: 4s;
}

@keyframes float-particle {
  0%,
  100% {
    transform: translateY(0) rotate(0deg);
    opacity: 0.4;
  }
  50% {
    transform: translateY(-15px) rotate(180deg);
    opacity: 0.8;
  }
}

.hero-subtitle-indicator {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 15px;
  margin-bottom: 20px;
  position: relative;
  z-index: 2;
}

.hero-double-line {
  display: inline-block;
  width: 80px;
  height: 4px;
  background: linear-gradient(135deg, #e50914, #ff6b6b);
  border-radius: 3px;
  position: relative;
  box-shadow: 0 4px 15px rgba(229, 9, 20, 0.3);
  animation: line-expand 2s ease-out 0.5s forwards;
  transform: scaleX(0);
}

@keyframes line-expand {
  0% {
    transform: scaleX(0);
  }
  100% {
    transform: scaleX(1);
  }
}

.hero-double-line::after {
  content: "";
  position: absolute;
  top: -8px;
  left: 50%;
  transform: translateX(-50%);
  width: 50px;
  height: 2px;
  background: linear-gradient(135deg, #e50914, #ff6b6b);
  border-radius: 2px;
  opacity: 0.6;
}

.hero-subtitle-dot {
  width: 16px;
  height: 16px;
  background: linear-gradient(135deg, #e50914, #ff6b6b);
  border-radius: 50%;
  box-shadow: 0 0 20px rgba(229, 9, 20, 0.6),
    inset 0 2px 4px rgba(255, 255, 255, 0.3);
  animation: hero-dot-pulse 3s ease-in-out infinite;
  position: relative;
}

.hero-subtitle-dot::before {
  content: "";
  position: absolute;
  top: -4px;
  left: -4px;
  right: -4px;
  bottom: -4px;
  border: 2px solid rgba(229, 9, 20, 0.3);
  border-radius: 50%;
  animation: dot-ripple 2s ease-out infinite;
}

@keyframes hero-dot-pulse {
  0%,
  100% {
    transform: scale(1);
    box-shadow: 0 0 20px rgba(229, 9, 20, 0.6);
  }
  50% {
    transform: scale(1.2);
    box-shadow: 0 0 30px rgba(229, 9, 20, 0.8);
  }
}

@keyframes dot-ripple {
  0% {
    transform: scale(1);
    opacity: 1;
  }
  100% {
    transform: scale(2);
    opacity: 0;
  }
}

.hero-sub-title-text {
  font-size: 20px;
  font-weight: 800;
  color: transparent;
  text-transform: uppercase;
  letter-spacing: 3px;
  position: relative;
  z-index: 2;
  background: linear-gradient(135deg, #e50914, #ff4757, #e50914);
  background-size: 200% 100%;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  animation: gradient-shift 3s ease-in-out infinite;
  margin: 0;
  text-shadow: 0 4px 15px rgba(229, 9, 20, 0.2);
}

@keyframes gradient-shift {
  0%,
  100% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
}

.hero-subtitle-underline {
  height: 3px;
  background: linear-gradient(
    135deg,
    transparent,
    #e50914,
    #ff6b6b,
    #e50914,
    transparent
  );
  border-radius: 2px;
  margin-top: 15px;
  position: relative;
  overflow: hidden;
}

.hero-subtitle-underline::before {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 50%;
  height: 100%;
  background: linear-gradient(
    90deg,
    transparent,
    rgba(255, 255, 255, 0.6),
    transparent
  );
  animation: underline-shine 2s ease-in-out 1s infinite;
}

@keyframes underline-shine {
  0% {
    left: -100%;
  }
  100% {
    left: 100%;
  }
}

/* Modern Content Card */
.modern-content-card {
  position: relative;
  margin: 0;
  border: 2px solid rgba(229, 9, 20, 0.08);
  border-radius: 24px;
}

.content-card-background {
  position: relative;
  background: linear-gradient(
    145deg,
    rgba(255, 255, 255, 0.95) 0%,
    rgba(248, 250, 252, 0.9) 50%,
    rgba(241, 245, 249, 0.95) 100%
  );
  backdrop-filter: blur(20px);
  border-radius: 24px;
  padding: 50px 40px;
  border: 1px solid rgba(255, 255, 255, 0.3);
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1),
    0 0 0 1px rgba(255, 255, 255, 0.05), inset 0 1px 0 rgba(255, 255, 255, 0.4);
  overflow: hidden;
}

.content-card-background::before {
  content: "";
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: conic-gradient(
    from 0deg at 50% 50%,
    transparent 0deg,
    rgba(229, 9, 20, 0.03) 60deg,
    transparent 120deg,
    rgba(255, 107, 107, 0.03) 180deg,
    transparent 240deg,
    rgba(229, 9, 20, 0.03) 300deg,
    transparent 360deg
  );
  animation: rotate-bg 20s linear infinite;
  z-index: -1;
}

@keyframes rotate-bg {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/* Floating Elements */
.floating-elements {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  overflow: hidden;
  z-index: 0;
}

.floating-circle {
  position: absolute;
  border-radius: 50%;
  background: linear-gradient(
    135deg,
    rgba(229, 9, 20, 0.1),
    rgba(255, 107, 107, 0.05)
  );
  animation: float-circle 15s ease-in-out infinite;
}

.circle-1 {
  width: 80px;
  height: 80px;
  top: 10%;
  left: 85%;
  animation-delay: 0s;
}

.circle-2 {
  width: 120px;
  height: 120px;
  top: 70%;
  left: 5%;
  animation-delay: 5s;
}

.circle-3 {
  width: 60px;
  height: 60px;
  top: 40%;
  left: 90%;
  animation-delay: 10s;
}

@keyframes float-circle {
  0%,
  100% {
    transform: translateY(0) rotate(0deg) scale(1);
    opacity: 0.3;
  }
  25% {
    transform: translateY(-20px) rotate(90deg) scale(1.1);
    opacity: 0.6;
  }
  50% {
    transform: translateY(-10px) rotate(180deg) scale(0.9);
    opacity: 0.4;
  }
  75% {
    transform: translateY(-30px) rotate(270deg) scale(1.2);
    opacity: 0.7;
  }
}

/* Modern Title Enhancement */
.modern-title-wrapper {
  position: relative;
  z-index: 1;
}

.sec-title.modern-professional-title {
  font-size: 52px;
  font-weight: 900;
  line-height: 1.1;
  color: #1a1a1a;
  margin-bottom: 32px;
  position: relative;
  letter-spacing: -1px;
  font-family: "Inter", -apple-system, BlinkMacSystemFont, sans-serif;
}

.title-emphasis-modern {
  position: relative;
  display: inline-block;
  background: linear-gradient(135deg, #1a1a1a 0%, #2d3748 50%, #1a1a1a 100%);
  background-size: 200% 100%;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  animation: title-gradient-shift 4s ease-in-out infinite;
}

@keyframes title-gradient-shift {
  0%,
  100% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
}

.title-decoration {
  position: absolute;
  bottom: -12px;
  left: 0;
  width: 0;
  height: 4px;
  background: linear-gradient(90deg, #e50914, #ff6b6b, #e50914);
  border-radius: 2px;
  animation: title-decoration-expand 2s cubic-bezier(0.4, 0, 0.2, 1) 0.8s
    forwards;
  box-shadow: 0 2px 10px rgba(229, 9, 20, 0.3);
}

@keyframes title-decoration-expand {
  0% {
    width: 0;
    opacity: 0;
  }
  100% {
    width: 120px;
    opacity: 1;
  }
}

/* Modern Description Enhancement */
.sec-text-wrapper.modern-description {
  margin-bottom: 45px;
  position: relative;
  z-index: 1;
}

.description-container {
  position: relative;
  padding: 30px;
  background: linear-gradient(
    135deg,
    rgba(255, 255, 255, 0.8) 0%,
    rgba(248, 250, 252, 0.6) 100%
  );
  border-radius: 20px;
  border: 1px solid rgba(229, 9, 20, 0.1);
  backdrop-filter: blur(10px);
}

.description-icon {
  position: absolute;
  top: -15px;
  left: 30px;
  width: 40px;
  height: 40px;
  background: linear-gradient(135deg, #e50914, #ff6b6b);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 16px;
  box-shadow: 0 10px 25px rgba(229, 9, 20, 0.3);
  animation: icon-pulse 3s ease-in-out infinite;
}

@keyframes icon-pulse {
  0%,
  100% {
    transform: scale(1);
    box-shadow: 0 10px 25px rgba(229, 9, 20, 0.3);
  }
  50% {
    transform: scale(1.1);
    box-shadow: 0 15px 35px rgba(229, 9, 20, 0.5);
  }
}

.sec-text.modern-text {
  font-size: 18px;
  line-height: 1.8;
  color: #374151;
  text-align: left;
  position: relative;
  font-weight: 400;
  letter-spacing: 0.2px;
  margin-top: 15px;
  font-family: "Inter", -apple-system, BlinkMacSystemFont, sans-serif;
}

.description-accent-line {
  position: absolute;
  bottom: 0;
  left: 30px;
  right: 30px;
  height: 2px;
  background: linear-gradient(
    90deg,
    transparent,
    #e50914,
    #ff6b6b,
    #e50914,
    transparent
  );
  border-radius: 1px;
  opacity: 0;
  animation: accent-line-appear 1s ease-out 2s forwards;
}

@keyframes accent-line-appear {
  0% {
    opacity: 0;
    transform: scaleX(0);
  }
  100% {
    opacity: 1;
    transform: scaleX(1);
  }
}

/* Ultra-Modern CTA Section */
.modern-cta-section {
  position: relative;
  z-index: 1;
  display: flex;
  flex-direction: column;
  gap: 35px;
}

.primary-action-wrapper {
  position: relative;
}

/* Ultra-Modern Button */
.ultra-modern-btn {
  position: relative;
  display: inline-flex;
  align-items: center;
  padding: 0;
  background: none;
  border: none;
  text-decoration: none;
  cursor: pointer;
  overflow: hidden;
  border-radius: 16px;
  transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.btn-background-effect {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(
    135deg,
    #e50914 0%,
    #ff1744 25%,
    #e50914 50%,
    #c62828 75%,
    #e50914 100%
  );
  background-size: 400% 100%;
  border-radius: 16px;
  animation: btn-bg-shift 3s ease-in-out infinite;
  box-shadow: 0 8px 32px rgba(229, 9, 20, 0.4),
    0 0 0 1px rgba(255, 255, 255, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.2);
}

@keyframes btn-bg-shift {
  0%,
  100% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
}

.btn-content-wrapper {
  position: relative;
  z-index: 2;
  display: flex;
  align-items: center;
  padding: 20px 32px;
  gap: 16px;
}

.btn-text-modern {
  font-size: 16px;
  font-weight: 700;
  color: white;
  letter-spacing: 0.5px;
  font-family: "Inter", -apple-system, BlinkMacSystemFont, sans-serif;
  text-transform: uppercase;
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

.btn-icon-modern {
  position: relative;
  width: 36px;
  height: 36px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 16px;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.icon-background {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(255, 255, 255, 0.15);
  border-radius: 50%;
  transition: all 0.3s ease;
}

.btn-shine-effect {
  position: absolute;
  top: 0;
  left: -100%;
  width: 50%;
  height: 100%;
  background: linear-gradient(
    90deg,
    transparent,
    rgba(255, 255, 255, 0.3),
    transparent
  );
  transition: left 0.6s ease;
  transform: skewX(-20deg);
}

.ultra-modern-btn:hover .btn-background-effect {
  box-shadow: 0 12px 48px rgba(229, 9, 20, 0.6),
    0 0 0 1px rgba(255, 255, 255, 0.2), inset 0 1px 0 rgba(255, 255, 255, 0.3);
  animation-play-state: paused;
  background: linear-gradient(135deg, #ff0a16, #e50914);
}

.ultra-modern-btn:hover .btn-icon-modern {
  transform: translateX(4px) rotate(45deg);
}

.ultra-modern-btn:hover .icon-background {
  background: rgba(255, 255, 255, 0.25);
  transform: scale(1.1);
}

.ultra-modern-btn:hover .btn-shine-effect {
  left: 100%;
}

.ultra-modern-btn:active {
  transform: scale(0.98);
}

.th-btn-modern.professional-btn:hover .btn-hover-effect {
  left: 0;
}

.th-btn-modern.professional-btn:hover {
  transform: translateY(-4px) scale(1.02);
  box-shadow: 0 12px 35px rgba(229, 9, 20, 0.4);
}

.th-btn-modern.professional-btn .btn-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  background: rgba(255, 255, 255, 0.1);
  width: 28px;
  height: 28px;
  border-radius: 50%;
}

.th-btn-modern.professional-btn:hover .btn-icon {
  transform: translateX(6px) rotate(45deg);
  background: rgba(255, 255, 255, 0.2);
}

/* Modern Stats Grid */
.modern-stats-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 24px;
  margin-top: 40px;
}

.modern-stat-card {
  position: relative;
  padding: 32px 24px;
  background: rgba(255, 255, 255, 0.03);
  backdrop-filter: blur(20px);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 20px;
  text-align: center;
  transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  overflow: hidden;
}

.stat-glow-effect {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(
    135deg,
    rgba(229, 9, 20, 0.1) 0%,
    transparent 50%,
    rgba(229, 9, 20, 0.1) 100%
  );
  opacity: 0;
  transition: opacity 0.4s ease;
  border-radius: 20px;
}

.modern-stat-card:hover {
  transform: translateY(-8px) scale(1.02);
  background: rgba(255, 255, 255, 0.06);
  border-color: rgba(229, 9, 20, 0.3);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3), 0 0 0 1px rgba(229, 9, 20, 0.2),
    inset 0 1px 0 rgba(255, 255, 255, 0.1);
}

.modern-stat-card:hover .stat-glow-effect {
  opacity: 1;
}

.stat-number {
  font-size: 36px;
  font-weight: 800;
  background: linear-gradient(135deg, #e50914, #ff4569);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
  margin-bottom: 12px;
  display: block;
  font-family: "Inter", -apple-system, BlinkMacSystemFont, sans-serif;
}

.stat-label {
  font-size: 14px;
  color: rgba(255, 255, 255, 0.8);
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin: 0;
}

.stat-icon {
  position: absolute;
  top: 16px;
  right: 16px;
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(229, 9, 20, 0.1);
  border-radius: 50%;
  font-size: 18px;
  color: #e50914;
  transition: all 0.3s ease;
}

.modern-stat-card:hover .stat-icon {
  background: rgba(229, 9, 20, 0.2);
  transform: rotate(360deg) scale(1.1);
}

/* ============================================
   RIGHT-ALIGNED STATS WITH FEATURED EXPERIENCE
   ============================================ */

/* Right-Aligned Stats Container */
.right-aligned-stats-container {
  display: flex;
  justify-content: flex-end;
  margin-top: 40px;
}

.modern-stats-grid-right {
  display: flex;
  flex-direction: column;
  gap: 24px;
  align-items: flex-end;
  max-width: 400px;
}

/* Featured Experience Card */
.featured-experience-card {
  position: relative;
  background: linear-gradient(
    135deg,
    rgba(229, 9, 20, 0.15) 0%,
    rgba(255, 69, 0, 0.1) 50%,
    rgba(229, 9, 20, 0.15) 100%
  );
  backdrop-filter: blur(25px);
  border: 2px solid rgba(229, 9, 20, 0.3);
  border-radius: 24px;
  padding: 32px;
  overflow: hidden;
  transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  box-shadow: 0 20px 40px rgba(229, 9, 20, 0.2),
    inset 0 1px 0 rgba(255, 255, 255, 0.1);
}

.featured-experience-card:hover {
  transform: translateY(-12px) scale(1.05);
  border-color: rgba(229, 9, 20, 0.6);
  box-shadow: 0 30px 60px rgba(229, 9, 20, 0.4), 0 0 0 1px rgba(229, 9, 20, 0.3),
    inset 0 1px 0 rgba(255, 255, 255, 0.2);
}

.experience-highlight {
  display: flex;
  align-items: center;
  gap: 20px;
  position: relative;
  z-index: 2;
}

/* Premium Experience Icon */
.experience-icon-premium {
  position: relative;
  width: 70px;
  height: 70px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #e50914, #ff1744);
  border-radius: 50%;
  font-size: 28px;
  color: white;
  box-shadow: 0 10px 25px rgba(229, 9, 20, 0.4),
    inset 0 1px 0 rgba(255, 255, 255, 0.2);
  transition: all 0.4s ease;
}

.icon-pulse-ring {
  position: absolute;
  top: -5px;
  left: -5px;
  right: -5px;
  bottom: -5px;
  border: 2px solid rgba(229, 9, 20, 0.6);
  border-radius: 50%;
  animation: premium-pulse 2s ease-in-out infinite;
}

@keyframes premium-pulse {
  0% {
    opacity: 1;
    transform: scale(1);
  }
  100% {
    opacity: 0;
    transform: scale(1.4);
  }
}

.featured-experience-card:hover .experience-icon-premium {
  transform: rotate(360deg) scale(1.1);
  box-shadow: 0 15px 35px rgba(229, 9, 20, 0.6),
    inset 0 1px 0 rgba(255, 255, 255, 0.3);
}

/* Ultra-Highlightable Experience Number */
.experience-number-container {
  position: relative;
  margin-bottom: 8px;
}

.experience-number-ultra {
  font-size: 48px;
  font-weight: 900;
  background: linear-gradient(
    135deg,
    #ffffff 0%,
    #e50914 30%,
    #ff4569 70%,
    #ffffff 100%
  );
  background-size: 300% 100%;
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: highlight-shimmer 3s ease-in-out infinite;
  font-family: "Inter", -apple-system, BlinkMacSystemFont, sans-serif;
  text-shadow: 0 4px 8px rgba(229, 9, 20, 0.3);
  position: relative;
  z-index: 2;
}

@keyframes highlight-shimmer {
  0%,
  100% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
}

.number-background-glow {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(135deg, #e50914, #ff4569);
  opacity: 0.1;
  border-radius: 12px;
  filter: blur(15px);
  animation: glow-pulse-premium 2s ease-in-out infinite;
}

@keyframes glow-pulse-premium {
  0%,
  100% {
    opacity: 0.1;
    transform: scale(0.9);
  }
  50% {
    opacity: 0.3;
    transform: scale(1.1);
  }
}

/* Premium Experience Labels */
.experience-label-premium {
  display: flex;
  flex-direction: column;
  gap: 4px;
}

.main-label {
  font-size: 16px;
  color: rgba(255, 255, 255, 0.8);
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.highlight-label {
  font-size: 20px;
  font-weight: 700;
  background: linear-gradient(135deg, #e50914, #ff4569);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

/* Floating Sparkles */
.experience-decorative-elements {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  pointer-events: none;
  z-index: 1;
}

.floating-sparkle {
  position: absolute;
  width: 6px;
  height: 6px;
  background: linear-gradient(45deg, #e50914, #ff4569);
  border-radius: 50%;
  animation: sparkle-float 4s ease-in-out infinite;
}

.sparkle-1 {
  top: 20%;
  right: 15%;
  animation-delay: 0s;
}

.sparkle-2 {
  bottom: 25%;
  right: 25%;
  animation-delay: 1.5s;
}

.sparkle-3 {
  top: 60%;
  left: 10%;
  animation-delay: 3s;
}

@keyframes sparkle-float {
  0%,
  100% {
    opacity: 0;
    transform: translateY(0) scale(0.5);
  }
  50% {
    opacity: 1;
    transform: translateY(-15px) scale(1.2);
  }
}

/* Compact Stats Card */
.modern-stat-card-compact {
  position: relative;
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(20px);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 16px;
  padding: 20px 24px;
  display: flex;
  align-items: center;
  gap: 16px;
  transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  overflow: hidden;
}

.modern-stat-card-compact:hover {
  transform: translateX(-8px) scale(1.02);
  background: rgba(255, 255, 255, 0.08);
  border-color: rgba(229, 9, 20, 0.3);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2), 0 0 0 1px rgba(229, 9, 20, 0.2);
}

.stat-icon-wrapper-compact {
  position: relative;
  width: 50px;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(229, 9, 20, 0.15);
  border-radius: 50%;
  font-size: 20px;
  color: #e50914;
  transition: all 0.3s ease;
}

.compact-icon-glow {
  position: absolute;
  top: -2px;
  left: -2px;
  right: -2px;
  bottom: -2px;
  background: linear-gradient(135deg, #e50914, #ff4569);
  border-radius: 50%;
  opacity: 0;
  filter: blur(8px);
  transition: opacity 0.3s ease;
}

.modern-stat-card-compact:hover .compact-icon-glow {
  opacity: 0.4;
}

.modern-stat-card-compact:hover .stat-icon-wrapper-compact {
  background: rgba(229, 9, 20, 0.25);
  transform: scale(1.1);
}

.stat-content-compact {
  display: flex;
  flex-direction: column;
  gap: 4px;
}

.stat-number-compact {
  font-size: 24px;
  font-weight: 800;
  background: linear-gradient(135deg, #e50914, #ff4569);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
  font-family: "Inter", -apple-system, BlinkMacSystemFont, sans-serif;
}

.stat-label-compact {
  font-size: 12px;
  color: rgba(255, 255, 255, 0.7);
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.compact-card-glow-effect {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(
    135deg,
    rgba(229, 9, 20, 0.1) 0%,
    transparent 50%,
    rgba(229, 9, 20, 0.1) 100%
  );
  opacity: 0;
  transition: opacity 0.4s ease;
  border-radius: 16px;
}

.modern-stat-card-compact:hover .compact-card-glow-effect {
  opacity: 1;
}

/* Mobile Responsiveness for Modern Content */
@media (max-width: 768px) {
  .modern-content-card {
    padding: 40px 24px;
    margin: 20px;
  }

  .floating-element {
    width: 15px;
    height: 15px;
  }

  .floating-element.small {
    width: 8px;
    height: 8px;
  }

  .modern-title-section h2 {
    font-size: 32px;
    line-height: 1.3;
  }

  .floating-circles {
    width: 100px;
    height: 100px;
  }

  .ultra-modern-btn .btn-content-wrapper {
    padding: 16px 24px;
  }

  .btn-text-modern {
    font-size: 14px;
  }

  .btn-icon-modern {
    width: 32px;
    height: 32px;
    font-size: 14px;
  }

  .modern-stats-grid {
    grid-template-columns: 1fr;
    gap: 16px;
    margin-top: 30px;
  }

  .modern-stat-card {
    padding: 24px 20px;
  }

  .stat-number {
    font-size: 28px;
  }

  .stat-icon {
    width: 36px;
    height: 36px;
    font-size: 16px;
  }
}

@media (max-width: 480px) {
  .modern-content-card {
    padding: 30px 20px;
    margin: 15px;
  }

  .modern-title-section h2 {
    font-size: 28px;
  }

  .modern-description-section p {
    font-size: 15px;
    line-height: 1.6;
  }

  .ultra-modern-btn .btn-content-wrapper {
    padding: 14px 20px;
    gap: 12px;
  }

  .modern-stats-grid {
    gap: 12px;
  }

  .modern-stat-card {
    padding: 20px 16px;
  }

  .stat-number {
    font-size: 24px;
  }

  /* Right-Aligned Stats Mobile Responsiveness */
  .right-aligned-stats-container {
    justify-content: center;
    margin-top: 30px;
  }

  .modern-stats-grid-right {
    align-items: center;
    max-width: 100%;
    gap: 20px;
  }

  .featured-experience-card {
    padding: 24px;
    border-radius: 20px;
    max-width: 100%;
  }

  .experience-highlight {
    flex-direction: column;
    text-align: center;
    gap: 16px;
  }

  .experience-icon-premium {
    width: 60px;
    height: 60px;
    font-size: 24px;
  }

  .experience-number-ultra {
    font-size: 36px;
  }

  .main-label {
    font-size: 14px;
  }

  .highlight-label {
    font-size: 18px;
  }

  .modern-stat-card-compact {
    padding: 16px 20px;
    max-width: 100%;
  }

  .stat-icon-wrapper-compact {
    width: 45px;
    height: 45px;
    font-size: 18px;
  }

  .stat-number-compact {
    font-size: 20px;
  }

  .stat-label-compact {
    font-size: 11px;
  }
}

@media (max-width: 480px) {
  .right-aligned-stats-container {
    margin-top: 24px;
  }

  .modern-stats-grid-right {
    gap: 16px;
  }

  .featured-experience-card {
    padding: 20px;
    border-radius: 16px;
  }

  .experience-icon-premium {
    width: 50px;
    height: 50px;
    font-size: 20px;
  }

  .experience-number-ultra {
    font-size: 32px;
  }

  .main-label {
    font-size: 12px;
  }

  .highlight-label {
    font-size: 16px;
  }

  .modern-stat-card-compact {
    padding: 14px 16px;
  }

  .stat-icon-wrapper-compact {
    width: 40px;
    height: 40px;
    font-size: 16px;
  }

  .stat-number-compact {
    font-size: 18px;
  }
}

.th-btn-modern.professional-btn .btn-text {
  position: relative;
  z-index: 2;
  font-weight: 700;
}

/* Professional Stats Section */
.professional-stats {
  display: flex;
  align-items: center;
  gap: 20px;
}

.stat-item {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  padding: 15px 20px;
  background: linear-gradient(135deg, #f8f9fa, #ffffff);
  border-radius: 12px;
  border: 2px solid #f0f0f0;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
}

.stat-item::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 3px;
  background: linear-gradient(135deg, #e50914, #ff6b6b);
}

.stat-number {
  font-size: 24px;
  font-weight: 800;
  color: #e50914;
  margin-bottom: 4px;
  line-height: 1;
}

.stat-label {
  font-size: 12px;
  font-weight: 600;
  color: #666;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.stat-item:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
  border-color: #e50914;
}

/* Feature Cards Enhancement */
.about-feature-card {
  background: white;
  border-radius: 16px;
  padding: 28px 24px;
  display: flex;
  align-items: flex-start;
  gap: 20px;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  border: 2px solid #f0f0f0;
  position: relative;
  overflow: hidden;
  height: 100%;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
}

.about-feature-card::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 4px;
  height: 0;
  background: linear-gradient(180deg, #e50914, #ff6b6b);
  transition: height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.about-feature-card:hover::before {
  height: 100%;
}

.about-feature-card:hover {
  transform: translateY(-8px);
  border-color: #e50914;
  box-shadow: 0 12px 30px rgba(229, 9, 20, 0.15);
  background: linear-gradient(135deg, #fff 0%, #fff5f5 100%);
}

/* Feature Icon Styling */
.feature-icon-wrapper {
  position: relative;
  flex-shrink: 0;
}

.feature-icon-bg {
  width: 70px;
  height: 70px;
  background: linear-gradient(135deg, #ffe5e7, #fff0f1);
  border-radius: 16px;
  position: absolute;
  top: 0;
  left: 0;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.about-feature-card:hover .feature-icon-bg {
  background: linear-gradient(135deg, #e50914, #ff6b6b);
  transform: rotate(10deg) scale(1.05);
}

.feature-icon {
  width: 70px;
  height: 70px;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  z-index: 1;
  font-size: 32px;
  color: #e50914;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.about-feature-card:hover .feature-icon {
  color: white;
  transform: scale(1.1);
}

/* Feature Content */
.feature-content {
  flex: 1;
  padding-top: 8px;
}

.feature-title {
  font-size: 18px;
  font-weight: 700;
  color: #1a1a1a;
  margin-bottom: 8px;
  line-height: 1.4;
  transition: color 0.3s ease;
}

.about-feature-card:hover .feature-title {
  color: #e50914;
}

.feature-description {
  font-size: 14px;
  line-height: 1.6;
  color: #666;
  margin: 0;
}

/* Enhanced Responsive Design */
@media (max-width: 1399px) {
  .sec-title {
    font-size: 38px;
  }

  .about-feature-card {
    padding: 26px 22px;
  }

  .feature-icon-bg,
  .feature-icon {
    width: 65px;
    height: 65px;
  }

  .feature-icon {
    font-size: 30px;
  }
}

@media (max-width: 1199px) {
  .sec-title {
    font-size: 34px;
  }

  .about-feature-card {
    padding: 24px 20px;
  }

  .th-btn-modern {
    padding: 13px 30px;
    font-size: 15px;
  }
}

@media (max-width: 991px) {
  .sec-title {
    font-size: 32px;
    margin-bottom: 20px;
  }

  .sec-text {
    font-size: 15px;
  }

  .th-btn-modern {
    padding: 12px 28px;
    font-size: 15px;
  }

  .about-feature-card {
    padding: 20px 18px;
  }

  .feature-icon-bg,
  .feature-icon {
    width: 60px;
    height: 60px;
  }

  .feature-icon {
    font-size: 28px;
  }

  .feature-title {
    font-size: 17px;
  }
}

@media (max-width: 767px) {
  .sec-title.professional-title {
    font-size: 32px;
  }

  /* Hero Subtitle Responsive */
  .hero-subtitle-section {
    padding: 25px 15px;
    margin-bottom: 40px;
  }

  .hero-subtitle-background {
    padding: 20px 30px;
  }

  .hero-sub-title-text {
    font-size: 16px;
    letter-spacing: 2px;
  }

  .hero-double-line {
    width: 60px;
  }

  .hero-subtitle-dot {
    width: 12px;
    height: 12px;
  }

  .hero-subtitle-indicator {
    gap: 10px;
    margin-bottom: 15px;
  }

  .about-bottom-wrap.professional-cta {
    flex-direction: column;
    align-items: flex-start;
    gap: 20px;
  }

  .professional-stats {
    width: 100%;
    justify-content: flex-start;
  }

  .stat-item {
    padding: 12px 16px;
  }

  .stat-number {
    font-size: 20px;
  }

  .stat-label {
    font-size: 11px;
  }

  .about-feature-card {
    padding: 18px 16px;
    gap: 16px;
  }

  .feature-icon-bg,
  .feature-icon {
    width: 55px;
    height: 55px;
  }

  .feature-icon {
    font-size: 26px;
  }

  .feature-title {
    font-size: 16px;
  }
}

@media (max-width: 575px) {
  .sec-title.professional-title {
    font-size: 28px;
    line-height: 1.2;
    margin-bottom: 20px;
  }

  .sec-text {
    font-size: 15px;
    line-height: 1.8;
  }

  .th-btn-modern.professional-btn {
    padding: 14px 28px;
    font-size: 14px;
  }

  .btn-content {
    gap: 10px;
  }

  .th-btn-modern.professional-btn .btn-icon {
    width: 24px;
    height: 24px;
  }

  .description-highlight {
    left: -10px;
  }

  /* Hero Subtitle Mobile */
  .hero-subtitle-section {
    padding: 20px 10px;
    margin-bottom: 30px;
  }

  .hero-subtitle-background {
    padding: 15px 25px;
  }

  .hero-sub-title-text {
    font-size: 14px;
    letter-spacing: 1.5px;
  }

  .hero-double-line {
    width: 50px;
    height: 3px;
  }

  .hero-subtitle-dot {
    width: 10px;
    height: 10px;
  }

  .hero-subtitle-indicator {
    gap: 8px;
    margin-bottom: 12px;
  }

  .floating-particles::before,
  .floating-particles::after {
    width: 4px;
    height: 4px;
  }

  .stat-item {
    padding: 10px 14px;
    min-width: auto;
  }

  .stat-number {
    font-size: 18px;
  }

  .stat-label {
    font-size: 10px;
  }

  .about-feature-card {
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 20px 16px;
    margin-bottom: 15px;
  }

  .feature-content {
    padding-top: 0;
  }

  .feature-icon-bg,
  .feature-icon {
    width: 60px;
    height: 60px;
  }

  .feature-icon {
    font-size: 28px;
  }

  .feature-title {
    font-size: 15px;
    margin-bottom: 6px;
  }

  /* Mobile video modal adjustments */
  .video-loading-state,
  .video-error-state {
    min-height: 250px;
  }

  .video-loading-spinner {
    width: 40px;
    height: 40px;
  }

  .video-error-icon {
    font-size: 36px;
  }

  .video-error-text {
    font-size: 16px;
  }

  .video-retry-btn {
    padding: 10px 20px;
    font-size: 14px;
  }
}

/* Ultra-wide screen optimizations */
@media (min-width: 1920px) {
  .container {
    max-width: 1600px;
  }

  .sec-title {
    font-size: 48px;
  }

  .sec-text {
    font-size: 18px;
  }

  .about-feature-card {
    padding: 32px 28px;
  }

  .feature-icon-bg,
  .feature-icon {
    width: 80px;
    height: 80px;
  }

  .feature-icon {
    font-size: 36px;
  }

  .feature-title {
    font-size: 20px;
  }
}

/* Animation Enhancements */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(40px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.fadeinup {
  animation-fill-mode: both;
}

/* Performance Optimizations */
.about-1-wrapper {
  contain: layout style paint;
  will-change: auto;
}

.about-feature-card {
  contain: layout style;
  transform: translateZ(0);
  -webkit-transform: translateZ(0);
}

.video-play-button {
  will-change: transform;
  transform: translateZ(0);
  -webkit-transform: translateZ(0);
}

.th-btn-modern {
  will-change: transform;
  transform: translateZ(0);
  -webkit-transform: translateZ(0);
}

/* Prefers reduced motion for accessibility */
@media (prefers-reduced-motion: reduce) {
  *,
  *::before,
  *::after {
    animation-duration: 0.01ms !important;
    animation-iteration-count: 1 !important;
    transition-duration: 0.01ms !important;
  }

  .skeleton-shimmer {
    animation: none;
  }

  .ripple-effect {
    display: none;
  }
}

/* Smooth Transitions */
* {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

/* Force hardware acceleration for animations */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translate3d(0, 40px, 0);
  }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0);
  }
}

@keyframes fadeInLeft {
  from {
    opacity: 0;
    transform: translate3d(-30px, 0, 0);
  }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0);
  }
}

@keyframes fadeInRight {
  from {
    opacity: 0;
    transform: translate3d(30px, 0, 0);
  }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0);
  }
}

@keyframes zoomIn {
  from {
    opacity: 0;
    transform: scale3d(0.8, 0.8, 1);
  }
  to {
    opacity: 1;
    transform: scale3d(1, 1, 1);
  }
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

/* Ensure proper layering */
.about-main-image {
  position: relative;
  z-index: 1;
}

/* Make sure the container has proper height */
.about-main-image .w-100 {
  position: relative;
}

/* Hide skeleton when image is loaded */
.about-main-image img[v-show="isImageLoaded"] ~ .image-skeleton-placeholder {
  display: none;
}

/* Responsive adjustments for about main image */
@media (max-width: 768px) {
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

  /* Video button responsive */
  .play-icon {
    width: 60px;
    height: 60px;
  }

  .play-icon i {
    font-size: 24px;
  }

  .ripple-effect {
    width: 60px;
    height: 60px;
  }

  @keyframes ripple {
    0% {
      width: 60px;
      height: 60px;
      opacity: 1;
    }
    50% {
      opacity: 0.6;
    }
    100% {
      width: 120px;
      height: 120px;
      opacity: 0;
      border-width: 2px;
    }
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

  /* Video button small screen */
  .play-icon {
    width: 50px;
    height: 50px;
  }

  .play-icon i {
    font-size: 20px;
    margin-left: 3px;
  }

  .ripple-effect {
    width: 50px;
    height: 50px;
  }

  @keyframes ripple {
    0% {
      width: 50px;
      height: 50px;
      opacity: 1;
    }
    50% {
      opacity: 0.6;
    }
    100% {
      width: 100px;
      height: 100px;
      opacity: 0;
      border-width: 1.5px;
    }
  }
}

/* Video Modal Styles */
.video-modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.9);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 9999;
  padding: 20px;
  backdrop-filter: blur(5px);
}

.video-modal-container {
  position: relative;
  width: 100%;
  max-width: 1200px;
  background: #000;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
  animation: modalSlideIn 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
}

@keyframes modalSlideIn {
  from {
    opacity: 0;
    transform: scale(0.8) translateY(-50px);
  }
  to {
    opacity: 1;
    transform: scale(1) translateY(0);
  }
}

.video-modal-close {
  position: absolute;
  top: -45px;
  right: 0;
  background: rgba(255, 255, 255, 0.1);
  border: 2px solid rgba(255, 255, 255, 0.3);
  color: white;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  font-size: 20px;
  z-index: 10000;
  transition: all 0.3s ease;
  backdrop-filter: blur(10px);
}

.video-modal-close:hover {
  background: rgba(229, 9, 20, 0.9);
  border-color: #e50914;
  transform: rotate(90deg) scale(1.1);
}

.video-modal-content {
  position: relative;
  width: 100%;
}

.video-wrapper {
  position: relative;
  padding-bottom: 56.25%; /* 16:9 aspect ratio */
  height: 0;
  overflow: hidden;
}

.video-iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: none;
}

/* Modal fade transition */
.modal-fade-enter-active,
.modal-fade-leave-active {
  transition: all 0.3s ease;
}

.modal-fade-enter-from,
.modal-fade-leave-to {
  opacity: 0;
}

.modal-fade-enter-from .video-modal-container,
.modal-fade-leave-to .video-modal-container {
  transform: scale(0.8) translateY(-50px);
  opacity: 0;
}

/* Responsive adjustments for video modal */
@media (max-width: 768px) {
  .video-modal-overlay {
    padding: 15px;
  }

  .video-modal-container {
    max-width: 100%;
    border-radius: 10px;
  }

  .video-modal-close {
    top: -40px;
    width: 36px;
    height: 36px;
    font-size: 18px;
  }

  .video-wrapper {
    padding-bottom: 56.25%;
  }
}

@media (max-width: 576px) {
  .video-modal-overlay {
    padding: 10px;
  }

  .video-modal-container {
    border-radius: 8px;
  }

  .video-modal-close {
    top: -35px;
    width: 32px;
    height: 32px;
    font-size: 16px;
  }
}

/* Video Loading State */
.video-loading-state {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 400px;
  background: #000;
}

.video-loading-wrapper {
  text-align: center;
  color: white;
}

.video-loading-spinner {
  width: 50px;
  height: 50px;
  border: 4px solid rgba(255, 255, 255, 0.1);
  border-left: 4px solid #e50914;
  border-radius: 50%;
  animation: spin 1s linear infinite;
  margin: 0 auto 20px;
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

.video-loading-text {
  margin: 0;
  font-size: 16px;
  opacity: 0.8;
}

/* Video Error State */
.video-error-state {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 400px;
  background: #000;
}

.video-error-wrapper {
  text-align: center;
  color: white;
}

.video-error-icon {
  font-size: 48px;
  color: #ff6b6b;
  margin-bottom: 20px;
  animation: pulse 2s ease-in-out infinite;
}

.video-error-text {
  margin: 0 0 25px 0;
  font-size: 18px;
  opacity: 0.9;
}

.video-retry-btn {
  background: linear-gradient(135deg, #e50914, #b20710);
  color: white;
  border: none;
  padding: 12px 24px;
  border-radius: 25px;
  font-size: 16px;
  cursor: pointer;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  transition: all 0.3s ease;
}

.video-retry-btn:hover {
  background: linear-gradient(135deg, #ff0a16, #e50914);
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(229, 9, 20, 0.4);
}

/* Prevent body scroll when modal is open */
body.modal-open {
  overflow: hidden;
}
</style>
