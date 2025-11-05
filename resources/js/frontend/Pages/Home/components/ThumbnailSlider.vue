<template>
  <div class="thumbnail-slider-container">
    <!-- Static Category Blocks - Always Visible -->
    <div class="category-blocks-wrapper">
      <div class="category-blocks">
        <div class="category-block residential">
          <div class="category-icon">
            <i class="fa-solid fa-building-user"></i>
          </div>
          <h4>Real Estate</h4>
        </div>
        <div class="category-block commercial">
          <div class="category-icon">
            <i class="fa-solid fa-person-digging"></i>
          </div>
          <h4>Construction</h4>
        </div>
        <div class="category-block landowner">
          <div class="category-icon">
            <i class="fa-solid fa-cubes"></i>
          </div>
          <h4>STC Bricks</h4>
        </div>
      </div>
    </div>

    <swiper
      :modules="modules"
      :slides-per-view="1"
      :space-between="0"
      navigation
      :pagination="{
        clickable: true,
        dynamicBullets: true,
      }"
      :parallax="true"
      :speed="1500"
      effect="fade"
      :fadeEffect="{
        crossFade: true,
      }"
      :autoplay="{
        delay: 3000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      }"
      :loop="true"
      @swiper="onSwiper"
      @slideChange="onSlideChange"
      class="thumbnail-swiper"
    >
      <swiper-slide v-for="(banner, index) in banners" :key="index">
        <div class="slide-content">
          <div class="hero-img-shape-1">
            <div class="logo-icon-wrap border">
              <a href="javascript:void(0)" class="logo-icon popup-video fs-3"
                ><i class="fa-solid fa-people-roof"></i
              ></a>
              <CircleText />
            </div>
          </div>
          <div class="parallax-bg" data-swiper-parallax="-23%">
            <img
              :src="
                '/' +
                (banner?.image ?? '/assets/frontend/img/hero/hero_bg_1_3.jpg')
              "
              alt="Property "
            />
            <div class="overlay-gradient"></div>
          </div>
          <div class="container">
            <div class="row">
              <div class="slide-text">
                <h3 data-swiper-parallax="100" class="typing-heading">
                  {{ banner?.short_title }}
                </h3>
                <p data-swiper-parallax="200">
                  {{ banner?.short_description }}
                </p>
                <a
                  :href="banner?.permalink ?? '#'"
                  class="th-btn style2 pill"
                  data-swiper-parallax="300"
                >
                  View Details
                </a>
              </div>
            </div>
          </div>
        </div>
      </swiper-slide>
    </swiper>
  </div>
  <div class="search-area">
    <form action="https://html.themeholy.com/submit-form">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="search-wrap">
              <h5>
                “Constructing Excellence” – this is not just our slogan, it is
                our promise. Every project we take on is executed with
                precision, dedication, and a commitment to surpass expectations.
              </h5>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>
<script>
import CircleText from "./CircleText.vue";
import { store as home_store } from "../Store/home_store";
import { mapActions, mapState } from "pinia";
import { store as header_store } from "../../../Shared/Store/header_store.js";

// import Swiper core and required modules
import {
  Navigation,
  Pagination,
  A11y,
  Parallax,
  Autoplay,
  EffectFade,
} from "swiper/modules";

// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/effect-fade";

// Import Swiper styles
export default {
  components: {
    Swiper,
    SwiperSlide,
    CircleText,
  },
  setup() {
    const onSwiper = (swiper) => {
      console.log("Swiper initialized:", swiper);
    };
    const onSlideChange = () => {
      console.log("Slide changed");
    };
    return {
      onSwiper,
      onSlideChange,
      modules: [Navigation, Pagination, A11y, Parallax, Autoplay, EffectFade],
    };
  },
  created() {
    this.fetch_banners();
  },

  methods: {
    ...mapActions(home_store, ["fetch_banners"]),
  },
  computed: {
    ...mapState(home_store, ["banners"]),
  },
};
</script>

<style scoped>
.thumbnail-slider-container {
  position: relative;
  margin: 0;
  padding: 0;
}

/* Static Category Blocks */
.category-blocks-wrapper {
  position: absolute;
  bottom: 45px;
  left: 0;
  right: 0;
  z-index: 10;
  pointer-events: none;
  padding: 0 30px;
}

.category-blocks {
  display: flex;
  justify-content: center;
  align-items: stretch;
  gap: 0;
  max-width: 1200px;
  margin: 0 auto;
  pointer-events: auto;
}

.category-block {
  flex: 1;
  background: rgba(76, 63, 47, 0.85);
  backdrop-filter: blur(10px);
  padding: 30px 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 15px;
  cursor: pointer;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  border-right: 1px solid rgba(255, 255, 255, 0.1);
  position: relative;
  overflow: hidden;
}

