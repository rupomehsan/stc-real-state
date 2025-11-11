<template>
  <div class="modern-property-card">
    <!-- Skeleton State -->
    <template v-if="isLoading">
      <div class="skeleton-card">
        <div class="skeleton-image"></div>
        <div class="skeleton-overlay">
          <div class="skeleton-title"></div>
          <div class="skeleton-location"></div>
          <div class="skeleton-button"></div>
        </div>
      </div>
    </template>

    <!-- Actual Content -->
    <template v-else>
      <Link
        :href="`/portfolio/property-details?slug=${property?.slug}`"
        class="card-link"
      >
        <div class="property-card-container">
          <!-- Background Image -->
          <div class="background-image">
            <img
              :src="
                property?.banner_image?.[0] ||
                '/assets/frontend/img/popular/popular-1-1.jpg'
              "
              :alt="property?.property_name || 'Property Image'"
              class="card-bg-image"
            />
          </div>

          <!-- Gradient Overlay -->
          <div class="gradient-overlay"></div>

          <!-- Status Badge -->
          <!-- <div class="status-badge" :class="status">
          <i
            :class="
              status === 'completed' ? 'fas fa-check-circle' : 'fas fa-clock'
            "
          ></i>
          <span>{{ status === "completed" ? "Completed" : "Upcoming" }}</span>
        </div> -->

          <!-- Content Overlay -->
          <div class="content-overlay">
            <!-- Property Title -->
            <div class="property-info">
              <h2 class="property-name">
                {{ property?.property_name || "EDISON VERONA" }}
              </h2>
              <p class="property-location">
                <i class="fas fa-map-marker-alt"></i>
                {{ truncateAddress(property?.property_address) || "Uttara" }}
              </p>
            </div>

            <!-- Action Button -->
            <div class="action-section">
              <!-- Construction Progress for Upcoming -->

              <!-- Explore Button -->
              <div class="explore-btn">
                <span>Explore</span>
                <i class="fas fa-arrow-right"></i>
              </div>
            </div>
          </div>

          <!-- Additional Info Hover -->
        </div>
      </Link>
    </template>
  </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
  name: "PropertySliderCard",
  components: {
    Link,
  },
  props: {
    property: {
      type: Object,
      required: true,
    },
    isLoading: {
      type: Boolean,
      default: false,
    },
    status: {
      type: String,
      default: "completed",
      validator: (value) => ["completed", "upcoming"].includes(value),
    },
  },
  methods: {
    truncateAddress(address) {
      const defaultAddress = "Dhaka, Bangladesh";
      const fullAddress = address || defaultAddress;
      return fullAddress.length > 35
        ? fullAddress.substring(0, 35) + "..."
        : fullAddress;
    },

    formatPrice(price) {
      if (!price) return "0";
      return price.toLocaleString();
    },

    openImageGallery() {
      const images = this.property?.banner_image || [
        "/assets/frontend/img/popular/popular-1-1.jpg",
        "/assets/frontend/img/popular/popular-1-2.jpg",
      ];

      if (!window.$ || !$.magnificPopup) {
        console.error("Magnific Popup library not available");
        return;
      }

      const galleryItems = images.map((image, index) => ({
        src: image,
        type: "image",
        title: `${this.property?.property_name || "Property"} - Image ${
          index + 1
        }`,
      }));

      $.magnificPopup.open({
        items: galleryItems,
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          preload: [0, 1],
        },
        type: "image",
        mainClass: "mfp-img-mobile",
        image: {
          verticalFit: true,
          titleSrc: function (item) {
            return item.el ? item.el.attr("title") : "Property Image";
          },
        },
      });
    },
  },
};
</script>

<style scoped>
/* ========================================
   MODERN PROPERTY CARD STYLES
   ======================================== */

.card-link {
  display: block;
  text-decoration: none;
  color: inherit;
  width: 100%;
  height: 100%;
}

.card-link:hover {
  text-decoration: none;
  color: inherit;
}

.modern-property-card {
  position: relative;
  width: 100%;
  max-width: 430px;
  height: 550px;
  border-radius: 2px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
  transition: all 0.4s ease;
  cursor: pointer;
  margin: 0 auto;
}

.card-link:hover .modern-property-card {
  transform: translateY(-8px);
  box-shadow: 0 25px 80px rgba(0, 0, 0, 0.2);
}

.modern-property-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 25px 80px rgba(0, 0, 0, 0.2);
}

.property-card-container {
  position: relative;
  width: 100%;
  height: 100%;
}

/* ========================================
   BACKGROUND IMAGE SECTION
   ======================================== */

.background-image {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 1;
}

.card-bg-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.6s ease;
}

.card-link:hover .card-bg-image,
.modern-property-card:hover .card-bg-image {
  transform: scale(1.05);
}

.gradient-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(
    to bottom,
    rgb(0 0 0 / 0%) 0%,
    rgba(0, 0, 0, 0.3) 40%,
    rgba(0, 0, 0, 0.7) 80%,
    rgb(0 0 0 / 51%) 100%
  );
  z-index: 2;
}

/* Status Badge */
.status-badge {
  position: absolute;
  top: 20px;
  right: 20px;
  z-index: 4;
  display: flex;
  align-items: center;
  gap: 8px;
  padding: 10px 16px;
  border-radius: 25px;
  font-weight: 600;
  font-size: 0.85rem;
  backdrop-filter: blur(15px);
  border: 1px solid rgba(255, 255, 255, 0.3);
  transition: all 0.3s ease;
}

.status-badge.completed {
  background: rgba(16, 185, 129, 0.9);
  color: white;
}

.status-badge.ongoing {
  background: rgba(59, 130, 246, 0.9);
  color: white;
}

