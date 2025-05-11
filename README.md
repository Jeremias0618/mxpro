# MXPRO

MXPRO is a PHP-based platform for managing and viewing multimedia content such as TV channels, movies, and series. It provides a lightweight and functional web interface with Xtream API support, making it ideal for IPTV systems or custom content platforms.

## 🧩 Features

- Web interface developed in PHP.
- Browse content by channels, movies, and series.
- IPTV content playback support.
- Basic subscription system (`assinatura.php`).
- Integration with Xtream API.
- Automated installation scripts for PHP and dependencies.

## 📋 System Requirements

- Linux server (recommended: Ubuntu/Debian).
- PHP 7.2 or higher.
- Apache2 web server.
- Required extensions: `curl`, `mbstring`, `json`, and others.
- Internet access to consume external sources (Xtream API).

## 🚀 Installation

1. Clone or unzip the project into your web server directory:

```bash
   git clone https://github.com/Jeremias0618/mxpro.git
   cd mxpro
````

2. Run the installation script:

```bash
   sudo bash install.sh
```

3. (Optional) Install required PHP extensions:

```bash
   sudo bash php7.2-ext.sh
```

4. Configure the Apache server using the `000-default.conf` file as a reference.

5. Access the platform via `http://localhost` or your server's IP address.

## 📁 Project Structure

```
mxpro/
│
├── index.php               # Main landing page
├── Xtream_api.php          # Xtream API module
├── canais.php              # Channel list
├── filmes.php              # Movie list
├── series.php              # Series list
├── assinatura.php          # Subscription management
├── painel.php              # Admin panel
├── install.sh              # General installation script
├── php7.2-ext.sh           # PHP extension installer
├── assets/                 # CSS/JS assets
│   └── aqua/
├── LICENSE                 # Project license
└── README.md               # Project documentation
```

## 💡 Basic Usage

Once installed, you can access the main interface through your browser. Navigate through available sections such as:

* `/filmes.php` for movies
* `/series.php` for series
* `/canais.php` for IPTV channels

Authentication or subscription access can be managed via `assinatura.php`.

## 📜 License

This project is licensed under the terms described in the [LICENSE](./LICENSE) file.
