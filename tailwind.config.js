import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                fadeInUp: {
                    "0%": { opacity: "0", transform: "translateY(20px)" },
                    "100%": { opacity: "1", transform: "translateY(0)" },
                },
                fadeInDown: {
                    "0%": { opacity: "0", transform: "translateY(-20px)" },
                    "100%": { opacity: "1", transform: "translateY(0)" },
                },
                zoomIn: {
                    "0%": { opacity: "0", transform: "scale(0.9)" },
                    "100%": { opacity: "1", transform: "scale(1)" },
                },
                zoomInSlow: {
                    "0%": { opacity: "0", transform: "scale(0.8)" },
                    "100%": { opacity: "1", transform: "scale(1)" },
                },
                slideInLeft: {
                    "0%": { opacity: "0", transform: "translateX(-50px)" },
                    "100%": { opacity: "1", transform: "translateX(0)" },
                },
                slideInRight: {
                    "0%": { opacity: "0", transform: "translateX(50px)" },
                    "100%": { opacity: "1", transform: "translateX(0)" },
                },
                fadeInScale: {
                    "0%": { opacity: "0", transform: "scale(0.95)" },
                    "100%": { opacity: "1", transform: "scale(1)" },
                },
            },
            animation: {
                "fade-in-up": "fadeInUp 0.8s ease-out forwards",
                "fade-in-down": "fadeInDown 0.8s ease-out forwards",
                "zoom-in": "zoomIn 0.6s ease-out forwards",
                "zoom-in-slow": "zoomInSlow 1s ease-out forwards",
                "slide-in-left": "slideInLeft 0.8s ease-out forwards",
                "slide-in-right": "slideInRight 0.8s ease-out forwards",
                "fade-in-scale": "fadeInScale 0.7s ease-out forwards",

                // Stagger animations (akan dijelaskan di bawah)
                "fade-in-up-stagger": "fadeInUp 0.8s ease-out forwards",
                "fade-in-stagger": "fadeInUp 0.8s ease-out forwards", // Reusing for general fade-in
                "fade-in-stagger-list": "fadeInUp 0.8s ease-out forwards", // Reusing for lists
                "fade-in-item": "fadeInUp 0.7s ease-out forwards", // Individual item animation
                "slide-in-left-delay":
                    "slideInLeft 0.8s ease-out forwards 0.2s", // Add a delay
                "slide-in-right-delay":
                    "slideInRight 0.8s ease-out forwards 0.2s", // Add a delay
            },
        },
    },
    plugins: [],
};
