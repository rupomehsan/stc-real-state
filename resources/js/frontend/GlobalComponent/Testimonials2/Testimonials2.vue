<template>
  <section class="modern-testimonial-section p-0" id="testimonials-section">
    <div class="container">
      <!-- <div class="hero-subtitle-section text-center mt-3">
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
            <h3 class="hero-sub-title-text">Testimonials</h3>
            <div class="hero-subtitle-underline"></div>
          </div>
        </div>
      </div> -->

      <!-- Enhanced Modern Testimonials Showcase -->
      <div class="modern-testimonials-section">
        <div class="testimonials-container">
          <!-- Background Elements -->
          <div class="section-background">
            <div class="floating-shapes">
              <div class="shape shape-1"></div>
              <div class="shape shape-2"></div>
              <div class="shape shape-3"></div>
            </div>
            <div class="gradient-overlay"></div>
          </div>

          <div class="testimonials-showcase-card">
            <!-- Modern Header -->
            <div class="modern-header">
              <div class="header-content mt-3">
                <h2 class="modern-title">
                  <span class="title-main">What Our Clients Say</span>
                </h2>
                <div class="title-accent"></div>
                <p class="modern-subtitle">
                  Hear from our valued clients about their experience working
                  with STC.
                  <span class="subtitle-emphasis">
                    Real stories of success and satisfaction.
                  </span>
                </p>
              </div>

              <!-- Modern Stats Preview -->
              <div class="header-stats">
                <div class="stat-preview">
                  <div class="stat-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                      <path
                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"
                      />
                    </svg>
                  </div>
                  <div class="stat-info">
                    <div class="stat-number">5.0</div>
                    <div class="stat-text">Average Rating</div>
                  </div>
                </div>
                <div class="stat-preview">
                  <div class="stat-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                      <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </div>
                  <div class="stat-info">
                    <div class="stat-number">
                      {{ testimonials?.length || 50 }}+
                    </div>
                    <div class="stat-text">Happy Clients</div>
                  </div>
                </div>
                <div class="stat-preview">
                  <div class="stat-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                      <path
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                      />
                    </svg>
                  </div>
                  <div class="stat-info">
                    <div class="stat-number">100%</div>
                    <div class="stat-text">Satisfaction</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modern Testimonials Slider -->
            <div class="modern-testimonials-slider">
              <div
                ref="testimonialsSlider"
                class="swiper modern-testimonial-swiper"
                id="testiSlide1"
              >
                <div class="swiper-wrapper">
                  <template
                    v-for="(testimonial, index) in testimonials"
                    :key="`testimonial-${index}-${testimonial.id || index}`"
                  >
                    <TestimonialsSingleItem :testimonial="testimonial" />
                  </template>
                </div>

                <!-- Modern Navigation Controls -->
                <div class="modern-slider-controls">
                  <div class="navigation-wrapper">
                    <button
                      ref="prevBtn"
                      class="modern-nav-btn prev-btn"
                      @click.stop="goToPrev"
                      aria-label="Previous testimonial"
                    >
                      <svg viewBox="0 0 24 24" fill="currentColor">
                        <path
                          d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"
                        />
                      </svg>
                    </button>

                    <div class="pagination-wrapper">
                      <div ref="paginationEl" class="modern-pagination"></div>
                    </div>

                    <button
                      ref="nextBtn"
                      class="modern-nav-btn next-btn"
                      @click.stop="goToNext"
                      aria-label="Next testimonial"
                    >
                      <svg viewBox="0 0 24 24" fill="currentColor">
                        <path
                          d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12z"
                        />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { mapActions, mapState } from "pinia";
import { store as testimonials_store } from "./Store/testimonialsStore.js";
import TestimonialsSingleItem from "./components/TestimonialsSingleItem.vue";

