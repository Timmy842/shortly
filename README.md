# Shortly

Acortador de URLs con analíticas.

- **Backend**: Laravel 12 (API)
- **Frontend**: Angular 22
- **Infra**: Docker Compose (Nginx + PHP-FPM + MySQL + Angular dev server)

## Levantar el proyecto

```bash
docker compose up --build
```

- Backend (API): http://localhost:8000
- Frontend (Angular): http://localhost:4200
- MySQL: localhost:3306

Tras el primer arranque, ejecutar las migraciones dentro del contenedor `app`:

```bash
docker compose exec app php artisan migrate
```
