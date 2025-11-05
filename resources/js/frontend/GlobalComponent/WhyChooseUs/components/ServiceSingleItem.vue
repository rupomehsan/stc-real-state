<template>
  <div
    class="service-card-wrapper"
    :style="{ animationDelay: animationDelay + 'ms' }"
  >
    <!-- Skeleton Loading State -->
    <div v-if="!service || isLoading" class="service-card skeleton-card">
      <div class="card-glow skeleton-glow"></div>
      <div class="card-content">
        <div class="icon-section">
          <div class="skeleton-element skeleton-icon"></div>
        </div>
        <div class="content-section">
          <div class="skeleton-element skeleton-title"></div>
          <div class="skeleton-element skeleton-line"></div>
          <div class="skeleton-element skeleton-line short"></div>
          <div class="skeleton-element skeleton-line shorter"></div>
        </div>
        <div class="action-section">
          <div class="skeleton-element skeleton-button"></div>
        </div>
      </div>
    </div>

    <!-- Enhanced Professional Service Card -->
    <div v-else class="service-card modern-card">
      <!-- Advanced Background Effects -->
      <div class="card-background-effects">
        <div class="gradient-overlay"></div>
        <div class="mesh-pattern"></div>
        <div class="floating-particles">
          <div class="particle" v-for="i in 3" :key="'particle-' + i"></div>
        </div>
      </div>

      <!-- Premium Card Border -->
      <div class="premium-border"></div>

      <div class="card-content">
        <!-- Enhanced Icon Section -->
        <div class="icon-section">
          <div class="icon-container">
            <div class="icon-backdrop"></div>
            <div class="icon-ring"></div>
            <img
              :src="'/' + service?.image"
              :alt="service?.title || 'Service icon'"
              class="service-icon"
              @error="handleImageError"
              loading="lazy"
            />
            <div class="icon-glow"></div>
          </div>
          <!-- Service Category Badge -->
          <div class="category-badge">
            <span class="badge-text">Premium</span>
          </div>
        </div>

        <!-- Enhanced Content Section -->
        <div class="content-section">
          <div class="content-header">
            <h3 class="service-title" :title="service?.title">
              <span class="title-text">{{ truncatedTitle }}</span>
              <div class="title-underline"></div>
            </h3>
            <!-- Rating/Quality Indicator -->
            <div class="quality-indicator">
              <div class="star-rating">
                <svg
                  v-for="i in 5"
                  :key="'star-' + i"
                  class="star"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  />
                </svg>
              </div>
            </div>
          </div>

          <p class="service-description" :title="service?.description">
            {{ truncatedDescription }}
          </p>

          <!-- Feature Highlights -->
          <div class="feature-highlights">
            <div class="feature-item">
              <svg class="feature-icon" viewBox="0 0 20 20" fill="currentColor">
                <path
                  fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                  clip-rule="evenodd"
                />
              </svg>
              <span>Guaranteed Quality</span>
            </div>
            <div class="feature-item">
              <svg class="feature-icon" viewBox="0 0 20 20" fill="currentColor">
                <path
                  fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                  clip-rule="evenodd"
                />
              </svg>
              <span>Fast Delivery</span>
            </div>
          </div>
        </div>

        <!-- Premium Action Section -->
        <div class="action-section">
          <Link
            class="service-button premium-button"
            href="/portfolio"
            :aria-label="'Learn more about ' + service?.title"
          >
            <div class="button-background"></div>
            <span class="button-content">
              <span class="button-text">Explore Service</span>
              <svg class="button-icon" viewBox="0 0 20 20" fill="currentColor">
                <path
                  fill-rule="evenodd"
                  d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                  clip-rule="evenodd"
                />
              </svg>
            </span>
          </Link>

          <!-- Additional Action -->
          <button
            class="secondary-action"
            type="button"
            @click="toggleFavorite"
          >
            <svg class="heart-icon" viewBox="0 0 20 20" fill="currentColor">
              <path
                fill-rule="evenodd"
                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                clip-rule="evenodd"
              />
            </svg>
          </button>
        </div>
      </div>

      <!-- Advanced Hover Effects -->
      <div class="advanced-hover-effects">
        <div class="shimmer-effect"></div>
        <div class="corner-accents">
          <div class="corner-accent top-left"></div>
          <div class="corner-accent top-right"></div>
          <div class="corner-accent bottom-left"></div>
          <div class="corner-accent bottom-right"></div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
  name: "ServiceSingleItem",
  components: {
    Link,
  },

  props: {
    service: {
      type: Object,
      required: false,
      default: null,
    },
    isLoading: {
      type: Boolean,
      default: false,
    },
    animationDelay: {
      type: Number,
      default: 0,
    },
  },

  computed: {
    // Check if service has required data
    hasValidService() {
      return this.service && this.service.title && this.service.description;
    },

    // Truncated title for better display
    truncatedTitle() {
      if (!this.service?.title) return "";
      const maxLength = 45;
      return this.service.title.length > maxLength
        ? this.service.title.substring(0, maxLength) + "..."
        : this.service.title;
    },

    // Truncated description for better display
    truncatedDescription() {
      if (!this.service?.description) return "";
      const maxLength = 150;
      return this.service.description.length > maxLength
        ? this.service.description.substring(0, maxLength) + "..."
        : this.service.description;
    },
  },

  methods: {
    handleImageError(event) {
      // Create a modern fallback with SVG icon
      event.target.style.display = "none";
      const fallbackIcon = document.createElement("div");
      fallbackIcon.className = "fallback-icon";
      fallbackIcon.innerHTML = `
        <svg viewBox="0 0 24 24" fill="currentColor">
          <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
        </svg>
      `;
      event.target.parentNode.appendChild(fallbackIcon);
    },

    toggleFavorite() {
      // Toggle favorite functionality (can be connected to store/API)
      console.log("Toggled favorite for:", this.service?.title);
      // Add visual feedback or emit event
      this.$emit("toggle-favorite", this.service);
    },
  },
};
</script>

