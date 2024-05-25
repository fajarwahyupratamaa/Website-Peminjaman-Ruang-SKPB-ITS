/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['index.html' , './*.{html,js}'],
  theme: {
    container:{
      center:true,
      padding:'16px',
    },
    extend: {
      colors: {
        primary: '#0369a1' ,
        secondary: '#64748b',
        blue: '#1E429F',
        dark: '#0f172a' ,
      },
    screens:{
        '2xl':'1320px' ,
      },
    },
  },
  plugins: [],
};

