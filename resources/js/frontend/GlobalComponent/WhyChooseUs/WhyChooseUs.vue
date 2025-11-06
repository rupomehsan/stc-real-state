<template>
  <section class="why-choose-section" id="why-sec">
    <!-- <div class="section-overlay"></div> -->
    <div class="container">
      <!-- Hero Subtitle Section (matching AboutUs) -->
      <div class="hero-subtitle-section text-center mt-3">
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

      <!-- Enhanced Modern Excellence Showcase -->
      <div class="modern-excellence-section">
        <div class="">
          <!-- Background Elements -->
          <div class="section-background">
            <div class="floating-shapes">
              <div class="shape shape-1"></div>
              <div class="shape shape-2"></div>
              <div class="shape shape-3"></div>
            </div>
            <div class="gradient-overlay"></div>
          </div>

          <div class="excellence-showcase-card">
            <!-- Modern Header -->
            <div class="modern-header">
              <!-- <div class="header-badge">
                <div class="badge-icon">
                  <svg viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"
                    />
                  </svg>
                </div>
                <span class="badge-text">Excellence Driven</span>
              </div> -->

              <div class="header-content mt-3">
                <!-- <div class="title-wrapper">
                  <h2 class="modern-title">
                    <span class="title-main"> Why Choose Us</span>
                  </h2>
                  <div class="title-accent"></div>
                </div> -->
                <p class="modern-subtitle">
                  Building trust through consistent quality and unwavering
                  commitment to our clients.
                  <span class="subtitle-emphasis"
                    >Experience the difference of true excellence.</span
                  >
                </p>
              </div>

              <!-- {{ services }} -->

              <!-- Professional Stats Preview -->
              <div class="professional-stats-grid">
                <div
                  class="professional-stat-card"
                  v-for="(slide, index) in services"
                  :key="index"
                >
                  <div class="stat-card-background">
                    <div class="stat-card-glow"></div>
                  </div>
                  <div class="stat-card-content">
                    <div class="stat-icon-wrapper">
                      <div class="stat-icon-bg"></div>
                      <div class="stat-icon" v-html="icons[index]"></div>
                      <div class="stat-pulse-ring"></div>
                    </div>
                    <div class="stat-details">
                      <div class="stat-number-badge">
                        <span class="stat-number">{{
                          String(index + 1).padStart(2, "0")
                        }}</span>
                        <div class="number-highlight"></div>
                      </div>
                      <div class="stat-text-wrapper">
                        <h4 class="stat-title">{{ slide.title }}</h4>
                        <div class="stat-underline"></div>
                      </div>
                    </div>
                  </div>
                  <div class="stat-hover-overlay"></div>
                </div>
              </div>
            </div>

            <!-- Modern Tab Navigation -->
            <div class="modern-tab-navigation">
              <div class="nav-background">
                <div
                  class="active-tab-indicator"
                  :style="tabIndicatorStyle"
                ></div>
              </div>

              <div class="nav-tabs-wrapper">
                <button
                  v-for="(slide, index) in services"
                  :key="index"
                  class="modern-tab-btn"
                  :class="{ active: index === activeTabIndex }"
                  @click="setActiveTab(index)"
                >
                  <div class="tab-content-wrapper">
                    <div class="tab-number">
                      {{ String(index + 1).padStart(2, "0") }}
                    </div>
                    <div class="tab-icon-modern" v-html="icons[index]"></div>
                    <div class="tab-info">
                      <span class="tab-title-modern">{{ slide.title }}</span>
                      <div class="tab-progress">
                        <div
                          class="progress-line"
                          :class="{ active: index === activeTabIndex }"
                        ></div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-hover-effect"></div>
                </button>
              </div>
            </div>

            <!-- Modern Content Showcase -->
            <div class="modern-content-area">
              <div class="content-panels">
                <transition name="modern-fade" mode="out-in">
                  <div :key="activeTabIndex" class="modern-panel">
                    <div class="panel-layout">
                      <!-- Enhanced Visual Section -->
                      <div class="visual-showcase">
                        <div class="showcase-background">
                          <div class="animated-circles">
                            <div class="circle circle-1"></div>
                            <div class="circle circle-2"></div>
                            <div class="circle circle-3"></div>
                          </div>
                        </div>

                        <div class="main-visual">
                          <div class="icon-container">
                            <div class="icon-backdrop"></div>
                            <img
                              :src="services[activeTabIndex]?.image"
                              alt=""
                              style="border-radius: 5px"
                            />
                            <div class="icon-pulse"></div>
                            <div class="icon-pulse2"></div>
                          </div>
                        </div>
                      </div>

                      <!-- Enhanced Content Section -->
                      <div class="content-showcase">
                        <div class="content-header">
                          <div class="content-badge">
                            <div class="badge-indicator"></div>
                            <span
                              >Excellence {{ activeTabIndex + 1 }} of
                              {{ services.length }}</span
                            >
                          </div>

                          <h3 class="content-title">
                            <span class="title-decorator"></span>
                            {{ services[activeTabIndex]?.title }}
                          </h3>

                          <div class="title-underline">
                            <div class="underline-fill"></div>
                          </div>
                        </div>

                        <div class="content-body">
                          <p class="content-description">
                            {{ services[activeTabIndex]?.description }}
                          </p>

                          <!-- Enhanced Feature List -->
                          <div class="modern-features">
                            <div class="features-title">Key Highlights</div>
                            <div class="features-grid">
                              <div
                                class="feature-card"
                                v-for="(feature, idx) in excellenceSlides[
                                  activeTabIndex
                                ]?.features"
                                :key="idx"
                              >
                                <div class="feature-icon">
                                  <svg viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    />
                                  </svg>
                                </div>
                                <span class="feature-text">{{ feature }}</span>
                                <div class="feature-accent"></div>
                              </div>
                            </div>
                          </div>

                          <!-- Modern Progress Indicator -->
                          <div class="modern-progress">
                            <div class="progress-info">
                              <span class="progress-label"
                                >Excellence Progress</span
                              >
                              <span class="progress-percentage"
                                >{{
                                  Math.round(
                                    ((activeTabIndex + 1) / services.length) *
                                      100
                                  )
                                }}%</span
                              >
                            </div>
                            <div class="progress-track">
                              <div class="progress-segments">
                                <div
                                  v-for="(slide, idx) in services"
                                  :key="idx"
                                  class="progress-segment"
                                  :class="{ active: idx <= activeTabIndex }"
                                ></div>
                              </div>
                              <div
                                class="progress-indicator"
                                :style="{
                                  width: `${
                                    ((activeTabIndex + 1) / services.length) *
                                    100
                                  }%`,
                                }"
                              ></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </transition>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Enhanced Professional Footer -->
    </div>

    <!-- Circular Services Layout -->

    <!-- End Container -->
  </section>
</template>

<script>
import { store as why_choose_us_store } from "./Store/why_choose_us.js";
import { mapActions, mapState } from "pinia";
import ServiceSingleItem from "./components/ServiceSingleItem.vue";

