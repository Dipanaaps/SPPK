<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Input Kriteria - SPPK</title>
    <style>
        :root {
            --pink: #ff8fab;
            --blue: #88aed0;
            --yellow: #ffff99;
            --muted: #2f2f2f;
            --card-bg: rgba(255, 255, 255, 0.95);
            --radius: 12px;
            font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
        }

        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, var(--pink) 0%, var(--blue) 55%, var(--yellow) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 36px;
            color: var(--muted);
        }

        .container {
            width: 100%;
            max-width: 980px;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.95), rgba(250, 250, 250, 0.9));
            border-radius: 18px;
            padding: 22px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        }

        h1 {
            margin: 0 0 12px 0;
            font-size: 20px;
            letter-spacing: 0.4px;
        }

        .card {
            background: var(--card-bg);
            border-radius: var(--radius);
            padding: 14px;
            margin-bottom: 18px;
            border: 1px dashed rgba(47, 47, 47, 0.06);
        }

        .form-row {
            display: flex;
            gap: 12px;
            align-items: center
        }

        .form-row .col {
            flex: 1
        }

        label {
            display: block;
            font-size: 13px;
            margin-bottom: 6px
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px 10px;
            border-radius: 8px;
            border: 1px solid rgba(0, 0, 0, 0.08);
            outline: none;
            font-size: 14px;
            background: #fff;
        }

        .btn {
            display: inline-block;
            padding: 8px 12px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            font-weight: 600;
            font-size: 13px;
        }

        .btn-add {
            background: linear-gradient(90deg, var(--blue), var(--pink));
            color: #fff
        }

        .btn-reset {
            background: transparent;
            border: 1px solid rgba(0, 0, 0, 0.06)
        }

        .muted {
            font-size: 13px;
            color: #666;
            margin-top: 6px
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            font-size: 14px;
            background: linear-gradient(180deg, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0.98));
            border-radius: 10px;
            overflow: hidden;
        }

        thead {
            background: rgba(0, 0, 0, 0.03)
        }

        th,
        td {
            padding: 10px 12px;
            text-align: left;
            border-bottom: 1px dashed rgba(0, 0, 0, 0.06);
        }

        tr:last-child td {
            border-bottom: none
        }

        .badge-type {
            display: inline-block;
            padding: 6px 8px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 700;
        }

        .badge-cost {
            background: rgba(0, 0, 0, 0.06);
            color: #333
        }

        .badge-benefit {
            background: linear-gradient(90deg, var(--pink), var(--blue));
            color: #fff
        }

        .actions button {
            margin-right: 6px
        }

        /* small responsive tweaks */
        @media (max-width:680px) {
            .form-row {
                flex-direction: column
            }

            th,
            td {
                padding: 8px
            }

            .container {
                padding: 12px
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Input Kriteria Penilaian</h1>

        <form class="card" method="POST" action="{{ route('kriteria.store') }}">
            @csrf
            <div class="form-row">
                <div class="col">
                    <label>Nama Kriteria:</label>
                    <input type="text" name="nama" placeholder="Contoh: Harga" required />
                </div>
                <div style="width:120px">
                    <label>Bobot:</label>
                    <input type="number" step="0.01" min="0" max="1" name="bobot" placeholder="0.3" required />
                </div>
                <div style="width:160px">
                    <label>Jenis:</label>
                    <select name="jenis">
                        <option value="benefit">Benefit</option>
                        <option value="cost">Cost</option>
                    </select>
                </div>
                <div style="display:flex;align-items:end">
                    <button class="btn btn-add" type="submit">Tambah Kriteria</button>
                </div>
            </div>
        </form>

        <div class="card">
            <div class="muted">Daftar Kriteria:</div>
            <table>
                <thead>
                    <tr>
                        <th style="width:48px">No</th>
                        <th>Nama Kriteria</th>
                        <th style="width:96px">Bobot</th>
                        <th style="width:120px">Jenis</th>
                        <th style="width:140px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($kriteria as $i => $k)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $k->nama }}</td>
                        <td>{{ number_format($k->bobot,2) }}</td>
                        <td>
                            @if(strtolower($k->jenis) === 'cost')
                            <span class="badge-type badge-cost">Cost</span>
                            @else
                            <span class="badge-type badge-benefit">Benefit</span>
                            @endif
                        </td>
                        <td class="actions">
                            <a href="{{ route('kriteria.edit', $k->id) }}"><button type="button" class="btn btn-reset">[Edit]</button></a>
                            <form action="{{ route('kriteria.destroy', $k->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn" style="background:transparent;color:#c0392b;border:1px solid rgba(192,57,43,0.08);padding:6px 8px;border-radius:8px">[X]</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" style="text-align:center;padding:18px">Belum ada kriteria.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>