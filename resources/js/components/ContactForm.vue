<template>
  <form @submit.prevent="submitForm" class="max-w-lg mx-auto bg-white rounded shadow-md">
    <div class="mb-4">
      <input type="text" v-model="form.name" id="name" placeholder="Name" class="input-form" required>
    </div>
    <div class="mb-4">
      <input type="email" v-model="form.email" id="email" placeholder="Email" class="input-form" required>
    </div>
    <div class="flex space-x-4">
      <div class="mb-4 w-full">
        <input type="text" v-model="form.birthplace" id="birthplace" placeholder="Birth place" class="input-form"
          required>
      </div>
      <div class="mb-4 relative w-full">
        <input type="date" v-model="form.birthday" id="birthday" :class="{ 'placeholder-style': form.birthday === '' }"
          class="input-form peer" required>
        <label for="birthday"
          class="absolute left-2 top-2 text-gray-400 pointer-events-none transition-opacity font-bold"
          :class="{ 'opacity-0': form.birthday }">Birthday</label>
      </div>
    </div>
    <div class="mb-4 flex space-x-4">
      <input type="text" v-model="form.phone" id="phone" placeholder="Phone" class="input-form" required>
      <input type="text" v-model="form.company" id="company" placeholder="Company" class="input-form">
    </div>
    <div class="mb-4">
      <input type="text" v-model="form.company" id="company" placeholder="Company" class="input-form">
    </div>
    <div class="mb-4">
      <textarea v-model="form.message" id="message" placeholder="Your Message" class="input-form" rows="4"
        required></textarea>
    </div>
    <div class="mb-4">
      <label class="inline-flex items-center">
        <input type="checkbox" v-model="form.privacyPolicy" required>
        <span class="ml-2 text-gray-700">Accept privacy policy</span>
      </label>
    </div>
    <div v-if="errors.length" class="mb-4">
      <ul>
        <li v-for="error in errors" :key="error" class="text-red-500">{{ error }}</li>
      </ul>
    </div>
    <button type="submit" class="bg-sky-500 text-white px-20 py-2">SEND</button>
  </form>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      form: {
        name: '',
        email: '',
        birthplace: '',
        birthday: '',
        phone: '',
        company: '',
        message: '',
        privacyPolicy: false
      },
      errors: []
    };
  },
  methods: {
    async submitForm() {
      try {
        const response = await axios.post('/contact', this.form);
        if (response.data.success) {
          alert('Message sent successfully!');
          this.resetForm();
        } else {
          this.errors = response.data.errors;
        }
      } catch (error) {
        console.log(error);
      }
    },
    resetForm() {
      this.form = {
        name: '',
        email: '',
        birthplace: '',
        birthday: '',
        phone: '',
        company: '',
        message: '',
        privacyPolicy: false
      };
      this.errors = [];
    }
  }
};
</script>

<style scoped>
/* Apply styles conditionally with the 'placeholder-style' class */
.placeholder-style::-webkit-datetime-edit-text,
.placeholder-style::-webkit-datetime-edit-month-field,
.placeholder-style::-webkit-datetime-edit-day-field,
.placeholder-style::-webkit-datetime-edit-year-field {
  color: transparent;
}

.placeholder-bold::placeholder {
  @apply font-bold;
}
</style>