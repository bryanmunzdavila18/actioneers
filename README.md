
# Local Development Setup with XAMPP and Vue Integration

This guide outlines the necessary steps to configure your local development environment using **XAMPP** and the `actioneers` project, which includes a Vue application integrated with WordPress.

---

## 📁 Directory Structure Configuration

### 1. Navigate to the XAMPP `htdocs` directory:

```bash
cd XAMPP/xamppfiles/htdocs
```

### 2. Create a new directory named `xampp`:

```bash
mkdir xampp
```

### 3. Move all existing files into the new `xampp` directory:

```bash
mv * xampp/
```

> This will move files like `index.php`, `dashboard/`, etc., into the `xampp` folder.

---

### 4. Modify the `index.php` file

Open the `index.php` file in your preferred text editor and **replace** the following line:

```php
header('Location: '.$uri.'/dashboard/');
```

with:

```php
header('Location: '.$uri.'/xampp/dashboard/');
```

> This update ensures proper redirection after restructuring the directory.

---

## 🔧 Project Setup

### 5. Clone the `actioneers` project into the `htdocs` directory:

```bash
git clone https://github.com/bryanmunzdavila18/actioneers.git
```

---

### 6. Install Vue project dependencies

```bash
cd actioneers/vue-compiler
npm install
```

---

### 7. Start Webpack in development mode

```bash
npm run dev
```

> This will run Webpack in watch mode, so it will automatically compile and output changes to the WordPress theme.

---

## 🚀 Start XAMPP

Open the XAMPP Control Panel and make sure both **Apache** and **MySQL** services are running.

---

## ✅ Done!

You can now access your site at:

```
http://localhost/actioneers/wp-admin/index.php
```
