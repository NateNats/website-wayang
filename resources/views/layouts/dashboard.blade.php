<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') | Museum Wayang</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css'])

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f1f5f9;
            color: #1e293b;
            min-height: 100vh;
        }

        .dashboard-layout {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 260px;
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: #fff;
            padding: 2rem 0;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            z-index: 50;
            display: flex;
            flex-direction: column;
        }

        .sidebar-brand {
            padding: 0 1.5rem 2rem;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            margin-bottom: 1.5rem;
        }

        .sidebar-brand h2 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #fff;
        }

        .sidebar-brand span {
            font-size: 0.75rem;
            color: #94a3b8;
            display: block;
            margin-top: 0.25rem;
        }

        .sidebar-nav {
            flex: 1;
            list-style: none;
        }

        .sidebar-nav li a {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.85rem 1.5rem;
            color: #94a3b8;
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.2s;
            border-left: 3px solid transparent;
        }

        .sidebar-nav li a:hover,
        .sidebar-nav li a.active {
            background-color: rgba(255,255,255,0.05);
            color: #fff;
            border-left-color: #3b82f6;
        }

        .sidebar-nav li a svg {
            width: 20px;
            height: 20px;
            flex-shrink: 0;
        }

        .sidebar-footer {
            padding: 1.5rem;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        .sidebar-footer a {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #94a3b8;
            text-decoration: none;
            font-size: 0.85rem;
            transition: color 0.2s;
        }

        .sidebar-footer a:hover {
            color: #fff;
        }

        /* Main content */
        .dashboard-main {
            flex: 1;
            margin-left: 260px;
            padding: 2rem;
            min-height: 100vh;
        }

        .dashboard-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 2rem;
        }

        .dashboard-header h1 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #0f172a;
        }

        /* Alert messages */
        .alert {
            padding: 1rem 1.25rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .alert-success {
            background-color: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
        }

        .alert-error {
            background-color: #fef2f2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }

        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.65rem 1.25rem;
            font-size: 0.875rem;
            font-weight: 500;
            font-family: 'Poppins', sans-serif;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.2s;
        }

        .btn-primary {
            background-color: #3b82f6;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #2563eb;
        }

        .btn-warning {
            background-color: #f59e0b;
            color: #fff;
        }

        .btn-warning:hover {
            background-color: #d97706;
        }

        .btn-danger {
            background-color: #ef4444;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #dc2626;
        }

        .btn-secondary {
            background-color: #e2e8f0;
            color: #475569;
        }

        .btn-secondary:hover {
            background-color: #cbd5e1;
        }

        .btn-sm {
            padding: 0.4rem 0.75rem;
            font-size: 0.8rem;
        }

        /* Table */
        .table-container {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.08);
            overflow: hidden;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table th {
            background-color: #f8fafc;
            padding: 0.85rem 1.25rem;
            text-align: left;
            font-size: 0.8rem;
            font-weight: 600;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border-bottom: 1px solid #e2e8f0;
        }

        .data-table td {
            padding: 1rem 1.25rem;
            font-size: 0.9rem;
            color: #334155;
            border-bottom: 1px solid #f1f5f9;
            vertical-align: middle;
        }

        .data-table tr:last-child td {
            border-bottom: none;
        }

        .data-table tr:hover td {
            background-color: #f8fafc;
        }

        .table-img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
            background-color: #f1f5f9;
        }

        .table-actions {
            display: flex;
            gap: 0.5rem;
        }

        .table-empty {
            text-align: center;
            padding: 3rem 1rem;
            color: #94a3b8;
        }

        /* Pagination */
        .table-pagination {
            padding: 1rem 1.25rem;
            border-top: 1px solid #e2e8f0;
        }

        .table-pagination nav {
            display: flex;
            justify-content: center;
        }

        /* Forms */
        .form-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.08);
            padding: 2rem;
            max-width: 700px;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            color: #374151;
            margin-bottom: 0.5rem;
        }

        .form-group input[type="text"],
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 0.75rem 1rem;
            font-size: 0.9rem;
            font-family: 'Poppins', sans-serif;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            background-color: #fff;
            color: #1e293b;
            transition: border-color 0.2s;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .form-group input[type="file"] {
            padding: 0.5rem;
            font-size: 0.85rem;
        }

        .form-group .error-text {
            color: #ef4444;
            font-size: 0.8rem;
            margin-top: 0.35rem;
        }

        .form-group .current-img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 0.5rem;
            display: block;
            background-color: #f1f5f9;
        }

        .form-actions {
            display: flex;
            gap: 0.75rem;
            margin-top: 2rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar { display: none; }
            .dashboard-main { margin-left: 0; padding: 1.25rem; }
            .dashboard-header { flex-direction: column; align-items: flex-start; gap: 1rem; }
            .table-actions { flex-direction: column; }
        }
    </style>
</head>
<body>
    <div class="dashboard-layout">
        {{-- Sidebar --}}
        <aside class="sidebar">
            <div class="sidebar-brand">
                <h2>Museum Wayang</h2>
                <span>Dashboard Admin</span>
            </div>
            <ul class="sidebar-nav">
                <li>
                    <a href="{{ route('dashboard.koleksi.index') }}" class="{{ request()->routeIs('dashboard.koleksi.*') ? 'active' : '' }}">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/>
                            <rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/>
                        </svg>
                        Koleksi
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="{{ url('/') }}">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 18l-6-6 6-6"/>
                    </svg>
                    Kembali ke Website
                </a>
            </div>
        </aside>

        {{-- Main Content --}}
        <main class="dashboard-main">
            @if(session('success'))
                <div class="alert alert-success">
                    ✓ {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>