<style lang="scss" scoped>
/* Premium Modern CSS Variables */
:root {
  --card-bg-primary: rgba(255, 255, 255, 0.98);
  --card-bg-secondary: rgba(248, 250, 252, 0.95);
  --card-border: rgba(255, 255, 255, 0.25);
  --text-primary: #0f172a;
  --text-secondary: #475569;
  --text-muted: #64748b;
  --accent-primary: #e50914;
  --accent-secondary: #ff6b6b;
  --accent-hover: #dc2626;
  --gradient-primary: linear-gradient(
    135deg,
    #e50914 0%,
    #ff6b6b 50%,
    #ff4757 100%
  );
  --gradient-secondary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  --shadow-soft: 0 2px 4px rgba(0, 0, 0, 0.02), 0 1px 2px rgba(0, 0, 0, 0.06);
  --shadow-medium: 0 8px 25px rgba(0, 0, 0, 0.08), 0 3px 10px rgba(0, 0, 0, 0.1);
  --shadow-large: 0 25px 50px rgba(0, 0, 0, 0.15),
    0 12px 25px rgba(0, 0, 0, 0.1);
  --shadow-premium: 0 32px 64px rgba(229, 9, 20, 0.08),
    0 16px 32px rgba(0, 0, 0, 0.06);
  --border-radius-sm: 12px;
  --border-radius-md: 20px;
  --border-radius-lg: 28px;
  --transition-smooth: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  --transition-bounce: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

/* Premium Card Wrapper with Advanced Animations */
.service-card-wrapper {
  opacity: 0;
  transform: translateY(40px) scale(0.95);
  animation: premiumEntrance 0.8s var(--transition-bounce) forwards;

  &:hover {
    .service-card.modern-card {
      transform: translateY(-12px) scale(1.02);
      box-shadow: var(--shadow-premium);

      .card-background-effects {
        .gradient-overlay {
          opacity: 1;
          transform: scale(1.1) rotate(2deg);
        }

        .floating-particles .particle {
          animation-play-state: running;
        }

        .mesh-pattern {
          opacity: 0.3;
          transform: scale(1.05);
        }
      }

      .premium-border {
        opacity: 1;
        animation: borderPulse 2s ease-in-out infinite;
      }

      .icon-container {
        transform: scale(1.15) rotateY(10deg);

        .icon-glow {
          opacity: 1;
          transform: scale(2);
        }

        .icon-ring {
          animation: ringRotate 3s linear infinite;
        }
      }

      .category-badge {
        transform: translateX(-5px) scale(1.1);
        background: var(--gradient-primary);
      }

      .service-button.premium-button {
        background: var(--gradient-primary);
        transform: translateY(-2px);
        box-shadow: var(--shadow-large);

        .button-background {
          opacity: 1;
          transform: scaleX(1);
        }

        .button-icon {
          transform: translateX(6px);
        }
      }

      .secondary-action {
        transform: scale(1.1) rotate(5deg);
        background: var(--accent-primary);

        .heart-icon {
          color: white;
        }
      }

      .advanced-hover-effects {
        .shimmer-effect {
          animation: shimmerMove 1.5s ease-in-out infinite;
        }

        .corner-accents .corner-accent {
          opacity: 1;
          transform: scale(1);
        }
      }

      .star-rating .star {
        color: #fbbf24;
        animation: starTwinkle 0.6s ease-in-out;
      }
    }
  }
}

/* Premium Modern Service Card */
.service-card.modern-card {
  position: relative;
  background: var(--card-bg-primary);
  backdrop-filter: blur(30px) saturate(120%);
  border: 2px solid var(--card-border);
  border-radius: var(--border-radius-lg);
  padding: 2.5rem 2rem;
  height: 100%;
  min-height: 420px;
  display: flex;
  flex-direction: column;
  transition: var(--transition-smooth);
  box-shadow: var(--shadow-medium);
  overflow: hidden;
  cursor: pointer;

  /* Advanced Typography */
  word-wrap: break-word;
  overflow-wrap: break-word;
  font-feature-settings: "liga", "kern";
  text-rendering: optimizeLegibility;

  /* Advanced Backdrop Effects */
  &::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(
      135deg,
      rgba(255, 255, 255, 0.1) 0%,
      rgba(255, 255, 255, 0.05) 50%,
      rgba(229, 9, 20, 0.02) 100%
    );
    pointer-events: none;
    z-index: 1;
  }
}

