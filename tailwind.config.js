module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            'nfsu-color': '#003548'
        },
        backgroundImage: theme => ({
            'nfsu-map': "url('/storage/map.png');",
        })
    },
  },
  plugins: [],
}
