@extends('layout.prelimlayout')

@section('content')
<div class="max-w-6xl w-full mx-auto space-y-8">
    
    <!-- Main Profile Hero Card -->
    <div class="glass-card tilt-card rounded-3xl p-8 md:p-12 shadow-2xl relative overflow-hidden">
        <div class="absolute -top-20 -right-20 w-80 h-80 bg-cyan-500/10 rounded-full blur-3xl pointer-events-none"></div>
        
        <div class="flex flex-col lg:flex-row items-center gap-10">
            <!-- Profile Photo Container -->
            <div class="relative group flex-shrink-0">
                <div class="w-44 h-44 md:w-52 md:h-52 rounded-3xl overflow-hidden border-2 border-cyan-400/50 shadow-[0_0_35px_rgba(6,182,212,0.35)] bg-slate-900 relative">
<img src="{{ asset('images/pics.jpg') }}" 
     alt="Developer Profile"
                         class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                </div>
                <span class="absolute -bottom-3 -right-2 px-3.5 py-1 bg-cyan-500 text-black text-[10px] font-black uppercase tracking-wider rounded-xl shadow-lg border border-cyan-300 flex items-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-black animate-ping"></span> ONLINE
                </span>
            </div>

            <!-- Profile Overview Details -->
            <div class="text-center lg:text-left flex-grow space-y-3">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 bg-cyan-500/10 border border-cyan-500/30 text-cyan-300 rounded-full text-xs font-extrabold uppercase tracking-widest">
                    <i class="fas fa-shield-halved"></i> Garrido, Jeobert Stanley G.
                </div>
                <h1 class="text-3xl md:text-5xl font-black text-white tracking-tight">Full Stack Systems Architect</h1>
                <p class="text-slate-300 text-sm md:text-base leading-relaxed max-w-2xl font-light">
                    Specializing in high-performance backend architecture, PHP/Blade engine development, hardware tuning, and relational database systems integration.
                </p>
                
                <div class="flex flex-wrap justify-center lg:justify-start gap-2 pt-2">
                    <span class="px-3 py-1.5 bg-white/5 border border-white/10 rounded-xl text-xs font-bold text-cyan-300"><i class="fab fa-laravel text-cyan-400 mr-1"></i> Laravel 12</span>
                    <span class="px-3 py-1.5 bg-white/5 border border-white/10 rounded-xl text-xs font-bold text-indigo-300"><i class="fab fa-php text-indigo-400 mr-1"></i> PHP 8.3</span>
                    <span class="px-3 py-1.5 bg-white/5 border border-white/10 rounded-xl text-xs font-bold text-emerald-300"><i class="fas fa-database text-emerald-400 mr-1"></i> MySQL</span>
                    <span class="px-3 py-1.5 bg-white/5 border border-white/10 rounded-xl text-xs font-bold text-purple-300"><i class="fas fa-microchip text-purple-400 mr-1"></i> Hardware Tuning</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Matrix Grid -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="glass-card tilt-card p-6 rounded-2xl border border-white/10 text-center">
            <p class="text-3xl font-black text-cyan-400">100%</p>
            <p class="text-[10px] font-extrabold uppercase tracking-widest text-slate-400 mt-1">Blade Inheritance</p>
        </div>
        <div class="glass-card tilt-card p-6 rounded-2xl border border-white/10 text-center">
            <p class="text-3xl font-black text-purple-400">5/5</p>
            <p class="text-[10px] font-extrabold uppercase tracking-widest text-slate-400 mt-1">Exam Views Integrated</p>
        </div>
        <div class="glass-card tilt-card p-6 rounded-2xl border border-white/10 text-center">
            <p class="text-3xl font-black text-emerald-400">0.2ms</p>
            <p class="text-[10px] font-extrabold uppercase tracking-widest text-slate-400 mt-1">Route Latency</p>
        </div>
        <div class="glass-card tilt-card p-6 rounded-2xl border border-white/10 text-center">
            <p class="text-3xl font-black text-amber-400">Active</p>
            <p class="text-[10px] font-extrabold uppercase tracking-widest text-slate-400 mt-1">SIA101 Architecture</p>
        </div>
    </div>

    <!-- Detailed Resume Matrix -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        
        <!-- Technical Competencies with Skill Bars -->
        <div class="glass-card tilt-card p-8 rounded-3xl space-y-6">
            <h3 class="text-sm font-extrabold uppercase tracking-widest text-cyan-400 flex items-center gap-2 border-b border-white/10 pb-4">
                <i class="fas fa-sliders"></i> Skill Depth & Competency
            </h3>
            
            <div class="space-y-4">
                <div>
                    <div class="flex justify-between text-xs font-bold mb-1.5">
                        <span class="text-white">Laravel & Blade Components</span>
                        <span class="text-cyan-400">89%</span>
                    </div>
                    <div class="w-full h-2 bg-white/5 rounded-full overflow-hidden border border-white/10">
                        <div class="h-full bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full" style="width: 89%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between text-xs font-bold mb-1.5">
                        <span class="text-white">System Architecture & Route Directives</span>
                        <span class="text-indigo-400">85%</span>
                    </div>
                    <div class="w-full h-2 bg-white/5 rounded-full overflow-hidden border border-white/10">
                        <div class="h-full bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full" style="width: 85%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between text-xs font-bold mb-1.5">
                        <span class="text-white">Database Design & SQL Optimization</span>
                        <span class="text-emerald-400">88%</span>
                    </div>
                    <div class="w-full h-2 bg-white/5 rounded-full overflow-hidden border border-white/10">
                        <div class="h-full bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full" style="width: 88%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between text-xs font-bold mb-1.5">
                        <span class="text-white">Hardware Diagnostics & ECU Tuning</span>
                        <span class="text-amber-400">90%</span>
                    </div>
                    <div class="w-full h-2 bg-white/5 rounded-full overflow-hidden border border-white/10">
                        <div class="h-full bg-gradient-to-r from-amber-500 to-rose-500 rounded-full" style="width: 90%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Academic & Project Highlights -->
        <div class="glass-card tilt-card p-8 rounded-3xl space-y-6">
            <h3 class="text-sm font-extrabold uppercase tracking-widest text-cyan-400 flex items-center gap-2 border-b border-white/10 pb-4">
                <i class="fas fa-cubes"></i> System Architecture Portfolio
            </h3>

            <div class="space-y-4">
                <div class="p-4 rounded-2xl bg-white/[0.02] border border-white/5 space-y-1">
                    <div class="flex justify-between items-center">
                        <span class="text-sm font-bold text-white">SIA101 Prelim Layout Engine</span>
                        <span class="text-[10px] font-bold text-cyan-400 bg-cyan-500/10 px-2 py-0.5 rounded border border-cyan-500/20">COMPLETED</span>
                    </div>
                    <p class="text-xs text-slate-400 font-light">Modular Blade inheritance, custom route declarations in web.php, and interactive macOS UI elements.</p>
                </div>

                <div class="p-4 rounded-2xl bg-white/[0.02] border border-white/5 space-y-1">
                    <div class="flex justify-between items-center">
                        <span class="text-sm font-bold text-white">Java Swing Enterprise UI</span>
                        <span class="text-[10px] font-bold text-indigo-400 bg-indigo-500/10 px-2 py-0.5 rounded border border-indigo-500/20">VERIFIED</span>
                    </div>
                    <p class="text-xs text-slate-400 font-light">Desktop GUI applications integrated with SQL database backends and strict event handling.</p>
                </div>

                <div class="p-4 rounded-2xl bg-white/[0.02] border border-white/5 space-y-1">
                    <div class="flex justify-between items-center">
                        <span class="text-sm font-bold text-white">Hardware & Firmware Diagnostics</span>
                        <span class="text-[10px] font-bold text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded border border-emerald-500/20">ACTIVE</span>
                    </div>
                    <p class="text-xs text-slate-400 font-light">Firmware recovery, iOS verification troubleshooting, and silicon clock voltage optimization.</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