export default {
  name: "WhyChooseUs",
  components: { ServiceSingleItem },

  data() {
    return {
      selectedService: null,
      currentSlideIndex: 0,
      activeTabIndex: 0,
      autoAdvanceInterval: null,
      isMobile: false,
      icons: [
        `<svg viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2">
                  <rect x="10" y="20" width="80" height="60" rx="5"/>
                  <path d="M30 10 L30 30 M70 10 L70 30"/>
                  <circle cx="50" cy="45" r="15"/>
                 <path d="M50 35 L50 45 L58 50"/>
               </svg>`,
        `<svg viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M50 10 L65 25 L90 20 L75 45 L90 70 L65 65 L50 80 L35 65 L10 70 L25 45 L10 20 L35 25 Z"/>
                  <path d="M35 45 L45 55 L65 35"/>
                </svg>`,
        `<svg viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2">
                  <circle cx="50" cy="40" r="25"/>
                  <path d="M40 50 Q50 60 60 50"/>
                  <circle cx="42" cy="35" r="3" fill="currentColor"/>
                  <circle cx="58" cy="35" r="3" fill="currentColor"/>
                </svg>`,
        `<svg viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2">
                  <rect x="20" y="30" width="60" height="40" rx="5"/>
                  <circle cx="30" cy="20" r="8"/>
                  <circle cx="50" cy="15" r="6"/>
                  <circle cx="70" cy="20" r="8"/>
                  <path d="M30 28 L30 30 M50 21 L50 30 M70 28 L70 30"/>
                  <rect x="35" y="40" width="30" height="15" rx="2"/>
                </svg>`,
      ],

      excellenceSlides: [
        {
          title: "On-Time Handover",
          description:
            "At STC, our unwavering client commitment is at the heart of our business. We consistently deliver projects on time, regardless of market conditions, showcasing our dedication to meeting client expectations.",
          features: [
            "Strict timeline adherence",
            "Progress monitoring",
            "Risk management",
          ],
          icon: `<svg viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2">
                  <rect x="10" y="20" width="80" height="60" rx="5"/>
                  <path d="M30 10 L30 30 M70 10 L70 30"/>
                  <circle cx="50" cy="45" r="15"/>
                  <path d="M50 35 L50 45 L58 50"/>
                </svg>`,

          image:
            "https://lh3.googleusercontent.com/rd-gg-dl/ABS2GSm-jKyPja2ASetFtalKw3pYE-6APAkDQtRsgi5qkVJ6KZVaC7oh7RZVfJb-GsL4CNNgNbC3TTI5GH2B_JO5L0YaKrIuXxpBPwFtOTOArW_KtqrK6_M42c9ncfJmzalezheFOANjoeMPuNqs5IHU9oEepbx8CHUxaNuGDU2S-nkBLqoM3eiWvzShLvuC1pT-mqeKEli3Gg4IGP1D-J0hzKKd0qSvRyzD97dOrIaeVvgKOmFDh5sDLolFeTH__19GKaabyhpPbfG6OljdyHz3TSqdQzJDqWyHoowjfsEjrFlg4tTd7uJMRtgjRmC2VlHJr6zCC0B6PV0gwuVE8NX1CXBXYailwJq26VAcPGpNZ3qlSzps-HfzBnQQ3sRLePKahIhgP3s-9qYthZKAldJPk5nZLgObC5cmQ7NZZN9ZMMXdyuSyUZsBbpmv7dmD3nz88MOfCEVE1stgPeezUce_CdZ-Yu13QlGmifHPmaiY6ZMW-mCu130KhnVdWmpLTqQIIGd2_8BusSGIZv8ZTMdWWvfTDodU8ivwkyYTJGtAaqIA7LQeRd9WlObvCODQeTQxzewGf6_5QWGaGpxQCN2gMoIQKOaCX0eb5ab-Ljokh4Y3KPQZQlbNedrg3qSqkEPp3uMeHUzXj7kr6qJg9ynMzCL8qPUu0Q350uN2F0brhwjrwuXX6h8zh7q69X42Plx5A32x47HSvPZD4jAw69osZzqJNIgEPbmGlnnxPHphZPUGpLdZfZT_4CQeiUgGzGNZ9t1Qsbs83FRX_ZQig5F_ayJdnAT6DVg_8TsfFchE0il34RUkqNrmTTRf4y-yLa1U7wyOnpQ6CqeMmB4V6dDS6--a9WiDr1d3rnZTr7qESG8mIEQ4jnBBnWZSOVkkgSWMIQ2IzBJzb6i758i_vXk7BfQdpJFMCy2cqAP_3zat8dLvA4B-VyPlMQGha2_EbsQNmc7kXtoItU5tB8jNjMYXRtEInm5_9uu8XnMPZ1u23U29lKYyCrbPMwlCXxdaJi7NgluuIMuj4h-N0uuPIxLudxENfY1pWPvq-Omo86TQ3qZYx4-EHcIrFhiVaMJ4G2pUvowMeNcbCaP8SlY2EakpOhGyJRjUKLg_q2muINMio-MJqA6W5yv2D_DdITqPzZ9gkb2g3NU3i-2wEF4GBBc8k4NZMZc_Llc=s1024-rj",
        },
        {
          title: "Quality Assurance",
          description:
            "Every project undergoes rigorous quality checks and assessments. Our commitment to excellence ensures that we deliver nothing but the highest standards in construction and development.",
          features: [
            "Multi-stage inspections",
            "Quality standards",
            "Material testing",
          ],
          icon: `<svg viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M50 10 L65 25 L90 20 L75 45 L90 70 L65 65 L50 80 L35 65 L10 70 L25 45 L10 20 L35 25 Z"/>
                  <path d="M35 45 L45 55 L65 35"/>
                </svg>`,
          image:
            "https://lh3.googleusercontent.com/rd-gg-dl/ABS2GSk7fDi7VIaGUySf-USbVxVcpcqGU70IJ2vLP2Eutr940kBBOxw2rZc65jUWa8l8J4MApocdotCWa4TSY5UYLORjtg8asBL7o55r2Nk8JZOptQup7u-ZeqQHK3AC89bP14H0kguV9QoscJJK7tDGyUNHH_u19wxrqg_7zQAO3HZybZ-Xtv4hY6AdyQ0JWeJSWn_S6qdyWblwxrI4Kqa74m777Vi6KM6M6vXfd29YCpOWtT9UDuKslebsi0lElinK_avvDuxOiIkkcQbTh_G268899suiEA-M-psPcTpJvGm-3nu6kIJoI0zDfT83HOo-xV_nlv82klA71a5M0lR9mAKFm0un75K-1ACnun2TrZVZ8A4_eDjTI5Vfqk8ZP7L1zCXvHeAZZpz9Cps4vPPAviXyGcvemksGrHd51yJ9hcbElk0jKSzhzTDap1iAnQzEyReOreDafH9QFEmsX4i9sKvcLiF8I8y2CeB2c6ZGUpP1xO6BP7eNBfZ-cIKbFFPv0tlGcF_aoknpPr3LBTztIzL4Ww-UKoSsv4oXMNpX3LXHfqfDClHa0PuUWxtR2r67BxxeYX1x2YzIPlV1FSWeggieLZN0ESHQWD15A6DOErSGY4rFTh-aWUiK6pwgViv07ae8hN3ZPWLptq78qP_YPZ81-a1udoUXIDUf_Sc2_Y6edqqIni9i5skE8b85cHhoDILeb79y_OS3_eAOgJ00MfcrRnjCFnYM-6DRgKh1l4r9x1fJ2M4WI5K2zAPobFrNZyEfoxqx8RA2RxntQIwykbaTW9q0Fum6h2rQi3YsyVTQvIvc2KsGqyV7fSqS9oM1mfRUnvhr-gD9Z60Fr9htJeKDO6m9OTXx4Xu1trJJfgCaw5g9TFnY0YMATw6z7rOT0VtZQzZli7_5Ou4ZJx8l_JrLbXf8xLBzGkLSuNelSclkEB8M2VgPbgpE3g1ccESVKpMvKaU7ckOsTs8Bq9sOVmEHLstSRTy3g9UpkD-KmJtl3eRvmClr30FAphbaNF9dfNFIi4Vgsj2i1kqNKhckM0QAr7UtOgZhoAu5Jgcum6XzI-ia9OTYfiG396OBo7fL9sU91m423z41XW3DHJKjxoX3aec8yS46y0xKOmYA64xCcEMUun7945LaNGEqNz4STU7KbSmH2SABxbpM84Ahm0sB7VkUW2JH=s1024-rj",
        },
        {
          title: "Customer Satisfaction",
          description:
            "Our clients are at the center of everything we do. We maintain transparent communication, provide regular updates, and ensure that every client experience exceeds expectations.",
          features: ["24/7 support", "Regular updates", "Client feedback"],
          icon: `<svg viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2">
                  <circle cx="50" cy="40" r="25"/>
                  <path d="M40 50 Q50 60 60 50"/>
                  <circle cx="42" cy="35" r="3" fill="currentColor"/>
                  <circle cx="58" cy="35" r="3" fill="currentColor"/>
                </svg>`,
          image:
            "https://lh3.googleusercontent.com/rd-gg-dl/ABS2GSlYHFD5rz9RUZ7ddGKIKUvg6KwtYepwTDrjNUt-b6ZmDJIJKagO27Dh2jKuFItIY4iKky4PUVZAJvW0viAUP1aaiIDUWyc1yLqH_nnHzy02fP4aiGwHI6jGcSbvo9DEpzCntaHXd2ppY6ozxA74pgSAaCF7lzERcOM4C4sIX6036X7W35R8I4IZQ5fJHOXUv9MFPDIoa5leLv0kqAEFkxZK-h3Et72xidUfC-9OmVx4ODIdN6uOt2687cwfadOpcWXkC1tUBeKFRYG32DPHfkjeNt9jxAhucKA2zdTu2sqpRPgrUzl1a_VrcV__rR_kvAVbFBnZHmNgvvkJ2JKuXGxXfZdSyWYq0ODd6Lmtoh1AvbcSevXqsSuRmFKD1ZVU_xO5gbiXqZQ2Cxkayt4HhEpNEiGcUWBMC0DwVrCetPpC1TIJb1ZlzQyoiDqwXlbVuilKz_ZtxV5FeUCxOs4fX33DF7efv80-QbAynThQwOqbLq7VgvJ0jDTEPOrNUpk85LIQ2sgnvRPao79oWuetncc9oNs2hD5Oqa_TXJhBKR4rA-DsxOF5QJ-1Sej322XI0y6OKwSl0UA4GAS4Ief9dFYF6USDwf0c_2BYrFC9c93L1HLi1yeEJFd3Jw8ngT21OtMoQomEqLDXFsu1FTSdlVt0vReeYAk7mJ10YN7R0og2Iw-uXRLojWml8jSKLmv_IhFJtcXo-lnkEOfjSr8XGl8lY2_RlYVjiOHkSYC1DvLul-9sBxh37n4Z2tFLIuyvnMgUSIjaXu697LE1Kequ6EWviW3qbbwDKgdAUeDa3mz7mNJhE-Fw2SRgs1k-XsbJ6pUvlkPSmvHA_rrCHqd5NnfKfwodUHSSD-_I-tZcZvu3VkUhyDc_repLXhMkxI5VoYkS2A-GnVI5CTGbJlcHnyRYnTrKjXCE28Cu9i1c5ygR7r9sg57GksUThdwtoGqYU4l216ThAMItiiGvNeiOwSr4XADDtqth5EWUNuiNVNx10jMee0BgkYbRIw_jRILBV7fDj1KpwtK1pw45c3G6-WEBj9uaYou2yoYkbne0j6HxaDg3vD2T9P8QvStuPTQeYWB44B1dsbLlC0nkEnXtIptfJXB6ZU-1dLSiExTrxkr84DZ0MpbhVo-1nek0RgXf4sddfUDDZ0yNx6wHTtVXOTPYM46Q6m3I=s1024-rj",
        },
        {
          title: "Innovation & Technology",
          description:
            "We leverage cutting-edge technology and innovative construction methods to deliver modern, sustainable, and efficient building solutions that meet contemporary standards.",
          features: [
            "Modern techniques",
            "Smart solutions",
            "Sustainable practices",
          ],
          icon: `<svg viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2">
                  <rect x="20" y="30" width="60" height="40" rx="5"/>
                  <circle cx="30" cy="20" r="8"/>
                  <circle cx="50" cy="15" r="6"/>
                  <circle cx="70" cy="20" r="8"/>
                  <path d="M30 28 L30 30 M50 21 L50 30 M70 28 L70 30"/>
                  <rect x="35" y="40" width="30" height="15" rx="2"/>
                </svg>`,
          image:
            "https://lh3.googleusercontent.com/rd-gg-dl/ABS2GSmZqBSI0TPbbsQEd6WTxXGDnR7JJFSA9xkcKiSYACRiGBhqekI8biJtdSkztqvWiNp84jqd7AJgssYtA1T0mBbOZ6MSIam7D-2FuRjGFd8p7y5xLfGOkRjWhbCq1WjsvcXvRB2_dX98J8mfUOl47ybRAsRVhdlAqSRUerFxRamuBmwkk7L-KSQDhRExMH6967P9UEN2lgOfDRx7gO2U7BoDSp21RO0Le9aDXF_x8FDpII5HXdOsfdAEA_nPuJJbP5UK7qWC2T81x4Y-RS8cix1qTu9qDxBReIcCCm1Q1k-i7f7GGCig-ySRy7yiHxeD49u3l4IlXWcCID7L0drYUYMbRYTAL1rTJD21C6wI3zvoUooW8tVHzn9EzpIGPjLe10Zd2BHH870wpkAgDUgSWVsLUHxDYDpRUy-GuT1109e03246hNv_6mp311uUoDxq8IYPBrMjoWn-v3rgVcnJOkBpnYJVY51wpNBm1P4qqonvUfdyq9vVN2j1WbqpHQwo1TaPfQcBkVtaN2zQegY2585LnGGgRAcdIkpiQvWd5RdEpWvixPiW0Pib76_2tenTMGA0k9J1amrGHqUMBA3BOCa9xBbWrcKqjkVjR8OFGoLg8rqe-b2wXAXFGuh5p4uIEfHXiPbCXpganQbXLVVIbrxnpsMFnqREXGxUhcYL29PqdrbnCBRdO1zIrCB_CyDsOTI8UVOHezcJnjFw5G_-EAEDaIhtLcaD_jCbndNCtqT3ld_n-2XPfbhmWwjXfd5CmGw-PpdNLCg8OGe_zlJRz6M-Z6p7FD7uWIjw9y6L_Bmlpf0RprXnMtSavbgkVboHq2KGgOKz2RTK1t1y6Xe-JE3tO12nJAMU59OlVm1uRWcGcip2UOgifBQgigIbHkXUSTPzkfMKgBJaV8hOXi-gI5xZImiXwsbsKuFX9EjPpVjCm5R3qwvBJyHO6aQaNAuCBn0Wcrw_J8ISpqtdF4-F6sP4fP1ZXZ9jHsLb15SubgH8eUe4eesvCZYR1a064NQ66W8XzryvHXhBrdmya_sua9l__KrTeKE7QaCbVsFkAlFl64tyzr-KK8nLd9NY5stZcUnhVpLEObgqew_SgvPjXWX3hLpVpr3cGBpQh4IIZa5kV3pcrNJrFvgm_0c2myvLMZYnbcgsY6wRlobkGqnKSmybYS-LkGAt=s1024-rj",
        },
      ],
    };
  },

  async created() {
    await this.fetch_services();
    // console.log("Services:", this.services);
  },

  mounted() {
    // Check if mobile on mount
    this.checkIfMobile();

    // Add resize listener
    window.addEventListener("resize", this.checkIfMobile);

    // Initialize stats animation
    this.$nextTick(() => {
      this.initStatsAnimation();
    });
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

    // Active tab indicator transform style
    tabIndicatorStyle() {
      if (this.isMobile) {
        return { display: "none" };
      }
      return { transform: `translateX(${this.activeTabIndex * 100}%)` };
    },
  },

  methods: {
    ...mapActions(why_choose_us_store, ["fetch_services"]),

    // Truncate text for circular layout
    truncateText(text, maxLength) {
      if (!text) return "";
      return text.length > maxLength
        ? text.substring(0, maxLength) + "..."
        : text;
    },

    // Open service detail popup
    openServiceDetail(service) {
      this.selectedService = service;
      document.body.style.overflow = "hidden";
    },

    // Close service detail popup
    closeServiceDetail() {
      this.selectedService = null;
      document.body.style.overflow = "auto";
    },

    // Check if device is mobile
    checkIfMobile() {
      this.isMobile = window.innerWidth <= 768;
    },

    // Handle image error for orbit icons
    handleImageError(event) {
      event.target.style.display = "none";
      const fallbackIcon = document.createElement("div");
      fallbackIcon.className = "fallback-orbit-icon";
      fallbackIcon.innerHTML = `
        <svg viewBox="0 0 24 24" fill="currentColor">
          <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
        </svg>
      `;
      event.target.parentNode.appendChild(fallbackIcon);
    },

    // Slider navigation methods
    nextSlide() {
      if (this.currentSlideIndex < this.excellenceSlides.length - 1) {
        this.currentSlideIndex++;
      }
    },

    previousSlide() {
      if (this.currentSlideIndex > 0) {
        this.currentSlideIndex--;
      }
    },

    goToSlide(index) {
      this.currentSlideIndex = index;
    },

    // Tab navigation methods
    setActiveTab(index) {
      this.activeTabIndex = index;
    },

    // Initialize stats counter animation
    initStatsAnimation() {
      const observerOptions = {
        threshold: 0.5,
        rootMargin: "0px 0px -100px 0px",
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            this.animateStatNumbers();
            observer.disconnect();
          }
        });
      }, observerOptions);

      const statsSection = this.$el.querySelector(".professional-stats-grid");
      if (statsSection) {
        observer.observe(statsSection);
      }
    },

    // Animate stat numbers
    animateStatNumbers() {
      const statCards = this.$el.querySelectorAll(".stat-card");
      const targets = [500, 98, 15, 100];

      statCards.forEach((card, index) => {
        const numberElement = card.querySelector(".stat-number");
        const target = targets[index];
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;

        const animate = () => {
          current += step;
          if (current >= target) {
            current = target;
            if (index === 0) numberElement.textContent = current + "+";
            else if (index === 1) numberElement.textContent = current + "%";
            else if (index === 2) numberElement.textContent = current + "+";
            else numberElement.textContent = current + "%";
          } else {
            if (index === 0)
              numberElement.textContent = Math.floor(current) + "+";
            else if (index === 1)
              numberElement.textContent = Math.floor(current) + "%";
            else if (index === 2)
              numberElement.textContent = Math.floor(current) + "+";
            else numberElement.textContent = Math.floor(current) + "%";
            requestAnimationFrame(animate);
          }
        };

        setTimeout(() => animate(), index * 200);
      });
    },
  },

  // Cleanup when component is destroyed
  beforeUnmount() {
    document.body.style.overflow = "auto";

    // Remove resize listener
    window.removeEventListener("resize", this.checkIfMobile);
  },
};
</script>

