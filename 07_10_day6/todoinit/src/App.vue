<template>
  <div id="app">
    <div class="wrap">
      <header-component></header-component>
      <main-component></main-component>
      <footer-component></footer-component>
    </div>
  </div>
</template>

<script>

import HeaderComponent from '../src/components/HeaderComponent.vue'
import MainComponent from '../src/components/MainComponent.vue'
import FooterComponent from '../src/components/FooterComponent.vue'


export default {
  name: 'app',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  },
  components : {
    'header-component' : HeaderComponent,
    'main-component' : MainComponent,
    'footer-component' : FooterComponent

  }
}
</script>

<style>

*{margin: 0; padding: 0; vertical-align: middle; border:0}
html, body{width: 100%; height: 100%;}
body{font:normal 16px/1 'arial', '굴림';color: #555; background: #fff;}
a{color: #444; text-decoration: none;}
ul, li{list-style: none;}

#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

h1, h2 {
  font-weight: normal;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #42b983;
}
</style>
