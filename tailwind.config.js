/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./index.php", "./includes/header.php", "./includes/footer.php", "./src/styles.css", "./js/scripts.js"],
  theme: {
    extend: {
      colors: {
        noir: "#080808",
        blanc: "#FFFFFF",
        jaune: "#ffd52b",
        violet: "#70008f",
        "violet-clair": "#B11BE1",
        "violet-fonce": "#760D89",
      },
      fontFamily: {
        raleway: "raleway",
        oswald: "oswald",
        h2: "oswald",
        h3: "oswald",
        h4: "oswald",
        text: "raleway",
        link: "raleway",
      },
      fontSize: {
        "h2-desktop": "60px",
        "h2-mobile": "40px",
        menu: "20px",
      },
      padding: {
        "section-mobile": "50px 5vw",
        "section-desktop": "72px 128px",
      },
    },
  },
  plugins: [],
};
