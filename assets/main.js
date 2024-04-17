//console.log("ciao");

const { createApp } = Vue;
createApp({
  data() {
    return {
      message: "Hello!",
      my_api: "server.php",    //dichiaro la variabile con il contenuto di server.php
      discsList: [],
    };
  },

  mounted() {
    axios.get(this.my_api).then((response) => {   //faccio la chiamata get a server.php per leggerne i dati
      console.log(response.data);
      this.discsList = response.data;
    });
  },
}).mount("#app");
