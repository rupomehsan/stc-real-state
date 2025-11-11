<template>
  <div class="swiper-slide">
    <div class="testi-block style-2" dir="ltr">
      <div class="top-wrap">
        <div class="quote">
          <img src="assets/frontend/img/icon/testi-2quote.svg" alt="quote" />
        </div>
      </div>
      <div class="testi-content pe-xl-5 px-xl-5">
        <p class="box-text" v-html="testimonial?.feedback"></p>
      </div>
      <div class="bottom-wrap">
        <!-- <div class="box-review">
          <i class="fa-sharp fa-solid fa-star"></i>
          <i class="fa-sharp fa-solid fa-star"></i>
          <i class="fa-sharp fa-solid fa-star"></i>
          <i class="fa-sharp fa-solid fa-star"></i>
          <i class="fa-sharp fa-solid fa-star"></i>
        </div> -->
        <div class="team-img">
          <div class="image-container">
            <div class="icon-pulse pulse-1"></div>
            <div class="icon-pulse pulse-2"></div>
            <div class="icon-pulse pulse-3"></div>
            <img
              :src="
                testimonial?.image
                  ? '/' + testimonial.image
                  : 'assets/frontend/img/testimonial/testi-2-1.jpg'
              "
              alt="Team"
            />
          </div>
        </div>
        <div class="content">
          <h3 class="box-title">{{ testimonial?.name }}</h3>
          <p class="text">{{ testimonial?.designation }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    testimonial: {
      type: Object,
      required: true,
    },
  },
};
</script>

<style scoped>
.testi-block.style-2 .bottom-wrap .team-img {
  position: relative !important;
  display: inline-block !important;
}

.testi-block.style-2 .bottom-wrap .team-img .image-container {
  position: relative !important;
  display: inline-block !important;
}

.testi-block.style-2 .bottom-wrap .team-img img {
  height: 180px !important;
  width: 180px !important;
  object-fit: cover !important;
  object-position: top !important;
  border: 3px solid #ffffff !important;
  border-radius: 50% !important;
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.12), 0 4px 16px rgba(0, 0, 0, 0.08),
    0 2px 8px rgba(0, 0, 0, 0.06), inset 0 1px 0 rgba(255, 255, 255, 0.1) !important;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
  position: relative !important;
  z-index: 2 !important;
}

.testi-block.style-2 .bottom-wrap .team-img img:hover {
  transform: translateY(-2px) scale(1.02) !important;
  box-shadow: 0 12px 48px rgba(0, 0, 0, 0.15), 0 6px 24px rgba(0, 0, 0, 0.12),
    0 3px 12px rgba(0, 0, 0, 0.08), inset 0 1px 0 rgba(255, 255, 255, 0.15) !important;
}

.testi-block.style-2 .bottom-wrap .team-img .icon-pulse {
  position: absolute !important;
  top: 50% !important;
  left: 50% !important;
  border-radius: 50% !important;
  transform: translate(-50%, -50%) !important;
  z-index: 1 !important;
}

.testi-block.style-2 .bottom-wrap .team-img .icon-pulse.pulse-1 {
  width: 220px !important;
  height: 220px !important;
  border: 2px solid rgba(99, 102, 241, 0.3) !important;
  animation: pulse-ring-1 2s ease-in-out infinite !important;
}

.testi-block.style-2 .bottom-wrap .team-img .icon-pulse.pulse-2 {
  width: 260px !important;
  height: 260px !important;
  border: 2px solid rgba(59, 130, 246, 0.25) !important;
  animation: pulse-ring-2 2.5s ease-in-out infinite 0.5s !important;
}

.testi-block.style-2 .bottom-wrap .team-img .icon-pulse.pulse-3 {
  width: 300px !important;
  height: 300px !important;
  border: 2px solid rgba(147, 51, 234, 0.2) !important;
  animation: pulse-ring-3 3s ease-in-out infinite 1s !important;
}

