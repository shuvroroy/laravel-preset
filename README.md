# 🚀 Shuvro Roy's Laravel Frontend Preset

A Laravel front-end scaffolding preset for Tailwind CSS - a Utility-First CSS Framework for Rapid UI Development 👌🏻

What it includes:

- [Tailwind CSS](https://tailwindcss.com)
- [postcss-nesting](https://github.com/jonathantneal/postcss-nesting) for nested CSS support
- [Purgecss](https://www.purgecss.com/), via [spatie/laravel-mix-purgecss](https://github.com/spatie/laravel-mix-purgecss)
- [Vue.js](https://vuejs.org/)
- Removes Bootstrap and jQuery

## Installation

Run this command to add the preset to your project:

```
composer require shuvroroy/laravel-preset
```

Apply the scaffolding by running:

```
php artisan preset tailwind
```

With authentication layout, apply the scaffolding by running:

```
php artisan preset tailwind:auth
```

To generate a Tailwind config file for your project, apply the scaffolding by running:

```
./node_modules/.bin/tailwind init tailwind.js
```

Then update the setting in webpack.mix.js file:

```
require('tailwindcss')('./tailwind.js')
```

## Screenshots

![Welcome](/screenshots/welcome.png)

![Register](/screenshots/register.png)

![Login](/screenshots/login.png)

![Home](/screenshots/home.png)

![Reset Password](/screenshots/reset-password.png)

![Send Password Reset](/screenshots/change-password-form.png)

![Verify](/screenshots/verify.png)

## Security

If you discover any security related issues, please email shuvroshopno@gmail.com instead of using the issue tracker.

## Credits

- [Adam Wathan](https://github.com/adamwathan)

