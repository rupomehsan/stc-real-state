<template>
  <section class="why-choose-section" id="why-sec">
    <div class="section-overlay"></div>
    <div class="container">
      <!-- Hero Subtitle Section (matching AboutUs) -->
      <div class="hero-subtitle-section text-center mb-60 mt-3">
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
            <h3 class="hero-sub-title-text">Why Choose Us</h3>
            <div class="hero-subtitle-underline"></div>
          </div>
        </div>
      </div>

      <!-- Enhanced Section Info with Creative Design -->
      <div class="section-info-container">
        <div class="section-info-background">
          <div class="info-floating-elements">
            <div class="floating-orb orb-1"></div>
            <div class="floating-orb orb-2"></div>
            <div class="floating-orb orb-3"></div>
            <div class="floating-line line-1"></div>
            <div class="floating-line line-2"></div>
          </div>
          <div class="section-info-content">
            <div class="section-stats">
              <div class="stat-item">
                <div class="stat-icon">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
                <div class="stat-number">100%</div>
                <div class="stat-label">Quality</div>
              </div>
              <div class="stat-item">
                <div class="stat-icon">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M13 10V3L4 14h7v7l9-11h-7z" />
                  </svg>
                </div>
                <div class="stat-number">24/7</div>
                <div class="stat-label">Support</div>
              </div>
              <div class="stat-item">
                <div class="stat-icon">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"
                    />
                  </svg>
                </div>
                <div class="stat-number">5★</div>
                <div class="stat-label">Rating</div>
              </div>
            </div>
            <p class="section-description enhanced-description">
              <span class="description-highlight">Discover the advantages</span>
              that set us apart and make us your
              <span class="description-emphasis">ideal partner</span> for
              success
            </p>
          </div>
        </div>
      </div>

      <!-- Enhanced Services Grid with Creative Layout -->
      <div class="services-section">
        <div class="services-background">
          <div class="grid-animation-layer">
            <div
              class="animated-grid-line"
              v-for="i in 8"
              :key="'grid-line-' + i"
              :style="{ animationDelay: i * 0.2 + 's' }"
            ></div>
          </div>
          <div class="floating-shapes">
            <div class="shape shape-triangle"></div>
            <div class="shape shape-circle"></div>
            <div class="shape shape-square"></div>
            <div class="shape shape-hexagon"></div>
          </div>
        </div>

        <div class="services-grid enhanced-grid">
          <!-- Loading State -->
          <template v-if="isLoading">
            <ServiceSingleItem
              v-for="n in 6"
              :key="'skeleton-' + n"
              :service="null"
              :isLoading="true"
            />
          </template>

          <!-- Loaded Services -->
          <template v-else>
            <ServiceSingleItem
              v-for="(service, index) in services"
              :key="'service-' + (service.id || index)"
              :service="service"
              :isLoading="false"
              :animationDelay="index * 150"
            />
          </template>
        </div>
      </div>

      <!-- Decorative Elements -->
      <div class="section-decorations">
        <div class="decoration decoration-1"></div>
        <div class="decoration decoration-2"></div>
        <div class="decoration decoration-3"></div>
      </div>
    </div>
  </section>
</template>

<script>
import { store as why_choose_us_store } from "./Store/why_choose_us.js";
import { mapActions, mapState } from "pinia";
import ServiceSingleItem from "./components/ServiceSingleItem.vue";

export default {
  name: "WhyChooseUs",
  components: { ServiceSingleItem },

  async created() {
    await this.fetch_services();
    // console.log("Services:", this.services);
  },

  computed: {
    ...mapState(why_choose_us_store, ["services", "loading", "error"]),

    // Check if we have valid services data
    hasServices() {
      return this.services && this.services.length > 0;
    },

    // Loading state for skeleton display
    isLoading() {
      return this.loading || !this.hasServices;
    },
  },

  methods: {
    ...mapActions(why_choose_us_store, ["fetch_services"]),
  },
};
</script>

