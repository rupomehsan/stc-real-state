<template>
  <!-- Mission Vision Core Professional Section -->
  <section class="mission-vision-professional-section my-5">
    <div class="container">
      <!-- Section Header -->
      <!-- <div class="row justify-content-center mb-5">
        <div class="col-xl-10">
          <div class="section-title-area text-center">
            <div class="subtitle-badge">
              <span class="badge-icon">
                <i class="fas fa-building"></i>
              </span>
              Our Foundation
            </div>
            <h2
              class="section-title fadeInUp wow text-uppercase"
              data-wow-delay="0.1s"
            >
              Mission, Vision & Values
            </h2>
            <div class="title-underline"></div>
            <p class="section-subtitle">
              The pillars that define our commitment to excellence and guide
              every project we undertake
            </p>
          </div>
        </div>
      </div> -->

      <!-- Professional Content Cards -->
      <div class="professional-content-wrapper responsive-wrapper">
        <!-- Mission Card -->
        <div
          class="professional-card mission-card fadeInUp wow"
          data-wow-delay="0.2s"
        >
          <div class="row g-4 align-items-center">
            <div class="col-lg-6">
              <div class="card-content-area">
                <div class="content-header">
                  <div class="content-icon mission-icon">
                    <i class="fas fa-bullseye"></i>
                  </div>
                  <div class="content-badge mission-badge">Our Mission</div>
                </div>
                <!-- <h3 class="content-title">On-Time Handover Excellence</h3> -->
                <div class="content-description">
                  <div
                    v-if="our_mission?.description"
                    v-html="our_mission.description"
                    class="fw-bolder"
                  ></div>
                  <div v-else>
                    <p>
                      At Sheltech, our unwavering client commitment is at the
                      heart of our business. We consistently deliver projects on
                      time, regardless of market conditions, showcasing our
                      dedication to meeting client expectations.
                    </p>
                    <p>
                      Our mission is to provide exceptional real estate
                      solutions that exceed customer expectations through timely
                      delivery, superior quality, and unmatched service
                      excellence.
                    </p>
                  </div>
                </div>
                <div class="content-features">
                  <div class="feature-item">
                    <i class="fas fa-clock"></i>
                    <span>Timely Delivery</span>
                  </div>
                  <div class="feature-item">
                    <i class="fas fa-handshake"></i>
                    <span>Commitment</span>
                  </div>
                  <div class="feature-item">
                    <i class="fas fa-award"></i>
                    <span>Quality </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div v-if="loading && !our_mission" class="skeleton-image-card">
                <div class="skeleton-image"></div>
                <div class="skeleton-decoration"></div>
              </div>
              <div v-else class="content-image-card">
                <div class="image-overlay"></div>
                <img
                  :src="
                    '/' +
                    (our_mission?.secondary_image ||
                      'assets/frontend/img/placeholder.jpg')
                  "
                  alt="Our Mission - On-Time Handover"
                  class="content-image"
                  @error="
                    $event.target.src = '/assets/frontend/img/placeholder.jpg'
                  "
                />
                <div class="image-decoration mission-decoration"></div>
                <div class="image-badge">
                  <i class="fas fa-bullseye"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Vision Card -->
        <div
          class="professional-card vision-card fadeInUp wow"
          data-wow-delay="0.4s"
        >
          <div class="row g-4 align-items-center">
            <div class="col-lg-6 order-lg-2">
              <div class="card-content-area">
                <div class="content-header">
                  <div class="content-icon vision-icon">
                    <i class="fas fa-eye"></i>
                  </div>
                  <div class="content-badge vision-badge">Our Vision</div>
                </div>
                <!-- <h3 class="content-title">Shaping Tomorrow's Living</h3> -->
                <div class="content-description">
                  <div
                    v-if="our_vision?.description"
                    v-html="our_vision.description"
                    class="fw-bolder"
                  ></div>
                  <div v-else>
                    <p>
                      To be the leading real estate developer in Bangladesh,
                      creating innovative and sustainable living spaces that
                      enhance the quality of life for our customers and
                      communities.
                    </p>
                    <p>
                      We envision a future where every project we undertake
                      contributes to building stronger, more vibrant communities
                      while setting new standards in architectural excellence
                      and environmental responsibility.
                    </p>
                  </div>
                </div>
                <div class="content-features">
                  <div class="feature-item">
                    <i class="fas fa-lightbulb"></i>
                    <span>Innovation</span>
                  </div>
                  <div class="feature-item">
                    <i class="fas fa-leaf"></i>
                    <span>Sustainability</span>
                  </div>
                  <div class="feature-item">
                    <i class="fas fa-users"></i>
                    <span>Community Focus</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 order-lg-1">
              <div v-if="loading && !our_vision" class="skeleton-image-card">
                <div class="skeleton-image"></div>
                <div class="skeleton-decoration vision"></div>
              </div>
              <div v-else class="content-image-card">
                <div class="image-overlay"></div>
                <img
                  :src="
                    '/' +
                    (our_vision?.secondary_image ||
                      'assets/frontend/img/placeholder.jpg')
                  "
                  alt="Our Vision - Future Innovation"
                  class="content-image"
                  @error="
                    $event.target.src = '/assets/frontend/img/placeholder.jpg'
                  "
                />
                <div class="image-decoration vision-decoration"></div>
                <div class="image-badge">
                  <i class="fas fa-eye"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Core Values Card -->
        <div
          class="professional-card values-card fadeInUp wow"
          data-wow-delay="0.6s"
        >
          <div class="row g-4 align-items-center">
            <div class="col-lg-6">
              <div class="card-content-area">
                <div class="content-header">
                  <div class="content-icon values-icon">
                    <i class="fas fa-gem"></i>
                  </div>
                  <div class="content-badge values-badge">Our Core Values</div>
                </div>
                <!-- <h3 class="content-title">Foundation of Excellence</h3> -->
                <div class="content-description">
                  <div
                    v-if="core_values?.description"
                    v-html="core_values.description"
                    class="fw-bolder"
                  ></div>
                  <div v-else>
                    <p>
                      <strong>Integrity:</strong> We maintain the highest
                      ethical standards in all our business practices, building
                      trust through transparency and honest communication.
                    </p>
                    <p>
                      <strong>Innovation:</strong> We embrace cutting-edge
                      technologies and creative solutions to deliver superior
                      living experiences.
                    </p>
                    <p>
                      <strong>Quality:</strong> We never compromise on quality,
                      ensuring every project meets and exceeds industry
                      standards.
                    </p>
                    <p>
                      <strong>Customer Satisfaction:</strong> Our clients'
                      happiness and satisfaction remain our top priority in
                      every interaction.
                    </p>
                  </div>
                </div>
                <div class="content-features">
                  <div class="feature-item">
                    <i class="fas fa-shield-alt"></i>
                    <span>Integrity</span>
                  </div>
                  <div class="feature-item">
                    <i class="fas fa-star"></i>
                    <span>Quality</span>
                  </div>
                  <div class="feature-item">
                    <i class="fas fa-heart"></i>
                    <span>Customer First</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div v-if="loading && !core_values" class="skeleton-image-card">
                <div class="skeleton-image"></div>
                <div class="skeleton-decoration core-values"></div>
              </div>
              <div v-else class="content-image-card">
                <div class="image-overlay"></div>
                <img
                  :src="
                    '/' +
                    (core_values?.secondary_image ||
                      'assets/frontend/img/placeholder.jpg')
                  "
                  alt="Our Core Values - Excellence Foundation"
                  class="content-image"
                  @error="
                    $event.target.src = '/assets/frontend/img/placeholder.jpg'
                  "
                />
                <div class="image-decoration values-decoration"></div>
                <div class="image-badge">
                  <i class="fas fa-gem"></i>
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
import { store as mission_vision_store } from "./Store/mission_vision_store.js";
import { mapActions, mapState } from "pinia";