.status-badge.upcoming {
  background: rgba(245, 158, 11, 0.9);
  color: white;
}

.status-badge:hover {
  transform: scale(1.05);
}

/* ========================================
   CONTENT OVERLAY
   ======================================== */

.content-overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 30px 25px 25px;
  z-index: 3;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  height: 100%;
  /* background: linear-gradient(
    to top,
    rgba(0, 0, 0, 0.8) 0%,
    rgba(0, 0, 0, 0.4) 30%,
    transparent 60%
  ); */
}

.property-info {
  margin-bottom: 20px;
}

.property-name {
  font-size: 1.4rem;
  font-weight: 800;
  color: white;
  margin: 0 0 8px 0;
  line-height: 1.2;
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
}

.property-location {
  display: flex;
  align-items: center;
  gap: 8px;
  color: rgba(255, 255, 255, 0.9);
  font-size: 1rem;
  font-weight: 500;
  margin: 0;
}

.property-location i {
  color: #10b981;
  font-size: 0.9rem;
}

/* ========================================
   ACTION SECTION
   ======================================== */

.explore-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 6px;
  background: linear-gradient(135deg, #2564eb00, #3b83f600);
  color: white;
  padding: 8px 16px;
  border-radius: 8px;
  font-weight: 600;
  font-size: 0.8rem;
  border: 1px solid rgba(255, 255, 255, 0.3);
  transition: all 0.3s ease;
  text-transform: capitalize;
  letter-spacing: 0.3px;
  min-width: 85px;
  box-shadow: 0 2px 8px rgba(37, 99, 235, 0.3);
  cursor: pointer;
  pointer-events: none; /* Prevent button from interfering with card click */
}

.card-link:hover .explore-btn {
  background: linear-gradient(135deg, #1d4fd870, #2564eb6e);
  transform: translateY(-2px);
  box-shadow: 0 4px 12px rgba(37, 99, 235, 0.4);
  color: white;
}

.explore-btn i {
  transition: transform 0.3s ease;
  font-size: 0.7rem;
}

.card-link:hover .explore-btn i {
  transform: translateX(3px);
}

/* ========================================
   HOVER EFFECTS & ANIMATIONS
   ======================================== */

.property-card:hover {
  transform: scale(1.02);
  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4);
}

.property-card:hover .card-image::after {
  opacity: 0.8;
}

.property-card:hover .content-overlay {
  transform: translateY(-10px);
}

.property-card:hover .explore-btn {
  transform: translateY(-5px);
}

/* Construction Progress Styling */

/* Construction Progress */
.construction-progress {
  margin-top: 20px;
  padding-top: 20px;
  border-top: 1px solid #e5e7eb;
}

.progress-info {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 8px;
}

.progress-label {
  font-size: 0.85rem;
  color: #6b7280;
  font-weight: 500;
}

.progress-percentage {
  font-size: 0.9rem;
  font-weight: 700;
  color: #f59e0b;
}

.progress-bar {
  width: 100%;
  height: 8px;
  background: #f3f4f6;
  border-radius: 4px;
  overflow: hidden;
}

.progress-fill {
  height: 100%;
  background: linear-gradient(90deg, #f59e0b, #d97706);
  border-radius: 4px;
  transition: width 0.5s ease;
}

/* ========================================
   SKELETON STYLES
   ======================================== */

.skeleton-image {
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
  background-size: 200% 100%;
  animation: skeleton-loading 1.5s infinite;
}

.skeleton-badge,
.skeleton-title,
.skeleton-location,
.skeleton-features,
.skeleton-price {
  background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
  background-size: 200% 100%;
  animation: skeleton-loading 1.5s infinite;
  border-radius: 8px;
}

.skeleton-badge {
  width: 100px;
  height: 32px;
  margin-bottom: 15px;
}

.skeleton-title {
  width: 80%;
  height: 28px;
  margin-bottom: 12px;
}

.skeleton-location {
  width: 70%;
  height: 20px;
  margin-bottom: 20px;
}

.skeleton-features {
  width: 100%;
  height: 40px;
  margin-bottom: 25px;
}

.skeleton-price {
  width: 60%;
  height: 24px;
}

@keyframes skeleton-loading {
  0% {
    background-position: -200% 0;
  }
  100% {
    background-position: 200% 0;
  }
}

/* ========================================
   RESPONSIVE DESIGN
   ======================================== */

@media (max-width: 768px) {
  .property-card {
    min-height: 400px;
  }

  .content-overlay {
    padding: 25px;
    bottom: 20px;
    left: 20px;
    right: 20px;
  }

  .property-title {
    font-size: 1.8rem;
  }

  .explore-btn {
    padding: 7px 14px;
    font-size: 0.75rem;
    min-width: 80px;
  }

  .status-badge {
    top: 15px;
    right: 15px;
    padding: 8px 14px;
    font-size: 0.8rem;
  }
}

@media (max-width: 480px) {
  .property-card {
    min-height: 350px;
    border-radius: 15px;
  }

  .content-overlay {
    padding: 20px;
    bottom: 15px;
    left: 15px;
    right: 15px;
  }

  .property-title {
    font-size: 1.5rem;
    margin-bottom: 8px;
  }

  .property-location {
    font-size: 0.9rem;
  }

  .explore-btn {
    padding: 6px 12px;
    font-size: 0.7rem;
    min-width: 75px;
  }

  .status-badge {
    position: static;
    margin-bottom: 15px;
    align-self: flex-start;
  }

  .card-image::after {
    background: linear-gradient(
      to bottom,
      rgba(0, 0, 0, 0.2) 0%,
      rgba(0, 0, 0, 0.4) 40%,
      rgba(0, 0, 0, 0.8) 80%,
      rgba(0, 0, 0, 0.95) 100%
    );
  }
}
</style>
