@extends('layout.prelimlayout')

@section('content')
<div class="max-w-6xl w-full mx-auto space-y-8">

    <!-- Hobbies Hero Showcase Header -->
    <div class="glass-card tilt-card rounded-3xl p-8 md:p-12 shadow-2xl relative overflow-hidden">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 border-b border-white/10 pb-8 mb-8">
            <div class="space-y-2">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 bg-purple-500/10 border border-purple-500/30 text-purple-300 rounded-full text-xs font-extrabold uppercase tracking-widest">
                    <i class="fas fa-microchip text-xs"></i> Technical Pursuits & Engineering
                </div>
                <h1 class="text-3xl md:text-5xl font-black text-white tracking-tight">
                    DISCIPLINES & OBSESSIONS
                </h1>
                <p class="text-slate-400 text-sm md:text-base max-w-2xl font-light">
                    Hands-on mechanical optimization, silicon tuning, and custom digital media crafting outside of formal software architecture.
                </p>
            </div>

            <div class="p-4 rounded-2xl bg-white/[0.03] border border-white/10 text-center flex-shrink-0 min-w-[200px]">
                <span class="text-[10px] font-black uppercase tracking-widest text-purple-400 block">Performance Metric</span>
                <span class="text-lg font-black text-white tracking-tight block mt-0.5">Peak Output</span>
                <span class="text-[11px] font-medium text-slate-400">Zero Mediocrity Standard</span>
            </div>
        </div>

        <!-- Hobbies Feature Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Powertrain & Mechanical Tuning -->
            <div class="glass-card tilt-card p-8 rounded-3xl space-y-5 border border-white/10 relative overflow-hidden flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="w-16 h-16 bg-cyan-500/10 text-cyan-400 rounded-2xl flex items-center justify-center text-3xl border border-cyan-500/30 shadow-[0_0_20px_rgba(6,182,212,0.2)]">
                        <i class="fas fa-gauge-high"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Powertrain Mechanicals</h3>
                    <p class="text-xs text-slate-300 leading-relaxed font-light">
                        Extracting peak torque and volumetric efficiency from scooter engines via custom 32mm–34mm throttle bodies, 65mm block upgrades, performance cams, high-flow injectors, and ECU mapping.
                    </p>
                </div>

                <div class="pt-4 border-t border-white/5 space-y-3">
                    <div class="flex justify-between items-center text-[11px]">
                        <span class="text-slate-400">Focus Tech</span>
                        <span class="font-bold text-cyan-400">ECU & Fuel Mapping</span>
                    </div>
                    <div class="flex flex-wrap gap-1.5">
                        <span class="text-[10px] font-bold px-2 py-0.5 rounded bg-white/5 text-slate-300 border border-white/5">Throttle Body</span>
                        <span class="text-[10px] font-bold px-2 py-0.5 rounded bg-white/5 text-slate-300 border border-white/5">Dyno Tuning</span>
                        <span class="text-[10px] font-bold px-2 py-0.5 rounded bg-white/5 text-slate-300 border border-white/5">Superhead</span>
                    </div>
                </div>
            </div>

            <!-- Silicon Overclocking & Firmware -->
            <div class="glass-card tilt-card p-8 rounded-3xl space-y-5 border border-white/10 relative overflow-hidden flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="w-16 h-16 bg-purple-500/10 text-purple-400 rounded-2xl flex items-center justify-center text-3xl border border-purple-500/30 shadow-[0_0_20px_rgba(168,85,247,0.2)]">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Silicon Overclocking</h3>
                    <p class="text-xs text-slate-300 leading-relaxed font-light">
                        Precision Ryzen CPU voltage offset tuning, custom desktop hardware builds, mobile firmware flashing, Error 3194 iOS recovery, and low-level diagnostic troubleshooting.
                    </p>
                </div>

                <div class="pt-4 border-t border-white/5 space-y-3">
                    <div class="flex justify-between items-center text-[11px]">
                        <span class="text-slate-400">Focus Tech</span>
                        <span class="font-bold text-purple-400">Voltage & Clock Tuning</span>
                    </div>
                    <div class="flex flex-wrap gap-1.5">
                        <span class="text-[10px] font-bold px-2 py-0.5 rounded bg-white/5 text-slate-300 border border-white/5">Ryzen 5</span>
                        <span class="text-[10px] font-bold px-2 py-0.5 rounded bg-white/5 text-slate-300 border border-white/5">Firmware Recovery</span>
                        <span class="text-[10px] font-bold px-2 py-0.5 rounded bg-white/5 text-slate-300 border border-white/5">iOS Signing</span>
                    </div>
                </div>
            </div>

            <!-- Digital Graphic Engineering -->
            <div class="glass-card tilt-card p-8 rounded-3xl space-y-5 border border-white/10 relative overflow-hidden flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="w-16 h-16 bg-emerald-500/10 text-emerald-400 rounded-2xl flex items-center justify-center text-3xl border border-emerald-500/30 shadow-[0_0_20px_rgba(16,185,129,0.2)]">
                        <i class="fas fa-bezier-curve"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Graphic Engineering</h3>
                    <p class="text-xs text-slate-300 leading-relaxed font-light">
                        Creating hand-crafted visual layouts, IT campaign digital posters, minimalist typography, and custom identity branding that avoids robotic AI design cliches.
                    </p>
                </div>

                <div class="pt-4 border-t border-white/5 space-y-3">
                    <div class="flex justify-between items-center text-[11px]">
                        <span class="text-slate-400">Focus Tech</span>
                        <span class="font-bold text-emerald-400">Hand-Crafted Aesthetics</span>
                    </div>
                    <div class="flex flex-wrap gap-1.5">
                        <span class="text-[10px] font-bold px-2 py-0.5 rounded bg-white/5 text-slate-300 border border-white/5">Vector Design</span>
                        <span class="text-[10px] font-bold px-2 py-0.5 rounded bg-white/5 text-slate-300 border border-white/5">Posters</span>
                        <span class="text-[10px] font-bold px-2 py-0.5 rounded bg-white/5 text-slate-300 border border-white/5">Brand Assets</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
