<template>
  <div class="app">
    <h1>{{ title }}</h1>

    <p>{{ subtitle }}</p>

    <button @click="goLogin">
      {{ buttonText }}
    </button>
  </div>
</template>

<script>
export default {
  name: "App",
  data() {
    return {
      title: "eDoc Appointment System",
      subtitle: "Book doctors easily with Vue + PHP system",
      buttonText: "Make Appointment"
    };
  },
  methods: {
    goLogin() {
      window.location.href = "http://localhost/Dublicate/login.php";
    }
  }
};
</script>

<style>
.app {
  text-align: center;
  margin-top: 80px;
  font-family: Arial;
}

button {
  padding: 10px 20px;
  background: #2d89ef;
  color: white;
  border: none;
  border-radius: 6px;
  cursor: pointer;
}
</style>