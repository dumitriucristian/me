  <template>
    <label>Article Title:</label>
   <input type="text" placeholder="Title" v-model="title">
    <div ref="editor"></div>
    <div class="flex justify-center">
      <button 
      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline m-3" 
      type="button"
      @click="save()"
      >
        Save

      </button>
    </div>
   
  </template>
  <script>
  import Quill from "quill";
  import "quill/dist/quill.core.css";
  import "quill/dist/quill.bubble.css";
  import "quill/dist/quill.snow.css";
  
  export default {
    props: {
      modelValue: {
        type: String,
        default: "",
      },
    },
    data() {
      return {
        editor: null,
        title:'',
      };
    },
    mounted() {
      var _this = this;
  
      this.editor = new Quill(this.$refs.editor, {
        modules: {
          toolbar: [
            [
              {
                header: [1, 2, 3, 4, false],
              },
            ],
            ["bold", "italic", "underline", "link"],
            ['blockquote', 'code-block'],
          ],
        },
        //theme: 'bubble',
        theme: "snow",
        formats: ["bold", "underline", "header", "italic", "link","image"],
        placeholder: "Type something in here!",
      });
      this.editor.root.innerHTML = this.modelValue;
      this.editor.on("text-change", function () {
       
        return _this.update();
      });
    },
  
    methods: {
      update: function update() {
        this.$emit(
          "update:modelValue",
          this.editor.getText() ? this.editor.root.innerHTML : ""
         
        );
      },
      save: function save(){
        //make the logic to save the article data

        console.log(this.editor.getSemanticHTML());
        console.log(this.title);
      }
    },
  };
  </script>