<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Selamat Datang</title>
    <style>
    :root {
        --bg1: #0f172a;
        --bg2: #0f3d91;
        --accent: #ffd166;
        --muted: #cbd5e1;
        --glass: rgba(255, 255, 255, 0.06);
    }

    * {
        box-sizing: border-box
    }

    body {
        margin: 0;
        font-family: Inter, ui-sans-serif, system-ui, "Segoe UI", Roboto, "Helvetica Neue", Arial;
        background: linear-gradient(135deg, var(--bg1) 0%, var(--bg2) 100%);
        color: #fff;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 32px;
    }

    .card {
        width: 100%;
        max-width: 960px;
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.03), rgba(255, 255, 255, 0.01));
        border-radius: 18px;
        padding: 32px;
        box-shadow: 0 10px 30px rgba(2, 6, 23, 0.6);
        display: grid;
        grid-template-columns: 1fr 360px;
        gap: 24px;
        align-items: center;
        backdrop-filter: blur(6px);
    }

    .hero h1 {
        margin: 0 0 12px 0;
        font-size: clamp(28px, 4vw, 44px);
        letter-spacing: -0.02em;
        line-height: 1.05;
    }

    .hero p {
        margin: 0 0 20px 0;
        color: var(--muted);
        font-size: 16px;
    }

    .btn-row {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
    }

    .btn {
        appearance: none;
        border: 0;
        padding: 10px 16px;
        border-radius: 10px;
        cursor: pointer;
        font-weight: 600;
        transition: transform .12s ease, box-shadow .12s ease;
    }

    .btn.primary {
        background: linear-gradient(90deg, #2b6ef6, #6b8cff);
        color: #fff;
        box-shadow: 0 6px 18px rgba(43, 110, 246, 0.24);
    }

    .btn.ghost {
        background: transparent;
        color: var(--accent);
        border: 1px solid rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(4px);
    }

    .btn:active {
        transform: translateY(1px)
    }

    .meta {
        color: var(--muted);
        font-size: 13px;
        margin-top: 10px;
    }

    /* sidebar preview */
    .preview {
        background: var(--glass);
        padding: 20px;
        border-radius: 12px;
        display: flex;
        flex-direction: column;
        gap: 14px;
        align-items: stretch;
        text-align: center;
    }

    .avatar {
        width: 96px;
        height: 96px;
        border-radius: 999px;
        margin: 0 auto;
        background: linear-gradient(135deg, #ffd166, #ff7b7b);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        color: #0b1220;
        font-size: 28px;
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.25);
    }

    .preview h3 {
        margin: 0;
        font-size: 18px
    }

    .preview small {
        color: var(--muted)
    }

    /* responsive */
    @media (max-width:880px) {
        .card {
            grid-template-columns: 1fr;
            padding: 20px;
            gap: 16px;
        }

        .preview {
            order: -1;
        }
    }
    </style>
</head>

<body>
    <main class="card" role="main" aria-labelledby="welcome-title">
        <section class="hero" aria-describedby="welcome-desc">
            <h1 id="welcome-title">Selamat Datang di Proyek SPPK 🎉</h1>
            <p id="welcome-desc">Ini halaman sambutan sederhana untuk proyekmu. Gunakan tombol di bawah untuk mulai—bisa
                diarahkan ke dokumentasi, dashboard, atau guide pengembangan.</p>

            <div class="btn-row">
                <button class="btn primary" onclick="location.href='#'">Mulai</button>
                <button class="btn ghost" onclick="alert('Buka dokumentasi proyek!')">Dokumentasi</button>
            </div>

            <p class="meta">Tip: jangan lupa membuat file <code>.env</code> di root proyek dan menambahkan
                <code>composer.json</code> jika memakai Composer.</p>
        </section>

        <aside class="preview" aria-label="Informasi proyek">
            <div class="avatar">SP</div>
            <h3>SPPK</h3>
            <small>Versi awal • Dibuat dengan ❤️</small>

            <div style="margin-top:8px;font-size:13px;color:var(--muted)">
                <div><strong>Stack:</strong> PHP • Laravel (opsional)</div>
                <div style="margin-top:6px"><strong>Instruksi singkat:</strong><br>git clone → composer install → cp
                    .env.example .env → php artisan key:generate</div>
            </div>
        </aside>
    </main>
</body>

</html>