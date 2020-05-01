module.exports = {
    purge: [
        './resources/**/*.md',
        './resources/**/*.js',
        './resources/**/*.html',
        './resources/**/*.blade.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                header: ["Open Sans", "sans-serif"]
            }
        }
    },
    variants: {
        borderColor: ["responsive", "hover", "focus", "focus-within"],
        outline: ["responsive", "focus", "focus-within"],
        textColor: ["responsive", "hover", "focus", "focus-within"],
        fill: ["responsive", "hover", "focus"]
    },
    plugins: [
        require("@tailwindcss/custom-forms"),
        require('@tailwindcss/ui'),
    ],
};
