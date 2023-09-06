# CodeConnect

## Description
🌐 *CodeConnect*: Your new space inspired by Instagram 📸, specially designed for open-source programmers. Connect with developers from all around the world 🌍, collaborate on exciting projects 💡, share your code 🖥️, and let your work shine in a global community. Whether you want to showcase a sleek piece of code, receive feedback, or simply discuss the latest tech trends, this is your perfect spot. All of this, built with the robustness and elegance of Laravel 10 ❤️. Join in, contribute, and make your mark in the open-source world!🚀

## First steps

Execute migrations
```
./vendor/bin/sail bash
php artisan migrate
```

## Install TailwinCSS

Install Tailwindcss and create **tailwind.config.js**
```
 npm install -D tailwindcss postcss autoprefixer
 npx tailwindcss init -p
```

In tailwind config file add the resources folder
```
/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php"
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
```

Then run dev
```
npm run dev
```