/* Advanced Background Effects */
.card-background-effects {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  pointer-events: none;
  z-index: 1;
}

.gradient-overlay {
  position: absolute;
  top: -4px;
  left: -4px;
  right: -4px;
  bottom: -4px;
  background: var(--gradient-primary);
  border-radius: var(--border-radius-lg);
  opacity: 0;
  transform: scale(0.98);
  transition: var(--transition-smooth);
  z-index: -2;
}

.mesh-pattern {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-image: radial-gradient(
      circle at 25% 25%,
      rgba(229, 9, 20, 0.05) 0%,
      transparent 50%
    ),
    radial-gradient(
      circle at 75% 75%,
      rgba(255, 107, 107, 0.03) 0%,
      transparent 50%
    ),
    linear-gradient(
      45deg,
      transparent 40%,
      rgba(255, 255, 255, 0.02) 50%,
      transparent 60%
    );
  opacity: 0;
  transform: scale(1.02);
  transition: var(--transition-smooth);
}

.floating-particles {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;

  .particle {
    position: absolute;
    width: 4px;
    height: 4px;
    background: radial-gradient(circle, rgba(229, 9, 20, 0.6), transparent);
    border-radius: 50%;
    animation: floatParticle 8s ease-in-out infinite;
    animation-play-state: paused;

    &:nth-child(1) {
      top: 20%;
      left: 15%;
      animation-delay: 0s;
      animation-duration: 6s;
    }

    &:nth-child(2) {
      top: 60%;
      right: 20%;
      animation-delay: 2s;
      animation-duration: 8s;
    }

    &:nth-child(3) {
      bottom: 30%;
      left: 70%;
      animation-delay: 4s;
      animation-duration: 7s;
    }
  }
}

