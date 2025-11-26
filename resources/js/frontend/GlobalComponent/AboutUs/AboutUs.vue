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
    class="about-1-wrapper my-md-5 overflow-hidden position-relative"
    id="about-sec"
    ref="componentRef"
    v-if="showContent || showFallbackContent"
    v-show="!showSkeleton"
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
            <h3 class="hero-sub-title-text">About Our Company</h3>
            <div class="hero-subtitle-underline"></div>
          </div>
        </div>
      </div> -->

      <div
        class="row gx-70 justify-content-between my-md-5 my-3 align-items-center"
      >
        <div class="col-xl-6 col-lg-6 col-md-12 px-lg-5 mb-4 mb-lg-0">
          <!-- Modern Content Card -->
          <div class="modern-content-card">
            <div class="content-card-background">
              <div class="floating-elements">
                <div class="floating-circle circle-1"></div>
                <div class="floating-circle circle-2"></div>
                <div class="floating-circle circle-3"></div>
              </div>

              <div class="title-area text-left mb-50">
                <!-- Modern Title Section -->
                <div class="modern-title-wrapper">
                  <h3
                    class="sec-title modern-professional-title fadeInUp wow"
                    data-wow-duration="1.4s"
                    data-wow-delay="0.25s"
                  >
                    <span class="title-emphasis-modern">{{
                      about_us?.title || fallbackAboutData.title
                    }}</span>
                    <div class="title-decoration"></div>
                  </h3>
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
                      v-html="
                        (
                          about_us?.description || fallbackAboutData.description
                        )?.slice(0, 100 * 6) + '...'
                      "
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
                        <span class="btn-text-modern">See More About Us</span>
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
        <div class="col-xl-6 col-lg-6 col-md-12 mx-0 px-0">
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
                  <span class="badge-text">COMPANY OVERVIEW</span>
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

                <!-- Direct Video Display (No Thumbnail) -->
                <div class="direct-video-display">
                  <!-- Premium Video Canvas -->
                  <div class="video-canvas-container">
                    <div class="canvas-enhancement-layers">
                      <div class="enhancement-layer layer-ambient"></div>
                      <div class="enhancement-layer layer-depth"></div>
                      <div class="enhancement-layer layer-premium"></div>
                    </div>

                    <!-- Direct Autoplay Video -->
                    <video
                      class="direct-autoplay-video professional-fade-in"
                      src="/assets/frontend/about-us.mp4"
                      autoplay
                      muted
                      loop
                      controls
                      preload="auto"
                      playsinline
                      @loadstart="handleVideoLoadStart"
                      @canplay="handleVideoCanPlay"
                      @error="handleVideoError"
                      ref="aboutMainVideo"
                    >
                      <source
                        src="/assets/frontend/about-us.mp4"
                        type="video/mp4"
                      />
                      Your browser does not support the video tag.
                    </video>

                    <!-- Video Information Overlay -->
                    <!-- <div class="video-overlay-info">
                      <div class="video-badge">
                        <i class="fas fa-play-circle"></i>
                        <span>Company Overview</span>
                      </div>
                    </div> -->
                  </div>

                  <!-- Professional Video Information Panel -->
                  <div class="video-information-panel d-none">
                    <div class="panel-content-wrapper">
                      <div class="video-title-section">
                        <div class="title-accent-line"></div>
                      </div>

                      <div class="video-meta-section">
                        <div class="meta-item">
                          <i class="fas fa-video"></i>
                          <span>Auto-Playing</span>
                        </div>
                        <div class="meta-item">
                          <i class="fas fa-volume-mute"></i>
                          <span>Click to Unmute</span>
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
                            about_us?.years_experience ||
                            fallbackAboutData.years_experience
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
                            about_us?.total_clients ||
                            fallbackAboutData.total_clients
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
    console.log(
      "AboutUs component created - Mobile:",
      window.innerWidth <= 768
    );
    this.isLoading = true;
    this.isImageLoaded = false;
    await this.fetchDataWithRetry();
  },

  mounted() {
    const isMobile =
      window.innerWidth <= 768 ||
      /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
        navigator.userAgent
      );

    console.log(
      "AboutUs component mounted - Mobile:",
      isMobile,
      "Width:",
      window.innerWidth
    );

    // Initialize intersection observer for lazy loading
    this.initIntersectionObserver();

    // Check if images are already loaded when component mounts
    this.$nextTick(() => {
      this.checkImageLoadingState();
    });

    // Aggressive mobile fallback - show content immediately on mobile if API is slow
    if (isMobile) {
      console.log("Mobile detected: Setting up aggressive fallback timers");

      // First fallback after 1 second
      setTimeout(() => {
        if (this.isLoading || !this.about_us) {
          console.log("Mobile 1s timeout: forcing content to show");
          this.about_us = this.fallbackAboutData;
          this.isLoading = false;
          this.isImageLoaded = true;
        }
      }, 1000);

      // Second fallback after 2 seconds (just to be sure)
      setTimeout(() => {
        if (this.isLoading || !this.about_us) {
          console.log("Mobile 2s timeout: forcing content to show");
          this.about_us = this.fallbackAboutData;
          this.isLoading = false;
          this.isImageLoaded = true;
        }
      }, 2000);
    }

    // Original 3-second timeout for all devices
    setTimeout(() => {
      if (isMobile && (this.isLoading || !this.about_us)) {
        console.log("Mobile timeout: forcing content to show");
        this.isLoading = false;
        this.isImageLoaded = true;
      }
    }, 3000);
  },

  activated() {
    // Handle keep-alive component activation (when navigating back)
    console.log(
      "AboutUs component activated - Mobile:",
      window.innerWidth <= 768
    );
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
          // Reset video loading state when new data arrives
          this.isImageLoaded = false;
          // Add a small delay for smooth transition
          setTimeout(() => {
            this.isLoading = false;
            // Check if video is ready
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

      // Handle video autoplay with better user experience
      setTimeout(() => {
        this.isVideoLoading = false;

        // Focus and attempt autoplay after modal is ready
        this.$nextTick(() => {
          const videoElement = document.querySelector(".modal-video");
          if (videoElement) {
            // Mark as loaded for CSS transitions
            videoElement.setAttribute("data-loaded", "true");

            // Attempt autoplay (will work if user has interacted)
            videoElement.play().catch((error) => {
              console.log("Autoplay prevented by browser:", error);
              // Autoplay failed, but video is still available with controls
            });

            // Add video event listeners
            videoElement.addEventListener("loadstart", () => {
              console.log("Video load started");
            });

            videoElement.addEventListener("canplay", () => {
              console.log("Video can start playing");
            });

            videoElement.addEventListener("error", this.handleVideoError);
          }
        });
      }, 300);
    },

    closeVideoModal() {
      // Pause video before closing
      const videoElement = document.querySelector(".modal-video");
      if (videoElement) {
        videoElement.pause();
        videoElement.currentTime = 0; // Reset to beginning
      }

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
    handleVideoLoadStart() {
      console.log("Video load started");
    },

    handleVideoCanPlay() {
      console.log("Video can start playing");
      // Video is ready to play
      this.isImageLoaded = true; // Reusing this for video ready state
    },

    handleVideoError(event) {
      console.error("Failed to load about us video:", event);
      this.videoLoadError = true;
      // Mark as loaded to show content anyway on mobile
      const isMobile = window.innerWidth <= 768;
      if (isMobile) {
        console.log("Video error on mobile - showing content anyway");
        this.isImageLoaded = true;
      } else {
        // Still mark as loaded to show controls on desktop
        this.isImageLoaded = true;
      }
    },

    // Legacy method names kept for compatibility
    handleImageLoad() {
      console.log("Image/Video loaded successfully");
      setTimeout(() => {
        this.isImageLoaded = true;
      }, 100);
    },

    handleImageError(event) {
      console.error("Failed to load about us media:", event);
      setTimeout(() => {
        this.isImageLoaded = true;
      }, 100);
    },

    resetImageLoadingState() {
      console.log("Resetting image loading state");
      this.isImageLoaded = false;
    },

    checkImageLoadingState() {
      // Check if the main video exists and is ready to play
      const videoElement = this.$refs.aboutMainVideo;
      if (videoElement) {
        // For mobile devices, be more aggressive about marking as loaded
        const isMobile = window.innerWidth <= 768;

        if (videoElement.readyState >= 2 || isMobile) {
          // HAVE_CURRENT_DATA or higher, or if on mobile, mark as ready
          console.log(
            "Video ready to play (cached or loaded), mobile:",
            isMobile
          );
          this.isImageLoaded = true;
        } else {
          console.log("Video not yet ready, waiting for canplay event");
          // For mobile environments, give it more time and force load
          setTimeout(
            () => {
              if (videoElement.readyState >= 1 || isMobile) {
                console.log(
                  "Video load timeout reached, marking as ready for mobile compatibility"
                );
                this.isImageLoaded = true;
              }
            },
            isMobile ? 2000 : 1000
          );
        }
      } else {
        // If no DOM element yet, wait a bit more
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
      if (!this.isImageLoaded) {
        this.preloadImages();
      }
    },

    // Preload video for better performance
    preloadImages() {
      const video = document.createElement("video");
      video.onloadeddata = () => {
        console.log("Video preloaded successfully");
      };
      video.onerror = (error) => {
        console.error("Failed to preload video:", error);
      };
      video.src = "/assets/frontend/about-us.mp4";
      video.preload = "metadata";
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
      const shouldShow =
        this.isLoading ||
        this.loading ||
        !this.about_us ||
        Object.keys(this.about_us || {}).length === 0;
      console.log(
        "Show skeleton:",
        shouldShow,
        "Mobile:",
        window.innerWidth <= 768
      );
      return shouldShow;
    },

    showContent() {
      const shouldShow =
        !this.isLoading &&
        !this.loading &&
        this.about_us &&
        Object.keys(this.about_us || {}).length > 0;
      console.log(
        "Show content:",
        shouldShow,
        "Mobile:",
        window.innerWidth <= 768
      );
      return shouldShow;
    },

    showFallbackContent() {
      // More aggressive mobile detection and fallback
      const isMobile =
        window.innerWidth <= 768 ||
        /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
          navigator.userAgent
        );

      // Always show fallback on mobile if no real content
      const shouldShowFallback = isMobile && !this.showContent;

      console.log(
        "Mobile detected:",
        isMobile,
        "Should show fallback:",
        shouldShowFallback
      );
      return shouldShowFallback;
    },

    fallbackAboutData() {
      return {
        title: "Building Excellence, Shaping Dreams",
        description:
          "STC Building & Properties is a trusted name in Bangladesh's real estate and construction sector, delivering excellence since 2017. We transform land into timeless assets through state-of-the-art design and flawless construction.",
        years_experience: "8+",
        total_clients: "1000+",
        video_url: "https://www.youtube.com/watch?v=BU_s5NhMLvc",
      };
    },
  },
};
</script>

<style scoped>
@import "./Css/style.css";
</style>
