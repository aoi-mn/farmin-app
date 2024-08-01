<template>
  <section class="d-flex justify-content-center align-items-center vh-100">
    <div class="card w-100 max-width-500">
      <div class="card-header">
        <h5>Login Form</h5>
      </div>
      <div class="card-body">
        <form @submit.prevent="submitForm">
          <div class="mb-3">
            <label class="form-label" for="email">Email Address</label>
            <input
              type="email"
              v-model="form.email"
              class="form-control"
              id="email"
              placeholder="Enter your email"
              required
            />
          </div>
          <div class="mb-3">
            <label class="form-label" for="password">Password</label>
            <input
              type="password"
              v-model="form.password"
              class="form-control"
              id="password"
              placeholder="Enter your password"
              required
            />
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-primary mb-4 me-2">
              Login
            </button>
          </div>
        </form>
        <div class="text-center">
          <a href="/register" class="btn btn-link">Register</a>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { Inertia } from '@inertiajs/inertia';
import LoginLa from "@/Layouts/LoginLa.vue";

export default {
  layout: LoginLa,
  data() {
    return {
      form: {
        email: '',
        password: '',
      },
      errors: {} // To store and display validation errors
    };
  },
  methods: {
    submitForm() {
      Inertia.post('/auth/login', this.form, {
        onSuccess: () => {
          // Redirect or handle success if needed
        },
        onError: (errors) => {
          // Handle validation errors
          this.errors = errors; // Store errors for display
          console.error(errors);
        }
      });
    },
  },
};
</script>

<style scoped>
.vh-100 {
  min-height: 100vh;
}

.max-width-500 {
  max-width: 500px;
}
</style>