.category-block:last-child {
  border-right: none;
}

.category-block::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 4px;
  background: linear-gradient(90deg, var(--theme-color), var(--theme-color2));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.category-block:hover {
  background: rgba(76, 63, 47, 0.95);
  transform: translateY(-5px);
}

.category-block:hover::before {
  transform: scaleX(1);
}

.category-icon {
  width: 60px;
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(255, 255, 255, 0.1);
  border-radius: 50%;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.category-block:hover .category-icon {
  background: linear-gradient(135deg, var(--theme-color), var(--theme-color2));
  transform: scale(1.1) rotate(5deg);
  box-shadow: 0 8px 25px rgba(var(--theme-color-rgb), 0.4);
}

.category-icon i {
  font-size: 28px;
  color: var(--white-color);
  transition: all 0.3s ease;
}

.category-block:hover .category-icon i {
  transform: scale(1.1);
}

.category-block h4 {
  color: var(--white-color);
  font-size: 18px;
  font-weight: 600;
  margin: 0;
  text-transform: capitalize;
  letter-spacing: 0.5px;
  transition: all 0.3s ease;
}

.category-block:hover h4 {
  color: var(--theme-color);
  transform: translateY(-2px);
}

/* Residential specific color */
.category-block.residential:hover {
  background: rgba(76, 63, 47, 0.98);
}

.category-block.residential:hover .category-icon {
  background: linear-gradient(135deg, #ff6b6b, #ee5a24);
}

/* Commercial specific color */
.category-block.commercial:hover .category-icon {
  background: linear-gradient(135deg, #54a0ff, #00d2d3);
}

/* Landowner specific color */
.category-block.landowner:hover .category-icon {
  background: linear-gradient(135deg, #1dd1a1, #10ac84);
}

.thumbnail-swiper {
  width: 100%;
  /* padding: 0 60px; */
  overflow: hidden;
}

.slide-content {
  width: 100%;
  height: 100vh;
  min-height: 600px;
  position: relative;
  overflow: hidden;
  background: -webkit-linear-gradient(left, transparent, var(--gray-color));
  background: linear-gradient(90deg, transparent, var(--gray-color));
  display: flex;
  align-items: center;
}

.parallax-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
}

.parallax-bg img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  filter: brightness(0.8) contrast(1.1);
  transition: all 0.8s ease;
}

.overlay-gradient {
  content: "";
  width: 100%;
  height: 100%;
  position: absolute;
  inset: 0;
  background: -webkit-linear-gradient(left, transparent, var(--gray-color));
  background: linear-gradient(90deg, transparent, var(--gray-color));
  z-index: 1;
  opacity: 0.5;
}

.slide-text {
  color: white;
  z-index: 3;
  position: relative;
}

.property-badge {
  display: inline-block;
  padding: 8px 16px;
  border-radius: 20px;
  font-size: 0.8rem;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-bottom: 15px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.property-badge {
  background: linear-gradient(135deg, #ff6b6b, #ee5a24);
}

.property-badge.new {
  background: linear-gradient(135deg, #00d2d3, #54a0ff);
}

.property-badge.family {
  background: linear-gradient(135deg, #5f27cd, #341f97);
}

.property-badge.luxury {
  background: linear-gradient(135deg, #feca57, #ff9ff3);
}

.property-badge.waterfront {
  background: linear-gradient(135deg, #48dbfb, #0abde3);
}

.property-badge.garden {
  background: linear-gradient(135deg, #00d2d3, #1dd1a1);
}

.slide-text h3 {
  font-size: 80px;
  line-height: 105px !important;
  font-weight: 800;
  margin-bottom: 45px;
  margin-top: -0.2em;
  color: var(--white-color);
  line-height: 1.1;
  animation: slideInFromLeft 1s cubic-bezier(0.4, 0, 0.2, 1) forwards;
  opacity: 0;
}

/* Typing heading with overlay animation */
.typing-heading {
  position: relative;
  display: inline-block;
  overflow: hidden;
}

.typing-heading::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, var(--theme-color), var(--theme-color2));
  transform: translateY(-100%);
  z-index: 1;
}

.swiper-slide-active .typing-heading::before {
  animation: overlaySlideDown 1.2s cubic-bezier(0.4, 0, 0.2, 1) forwards;
}

.swiper-slide-active .slide-text h3 {
  animation: slideInFromLeft 1s cubic-bezier(0.4, 0, 0.2, 1) 0.3s forwards,
    typingReveal 5s steps(12) 1.2s infinite;
  animation-delay: 0.3s, 1.2s;
}

.slide-text p {
  font-size: 18px;
  color: var(--smoke-color);
  max-width: 600px;
  font-family: var(--body-font);
  margin: 0 0 18px 0;
  line-height: 1.75;
  opacity: 0;
  animation: fadeOutDown 0.6s cubic-bezier(0.4, 0, 0.6, 1) forwards;
}

.swiper-slide-active .slide-text p {
  animation: fadeInUp 1s cubic-bezier(0.4, 0, 0.2, 1) 0.5s forwards;
}

.slide-text a {
  opacity: 0;
  animation: fadeOutDown 0.6s cubic-bezier(0.4, 0, 0.6, 1) forwards;
}

.swiper-slide-active .slide-text a {
  animation: fadeInUp 1s cubic-bezier(0.4, 0, 0.2, 1) 0.7s forwards;
}

.th-btn.style2.pill {
  background: linear-gradient(135deg, #d4af37, #f4d03f);
  color: #1a1a1a;
  border: none;
  padding: 15px 35px;
  border-radius: 50px;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 8px 25px rgba(212, 175, 55, 0.4);
  text-transform: uppercase;
  letter-spacing: 1px;
  text-decoration: none;
  display: inline-block;
}

.th-btn.style2.pill:hover {
  background: linear-gradient(135deg, #f4d03f, #d4af37);
  transform: translateY(-3px);
  box-shadow: 0 12px 35px rgba(212, 175, 55, 0.6);
  color: #000;
}

.property-details {
  display: flex;
  gap: 20px;
  margin-bottom: 25px;
  align-items: center;
}

.price {
  font-size: 1.8rem;
  font-weight: bold;
  color: #feca57;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
}

.location {
  font-size: 1rem;
  opacity: 0.9;
  background: rgba(255, 255, 255, 0.1);
  padding: 5px 12px;
  border-radius: 15px;
  backdrop-filter: blur(10px);
}

.cta-button {
  background: linear-gradient(135deg, #667eea, #764ba2);
  color: white;
  border: none;
  padding: 15px 30px;
  border-radius: 50px;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
  text-transform: uppercase;
  letter-spacing: 1px;
}

.cta-button:hover {
  transform: translateY(-3px);
  box-shadow: 0 12px 35px rgba(102, 126, 234, 0.4);
  background: linear-gradient(135deg, #764ba2, #667eea);
}

/* Navigation buttons */
:deep(.swiper-button-next),
:deep(.swiper-button-prev) {
  color: white;
  /* background: linear-gradient(
    135deg,
    rgba(255, 255, 255, 0.2),
    rgba(255, 255, 255, 0.1)
  ); */
  width: 30px;
  height: 30px;
  border-radius: 50%;
  /* box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2); */
  margin-top: -30px;
  margin-inline: 20px;
  /* backdrop-filter: blur(10px); */
  /* border: 1px solid rgba(255, 255, 255, 0.2); */
  transition: all 0.3s ease;
}

:deep(.swiper-button-next:after),
:deep(.swiper-button-prev:after) {
  font-size: 20px;
  font-weight: bold;
}

:deep(.swiper-button-next:hover),
:deep(.swiper-button-prev:hover) {
  background: linear-gradient(
    135deg,
    rgba(255, 255, 255, 0.3),
    rgba(255, 255, 255, 0.2)
  );
  transform: scale(1.1) translateY(-2px);
  box-shadow: 0 12px 35px rgba(0, 0, 0, 0.3);
}

/* Pagination */
:deep(.swiper-pagination) {
  bottom: 30% !important;
  top: auto !important;
  right: 40px !important;
  left: auto !important;
  width: auto !important;
  transform: none;
  display: flex;
  flex-direction: column;
  gap: 15px;
  z-index: 20;
}

:deep(.swiper-pagination-bullet) {
  background: rgba(255, 255, 255, 0.8);
  opacity: 1;
  width: 14px;
  height: 14px;
  margin: 0 !important;
  transition: all 0.3s ease;
  border-radius: 50%;
  border: 2px solid rgba(255, 255, 255, 0.3);
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
}

:deep(.swiper-pagination-bullet:hover) {
  background: rgba(255, 255, 255, 1);
  transform: scale(1.2);
  border-color: rgba(255, 255, 255, 0.6);
}

:deep(.swiper-pagination-bullet-active) {
  opacity: 1;
  background: linear-gradient(135deg, var(--theme-color), var(--theme-color2));
  transform: scale(1.4);
  width: 14px;
  height: 14px;
  border-radius: 50%;
  border: 2px solid rgba(255, 255, 255, 0.8);
  box-shadow: 0 4px 20px rgba(102, 126, 234, 0.6);
}

/* Responsive design */
@media (max-width: 1024px) {
  /* .slide-content {
    height: 70vh;
    min-height: 500px;
  } */

  .slide-text h3 {
    font-size: 60px;
    line-height: 85px !important;
    margin-bottom: 25px;
  }

  .property-details {
    flex-direction: column;
    align-items: flex-start;
    gap: 10px;
  }

  .category-blocks {
    max-width: 100%;
  }

  .category-block {
    padding: 25px 15px;
  }

  .category-icon {
    width: 50px;
    height: 50px;
  }

  .category-icon i {
    font-size: 24px;
  }

  .category-block h4 {
    font-size: 16px;
  }

  :deep(.swiper-pagination) {
    right: 25px !important;
    gap: 12px;
  }

  :deep(.swiper-pagination-bullet) {
    width: 12px;
    height: 12px;
  }

  :deep(.swiper-pagination-bullet-active) {
    width: 12px;
    height: 12px;
  }
}

@media (max-width: 768px) {
  .thumbnail-slider-container {
    margin: 0;
    padding: 0;
  }

  /* .thumbnail-swiper {
    padding: 0 30px;
  } */
  .slide-text h3 {
    font-size: 40px;
    line-height: 65px !important;
    margin-bottom: 25px;
  }

  .cta-button {
    padding: 12px 25px;
    font-size: 0.9rem;
  }

  :deep(.swiper-button-next),
  :deep(.swiper-button-prev) {
    width: 45px;
    height: 45px;
    margin-top: -22px;
  }

  :deep(.swiper-button-next:after),
  :deep(.swiper-button-prev:after) {
    font-size: 16px;
  }

  .category-blocks {
    flex-direction: row;
    gap: 0;
  }

  .category-block {
    padding: 20px 10px;
  }

  .category-icon {
    width: 45px;
    height: 45px;
  }

  .category-icon i {
    font-size: 20px;
  }

  .category-block h4 {
    font-size: 14px;
  }

  :deep(.swiper-pagination) {
    right: 20px !important;
    gap: 10px;
  }

  :deep(.swiper-pagination-bullet) {
    width: 11px;
    height: 11px;
  }

  :deep(.swiper-pagination-bullet-active) {
    width: 11px;
    height: 11px;
  }
}

@media (max-width: 480px) {
  /* .thumbnail-swiper {
    padding: 0 20px;
  } */

  .property-badge {
    font-size: 0.7rem;
    padding: 6px 12px;
  }

  .slide-text h3 {
    font-size: 40px;
  }

  :deep(.swiper-button-next),
  :deep(.swiper-button-prev) {
    width: 40px;
    height: 40px;
    margin-top: -20px;
  }

  :deep(.swiper-button-next:after),
  :deep(.swiper-button-prev:after) {
    font-size: 14px;
  }

  .category-blocks {
    /* flex-direction: column; */
    gap: 0;
  }

  .category-block {
    padding: 15px 10px;
    border-right: none;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  }

  .category-block:last-child {
    border-bottom: none;
  }

  .category-block::before {
    height: 3px;
  }

  .category-icon {
    width: 40px;
    height: 40px;
  }

  .category-icon i {
    font-size: 18px;
  }

  .category-block h4 {
    font-size: 13px;
  }

  :deep(.swiper-pagination) {
    right: 10px !important;
    gap: 6px;
  }

  :deep(.swiper-pagination-bullet) {
    width: 8px;
    height: 8px;
  }

  :deep(.swiper-pagination-bullet-active) {
    width: 8px;
    height: 8px;
  }
}

/* Fade effect enhancement */
:deep(.swiper-slide) {
  opacity: 0;
  transition: opacity 1.5s ease-in-out;
}

:deep(.swiper-slide-active) {
  opacity: 1;
}

:deep(.swiper-fade .swiper-slide) {
  pointer-events: none;
}

:deep(.swiper-fade .swiper-slide-active) {
  pointer-events: auto;
}

/* Loading animation */
@keyframes shimmer {
  0% {
    transform: translateX(-100%);
  }
  100% {
    transform: translateX(100%);
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

@keyframes fadeOutDown {
  from {
    opacity: 1;
    transform: translateY(0);
  }
  to {
    opacity: 0;
    transform: translateY(20px);
  }
}

@keyframes slideInFromLeft {
  0% {
    opacity: 0;
    transform: translateX(-100px);
  }
  100% {
    opacity: 1;
    transform: translateX(0);
  }
}

/* Overlay slide down animation */
@keyframes overlaySlideDown {
  0% {
    transform: translateY(-100%);
  }
  50% {
    transform: translateY(0);
  }
  100% {
    transform: translateY(100%);
  }
}

/* Typing reveal animation */
@keyframes typingReveal {
  0% {
    clip-path: inset(0 100% 0 0);
  }
  30% {
    clip-path: inset(0 0 0 0);
  }
  70% {
    clip-path: inset(0 0 0 0);
  }
  100% {
    clip-path: inset(0 100% 0 0);
  }
}
</style>
