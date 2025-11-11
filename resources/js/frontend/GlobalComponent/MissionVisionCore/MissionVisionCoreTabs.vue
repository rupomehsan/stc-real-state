<template>
  <!-- Mission Vision Core Slider Section -->
  <section class="mission-vision-slider-section my-5">
    <div class="container">
      <div class="row justify-content-center mb-2 mb-md-3 mb-lg-5">
        <div class="col-xl-10">
          <div class="section-title-area text-center d-none">
            <div class="subtitle-badge">
              <span class="badge-icon"></span>
              An Inherent Legacy
            </div>
            <h2
              class="section-title fadeInUp wow text-uppercase"
              data-wow-delay="0.1s"
            >
              Our Objectives
            </h2>
            <div class="title-underline"></div>
          </div>

          <!-- Navigation Tabs -->
          <div class="slider-navigation">
            <div class="nav-tabs-wrapper">
              <button
                v-for="(tab, index) in tabs"
                :key="tab.id"
                @click="setActiveTab(index)"
                :class="['nav-tab', { active: activeTabIndex === index }]"
              >
                <div class="tab-icon">
                  <i :class="tab.icon"></i>
                </div>
                <div class="tab-content">
                  <h4>{{ tab.title }}</h4>
                  <p>{{ tab.subtitle }}</p>
                </div>
                <div class="tab-indicator"></div>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Slider Content Area -->
      <div class="slider-content-wrapper">
        <div class="slider-container" ref="sliderContainer">
          <div class="slider-track" :style="{ transform: slideTransform }">
            <!-- Mission Slide -->
            <div class="slider-slide mission-slide d-flex first-item">
              <div class="row g-1 g-md-3 g-lg-5">
                <div class="col-lg-6">
                  <div v-if="isMissionLoading" class="skeleton-image-card">
                    <div class="skeleton-image"></div>
                    <div class="skeleton-decoration"></div>
                  </div>
                  <div v-else class="content-image-card">
                    <div class="image-overlay"></div>
                    <img
                      :src="'/' + our_mission?.secondary_image"
                      alt="Our Mission - On-Time Handover"
                      class="content-image"
                      @error="
                        $event.target.src =
                          '/assets/frontend/img/placeholder.jpg'
                      "
                    />
                    <div class="image-decoration mission-decoration"></div>
                    <div class="image-badge">
                      <i class="fas fa-bullseye"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 px-1 px-md-3 px-lg-5">
                  <div v-if="isMissionLoading" class="skeleton-content-area">
                    <div class="skeleton-icon"></div>
                    <div class="skeleton-subtitle"></div>
                    <div class="skeleton-description">
                      <div class="skeleton-text-line"></div>
                      <div class="skeleton-text-line"></div>
                      <div class="skeleton-text-line"></div>
                      <div class="skeleton-text-line short"></div>
                    </div>
                    <div class="skeleton-button"></div>
                  </div>
                  <div v-else class="content-text-area">
                    <div class="content-header">
                      <div class="content-icon mission-icon">
                        <i class="fas fa-bullseye"></i>
                      </div>
                      <div class="content-badge">Mission</div>
                    </div>
                    <h3 class="content-title">On-Time Handover</h3>
                    <div class="content-description">
                      <div
                        v-if="our_mission?.description"
                        v-html="our_mission.description"
                      ></div>
                      <div v-else>
                        <p>
                          At Sheltech, our unwavering client commitment is at
                          the heart of our business. We consistently deliver
                          projects on time, regardless of market conditions,
                          showcasing our dedication to meeting client
                          expectations.
                        </p>
                        <p>
                          Our mission is to provide exceptional real estate
                          solutions that exceed customer expectations through
                          timely delivery, superior quality, and unmatched
                          service excellence.
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
                        <span>Client Commitment</span>
                      </div>
                      <div class="feature-item">
                        <i class="fas fa-award"></i>
                        <span>Quality Excellence</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Vision Slide -->
            <div class="slider-slide vision-slide d-flex second-item">
              <div class="row g-1 g-md-3 g-lg-5">
                <div class="col-lg-6 order-lg-2">
                  <div v-if="isVisionLoading" class="skeleton-image-card">
                    <div class="skeleton-image"></div>
                    <div class="skeleton-decoration vision"></div>
                  </div>
                  <div v-else class="content-image-card">
                    <div class="image-overlay"></div>
                    <img
                      :src="'/' + our_vision?.secondary_image"
                      alt="Our Vision - Future Innovation"
                      class="content-image"
                      @error="
                        $event.target.src =
                          '/assets/frontend/img/placeholder.jpg'
                      "
                    />
                    <div class="image-decoration vision-decoration"></div>
                    <div class="image-badge">
                      <i class="fas fa-eye"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 order-lg-1 px-1 px-md-3 px-lg-5">
                  <div v-if="isVisionLoading" class="skeleton-content-area">
                    <div class="skeleton-icon vision"></div>
                    <div class="skeleton-subtitle"></div>
                    <div class="skeleton-description">
                      <div class="skeleton-text-line"></div>
                      <div class="skeleton-text-line"></div>
                      <div class="skeleton-text-line"></div>
                      <div class="skeleton-text-line short"></div>
                    </div>
                    <div class="skeleton-button vision"></div>
                  </div>
                  <div v-else class="content-text-area">
                    <div class="content-header">
                      <div class="content-icon vision-icon">
                        <i class="fas fa-eye"></i>
                      </div>
                      <div class="content-badge vision-badge">Vision</div>
                    </div>
                    <h3 class="content-title">Shaping Tomorrow's Living</h3>
                    <div class="content-description">
                      <div
                        v-if="our_vision?.description"
                        v-html="our_vision.description"
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
                          contributes to building stronger, more vibrant
                          communities while setting new standards in
                          architectural excellence and environmental
                          responsibility.
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
              </div>
            </div>

            <!-- Core Values Slide -->
            <div class="slider-slide core-values-slide d-flex">
              <div class="row g-1 g-md-3 g-lg-5">
                <div class="col-lg-6">
                  <div v-if="isCoreValuesLoading" class="skeleton-image-card">
                    <div class="skeleton-image"></div>
                    <div class="skeleton-decoration core-values"></div>
                  </div>
                  <div v-else class="content-image-card">
                    <div class="image-overlay"></div>
                    <img
                      :src="'/' + core_values?.secondary_image"
                      alt="Our Core Values - Excellence Foundation"
                      class="content-image"
                      @error="
                        $event.target.src =
                          '/assets/frontend/img/placeholder.jpg'
                      "
                    />
                    <div class="image-decoration core-values-decoration"></div>
                    <div class="image-badge">
                      <i class="fas fa-gem"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 px-1 px-md-3 px-lg-5">
                  <div v-if="isCoreValuesLoading" class="skeleton-content-area">
                    <div class="skeleton-icon core-values"></div>
                    <div class="skeleton-subtitle"></div>
                    <div class="skeleton-description">
                      <div class="skeleton-text-line"></div>
                      <div class="skeleton-text-line"></div>
                      <div class="skeleton-text-line"></div>
                      <div class="skeleton-text-line short"></div>
                    </div>
                    <div class="skeleton-button core-values"></div>
                  </div>
                  <div v-else class="content-text-area">
                    <div class="content-header">
                      <div class="content-icon core-values-icon">
                        <i class="fas fa-gem"></i>
                      </div>
                      <div class="content-badge core-values-badge">Values</div>
                    </div>
                    <h3 class="content-title">Foundation of Excellence</h3>
                    <div class="content-description">
                      <div
                        v-if="core_values?.description"
                        v-html="core_values.description"
                      ></div>
                      <div v-else>
                        <p>
                          <strong>Integrity:</strong> We maintain the highest
                          ethical standards in all our business practices,
                          building trust through transparency and honest
                          communication.
                        </p>
                        <p>
                          <strong>Innovation:</strong> We embrace cutting-edge
                          technologies and creative solutions to deliver
                          superior living experiences.
                        </p>
                        <p>
                          <strong>Quality:</strong> We never compromise on
                          quality, ensuring every project meets and exceeds
                          industry standards.
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

  data() {
    return {
      activeTabIndex: 0,
      tabs: [
        {
          id: "mission",
          title: "Our Mission",
          subtitle: "On-Time Handover",
          icon: "fas fa-bullseye",
        },
        {
          id: "vision",
          title: "Our Vision",
          subtitle: "Future Innovation",
          icon: "fas fa-eye",
        },
        {
          id: "values",
          title: "Core Values",
          subtitle: "Foundation of Excellence",
          icon: "fas fa-gem",
        },
      ],
    };
  },

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
    } catch (error) {
      console.error("Error loading data:", error);
    }
  },

  mounted() {
    // Initialize
    console.log("Component mounted. Active tab:", this.activeTabIndex);
    console.log("Tabs:", this.tabs);
    console.log("Data:", {
      mission: this.our_mission,
      vision: this.our_vision,
      values: this.core_values,
    });

    // Auto-sliding disabled - only manual click navigation
  },

  methods: {
    ...mapActions(mission_vision_store, [
      "fetch_mission",
      "fetch_vision",
      "fetch_core_values",
    ]),

    async setActiveTab(index) {
      if (index >= 0 && index < this.tabs.length) {
        this.activeTabIndex = index;

        // Ensure data is loaded for the active tab
        const tabId = this.tabs[index].id;
        if (tabId === "mission" && !this.our_mission) {
          await this.fetch_mission();
        } else if (tabId === "vision" && !this.our_vision) {
          await this.fetch_vision();
        } else if (tabId === "values" && !this.core_values) {
          await this.fetch_core_values();
        }

        // No auto-slide functionality - manual navigation only
      }
    },

    // Manual navigation methods removed - using only setActiveTab for click navigation
  },

  watch: {
    activeTabIndex(newIndex) {
      console.log(
        "Active tab changed to:",
        newIndex,
        this.tabs[newIndex]?.title
      );
      console.log("Transform:", this.slideTransform);
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

    // Individual loading states for better UX
    isMissionLoading() {
      return this.loading && this.activeTabIndex === 0;
    },

    isVisionLoading() {
      return this.loading && this.activeTabIndex === 1;
    },

    isCoreValuesLoading() {
      return this.loading && this.activeTabIndex === 2;
    },

    // Check if any data is available
    hasAnyData() {
      return this.our_mission || this.our_vision || this.core_values;
    },

    currentTab() {
      return this.tabs[this.activeTabIndex];
    },

    currentSlideData() {
      const tabId = this.tabs[this.activeTabIndex]?.id;
      if (tabId === "mission") return this.our_mission;
      if (tabId === "vision") return this.our_vision;
      if (tabId === "values") return this.core_values;
      return null;
    },

    slideTransform() {
      return `translateX(-${this.activeTabIndex * 33.333333}%)`;
    },
  },
};
</script>