<style lang="scss" scoped>
// Modern CSS Variables
:root {
  --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
  --accent-color: #940404;
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

// Enhanced Hero Subtitle Section (matching AboutUs)
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

// Enhanced Section Info with Creative Design
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

// Enhanced Services Section with Creative Background
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

  // Mobile layout fix for small devices
  .modern-content-area .modern-panel .panel-layout {
    display: flex !important;
    flex-direction: column !important;
    grid-template-columns: none !important;
    gap: 1.5rem !important;
    text-align: center;
  }

  .visual-showcase {
    order: 1 !important;
    width: 100% !important;
    padding: 1rem !important;
  }

  .content-showcase {
    order: 2 !important;
    width: 100% !important;
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

// Modern Excellence Showcase Section
.modern-excellence-section {
  position: relative;
  min-height: 100vh;
  // padding: 1rem 20px;
  /*************  ✨ Windsurf Command 🌟  *************/
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
  background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 50%, #f1f5f9 100%);
  /*******  2e73c013-9ec2-4e11-a7e5-5d04127f8283  *******/
  overflow: hidden;

  .container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 2rem;
    position: relative;
    z-index: 10;
  }

  // Animated Background Elements
  .section-background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    pointer-events: none;

    .floating-shapes {
      position: absolute;
      width: 100%;
      height: 100%;

      .shape {
        position: absolute;
        border-radius: 50%;
        background: linear-gradient(
          135deg,
          rgba(99, 102, 241, 0.1),
          rgba(168, 85, 247, 0.05)
        );
        animation: float 6s ease-in-out infinite;

        &.shape-1 {
          width: 300px;
          height: 300px;
          top: 10%;
          right: -50px;
          animation-delay: 0s;
        }

        &.shape-2 {
          width: 200px;
          height: 200px;
          bottom: 20%;
          left: -30px;
          animation-delay: 2s;
        }

        &.shape-3 {
          width: 150px;
          height: 150px;
          top: 60%;
          right: 20%;
          animation-delay: 4s;
        }
      }
    }

    .gradient-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: radial-gradient(
          circle at 30% 20%,
          rgba(99, 102, 241, 0.05) 0%,
          transparent 50%
        ),
        radial-gradient(
          circle at 70% 80%,
          rgba(168, 85, 247, 0.03) 0%,
          transparent 50%
        );
    }
  }

  @keyframes float {
    0%,
    100% {
      transform: translateY(0px) rotate(0deg);
    }
    33% {
      transform: translateY(-30px) rotate(120deg);
    }
    66% {
      transform: translateY(15px) rotate(240deg);
    }
  }
}

