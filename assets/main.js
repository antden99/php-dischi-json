//console.log("ciao");

const { createApp } = Vue;
createApp({
  data() {
    return {
      message: "Hello!",
      my_api: "server.php", //dichiaro la variabile con il contenuto di server.php
      discsList: [],
      modaleAperta: false,
      contenutoModale: null,
    };
  },

  mounted() {
    axios.get(this.my_api).then((response) => {
      //faccio la chiamata get a server.php per leggerne i dati
      console.log(response.data);
      this.discsList = response.data;
    });
  },

  //EXPERIMENTS
  methods: {
    delate(i) {
      //console.log("ciao", i);

      const params = {
        my_index_delate: i,
      };

      axios.get(this.my_api, { params }).then((response) => {
        this.modal = response.data;
      });
    },

    open_modal(card) {
      this.modaleAperta = true;
      console.log(this.modaleAperta);

      this.contenutoModale = card;
    },

    closeModal() {
      this.modaleAperta = false;
    },
  },
}).mount("#app");
