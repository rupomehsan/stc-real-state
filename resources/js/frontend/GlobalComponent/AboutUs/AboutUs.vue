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
@import "./Css/style.css";
</style>
