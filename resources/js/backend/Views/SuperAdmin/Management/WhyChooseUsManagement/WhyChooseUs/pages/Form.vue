<template>
  <div>
    <form @submit.prevent="submitHandler">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <h5 class="text-capitalize">
            {{
              param_id
                ? `${setup.edit_page_title}`
                : `${setup.create_page_title}`
            }}
          </h5>
          <div>
            <router-link
              v-if="item.slug"
              class="btn btn-outline-info mr-2 btn-sm"
              :to="{
                name: `Details${setup.route_prefix}`,
                params: { id: item.slug },
              }"
            >
              {{ setup.details_page_title }}
            </router-link>
            <router-link
              class="btn btn-outline-warning btn-sm"
              :to="{ name: `All${setup.route_prefix}` }"
            >
              {{ setup.all_page_title }}
            </router-link>
          </div>
        </div>
        <div class="card-body card_body_fixed_height">
          <div class="row">
            <template
              v-for="(form_field, index) in form_fields"
              v-bind:key="index"
            >
              <!-- Dynamic Array Input for Key Features -->
              <div
                v-if="form_field.type === 'dynamic_array'"
                :class="form_field.row_col_class || 'col-md-12'"
              >
                <div class="form-group">
                  <label class="form-label">{{ form_field.label }}</label>
                  <div class="key-features-container">
                    <div
                      v-for="(feature, featureIndex) in form_field.value"
                      :key="featureIndex"
                      class="feature-item card mb-3 p-3"
                    >
                      <div
                        class="d-flex justify-content-between align-items-center mb-2"
                      >
                        <h6 class="mb-0">Feature {{ featureIndex + 1 }}</h6>
                        <button
                          type="button"
                          class="btn btn-sm btn-danger"
                          @click="removeFeature(featureIndex)"
                          v-if="form_field.value.length > 1"
                        >
                          <i class="fa fa-times"></i>
                        </button>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <label>Feature Title</label>
                          <input
                            type="text"
                            class="form-control"
                            v-model="feature.title"
                            placeholder="Enter feature title"
                            :name="`key_features[${featureIndex}][title]`"
                          />
                        </div>
                        <!-- <div class="col-md-6">
                          <label>Feature Description</label>
                          <textarea
                            class="form-control"
                            v-model="feature.description"
                            placeholder="Enter feature description"
                            :name="`key_features[${featureIndex}][description]`"
                            rows="3"
                          ></textarea>
                        </div> -->
                      </div>
                    </div>
                    <button
                      type="button"
                      class="btn btn-primary btn-sm mt-2"
                      @click="addFeature"
                    >
                      <i class="fa fa-plus"></i> Add Feature
                    </button>
                  </div>
                </div>
              </div>

              <!-- Regular form fields -->
              <common-input
                v-else
                :label="form_field.label"
                :type="form_field.type"
                :name="form_field.name"
                :multiple="form_field.multiple"
                :value="form_field.value"
                :data_list="form_field.data_list"
                :is_visible="form_field.is_visible"
                :row_col_class="form_field.row_col_class"
              />
            </template>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-light btn-square px-5">
            <i class="icon-lock"></i>
            Submit
          </button>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import { mapActions, mapState } from "pinia";
import { store } from "../store";
import setup from "../setup";
import form_fields from "../setup/form_fields";

