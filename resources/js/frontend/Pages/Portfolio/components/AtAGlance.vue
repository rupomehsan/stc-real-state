<template>
  <div class="at-a-glance-section">
    <div class="glance-grid">
      <!-- Address -->
      <!-- {{ property }} -->
      <div class="glance-row" v-for="item in property">
        <div class="glance-icon">
          <i :class="item.icon"></i>
        </div>
        <div class="glance-content">
          <div class="glance-label">{{ item.title }}</div>
          <div class="glance-value">
            {{ item.description }}
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    property: {
      type: Object,
      required: true,
    },
  },
};
</script>

<style lang="scss" scoped>
.at-a-glance-section {
  background: #ffffff;
  padding: 0;
  margin-bottom: 0;
}

.section-title {
  font-size: 24px;
  font-weight: 700;
  color: #1a1a1a;
  margin: 0 0 32px 0;
  text-transform: uppercase;
  letter-spacing: 1px;
  line-height: 1.2;
}

.glance-grid {
  display: flex;
  flex-direction: column;
  gap: 0;
}

.glance-row {
  display: flex;
  align-items: flex-start;
  padding: 16px 0;
  border-bottom: 1px solid #f0f0f0;

  &:last-child {
    border-bottom: none;
    padding-bottom: 0;
  }

  &:first-child {
    padding-top: 0;
  }
}

.glance-icon {
  width: 32px;
  height: 32px;
  background: #f8f9fa;
  border-radius: 6px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-right: 16px;
  flex-shrink: 0;

  svg {
    width: 20px;
    height: 20px;
  }
}

.glance-content {
  flex: 1;
  display: flex;
  flex-direction: column;
  gap: 4px;
}

.glance-label {
  font-size: 13px;
  font-weight: 500;
  color: #9ca3af;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  line-height: 1.2;
  margin: 0;
}

.glance-value {
  font-size: 16px;
  font-weight: 600;
  color: #1f2937;
  line-height: 1.4;
  margin: 0;
  word-wrap: break-word;
}

/* Responsive Design */
@media (max-width: 768px) {
  .at-a-glance-section {
    padding: 0;
    margin-bottom: 30px;
  }

  .section-title {
    font-size: 20px;
    margin-bottom: 24px;
  }

  .glance-row {
    padding: 14px 0;
  }

  .glance-icon {
    width: 28px;
    height: 28px;
    margin-right: 12px;

    svg {
      width: 16px;
      height: 16px;
    }
  }

  .glance-label {
    font-size: 12px;
  }

  .glance-value {
    font-size: 14px;
  }
}

@media (max-width: 480px) {
  .at-a-glance-section {
    padding: 0;
    margin-bottom: 24px;
  }

  .section-title {
    font-size: 18px;
    margin-bottom: 20px;
  }

  .glance-row {
    padding: 12px 0;
  }

  .glance-icon {
    width: 24px;
    height: 24px;
    margin-right: 10px;

    svg {
      width: 14px;
      height: 14px;
    }
  }

  .glance-label {
    font-size: 11px;
  }

  .glance-value {
    font-size: 13px;
  }
}
</style>
