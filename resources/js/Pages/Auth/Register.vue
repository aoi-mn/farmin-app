<template>
  <section class="d-flex justify-content-center align-items-center vh-100">
    <div class="card w-100 max-width-500">
      <div class="card-header">
        <h5>Register Form</h5>
      </div>
      <div class="card-body">
        <form @submit.prevent="submitForm">
          <div v-if="errors" class="alert alert-danger">
            <ul>
              <li v-for="(error, index) in errors" :key="index">{{ error[0] }}</li>
            </ul>
          </div>
          <div class="mb-3">
            <label class="form-label" for="name">Full Name</label>
            <input
              type="text"
              v-model="form.name"
              class="form-control"
              id="name"
              placeholder="Enter your full name"
              required
            />
          </div>
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
          <div class="mb-3">
            <label class="form-label" for="password_confirmation">Confirm Password</label>
            <input
              type="password"
              v-model="form.password_confirmation"
              class="form-control"
              id="password_confirmation"
              placeholder="Confirm your password"
              required
            />
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-primary mb-4 me-2">
              Register
            </button>
          </div>
        </form>
        <div class="text-center">
          <a href="/login" class="btn btn-link">Already have an account? Login</a>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { Inertia } from '@inertiajs/inertia';
import { useForm } from '@inertiajs/inertia-vue3';
import LoginLa from "@/Layouts/LoginLa.vue";

export default {
  layout: LoginLa,
  data() {
    return {
      form: useForm({
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
      }),
      errors: null,
    };
  },
  methods: {
    submitForm() {
      this.form.post('/auth/register/save', {
        onError: (errors) => {
          this.errors = errors;
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
