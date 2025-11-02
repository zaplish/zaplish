import { defineConfig } from 'vite';

export default defineConfig(({ mode }) => {
  const isDev = mode === 'development';

  return {
    publicDir: false,
    build: {
      outDir: 'public',
      emptyOutDir: false,
      manifest: false,
      minify: !isDev,
      sourcemap: isDev,
      rollupOptions: {
        input: {
          app: 'js/app.js',
          styles: 'scss/main.scss',
        },
        output: {
          entryFileNames: isDev ? 'js/[name].js' : 'js/[name].min.js',
          assetFileNames: isDev ? 'css/[name].css' : 'css/[name].min.css',
        },
      },
    },
  };
});