export default {
  components: {
    TestimonialsSingleItem,
  },
  data() {
    return {
      swiperInstance: null,
      isSliderReady: false,
      initRetries: 0,
      maxRetries: 5,
    };
  },
  async created() {
    await this.fetch_testimonials();
  },
  mounted() {
    // Use a more reliable initialization
    this.$nextTick(() => {
      setTimeout(() => {
        this.initSlider();
        this.initModernAnimations();
      }, 1200); // Increased delay to ensure everything is ready
    });
  },
  beforeUnmount() {
    this.cleanupSlider();
  },
  methods: {
    ...mapActions(testimonials_store, ["fetch_testimonials"]),

    initSlider() {
      // Only initialize if we have testimonials and slider isn't already ready
      if (
        this.isSliderReady ||
        !this.testimonials ||
        this.testimonials.length === 0
      ) {
        return;
      }

      const sliderEl = this.$refs.testimonialsSlider;

      if (!sliderEl) {
        if (this.initRetries < this.maxRetries) {
          this.initRetries++;
          setTimeout(() => this.initSlider(), 500);
        }
        return;
      }

      if (!window.Swiper) {
        if (this.initRetries < this.maxRetries) {
          this.initRetries++;
          setTimeout(() => this.initSlider(), 500);
        }
        return;
      }

      try {
        // Clean up any existing instance first
        this.cleanupSlider();

        // Create new Swiper instance with minimal, stable configuration
        this.swiperInstance = new window.Swiper(sliderEl, {
          // Basic settings
          loop: true,
          centeredSlides: true,
          slidesPerView: 1,
          spaceBetween: 20,
          autoHeight: false, // Set to false for stability

          // Autoplay
          autoplay: {
            delay: 4000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
          },

          // Navigation using refs instead of global selectors
          navigation: {
            nextEl: this.$refs.nextBtn,
            prevEl: this.$refs.prevBtn,
          },

          // Pagination
          pagination: {
            el: this.$refs.paginationEl,
            type: "progressbar",
            clickable: false,
          },

          // Stability settings
          observer: true,
          observeParents: true,
          watchOverflow: true,

          // Performance
          speed: 600,
          effect: "slide",

          // Resistance to external interference
          resistance: false,
          preventInteractionOnTransition: false,

          // Event handlers
          on: {
            init: () => {
              console.log("✅ Testimonial slider initialized");
              this.isSliderReady = true;
            },
            destroy: () => {
              console.log("🔄 Testimonial slider destroyed");
              this.isSliderReady = false;
            },
            slideChange: () => {
              // Prevent external interference during slide changes
              if (this.swiperInstance && this.swiperInstance.autoplay) {
                this.swiperInstance.autoplay.start();
              }
            },
          },
        });
      } catch (error) {
        console.error("❌ Error initializing testimonial slider:", error);
        this.isSliderReady = false;

        // Retry with exponential backoff
        if (this.initRetries < this.maxRetries) {
          this.initRetries++;
          const delay = Math.min(1000 * this.initRetries, 5000);
          setTimeout(() => this.initSlider(), delay);
        }
      }
    },

    cleanupSlider() {
      if (this.swiperInstance) {
        try {
          this.swiperInstance.destroy(true, true);
          this.swiperInstance = null;
          this.isSliderReady = false;
        } catch (error) {
          console.error("Error destroying slider:", error);
        }
      }
    },

    // Manual navigation methods
    goToNext() {
      if (this.swiperInstance && this.isSliderReady) {
        this.swiperInstance.slideNext();
      }
    },

    goToPrev() {
      if (this.swiperInstance && this.isSliderReady) {
        this.swiperInstance.slidePrev();
      }
    },

    // Reinitialize if needed
    forceReinit() {
      this.cleanupSlider();
      this.initRetries = 0;
      setTimeout(() => this.initSlider(), 300);
    },

    // Initialize modern animations
    initModernAnimations() {
      // Animate elements on scroll
      const observerOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px",
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("animate-in");
          }
        });
      }, observerOptions);

      // Observe animation targets
      const animationTargets = this.$el.querySelectorAll(
        ".hero-subtitle-background, .testimonials-showcase-card, .stat-preview"
      );

      animationTargets.forEach((target) => {
        observer.observe(target);
      });

      // Initialize floating animations
      this.initFloatingAnimations();
    },

    // Initialize floating particle animations
    initFloatingAnimations() {
      const particles = this.$el.querySelectorAll(".floating-particles");
      particles.forEach((particle) => {
        // Add random animation delays for more natural movement
        const delay = Math.random() * 2000;
        particle.style.animationDelay = `${delay}ms`;
      });
    },
  },
  computed: {
    ...mapState(testimonials_store, ["testimonials"]),
  },
  watch: {
    testimonials: {
      handler(newVal, oldVal) {
        // Only reinitialize if we now have data and didn't before
        if (newVal && newVal.length > 0 && (!oldVal || oldVal.length === 0)) {
          this.$nextTick(() => {
            setTimeout(() => {
              if (!this.isSliderReady) {
                this.initSlider();
              }
            }, 600);
          });
        }
      },
      deep: true,
      immediate: false,
    },
  },
};
</script>

