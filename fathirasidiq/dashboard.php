<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Keamanan Web - Ahmad Fathir Asidiq</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        body {
            background: radial-gradient(circle at top left, #0f172a, #0b0f19, #020617);
            overflow: hidden; /* Mencegah scroll agar pas satu layar */
        }
        .glass-card {
            background: rgba(17, 24, 39, 0.8);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
        .pulse-glow {
            box-shadow: 0 0 12px rgba(16, 185, 129, 0.4);
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0%, 100% { box-shadow: 0 0 12px rgba(16, 185, 129, 0.4); }
            50% { box-shadow: 0 0 20px rgba(16, 185, 129, 0.8); }
        }
    </style>
</head>
<body class="font-sans text-gray-200 h-screen w-screen flex flex-col justify-between p-3 md:p-5 selection:bg-emerald-500 selection:text-white">

    <!-- Top Navigation Header -->
    <header class="w-full max-w-6xl mx-auto px-5 py-2.5 rounded-xl border border-gray-800 bg-gray-900/60 backdrop-blur-md flex justify-between items-center shadow-lg">
        <div class="flex items-center space-x-2.5">
            <div class="h-8 w-8 rounded-lg bg-gradient-to-tr from-blue-600 to-emerald-500 flex items-center justify-center font-bold text-white text-xs shadow-md">
                FA
            </div>
            <div>
                <h1 class="text-xs font-bold text-white tracking-wide">Eksplorasi Keamanan Web</h1>
                <p class="text-[10px] text-emerald-400 font-semibold flex items-center gap-1">
                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-400 animate-ping"></span>
                    HTTPS Secure Active
                </p>
            </div>
        </div>
        <div class="flex items-center gap-2">
            <a href="login.php" class="px-3 py-1.5 text-xs font-semibold text-white bg-blue-600 hover:bg-blue-500 rounded-lg shadow transition-all flex items-center gap-1.5">
                <i class="fa-solid fa-right-to-bracket"></i> Log In
            </a>
            <a href="register.php" class="px-3 py-1.5 text-xs font-semibold text-gray-300 bg-gray-800 hover:bg-gray-700 hover:text-white border border-gray-700 rounded-lg transition-all flex items-center gap-1.5">
                <i class="fa-solid fa-user-plus"></i> Register
            </a>
        </div>
    </header>

    <!-- Main Content Body (Pas 1 Layar) -->
    <main class="max-w-6xl mx-auto w-full my-auto flex flex-col gap-4">

        <!-- Banner Identitas Mahasiswa (NIM & Data Diri) -->
        <div class="glass-card rounded-xl p-4 md:p-5 border border-gray-800 relative overflow-hidden shadow-xl">
            <div class="absolute -right-10 -top-10 w-32 h-32 bg-blue-500/10 rounded-full blur-2xl pointer-events-none"></div>
            
            <div class="flex flex-col md:flex-row items-center justify-between gap-4 relative z-10">
                <div class="flex items-center gap-4 text-center md:text-left">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-tr from-gray-800 to-gray-700 p-1 border border-gray-600 flex items-center justify-center shadow-md shrink-0">
                        <i class="fa-solid fa-user-shield text-2xl text-emerald-400"></i>
                    </div>
                    <div>
                        <div class="flex items-center justify-center md:justify-start gap-2">
                            <h2 class="text-lg md:text-xl font-extrabold text-white tracking-tight">Ahmad Fathir Asidiq</h2>
                            <span class="bg-emerald-500/20 text-emerald-300 border border-emerald-500/30 text-[10px] font-bold px-2 py-0.5 rounded-full pulse-glow">
                                Siap Demo
                            </span>
                        </div>
                        <p class="text-xs text-blue-400 font-semibold mt-0.5">
                            NIM: <span class="text-white font-mono">062530330727</span>
                        </p>
                    </div>
                </div>

                <div class="flex flex-wrap items-center justify-center md:justify-end gap-3 text-xs text-gray-300 font-medium bg-gray-950/40 px-4 py-2.5 rounded-lg border border-gray-800/80">
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-microchip text-emerald-400"></i> D3 Teknik Telekomunikasi</span>
                    <span class="text-gray-600">|</span>
                    <span class="flex items-center gap-1.5"><i class="fa-solid fa-building-columns text-blue-400"></i> Politeknik Negeri Sriwijaya</span>
                </div>
            </div>
        </div>

        <!-- Section Grid: Rincian Keamanan Web (Compact 1 Layar) -->
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-3">

            <!-- Card 1 -->
            <div class="glass-card p-3 rounded-lg border border-gray-800 hover:border-emerald-500/40 transition-all">
                <div class="flex items-center gap-2 mb-1.5">
                    <div class="p-1.5 bg-emerald-500/10 rounded text-emerald-400 text-xs">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <h3 class="text-xs font-bold text-white">SSL / HTTPS</h3>
                </div>
                <p class="text-[11px] text-gray-400 leading-snug">
                    Enkripsi jalur komunikasi TLS 1.3 anti <i>Man-in-the-Middle</i>.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="glass-card p-3 rounded-lg border border-gray-800 hover:border-blue-500/40 transition-all">
                <div class="flex items-center gap-2 mb-1.5">
                    <div class="p-1.5 bg-blue-500/10 rounded text-blue-400 text-xs">
                        <i class="fa-solid fa-key"></i>
                    </div>
                    <h3 class="text-xs font-bold text-white">Bcrypt Hash</h3>
                </div>
                <p class="text-[11px] text-gray-400 leading-snug">
                    Password disimpan terenkripsi acak aman di database MySQL.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="glass-card p-3 rounded-lg border border-gray-800 hover:border-indigo-500/40 transition-all">
                <div class="flex items-center gap-2 mb-1.5">
                    <div class="p-1.5 bg-indigo-500/10 rounded text-indigo-400 text-xs">
                        <i class="fa-solid fa-database"></i>
                    </div>
                    <h3 class="text-xs font-bold text-white">Prepared Stmt</h3>
                </div>
                <p class="text-[11px] text-gray-400 leading-snug">
                    Parameterized query total mencegah serangan SQL Injection.
                </p>
            </div>

            <!-- Card 4 -->
            <div class="glass-card p-3 rounded-lg border border-gray-800 hover:border-purple-500/40 transition-all">
                <div class="flex items-center gap-2 mb-1.5">
                    <div class="p-1.5 bg-purple-500/10 rounded text-purple-400 text-xs">
                        <i class="fa-solid fa-shield-cat"></i>
                    </div>
                    <h3 class="text-xs font-bold text-white">CSRF Token</h3>
                </div>
                <p class="text-[11px] text-gray-400 leading-snug">
                    Validasi token unik per sesi form request demi cegah forgery.
                </p>
            </div>

            <!-- Card 5 -->
            <div class="glass-card p-3 rounded-lg border border-gray-800 hover:border-amber-500/40 transition-all md:col-span-3 lg:col-span-1">
                <div class="flex items-center gap-2 mb-1.5">
                    <div class="p-1.5 bg-amber-500/10 rounded text-amber-400 text-xs">
                        <i class="fa-solid fa-network-wired"></i>
                    </div>
                    <h3 class="text-xs font-bold text-white">Wireshark Ready</h3>
                </div>
                <p class="text-[11px] text-gray-400 leading-snug">
                    Trafik paket data terenkripsi aman tanpa celah <i>sniffing</i>.
                </p>
            </div>

        </div>

    </main>

    <!-- Footer -->
    <footer class="w-full max-w-6xl mx-auto border-t border-gray-800/80 bg-gray-950/60 py-2.5 px-4 rounded-lg text-center text-[11px] text-gray-500">
        <p>© 2026 Ahmad Fathir Asidiq (062530330727) — D3 Teknik Telekomunikasi Politeknik Negeri Sriwijaya</p>
    </footer>

</body>
</html>