<style scoped>
/* Mission Vision Slider Section */
.mission-vision-slider-section {
  padding: 40px 0;
  position: relative;
  background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
  overflow: hidden;
  /* min-height: 100vh; */
  display: flex;
  align-items: center;
}

/* Mobile optimizations for main section */
@media (max-width: 576px) {
  .mission-vision-slider-section {
    padding: 20px 0 !important;
    min-height: auto !important;
  }
}

.mission-vision-slider-section::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="%23e9ecef" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
  opacity: 0.3;
  z-index: 1;
}

.container {
  position: relative;
  z-index: 2;
  width: 100%;
}

/* Section Title Area */
.section-title-area {
  margin-bottom: 20px;
}

@media (max-width: 576px) {
  .section-title-area {
    margin-bottom: 8px !important;
  }
}

.subtitle-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: linear-gradient(135deg, #af212f, #ff4136);
  color: white;
  padding: 8px 20px;
  border-radius: 25px;
  font-size: 14px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  margin-bottom: 20px;
  box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
}

@media (max-width: 576px) {
  .subtitle-badge {
    font-size: 11px !important;
    padding: 5px 12px !important;
    margin-bottom: 12px !important;
    gap: 6px !important;
  }
}

.badge-icon::before {
  content: "";
  width: 6px;
  height: 6px;
  background: rgba(255, 255, 255, 0.8);
  border-radius: 50%;
  display: block;
}

