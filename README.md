# Laravel Guardian 🔐

**Secure your Laravel app like a pro.**  
Laravel Guardian is a plug-n-play security package that auto-shields your app from common vulnerabilities like XSS, CSRF tampering, and shady request payloads — works out of the box with Laravel Breeze, Jetstream, or any Laravel setup.

---

## 📦 Installation

```bash
composer require iamthesaifullah/laravel-guardian
```

(Optional) Publish config:

```bash
php artisan vendor:publish --tag=guardian-config
```

---

## ⚙️ Configuration

Customize your security layers via `config/guardian.php`:

```php
'features' => [
    'xss_protection' => true,
    'csrf_guard' => true,
    'request_inspection' => true,
],
```

---

## 🛡️ What It Protects

| Feature               | Description                                 |
|-----------------------|---------------------------------------------|
| `XSSSanitizer`        | Cleans all incoming form/input fields       |
| `CSRFProtector`       | Adds custom CSRF logic (beyond Laravel's)   |
| `RequestInspector`    | Flags suspicious/malicious request payloads |

---

## 🧪 Testing

```bash
php artisan test
```

All security middleware is covered under unit/feature tests. Build secure, test securely.

---

## 🤝 Contributing

Pull requests welcome! Just make sure your code is PSR-12 compliant and tested.  
Want a feature added? [Open an issue](https://github.com/iamthesaifullah/laravel-guardian/issues).

---

## 👨‍💻 Author

**Md Saifullah**

- 🌐 [iamthesaifullah.com](https://iamthesaifullah.com)
- 🔗 [LinkedIn](https://linkedin.com/in/iamthesaifullah)
- 🐙 [GitHub](https://github.com/iamthesaifullah)

---

## 📄 License

MIT © [iamthesaifullah](https://iamthesaifullah.com)  
Free for personal and commercial use. Contributions welcome.

---

## ⭐ Found it helpful?

Drop a star at [github.com/iamthesaifullah/laravel-guardian](https://github.com/iamthesaifullah/laravel-guardian) and spread the love 💙