@extends('layout.prelimlayout')

@section('content')
<div class="max-w-6xl w-full mx-auto space-y-8">

    <!-- Career Vision Hero Card -->
    <div class="glass-card tilt-card rounded-3xl p-8 md:p-12 shadow-2xl relative overflow-hidden">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -left-24 w-80 h-80 bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 border-b border-white/10 pb-8 mb-8">
            <div class="space-y-2">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 bg-cyan-500/10 border border-cyan-500/30 text-cyan-300 rounded-full text-xs font-extrabold uppercase tracking-widest">
                    <i class="fas fa-compass text-xs"></i> Strategic Career Roadmap
                </div>
                <h1 class="text-3xl md:text-5xl font-black text-white tracking-tight">
                    ARCHITECTURAL VISION & TRAJECTORY
                </h1>
                <p class="text-slate-400 text-sm md:text-base max-w-2xl font-light">
                    Targeting executive technical leadership, zero-trust enterprise integration, and high-throughput software architecture.
                </p>
            </div>

            <div class="p-4 rounded-2xl bg-white/[0.03] border border-white/10 text-center flex-shrink-0 min-w-[200px]">
                <span class="text-[10px] font-black uppercase tracking-widest text-cyan-400 block">Ultimate Target Role</span>
                <span class="text-lg font-black text-white tracking-tight block mt-0.5">Chief Technology Officer</span>
                <span class="text-[11px] font-medium text-slate-400">Enterprise Systems Architect</span>
            </div>
        </div>

        <!-- Career Target Metrics Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="p-4 rounded-2xl bg-white/[0.02] border border-white/5">
                <span class="text-[10px] font-extrabold uppercase tracking-widest text-slate-400 block">Focus Area</span>
                <span class="text-base font-bold text-cyan-400 block mt-1">Distributed Systems</span>
            </div>
            <div class="p-4 rounded-2xl bg-white/[0.02] border border-white/5">
                <span class="text-[10px] font-extrabold uppercase tracking-widest text-slate-400 block">Core Stack</span>
                <span class="text-base font-bold text-indigo-400 block mt-1">Laravel & Microservices</span>
            </div>
            <div class="p-4 rounded-2xl bg-white/[0.02] border border-white/5">
                <span class="text-[10px] font-extrabold uppercase tracking-widest text-slate-400 block">Availability Target</span>
                <span class="text-base font-bold text-emerald-400 block mt-1">99.9% SLA Uptime</span>
            </div>
            <div class="p-4 rounded-2xl bg-white/[0.02] border border-white/5">
                <span class="text-[10px] font-extrabold uppercase tracking-widest text-slate-400 block">System Paradigm</span>
                <span class="text-base font-bold text-amber-400 block mt-1">Event-Driven / API-First</span>
            </div>
        </div>
    </div>

    <!-- 4-Phase Progressive Execution Roadmap -->
    <div class="space-y-4">
        <h2 class="text-xs uppercase tracking-[0.2em] font-black text-cyan-400 flex items-center gap-2 pl-2">
            <i class="fas fa-route"></i> Sequential Career Progression Matrix
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <!-- Phase 1 -->
            <div class="glass-card tilt-card p-6 rounded-3xl relative overflow-hidden space-y-4 border border-white/10">
                <div class="flex justify-between items-center">
                    <span class="px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-300 text-[10px] font-black tracking-widest uppercase">
                        PHASE 01 // IMMEDIATE
                    </span>
                    <span class="text-xs font-bold text-slate-500">YEARS 0 - 2</span>
                </div>
                <h3 class="text-xl font-bold text-white">Full Stack Systems Engineer</h3>
                <p class="text-xs text-slate-300 leading-relaxed font-light">
                    Mastering enterprise PHP/Laravel development, designing RESTful APIs, optimizing relational database schemas, and building responsive glassmorphism interfaces.
                </p>
                <div class="flex flex-wrap gap-2 pt-2 border-t border-white/5">
                    <span class="text-[10px] font-bold px-2.5 py-1 rounded-lg bg-white/5 text-slate-300 border border-white/5">PHP 8.3</span>
                    <span class="text-[10px] font-bold px-2.5 py-1 rounded-lg bg-white/5 text-slate-300 border border-white/5">Laravel 12</span>
                    <span class="text-[10px] font-bold px-2.5 py-1 rounded-lg bg-white/5 text-slate-300 border border-white/5">MySQL Indexing</span>
                </div>
            </div>

            <!-- Phase 2 -->
            <div class="glass-card tilt-card p-6 rounded-3xl relative overflow-hidden space-y-4 border border-white/10">
                <div class="flex justify-between items-center">
                    <span class="px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/30 text-indigo-300 text-[10px] font-black tracking-widest uppercase">
                        PHASE 02 // MID-TERM
                    </span>
                    <span class="text-xs font-bold text-slate-500">YEARS 2 - 4</span>
                </div>
                <h3 class="text-xl font-bold text-white">Systems Integration Specialist</h3>
                <p class="text-xs text-slate-300 leading-relaxed font-light">
                    Connecting heterogeneous systems, deploying containerized microservices, implementing automated CI/CD pipelines, and securing cross-platform data exchanges.
                </p>
                <div class="flex flex-wrap gap-2 pt-2 border-t border-white/5">
                    <span class="text-[10px] font-bold px-2.5 py-1 rounded-lg bg-white/5 text-indigo-300 border border-white/5">Docker</span>
                    <span class="text-[10px] font-bold px-2.5 py-1 rounded-lg bg-white/5 text-indigo-300 border border-white/5">Microservices</span>
                    <span class="text-[10px] font-bold px-2.5 py-1 rounded-lg bg-white/5 text-indigo-300 border border-white/5">Redis Caching</span>
                </div>
            </div>

            <!-- Phase 3 -->
            <div class="glass-card tilt-card p-6 rounded-3xl relative overflow-hidden space-y-4 border border-white/10">
                <div class="flex justify-between items-center">
                    <span class="px-3 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/30 text-emerald-300 text-[10px] font-black tracking-widest uppercase">
                        PHASE 03 // ADVANCED
                    </span>
                    <span class="text-xs font-bold text-slate-500">YEARS 4 - 7</span>
                </div>
                <h3 class="text-xl font-bold text-white">Enterprise Infrastructure Architect</h3>
                <p class="text-xs text-slate-300 leading-relaxed font-light">
                    Directing high-availability cloud deployments, designing zero-trust security postures, managing distributed database clusters, and maintaining system integrity.
                </p>
                <div class="flex flex-wrap gap-2 pt-2 border-t border-white/5">
                    <span class="text-[10px] font-bold px-2.5 py-1 rounded-lg bg-white/5 text-emerald-300 border border-white/5">AWS Cloud</span>
                    <span class="text-[10px] font-bold px-2.5 py-1 rounded-lg bg-white/5 text-emerald-300 border border-white/5">Zero-Trust</span>
                    <span class="text-[10px] font-bold px-2.5 py-1 rounded-lg bg-white/5 text-emerald-300 border border-white/5">Distributed DB</span>
                </div>
            </div>

            <!-- Phase 4 -->
            <div class="glass-card tilt-card p-6 rounded-3xl relative overflow-hidden space-y-4 border border-white/10">
                <div class="flex justify-between items-center">
                    <span class="px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-300 text-[10px] font-black tracking-widest uppercase">
                        PHASE 04 // EXECUTIVE
                    </span>
                    <span class="text-xs font-bold text-slate-500">YEARS 7+</span>
                </div>
                <h3 class="text-xl font-bold text-white">BATAK MAG MAHAL</h3>
                <p class="text-xs text-slate-300 leading-relaxed font-light">
                    Depende kung 3 yan.
                </p>
                <div class="flex flex-wrap gap-2 pt-2 border-t border-white/5">
                </div>
            </div>

        </div>
    </div>

    <!-- Core Architectural Pillars -->
    <div class="glass-card tilt-card p-8 rounded-3xl space-y-6">
        <h3 class="text-sm font-extrabold uppercase tracking-widest text-cyan-400 flex items-center gap-2 border-b border-white/10 pb-4">
            <i class="fas fa-layer-group"></i> Core Architectural Principles & Pillars
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="space-y-2 p-4 rounded-2xl bg-white/[0.02] border border-white/5">
                <div class="w-10 h-10 bg-cyan-500/10 text-cyan-400 rounded-xl flex items-center justify-center text-lg mb-2">
                    <i class="fas fa-shield-virus"></i>
                </div>
                <h4 class="text-sm font-bold text-white">Fault Tolerance & Resilience</h4>
                <p class="text-xs text-slate-400 font-light leading-relaxed">Designing failover mechanisms and redundant server structures that guarantee zero data loss during peak load.</p>
            </div>

            <div class="space-y-2 p-4 rounded-2xl bg-white/[0.02] border border-white/5">
                <div class="w-10 h-10 bg-indigo-500/10 text-indigo-400 rounded-xl flex items-center justify-center text-lg mb-2">
                    <i class="fas fa-diagram-project"></i>
                </div>
                <h4 class="text-sm font-bold text-white">Modular Integration</h4>
                <p class="text-xs text-slate-400 font-light leading-relaxed">Decoupling monolithic platforms into clean, maintainable microservice architectures with well-documented APIs.</p>
            </div>

            <div class="space-y-2 p-4 rounded-2xl bg-white/[0.02] border border-white/5">
                <div class="w-10 h-10 bg-emerald-500/10 text-emerald-400 rounded-xl flex items-center justify-center text-lg mb-2">
                    <i class="fas fa-bolt"></i>
                </div>
                <h4 class="text-sm font-bold text-white">Hardware & Silicon Synergy</h4>
                <p class="text-xs text-slate-400 font-light leading-relaxed">Pairing high-efficiency software routines directly with optimized server hardware and low-latency storage configurations.</p>
            </div>
        </div>
    </div>

</div>
@endsection