/* Premium Border Effect */
.premium-border {
  position: absolute;
  top: -1px;
  left: -1px;
  right: -1px;
  bottom: -1px;
  background: var(--gradient-primary);
  border-radius: var(--border-radius-lg);
  opacity: 0;
  z-index: -1;
  transition: var(--transition-smooth);
}

/* Enhanced Card Content Layout */
.card-content {
  display: flex;
  flex-direction: column;
  height: 100%;
  position: relative;
  z-index: 3;
  position: relative;
}

/* Enhanced Icon Section */
.icon-section {
  position: relative;
  text-align: center;
  margin-bottom: 2rem;
}

.icon-container {
  position: relative;
  display: inline-block;
  transition: var(--transition-smooth);
  filter: drop-shadow(0 8px 16px rgba(229, 9, 20, 0.15));
}

.icon-backdrop {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 120px;
  height: 120px;
  background: radial-gradient(
    circle,
    rgba(229, 9, 20, 0.1) 0%,
    rgba(255, 107, 107, 0.05) 50%,
    transparent 70%
  );
  border-radius: 50%;
  z-index: 1;
}

.icon-ring {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100px;
  height: 100px;
  border: 3px solid transparent;
  border-top: 3px solid rgba(229, 9, 20, 0.3);
  border-right: 3px solid rgba(255, 107, 107, 0.2);
  border-radius: 50%;
  z-index: 1;
  animation: none;
}

.service-icon {
  width: 90px;
  height: 90px;
  object-fit: contain;
  border-radius: var(--border-radius-md);
  padding: 16px;
  background: linear-gradient(
    135deg,
    rgba(255, 255, 255, 0.95) 0%,
    rgba(248, 250, 252, 0.9) 100%
  );
  backdrop-filter: blur(20px);
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08),
    inset 0 1px 0 rgba(255, 255, 255, 0.5);
  border: 1px solid rgba(255, 255, 255, 0.2);
  transition: var(--transition-smooth);
  position: relative;
  z-index: 3;
}

.icon-glow {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) scale(0.8);
  width: 90px;
  height: 90px;
  background: var(--gradient-primary);
  border-radius: var(--border-radius-md);
  opacity: 0;
  filter: blur(20px);
  transition: var(--transition-smooth);
  z-index: 2;
}

/* Category Badge */
.category-badge {
  position: absolute;
  top: -8px;
  right: -8px;
  background: var(--gradient-secondary);
  color: white;
  padding: 4px 12px;
  border-radius: 12px;
  font-size: 0.7rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  box-shadow: var(--shadow-medium);
  transition: var(--transition-smooth);
  z-index: 4;

  .badge-text {
    position: relative;
    z-index: 1;
  }
}

/* Enhanced Content Section */
.content-section {
  flex: 1;
  text-align: left;
  margin-bottom: 2rem;
  padding: 0 0.5rem;
}

.content-header {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  margin-bottom: 1rem;
  gap: 1rem;
}

