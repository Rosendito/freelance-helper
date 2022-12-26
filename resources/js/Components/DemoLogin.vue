<script setup>
import DropdownLink from './DropdownLink.vue'

defineEmits(['loginDemo'])
</script>

<template>
  <div class="absolute top-6 right-6 py-1 bg-white rounded-md shadow-lg z-50">
    <span class="block px-4 py-2 text-xs text-gray-400"> Login demo </span>
    <dropdown-link
      v-for="user in $page.props.settings.demo_users"
      :key="user.id"
      as="button"
      @click="$emit('loginDemo', user)"
    >
      <div class="flex items-center space-x-3">
        <img
          class="h-8 w-8 rounded-full object-cover"
          :src="user.profile_photo_url"
          :alt="user.name"
        />

        <div class="flex flex-col font-medium">
          <h3>{{ user.name }}</h3>
          <span class="text-gray-400">{{ user.email }}</span>
        </div>
      </div>
    </dropdown-link>
  </div>
</template>