<style lang="scss" scoped>
// Modern CSS Variables
:root {
  --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
  --accent-color: #6366f1;
  --text-primary: #1f2937;
  --text-secondary: #6b7280;
  --text-light: #ffffff;
  --surface-glass: rgba(255, 255, 255, 0.1);
  --surface-card: rgba(255, 255, 255, 0.95);
  --shadow-soft: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
    0 2px 4px -1px rgba(0, 0, 0, 0.06);
  --shadow-medium: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
    0 4px 6px -2px rgba(0, 0, 0, 0.05);
  --shadow-large: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  --border-radius: 16px;
  --section-padding: 120px;
  --grid-gap: 2rem;
}

// Main Section Styling
.why-choose-section {
  position: relative;
  min-height: 100vh;
  padding: var(--section-padding) 0;
  background: var(--primary-gradient);
  overflow: hidden;

  // Enhanced background with texture
  &::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: radial-gradient(
        circle at 25% 25%,
        rgba(255, 255, 255, 0.1) 0%,
        transparent 50%
      ),
      radial-gradient(
        circle at 75% 75%,
        rgba(255, 255, 255, 0.05) 0%,
        transparent 50%
      );
    pointer-events: none;
  }
}

.section-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.2);
  backdrop-filter: blur(1px);
}

// Modern Section Header
.section-header {
  text-align: center;
  margin-bottom: 4rem;

  .header-content {
    max-width: 600px;
    margin: 0 auto;
  }
}

/* Enhanced Hero Subtitle Section (matching AboutUs) */
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

/* Enhanced Section Info with Creative Design */
.section-info-container {
  position: relative;
  margin: 3rem 0 4rem 0;
  z-index: 3;
}

.section-info-background {
  position: relative;
  background: linear-gradient(
    135deg,
    rgba(255, 255, 255, 0.1) 0%,
    rgba(255, 255, 255, 0.05) 50%,
    rgba(255, 255, 255, 0.1) 100%
  );
  backdrop-filter: blur(20px);
  border-radius: 25px;
  padding: 3rem 2rem;
  border: 1px solid rgba(255, 255, 255, 0.15);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1),
    inset 0 1px 0 rgba(255, 255, 255, 0.2);
  overflow: hidden;
  opacity: 0;
  transform: translateY(30px) scale(0.95);
  animation: enhancedFadeIn 1s ease-out 0.8s forwards;
}