.service-title {
  flex: 1;
  position: relative;

  .title-text {
    font-size: 1.375rem;
    font-weight: 700;
    color: var(--text-primary);
    line-height: 1.3;
    letter-spacing: -0.02em;
    background: linear-gradient(
      135deg,
      var(--text-primary) 0%,
      var(--accent-primary) 100%
    );
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  .title-underline {
    position: absolute;
    bottom: -4px;
    left: 0;
    height: 2px;
    width: 0;
    background: var(--gradient-primary);
    border-radius: 1px;
    transition: width 0.6s cubic-bezier(0.4, 0, 0.2, 1) 0.2s;
  }
}

.quality-indicator {
  flex-shrink: 0;
}

.star-rating {
  display: flex;
  gap: 2px;

  .star {
    width: 14px;
    height: 14px;
    color: #d1d5db;
    transition: color 0.3s ease;
  }
}

.service-description {
  font-size: 1rem;
  color: var(--text-secondary);
  line-height: 1.7;
  margin: 0 0 1.5rem 0;
  text-align: left;
  font-weight: 400;
  opacity: 0.9;
}

.feature-highlights {
  display: flex;
  gap: 1rem;
  margin-bottom: 1rem;
  flex-wrap: wrap;
}

.feature-item {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.5rem 0.75rem;
  background: rgba(229, 9, 20, 0.05);
  border: 1px solid rgba(229, 9, 20, 0.1);
  border-radius: var(--border-radius-sm);
  font-size: 0.75rem;
  font-weight: 500;
  color: var(--text-secondary);
  transition: var(--transition-smooth);

  &:hover {
    background: rgba(229, 9, 20, 0.1);
    border-color: rgba(229, 9, 20, 0.2);
    color: var(--accent-primary);
  }
}

.feature-icon {
  width: 14px;
  height: 14px;
  color: var(--accent-primary);
}

// Action Section
.action-section {
  margin-top: auto;
  text-align: center;
}

.service-button {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.75rem 1.5rem;
  background: var(--accent-color);
  color: white;
  text-decoration: none;
  border-radius: 50px;
  font-weight: 600;
  font-size: 0.875rem;
  transition: var(--transition);
  box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);

  &:hover {
    text-decoration: none;
    color: white;
  }
}

.button-text {
  white-space: nowrap;
}

.button-icon {
  width: 16px;
  height: 16px;
  transition: var(--transition);
}

// Hover Decoration
.hover-decoration {
  position: absolute;
  top: 1.5rem;
  right: 1.5rem;
  display: flex;
  gap: 4px;
  opacity: 0;
  transform: translateX(10px);
  transition: var(--transition);
}

.decoration-dot {
  width: 6px;
  height: 6px;
  background: var(--accent-color);
  border-radius: 50%;

  &:nth-child(2) {
    animation-delay: 0.1s;
  }

  &:nth-child(3) {
    animation-delay: 0.2s;
  }
}

// Skeleton Styles
.skeleton-card {
  background: rgba(255, 255, 255, 0.1) !important;
  backdrop-filter: blur(10px);

  .skeleton-glow {
    display: none;
  }
}

.skeleton-element {
  background: linear-gradient(
    90deg,
    rgba(255, 255, 255, 0.1) 0%,
    rgba(255, 255, 255, 0.3) 50%,
    rgba(255, 255, 255, 0.1) 100%
  );
  background-size: 200% 100%;
  animation: shimmer 2s infinite;
  border-radius: 8px;
}

.skeleton-icon {
  width: 80px;
  height: 80px;
  margin: 0 auto;
  border-radius: 16px;
}

.skeleton-title {
  height: 1.5rem;
  width: 80%;
  margin: 0 auto 1rem auto;
}

.skeleton-line {
  height: 1rem;
  width: 100%;
  margin-bottom: 0.5rem;

  &.short {
    width: 85%;
  }

  &.shorter {
    width: 70%;
  }
}

.skeleton-button {
  width: 120px;
  height: 2.5rem;
  margin: 0 auto;
  border-radius: 50px;
}

