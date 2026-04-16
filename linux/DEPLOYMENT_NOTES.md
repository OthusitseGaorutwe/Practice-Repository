# Laravel on Ubuntu — Deployment Notes

A reference guide covering common configuration and troubleshooting steps when hosting a Laravel project on Ubuntu with Nginx.

---

## Fixing 413 Request Entity Too Large

This error is thrown by Nginx when an uploaded file exceeds the server's allowed request body size.

### Step 1 — Update Nginx Config

Open your site's Nginx config:

```bash
sudo nano /etc/nginx/sites-available/your-site-name
```

Add or update `client_max_body_size` inside the `server` block:

```nginx
server {
    listen 80;
    server_name your-domain.com;

    client_max_body_size 100M;
}
```

Test and reload Nginx:

```bash
sudo nginx -t
sudo systemctl reload nginx
```

### Step 2 — Update PHP Limits

Nginx may allow the request through, but PHP can still block large uploads. Edit `php.ini`:

```bash
# Adjust PHP version number to match installation
sudo nano /etc/php/8.2/fpm/php.ini
```

Update these two values:

```ini
upload_max_filesize = 100M
post_max_size = 100M
```

Restart PHP-FPM:

```bash
sudo systemctl restart php8.2-fpm
```

### Recommended Size Reference

| Use Case | Suggested Size |
|---|---|
| Profile images / small files | `10M` |
| Documents / PDFs | `50M` |
| Large files / videos | `200M` or more |

> **Note:** If the error persists after both changes, also check Laravel's validation rules in your controller — the application itself may be rejecting the file size.

---

## Key Takeaways

- The **413 error** comes from Nginx, not Laravel or PHP — all three layers have independent size limits.
- **Both** `client_max_body_size` (Nginx) **and** `upload_max_filesize` / `post_max_size` (PHP) must be updated together.
- Always run `sudo nginx -t` before reloading Nginx to catch config syntax errors.
- Restart PHP-FPM after any `php.ini` changes for them to take effect.
- Laravel controllers may have their own `max` validation rule on file inputs — check these too.
