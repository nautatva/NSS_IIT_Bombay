new Vue({
    el: '#app',
    data: {
      arts: [
        {type: 'BAROQUE', source: 'https://gymkhana.iitb.ac.in/~nss/assets/images/NSS.jpg'},
        {type: 'CUBISM', source: 'https://gymkhana.iitb.ac.in/~nss/assets/images/HPC_V1.JPG'},
        {type: 'IMPRESSIONISM', source: 'https://gymkhana.iitb.ac.in/~nss/assets/images/Vikas_ALP_GD.jpg'},
      ],
      hidden: [],
      counter: 1,
    },
  
    methods: {
      nextArt() {
        if(this.arts.length > 1) {
          const hide = this.arts.shift();
          this.hidden.push(hide);
          this.counter++;
        }
      },
      prevArt() {
        if(this.hidden.length > 0) {
          const unhide = this.hidden.pop();
          this.arts.unshift(unhide);
          this.counter--;
        }
      },
    },
    
    computed: {
      currentArt() {
        return this.arts[0].type;
      }
    }
  })