@extends('layout.prelimlayout')

@section('content')
<div class="max-w-6xl w-full mx-auto space-y-6 md:space-y-10 py-4 px-2 sm:px-4 mb-24">

    <!-- Hero Showcase Card -->
    <div class="glass-card tilt-card rounded-2xl sm:rounded-3xl p-5 sm:p-8 md:p-14 shadow-2xl relative overflow-hidden text-center md:text-left border border-white/10">
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-32 -left-32 w-80 h-80 bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="flex flex-col md:flex-row items-center justify-between gap-8 md:gap-10 relative z-10">
            <div class="space-y-4 sm:space-y-6 max-w-2xl">
                <div class="inline-flex items-center gap-2.5 px-3.5 py-1.5 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-300 text-[10px] sm:text-xs font-extrabold tracking-widest uppercase shadow-[0_0_20px_rgba(6,182,212,0.2)]">
                    <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></span>
                    SIA101 // macOS Liquid Workstation
                </div>

                <h1 class="text-3xl sm:text-5xl md:text-6xl font-black text-white tracking-tight leading-none">
                    ENTERPRISE<br>
                    <span class="bg-gradient-to-r from-cyan-400 via-teal-300 to-indigo-400 bg-clip-text text-transparent drop-shadow-[0_0_35px_rgba(6,182,212,0.4)]">
                        SYSTEM ARCHITECTURE
                    </span>
                </h1>

                <p class="text-slate-300 text-xs sm:text-sm md:text-base font-light leading-relaxed">
                    Welcome to the central command hub of my digital portfolio. Built on Laravel Blade layout inheritance, real-time 3D cursor physics, and modular integration components.
                </p>

                <!-- Action Button Matrix -->
                <div class="flex flex-wrap justify-center md:justify-start gap-3 sm:gap-4 pt-2">
                    <a href="{{ route('developer') }}" class="bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-black font-black px-5 sm:px-8 py-3.5 sm:py-4 rounded-xl shadow-[0_0_25px_rgba(6,182,212,0.4)] transition-all duration-300 text-[11px] sm:text-xs tracking-widest uppercase hover:scale-105 flex items-center gap-2">
                        <i class="fas fa-terminal text-sm"></i> Inspect Developer Matrix
                    </a>
                    <a href="{{ route('career') }}" class="bg-white/5 hover:bg-white/10 border border-white/15 text-white font-bold px-5 sm:px-8 py-3.5 sm:py-4 rounded-xl transition-all duration-300 text-[11px] sm:text-xs tracking-widest uppercase backdrop-blur-md hover:border-cyan-400/40 flex items-center gap-2">
                        <i class="fas fa-route text-sm"></i> Career Roadmap
                    </a>
                </div>
            </div>

            <!-- Terminal Widget -->
            <div class="w-full md:w-80 glass-card p-4 sm:p-5 rounded-2xl border border-white/10 text-left font-mono text-xs text-slate-300 space-y-3 shadow-2xl flex-shrink-0">
                <div class="flex items-center justify-between border-b border-white/10 pb-2">
                    <div class="flex space-x-1.5">
                        <span class="w-2.5 h-2.5 bg-rose-500 rounded-full inline-block"></span>
                        <span class="w-2.5 h-2.5 bg-amber-500 rounded-full inline-block"></span>
                        <span class="w-2.5 h-2.5 bg-emerald-500 rounded-full inline-block"></span>
                    </div>
                    <span class="text-[10px] text-slate-500 uppercase font-bold">bash - zsh</span>
                </div>
                <div class="space-y-1.5 text-[11px]">
                    <p class="text-emerald-400">$ php artisan serve</p>
                    <p class="text-slate-400">INFO Server running on [http://127.0.0.1:8000].</p>
                    <p class="text-cyan-400">$ status --check</p>
                    <p class="text-slate-300">Blade Inheritance: <span class="text-emerald-400">OPTIMAL</span></p>
                    <p class="text-slate-300">Route Directives: <span class="text-emerald-400">5 ACTIVE</span></p>
                    <p class="text-slate-300">UI Glass Engine: <span class="text-cyan-400">MOUNTED</span></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Live Performance Dashboard Metrics -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 sm:gap-4">
        <div class="glass-card tilt-card p-4 sm:p-6 rounded-2xl border border-white/10 text-center space-y-1">
            <span class="text-2xl sm:text-3xl font-black text-cyan-400 block">100%</span>
            <span class="text-[9px] sm:text-[10px] font-extrabold uppercase tracking-widest text-slate-400 block">Blade Yield</span>
        </div>
        <div class="glass-card tilt-card p-4 sm:p-6 rounded-2xl border border-white/10 text-center space-y-1">
            <span class="text-2xl sm:text-3xl font-black text-indigo-400 block">&lt; 0.2ms</span>
            <span class="text-[9px] sm:text-[10px] font-extrabold uppercase tracking-widest text-slate-400 block">Route Latency</span>
        </div>
        <div class="glass-card tilt-card p-4 sm:p-6 rounded-2xl border border-white/10 text-center space-y-1">
            <span class="text-2xl sm:text-3xl font-black text-emerald-400 block">5 Views</span>
            <span class="text-[9px] sm:text-[10px] font-extrabold uppercase tracking-widest text-slate-400 block">Sub-file Modules</span>
        </div>
        <div class="glass-card tilt-card p-4 sm:p-6 rounded-2xl border border-white/10 text-center space-y-1">
            <span class="text-2xl sm:text-3xl font-black text-amber-400 block">60 FPS</span>
            <span class="text-[9px] sm:text-[10px] font-extrabold uppercase tracking-widest text-slate-400 block">Glass Motion</span>
        </div>
    </div>

    <!-- Portfolio Feature Pillars -->
    <div class="space-y-4">
        <h2 class="text-[11px] sm:text-xs uppercase tracking-[0.2em] font-black text-cyan-400 flex items-center gap-2 pl-2">
            <i class="fas fa-layer-group"></i> Architecture & System Specifications
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-6">
            
            <div class="glass-card tilt-card p-6 sm:p-8 rounded-3xl space-y-4 border border-white/10 relative overflow-hidden">
                <div class="w-12 h-12 sm:w-14 sm:h-14 bg-cyan-500/10 text-cyan-400 rounded-2xl flex items-center justify-center text-xl sm:text-2xl border border-cyan-500/30 shadow-[0_0_20px_rgba(6,182,212,0.2)]">
                    <i class="fas fa-sitemap"></i>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-white">Layout Inheritance</h3>
                <p class="text-xs text-slate-300 leading-relaxed font-light">
                    Built using a single master file (<code class="text-cyan-300">prelimlayout.blade.php</code>) extended across all sub-view routes via Blade directives.
                </p>
                <div class="pt-2 border-t border-white/5 flex items-center justify-between text-[10px] font-bold text-cyan-400">
                    <span>DRY ARCHITECTURE</span>
                    <i class="fas fa-check"></i>
                </div>
            </div>

            <div class="glass-card tilt-card p-6 sm:p-8 rounded-3xl space-y-4 border border-white/10 relative overflow-hidden">
                <div class="w-12 h-12 sm:w-14 sm:h-14 bg-indigo-500/10 text-indigo-400 rounded-2xl flex items-center justify-center text-xl sm:text-2xl border border-indigo-500/30 shadow-[0_0_20px_rgba(168,85,247,0.2)]">
                    <i class="fas fa-bolt"></i>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-white">Direct Closure Routes</h3>
                <p class="text-xs text-slate-300 leading-relaxed font-light">
                    Configured without controller overhead in <code class="text-indigo-300">routes/web.php</code> for direct view rendering and minimal request latency.
                </p>
                <div class="pt-2 border-t border-white/5 flex items-center justify-between text-[10px] font-bold text-indigo-400">
                    <span>ZERO OVERHEAD</span>
                    <i class="fas fa-check"></i>
                </div>
            </div>

            <div class="glass-card tilt-card p-6 sm:p-8 rounded-3xl space-y-4 border border-white/10 relative overflow-hidden">
                <div class="w-12 h-12 sm:w-14 sm:h-14 bg-emerald-500/10 text-emerald-400 rounded-2xl flex items-center justify-center text-xl sm:text-2xl border border-emerald-500/30 shadow-[0_0_20px_rgba(16,185,129,0.2)]">
                    <i class="fas fa-wand-magic-sparkles"></i>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-white">3D Motion Glass UI</h3>
                <p class="text-xs text-slate-300 leading-relaxed font-light">
                    Leverages modern Tailwind utility styling, frosted glass backdrop filters, and cursor-tracking JavaScript math for dynamic 3D perspective tilts.
                </p>
                <div class="pt-2 border-t border-white/5 flex items-center justify-between text-[10px] font-bold text-emerald-400">
                    <span>INTERACTIVE ENGINE</span>
                    <i class="fas fa-check"></i>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