// Animations
@keyframes slideInUp {
  from {
    opacity: 0;
    transform: translateY(40px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes shimmer {
  0% {
    background-position: -200% 0;
  }
  100% {
    background-position: 200% 0;
  }
}

@keyframes pulse {
  0%,
  100% {
    opacity: 1;
  }
  50% {
    opacity: 0.5;
  }
}

// Responsive Design
@media (max-width: 1200px) {
  .service-card {
    padding: 1.75rem;
    min-height: 360px;
  }

  .service-icon {
    width: 70px;
    height: 70px;
  }

  .icon-background {
    width: 90px;
    height: 90px;
  }
}

@media (max-width: 768px) {
  .service-card {
    padding: 1.5rem;
    min-height: 340px;
  }

  .service-title {
    font-size: 1.125rem;
    min-height: 2.25rem;
  }

  .service-description {
    font-size: 0.9rem;
    min-height: 4.5rem;
    text-align: center; // Center text on mobile
  }

  .service-icon {
    width: 60px;
    height: 60px;
  }

  .icon-background {
    width: 80px;
    height: 80px;
  }

  .hover-decoration {
    display: none; // Hide on mobile to reduce clutter
  }
}

@media (max-width: 480px) {
  .service-card {
    padding: 1.25rem;
    min-height: 320px;
  }

  .service-title {
    font-size: 1rem;
    min-height: 2rem;
  }

  .service-description {
    font-size: 0.85rem;
    min-height: 4rem;
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

  .service-card-wrapper {
    opacity: 1;
    transform: none;
  }

  .card-glow {
    display: none;
  }

  .hover-decoration {
    display: none;
  }
}

// Fallback icon styles
.fallback-icon {
  width: 80px;
  height: 80px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
  border-radius: 16px;
  color: var(--accent-color);
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);

  svg {
    width: 40px;
    height: 40px;
  }
}

// Focus styles for accessibility
.service-button:focus {
  outline: 2px solid var(--accent-color);
  outline-offset: 2px;
}

// High contrast mode support
@media (prefers-contrast: high) {
  .service-card {
    border: 2px solid currentColor;
    background: white;
  }

  .service-title {
    color: black;
  }

  .service-description {
    color: #333;
  }
}

/* Premium Action Section */
.action-section {
  margin-top: auto;
  display: flex;
  align-items: center;
  gap: 1rem;
}

.service-button.premium-button {
  position: relative;
  flex: 1;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 0.75rem;
  padding: 1rem 1.5rem;
  background: var(--gradient-secondary);
  color: white;
  text-decoration: none;
  border-radius: var(--border-radius-md);
  font-weight: 600;
  font-size: 0.9rem;
  transition: var(--transition-smooth);
  box-shadow: var(--shadow-medium);
  overflow: hidden;

  &:hover {
    text-decoration: none;
    color: white;
  }
}

.button-background {
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
  opacity: 0;
}

.button-content {
  position: relative;
  z-index: 1;
  display: flex;
  align-items: center;
  gap: 0.75rem;
}

.button-text {
  white-space: nowrap;
  font-weight: 600;
}

.button-icon {
  width: 18px;
  height: 18px;
  transition: var(--transition-smooth);
}

.secondary-action {
  width: 48px;
  height: 48px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(229, 9, 20, 0.1);
  border: 1px solid rgba(229, 9, 20, 0.2);
  border-radius: var(--border-radius-sm);
  cursor: pointer;
  transition: var(--transition-smooth);

  .heart-icon {
    width: 20px;
    height: 20px;
    color: var(--accent-primary);
    transition: var(--transition-smooth);
  }

  &:hover {
    background: var(--accent-primary);
    border-color: var(--accent-primary);

    .heart-icon {
      color: white;
    }
  }
}

/* Advanced Hover Effects */
.advanced-hover-effects {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  pointer-events: none;
  z-index: 4;
}

.shimmer-effect {
  position: absolute;
  top: -100%;
  left: -100%;
  width: 300%;
  height: 300%;
  background: linear-gradient(
    45deg,
    transparent 30%,
    rgba(255, 255, 255, 0.1) 50%,
    transparent 70%
  );
  opacity: 0;
  animation: none;
}

.corner-accents {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

.corner-accent {
  position: absolute;
  width: 20px;
  height: 20px;
  border: 2px solid var(--accent-primary);
  opacity: 0;
  transform: scale(0.5);
  transition: var(--transition-smooth);

  &.top-left {
    top: 1rem;
    left: 1rem;
    border-bottom: none;
    border-right: none;
    border-radius: 4px 0 0 0;
  }

  &.top-right {
    top: 1rem;
    right: 1rem;
    border-bottom: none;
    border-left: none;
    border-radius: 0 4px 0 0;
  }

  &.bottom-left {
    bottom: 1rem;
    left: 1rem;
    border-top: none;
    border-right: none;
    border-radius: 0 0 0 4px;
  }

  &.bottom-right {
    bottom: 1rem;
    right: 1rem;
    border-top: none;
    border-left: none;
    border-radius: 0 0 4px 0;
  }
}

/* Fallback Icon */
.fallback-icon {
  width: 90px;
  height: 90px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
  border-radius: var(--border-radius-md);
  color: var(--accent-primary);
  box-shadow: var(--shadow-medium);

  svg {
    width: 45px;
    height: 45px;
  }
}

/* Modern Animations */
@keyframes premiumEntrance {
  from {
    opacity: 0;
    transform: translateY(40px) scale(0.95);
  }
  to {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}

@keyframes borderPulse {
  0%,
  100% {
    opacity: 0.3;
    transform: scale(1);
  }
  50% {
    opacity: 0.8;
    transform: scale(1.02);
  }
}

@keyframes ringRotate {
  from {
    transform: translate(-50%, -50%) rotate(0deg);
  }
  to {
    transform: translate(-50%, -50%) rotate(360deg);
  }
}

@keyframes floatParticle {
  0%,
  100% {
    transform: translateY(0) rotate(0deg);
    opacity: 0.6;
  }
  50% {
    transform: translateY(-10px) rotate(180deg);
    opacity: 1;
  }
}

@keyframes shimmerMove {
  0% {
    transform: translateX(-100%) translateY(-100%) rotate(45deg);
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    transform: translateX(100%) translateY(100%) rotate(45deg);
    opacity: 0;
  }
}

@keyframes starTwinkle {
  0%,
  100% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.2);
  }
}

/* Enhanced Responsive Design */
@media (max-width: 1200px) {
  .service-card.modern-card {
    padding: 2rem 1.75rem;
    min-height: 400px;
  }

  .service-icon {
    width: 80px;
    height: 80px;
  }

  .icon-ring,
  .icon-backdrop {
    width: 90px;
    height: 90px;
  }
}

@media (max-width: 768px) {
  .service-card.modern-card {
    padding: 1.75rem 1.5rem;
    min-height: 380px;
  }

  .content-header {
    flex-direction: column;
    align-items: flex-start;
    gap: 0.5rem;
  }

  .service-title .title-text {
    font-size: 1.25rem;
  }

  .service-description {
    font-size: 0.95rem;
    text-align: center;
  }

  .feature-highlights {
    justify-content: center;
  }

  .action-section {
    flex-direction: column;
    gap: 1rem;
  }

  .service-button.premium-button {
    width: 100%;
  }

  .secondary-action {
    align-self: center;
  }

  .floating-particles,
  .corner-accents {
    display: none;
  }
}

@media (max-width: 480px) {
  .service-card.modern-card {
    padding: 1.5rem 1.25rem;
    min-height: 360px;
  }

  .service-title .title-text {
    font-size: 1.125rem;
  }

  .service-description {
    font-size: 0.9rem;
  }

  .service-icon {
    width: 70px;
    height: 70px;
  }

  .feature-highlights {
    flex-direction: column;
    align-items: center;
  }
}

/* Advanced Interaction States */
.service-card.modern-card:focus-within {
  .premium-border {
    opacity: 0.6;
  }

  .service-title .title-underline {
    width: 100%;
  }
}

.service-card.modern-card:active {
  transform: scale(0.98);
}
</style>