.excellence-showcase-card {
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(20px);
  // border-radius: 24px;
  box-shadow: 0 32px 64px rgba(0, 0, 0, 0.12),
    0 0 0 1px rgba(255, 255, 255, 0.5);
  overflow: hidden;
  position: relative;

  &::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(
      90deg,
      transparent,
      rgba(99, 102, 241, 0.5),
      transparent
    );
  }

  // Modern Header Styles
  .modern-header {
    padding: 0rem 3rem 3rem;
    box-shadow: 0 32px 64px rgba(0, 0, 0, 0.12),
      0 0 0 1px rgba(255, 255, 255, 0.5);
    position: relative;
    overflow: hidden;

    &::after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 1px;
      background: linear-gradient(
        90deg,
        transparent,
        rgba(0, 0, 0, 0.1),
        transparent
      );
    }

    .header-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.75rem;
      background: linear-gradient(135deg, #af212f, #ff4136);
      color: white;
      padding: 0.75rem 1.5rem;
      border-radius: 50px;
      margin-bottom: 2rem;
      box-shadow: 0 8px 25px rgba(99, 102, 241, 0.3);
      animation: pulse-glow 2s ease-in-out infinite alternate;

      .badge-icon {
        width: 20px;
        height: 20px;

        svg {
          width: 100%;
          height: 100%;
        }
      }

      .badge-text {
        font-weight: 600;
        font-size: 0.9rem;
        letter-spacing: 0.5px;
      }
    }

    .header-content {
      text-align: center;
      margin-bottom: 3rem;

      .title-wrapper {
        position: relative;
        margin-bottom: 1.5rem;

        .modern-title {
          font-size: clamp(2.5rem, 5vw, 4rem);
          font-weight: 800;
          line-height: 1.1;
          margin: 0;
          background: linear-gradient(
            135deg,
            #1e293b 0%,
            #475569 50%,
            #64748b 100%
          );
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          background-clip: text;

          .title-highlight {
            display: block;
            font-weight: 300;
            font-size: 0.7em;
            letter-spacing: 0.1em;
            margin-bottom: 0.25rem;
            opacity: 0.8;
          }

          .title-main {
            display: block;
            background: linear-gradient(135deg, #af212f, #ff4136);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
          }
        }

        .title-accent {
          width: 80px;
          height: 4px;
          background: linear-gradient(90deg, #940404, #8b5cf6);
          border-radius: 2px;
          margin: 1rem auto;
          position: relative;

          &::after {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            width: 12px;
            height: 12px;
            background: #940404;
            border-radius: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0 0 20px rgba(99, 102, 241, 0.5);
          }
        }
      }

      .modern-subtitle {
        font-size: 1.2rem;
        color: #64748b;
        line-height: 1.7;
        max-width: 600px;
        margin: 0 auto;

        .subtitle-emphasis {
          background: linear-gradient(135deg, #af212f, #ff4136);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          background-clip: text;
          font-weight: 600;
        }
      }
    }

    .professional-stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 2rem;
      margin-top: 2.5rem;

      .professional-stat-card {
        position: relative;
        background: linear-gradient(
          135deg,
          rgba(255, 255, 255, 0.95) 0%,
          rgba(255, 255, 255, 0.9) 100%
        );
        border-radius: 20px;
        border: 1px solid rgba(229, 9, 20, 0.1);
        padding: 2rem 1.5rem;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        backdrop-filter: blur(10px);
        overflow: hidden;

        .stat-card-background {
          position: absolute;
          inset: 0;
          background: linear-gradient(
            135deg,
            transparent 0%,
            rgba(229, 9, 20, 0.02) 50%,
            transparent 100%
          );
          opacity: 0;
          transition: opacity 0.4s ease;
        }

        .stat-card-glow {
          position: absolute;
          inset: -2px;
          background: linear-gradient(45deg, #e50914, #ff6b6b, #e50914);
          border-radius: 22px;
          opacity: 0;
          transition: opacity 0.4s ease;
          z-index: -1;
        }

        &:hover {
          transform: translateY(-8px) scale(1.02);
          box-shadow: 0 20px 40px rgba(229, 9, 20, 0.15),
            0 8px 16px rgba(0, 0, 0, 0.1);

          .stat-card-background {
            opacity: 1;
          }

          .stat-card-glow {
            opacity: 0.7;
          }

          .stat-pulse-ring {
            animation: pulse-ring 2s infinite;
          }

          .stat-title {
            color: #e50914;
          }
        }

        .stat-card-content {
          position: relative;
          z-index: 2;
        }

        .stat-icon-wrapper {
          position: relative;
          display: flex;
          align-items: center;
          justify-content: center;
          width: 70px;
          height: 70px;
          margin: 0 auto 1.5rem;

          .stat-icon-bg {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, #e50914 0%, #ff6b6b 100%);
            border-radius: 18px;
            opacity: 0.1;
          }

          .stat-pulse-ring {
            position: absolute;
            inset: -8px;
            border: 2px solid #e50914;
            border-radius: 50%;
            opacity: 0.3;
          }

          .stat-icon {
            width: 45px;
            height: 45px;
            color: white;
            position: relative;
            z-index: 3;
            padding: 5px;

            svg {
              width: 100%;
              height: 100%;
              filter: drop-shadow(0 2px 4px rgba(255, 255, 255, 0.3));
            }
          }
        }

        .stat-details {
          text-align: center;

          .stat-number-badge {
            position: relative;
            display: inline-block;
            margin-bottom: 1rem;

            .stat-number {
              font-size: 1.5rem;
              font-weight: 800;
              color: #e50914;
              background: linear-gradient(135deg, #e50914 0%, #ff6b6b 100%);
              -webkit-background-clip: text;
              -webkit-text-fill-color: transparent;
              background-clip: text;
              position: relative;
              z-index: 2;
            }

            .number-highlight {
              position: absolute;
              bottom: -4px;
              left: 50%;
              transform: translateX(-50%);
              width: 30px;
              height: 3px;
              background: linear-gradient(90deg, #e50914, #ff6b6b);
              border-radius: 2px;
              opacity: 0.7;
            }
          }

          .stat-text-wrapper {
            .stat-title {
              font-size: 1rem;
              font-weight: 600;
              color: #334155;
              margin-bottom: 0.5rem;
              transition: color 0.3s ease;
              line-height: 1.4;
            }

            .stat-underline {
              width: 40px;
              height: 2px;
              background: linear-gradient(90deg, #e50914, #ff6b6b);
              margin: 0 auto;
              border-radius: 1px;
              opacity: 0.3;
              transition: all 0.3s ease;
            }
          }
        }

        .stat-hover-overlay {
          position: absolute;
          inset: 0;
          background: linear-gradient(
            135deg,
            rgba(229, 9, 20, 0.02) 0%,
            rgba(255, 107, 107, 0.02) 100%
          );
          border-radius: 20px;
          opacity: 0;
          transition: opacity 0.4s ease;
          pointer-events: none;
        }

        &:hover .stat-hover-overlay {
          opacity: 1;
        }
      }
    }

    @keyframes pulse-ring {
      0% {
        transform: scale(1);
        opacity: 0.3;
      }
      50% {
        transform: scale(1.1);
        opacity: 0.1;
      }
      100% {
        transform: scale(1.2);
        opacity: 0;
      }
    }
  }

  .header-decoration {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    margin-bottom: 1.5rem;

    .decoration-line {
      width: 50px;
      height: 2px;
      background: var(--primary-gradient);
      border-radius: 1px;
    }

    .decoration-icon {
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: var(--primary-gradient);
      border-radius: 50%;
      color: white;

      svg {
        width: 20px;
        height: 20px;
      }
    }
  }

  .card-main-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #1f2937;
    margin-bottom: 1rem;
    letter-spacing: -0.02em;
  }

  .card-subtitle {
    font-size: 1.2rem;
    color: #6b7280;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;

    .subtitle-emphasis {
      background: linear-gradient(135deg, #af212f, #ff4136);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      font-weight: 600;
    }
  }
}

// Modern Tab Navigation
.modern-tab-navigation {
  position: relative;
  padding: 2.5rem 3rem;
  background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);

  .nav-background {
    position: absolute;
    top: 50%;
    left: 3rem;
    right: 3rem;
    height: 80px;
    background: rgba(255, 255, 255, 0.8);
    border-radius: 20px;
    transform: translateY(-50%);
    backdrop-filter: blur(10px);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);

    .active-tab-indicator {
      position: absolute;
      top: 8px;
      left: 8px;
      width: calc(25% - 8px);
      height: calc(100% - 16px);
      background: linear-gradient(135deg, #af212f, #ff4136);
      border-radius: 12px;
      transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      box-shadow: 0 4px 20px rgba(99, 102, 241, 0.3);
    }
  }

  .nav-tabs-wrapper {
    position: relative;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 0;
    z-index: 2;

    @media (min-width: 769px) {
      grid-template-columns: repeat(4, 1fr);
    }
  }

  .modern-tab-btn {
    position: relative;
    background: transparent;
    border: none;
    padding: 1.5rem 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    border-radius: 12px;
    overflow: hidden;

    &:hover:not(.active) {
      .tab-hover-effect {
        opacity: 1;
      }
    }

    &.active {
      color: white !important;
      font-weight: bold;

      .tab-content-wrapper {
        color: white !important;

        .tab-number {
          color: rgba(255, 255, 255, 0.9) !important;
          font-weight: bold;
        }

        .tab-icon-modern svg {
          color: white !important;
        }

        .tab-title-modern {
          color: white !important;
          font-weight: bold;
        }

        .progress-line {
          background: rgba(255, 255, 255, 0.8);

          &.active {
            background: white;
          }
        }
      }
    }

    .tab-content-wrapper {
      display: flex;
      align-items: center;
      gap: 1rem;
      transition: all 0.3s ease;
      position: relative;
      z-index: 2;

      .tab-number {
        font-size: 0.85rem;
        font-weight: 700;
        color: #94a3b8;
        min-width: 24px;
        text-align: center;
      }

      .tab-icon-modern {
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;

        svg {
          width: 20px;
          height: 20px;
          color: #940404;
          transition: color 0.3s ease;
        }
      }

      .tab-info {
        flex: 1;
        text-align: left;

        .tab-title-modern {
          font-size: 0.9rem;
          font-weight: 600;
          color: #475569;
          margin-bottom: 0.25rem;
          transition: color 0.3s ease;
        }

        .tab-progress {
          .progress-line {
            height: 2px;
            background: #e2e8f0;
            border-radius: 1px;
            transition: all 0.3s ease;

            &.active {
              background: #940404;
            }
          }
        }
      }
    }

    .tab-hover-effect {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(99, 102, 241, 0.05);
      opacity: 0;
      transition: opacity 0.3s ease;
      border-radius: 12px;
      z-index: 1;
    }
  }
}

// Modern Content Area
.modern-content-area {
  padding: 4rem 3rem;
  background: #ffffff;
  position: relative;

  &::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(
      90deg,
      transparent,
      rgba(99, 102, 241, 0.2),
      transparent
    );
  }

  .content-panels {
    position: relative;
    min-height: 500px;
  }

  .modern-panel {
    .panel-layout {
      display: flex;
      flex-direction: column;
      gap: 2rem;
      align-items: center;
      text-align: center;

      // Desktop layout - horizontal
      @media (min-width: 769px) {
        display: grid;
        grid-template-columns: 1fr 1.2fr;
        gap: 4rem;
        align-items: start;
        text-align: left;
      }
    }

    // Visual Showcase Styles
    .visual-showcase {
      position: relative;
      padding: 2rem;

      .showcase-background {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border-radius: 24px;
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        overflow: hidden;

        .animated-circles {
          position: absolute;
          width: 100%;
          height: 100%;

          .circle {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(
              135deg,
              rgba(99, 102, 241, 0.1),
              rgba(168, 85, 247, 0.05)
            );
            animation: float-circle 8s ease-in-out infinite;

            &.circle-1 {
              width: 80px;
              height: 80px;
              top: 20%;
              right: 20%;
              animation-delay: 0s;
            }

            &.circle-2 {
              width: 60px;
              height: 60px;
              bottom: 30%;
              left: 15%;
              animation-delay: 2s;
            }

            &.circle-3 {
              width: 40px;
              height: 40px;
              top: 60%;
              right: 40%;
              animation-delay: 4s;
            }
          }
        }
      }

      .main-visual {
        position: relative;
        z-index: 2;
        text-align: center;

        .icon-container {
          position: relative;
          display: inline-block;
          margin-bottom: 2rem;

          .icon-backdrop {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 200px;
            height: 200px;
            background: linear-gradient(
              135deg,
              rgba(99, 102, 241, 0.1),
              rgba(168, 85, 247, 0.05)
            );
            border-radius: 50%;
            transform: translate(-50%, -50%);
          }

          .main-icon {
            position: relative;
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, #af212f, #ff4136);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            z-index: 2;
            box-shadow: 0 20px 40px rgba(99, 102, 241, 0.3);

            svg {
              width: 60px;
              height: 60px;
            }
          }

          .icon-pulse {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 220px;
            height: 220px;
            border: 2px solid rgba(99, 102, 241, 0.3);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            animation: pulse-ring 2s ease-in-out infinite;
          }
          .icon-pulse2 {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 320px;
            height: 320px;
            border: 2px solid rgba(99, 102, 241, 0.3);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            animation: pulse-ring 3s ease-in-out infinite;
          }
        }

        .visual-stats {
          .achievement-ring {
            position: relative;
            display: inline-block;

            .ring-svg {
              width: 120px;
              height: 120px;
              transform: rotate(-90deg);

              .ring-bg {
                fill: none;
                stroke: rgba(99, 102, 241, 0.1);
                stroke-width: 4;
              }

              .ring-progress {
                fill: none;
                stroke: url(#gradient);
                stroke-width: 4;
                stroke-linecap: round;
                stroke-dasharray: 314;
                transition: stroke-dashoffset 1s ease-in-out;
              }
            }

            .ring-content {
              position: absolute;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
              text-align: center;

              .achievement-number {
                display: block;
                font-size: 1.5rem;
                font-weight: 800;
                color: #940404;
                margin-bottom: 0.25rem;
              }

              .achievement-label {
                font-size: 0.75rem;
                color: #64748b;
                font-weight: 600;
                text-transform: uppercase;
                letter-spacing: 0.5px;
              }
            }
          }
        }
      }
    }

    // Content Showcase Styles
    .content-showcase {
      .content-header {
        margin-bottom: 2rem;

        .content-badge {
          display: inline-flex;
          align-items: center;
          gap: 0.5rem;
          background: rgba(99, 102, 241, 0.1);
          color: #940404;
          padding: 0.5rem 1rem;
          border-radius: 50px;
          font-size: 0.85rem;
          font-weight: 600;
          margin-bottom: 1rem;

          .badge-indicator {
            width: 8px;
            height: 8px;
            background: #940404;
            border-radius: 50%;
            animation: pulse-dot 2s ease-in-out infinite;
          }
        }

        .content-title {
          font-size: 2.5rem;
          font-weight: 800;
          color: #1e293b;
          margin-bottom: 1rem;
          line-height: 1.2;
          position: relative;

          .title-decorator {
            position: absolute;
            left: -2rem;
            top: 50%;
            width: 4px;
            height: 60%;
            background: linear-gradient(135deg, #af212f, #ff4136);
            border-radius: 2px;
            transform: translateY(-50%);
          }
        }

        .title-underline {
          width: 100px;
          height: 3px;
          background: #e2e8f0;
          border-radius: 2px;
          overflow: hidden;
          position: relative;

          .underline-fill {
            height: 100%;
            width: 60%;
            background: linear-gradient(90deg, #940404, #8b5cf6);
            border-radius: 2px;
            animation: slide-in 1s ease-out;
          }
        }
      }

      .content-body {
        .content-description {
          font-size: 1.1rem;
          color: #64748b;
          line-height: 1.8;
          margin-bottom: 2.5rem;
        }

        .modern-features {
          margin-bottom: 2.5rem;

          .features-title {
            font-size: 1rem;
            font-weight: 700;
            color: #374151;
            margin-bottom: 1.5rem;
            position: relative;
            padding-left: 1rem;

            &::before {
              content: "";
              position: absolute;
              left: 0;
              top: 50%;
              width: 4px;
              height: 20px;
              background: #940404;
              border-radius: 2px;
              transform: translateY(-50%);
            }
          }

          .features-grid {
            display: grid;
            gap: 1rem;

            .feature-card {
              display: flex;
              align-items: center;
              gap: 1rem;
              padding: 1rem 1.5rem;
              background: #f8fafc;
              border-radius: 12px;
              border-left: 3px solid transparent;
              transition: all 0.3s ease;
              position: relative;
              overflow: hidden;

              &:hover {
                background: #f1f5f9;
                border-left-color: #940404;
                transform: translateX(5px);

                .feature-accent {
                  opacity: 1;
                }
              }

              .feature-icon {
                width: 24px;
                height: 24px;
                color: #940404;
                flex-shrink: 0;
              }

              .feature-text {
                font-weight: 500;
                color: #374151;
                font-size: 0.95rem;
              }

              .feature-accent {
                position: absolute;
                right: -20px;
                top: 0;
                bottom: 0;
                width: 40px;
                background: linear-gradient(
                  90deg,
                  transparent,
                  rgba(99, 102, 241, 0.1)
                );
                opacity: 0;
                transition: opacity 0.3s ease;
              }
            }
          }
        }

        .modern-progress {
          .progress-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;

            .progress-label {
              font-size: 0.9rem;
              font-weight: 600;
              color: #374151;
            }

            .progress-percentage {
              font-size: 1.25rem;
              font-weight: 700;
              color: #940404;
            }
          }

          .progress-track {
            position: relative;
            height: 8px;
            background: #f1f5f9;
            border-radius: 4px;
            overflow: hidden;

            .progress-segments {
              position: absolute;
              top: 0;
              left: 0;
              right: 0;
              bottom: 0;
              display: flex;

              .progress-segment {
                flex: 1;
                background: rgba(99, 102, 241, 0.2);
                margin-right: 2px;
                transition: background 0.3s ease;

                &:last-child {
                  margin-right: 0;
                }

                &.active {
                  background: rgba(99, 102, 241, 0.4);
                }
              }
            }

            .progress-indicator {
              position: absolute;
              top: 0;
              left: 0;
              bottom: 0;
              background: linear-gradient(90deg, #940404, #8b5cf6);
              border-radius: 4px;
              transition: width 1s cubic-bezier(0.4, 0, 0.2, 1);
            }
          }
        }
      }
    }
  }
}

// Modern Animations and Keyframes
.modern-fade-enter-active,
.modern-fade-leave-active {
  transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.modern-fade-enter-from {
  opacity: 0;
  transform: translateY(20px) scale(0.98);
}

.modern-fade-leave-to {
  opacity: 0;
  transform: translateY(-20px) scale(0.98);
}

@keyframes pulse-glow {
  0%,
  100% {
    box-shadow: 0 0 20px rgba(99, 102, 241, 0.3);
  }
  50% {
    box-shadow: 0 0 30px rgba(99, 102, 241, 0.5);
  }
}

@keyframes float-circle {
  0%,
  100% {
    transform: translateY(0px) rotate(0deg);
  }
  33% {
    transform: translateY(-20px) rotate(120deg);
  }
  66% {
    transform: translateY(10px) rotate(240deg);
  }
}

@keyframes pulse-ring {
  0% {
    transform: translate(-50%, -50%) scale(1);
    opacity: 0.7;
  }
  50% {
    transform: translate(-50%, -50%) scale(1.2);
    opacity: 0.3;
  }
  100% {
    transform: translate(-50%, -50%) scale(1);
    opacity: 0.7;
  }
}

@keyframes pulse-dot {
  0%,
  100% {
    opacity: 1;
    transform: scale(1);
  }
  50% {
    opacity: 0.6;
    transform: scale(1.2);
  }
}

@keyframes slide-in {
  from {
    width: 0;
  }
  to {
    width: 60%;
  }
}

.slide-fade-enter-from {
  opacity: 0;
  transform: translateX(30px);
}

.slide-fade-leave-to {
  opacity: 0;
  transform: translateX(-30px);
}

@keyframes pulse-glow {
  from {
    transform: translate(-50%, -50%) scale(1);
    opacity: 0.6;
  }
  to {
    transform: translate(-50%, -50%) scale(1.1);
    opacity: 0.3;
  }
}

// Excellence Card Slider Styles (fallback)
.excellence-card-section {
  position: relative;
  padding: 5rem 0;
  background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
  overflow: hidden;
}

.excellence-card {
  background: white;
  border-radius: 24px;
  box-shadow: 0 25px 60px rgba(0, 0, 0, 0.1), 0 5px 20px rgba(0, 0, 0, 0.05);
  overflow: hidden;
  position: relative;
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.excellence-card::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(90deg, #667eea, #764ba2, #667eea);
  background-size: 200% 100%;
  animation: shimmer 3s ease-in-out infinite;
  @keyframes shimmer {
    0% {
      background-position: -200% 0;
    }
    100% {
      background-position: 200% 0;
    }
  }

  // Card Header
  .card-header {
    padding: 3rem 3rem 2rem;
    text-align: center;
    background: linear-gradient(
      135deg,
      rgba(102, 126, 234, 0.05),
      rgba(118, 75, 162, 0.05)
    );
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  }

  .header-decoration {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    gap: 1rem;
  }

  .decoration-line {
    width: 60px;
    height: 1px;
    background: linear-gradient(90deg, transparent, #667eea, transparent);
  }

  .decoration-icon {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
  }

  .decoration-icon svg {
    width: 20px;
    height: 20px;
  }

  .card-main-title {
    font-size: 2.2rem;
    font-weight: 700;
    color: #2c3e50;
    line-height: 1.3;
    letter-spacing: 1px;
    margin-bottom: 1rem;
  }

  .card-subtitle {
    font-size: 1.1rem;
    color: #5a6c7d;
    line-height: 1.6;
    max-width: 600px;
    margin: 0 auto;
  }
  .slider-navigation {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    transform: translateY(-50%);
    display: flex;
    justify-content: space-between;
    z-index: 10;
    pointer-events: none;
  }

  .nav-btn {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 2px solid #34495e;
    background: white;
    color: #34495e;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
    pointer-events: auto;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  }

  .nav-btn:hover:not(:disabled) {
    background: #34495e;
    color: white;
    transform: scale(1.05);
  }

  .nav-btn:disabled {
    opacity: 0.5;
    cursor: not-allowed;
  }

  .nav-btn svg {
    width: 24px;
    height: 24px;
  }

  .nav-prev {
    margin-left: -25px;
  }

  .nav-next {
    margin-right: -25px;
  }

  .slider-wrapper {
    position: relative;
    overflow: hidden;
    border-radius: 20px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
  }

  .slider-track {
    display: flex;
    transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    will-change: transform;
  }

  .slide-item {
    min-width: 100%;
    background: white;
  }

  .slide-layout {
    display: grid;
    grid-template-columns: 300px 1fr;
    min-height: 400px;
    align-items: center;
  }

  .slide-visual {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
  }

  .slide-visual::before {
    content: "";
    position: absolute;
    inset: 0;
    background: radial-gradient(
      circle at center,
      rgba(255, 255, 255, 0.1) 0%,
      transparent 70%
    );
  }

  .slide-icon-container {
    position: relative;
    z-index: 2;
  }

  .slide-icon {
    width: 100px;
    height: 100px;
    color: white;
    opacity: 0.9;
  }

  .slide-icon svg {
    width: 100%;
    height: 100%;
  }

  .slide-content-area {
    padding: 3rem 4rem;
    display: flex;
    align-items: center;
  }

  .slide-text {
    max-width: 600px;
  }

  .slide-title {
    font-size: 2rem;
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 1.5rem;
    line-height: 1.3;
  }

  .slide-description {
    font-size: 1.1rem;
    color: #5a6c7d;
    line-height: 1.7;
    margin: 0;
  }

  .slider-indicators {
    display: flex;
    justify-content: center;
    gap: 12px;
    margin-top: 2rem;
  }

  .indicator-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    border: none;
    background: #bdc3c7;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .indicator-dot.active {
    background: #34495e;
    transform: scale(1.2);
  }

  .indicator-dot:hover {
    background: #34495e;
  }

  // Simple Circular Layout
  .circular-services-section {
    position: relative;
    padding: 4rem 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    overflow: hidden;
  }

  .circular-container {
    position: relative;
    width: 500px;
    height: 500px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .center-circle {
    position: relative;
    width: 200px;
    height: 200px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    z-index: 10;
  }

  .center-content {
    text-align: center;
    color: white;
    z-index: 2;
    position: relative;
  }

  .center-icon {
    font-size: 2rem;
    margin-bottom: 0.5rem;
  }

  .center-icon svg {
    width: 2.5rem;
    height: 2.5rem;
    fill: currentColor;
  }

  .center-title {
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 0.25rem;
  }

  .center-subtitle {
    font-size: 0.9rem;
    opacity: 0.9;
  }

  .center-rings {
    position: absolute;
    inset: 0;
  }

  .rotating-ring {
    position: absolute;
    border: 2px solid rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    animation: rotate 10s linear infinite;
  }

  .ring-1 {
    inset: -15px;
    border-top-color: rgba(255, 255, 255, 0.4);
  }

  .ring-2 {
    inset: -25px;
    border-bottom-color: rgba(255, 255, 255, 0.3);
    animation-direction: reverse;
    animation-duration: 15s;
  }

  .service-items-circle {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
  }

  .service-item-position {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 140px;
    height: 140px;
    margin-left: -70px;
    margin-top: -70px;
    transform-origin: center;
    transform: rotate(calc(var(--position-index) * 60deg)) translateY(-180px)
      rotate(calc(var(--position-index) * -60deg));
  }

  .service-item {
    width: 100%;
    height: 100%;
    background: white;
    border-radius: 20px;
    padding: 1rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    border: 2px solid rgba(102, 126, 234, 0.1);
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
  }

  .service-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(102, 126, 234, 0.2);
    border-color: rgba(102, 126, 234, 0.3);
  }

  .service-item::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(
      135deg,
      rgba(102, 126, 234, 0.05),
      rgba(118, 75, 162, 0.05)
    );
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .service-item:hover::before {
    opacity: 1;
  }

  .service-icon-container {
    width: 50px;
    height: 50px;
    margin-bottom: 0.75rem;
    position: relative;
  }

  .service-icon {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid rgba(102, 126, 234, 0.2);
  }

  .service-icon-fallback {
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
  }

  .service-icon-fallback svg {
    width: 24px;
    height: 24px;
  }

  .service-text {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .service-name {
    font-size: 0.9rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 0.25rem;
    line-height: 1.2;
  }

  .service-desc {
    font-size: 0.75rem;
    color: #666;
    line-height: 1.3;
    margin: 0;
  }

  // Loading States
  .service-item.loading {
    background: #f8f9fa;
    border-color: #e9ecef;
    cursor: default;
  }

  .service-icon-skeleton {
    width: 50px;
    height: 50px;
    background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
    background-size: 200% 100%;
    animation: shimmer 1.5s infinite;
    border-radius: 50%;
    margin-bottom: 0.75rem;
  }

  .service-text-skeleton {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
  }

  .skeleton-title {
    height: 16px;
    background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
    background-size: 200% 100%;
    animation: shimmer 1.5s infinite;
    border-radius: 4px;
    width: 80%;
    margin: 0 auto;
  }

  .skeleton-desc {
    height: 12px;
    background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
    background-size: 200% 100%;
    animation: shimmer 1.5s infinite;
    border-radius: 4px;
    width: 100%;
  }

  @keyframes shimmer {
    0% {
      background-position: -200% 0;
    }
    100% {
      background-position: 200% 0;
    }
  }

  @keyframes rotate {
    from {
      transform: rotate(0deg);
    }
    to {
      transform: rotate(360deg);
    }
  }

  // Excellence Slider Responsive
  @media (max-width: 992px) {
    .slide-layout {
      grid-template-columns: 250px 1fr;
    }

    .slide-content-area {
      padding: 2rem 3rem;
    }

    .slide-title {
      font-size: 1.7rem;
    }

    .slide-description {
      font-size: 1rem;
    }
  }

  @media (max-width: 768px) {
    .excellence-slider-section {
      padding: 3rem 0;
    }

    .slider-main-title {
      font-size: 1.8rem;
      line-height: 1.3;
      margin-bottom: 2rem;
    }

    .slide-layout {
      grid-template-columns: 1fr;
      min-height: auto;
    }

    .slide-visual {
      height: 200px;
      order: -1;
    }

    .slide-icon {
      width: 80px;
      height: 80px;
    }

    .slide-content-area {
      padding: 2rem;
      text-align: center;
    }

    .slide-title {
      font-size: 1.5rem;
      margin-bottom: 1rem;
    }

    .slide-description {
      font-size: 0.95rem;
    }

    .nav-btn {
      width: 40px;
      height: 40px;
    }

    .nav-btn svg {
      width: 20px;
      height: 20px;
    }

    .slider-navigation {
      top: 40%;
    }

    .nav-prev {
      margin-left: -20px;
    }

    .nav-next {
      margin-right: -20px;
    }
  }

  @media (max-width: 480px) {
    .slider-main-title {
      font-size: 1.4rem;
      letter-spacing: 1px;
    }

    .slide-content-area {
      padding: 1.5rem;
    }

    .slide-title {
      font-size: 1.3rem;
    }

    .slide-description {
      font-size: 0.9rem;
      line-height: 1.6;
    }

    .nav-btn {
      width: 35px;
      height: 35px;
    }

    .nav-btn svg {
      width: 18px;
      height: 18px;
    }

    .nav-prev {
      margin-left: -17px;
    }

    .nav-next {
      margin-right: -17px;
    }

    .indicator-dot {
      width: 10px;
      height: 10px;
    }
  }

  // Circular Services Responsive
  @media (max-width: 768px) {
    .circular-container {
      width: 400px;
      height: 400px;
    }

    .center-circle {
      width: 150px;
      height: 150px;
    }

    .center-icon svg {
      width: 2rem;
      height: 2rem;
    }

    .center-title {
      font-size: 1rem;
    }

    .center-subtitle {
      font-size: 0.8rem;
    }

    .service-item-position {
      width: 100px;
      height: 100px;
      margin-left: -50px;
      margin-top: -50px;
      transform: rotate(calc(var(--position-index) * 60deg)) translateY(-130px)
        rotate(calc(var(--position-index) * -60deg));
    }

    .service-item {
      padding: 0.75rem;
    }

    .service-icon-container {
      width: 35px;
      height: 35px;
      margin-bottom: 0.5rem;
    }

    .service-name {
      font-size: 0.8rem;
    }

    .service-desc {
      font-size: 0.7rem;
    }
  }

  @media (max-width: 480px) {
    .circular-services-section {
      padding: 2rem 0;
    }

    .circular-container {
      width: 300px;
      height: 300px;
    }

    .center-circle {
      width: 120px;
      height: 120px;
    }

    .center-icon svg {
      width: 1.5rem;
      height: 1.5rem;
    }

    .center-title {
      font-size: 0.9rem;
    }

    .center-subtitle {
      font-size: 0.75rem;
    }

    .service-item-position {
      width: 80px;
      height: 80px;
      margin-left: -40px;
      margin-top: -40px;
      transform: rotate(calc(var(--position-index) * 60deg)) translateY(-100px)
        rotate(calc(var(--position-index) * -60deg));
    }

    .service-item {
      padding: 0.5rem;
    }

    .service-icon-container {
      width: 28px;
      height: 28px;
      margin-bottom: 0.25rem;
    }

    .service-name {
      font-size: 0.7rem;
    }

    .service-desc {
      font-size: 0.6rem;
    }

    .service-icon-skeleton {
      width: 28px;
      height: 28px;
      margin-bottom: 0.25rem;
    }

    .skeleton-title {
      height: 12px;
    }

    .skeleton-desc {
      height: 10px;
    }
  }

  // Service Detail Popup
  .service-detail-popup {
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.8);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1000;
    backdrop-filter: blur(10px);
    animation: fadeIn 0.3s ease;
  }

  .popup-content {
    background: white;
    border-radius: 20px;
    padding: 2rem;
    max-width: 500px;
    width: 90%;
    max-height: 80vh;
    overflow-y: auto;
    position: relative;
    animation: slideUp 0.3s ease;
  }

  .close-btn {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: none;
    border: none;
    font-size: 1.5rem;
    cursor: pointer;
    color: #666;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
  }

  .close-btn:hover {
    background: rgba(0, 0, 0, 0.1);
    color: #333;
  }

  .close-btn svg {
    width: 20px;
    height: 20px;
  }

  .popup-header {
    text-align: center;
    margin-bottom: 1.5rem;
  }

  .popup-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    margin: 0 auto 1rem;
    object-fit: cover;
  }

  .popup-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 0.5rem;
  }

  .popup-body {
    text-align: center;
  }

  .popup-description {
    font-size: 1rem;
    color: #666;
    line-height: 1.6;
    margin-bottom: 1.5rem;
  }

  .popup-cta {
    display: inline-block;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    padding: 12px 24px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
  }

  .popup-cta:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
  }

  // Basic Animations
  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }

  @keyframes slideUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  // Card Content & Navigation
  .card-content {
    position: relative;
    padding: 2rem 3rem;
  }

  .card-navigation {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    transform: translateY(-50%);
    display: flex;
    justify-content: space-between;
    z-index: 10;
    pointer-events: none;
    padding: 0 1rem;
  }

  .nav-arrow {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 2px solid #667eea;
    background: white;
    color: #667eea;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
    pointer-events: auto;
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.15);
  }

  .nav-arrow:hover:not(:disabled) {
    background: #667eea;
    color: white;
    transform: scale(1.1);
    box-shadow: 0 12px 35px rgba(102, 126, 234, 0.25);
  }

  .nav-arrow:disabled {
    opacity: 0.4;
    cursor: not-allowed;
  }

  .nav-arrow svg {
    width: 24px;
    height: 24px;
  }

  // Slider Container
  .card-slider {
    margin: 2rem 0;
  }

  .slider-container {
    overflow: hidden;
    border-radius: 16px;
    background: #f8f9fa;
    border: 1px solid rgba(0, 0, 0, 0.05);
  }

  .slides-wrapper {
    display: flex;
    transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
  }

  .excellence-slide {
    min-width: 100%;
    background: white;
  }

  .slide-content-grid {
    display: grid;
    grid-template-columns: 250px 1fr;
    min-height: 350px;
    align-items: center;
  }

  // Icon Section
  .slide-icon-section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
  }

  .slide-icon-section::before {
    content: "";
    position: absolute;
    inset: 0;
    background: radial-gradient(
        circle at 30% 30%,
        rgba(255, 255, 255, 0.2) 0%,
        transparent 50%
      ),
      radial-gradient(
        circle at 70% 70%,
        rgba(255, 255, 255, 0.1) 0%,
        transparent 50%
      );
  }

  .icon-wrapper {
    position: relative;
    z-index: 2;
  }

  .slide-icon-bg {
    width: 120px;
    height: 120px;
    background: rgba(255, 255, 255, 0.15);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255, 255, 255, 0.2);
  }

  .slide-icon {
    width: 80px;
    height: 80px;
    color: white;
  }

  .slide-icon svg {
    width: 100%;
    height: 100%;
  }

  // Text Section
  .slide-text-section {
    padding: 2.5rem 3rem;
    position: relative;
  }

  .slide-badge {
    position: absolute;
    top: 1.5rem;
    right: 2rem;
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: 700;
    font-size: 1rem;
  }

  .excellence-title {
    font-size: 2rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 1rem;
    line-height: 1.3;
  }

  .excellence-description {
    font-size: 1.1rem;
    color: #5a6c7d;
    line-height: 1.7;
    margin-bottom: 2rem;
  }

  .feature-highlights {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
  }

  .highlight-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-size: 0.95rem;
    color: #34495e;
    font-weight: 500;
  }

  .highlight-dot {
    width: 8px;
    height: 8px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 50%;
    flex-shrink: 0;
  }

  // Slide Indicators
  .slide-indicators {
    margin-top: 2rem;
  }

  .indicators-wrapper {
    display: flex;
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;
  }

  .indicator-btn {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 0.75rem 1.25rem;
    background: #f8f9fa;
    border: 2px solid transparent;
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
    min-width: 120px;
  }

  .indicator-btn.active {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.25);
  }

  .indicator-btn:hover:not(.active) {
    background: #e9ecef;
    transform: translateY(-1px);
  }

  .indicator-number {
    font-size: 1.1rem;
    font-weight: 700;
    margin-bottom: 0.25rem;
  }

  .indicator-title {
    font-size: 0.8rem;
    font-weight: 600;
    text-align: center;
  }

  // Enhanced Professional Footer
  .professional-footer {
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    border-top: 1px solid rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin-top: 4rem;
    width: 100%;
    display: block;
  }

  // Achievement Banner
  .achievement-banner {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 1.5rem 3rem;
    color: white;
    position: relative;
    overflow: hidden;

    &::before {
      content: "";
      position: absolute;
      top: 0;
      right: -50%;
      width: 100%;
      height: 100%;
      background: rgba(255, 255, 255, 0.1);
      transform: skewX(-15deg);
      pointer-events: none;
    }

    .banner-content {
      display: flex;
      align-items: center;
      gap: 1.5rem;
      position: relative;
      z-index: 1;
    }

    .achievement-icon {
      width: 50px;
      height: 50px;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      backdrop-filter: blur(10px);

      svg {
        width: 24px;
        height: 24px;
        color: white;
      }
    }

    .achievement-text {
      h4 {
        font-size: 1.25rem;
        font-weight: 700;
        margin: 0 0 0.25rem;
        color: white;
      }

      p {
        margin: 0;
        color: rgba(255, 255, 255, 0.9);
        font-size: 0.95rem;
      }
    }
  }

  // Professional Stats Grid
  .professional-stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.5rem;
    padding: 3rem;
    background: #ffffff;
    width: 100%;
    box-sizing: border-box;
  }

  .stat-card {
    background: #ffffff;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 16px;
    padding: 2rem 1.5rem;
    text-align: center;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);

    &::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, #667eea, #764ba2);
      transform: translateX(-100%);
      transition: transform 0.3s ease;
    }

    &:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);

      &::before {
        transform: translateX(0);
      }
    }

    .stat-icon {
      width: 60px;
      height: 60px;
      background: linear-gradient(135deg, #667eea, #764ba2);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1.5rem;

      svg {
        width: 28px;
        height: 28px;
        color: white;
      }
    }

    .stat-content {
      .stat-number {
        font-size: 2.5rem;
        font-weight: 800;
        background: linear-gradient(135deg, #667eea, #764ba2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 0.5rem;
        line-height: 1;
      }

      .stat-label {
        font-size: 1rem;
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 0.5rem;
      }

      .stat-description {
        font-size: 0.85rem;
        color: #6b7280;
        line-height: 1.4;
        margin-bottom: 1rem;
      }
    }

    .stat-progress {
      .progress-bar {
        width: 100%;
        height: 4px;
        background: #e5e7eb;
        border-radius: 2px;
        overflow: hidden;
        position: relative;

        &::after {
          content: "";
          position: absolute;
          top: 0;
          left: 0;
          width: var(--progress, 0%);
          height: 100%;
          background: linear-gradient(90deg, #667eea, #764ba2);
          border-radius: 2px;
          transition: width 1s ease-in-out;
        }
      }
    }
  }

  // Professional CTA Section
  .footer-cta-section {
    background: linear-gradient(135deg, #1f2937 0%, #111827 100%);
    padding: 2.5rem 3rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    overflow: hidden;

    &::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg>')
        repeat;
      pointer-events: none;
    }

    .cta-content {
      flex: 1;
      color: white;

      h5 {
        font-size: 1.5rem;
        font-weight: 700;
        margin: 0 0 0.5rem;
        color: white;
      }

      p {
        color: rgba(255, 255, 255, 0.8);
        margin: 0 0 1.5rem;
        font-size: 1rem;
        line-height: 1.5;
      }

      .cta-buttons {
        display: flex;
        gap: 1rem;
      }

      .cta-btn {
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 0.95rem;

        &.primary {
          background: linear-gradient(135deg, #667eea, #764ba2);
          color: white;

          &:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
          }
        }

        &.secondary {
          background: transparent;
          color: white;
          border: 2px solid rgba(255, 255, 255, 0.3);

          &:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.5);
          }
        }
      }
    }

    .cta-badge {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      background: rgba(255, 255, 255, 0.1);
      padding: 1rem 1.5rem;
      border-radius: 12px;
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);

      .badge-icon {
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;

        svg {
          width: 20px;
          height: 20px;
          color: white;
        }
      }

      span {
        color: white;
        font-weight: 600;
        font-size: 0.95rem;
      }
    }
  }

  // Responsive Design for Excellence Card
  @media (max-width: 992px) {
    .slide-content-grid {
      grid-template-columns: 200px 1fr;
    }

    .slide-text-section {
      padding: 2rem;
    }

    .excellence-title {
      font-size: 1.7rem;
    }

    .stats-grid {
      grid-template-columns: repeat(2, 1fr);
      gap: 1.5rem;
    }
  }

  @media (max-width: 768px) {
    .excellence-card-section {
      padding: 3rem 0;
    }

    .card-header {
      padding: 2rem 2rem 1.5rem;
    }

    .card-main-title {
      font-size: 1.8rem;
    }

    .card-content {
      padding: 1.5rem 2rem;
    }

    .slide-content-grid {
      grid-template-columns: 1fr;
      min-height: auto;
    }

    .slide-icon-section {
      height: 200px;
      order: -1;
    }

    .slide-icon-bg {
      width: 100px;
      height: 100px;
    }

    .slide-icon {
      width: 60px;
      height: 60px;
    }

    .slide-text-section {
      padding: 2rem;
      text-align: center;
    }

    .excellence-title {
      font-size: 1.5rem;
    }

    .excellence-description {
      font-size: 1rem;
    }

    .nav-arrow {
      width: 40px;
      height: 40px;
    }

    .nav-arrow svg {
      width: 20px;
      height: 20px;
    }

    .card-navigation {
      top: 40%;
      padding: 0 0.5rem;
    }

    .indicators-wrapper {
      gap: 0.5rem;
    }

    .indicator-btn {
      min-width: 100px;
      padding: 0.5rem 1rem;
    }

    .indicator-title {
      font-size: 0.7rem;
    }

    // Professional Footer Responsive
    .achievement-banner {
      padding: 1rem 2rem;

      .banner-content {
        flex-direction: column;
        text-align: center;
        gap: 1rem;
      }
    }

    .professional-stats-grid {
      grid-template-columns: repeat(2, 1fr);
      gap: 1rem;
      padding: 2rem;
    }

    .stat-card {
      padding: 1.5rem 1rem;

      .stat-number {
        font-size: 2rem;
      }
    }

    .footer-cta-section {
      flex-direction: column;
      gap: 1.5rem;
      padding: 2rem;
      text-align: center;

      .cta-buttons {
        justify-content: center;
      }
    }
  }

  @media (max-width: 480px) {
    .card-main-title {
      font-size: 1.5rem;
      line-height: 1.4;
    }

    .card-subtitle {
      font-size: 1rem;
    }

    .slide-text-section {
      padding: 1.5rem;
    }

    .excellence-title {
      font-size: 1.3rem;
    }

    .excellence-description {
      font-size: 0.95rem;
    }

    .nav-arrow {
      width: 35px;
      height: 35px;
    }

    .nav-arrow svg {
      width: 18px;
      height: 18px;
    }

    .slide-badge {
      width: 35px;
      height: 35px;
      font-size: 0.9rem;
    }

    // Professional Footer Mobile
    .professional-stats-grid {
      grid-template-columns: 1fr;
      gap: 1rem;
      padding: 1.5rem;
    }

    .stat-card {
      padding: 1.25rem;

      .stat-number {
        font-size: 1.8rem;
      }
    }

    .footer-cta-section {
      padding: 1.5rem;

      .cta-buttons {
        flex-direction: column;
        gap: 0.75rem;
      }

      .cta-btn {
        width: 100%;
      }
    }

    // Slider Tabs Responsive Styles
    .slider-tabs-card {
      .card-header {
        padding: 2rem 1rem;

        .card-main-title {
          font-size: 2rem;
        }

        .card-subtitle {
          font-size: 1rem;
        }
      }
    }

    .tabs-navigation {
      padding: 1rem;

      .tab-btn {
        min-width: 120px;
        padding: 1rem 1.5rem;

        .tab-title {
          font-size: 0.85rem;
        }
      }
    }

    .tabs-content {
      padding: 2rem 1rem;

      .tab-panel .panel-content {
        grid-template-columns: 1fr;
        gap: 2rem;
        text-align: center;
      }

      .panel-icon-section .large-icon-wrapper {
        width: 150px;
        height: 150px;

        .large-icon-bg {
          width: 100px;
          height: 100px;

          .large-icon svg {
            width: 50px;
            height: 50px;
          }
        }

        .icon-glow {
          width: 140px;
          height: 140px;
        }
      }

      .panel-text-section .panel-title {
        font-size: 1.8rem;
      }
    }
  }

  // Modern Excellence Section Responsive
  @media (max-width: 768px) {
    .modern-excellence-section {
      padding: 4rem 0;

      .container {
        padding: 0 1rem;
      }

      // Mobile layout fix for panel
      .modern-content-area .modern-panel .panel-layout {
        display: flex !important;
        flex-direction: column !important;
        grid-template-columns: none !important;
        gap: 2rem !important;
        text-align: center;
      }

      .visual-showcase {
        order: 1 !important;
        width: 100% !important;
      }

      .content-showcase {
        order: 2 !important;
        width: 100% !important;
      }
    }

    .excellence-showcase-card {
      .modern-header {
        padding: 3rem 2rem 2rem;

        .modern-title {
          font-size: clamp(2rem, 8vw, 3rem);
        }

        .modern-subtitle {
          font-size: 1rem;
        }

        .header-stats {
          grid-template-columns: 1fr;
          gap: 1rem;

          .stat-preview {
            padding: 1rem;
          }
        }
      }

      .modern-tab-navigation {
        padding: 2rem 1.5rem;

        .nav-background {
          display: none !important;
        }

        .nav-tabs-wrapper {
          display: flex !important;
          flex-direction: column !important;
          grid-template-columns: none !important;
          gap: 1rem !important;
        }

        .modern-tab-btn {
          position: relative !important;
          background: transparent !important;
          border: 1px solid rgba(99, 102, 241, 0.2) !important;
          border-radius: 12px !important;
          box-shadow: none !important;
          padding: 1rem 1.25rem !important;
          transition: all 0.3s ease !important;
          display: block !important;
          width: 100% !important;
          text-align: left !important;

          &::before {
            display: none !important;
            background: none !important;
          }

          .tab-hover-effect {
            display: none !important;
            opacity: 0 !important;
            background: none !important;
            visibility: hidden !important;
          }

          &.active {
            background: linear-gradient(135deg, #af212f, #ff4136) !important;
            border-color: transparent !important;
            box-shadow: 0 4px 20px rgba(99, 102, 241, 0.3) !important;
            transform: translateX(0px) !important;

            .tab-content-wrapper {
              color: white !important;

              .tab-number {
                color: rgba(255, 255, 255, 0.95) !important;
              }

              .tab-icon-modern svg {
                color: white !important;
                stroke: white !important;
              }

              .tab-title-modern {
                color: white !important;
              }

              .progress-line {
                background: rgba(255, 255, 255, 0.3) !important;

                &.active {
                  background: white !important;
                }
              }
            }
          }

          &:hover:not(.active) {
            transform: translateX(0px) !important;
            box-shadow: 0 2px 8px rgba(99, 102, 241, 0.15) !important;

            .tab-hover-effect {
              opacity: 0.5 !important;
            }
          }

          .tab-content-wrapper {
            padding: 0 !important;
            gap: 1rem !important;
            display: flex !important;
            align-items: center !important;

            .tab-number {
              min-width: 28px !important;
              font-size: 0.9rem !important;
            }

            .tab-icon-modern {
              width: 28px !important;
              height: 28px !important;
              display: flex !important;
              align-items: center !important;
              justify-content: center !important;

              svg {
                width: 18px !important;
                height: 18px !important;
              }
            }

            .tab-info {
              flex: 1 !important;

              .tab-title-modern {
                font-size: 0.9rem !important;
                line-height: 1.4 !important;
              }

              .tab-progress {
                margin-top: 0.5rem !important;

                .progress-line {
                  height: 3px !important;
                }
              }
            }
          }
        }
      }

      .modern-content-area {
        padding: 2rem;

        .modern-panel .panel-layout {
          display: flex;
          flex-direction: column;
          gap: 2rem;
          text-align: center;
        }

        .visual-showcase {
          order: 1;
          padding: 1.5rem;

          .main-visual .icon-container .main-icon {
            width: 100px;
            height: 100px;

            svg {
              width: 50px;
              height: 50px;
            }
          }

          .visual-stats .achievement-ring .ring-svg {
            width: 100px;
            height: 100px;
          }
        }

        .content-showcase {
          order: 2;

          .content-header .content-title {
            font-size: 2rem;

            .title-decorator {
              display: none;
            }
          }

          .content-body .modern-features .features-grid .feature-card {
            padding: 0.75rem 1rem;
          }
        }
      }
    }
  }

  @media (max-width: 480px) {
    .modern-excellence-section {
      .excellence-showcase-card {
        .modern-header {
          padding: 2rem 1rem;

          .header-badge {
            padding: 0.5rem 1rem;
            font-size: 0.8rem;
          }

          .modern-title {
            font-size: clamp(1.5rem, 10vw, 2.5rem);
          }
        }

        .modern-tab-navigation {
          padding: 1.5rem 1rem;

          .nav-background {
            display: none !important;
          }

          .nav-tabs-wrapper {
            display: flex !important;
            flex-direction: column !important;
            grid-template-columns: none !important;
            gap: 0.75rem !important;
          }

          .modern-tab-btn {
            position: relative !important;
            padding: 0.875rem 1rem !important;
            background: transparent !important;
            border: 1px solid rgba(99, 102, 241, 0.2) !important;
            border-radius: 12px !important;
            box-shadow: none !important;
            display: block !important;
            width: 100% !important;
            text-align: left !important;

            &::before {
              display: none !important;
              background: none !important;
            }

            .tab-hover-effect {
              display: none !important;
              opacity: 0 !important;
              background: none !important;
              visibility: hidden !important;
            }

            &.active {
              background: linear-gradient(135deg, #af212f, #ff4136) !important;
              border-color: transparent !important;
              box-shadow: 0 4px 20px rgba(99, 102, 241, 0.3) !important;
              transform: translateX(0px) !important;

              .tab-content-wrapper {
                color: white !important;

                .tab-number {
                  color: rgba(255, 255, 255, 0.95) !important;
                }

                .tab-icon-modern svg {
                  color: white !important;
                  stroke: white !important;
                }

                .tab-title-modern {
                  color: white !important;
                }

                .progress-line {
                  background: rgba(255, 255, 255, 0.3) !important;

                  &.active {
                    background: white !important;
                  }
                }
              }
            }

            &:hover:not(.active) {
              transform: translateX(0px) !important;
              box-shadow: 0 2px 8px rgba(99, 102, 241, 0.15) !important;
            }

            .tab-content-wrapper {
              padding: 0 !important;
              gap: 0.75rem !important;
              display: flex !important;
              align-items: center !important;

              .tab-number {
                min-width: 24px !important;
                font-size: 0.85rem !important;
              }

              .tab-icon-modern {
                width: 24px !important;
                height: 24px !important;
                display: flex !important;
                align-items: center !important;
                justify-content: center !important;

                svg {
                  width: 16px !important;
                  height: 16px !important;
                }
              }

              .tab-info {
                flex: 1 !important;

                .tab-title-modern {
                  font-size: 0.85rem !important;
                }
              }
            }
          }
        }

        .modern-content-area {
          padding: 1.5rem;

          .modern-panel .panel-layout {
            flex-direction: column;
            gap: 1.5rem;
          }

          .visual-showcase {
            order: 1;
            padding: 1rem;
          }

          .content-showcase {
            order: 2;

            .content-header .content-title {
              font-size: 1.75rem;
            }
          }
        }
      }
    }
  }
}

@media screen and (max-width: 767px) {
  .modern-tab-navigation .modern-tab-btn.active {
    background: linear-gradient(135deg, #af212f, #ff4136) !important;
  }
  .modern-tab-navigation .nav-background {
    display: none !important;
  }
}
</style>
