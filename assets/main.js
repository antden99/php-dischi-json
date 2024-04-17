//console.log("ciao");

const { createApp } = Vue;
createApp({
  data() {
    return {
      message: "Hello!",
      my_api: "dichi.json",
      discsList: [],
    };
  },

  mounted() {
    axios.get(this.my_api).then((response) => {
      console.log(response.data);
      this.discsList = response.data;
    });
  },
}).mount("#app");