@keyframes pulse-ring-1 {
  0% {
    transform: translate(-50%, -50%) scale(0.8) rotate(0deg);
    opacity: 1;
    border-radius: 50%;
  }
  25% {
    transform: translate(-50%, -50%) scale(0.95) rotate(90deg);
    opacity: 0.9;
    border-radius: 45% 55% 60% 40%;
  }
  50% {
    transform: translate(-50%, -50%) scale(1.1) rotate(180deg);
    opacity: 0.7;
    border-radius: 60% 40% 45% 55%;
  }
  75% {
    transform: translate(-50%, -50%) scale(1.2) rotate(270deg);
    opacity: 0.4;
    border-radius: 40% 60% 55% 45%;
  }
  100% {
    transform: translate(-50%, -50%) scale(1.3) rotate(360deg);
    opacity: 0;
    border-radius: 50%;
  }
}

@keyframes pulse-ring-2 {
  0% {
    transform: translate(-50%, -50%) scale(0.9) rotate(0deg);
    opacity: 0.8;
    border-radius: 50%;
  }
  20% {
    transform: translate(-50%, -50%) scale(1) rotate(72deg);
    opacity: 0.7;
    border-radius: 55% 45% 65% 35%;
  }
  40% {
    transform: translate(-50%, -50%) scale(1.1) rotate(144deg);
    opacity: 0.6;
    border-radius: 65% 35% 45% 55%;
  }
  60% {
    transform: translate(-50%, -50%) scale(1.25) rotate(216deg);
    opacity: 0.4;
    border-radius: 45% 55% 35% 65%;
  }
  80% {
    transform: translate(-50%, -50%) scale(1.4) rotate(288deg);
    opacity: 0.2;
    border-radius: 35% 65% 55% 45%;
  }
  100% {
    transform: translate(-50%, -50%) scale(1.5) rotate(360deg);
    opacity: 0;
    border-radius: 50%;
  }
}

@keyframes pulse-ring-3 {
  0% {
    transform: translate(-50%, -50%) scale(1) rotate(0deg);
    opacity: 0.6;
    border-radius: 50%;
  }
  15% {
    transform: translate(-50%, -50%) scale(1.1) rotate(54deg);
    opacity: 0.5;
    border-radius: 60% 40% 70% 30%;
  }
  30% {
    transform: translate(-50%, -50%) scale(1.2) rotate(108deg);
    opacity: 0.4;
    border-radius: 70% 30% 40% 60%;
  }
  45% {
    transform: translate(-50%, -50%) scale(1.35) rotate(162deg);
    opacity: 0.3;
    border-radius: 40% 60% 30% 70%;
  }
  60% {
    transform: translate(-50%, -50%) scale(1.5) rotate(216deg);
    opacity: 0.2;
    border-radius: 30% 70% 60% 40%;
  }
  75% {
    transform: translate(-50%, -50%) scale(1.65) rotate(270deg);
    opacity: 0.1;
    border-radius: 60% 40% 70% 30%;
  }
  100% {
    transform: translate(-50%, -50%) scale(1.8) rotate(360deg);
    opacity: 0;
    border-radius: 50%;
  }
}

/* Alternative wave pulse with different colors on hover */
.testi-block.style-2 .bottom-wrap .team-img:hover .icon-pulse.pulse-1 {
  border-color: rgba(16, 185, 129, 0.4) !important;
  animation-duration: 1.5s !important;
}

.testi-block.style-2 .bottom-wrap .team-img:hover .icon-pulse.pulse-2 {
  border-color: rgba(34, 197, 94, 0.3) !important;
  animation-duration: 2s !important;
}

.testi-block.style-2 .bottom-wrap .team-img:hover .icon-pulse.pulse-3 {
  border-color: rgba(6, 182, 212, 0.25) !important;
  animation-duration: 2.5s !important;
}
</style>
