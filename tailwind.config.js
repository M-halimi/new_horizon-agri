/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          50: "#f6fbea",
          100: "#eaf5d2",
          200: "#d6ecaa",
          300: "#bade78",
          400: "#98ca41",
          500: "#81b32f",
          600: "#628e22",
          700: "#4c6d1e",
          800: "#3f571d",
          900: "#364a1d",
          DEFAULT: "#81b32f",
        },
        secondary: {
          50: "#f2fbfa",
          100: "#d5f2f0",
          200: "#aae5e0",
          300: "#78d0cd",
          400: "#4cb5b5",
          500: "#339799",
          600: "#26787b",
          700: "#226063",
          800: "#204e51",
          900: "#1e4143",
          DEFAULT: "#339799",
        },
        natural: {
          50: "#F8F9FB",
          100: "#E9E9EB",
          200: "#D8D8DA",
          300: "#C3C3C5",
          400: "#A8A8AA",
          500: "#89898A",
          600: "#686869",
          700: "#49494A",
          800: "#313131",
          900: "#202020",
          DEFAULT: "#202020",
        },
        accent: {
          50: "#FDFAF3",
          100: "#FDF2D7",
          200: "#FDE9B7",
          300: "#FDDD8D",
          400: "#FECF57",
          500: "#FFBE18",
          600: "#E0A715",
          700: "#C59312",
          800: "#A47A0F",
          900: "#805F0C",
          DEFAULT: "#FFBE18",
        },
        green: {
          50: "#F1F9F4",
          100: "#D5F0DC",
          200: "#B5E6BF",
          300: "#8BD999",
          400: "#55C868",
          500: "#17B530",
          600: "#149F2A",
          700: "#128C25",
          800: "#0F741F",
          900: "#0C5B18",
          DEFAULT: "#17B530",
        },
        red: {
          50: "#FCF6F8",
          100: "#FBDBDE",
          200: "#FABFC2",
          300: "#F99C9E",
          400: "#F86F70",
          500: "#F73B3B",
          600: "#D93434",
          700: "#BF2E2E",
          800: "#9F2626",
          900: "#7C1E1E",
          DEFAULT: "#F73B3B",
        },
      },
    },
  },
  plugins: [],
}

