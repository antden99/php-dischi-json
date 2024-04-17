//console.log("ciao");

const { createApp } = Vue;
createApp({
  data() {
    return {
      message: "Hello!",
      my_api: "dichi.json",
    };
  },

  mounted(){
    axios.get(this.my_api)
    .then((response)=>{
      console.log(response);
    })
  }

}).mount("#app");
