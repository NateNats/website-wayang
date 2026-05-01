# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Commands

```bash
# First-time setup
composer run setup        # install deps, generate key, migrate, npm install & build
php artisan storage:link  # expose storage/app/public as public/storage (run once)

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

Single core entity: **Koleksi** with fields `nama` (name), `jenis` (type), `bahan` (material), `deskripsi` (description), `gambar` (nullable image path). Images are stored via `Storage::disk('public')` under the `koleksi/` folder and deleted from storage on update/destroy.

### Routes & Controllers

| Route | Controller | Purpose |
|-------|-----------|---------|
| `GET /` | closure → `welcome` view | Landing page |
| `GET /koleksi` | `KoleksiController@index` | Public catalog, filters: `jenis`, `bahan`, `q` (search), paginated 8/page |
| `admin/index` (resource) | `AdminController` | Admin CRUD for Koleksi, paginated 10/page |

Admin resource routes use the name prefix `dashboard.` (e.g. `dashboard.index`, `dashboard.create`, `dashboard.store`, `dashboard.edit`, `dashboard.update`, `dashboard.destroy`). Route parameter is `{index}` (model-bound to `Koleksi`).

The admin panel has **no authentication** — adding auth requires `auth` middleware on the `admin` route group in `routes/web.php`.

### Views

- `resources/views/welcome.blade.php` — standalone landing page (no layout extend; inline CSS + Vite assets; hero, about, counter, koleksi showcase, map, footer sections)
- `resources/views/koleksi/wayang.blade.php` — public collection listing with filter dropdowns and search
- `resources/views/layouts/dashboard.blade.php` — admin shell (fixed sidebar, alert flash, `@yield('content')`); styled with custom inline CSS, not Tailwind
- `resources/views/admin/` — admin index/create/edit views extending the dashboard layout
- `resources/views/template/landing-page.blade.php` — empty stub

### Frontend

Tailwind CSS v4 via `@tailwindcss/vite` plugin — used only on public-facing pages. The dashboard layout uses custom inline CSS classes (`.form-card`, `.btn-primary`, etc.). Fonts loaded from Google Fonts (Poppins, Playfair Display).

### Known Issues

- `AdminController::edit()` returns view `dashboard.koleksi.edit` but the actual view is at `resources/views/admin/edit.blade.php` (should be `admin.edit`).
- `routes/web.php` still imports the deleted `DashboardKoleksiController` — remove it.
