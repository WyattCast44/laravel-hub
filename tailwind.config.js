module.exports = {
    theme: {
        extend: {
            fontFamily: {
                header: ["Open Sans", "sans-serif"]
            }
        },
        pagination: theme => ({
            color: theme("colors.red.500")
        })
    },
    variants: {
        borderColor: ["responsive", "hover", "focus", "focus-within"],
        outline: ["responsive", "focus", "focus-within"],
        textColor: ["responsive", "hover", "focus", "focus-within"],
        fill: ["responsive", "hover", "focus"]
    },
    plugins: [
        require("@tailwindcss/custom-forms"),
        require("tailwindcss-plugins/pagination"),
        require('@tailwindcss/ui'),
    ]
};