<style lang="scss" scoped>
// Modern CSS Variables
:root {
  --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
  --accent-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
  --glass-bg: rgba(255, 255, 255, 0.25);
  --glass-border: rgba(255, 255, 255, 0.18);
}

// Modern Testimonials Section
.modern-testimonial-section {
  position: relative;
  padding: 4rem 0;
  background: linear-gradient(135deg, #f8fafc 0%, #ffffff 50%, #f1f5f9 100%);
  overflow: hidden;

  &::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(
        circle at 20% 20%,
        rgba(99, 102, 241, 0.1) 0%,
        transparent 50%
      ),
      radial-gradient(
        circle at 80% 80%,
        rgba(139, 92, 246, 0.1) 0%,
        transparent 50%
      );
    pointer-events: none;
  }
}

// Hero Subtitle Section (exact match to WhyChooseUs)
.hero-subtitle-section {
  padding: 30px 0;
  position: relative;

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

    &::before {
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

    .floating-particles {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      overflow: hidden;
      z-index: 1;

      &::before,
      &::after {
        content: "";
        position: absolute;
        width: 6px;
        height: 6px;
        background: linear-gradient(135deg, #e50914, #ff6b6b);
        border-radius: 50%;
        opacity: 0.4;
        animation: float-particle 8s ease-in-out infinite;
      }

      &::before {
        top: 20%;
        left: 15%;
        animation-delay: 0s;
      }

      &::after {
        top: 60%;
        right: 20%;
        animation-delay: 4s;
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

        &::after {
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

        &::before {
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

      &::before {
        content: "";
        position: absolute;
        top: 0;
        left: -100%;
        width: 50%;
        height: 100%;
        background: linear-gradient(
          90deg,
          transparent,
          rgba(255, 255, 255, 0.8),
          transparent
        );
        animation: underline-shimmer 3s ease-in-out infinite;
      }
    }
  }
}

// Modern Testimonials Showcase
.modern-testimonials-section {
  position: relative;
  padding: 3rem 0;

  .testimonials-container {
    position: relative;
  }

  .section-background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    overflow: hidden;
    pointer-events: none;

    .floating-shapes {
      position: absolute;
      width: 100%;
      height: 100%;

      .shape {
        position: absolute;
        border-radius: 50%;
        background: linear-gradient(
          135deg,
          rgba(99, 102, 241, 0.1),
          rgba(139, 92, 246, 0.1)
        );
        animation: float 8s ease-in-out infinite;

        &.shape-1 {
          top: 10%;
          left: 10%;
          width: 120px;
          height: 120px;
          animation-delay: 0s;
        }

        &.shape-2 {
          top: 60%;
          right: 15%;
          width: 80px;
          height: 80px;
          animation-delay: -3s;
        }

        &.shape-3 {
          bottom: 20%;
          left: 20%;
          width: 60px;
          height: 60px;
          animation-delay: -6s;
        }
      }
    }

    .gradient-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(
        135deg,
        rgba(99, 102, 241, 0.05) 0%,
        transparent 50%,
        rgba(139, 92, 246, 0.05) 100%
      );
    }
  }

  .testimonials-showcase-card {
    position: relative;
    background: rgba(255, 255, 255, 0.9);
    border-radius: 24px;
    border: 1px solid rgba(99, 102, 241, 0.1);
    backdrop-filter: blur(20px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
    padding: 3rem;
    margin: 2rem 0;

    .modern-header {
      text-align: center;
      margin-bottom: 3rem;

      .header-content {
        .modern-title {
          font-size: 2.5rem;
          font-weight: 700;
          color: #1e293b;
          margin-bottom: 1rem;
          position: relative;

          .title-main {
            background: linear-gradient(135deg, #1e293b 0%, #475569 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
          }
        }

        .title-accent {
          width: 80px;
          height: 4px;
          background: linear-gradient(90deg, #6366f1, #8b5cf6);
          margin: 1rem auto;
          border-radius: 2px;
          animation: shimmer 3s ease-in-out infinite;
        }

        .modern-subtitle {
          font-size: 1.1rem;
          color: #64748b;
          max-width: 600px;
          margin: 0 auto;
          line-height: 1.6;

          .subtitle-emphasis {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 600;
          }
        }
      }

      .header-stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1.5rem;
        margin-top: 2rem;

        .stat-preview {
          display: flex;
          align-items: center;
          gap: 1rem;
          padding: 1.5rem;
          background: rgba(255, 255, 255, 0.8);
          border-radius: 16px;
          border: 1px solid rgba(99, 102, 241, 0.1);
          transition: all 0.3s ease;

          &:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
            background: rgba(255, 255, 255, 1);
          }

          .stat-icon {
            width: 40px;
            height: 40px;
            color: #6366f1;

            svg {
              width: 100%;
              height: 100%;
            }
          }

          .stat-info {
            .stat-number {
              font-size: 1.25rem;
              font-weight: 700;
              color: #6366f1;
              margin-bottom: 0.25rem;
            }

            .stat-text {
              font-size: 0.9rem;
              color: #64748b;
              font-weight: 500;
            }
          }
        }
      }
    }
  }
}

// Modern Testimonials Slider
.modern-testimonials-slider {
  position: relative;
  padding: 2rem 0;

  .modern-testimonial-swiper {
    position: relative;
    overflow: hidden;
    border-radius: 20px;

    .swiper-wrapper {
      position: relative;
      transition-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .swiper-slide {
      flex-shrink: 0;
      width: 100%;
    }
  }

  .modern-slider-controls {
    position: relative;
    margin-top: 2rem;

    .navigation-wrapper {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 2rem;

      .modern-nav-btn {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: none;
        background: linear-gradient(135deg, #6366f1, #8b5cf6);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        cursor: pointer;
        box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
        margin-top: 60px;

        svg {
          width: 24px;
          height: 24px;
        }

        &:hover {
          transform: translateY(-2px);
          box-shadow: 0 8px 25px rgba(99, 102, 241, 0.4);
        }

        &:active {
          transform: translateY(0);
        }

        &:disabled {
          opacity: 0.5;
          cursor: not-allowed;
          transform: none;
        }
      }

      .pagination-wrapper {
        flex: 1;
        max-width: 200px;

        .modern-pagination {
          background: rgba(99, 102, 241, 0.1);
          border-radius: 10px;
          height: 6px;
          overflow: hidden;

          :global(.swiper-pagination-progressbar-fill) {
            background: linear-gradient(90deg, #6366f1, #8b5cf6);
            border-radius: inherit;
          }
        }
      }
    }
  }
}

// Modern Animations and Keyframes
@keyframes float {
  0%,
  100% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(-20px);
  }
}

@keyframes pulse {
  0%,
  100% {
    opacity: 0.3;
    transform: scale(1);
  }
  50% {
    opacity: 0.6;
    transform: scale(1.1);
  }
}

@keyframes shimmer {
  0%,
  100% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
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

@keyframes slideInFromLeft {
  from {
    opacity: 0;
    transform: translateX(-50px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes scaleIn {
  from {
    opacity: 0;
    transform: scale(0.9);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}

// WhyChooseUs matching animations
@keyframes border-glow {
  0%,
  100% {
    opacity: 0;
  }
  50% {
    opacity: 0.3;
  }
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

@keyframes line-expand {
  0% {
    transform: scaleX(0);
  }
  100% {
    transform: scaleX(1);
  }
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

@keyframes gradient-shift {
  0%,
  100% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
}

@keyframes underline-shimmer {
  0% {
    left: -100%;
  }
  100% {
    left: 100%;
  }
}

// Animation classes for modern effects
.hero-subtitle-background,
.testimonials-showcase-card,
.stat-preview {
  opacity: 0;
  transform: translateY(30px);
  transition: all 0.6s ease-out;

  &.animate-in {
    opacity: 1;
    transform: translateY(0);
  }
}

.hero-subtitle-background.animate-in {
  animation: scaleIn 0.8s ease-out forwards;
}

.testimonials-showcase-card.animate-in {
  animation: fadeInUp 0.8s ease-out forwards;
  animation-delay: 0.2s;
}

.stat-preview.animate-in {
  animation: slideInFromLeft 0.6s ease-out forwards;

  &:nth-child(2) {
    animation-delay: 0.1s;
  }

  &:nth-child(3) {
    animation-delay: 0.2s;
  }
}

// Responsive Design
@media (max-width: 768px) {
  .modern-testimonial-section {
    padding: 2rem 0;
  }

  .hero-subtitle-section {
    .hero-subtitle-background {
      padding: 1rem 2rem;
      margin: 0 1rem;

      .hero-sub-title-text {
        font-size: 1rem;
      }
    }
  }

  .testimonials-showcase-card {
    margin: 1rem;
    padding: 2rem 1.5rem;

    .modern-header {
      .header-content {
        .modern-title {
          font-size: 2rem;
        }

        .modern-subtitle {
          font-size: 1rem;
        }
      }

      .header-stats {
        grid-template-columns: 1fr;
        gap: 1rem;

        .stat-preview {
          padding: 1rem;

          .stat-icon {
            width: 32px;
            height: 32px;
          }
        }
      }
    }
  }

  .modern-slider-controls {
    .navigation-wrapper {
      gap: 1rem;

      .modern-nav-btn {
        width: 44px;
        height: 44px;

        svg {
          width: 20px;
          height: 20px;
        }
      }
    }
  }
}

@media (max-width: 768px) {
  .hero-subtitle-section {
    .hero-subtitle-background {
      padding: 20px 30px;
      margin: 0 1rem;

      .hero-sub-title-text {
        font-size: 16px;
        letter-spacing: 2px;
      }

      .hero-double-line {
        width: 60px;
      }
    }
  }
}

@media (max-width: 480px) {
  .hero-subtitle-section {
    .hero-subtitle-background {
      padding: 15px 25px;

      .hero-subtitle-indicator {
        gap: 10px;
        margin-bottom: 15px;

        .hero-double-line {
          width: 50px;
          height: 3px;
        }

        .hero-subtitle-dot {
          width: 12px;
          height: 12px;
        }
      }

      .hero-sub-title-text {
        font-size: 14px;
        letter-spacing: 1.5px;
      }
    }
  }

  .testimonials-showcase-card {
    .modern-header {
      .header-content {
        .modern-title {
          font-size: 1.8rem;
        }
      }
    }
  }
}

/* Isolate navigation controls */
.testimonial-prev-btn,
.testimonial-next-btn {
  position: relative !important;
  z-index: 10 !important;
  pointer-events: auto !important;
  background: rgba(255, 255, 255, 0.9) !important;
  border: 1px solid rgba(0, 0, 0, 0.1) !important;
  border-radius: 50% !important;
  width: 50px !important;
  height: 50px !important;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  transition: all 0.3s ease !important;

  &:hover {
    background: rgba(255, 255, 255, 1) !important;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important;
  }

  i {
    font-size: 16px !important;
    color: #333 !important;
  }
}

/* Isolate pagination */
.testimonial-pagination {
  position: relative !important;
  z-index: 5 !important;
  margin: 20px 0 !important;

  .swiper-pagination-progressbar {
    background: rgba(0, 0, 0, 0.2) !important;
    height: 4px !important;
    border-radius: 2px !important;

    .swiper-pagination-progressbar-fill {
      background: #007bff !important;
      border-radius: 2px !important;
    }
  }
}
</style>