@keyframes enhancedFadeIn {
  to {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}

.info-floating-elements {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  pointer-events: none;
  z-index: 1;
}

.floating-orb {
  position: absolute;
  border-radius: 50%;
  background: linear-gradient(
    135deg,
    rgba(229, 9, 20, 0.2),
    rgba(255, 107, 107, 0.1)
  );
  animation: floatOrb 6s ease-in-out infinite;

  &.orb-1 {
    width: 40px;
    height: 40px;
    top: 15%;
    left: 10%;
    animation-delay: 0s;
  }

  &.orb-2 {
    width: 25px;
    height: 25px;
    top: 70%;
    right: 15%;
    animation-delay: 2s;
  }

  &.orb-3 {
    width: 35px;
    height: 35px;
    bottom: 20%;
    left: 80%;
    animation-delay: 4s;
  }
}

@keyframes floatOrb {
  0%,
  100% {
    transform: translateY(0) rotate(0deg) scale(1);
    opacity: 0.6;
  }
  50% {
    transform: translateY(-15px) rotate(180deg) scale(1.1);
    opacity: 0.9;
  }
}

.floating-line {
  position: absolute;
  background: linear-gradient(
    90deg,
    transparent,
    rgba(229, 9, 20, 0.3),
    transparent
  );
  border-radius: 2px;

  &.line-1 {
    width: 120px;
    height: 2px;
    top: 30%;
    right: 20%;
    animation: floatLine 4s ease-in-out infinite;
  }

  &.line-2 {
    width: 80px;
    height: 1px;
    bottom: 35%;
    left: 15%;
    animation: floatLine 4s ease-in-out infinite reverse;
    animation-delay: 2s;
  }
}

@keyframes floatLine {
  0%,
  100% {
    transform: translateX(0) scaleX(1);
    opacity: 0.4;
  }
  50% {
    transform: translateX(10px) scaleX(1.1);
    opacity: 0.8;
  }
}

.section-info-content {
  position: relative;
  z-index: 2;
  text-align: center;
}

.section-stats {
  display: flex;
  justify-content: center;
  gap: 3rem;
  margin-bottom: 2rem;
  flex-wrap: wrap;
}

.stat-item {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.5rem;
  opacity: 0;
  transform: translateY(20px);
  animation: slideUpStat 0.8s ease-out forwards;

  &:nth-child(1) {
    animation-delay: 1s;
  }
  &:nth-child(2) {
    animation-delay: 1.2s;
  }
  &:nth-child(3) {
    animation-delay: 1.4s;
  }
}

@keyframes slideUpStat {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.stat-icon {
  width: 48px;
  height: 48px;
  background: linear-gradient(135deg, #e50914, #ff6b6b);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  box-shadow: 0 8px 20px rgba(229, 9, 20, 0.3);
  transition: all 0.3s ease;

  svg {
    width: 24px;
    height: 24px;
  }

  &:hover {
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 12px 30px rgba(229, 9, 20, 0.4);
  }
}

.stat-number {
  font-size: 1.5rem;
  font-weight: 800;
  color: white;
  text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
}

.stat-label {
  font-size: 0.875rem;
  color: rgba(255, 255, 255, 0.8);
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.enhanced-description {
  font-size: 1.25rem;
  color: rgba(255, 255, 255, 0.95);
  line-height: 1.7;
  margin: 0;
  max-width: 700px;
  margin: 0 auto;
  opacity: 0;
  transform: translateY(20px);
  animation: fadeInUp 0.8s ease-out 1.6s forwards;

  .description-highlight {
    background: linear-gradient(135deg, #e50914, #ff6b6b);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-weight: 600;
  }

  .description-emphasis {
    position: relative;
    font-weight: 600;
    color: white;

    &::after {
      content: "";
      position: absolute;
      bottom: -2px;
      left: 0;
      right: 0;
      height: 2px;
      background: linear-gradient(135deg, #e50914, #ff6b6b);
      border-radius: 1px;
      transform: scaleX(0);
      animation: underlineGrow 0.6s ease-out 2.2s forwards;
    }
  }
}

@keyframes underlineGrow {
  to {
    transform: scaleX(1);
  }
}

/* Enhanced Services Section with Creative Background */
.services-section {
  position: relative;
  margin-top: 4rem;
  z-index: 2;
}

.services-background {
  position: absolute;
  top: -2rem;
  left: -2rem;
  right: -2rem;
  bottom: -2rem;
  pointer-events: none;
  z-index: 1;
}

.grid-animation-layer {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 0.1;
}

.animated-grid-line {
  position: absolute;
  background: linear-gradient(
    90deg,
    transparent,
    rgba(255, 255, 255, 0.3),
    transparent
  );
  height: 1px;
  width: 100%;
  animation: gridLineMove 8s linear infinite;

  &:nth-child(odd) {
    top: calc(var(--line-position, 0) * 12.5%);
    animation-direction: normal;
  }

  &:nth-child(even) {
    bottom: calc(var(--line-position, 0) * 12.5%);
    animation-direction: reverse;
  }
}

@keyframes gridLineMove {
  0% {
    transform: translateX(-100%);
    opacity: 0;
  }
  10% {
    opacity: 1;
  }
  90% {
    opacity: 1;
  }
  100% {
    transform: translateX(100%);
    opacity: 0;
  }
}

.floating-shapes {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  pointer-events: none;
}

.shape {
  position: absolute;
  opacity: 0.05;
  animation: floatShape 12s ease-in-out infinite;
}

.shape-triangle {
  width: 0;
  height: 0;
  border-left: 15px solid transparent;
  border-right: 15px solid transparent;
  border-bottom: 26px solid rgba(229, 9, 20, 0.3);
  top: 20%;
  left: 5%;
  animation-delay: 0s;
}

.shape-circle {
  width: 40px;
  height: 40px;
  border: 3px solid rgba(255, 107, 107, 0.3);
  border-radius: 50%;
  top: 60%;
  right: 10%;
  animation-delay: 3s;
}

.shape-square {
  width: 25px;
  height: 25px;
  background: rgba(229, 9, 20, 0.2);
  transform: rotate(45deg);
  bottom: 30%;
  left: 15%;
  animation-delay: 6s;
}

.shape-hexagon {
  width: 30px;
  height: 17px;
  background: rgba(255, 107, 107, 0.2);
  position: relative;
  top: 40%;
  right: 5%;
  animation-delay: 9s;

  &:before,
  &:after {
    content: "";
    position: absolute;
    width: 0;
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
  }

  &:before {
    bottom: 100%;
    border-bottom: 8.5px solid rgba(255, 107, 107, 0.2);
  }

  &:after {
    top: 100%;
    border-top: 8.5px solid rgba(255, 107, 107, 0.2);
  }
}

@keyframes floatShape {
  0%,
  100% {
    transform: translateY(0) rotate(0deg);
  }
  33% {
    transform: translateY(-20px) rotate(120deg);
  }
  66% {
    transform: translateY(10px) rotate(240deg);
  }
}

// Enhanced Services Grid
.services-grid.enhanced-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  gap: 2.5rem;
  margin-bottom: 3rem;
  position: relative;
  z-index: 3;

  // Stagger animation for grid items
  > * {
    opacity: 0;
    transform: translateY(30px) scale(0.9);
    animation: gridItemAppear 0.8s ease-out forwards;
  }

  > *:nth-child(1) {
    animation-delay: 0.1s;
  }
  > *:nth-child(2) {
    animation-delay: 0.3s;
  }
  > *:nth-child(3) {
    animation-delay: 0.5s;
  }
  > *:nth-child(4) {
    animation-delay: 0.7s;
  }
  > *:nth-child(5) {
    animation-delay: 0.9s;
  }
  > *:nth-child(6) {
    animation-delay: 1.1s;
  }
}

@keyframes gridItemAppear {
  to {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}

// Decorative Elements
.section-decorations {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  pointer-events: none;
  z-index: 1;
}

.decoration {
  position: absolute;
  border-radius: 50%;
  opacity: 0.1;

  &.decoration-1 {
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, #ffffff 0%, transparent 70%);
    top: 10%;
    left: 5%;
    animation: float 6s ease-in-out infinite;
  }

  &.decoration-2 {
    width: 150px;
    height: 150px;
    background: radial-gradient(circle, #ffffff 0%, transparent 70%);
    top: 60%;
    right: 10%;
    animation: float 8s ease-in-out infinite reverse;
  }

  &.decoration-3 {
    width: 100px;
    height: 100px;
    background: radial-gradient(circle, #ffffff 0%, transparent 70%);
    bottom: 20%;
    left: 15%;
    animation: float 7s ease-in-out infinite;
  }
}

// Animations
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

@keyframes float {
  0%,
  100% {
    transform: translateY(0) rotate(0deg);
  }
  50% {
    transform: translateY(-20px) rotate(180deg);
  }
}

// Hero Subtitle Hover Effects
.hero-subtitle-background:hover {
  transform: translateY(-2px);
  box-shadow: 0 25px 70px rgba(0, 0, 0, 0.15),
    inset 0 1px 0 rgba(255, 255, 255, 0.9);
}

.hero-subtitle-background:hover .hero-sub-title-text {
  animation-duration: 1.5s;
}

// Responsive Design
@media (max-width: 1200px) {
  :root {
    --section-padding: 100px;
    --grid-gap: 1.5rem;
  }

  .services-grid.enhanced-grid {
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
  }

  .section-info-background {
    padding: 2.5rem 1.5rem;
  }

  .section-stats {
    gap: 2rem;
  }

  .stat-icon {
    width: 40px;
    height: 40px;

    svg {
      width: 20px;
      height: 20px;
    }
  }

  .stat-number {
    font-size: 1.25rem;
  }
}

@media (max-width: 768px) {
  :root {
    --section-padding: 80px;
    --grid-gap: 1.25rem;
  }

  .services-grid.enhanced-grid {
    grid-template-columns: 1fr;
    gap: 1.5rem;
  }

  .hero-subtitle-section {
    padding: 30px 0;
    margin-bottom: 40px;
  }

  .hero-subtitle-background {
    padding: 25px 40px;
  }

  .hero-sub-title-text {
    font-size: 18px;
    letter-spacing: 2px;
  }

  .hero-double-line {
    width: 60px;
    height: 3px;
  }

  .hero-subtitle-dot {
    width: 14px;
    height: 14px;
  }

  .section-info-background {
    padding: 2rem 1.5rem;
    margin: 2rem 0 3rem 0;
  }

  .section-stats {
    flex-direction: column;
    gap: 1.5rem;
    margin-bottom: 1.5rem;
  }

  .stat-item {
    flex-direction: row;
    gap: 1rem;
    text-align: left;
  }

  .stat-icon {
    width: 36px;
    height: 36px;

    svg {
      width: 18px;
      height: 18px;
    }
  }

  .stat-number {
    font-size: 1.125rem;
  }

  .enhanced-description {
    font-size: 1.1rem;
    text-align: left;
  }

  .floating-orb {
    display: none; // Hide floating elements on mobile for better performance
  }

  .floating-line {
    display: none;
  }

  .floating-shapes .shape {
    display: none;
  }

  .decoration {
    display: none; // Hide decorations on mobile for better performance
  }
}

@media (max-width: 480px) {
  :root {
    --section-padding: 60px;
  }

  .container {
    padding: 0 1rem;
  }

  .hero-subtitle-section {
    padding: 25px 0;
    margin-bottom: 30px;
  }

  .hero-subtitle-background {
    padding: 20px 30px;
  }

  .hero-sub-title-text {
    font-size: 16px;
    letter-spacing: 1.5px;
  }

  .hero-double-line {
    width: 50px;
    height: 3px;
  }

  .hero-subtitle-dot {
    width: 12px;
    height: 12px;
  }

  .section-info-background {
    padding: 1.5rem 1rem;
    border-radius: 20px;
  }

  .section-stats {
    gap: 1rem;
  }

  .stat-item {
    gap: 0.75rem;
  }

  .stat-icon {
    width: 32px;
    height: 32px;

    svg {
      width: 16px;
      height: 16px;
    }
  }

  .stat-number {
    font-size: 1rem;
  }

  .stat-label {
    font-size: 0.75rem;
  }

  .enhanced-description {
    font-size: 1rem;
  }
}

// Accessibility & Performance
@media (prefers-reduced-motion: reduce) {
  *,
  *::before,
  *::after {
    animation-duration: 0.01ms !important;
    animation-iteration-count: 1 !important;
    transition-duration: 0.01ms !important;
  }

  .decoration,
  .floating-orb,
  .floating-line,
  .floating-shapes,
  .animated-grid-line {
    display: none;
  }

  .section-info-background,
  .services-grid.enhanced-grid > * {
    opacity: 1 !important;
    transform: none !important;
  }
}

// Dark mode support (if needed in the future)
@media (prefers-color-scheme: dark) {
  :root {
    --surface-card: rgba(17, 24, 39, 0.95);
    --text-primary: #f9fafb;
    --text-secondary: #d1d5db;
  }
}
</style>
