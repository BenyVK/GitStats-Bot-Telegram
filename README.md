<div align="center">

<img src="https://img.shields.io/badge/PHP-8.0+-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
<img src="https://img.shields.io/badge/Telegram-Bot-26A5E4?style=for-the-badge&logo=telegram&logoColor=white"/>
<img src="https://img.shields.io/badge/GitHub-API-181717?style=for-the-badge&logo=github&logoColor=white"/>
<img src="https://img.shields.io/badge/License-BVK-yellow?style=for-the-badge"/>

# 🚀 GitStats Pro

**A multilingual Telegram bot that shows GitHub profile statistics in a clean, interactive interface.**

[🇮🇷 فارسی](#-فارسی) · [🇬🇧 English](#-english) · [🇷🇺 Русский](#-русский)

</div>

---

## 🇮🇷 فارسی

### ✨ امکانات

- 👤 **پروفایل کامل** — نام، بیو، موقعیت، شرکت، تاریخ عضویت
- 📂 **ریپازیتوری‌ها** — نمایش ۵ ریپو برتر با ستاره و فورک
- 💻 **آمار زبان‌ها** — نمودار متنی درصد استفاده از هر زبان
- 📈 **آنالیز فعالیت** — مجموع ستاره‌ها، فورک‌ها و سطح توسعه‌دهنده
- 🌐 **چندزبانه** — فارسی، انگلیسی، روسی
- ⚡ **کَش هوشمند** — ذخیره نتایج API به مدت ۱ ساعت

### 📋 پیش‌نیازها

- PHP 8.0+
- افزونه‌های `curl` و `json`
- یک وب‌سرور با HTTPS (برای Webhook تلگرام)

### ⚙️ نصب

**۱. کلون کردن پروژه**
```bash
git clone https://github.com/BenyVK/GitStats-Bot-Telegram.git
cd GitStats-Bot-Telegram
```

**۲. تنظیم متغیرها در `bot.php`**
```php
$botToken    = "TOKEN_ربات_تلگرام";
$githubToken = "ghp_xxxx";  // اختیاری — برای رفع محدودیت API
```

**۳. ست کردن Webhook**
```bash
curl -X POST "https://api.telegram.org/botTOKEN/setWebhook" \
     -d "url=https://yourdomain.com/bot.php"
```

**۴. بررسی پوشه‌ها**

مطمئن شو که پوشه `cache/` قابل نوشتن است:
```bash
chmod 755 cache/
```

### 🎮 دستورات

| دستور | عملکرد |
|-------|--------|
| `/start` | شروع ربات یا نمایش پروفایل ذخیره‌شده |
| `/lang` | تغییر زبان |
| ارسال یوزرنیم | جستجوی پروفایل گیت‌هاب |

### 🔑 توکن GitHub (اختیاری اما توصیه می‌شود)

بدون توکن، GitHub API فقط **۶۰ درخواست در ساعت** اجازه میده.  
با توکن این عدد به **۵۰۰۰** میرسه.

۱. برو به [github.com/settings/tokens](https://github.com/settings/tokens)
۲. یک **Fine-grained token** بدون هیچ scope‌ای بساز
۳. توکن رو در `$githubToken` قرار بده

---

## 🇬🇧 English

### ✨ Features

- 👤 **Full Profile** — name, bio, location, company, join date
- 📂 **Repositories** — top 5 repos with stars and forks
- 💻 **Language Stats** — text bar chart of language usage percentages
- 📈 **Activity Analysis** — total stars, forks and developer level badge
- 🌐 **Multilingual** — Persian, English, Russian
- ⚡ **Smart Cache** — API results cached for 1 hour

### 📋 Requirements

- PHP 8.0+
- `curl` and `json` extensions enabled
- A web server with HTTPS (required for Telegram Webhook)

### ⚙️ Setup

**1. Clone the repository**
```bash
git clone https://github.com/BenyVK/GitStats-Bot-Telegram.git
cd GitStats-Bot-Telegram
```

**2. Configure variables in `bot.php`**
```php
$botToken    = "YOUR_TELEGRAM_BOT_TOKEN";
$githubToken = "ghp_xxxx";  // Optional — removes API rate limits
```

**3. Register the Webhook**
```bash
curl -X POST "https://api.telegram.org/botTOKEN/setWebhook" \
     -d "url=https://yourdomain.com/bot.php"
```

**4. Check directory permissions**
```bash
chmod 755 cache/
```

### 🎮 Commands

| Command | Description |
|---------|-------------|
| `/start` | Start the bot or show saved profile |
| `/lang` | Change language |
| Send a username | Search a GitHub profile |

### 🔑 GitHub Token (Optional but Recommended)

Without a token, the GitHub API allows only **60 requests/hour**.  
With a token, the limit rises to **5,000 requests/hour**.

1. Go to [github.com/settings/tokens](https://github.com/settings/tokens)
2. Create a **Fine-grained token** with no scopes
3. Set it as `$githubToken` in `bot.php`

---

## 🇷🇺 Русский

### ✨ Возможности

- 👤 **Полный профиль** — имя, описание, местоположение, компания, дата регистрации
- 📂 **Репозитории** — топ 5 с количеством звёзд и форков
- 💻 **Статистика языков** — текстовая диаграмма процентного использования
- 📈 **Анализ активности** — общие звёзды, форки и уровень разработчика
- 🌐 **Многоязычность** — персидский, английский, русский
- ⚡ **Умный кэш** — результаты API кэшируются на 1 час

### ⚙️ Установка

**1. Клонировать репозиторий**
```bash
git clone https://github.com/BenyVK/GitStats-Bot-Telegram.git
cd GitStats-Bot-Telegram
```

**2. Настроить переменные в `bot.php`**
```php
$botToken    = "ВАШ_ТОКЕН_TELEGRAM_БОТА";
$githubToken = "ghp_xxxx";  // Необязательно — снимает ограничения API
```

**3. Установить Webhook**
```bash
curl -X POST "https://api.telegram.org/botTOKEN/setWebhook" \
     -d "url=https://yourdomain.com/bot.php"
```

**4. Проверить права директории**
```bash
chmod 755 cache/
```

### 🎮 Команды

| Команда | Описание |
|---------|----------|
| `/start` | Запуск бота или показ сохранённого профиля |
| `/lang` | Сменить язык |
| Отправить имя пользователя | Найти профиль GitHub |

---

## 📁 Project Structure

```
GitStats-Bot-Telegram/
├── bot.php          # Main bot logic
├── users.json       # User data & language preferences (auto-created)
├── cache/           # GitHub API response cache (auto-created)
└── README.md
```

## 🤝 Contributing

Pull requests are welcome! For major changes, please open an issue first.

## 📜 License

[BVK](https://github.com/BenyVK/GitStats-Bot-Telegram/blob/main/LICENSE) © [BenyVK](https://github.com/BenyVK)