export default {
  name: "MissionVisionCore",

  async created() {
    // Fetch all data concurrently for better performance
    try {
      await Promise.all([
        this.fetch_mission(),
        this.fetch_vision(),
        this.fetch_core_values(),
      ]);
      console.log("Data loaded:", {
        mission: this.our_mission,
        vision: this.our_vision,
        values: this.core_values,
      });

      // Ensure content visibility after data is loaded
      this.$nextTick(() => {
        this.ensureContentVisibility();
      });
    } catch (error) {
      console.error("Error loading data:", error);
      // Even if data loading fails, ensure content structure is visible
      this.$nextTick(() => {
        this.ensureContentVisibility();
      });
    }
  },

  mounted() {
    // Initialize component
    console.log("MissionVisionCore component mounted");
    console.log("Data:", {
      mission: this.our_mission,
      vision: this.our_vision,
      values: this.core_values,
    });

    // Mobile animation fallback
    this.initializeMobileAnimations();
  },

  methods: {
    ...mapActions(mission_vision_store, [
      "fetch_mission",
      "fetch_vision",
      "fetch_core_values",
    ]),

    // Mobile animation fallback to ensure content visibility
    initializeMobileAnimations() {
      // Check if we're on a mobile device
      const isMobile = window.innerWidth <= 768;
      const isSlowConnection =
        navigator.connection &&
        navigator.connection.effectiveType &&
        (navigator.connection.effectiveType === "slow-2g" ||
          navigator.connection.effectiveType === "2g");

      if (isMobile || isSlowConnection) {
        // Add a delay to ensure DOM is ready, then make content visible
        setTimeout(() => {
          const fadeElements = document.querySelectorAll(".fadeInUp");
          fadeElements.forEach((element) => {
            // Force visibility on mobile or slow connections
            element.style.opacity = "1";
            element.style.transform = "translateY(0)";
            element.classList.add("animated");
          });
        }, 100);
      }

      // Fallback observer for elements that might not animate
      const observer = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              const element = entry.target;
              // Ensure element becomes visible when in viewport
              element.style.opacity = "1";
              element.style.transform = "translateY(0)";
              element.classList.add("animated");
              observer.unobserve(element);
            }
          });
        },
        {
          threshold: 0.1,
          rootMargin: "50px",
        }
      );

      // Observe all fadeInUp elements
      setTimeout(() => {
        const fadeElements = document.querySelectorAll(
          ".fadeInUp:not(.animated)"
        );
        fadeElements.forEach((element) => observer.observe(element));
      }, 200);
    },

    // Ensure content is always visible, especially on mobile
    ensureContentVisibility() {
      const isMobileDevice =
        /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
          navigator.userAgent
        );
      const isSmallScreen = window.innerWidth <= 768;

      if (isMobileDevice || isSmallScreen) {
        // Force immediate visibility on mobile devices
        setTimeout(() => {
          const allFadeElements = this.$el.querySelectorAll(".fadeInUp");
          allFadeElements.forEach((element) => {
            element.style.setProperty("opacity", "1", "important");
            element.style.setProperty(
              "transform",
              "translateY(0)",
              "important"
            );
            element.classList.add("animated", "mobile-optimized");
          });
        }, 50);
      }
    },
  },

  computed: {
    ...mapState(mission_vision_store, [
      "our_mission",
      "our_vision",
      "core_values",
      "loading",
      "error",
    ]),

    // Check if any data is available
    hasAnyData() {
      return this.our_mission || this.our_vision || this.core_values;
    },
  },
};
</script>

<style>
@import "./Css/professional-style.css";
</style>
