# Restaurante Web 🍽️

Sistema web para la gestión de un restaurante desarrollado con Laravel.  
Permite administrar menús, pedidos, mesas y usuarios desde una plataforma intuitiva y moderna.

---

## 🚀 Tecnologías utilizadas

- Laravel 10
- PHP 8.x
- MySQL

---

## ⚙️ Instalación del proyecto

### 1. Clonar el repositorio

```bash
git clone https://github.com/mattferx/restaurante-web.git
cd restaurante-web
```

### 2. Instalar dependencias de PHP (Laravel)

```bash
composer install
```

### 3. Configurar el entorno

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configurar base de datos

Editá el archivo `.env` y agregá tus credenciales de base de datos:

```env
DB_DATABASE=nombre_de_tu_bd
DB_USERNAME=usuario
DB_PASSWORD=contraseña
```

### 5. Ejecutar migraciones

```bash
php artisan migrate
```

### 6. Iniciar el servidor de desarrollo

```bash
php artisan serve
```

---

## 🧩 Estructura básica del proyecto

- `/app`: Lógica del backend (controladores, modelos, etc.)
- `/resources/views`: Vistas Blade (frontend)
- `/routes/web.php`: Rutas de la app
- `/public`: Archivos públicos (CSS, JS, imágenes)
- `.env`: Configuración de entorno (no se sube al repo)

---

## 🛠️ Flujo de trabajo con Git

### 1. Cambiar a la rama `develop`

```bash
git checkout develop
git pull origin develop
```

### 2. Crear una nueva rama `feature`

```bash
git checkout -b feature/nombre-de-la-funcionalidad
```

Ejemplo:

```bash
git checkout -b feature/login
```

### 3. Hacer cambios y subir la rama

```bash
git add .
git commit -m "Descripción de los cambios"
git push origin feature/nombre-de-la-funcionalidad
```

### 5. Fusionar el Pull Request

1. Click en **"Merge pull request"**
2. Confirmá con **"Confirm merge"**

### 6. Eliminar la rama `feature` (después del merge)

```bash
git branch -d feature/nombre-de-la-funcionalidad
git push origin --delete feature/nombre-de-la-funcionalidad
```

### 7. Actualizar tu rama `develop` local

```bash
git checkout develop
git pull origin develop
```

---


## 📄 Licencia

Este proyecto está bajo la licencia **MIT**.  
Podés usarlo, modificarlo y compartirlo libremente con atribución.

---

## ✨ Autor

- [mattferx](https://github.com/mattferx)

---


