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
| `GET /` | `CoreController@index` | Landing page (`welcome` view) |
| `GET /koleksi` | `KoleksiController@index` | Public catalog, filters: `jenis`, `bahan`, `q` (search), paginated 8/page |
| `GET /kegiatan` | `KegiatanController@index` | Events/activities page |
| `GET /about` | `AboutController@index` | About page |
| `GET /admin/dashboard` | `AdminController@index` | Admin listing, paginated 10/page |
| `GET /admin/dashboard/create` | `AdminController@create` | Create form |
| `POST /admin/dashboard/store` | `AdminController@store` | Store new koleksi |
| `GET /admin/dashboard/{koleksi}/edit` | `AdminController@edit` | Edit form (model-bound to `Koleksi`) |
| `PUT /admin/dashboard/{koleksi}` | `AdminController@update` | Update koleksi |
| `DELETE /admin/dashboard/{koleksi}` | `AdminController@destroy` | Delete koleksi |

Admin named routes use the prefix `admin.` (e.g. `admin.index`, `admin.create`, `admin.store`, `admin.edit`, `admin.update`, `admin.destroy`).

The admin panel has **no authentication** — adding auth requires `auth` middleware on the admin routes in `routes/web.php`.

### Views

- `resources/views/welcome.blade.php` — standalone landing page (no layout extend; inline CSS + Vite assets; hero, about, counter, koleksi showcase, map, footer sections)
- `resources/views/core/wayang.blade.php` — public collection listing with filter dropdowns and search
- `resources/views/core/kegiatan.blade.php` — events/activities page
- `resources/views/core/about.blade.php` — about page
- `resources/views/layouts/dashboard.blade.php` — admin shell (fixed sidebar, alert flash, `@yield('content')`); styled with custom inline CSS, not Tailwind
- `resources/views/admin/` — admin index/create/edit views extending the dashboard layout
- `resources/views/template/landing-page.blade.php` — empty stub

### Frontend

Tailwind CSS v4 via `@tailwindcss/vite` plugin — used only on public-facing pages. The dashboard layout uses custom inline CSS classes (`.form-card`, `.btn-primary`, etc.). Fonts loaded from Google Fonts (Poppins, Playfair Display).

### Known Issues

- `KoleksiController` uses `ilike` for search queries, which is PostgreSQL-specific. The default SQLite database treats `LIKE` as case-insensitive for ASCII, but `ilike` is not a valid SQLite operator — this will fail if the database ever switches to strict SQLite mode or another engine that doesn't support it.
