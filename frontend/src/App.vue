<template>
  <h1>Event Manager</h1>
</template>

<script setup lang="ts">
import { onMounted } from 'vue'
import { api } from './services/api'

onMounted(async () => {
  const res = await api.get('/health')
  console.log(res.data)
})
</script>