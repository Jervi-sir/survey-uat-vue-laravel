<template>
  <div class="body ">
      <div class="w-full max-w-xl mx-auto h-full">
        <div class= "bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 the-display animate__animated animate__fadeIn">
          <Header msg="Welcome to Your Vue.js App"/>
          <Form msg="Welcome to Your Vue.js App" class="animate__animated animate__fadeInUp animate__delay-2s"/>
          <Footer msg="Welcome to Your Vue.js App" class="animate__animated animate__fadeIn animate__delay-3s"/>

        </div>   
      </div>
  </div>
</template>

<script>
import Header from './components/Header.vue'
import Form from './components/Form.vue'
import Footer from './components/Footer.vue'

export default {
  name: 'App',
  components: {
    Header,
    Form,
    Footer
  }
}
</script>

<style>
@import 'https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css';
@import 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css';
@import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap');

:root {
  --animate-delay: 0.2s;
}

body {
  background: #e8eafa;
}


a {
  color: #2abb9b;
  font-weight: 700;
}
.the-display {
  display: flex;
  flex-direction: column;
  box-shadow:
       inset 0 -3em 3em rgba(0,0,0,0.1),
             0 0  0 2px rgb(255,255,255),
             0.3em 0.3em 1em rgba(0,0,0,0.3);
}

@media only screen and (min-width: 420px){
  .the-display {
    height: 100vh;
  }

}


#app {
  font-family: Cairo, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  height: 100vh;
  color: #2c3e50;
  /*margin-top: 60px;*/
}
body {

  background: #e8eafa;
}

.body {
  height: 100%;
  margin: auto;
}
</style>
