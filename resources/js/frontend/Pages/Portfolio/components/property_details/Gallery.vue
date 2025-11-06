<template>
  <div class="gallery-container">
    <h3 class="page-title mt-50 mb-30 fadeinup wow">
      Exclusive Property Gallery
    </h3>
    <div class="row gy-4 fadeinup wow m-0 p-0">
      <div
        v-for="(image, index) in gallery"
        :key="index"
        class="col-md-3 m-0 p-0"
      >
        <div class="property-gallery-card m-0 p-0">
          <div class="property-gallery-card-img">
            <img
              class="w-100"
              :src="image ? '/' + image : image"
              :alt="`Gallery image ${index + 1}`"
            />
          </div>
          <a
            class="icon-btn gallery-image-link"
            :href="image ? '/' + image : image"
            @click.prevent="openImagePopup($event, index)"
          >
            <i class="fa-solid fa-eye"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    gallery: {
      type: Array,
      required: true,
    },
  },
  mounted() {
    this.initMagnificPopup();
  },
  updated() {
    this.initMagnificPopup();
  },
  beforeDestroy() {
    // Clean up Magnific Popup instances thoroughly
    if (window.$ && window.$.fn.magnificPopup && this.$el) {
      try {
        $.magnificPopup.close();
        $(this.$el)
          .find(".image-popup")
          .each(function () {
            if ($(this).data("magnificPopup")) {
              $(this).magnificPopup("destroy");
            }
          });
      } catch (e) {
        console.log("Error during cleanup:", e);
      }
    }
  },
  methods: {
    getColumnClass(index) {
      // Create a pattern: col-xl-7, col-xl-5, col-xl-5, col-xl-7, col-xl-7, col-xl-5, ...
      const pattern = [7, 5, 5, 7, 7, 5];
      const colSize = pattern[index % pattern.length];
      return `col-xl-${colSize}`;
    },
    initMagnificPopup() {
      // Completely destroy any existing instances first
      if (window.$ && window.$.fn.magnificPopup) {
        try {
          // Close any open popupsfuio9ohguyffy9 vf   99bookv
          $.magnificPopup.close();

          // Remove all existing magnific popup data and events
          $(".image-popup").each(function () {
            if ($(this).data("magnificPopup")) {
              $(this).magnificPopup("destroy");
            }
          });
        } catch (e) {
          console.log("Error cleaning up existing popups:", e);
        }
      }

      // Wait for DOM to be fully ready
      this.$nextTick(() => {
        setTimeout(() => {
          if (!window.$ || !window.$.fn.magnificPopup) {
            console.error("Magnific Popup not available");
            return;
          }

          const $container = $(this.$el);
          const $imageLinks = $container.find(".image-popup");

          if ($imageLinks.length === 0) {
            console.log("No image-popup elements found");
            return;
          }

          try {
            $imageLinks.magnificPopup({
              type: "image",
              gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1],
              },
              image: {
                titleSrc: function (item) {
                  return "Gallery image " + (item.index + 1);
                },
              },
              zoom: {
                enabled: true,
                duration: 300,
              },
              callbacks: {
                beforeOpen: function () {
                  // Additional safety check
                  if (!this.st.el || this.st.el.length === 0) {
                    console.log("Element not found, preventing popup");
                    return false;
                  }

                  // Check if element is still in DOM
                  if (!$.contains(document, this.st.el[0])) {
                    console.log("Element not in DOM, preventing popup");
                    return false;
                  }

                  return true;
                },
                open: function () {
                  console.log("Magnific popup opened successfully");
                },
                close: function () {
                  console.log("Magnific popup closed");
                },
              },
            });

            console.log(
              "Magnific Popup initialized for",
              $imageLinks.length,
              "elements"
            );
          } catch (error) {
            console.error("Error initializing Magnific Popup:", error);
          }
        }, 200);
      });
    },
    openImagePopup(event, index) {
      event.preventDefault();

      if (!window.$ || !window.$.fn.magnificPopup) {
        console.error("Magnific Popup not available");
        // Fallback: open in new window
        window.open(event.currentTarget.href, "_blank");
        return;
      }

      // Create items array for gallery
      const items = this.gallery.map((image, i) => ({
        src: image ? "/" + image : image,
        title: `Gallery image ${i + 1}`,
      }));

      try {
        $.magnificPopup.open(
          {
            items: items,
            gallery: {
              enabled: true,
            },
            type: "image",
            mainClass: "mfp-img-mobile",
            image: {
              titleSrc: "title",
            },
          },
          index
        );
      } catch (error) {
        console.error("Error opening popup:", error);
        // Fallback: open in new window
        window.open(event.currentTarget.href, "_blank");
      }
    },
  },
};
</script>

<style lang="scss" scoped>
.property-gallery-card {
  position: relative;
  overflow: hidden;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
  margin-bottom: 20px;
  border: 3px solid #70707025;
  &:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    border-radius: 0px !important;
    .property-gallery-card-img img {
      transform: scale(1.05);
      border-radius: 0px !important;
    }

    .icon-btn {
      opacity: 1;
      visibility: visible;
    }
  }
}

.property-gallery-card-img {
  position: relative;
  overflow: hidden;
  height: 450px; // Increased height for better visual impact
  border-radius: 0px !important;
  img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transition: all 0.4s ease;
    border-radius: 0px !important;
  }
}

// Different heights for variety (like the reference image)
.col-xl-7 .property-gallery-card-img {
  height: 420px; // Larger images for bigger columns
}

.col-xl-5 .property-gallery-card-img {
  height: 300px; // Smaller images for smaller columns
}

.icon-btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 60px;
  height: 60px;
  background: rgba(255, 255, 255, 0.95);
  color: #333;
  border: none;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
  cursor: pointer;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
  backdrop-filter: blur(10px);

  &:hover {
    background: #fff;
    color: #007bff;
    transform: translate(-50%, -50%) scale(1.1);
  }

  i {
    font-size: 22px;
  }
}

// Professional title styling
.page-title {
  font-size: 2.2rem;
  font-weight: 700;
  color: #1a1a1a;
  margin-bottom: 1rem;
  position: relative;

  &::after {
    content: "";
    position: absolute;
    bottom: -8px;
    left: 0;
    width: 60px;
    height: 3px;
    background: linear-gradient(45deg, #007bff, #0056b3);
  }
}
.property-gallery-card::before {
  border-radius: 0px !important;
}
// Add spacing for better visual hierarchy
.gallery-container {
  margin: 2rem 0;

  .row {
    margin-left: -10px;
    margin-right: -10px;

    [class*="col-"] {
      padding-left: 10px;
      padding-right: 10px;
    }
  }
}

// Responsive adjustments
@media (max-width: 1199px) {
  .property-gallery-card-img {
    height: 280px;
  }

  .col-xl-7 .property-gallery-card-img,
  .col-xl-5 .property-gallery-card-img {
    height: 280px;
  }
}

@media (max-width: 767px) {
  .property-gallery-card-img {
    height: 250px;
  }

  .page-title {
    font-size: 20px !important;
  }

  .icon-btn {
    width: 50px;
    height: 50px;
    font-size: 18px;

    i {
      font-size: 20px;
    }
  }
}
</style>
