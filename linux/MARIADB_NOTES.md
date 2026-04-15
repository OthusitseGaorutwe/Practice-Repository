# Linux & MariaDB Notes

## Checking Service Status

```bash
# Check if MariaDB is running
sudo systemctl status mariadb

# Start MariaDB
sudo systemctl start mariadb

# Stop MariaDB
sudo systemctl stop mariadb

# Restart MariaDB
sudo systemctl restart mariadb

# Enable auto-start on reboot
sudo systemctl enable mariadb
```

---

## Checking Open Ports

```bash
# Check if MariaDB is listening on port 3306
sudo ss -tlnp | grep 3306
```

Expected output:
```
LISTEN  0  80  127.0.0.1:3306  0.0.0.0:*  users:(("mariadbd",pid=XXXXX,fd=21))
```

---

## Connecting to MariaDB

```bash
# Connect as root via socket (recommended on Debian/Ubuntu)
sudo mysql

# Connect via TCP with a specific user (no database)
mysql -u your_user -p -h 127.0.0.1 -P 3306

# Connect via TCP with a specific user and database
mysql -u your_user -p -h 127.0.0.1 -P 3306 your_db_name
```

> **Note:** On Debian/Ubuntu, `root` uses the `unix_socket` auth plugin.
> Always use `sudo mysql` to connect as root — password login for root is disabled by default.

---

## Inside the MariaDB Shell

```sql
-- List all databases
SHOW DATABASES;

-- Switch to a database
USE your_db_name;

-- Check current database
SELECT DATABASE();

-- List all users and their hosts
SELECT user, host, plugin FROM mysql.user;

-- Exit the shell
EXIT;
```

---

## Managing Database Users

### Create a new user (TCP access via 127.0.0.1)
```sql
CREATE USER 'your_user'@'127.0.0.1' IDENTIFIED BY 'your_password';
```

### Grant privileges on a database
```sql
GRANT ALL PRIVILEGES ON your_db_name.* TO 'your_user'@'127.0.0.1';
```

### Apply privilege changes
```sql
FLUSH PRIVILEGES;
```

> **Note:** `FLUSH PRIVILEGES` is only required when editing the `mysql.user` table
> directly with raw `INSERT`/`UPDATE`. Commands like `GRANT` and `RENAME USER`
> apply changes automatically.

### Rename a user's host
```sql
RENAME USER 'your_user'@'localhost' TO 'your_user'@'127.0.0.1';
FLUSH PRIVILEGES;
```

---

## localhost vs 127.0.0.1

| Value | Protocol used |
|---|---|
| `localhost` | Unix socket (`/run/mysqld/mysqld.sock`) |
| `127.0.0.1` | TCP/IP |

Laravel's PDO connects via **TCP**, so always use `127.0.0.1` in your `.env`.
A user created with `host = localhost` cannot connect when `DB_HOST=127.0.0.1`.

---

## Laravel `.env` Database Config

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=your_user
DB_PASSWORD=your_password
```

After editing `.env`, always clear the config cache:

```bash
php artisan config:clear
php artisan cache:clear
```

Test the connection:
```bash
php artisan db:show
```

---

## MariaDB Recovery (skip-grant-tables)

Use this if you have locked yourself out of the root account.

```bash
# 1. Stop MariaDB
sudo systemctl stop mariadb

# 2. Start without authentication
sudo mysqld_safe --skip-grant-tables --skip-networking &

# 3. Connect without a password
mysql -u root

# 4. Restore root user (adjust host as needed)
FLUSH PRIVILEGES;
RENAME USER 'root'@'127.0.0.1' TO 'root'@'localhost';
FLUSH PRIVILEGES;

# 5. Shut down the unsafe instance
sudo mysqladmin shutdown

# 6. Start MariaDB normally
sudo systemctl start mariadb
```

> **Warning:** Never rename or modify `root@localhost` — it is how
> `sudo mysql` authenticates internally on Debian/Ubuntu systems.

---

## Navigation

```bash
# Go to home directory
cd ~
# or simply
cd
```

---

## Key Takeaways

- Always use a **dedicated database user** for Laravel — never use `root` in `.env`.
- Set `DB_HOST=127.0.0.1`, not `localhost`, to force TCP connections.
- The database user's host must match — a user created with `@'localhost'` cannot connect via `127.0.0.1`.
- Run `php artisan config:clear` after every `.env` change.
- Use `sudo mysql` to access MariaDB as root on Debian/Ubuntu.
