# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Commands

```bash
# First-time setup
composer run setup        # install deps, generate key, migrate, npm install & build

# Development (runs all services concurrently: PHP server, queue, log tail, Vite)
composer run dev

# Run tests
composer run test         # clears config cache, then runs PHPUnit
php artisan test --filter TestName   # single test

# Frontend only
npm run dev               # Vite dev server with HMR
npm run build             # production build

# Database
php artisan migrate
php artisan migrate:fresh --seed

# Linting (Laravel Pint)
./vendor/bin/pint
```

## Architecture

Laravel 12 application for **Museum Wayang Universitas Sanata Dharma** — a wayang (shadow puppet) museum catalog. Database defaults to SQLite (`database/database.sqlite`).

### Domain Model

Single core entity: **Koleksi** (collection item) with fields `nama` (name), `jenis` (type), `bahan` (material), `deskripsi` (description), `gambar` (image path). Images are stored via `Storage::disk('public')` under the `koleksi/` folder; `php artisan storage:link` must be run once to expose `storage/app/public` as `public/storage`.

### Routes & Controllers

| Route | Controller | Purpose |
|-------|-----------|---------|
| `GET /` | closure → `welcome` view | Landing page |
| `GET /koleksi` | `KoleksiController@index` | Public catalog with filter by `jenis`, `bahan`, free-text `q` |
| `GET /dashboard` | redirect | Redirects to dashboard index |
| `dashboard/*` (resource, no `show`) | `DashboardKoleksiController` | Admin CRUD for Koleksi |

The dashboard has no auth guard yet — adding authentication will require adding `auth` middleware to the `dashboard` route group.

### Views

- `resources/views/welcome.blade.php` — standalone landing page (no layout extend; inline CSS + Vite assets)
- `resources/views/koleksi/wayang.blade.php` — public collection listing
- `resources/views/layouts/dashboard.blade.php` — dashboard shell (sidebar, alert flash, `@yield('content')`)
- `resources/views/dashboard/koleksi/` — admin index/create/edit views extending the dashboard layout
- `resources/views/template/landing-page.blade.php` — currently empty template stub

### Frontend

Tailwind CSS v4 via `@tailwindcss/vite` plugin. The dashboard layout uses custom inline CSS (not Tailwind utility classes). The landing page mixes custom CSS with Vite-compiled assets. Fonts loaded from Google Fonts (Poppins, Playfair Display).
