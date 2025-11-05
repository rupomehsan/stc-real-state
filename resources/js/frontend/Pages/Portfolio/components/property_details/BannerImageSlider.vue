<template>
  <div class="property-image-gallery">
    <!-- Main Image Display -->
    <div class="main-image-container">
      <div class="property-main-image">
        <img
          :src="'/' + banner_images[selectedImageIndex]"
          :alt="`Property Image ${selectedImageIndex + 1}`"
          v-if="banner_images && banner_images.length > 0"
        />
      </div>
    </div>

    <!-- Thumbnail Gallery -->
    <div
      class="thumbnail-gallery"
      v-if="banner_images && banner_images.length > 1"
    >
      <div class="thumbnail-container">
        <div
          class="thumbnail-item"
          :class="{ active: index === selectedImageIndex }"
          v-for="(image, index) in banner_images"
          :key="index"
          @click="selectImage(index)"
        >
          <img :src="'/' + image" :alt="`Thumbnail ${index + 1}`" />
        </div>
      </div>
    </div>
    <AtAGlance :property="property" v-if="property" />
  </div>
</template>

<script>
import AtAGlance from "../AtAGlance.vue";

export default {
  components: {
    AtAGlance,
  },
  props: {
    banner_images: {
      type: Array,
      required: true,
    },
  },
  data() {
    return {
      selectedImageIndex: 0,
    };
  },
  methods: {
    selectImage(index) {
      this.selectedImageIndex = index;
    },
  },
};
</script>

<style lang="scss" scoped>
.property-image-gallery {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
}

/* Main Image Container */
.main-image-container {
  margin-bottom: 20px;
}

.property-main-image {
  background: #f8f9fa;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);

  img {
    width: 100%;
    height: auto;
    display: block;
    // max-height: 600px;
    object-fit: contain;
    object-position: center;
  }
}

/* Thumbnail Gallery */
.thumbnail-gallery {
  .thumbnail-container {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
    justify-content: flex-start;
    align-items: center;
    padding: 10px 0;
  }

  .thumbnail-item {
    width: 120px;
    height: 80px;
    border-radius: 8px;
    overflow: hidden;
    border: 3px solid #e1e5e9;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    flex-shrink: 0;

    &:hover {
      border-color: #007bff;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0, 123, 255, 0.15);
    }

    &.active {
      border-color: #007bff;
      box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
      transform: translateY(-1px);

      &::after {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 24px;
        height: 24px;
        background: #007bff;
        border-radius: 50%;
        opacity: 0.9;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      &::before {
        content: "✓";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 14px;
        font-weight: bold;
        z-index: 1;
      }
    }

    img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      display: block;
      transition: transform 0.3s ease;
    }

    &:hover img {
      transform: scale(1.05);
    }
  }
}

/* Responsive Design */
@media (max-width: 768px) {
  .property-main-image {
    img {
      max-height: 400px;
    }
  }

  .thumbnail-gallery {
    .thumbnail-item {
      width: 90px;
      height: 60px;
    }
  }
}

@media (max-width: 480px) {
  .property-main-image {
    img {
      max-height: 300px;
    }
  }

  .thumbnail-gallery {
    .thumbnail-container {
      gap: 8px;
    }

    .thumbnail-item {
      width: 70px;
      height: 50px;
    }
  }
}

@media (max-width: 360px) {
  .thumbnail-gallery {
    .thumbnail-item {
      width: 60px;
      height: 40px;
    }
  }
}
</style>
