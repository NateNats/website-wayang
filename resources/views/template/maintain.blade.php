<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            color: #0f172a;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .work-in-progress {
            background: white;
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(15, 23, 42, 0.12);
            max-width: 560px;
            padding: 3rem;
            text-align: center;
        }
        .work-in-progress h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        .work-in-progress p {
            color: #475569;
            line-height: 1.75;
            margin-bottom: 1.75rem;
        }
        .work-in-progress a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.85rem 1.5rem;
            border-radius: 999px;
            background: #3b82f6;
            color: white;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.2s;
        }
        .work-in-progress a:hover {
            background: #2563eb;
        }
        .work-in-progress small {
            display: block;
            margin-top: 1rem;
            color: #94a3b8;
        }
    </style>
</head>
<body>
    <section class="work-in-progress">
        <h1>{{ $heading }}</h1>
        <p>{{ $message }}</p>
        <a href="{{ url('/') }}">Kembali ke Beranda</a>
        <small>{{ $footerText }}</small>
    </section>
</body>
</html>
