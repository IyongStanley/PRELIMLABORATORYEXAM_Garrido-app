<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY PORTFOLIO // System Integration & Architecture</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        @keyframes floatSlow {
            0%, 100% { transform: translateY(0px) rotate(0deg) scale(1); }
            50% { transform: translateY(-20px) rotate(4deg) scale(1.03); }
        }
        .animate-float { animation: floatSlow 10s ease-in-out infinite; }
        .glass-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
            transition: transform 0.15s ease-out, border-color 0.3s ease, box-shadow 0.3s ease;
            transform-style: preserve-3d;
            will-change: transform;
        }
        .glass-card:hover {
            border-color: rgba(6, 182, 212, 0.4);
            box-shadow: 0 30px 60px rgba(6, 182, 212, 0.2);
        }
        .ambient-blob {
            transition: transform 0.3s ease-out;
            will-change: transform;
        }
    </style>
</head>
<body class="bg-[#07090e] text-slate-100 min-h-screen flex flex-col justify-between font-sans relative overflow-x-hidden selection:bg-cyan-500 selection:text-black">

    <!-- Interactive Mouse-Reactive Ambient Liquid Orbs -->
    <div id="blob1" class="ambient-blob fixed top-[-10%] left-[-10%] w-[600px] h-[600px] bg-gradient-to-tr from-indigo-600/40 to-purple-600/30 rounded-full blur-[140px] pointer-events-none"></div>
    <div id="blob2" class="ambient-blob fixed bottom-[-15%] right-[-10%] w-[700px] h-[700px] bg-gradient-to-br from-cyan-600/30 to-blue-700/30 rounded-full blur-[150px] pointer-events-none"></div>
    <div id="blob3" class="ambient-blob fixed top-[35%] left-[40%] w-[450px] h-[450px] bg-emerald-500/15 rounded-full blur-[130px] pointer-events-none animate-float"></div>

    <!-- macOS Glass Header Dock -->
    <header class="sticky top-5 z-50 px-4 max-w-6xl mx-auto w-full">
        <div class="glass-card rounded-2xl px-6 py-3.5 flex flex-col md:flex-row justify-between items-center gap-4 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/10 via-transparent to-purple-500/10 opacity-50 pointer-events-none"></div>
            
            <!-- Window Controls & Header -->
            <div class="flex items-center space-x-5 z-10">
                <div class="flex space-x-2">
                    <span class="w-3 h-3 bg-rose-500/90 rounded-full inline-block shadow-[0_0_8px_rgba(244,63,94,0.6)]"></span>
                    <span class="w-3 h-3 bg-amber-500/90 rounded-full inline-block shadow-[0_0_8px_rgba(245,158,11,0.6)]"></span>
                    <span class="w-3 h-3 bg-emerald-500/90 rounded-full inline-block shadow-[0_0_8px_rgba(16,185,129,0.6)]"></span>
                </div>
                <div class="h-4 w-[1px] bg-white/10"></div>
                <div class="flex items-center space-x-2">
                 
                    <span class="text-xs font-black tracking-[0.2em] text-white uppercase">MY PORTFOLIO</span>
                </div>
            </div>

            <!-- Navigation Bar -->
            <nav class="flex flex-wrap justify-center gap-1.5 z-10 text-[11px] font-bold tracking-widest">
                <a href="{{ route('homepage') }}" class="px-3.5 py-2 rounded-xl transition-all duration-300 {{ request()->routeIs('homepage') ? 'bg-cyan-500/20 text-cyan-300 border border-cyan-500/40 shadow-[0_0_15px_rgba(6,182,212,0.3)]' : 'text-slate-400 hover:text-white hover:bg-white/5' }}">HOMEPAGE</a>
                <a href="{{ route('contact') }}" class="px-3.5 py-2 rounded-xl transition-all duration-300 {{ request()->routeIs('contact') ? 'bg-cyan-500/20 text-cyan-300 border border-cyan-500/40 shadow-[0_0_15px_rgba(6,182,212,0.3)]' : 'text-slate-400 hover:text-white hover:bg-white/5' }}">CONTACT INFORMATION</a>
                <a href="{{ route('developer') }}" class="px-3.5 py-2 rounded-xl transition-all duration-300 {{ request()->routeIs('developer') ? 'bg-cyan-500/20 text-cyan-300 border border-cyan-500/40 shadow-[0_0_15px_rgba(6,182,212,0.3)]' : 'text-slate-400 hover:text-white hover:bg-white/5' }}">DEVELOPER INFORMATION</a>
                <a href="{{ route('hobbies') }}" class="px-3.5 py-2 rounded-xl transition-all duration-300 {{ request()->routeIs('hobbies') ? 'bg-cyan-500/20 text-cyan-300 border border-cyan-500/40 shadow-[0_0_15px_rgba(6,182,212,0.3)]' : 'text-slate-400 hover:text-white hover:bg-white/5' }}">HOBBIES</a>
                <a href="{{ route('career') }}" class="px-3.5 py-2 rounded-xl transition-all duration-300 {{ request()->routeIs('career') ? 'bg-cyan-500/20 text-cyan-300 border border-cyan-500/40 shadow-[0_0_15px_rgba(6,182,212,0.3)]' : 'text-slate-400 hover:text-white hover:bg-white/5' }}">CAREER PATH</a>
            </nav>
        </div>
    </header>

    <!-- Main View Slot -->
    <main class="container mx-auto px-6 py-10 flex-grow relative z-10 flex items-center justify-center">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="relative z-10 glass-card border-t border-white/5 py-4 text-center text-xs text-slate-400 font-medium tracking-widest uppercase">
        <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-2">
            <span>&copy; {{ date('Y') }} SIA101 Integration Systems</span>
            <span class="flex items-center gap-2 text-slate-500">
                <span class="w-2 h-2 rounded-full bg-cyan-400 animate-ping"></span>
                Interactive 3D Motion Enabled
            </span>
        </div>
    </footer>

    <!-- Mouse Tracking & 3D Tilt Script -->
    <script>
        document.addEventListener('mousemove', (e) => {
            const { clientX, clientY } = e;
            const xOffset = (clientX / window.innerWidth - 0.5) * 60;
            const yOffset = (clientY / window.innerHeight - 0.5) * 60;

            // Shift ambient liquid blobs according to cursor position
            document.getElementById('blob1').style.transform = `translate(${xOffset * 1.5}px, ${yOffset * 1.5}px)`;
            document.getElementById('blob2').style.transform = `translate(${-xOffset * 1.2}px, ${-yOffset * 1.2}px)`;
            document.getElementById('blob3').style.transform = `translate(${yOffset * 0.8}px, ${xOffset * 0.8}px)`;

            // Interactive 3D Card Tilt Effect
            document.querySelectorAll('.tilt-card').forEach(card => {
                const rect = card.getBoundingClientRect();
                const cardX = clientX - rect.left - rect.width / 2;
                const cardY = clientY - rect.top - rect.height / 2;
                
                // Only tilt when mouse is nearby/over card
                if (clientX >= rect.left - 50 && clientX <= rect.right + 50 &&
                    clientY >= rect.top - 50 && clientY <= rect.bottom + 50) {
                    const rotateX = (-cardY / rect.height) * 16;
                    const rotateY = (cardX / rect.width) * 16;
                    card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(10px)`;
                } else {
                    card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateZ(0px)';
                }
            });
        });
    </script>
</body>
</html>
