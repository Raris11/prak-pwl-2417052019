<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: "Segoe UI", Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 24px;
            background:
                radial-gradient(circle at top left, #60a5fa 0%, transparent 34%),
                radial-gradient(circle at bottom right, #a78bfa 0%, transparent 35%),
                linear-gradient(135deg, #0f172a, #1e3a8a);
        }

        .profile-card {
            width: 100%;
            max-width: 430px;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.96);
            border: 1px solid rgba(255, 255, 255, 0.45);
            border-radius: 24px;
            box-shadow: 0 22px 45px rgba(15, 23, 42, 0.4);
        }

        .cover {
            height: 145px;
            position: relative;
            background: linear-gradient(135deg, #2563eb, #4f46e5);
            overflow: hidden;
        }

        .brand {
            position: relative;
            z-index: 1;
            padding: 24px;
            color: white;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 1px;
            justify-content: center;
            display: flex;
        }

        .content {
            padding: 0 28px 30px;
            text-align: center;
        }

        .avatar {
            width: 112px;
            height: 112px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: -56px auto 14px;
            position: relative;
            border: 5px solid white;
            border-radius: 50%;
            background: #dbeafe;
            box-shadow: 0 8px 18px rgba(30, 64, 175, 0.25);
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }
        h1 {
            color: #172554;
            font-size: 25px;
            margin-bottom: 7px;
        }

        .subtitle {
            color: #64748b;
            font-size: 14px;
            margin-bottom: 24px;
        }

        .line {
            width: 58px;
            height: 4px;
            margin: 0 auto 23px;
            border-radius: 5px;
            background: linear-gradient(90deg, #2563eb, #8b5cf6);
        }

        .info-list {
            display: grid;
            gap: 13px;
            text-align: left;
        }

        .info-item {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 14px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            transition: 0.2s;
        }

        .info-item:hover {
            transform: translateY(-2px);
            border-color: #93c5fd;
            box-shadow: 0 8px 14px rgba(59, 130, 246, 0.12);
        }

        .icon {
            width: 42px;
            height: 42px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-shrink: 0;
            border-radius: 12px;
            background: #dbeafe;
            font-size: 20px;
        }

        .label {
            display: block;
            color: #64748b;
            font-size: 12px;
            margin-bottom: 3px;
        }

        .value {
            color: #1e293b;
            font-size: 15px;
            font-weight: 700;
        }

        .footer {
            margin-top: 25px;
            padding-top: 18px;
            border-top: 1px solid #e2e8f0;
            color: #64748b;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <main class="profile-card">
        <div class="cover">
            <p class="brand">PRAKTIKUM PEMROGRAMAN WEB LANJUT</p>
        </div>

        <div class="content">
            <div class="avatar">
                <img src="{{ asset('images/foto-raris.jpeg') }}" alt="Foto Profil Raris">
            </div>

            <h1>Profil Mahasiswa</h1>
            <p class="subtitle">Informasi akademik mahasiswa</p>
            <div class="line"></div>

            <section class="info-list">
                <div class="info-item">
                    <div class="icon">👤</div>
                    <div>
                        <span class="label">Nama Lengkap</span>
                        <span class="value">{{ $nama }}</span>
                    </div>
                </div>

                <div class="info-item">
                    <div class="icon">🏫</div>
                    <div>
                        <span class="label">Kelas</span>
                        <span class="value">{{ $kelas }}</span>
                    </div>
                </div>

                <div class="info-item">
                    <div class="icon">🪪</div>
                    <div>
                        <span class="label">Nomor Pokok Mahasiswa</span>
                        <span class="value">{{ $npm }}</span>
                    </div>
                </div>
            </section>

            <p class="footer">Tugas Pertemuan 3</p>
        </div>
    </main>
</body>
</html>