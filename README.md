[contributors-shield]: https://img.shields.io/github/contributors/hassan7303/save-data.svg?style=for-the-badge
[contributors-url]: https://github.com/hassan7303/save-data/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/hassan7303/save-data.svg?style=for-the-badge&label=Fork
[forks-url]: https://github.com/hassan7303/save-data/network/members
[stars-shield]: https://img.shields.io/github/stars/hassan7303/save-data.svg?style=for-the-badge
[stars-url]: https://github.com/hassan7303/save-data/stargazers
[license-shield]: https://img.shields.io/github/license/hassan7303/save-data.svg?style=for-the-badge
[license-url]: https://github.com/hassan7303/save-data/blob/master/LICENCE.md
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-blue.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://www.linkedin.com/in/hassan-ali-askari-280bb530a/
[telegram-shield]: https://img.shields.io/badge/-Telegram-blue.svg?style=for-the-badge&logo=telegram&colorB=555
[telegram-url]: https://t.me/hassan7303
[instagram-shield]: https://img.shields.io/badge/-Instagram-red.svg?style=for-the-badge&logo=instagram&colorB=555
[instagram-url]: https://www.instagram.com/hasan_ali_askari
[github-shield]: https://img.shields.io/badge/-GitHub-black.svg?style=for-the-badge&logo=github&colorB=555
[github-url]: https://github.com/hassan7303
[email-shield]: https://img.shields.io/badge/-Email-orange.svg?style=for-the-badge&logo=gmail&colorB=555
[email-url]: mailto:hassanali7303@gmail.com

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]
[![Telegram][telegram-shield]][telegram-url]
[![Instagram][instagram-shield]][instagram-url]
[![GitHub][github-shield]][github-url]
[![Email][email-shield]][email-url]


# Save Data Plugin

A simple WordPress plugin that allows administrators to input data through the admin panel, save it into the `wp_options` table as JSON, and provide it to JavaScript for frontend usage.

## Description

This plugin is designed to give administrators a simple interface to input custom data, which is stored in the WordPress `wp_options` table as JSON. The data can then be accessed on the frontend using JavaScript for various dynamic purposes.

The plugin includes fields for adding titles, messages, options with titles, links, and colors, as well as duration and time values. Data entered in these fields is saved and then passed to a JavaScript file for use on the frontend.

## Features

- Custom admin interface to input data (title, message, options, etc.).
- Saves data as JSON in the `wp_options` table.
- Passes stored data to JavaScript for use on the frontend.

## Installation

1. Upload the `save-data` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

## Usage

1. **Install and Activate**: Upload and activate the plugin in your WordPress installation.
2. **Navigate to Admin Panel**: Go to the 'Save Data' option in the WordPress admin panel.
3. **Input Data**: Use the form provided to input data such as title, message, options (title, link, and color), and time-based fields like duration and time.
4. **Data on Frontend**: The saved data will be available on the frontend, passed via JavaScript for dynamic interaction.

## How It Works

1. **Admin Menu**: Adds two menu items in the WordPress admin panel – "Save Data" for configuring settings, and "List of Data" (not implemented yet) for viewing stored data.
2. **Input Fields**: The form in the settings page allows the user to input:
   - Title
   - Message
   - Option title, link, and color
   - Link and color (general)
   - Duration and time
3. **Save Data**: Data is stored in the `wp_options` table under the key `save_data_options`.
4. **JavaScript Access**: The plugin passes this data to a JavaScript file (`index.js` in the `/react/` folder), which is loaded on the frontend for further use.

## Author and Support

- **Author**: Hassan Ali Askari
- **Telegram**: [@hassan7303](https://t.me/hassan7303)
- **Email**: [hassanali7303@gmail.com](mailto:hassanali7303@gmail.com)
- **Instagram**: [@hasan_ali_askari](https://www.instagram.com/hasan_ali_askari)
- **GitHub**: [GitHub](https://github.com/hassan7303)

## License

MIT License. See the [LICENSE](https://opensource.org/licenses/MIT) for more information.

##

---
<div style="text-align: right;">

# افزونه Save Data

یک افزونه ساده وردپرس که به مدیران اجازه می‌دهد داده‌ها را از طریق پنل مدیریت وارد کرده و آن‌ها را به صورت JSON در جدول `wp_options` ذخیره کند و به جاوا اسکریپت برای استفاده در فرانت‌اند ارائه دهد.

## توضیحات

این افزونه به مدیران این امکان را می‌دهد که داده‌های سفارشی مانند عنوان، پیام، گزینه‌ها (شامل عنوان، لینک و رنگ) و مقادیر مرتبط با زمان را وارد کنند. این داده‌ها به صورت JSON در جدول `wp_options` ذخیره می‌شوند و سپس از طریق جاوا اسکریپت در فرانت‌اند برای تعاملات پویا در دسترس خواهند بود.

## ویژگی‌ها

> رابط کاربری ساده برای ورود داده‌ها
>
> ذخیره داده‌ها به صورت JSON در جدول `wp_options`
>
> ارائه داده‌ها به جاوا اسکریپت برای استفاده در فرانت‌اند

## نصب

پوشه `save-data` را به دایرکتوری `/wp-content/plugins/` بارگذاری کنید.

افزونه را از طریق منوی 'افزونه‌ها' در وردپرس فعال کنید.

## استفاده

**نصب و فعال‌سازی**: افزونه را در وردپرس نصب کرده و آن را فعال کنید.

**ورود به پنل مدیریت**: به گزینه 'Save Data' در پنل مدیریت وردپرس بروید.

**ورود داده‌ها**: از فرم ارائه شده برای وارد کردن داده‌هایی مثل عنوان، پیام، گزینه‌ها (عنوان، لینک و رنگ) و مقادیر مرتبط با زمان استفاده کنید.

**داده در فرانت‌اند**: داده ذخیره شده از طریق جاوا اسکریپت در فرانت‌اند برای استفاده پویا قابل دسترسی خواهد بود.

## نویسنده و پشتیبان

نویسنده: حسن علی عسکری

تلگرام: [@hassan7303](https://t.me/hassan7303)

ایمیل: [hassanali7303@gmail.com](mailto:hassanali7303@gmail.com)

اینستاگرام: [@hasan_ali_askari](https://www.instagram.com/hasan_ali_askari)

گیت‌هاب: ['GitHub'](https://github.com/hassan7303)

## مجوز

مجوز MIT. برای اطلاعات بیشتر به [LICENSE](https://opensource.org/licenses/MIT) مراجعه کنید.

</div>
