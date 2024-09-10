import { defineConfig, loadEnv } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import sass from "sass";
import path from "path";

export default defineConfig(() => {
    return {
        server: {
            https: false,
            host: "0.0.0.0",
            hmr: {
                host: "vite.schiphol.localhost"
            },
        },
        plugins: [
            laravel({
                input: [
                    "resources/scss/backend.scss",
                    "resources/scss/app.scss",
                    "resources/js/app.js",
                ],
                refresh: true,
            }),
            vue({
                template: {
                    transformAssetUrls: {
                        base: null,
                        includeAbsolute: false,
                    },
                },
            }),
        ],
        css: {
            preprocessorOptions: {
                scss: {
                    implementation: sass,
                },
            },
        },
        resolve: {
            alias: {
                "@resources": path.resolve(__dirname, "./resources"),
                "@images": path.resolve(__dirname, "./storage/images"),
            },
        },
        build: {
            rollupOptions: {
                output: {
                    manualChunks(id) {
                        if (id.includes("node_modules")) {
                            return id
                                .toString()
                                .split("node_modules/")[1]
                                .split("/")[0]
                                .toString();
                        }
                    },
                },
            },
        },
    };
});
