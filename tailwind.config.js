const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                sans: ["Montserrat", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primaryColor: {
                    100: "#F7A5B7", // Warna lebih terang
                    200: "#F38E9F", // Lebih gelap sedikit
                    300: "#F17888", // Sedikit lebih gelap lagi
                    400: "#ED4E6B", // Lebih dekat ke warna dasar
                    500: "#ED125F", // Warna dasar
                    600: "#D0105A", // Sedikit lebih gelap
                    700: "#B20F56", // Lebih pekat
                    800: "#9C0D51", // Gelap
                    900: "#880A4D", // Sangat gelap
                },
                darkColor: "#101820",
            },
            keyframes: {
                "infinite-scroll-up": {
                    "0%": { transform: "translateY(0)" },
                    "100%": { transform: "translateY(-100%)" },
                },
                "infinite-scroll-down": {
                    "0%": { transform: "translateY(-100%)" },
                    "100%": { transform: "translateY(0)" },
                },
            },
            animation: {
                "infinite-scroll-up": "infinite-scroll-up 20s linear infinite",
                "infinite-scroll-down":
                    "infinite-scroll-down 20s linear infinite",
            },
        },
    },
    variants: {
        extend: {
            backgroundColor: ["active"],
        },
    },
    content: [
        "./app/**/*.php",
        "./resources/**/*.html",
        "./resources/**/*.js",
        "./resources/**/*.jsx",
        "./resources/**/*.ts",
        "./resources/**/*.tsx",
        "./resources/**/*.php",
        "./resources/**/*.vue",
        "./resources/**/*.twig",
    ],
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("daisyui"),
    ],
};
