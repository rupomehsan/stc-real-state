<template>
  <div
    v-for="(item, index) in videos"
    :key="index"
    :class="`col-md-4  filter-item fadeinup wow animated`"
  >
    <div class="video-card">
      <div class="video-wrapper">
        <iframe
          v-if="item.video && getEmbedUrl(item.video)"
          :src="getEmbedUrl(item.video)"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
          referrerpolicy="strict-origin-when-cross-origin"
          width="100%"
          height="450"
          loading="lazy"
          class="video-iframe"
          :title="item.title || 'Video'"
          @error="handleVideoError(item)"
          @load="handleVideoLoad(item)"
          style="min-height: 250px"
        ></iframe>
        <div v-else class="no-video">
          <i class="fa-solid fa-video-slash"></i>
          <p>No video available</p>
        </div>
      </div>
      <div class="video-info">
        <h5 class="video-title">{{ item.title }}</h5>
        <div class="video-meta">
          <span class="video-date">
            <i class="fa-regular fa-calendar"></i>
            {{ formatDate(item.created_at) }}
          </span>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    videos: {
      type: Array,
      required: true,
    },
  },
  methods: {
    formatDate(dateString) {
      const date = new Date(dateString);
      return date.toLocaleDateString("en-US", {
        year: "numeric",
        month: "short",
        day: "numeric",
      });
    },
    getEmbedUrl(videoUrl) {
      if (!videoUrl) {
        console.warn("No video URL provided");
        return "";
      }

      console.log("Original video URL:", videoUrl);

      // YouTube video URL patterns
      const youtubeRegex =
        /(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/;
      const match = videoUrl.match(youtubeRegex);

      if (match) {
        // Extract video ID and return embed URL
        const videoId = match[1];
        const embedUrl = `https://www.youtube.com/embed/${videoId}`;
        console.log("Converted to embed URL:", embedUrl);
        return embedUrl;
      }

      // If it's already an embed URL, return as is
      if (videoUrl.includes("youtube.com/embed/")) {
        console.log("Already an embed URL:", videoUrl);
        return videoUrl;
      }

      // For other video platforms or direct links, return as is
      console.log("Using original URL (not YouTube):", videoUrl);
      return videoUrl;
    },
    handleVideoError(item) {
      console.error("Video failed to load:", item);
      console.error("Video URL:", item.video);
      console.error("Embed URL:", this.getEmbedUrl(item.video));
    },
    handleVideoLoad(item) {
      console.log("Video loaded successfully:", item.title);
    },
  },
  mounted() {
    // No magnific-popup needed since videos are embedded
  },
  created: function () {
    console.log("Videos in gallery videos:", this.videos);
  },
};
</script>

<style lang="scss" scoped>
.video-card {
  background: var(--white-color);
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
  margin-bottom: 30px;

  &:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
  }
}

.video-wrapper {
  position: relative;
  overflow: hidden;
  border-radius: 16px 16px 0 0;
  background: linear-gradient(
    135deg,
    var(--theme-color) 0%,
    var(--theme-color2) 100%
  );

  .video-iframe {
    border-radius: 16px 16px 0 0;
    transition: transform 0.3s ease;

    &:hover {
      transform: scale(1.02);
    }
  }

  .no-video {
    height: 450px; // Match iframe height for consistency
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: var(--white-color);

    i {
      font-size: 48px;
      margin-bottom: 16px;
      opacity: 0.7;
    }

    p {
      font-size: 18px;
      margin: 0;
      font-weight: 500;
    }
  }
}

.video-info {
  padding: 20px;
}

.video-title {
  font-size: 18px;
  font-weight: 600;
  color: var(--title-color);
  margin: 0 0 12px 0;
  line-height: 1.4;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  font-family: var(--title-font);

  &:hover {
    color: var(--theme-color);
  }
}

.video-meta {
  display: flex;
  align-items: center;
  gap: 16px;
}

.video-date {
  display: flex;
  align-items: center;
  gap: 6px;
  color: var(--body-color);
  font-size: 14px;
  font-weight: 500;
  font-family: var(--body-font);

  i {
    color: var(--theme-color);
  }
}

// Responsive design
@media (max-width: 768px) {
  .video-card {
    margin-bottom: 25px;
  }

  .video-wrapper {
    .video-iframe,
    .no-video {
      height: 280px; // Increased from 200px for bigger video on tablet
    }
  }

  .video-info {
    padding: 18px; // Slightly more padding
  }

  .video-title {
    font-size: 17px; // Slightly larger title
  }
}

@media (max-width: 576px) {
  .video-card {
    margin-bottom: 30px; // More space between cards
  }

  .video-wrapper {
    .video-iframe,
    .no-video {
      height: 350px; // Significantly increased from 180px for bigger mobile video
    }
  }

  .video-info {
    padding: 20px; // More generous padding on mobile
  }

  .video-title {
    font-size: 16px; // Larger, more readable title on mobile
    margin-bottom: 15px; // More space after title
  }

  .video-date {
    font-size: 15px; // Slightly larger date text
  }
}
</style>
