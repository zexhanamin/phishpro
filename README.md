
````markdown
# 🛡️ PHISHPRO v1.0 — by ZeshanAmin

A terminal-based Instagram-style phishing toolkit built in Bash & PHP — designed strictly for educational use,
cybersecurity awareness, and ethical hacking lab demonstrations.

> ⚠️ This tool is for educational purposes only. The author is not responsible for any misuse.

---

## 🎯 Features

- ✅ Terminal CLI tool (just type phishpro)
- ✅ Instagram-style phishing page (static HTML)
- ✅ PHP-based credential handler (login.php)
- ✅ Real-time credential logging (creds.txt)
- ✅ Green-colored professional interface
- ✅ Compatible with Kali Linux
- ✅ Ngrok-ready (manual or optional)

---

## ⚙️ Setup & Usage

### 🔧 First-Time Setup

1. Clone this repo:
   ```bash
   git clone https://github.com/your-username/phishpro.git
   cd phishpro
````

2. Make the script executable:

   ```bash
   chmod +x phishpro.sh
   ```

3. Run installer (adds `phishpro` as global command):

   ```bash
   sudo ./phishpro.sh
   ```

---

### 🚀 How to Launch (After Install)

```bash
phishpro
```

* Starts PHP server on localhost (127.0.0.1:5000)
* Prompts for educational use confirmation
* Tails `creds.txt` for live credentials
* Instructs you to manually run ngrok:

  ```bash
  ngrok http 5000
  ```

---

## 🔗 Ngrok Setup (One-time)

1. [Create ngrok account](https://ngrok.com)
2. Get your auth token
3. Run:

   ```bash
   ngrok config add-authtoken YOUR_TOKEN
   ```

Now you can manually launch ngrok any time:

```bash
ngrok http 5000
```

Then send the generated public URL for demonstration.

---

## 📁 Folder Structure

```
phishpro/
├── index.html       # Fake Instagram login page
├── login.php        # Logs credentials to creds.txt
├── creds.txt        # Captured usernames & passwords
├── phishpro.sh      # Main Bash CLI tool
├── README.md
├── LICENSE (MIT)
└── .gitignore       # creds.txt is ignored
```

---

## 📜 License

This project is licensed under the MIT License — see the [LICENSE](LICENSE) file for details.

---

## ✉️ Contact

Author: Zeshan Amin
Instagram | YouTube | Tiktok (zexhanamin)

---
