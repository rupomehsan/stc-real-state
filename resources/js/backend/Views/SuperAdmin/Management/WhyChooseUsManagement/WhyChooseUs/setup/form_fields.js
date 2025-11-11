export default [
  {
    name: "title",
    label: "Enter your title",
    type: "text",
    value: "",
  },

  {
    name: "image",
    label: "Enter your image",
    type: "file",
    value: "",
  },
  {
    name: "description",
    label: "Enter your description",
    type: "texteditor",
    value: "",
    row_col_class: "col-md-12",
  },
  {
    name: "key_features",
    label: "Key Features",
    type: "dynamic_array",
    value: [],
    row_col_class: "col-md-12",
    fields: [
      {
        name: "title",
        label: "Feature Title",
        type: "text",
        placeholder: "Enter feature title",
      },
      {
        name: "description",
        label: "Feature Description",
        type: "textarea",
        placeholder: "Enter feature description",
      },
    ],
  },
];