export default {
  data: () => ({
    setup,
    form_fields,
    param_id: null,
  }),
  created: async function () {
    let id = (this.param_id = this.$route.params.id);
    this.reset_fields();

    // Initialize key_features with at least one empty item if not editing
    if (!id) {
      const keyFeaturesField = this.form_fields.find(
        (field) => field.name === "key_features"
      );
      if (keyFeaturesField) {
        keyFeaturesField.value = [{ title: "" }];
      }
    }

    if (id) {
      this.set_fields(id);
    }
  },
  methods: {
    ...mapActions(store, {
      create: "create",
      update: "update",
      details: "details",
      get_all: "get_all",
      set_only_latest_data: "set_only_latest_data",
    }),
    reset_fields: function () {
      this.form_fields.forEach((item) => {
        if (item.type === "dynamic_array") {
          item.value = [{ title: "" }];
        } else {
          item.value = "";
        }
      });
    },
    set_fields: async function (id) {
      this.param_id = id;
      await this.details(id);
      if (this.item) {
        this.form_fields.forEach((field, index) => {
          Object.entries(this.item).forEach((value) => {
            if (field.name == value[0]) {
              if (field.type === "dynamic_array") {
                // Handle key_features array
                if (Array.isArray(value[1]) && value[1].length > 0) {
                  this.form_fields[index].value = value[1];
                } else {
                  this.form_fields[index].value = [{ title: "" }];
                }
              } else {
                this.form_fields[index].value = value[1];
              }
            }
            if (field.name == "description" && value[0] == "description") {
              $("#description").summernote("code", value[1]);
            }
          });
        });
      }
    },

    addFeature: function () {
      const keyFeaturesField = this.form_fields.find(
        (field) => field.name === "key_features"
      );
      if (keyFeaturesField) {
        keyFeaturesField.value.push({ title: "" });
      }
    },

    removeFeature: function (index) {
      const keyFeaturesField = this.form_fields.find(
        (field) => field.name === "key_features"
      );
      if (keyFeaturesField && keyFeaturesField.value.length > 1) {
        keyFeaturesField.value.splice(index, 1);
      }
    },

    submitHandler: async function ($event) {
      this.set_only_latest_data(true);

      // Handle key_features data before submission
      this.handleKeyFeaturesSubmission();

      if (this.param_id) {
        this.setSummerEditor();
        let response = await this.update($event);
        // await this.get_all();
        if ([200, 201].includes(response.status)) {
          window.s_alert("Data successfully updated");
          this.$router.push({ name: `Details${this.setup.route_prefix}` });
        }
      } else {
        this.setSummerEditor();
        let response = await this.create($event);
        // await this.get_all();
        if ([200, 201].includes(response.status)) {
          window.s_alert("Data Successfully Created");
          this.$router.push({ name: `All${this.setup.route_prefix}` });
        }
      }
    },

    handleKeyFeaturesSubmission: function () {
      const keyFeaturesField = this.form_fields.find(
        (field) => field.name === "key_features"
      );
      if (keyFeaturesField && keyFeaturesField.value) {
        // Remove existing key_features inputs
        const existingInputs = document.querySelectorAll(
          'input[name^="key_features"]'
        );
        existingInputs.forEach((input) => input.remove());

        // Create new hidden inputs for key_features
        keyFeaturesField.value.forEach((feature, index) => {
          if (feature.title && feature.title.trim() !== "") {
            // Create hidden input for title only
            const titleInput = document.createElement("input");
            titleInput.setAttribute("name", `key_features[${index}][title]`);
            titleInput.setAttribute("type", "hidden");
            titleInput.value = feature.title;
            document.querySelector("form").appendChild(titleInput);
          }
        });
      }
    },

    setSummerEditor() {
      // Set property_detail summernote content
      var markupStr = $("#description").summernote("code");
      var target = document.createElement("input");
      target.setAttribute("name", "description");
      target.value = markupStr;
      document.getElementById("description").appendChild(target);
    },
  },

  computed: {
    ...mapState(store, {
      item: "item",
    }),
  },
};
</script>

<style scoped>
.key-features-container {
  border: 1px solid #e0e0e0;
  border-radius: 5px;
  padding: 15px;
  background-color: transparent;
}

.feature-item {
  background-color: transparent;
  border: 1px solid #dee2e6 !important;
}

.feature-item h6 {
  color: #495057;
  font-weight: 600;
}

.btn-danger {
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-danger:hover {
  background-color: #c82333;
  border-color: #bd2130;
}

.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  background-color: #0056b3;
  border-color: #004085;
}
</style>