.section-title {
  font-size: clamp(28px, 4vw, 42px);
  font-weight: 700;
  color: #1e293b;
  line-height: 1.2;
  margin-bottom: 15px;
  background: linear-gradient(135deg, #1e293b, #3b82f6);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

@media (max-width: 576px) {
  .section-title {
    font-size: clamp(24px, 6vw, 32px) !important;
    margin-bottom: 10px !important;
  }
}

.title-underline {
  width: 80px;
  height: 4px;
  background: linear-gradient(135deg, #af212f, #ff4136);
  margin: 0 auto;
  border-radius: 2px;
}

/* Slider Navigation */
.slider-navigation {
  margin-top: 20px;
  margin-bottom: 20px;
}

@media (max-width: 576px) {
  .slider-navigation {
    margin-top: 8px !important;
    margin-bottom: 8px !important;
  }
}

.nav-tabs-wrapper {
  display: flex;
  justify-content: center;
  gap: 15px;
  flex-wrap: wrap;
}

.nav-tab {
  background: rgba(255, 255, 255, 0.9);
  border: 2px solid transparent;
  border-radius: 20px;
  padding: 15px 25px;
  cursor: pointer;
  transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
  position: relative;
  overflow: hidden;
  backdrop-filter: blur(10px);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  display: flex;
  align-items: center;
  gap: 12px;
  min-width: 220px;
}

.nav-tab:hover {
  transform: translateY(-5px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
  border-color: rgba(175, 33, 47, 0.3);
}

.nav-tab.active {
  background: linear-gradient(135deg, #af212f, #ff4136);
  color: white;
  transform: translateY(-5px);
  box-shadow: 0 20px 40px rgba(175, 33, 47, 0.4);
  margin-top: 10px;
}

.tab-icon {
  width: 50px;
  height: 50px;
  border-radius: 15px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(175, 33, 47, 0.1);
  transition: all 0.3s ease;
}

.nav-tab.active .tab-icon {
  background: rgba(255, 255, 255, 0.2);
}

.tab-icon i {
  font-size: 20px;
  color: #af212f;
  transition: all 0.3s ease;
}

.nav-tab.active .tab-icon i {
  color: white;
}

.tab-content h4 {
  font-size: 18px;
  font-weight: 700;
  margin: 0 0 5px 0;
  color: #1e293b;
  transition: color 0.3s ease;
}

.nav-tab.active .tab-content h4 {
  color: white;
}

.tab-content p {
  font-size: 14px;
  margin: 0;
  color: #64748b;
  font-weight: 500;
  transition: color 0.3s ease;
}

.nav-tab.active .tab-content p {
  color: rgba(255, 255, 255, 0.9);
}

.tab-indicator {
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%) scaleX(0);
  width: 80%;
  height: 3px;
  background: linear-gradient(135deg, #af212f, #ff4136);
  border-radius: 2px 2px 0 0;
  transition: transform 0.3s ease;
}

.nav-tab.active .tab-indicator {
  transform: translateX(-50%) scaleX(1);
  background: white;
}

/* Slider Content Wrapper */
/* Slider Content Wrapper */
.slider-content-wrapper {
  background: rgba(255, 255, 255, 0.9);
  backdrop-filter: blur(15px);
  border-radius: 25px;
  padding: 20px 20px 15px 20px;
  box-shadow: 0 30px 60px rgba(0, 0, 0, 0.12),
    0 0 0 1px rgba(255, 255, 255, 0.6);
  border: 1px solid rgba(255, 255, 255, 0.3);
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
  margin-bottom: 0;
}

/* Mobile optimizations for slider content */
@media (max-width: 576px) {
  .slider-content-wrapper {
    border-radius: 15px !important;
    padding: 15px 10px !important;
    margin: 0 5px !important;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08) !important;
  }
}

.slider-container {
  width: 100%;
  overflow: hidden;
  border-radius: 20px;
  height: auto;
  position: relative;
}

.slider-track {
  display: flex;
  transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  width: 300%; /* 3 slides */
}

.slider-slide {
  width: 33.333333%;
  flex-shrink: 0;
  opacity: 1;
  transition: opacity 0.6s ease;
  height: auto;
  padding: 5px;
  box-sizing: border-box;
}

@media (max-width: 576px) {
  .slider-slide {
    padding: 0 !important;
  }

  /* Further reduce column gaps on mobile */
  .slider-slide .row {
    --bs-gutter-x: 0.25rem !important;
    margin-left: 0 !important;
    margin-right: 0 !important;
  }

  .slider-slide .col-lg-6 {
    padding-left: 0.125rem !important;
    padding-right: 0.125rem !important;
  }
}

/* Content Header */
.content-header {
  display: flex;
  align-items: center;
  gap: 15px;
  margin-bottom: 15px;
}

@media (max-width: 576px) {
  .content-header {
    gap: 8px !important;
    margin-bottom: 8px !important;
  }
}

.content-badge {
  background: linear-gradient(135deg, #af212f, #ff4136);
  color: white;
  padding: 6px 15px;
  border-radius: 20px;
  font-size: 12px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.vision-badge {
  background: linear-gradient(135deg, #af212f, #ff4136);
}

.core-values-badge {
  background: linear-gradient(135deg, #af212f, #ff4136);
}

/* Content Title */
.content-title {
  font-size: 32px;
  font-weight: 700;
  color: #1e293b;
  margin-bottom: 15px;
  line-height: 1.2;
  background: linear-gradient(135deg, #1e293b, #3b82f6);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

@media (max-width: 576px) {
  .content-title {
    font-size: 20px !important;
    margin-bottom: 8px !important;
    line-height: 1.3 !important;
  }
}

/* Content Features */
.content-features {
  display: flex;
  flex-wrap: wrap;
  gap: 15px;
  margin-top: 15px;
  margin-bottom: 0;
}

/* Remove bottom spacing from last elements */
.content-text-area > *:last-child {
  margin-bottom: 0 !important;
}

.slider-slide > *:last-child {
  margin-bottom: 0 !important;
}

@media (max-width: 576px) {
  .content-features {
    gap: 6px !important;
    margin-top: 8px !important;
    margin-bottom: 0 !important;
  }
}

.feature-item {
  display: flex;
  align-items: center;
  gap: 8px;
  background: rgba(175, 33, 47, 0.05);
  padding: 8px 16px;
  border-radius: 25px;
  border: 2px solid rgba(175, 33, 47, 0.1);
  transition: all 0.3s ease;
}

.feature-item:hover {
  background: rgba(175, 33, 47, 0.1);
  border-color: rgba(175, 33, 47, 0.2);
  transform: translateY(-2px);
}

.feature-item i {
  color: #af212f;
  font-size: 14px;
}

.feature-item span {
  font-weight: 600;
  color: #1e293b;
  font-size: 14px;
}

/* Image Badge */
.image-badge {
  position: absolute;
  top: 20px;
  right: 20px;
  width: 60px;
  height: 60px;
  background: linear-gradient(135deg, #af212f, #ff4136);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 3;
  box-shadow: 0 10px 25px rgba(175, 33, 47, 0.4);
  animation: pulse 2s infinite;
}

.image-badge i {
  color: white;
  font-size: 20px;
}

/* Image Card Styling */
.content-image-card {
  position: relative;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15),
    0 0 0 1px rgba(255, 255, 255, 0.1);
  transform: perspective(1000px) rotateY(-5deg);
  transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
}

.vision-section .content-image-card {
  transform: perspective(1000px) rotateY(5deg);
}

.content-image-card:hover {
  transform: perspective(1000px) rotateY(0deg) scale(1.02);
  box-shadow: 0 35px 70px rgba(0, 0, 0, 0.2), 0 0 0 1px rgba(255, 255, 255, 0.1);
}

.content-image {
  width: 100%;
  height: auto;
  max-height: 400px;
  object-fit: cover;
  object-position: center;
  transition: transform 0.6s ease;
}

/* Mobile optimization for images */
@media (max-width: 576px) {
  .content-image {
    min-height: 250px !important;
  }
}

.content-image-card:hover .content-image {
  transform: scale(1.05);
}

.image-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(
    135deg,
    rgba(59, 130, 246, 0.1) 0%,
    rgba(29, 78, 216, 0.2) 100%
  );
  z-index: 1;
  transition: opacity 0.4s ease;
}

.content-image-card:hover .image-overlay {
  opacity: 0.7;
}

.image-decoration {
  position: absolute;
  top: -10px;
  right: -10px;
  width: 80px;
  height: 80px;
  background: linear-gradient(135deg, #af212f, #ff4136);
  border-radius: 50%;
  z-index: 2;
  opacity: 0.9;
  animation: pulse 2s infinite;
}

.vision-decoration {
  background: linear-gradient(135deg, #af212f, #ff4136);
  top: -10px;
  left: -10px;
}

.core-values-decoration {
  background: linear-gradient(135deg, #af212f, #ff4136);
}

@keyframes pulse {
  0%,
  100% {
    transform: scale(1);
    opacity: 0.9;
  }
  50% {
    transform: scale(1.1);
    opacity: 0.7;
  }
}

/* Text Area Styling */
.content-text-area {
  padding: 20px 0;
  opacity: 0;
  animation: fadeInUp 0.6s ease forwards;
}

@media (max-width: 576px) {
  .content-text-area {
    padding: 8px 0 !important;
  }
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.content-icon {
  width: 70px;
  height: 70px;
  background: linear-gradient(135deg, #af212f, #ff4136);
  border-radius: 18px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 10px 25px rgba(175, 33, 47, 0.3);
  position: relative;
  flex-shrink: 0;
}

.content-icon::before {
  content: "";
  position: absolute;
  inset: -2px;
  background: linear-gradient(135deg, #af212f, #ff4136);
  border-radius: 20px;
  z-index: -1;
  filter: blur(10px);
  opacity: 0.7;
}

.mission-icon {
  background: linear-gradient(135deg, #af212f, #ff4136);
}

.vision-icon {
  background: linear-gradient(135deg, #af212f, #ff4136);
}

.core-values-icon {
  background: linear-gradient(135deg, #af212f, #ff4136);
}

.content-icon i {
  font-size: 28px;
  color: white;
}

.content-subtitle {
  font-size: 24px;
  font-weight: 700;
  color: #1e293b;
  margin-bottom: 20px;
  position: relative;
}

.content-subtitle::after {
  content: "";
  position: absolute;
  bottom: -8px;
  left: 0;
  width: 50px;
  height: 3px;
  background: linear-gradient(135deg, #af212f, #ff4136);
  border-radius: 2px;
}

.vision-section .content-subtitle::after {
  background: linear-gradient(135deg, #af212f, #ff4136);
}

.core-values-section .content-subtitle::after {
  background: linear-gradient(135deg, #af212f, #ff4136);
}

.content-description {
  font-size: 16px;
  line-height: 1.6;
  color: #64748b;
  margin-bottom: 15px;
  white-space: pre-line;
}

@media (max-width: 576px) {
  .content-description {
    font-size: 14px !important;
    line-height: 1.5 !important;
    margin-bottom: 8px !important;
  }

  .content-description p {
    margin-bottom: 6px !important;
  }

  .content-description p:last-child {
    margin-bottom: 0 !important;
  }
}

/* Modern Button Styling */
.modern-btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 15px 30px;
  border-radius: 50px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
  position: relative;
  overflow: hidden;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}

.primary-btn {
  background: linear-gradient(135deg, #af212f, #ff4136);
  color: white;
  border: 2px solid transparent;
}

.secondary-btn {
  background: linear-gradient(135deg, #af212f, #ff4136);
  color: white;
  border: 2px solid transparent;
}

.accent-btn {
  background: linear-gradient(135deg, #af212f, #ff4136);
  color: white;
  border: 2px solid transparent;
}

.modern-btn::before {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    90deg,
    transparent,
    rgba(255, 255, 255, 0.2),
    transparent
  );
  transition: left 0.6s ease;
}

.modern-btn:hover::before {
  left: 100%;
}

.modern-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
}

.modern-btn i {
  transition: transform 0.3s ease;
}

.modern-btn:hover i {
  transform: translateX(5px);
}

/* Responsive Design */
@media (max-width: 991px) {
  .mission-vision-slider-section {
    padding: 20px 0;
    min-height: 80vh;
  }

  .section-title-area {
    margin-bottom: 15px;
  }

  .slider-navigation {
    margin-top: 15px;
    margin-bottom: 15px;
  }

  .slider-content-wrapper {
    padding: 12px;
    border-radius: 20px;
  }

  .nav-tabs-wrapper {
    flex-direction: column;
    align-items: center;
    gap: 10px;
  }

  .nav-tab {
    min-width: 280px;
    padding: 12px 18px;
  }

  .content-image-card {
    transform: none;
    margin-bottom: 20px;
  }

  .content-image {
    height: auto;
    min-height: 300px;
  }

  .content-title {
    font-size: 28px;
    margin-bottom: 12px;
  }

  .content-text-area {
    padding: 15px 0;
  }

  .content-features {
    gap: 10px;
    margin-top: 12px;
  }

  .feature-item {
    padding: 8px 14px;
  }

  .slider-slide {
    padding: 3px;
  }
}

@media (max-width: 768px) {
  .first-item .content-text-area {
    margin-top: 0px;
  }
  .second-item .content-text-area {
    margin-top: 0px;
  }
  .mission-vision-slider-section {
    padding: 15px 0;
  }

  .row.justify-content-center.mb-5 {
    margin-bottom: 1.5rem !important;
  }

  .section-title-area {
    margin-bottom: 12px;
  }

  .slider-navigation {
    margin-top: 12px;
    margin-bottom: 12px;
  }

  .slider-content-wrapper {
    padding: 10px;
  }

  .content-header {
    flex-direction: column;
    align-items: flex-start;
    gap: 8px;
    margin-bottom: 12px;
  }

  .slider-track {
    width: 300%;
  }

  .content-description {
    margin-bottom: 12px;
  }

  .content-features {
    flex-direction: column;
    gap: 8px;
  }

  .slider-slide {
    padding: 2px;
  }

  .row.g-5 {
    --bs-gutter-x: 0.75rem !important;
    --bs-gutter-y: 0.75rem !important;
  }

  .row.align-items-center.g-5 {
    --bs-gutter-x: 0.75rem !important;
    --bs-gutter-y: 0.75rem !important;
    row-gap: 0.75rem !important;
  }
}

@media (max-width: 576px) {
  .mission-vision-slider-section {
    padding: 10px 0 15px 0;
    min-height: auto;
  }

  /* Container padding override */
  .mission-vision-slider-section .container {
    padding-left: 10px !important;
    padding-right: 10px !important;
  }

  /* Row margin override */
  .row.justify-content-center.mb-5 {
    margin-bottom: 1rem !important;
  }

  .row.g-5 {
    --bs-gutter-x: 0.25rem !important;
    --bs-gutter-y: 0.5rem !important;
  }

  .section-title-area {
    margin-bottom: 8px;
  }

  .subtitle-badge {
    font-size: 11px;
    padding: 5px 12px;
    margin-bottom: 12px;
  }

  .section-title {
    font-size: clamp(24px, 6vw, 32px);
    margin-bottom: 10px;
  }

  .title-underline {
    width: 60px;
    height: 3px;
  }

  .slider-navigation {
    margin-top: 8px;
    margin-bottom: 8px;
  }

  .nav-tabs-wrapper {
    gap: 6px;
  }

  .slider-content-wrapper {
    padding: 8px 6px 6px 6px;
    border-radius: 15px;
    margin-bottom: 0;
  }

  .slider-slide {
    padding: 0;
  }

  /* Column padding override */
  .col-lg-6 {
    padding-left: 6px !important;
    padding-right: 6px !important;
  }

  .col-lg-6.px-lg-5 {
    padding-left: 6px !important;
    padding-right: 6px !important;
  }

  .nav-tab {
    min-width: 100%;
    padding: 10px 15px;
    gap: 10px;
    border-radius: 12px;
  }

  .tab-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
  }

  .tab-icon i {
    font-size: 16px;
  }

  .tab-content h4 {
    font-size: 15px;
    margin-bottom: 2px;
  }

  .tab-content p {
    font-size: 12px;
  }

  .content-image-card {
    margin-bottom: 8px;
    border-radius: 12px;
  }

  .content-image {
    height: auto;
    min-height: 200px;
  }

  /* Additional row gap reduction */
  .row.align-items-center.g-5 {
    --bs-gutter-x: 0.25rem !important;
    --bs-gutter-y: 0.5rem !important;
    row-gap: 0.5rem !important;
  }

  .image-badge {
    width: 40px;
    height: 40px;
    top: 8px;
    right: 8px;
  }

  .image-badge i {
    font-size: 16px;
  }

  .image-decoration {
    width: 60px;
    height: 60px;
  }

  .content-text-area {
    padding: 8px 0;
  }

  .content-header {
    gap: 8px;
    margin-bottom: 8px;
  }

  .content-icon {
    width: 50px;
    height: 50px;
    border-radius: 12px;
  }

  .content-icon i {
    font-size: 20px;
  }

  .content-badge {
    padding: 4px 12px;
    font-size: 11px;
    border-radius: 15px;
  }

  .content-title {
    font-size: 20px;
    margin-bottom: 8px;
    line-height: 1.3;
  }

  .content-description {
    font-size: 14px;
    line-height: 1.5;
    margin-bottom: 8px;
  }

  .content-features {
    gap: 6px;
    margin-top: 8px;
    margin-bottom: 0;
  }

  .feature-item {
    padding: 6px 10px;
    font-size: 12px;
    border-radius: 20px;
  }

  .feature-item i {
    font-size: 12px;
  }
}

/* Skeleton Loading Styles */
.skeleton-shimmer {
  background: linear-gradient(
    90deg,
    rgba(240, 240, 240, 0.8) 0%,
    rgba(255, 255, 255, 0.9) 50%,
    rgba(240, 240, 240, 0.8) 100%
  );
  background-size: 200% 100%;
  animation: shimmer 1.5s infinite;
}

@keyframes shimmer {
  0% {
    background-position: -200% 0;
  }
  100% {
    background-position: 200% 0;
  }
}

/* Skeleton Badge */
.skeleton-subtitle-badge {
  display: inline-block;
  margin-bottom: 20px;
}

.skeleton-badge-content {
  width: 140px;
  height: 32px;
  background: #e2e8f0;
  border-radius: 25px;
  position: relative;
  overflow: hidden;
}

.skeleton-badge-content::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    90deg,
    transparent 0%,
    rgba(255, 255, 255, 0.4) 50%,
    transparent 100%
  );
  background-size: 200% 100%;
  animation: shimmer 1.5s infinite;
}

/* Skeleton Title */
.skeleton-title {
  margin-bottom: 15px;
}

.skeleton-title-line {
  height: 40px;
  background: #e2e8f0;
  border-radius: 8px;
  margin-bottom: 10px;
  position: relative;
  overflow: hidden;
}

.skeleton-title-line.short {
  width: 70%;
  margin: 0 auto;
}

.skeleton-title-line::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    90deg,
    transparent 0%,
    rgba(255, 255, 255, 0.4) 50%,
    transparent 100%
  );
  background-size: 200% 100%;
  animation: shimmer 1.5s infinite;
}

/* Skeleton Image Card */
.skeleton-image-card {
  position: relative;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1), 0 0 0 1px rgba(255, 255, 255, 0.1);
}

.skeleton-image {
  width: 100%;
  height: auto;
  min-height: 400px;
  background: #e2e8f0;
  position: relative;
  overflow: hidden;
}

.skeleton-image::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    90deg,
    transparent 0%,
    rgba(255, 255, 255, 0.4) 50%,
    transparent 100%
  );
  background-size: 200% 100%;
  animation: shimmer 2s infinite;
}

.skeleton-decoration {
  position: absolute;
  top: -10px;
  right: -10px;
  width: 80px;
  height: 80px;
  background: #cbd5e1;
  border-radius: 50%;
  z-index: 2;
}

.skeleton-decoration.vision {
  left: -10px;
  background: #a7f3d0;
}

.skeleton-decoration.core-values {
  background: #fed7aa;
}

/* Skeleton Content Area */
.skeleton-content-area {
  padding: 20px 0;
}

.skeleton-icon {
  width: 70px;
  height: 70px;
  background: #e2e8f0;
  border-radius: 18px;
  margin-bottom: 25px;
  position: relative;
  overflow: hidden;
}

.skeleton-icon.vision {
  background: #a7f3d0;
}

.skeleton-icon.core-values {
  background: #fed7aa;
}

.skeleton-icon::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    90deg,
    transparent 0%,
    rgba(255, 255, 255, 0.4) 50%,
    transparent 100%
  );
  background-size: 200% 100%;
  animation: shimmer 1.5s infinite;
}

.skeleton-subtitle {
  width: 180px;
  height: 32px;
  background: #e2e8f0;
  border-radius: 6px;
  margin-bottom: 20px;
  position: relative;
  overflow: hidden;
}

.skeleton-subtitle::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    90deg,
    transparent 0%,
    rgba(255, 255, 255, 0.4) 50%,
    transparent 100%
  );
  background-size: 200% 100%;
  animation: shimmer 1.5s infinite;
}

.skeleton-description {
  margin-bottom: 30px;
}

.skeleton-text-line {
  height: 20px;
  background: #e2e8f0;
  border-radius: 4px;
  margin-bottom: 12px;
  position: relative;
  overflow: hidden;
}

.skeleton-text-line.short {
  width: 80%;
}

.skeleton-text-line::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    90deg,
    transparent 0%,
    rgba(255, 255, 255, 0.4) 50%,
    transparent 100%
  );
  background-size: 200% 100%;
  animation: shimmer 1.5s infinite;
}

.skeleton-button {
  width: 160px;
  height: 50px;
  background: #e2e8f0;
  border-radius: 25px;
  position: relative;
  overflow: hidden;
}

.skeleton-button.vision {
  background: #a7f3d0;
}

.skeleton-button.core-values {
  background: #fed7aa;
}

.skeleton-button::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    90deg,
    transparent 0%,
    rgba(255, 255, 255, 0.4) 50%,
    transparent 100%
  );
  background-size: 200% 100%;
  animation: shimmer 1.5s infinite;
}

/* Skeleton Responsive */
@media (max-width: 991px) {
  .skeleton-image {
    height: 450px;
  }
}

@media (max-width: 576px) {
  .skeleton-image {
    height: 350px;
  }

  .skeleton-button {
    width: 140px;
    height: 44px;
  }
}
</style>
