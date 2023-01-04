import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
  build: {
    rollupOptions: {
      input: [
        './src/packs/main.js',
        './src/packs/hello_world.js'
      ],
      output: {
        assetFileNames: `[name].min.[ext]`,
        chunkFileNames: `[name].min.js`,
        entryFileNames: '[name].min.js'
      }
    }
  },
  plugins: [vue()],
  resolve: {
    alias: {
      '@': './src'
    }
  },
  root: './src'
})
