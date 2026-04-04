# 🐧 My Linux Learning Journey — Notes & Fixes

> Started learning Linux using **Oracle VirtualBox** with **Linux Mint 22.3 Cinnamon**
> These are my personal notes so I don't forget what I did!

---

## 💻 My Setup

| Thing | Details |
|---|---|
| **VM Software** | Oracle VirtualBox |
| **Linux Distro** | Linux Mint 22.3 Cinnamon |
| **Host OS** | Windows |

---

## ⚙️ VirtualBox Settings That Work For Me

After some trial and error, these are the settings I used:

| Setting | Value |
|---|---|
| RAM | 2048–4096 MB |
| CPU Cores | 7 |
| Video Memory | 128 MB |
| 3D Acceleration | Enabled |
| VT-x / AMD-V | Enabled (in BIOS too!) |

> **Note to self:** Always enable VT-x or AMD-V in BIOS before starting the VM!

---

## 🐛 Problems I Had & How I Fixed Them

### Problem 1: `watchdog: BUG: soft lockup - CPU#1 stuck for 48s!`

This freaked me out at first but it's a common VM issue.

**What I did to fix it:**

1. Gave the VM more CPU cores (Settings → System → Processor → set to 2+)
2. Installed Guest Additions:
```bash
sudo apt update
sudo apt install virtualbox-guest-utils virtualbox-guest-x11 -y
reboot
```

3. Increased the watchdog threshold so it stops complaining:
```bash
sudo nano /etc/sysctl.conf
# Added this line at the bottom:
kernel.watchdog_thresh = 60
```
Then applied it:
```bash
sudo sysctl -p
reboot
```

---

### Problem 2: GRUB Screen Shows on Every Boot

When I restarted I saw this:
```
GNU GRUB version 2.12
*Linux Mint 22.3 Cinnamon
Advanced options for Linux Mint 22.3 Cinnamon
```

**What I did:** Just pressed **Enter** on `Linux Mint 22.3 Cinnamon` and it booted fine!

To stop it showing every time:
```bash
sudo nano /etc/default/grub
# Made sure these lines were set:
# GRUB_DEFAULT=0
# GRUB_TIMEOUT=5
```
Then ran:
```bash
sudo update-grub
reboot
```

---

## 🚀 First Things I Did After Installing

```bash
# Always update first!
sudo apt update && sudo apt upgrade -y

# Install useful stuff
sudo apt install vlc htop flameshot nano zip unzip -y
```

---








# 🐧 My Linux Learning Journey — Notes & Fixes

> Started learning Linux using **Oracle VirtualBox** with **Linux Mint 22.3 Cinnamon**
> These are my personal notes so I don't forget what I did!

---

## 💻 My Setup

| Thing | Details |
|---|---|
| **VM Software** | Oracle VirtualBox |
| **Linux Distro** | Linux Mint 22.3 Cinnamon |
| **Host OS** | Windows |

---

## ⚙️ VirtualBox Settings That Work For Me

After some trial and error, these are the settings I used:

| Setting | Value |
|---|---|
| RAM | 2048–4096 MB |
| CPU Cores | 2+ |
| Video Memory | 128 MB |
| 3D Acceleration | Enabled |
| VT-x / AMD-V | Enabled (in BIOS too!) |

> **Note to self:** Always enable VT-x or AMD-V in BIOS before starting the VM!

---

## 🐛 Problems I Had & How I Fixed Them

### Problem 1: `watchdog: BUG: soft lockup - CPU#1 stuck for 48s!`

This freaked me out at first but it's a common VM issue.

**What I did to fix it:**

1. Gave the VM more CPU cores (Settings → System → Processor → set to 2+)
2. Installed Guest Additions:
```bash
sudo apt update
sudo apt install virtualbox-guest-utils virtualbox-guest-x11 -y
reboot
```

3. Increased the watchdog threshold so it stops complaining:
```bash
sudo nano /etc/sysctl.conf
# Added this line at the bottom:
kernel.watchdog_thresh = 60
```
Then applied it:
```bash
sudo sysctl -p
reboot
```

---

### Problem 2: GRUB Screen Shows on Every Boot

When I restarted I saw this:
```
GNU GRUB version 2.12
*Linux Mint 22.3 Cinnamon
Advanced options for Linux Mint 22.3 Cinnamon
```

**What I did:** Just pressed **Enter** on `Linux Mint 22.3 Cinnamon` and it booted fine!

To stop it showing every time:
```bash
sudo nano /etc/default/grub
# Made sure these lines were set:
# GRUB_DEFAULT=0
# GRUB_TIMEOUT=5
```
Then ran:
```bash
sudo update-grub
reboot
```

---

## 🚀 First Things I Did After Installing

```bash
# Always update first!
sudo apt update && sudo apt upgrade -y

# Install useful stuff
sudo apt install vlc htop flameshot nano zip unzip -y
```

---

## 📟 Terminal Commands I'm Learning

### Moving Around
```bash
pwd           # where am I?
ls            # what's in here?
ls -la        # same but with hidden files and details
ls -l         # Displays a long list with details like size and permissions.
ls -a         # Includes hidden files (those starting with a .).
cd Documents  # go into a folder
cd ..         # go back one level
cd ~          # go home
```

### Files & Folders
```bash
mkdir myfolder          # make a new folder
touch myfile.txt        # make an empty file
cp file.txt backup.txt  # copy a file
mv file.txt docs/       # move a file
rm file.txt             # delete a file (careful!)
rm -rf myfolder/        # delete whole folder (very careful!!)
```

---

## 📁 Linux Folder Structure (I Keep Forgetting This)

| Folder | What it is |
|---|---|
| `/` | The very top — root of everything |
| `/home/donald` | My personal files live here |
| `/etc` | Config files for the system |
| `/var/log` | Log files (useful for debugging) |
| `/usr/bin` | Where installed programs live |
| `/tmp` | Temporary stuff, gets wiped on reboot |

---

## ⌨️ Keyboard Shortcuts I Use A Lot

| Shortcut | What it does |
|---|---|
| `Ctrl + Alt + T` | Open terminal |
| `Tab` | Auto-complete a command or filename |
| `↑` / `↓` | Scroll through previous commands |
| `Ctrl + C` | Stop whatever is running |
| `Ctrl + L` | Clear the terminal screen |
| `!!` | Repeat the last command |

---

## 📚 Resources I'm Using to Learn

- **Linux Journey** — linuxjourney.com (great for beginners!)
- **The Linux Command Line** — free book at linuxcommand.org
- **Linux Mint Forums** — forums.linuxmint.com
- **r/linuxmint** on Reddit

---

## 💡 Things I've Learned

- VMs are great for experimenting — if I break something I can just reinstall!
- Always run `sudo apt update` before installing anything
- `sudo` means "run as administrator" — be careful with it
- The terminal looks scary but it's actually really powerful once you get used to it
- GRUB is just the bootloader — it's normal to see it on startup

---

*Last updated: April 2026 — still learning!* 🌱