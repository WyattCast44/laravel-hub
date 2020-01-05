module.exports = {
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
        textColor: ["responsive", "hover", "focus", "focus-within"]
    },
    plugins: [require("@tailwindcss/custom-forms")]
};
