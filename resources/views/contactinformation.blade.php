@extends('layout.prelimlayout')

@section('content')
<div class="max-w-6xl w-full mx-auto space-y-8">

    <!-- Contact Header Showcase -->
    <div class="glass-card tilt-card rounded-3xl p-8 md:p-12 shadow-2xl relative overflow-hidden">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl pointer-events-none"></div>
        
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 border-b border-white/10 pb-8 mb-8">
            <div class="space-y-2">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 bg-cyan-500/10 border border-cyan-500/30 text-cyan-300 rounded-full text-xs font-extrabold uppercase tracking-widest">
                    <i class="fas fa-satellite-dish text-xs"></i> Communication Gateway
                </div>
                <h1 class="text-3xl md:text-5xl font-black text-white tracking-tight">
                    DIRECT CONTACT CHANNELS
                </h1>
                <p class="text-slate-400 text-sm md:text-base max-w-2xl font-light">
                    Initiate direct technical inquiries, system integration consultations, or architectural code reviews through encrypted endpoints.
                </p>
            </div>

            <!-- Signal Status Card -->
            <div class="p-4 rounded-2xl bg-white/[0.03] border border-white/10 text-center flex-shrink-0 min-w-[200px]">
                <span class="text-[10px] font-black uppercase tracking-widest text-emerald-400 flex items-center justify-center gap-1.5">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span> SIGNAL ONLINE
                </span>
                <span class="text-lg font-black text-white tracking-tight block mt-1">&lt; 2 Hours</span>
                <span class="text-[11px] font-medium text-slate-400">Average Dispatch Time</span>
            </div>
        </div>

        <!-- Contact Method Matrix -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <div class="glass-card p-6 rounded-2xl border border-white/10 space-y-4 hover:border-cyan-500/40 transition">
                <div class="w-12 h-12 bg-cyan-500/10 text-cyan-400 rounded-xl flex items-center justify-center text-xl border border-cyan-500/30 shadow-[0_0_15px_rgba(6,182,212,0.2)]">
                    <i class="fas fa-phone-volume"></i>
                </div>
                <div>
                    <span class="text-[10px] uppercase font-extrabold text-cyan-400 tracking-widest block">Direct Mobile Line</span>
                    <span class="text-base font-bold text-white tracking-wide block mt-0.5">+63 123 456 789</span>
                </div>
                <p class="text-[11px] text-slate-400 font-light">Voice & Direct SMS dispatch terminal.</p>
            </div>

            <div class="glass-card p-6 rounded-2xl border border-white/10 space-y-4 hover:border-purple-500/40 transition">
                <div class="w-12 h-12 bg-purple-500/10 text-purple-400 rounded-xl flex items-center justify-center text-xl border border-purple-500/30 shadow-[0_0_15px_rgba(168,85,247,0.2)]">
                    <i class="fas fa-paper-plane"></i>
                </div>
                <div>
                    <span class="text-[10px] uppercase font-extrabold text-purple-400 tracking-widest block">Official Email</span>
                    <span class="text-base font-bold text-white tracking-wide block mt-0.5">garridojeobert@gmail.com</span>
                </div>
                <p class="text-[11px] text-slate-400 font-light">PGP-Encrypted electronic mail endpoint.</p>
            </div>

            <div class="glass-card p-6 rounded-2xl border border-white/10 space-y-4 hover:border-emerald-500/40 transition">
                <div class="w-12 h-12 bg-emerald-500/10 text-emerald-400 rounded-xl flex items-center justify-center text-xl border border-emerald-500/30 shadow-[0_0_15px_rgba(16,185,129,0.2)]">
                    <i class="fas fa-location-crosshairs"></i>
                </div>
                <div>
                    <span class="text-[10px] uppercase font-extrabold text-emerald-400 tracking-widest block">Headquarters Base</span>
                    <span class="text-base font-bold text-white tracking-wide block mt-0.5">Pangasinan, Philippines</span>
                </div>
                <p class="text-[11px] text-slate-400 font-light">GMT+8 Western Luzon Operating Zone.</p>
            </div>

        </div>
    </div>

    <!-- Interactive Terminal & Message Form Row -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        
        <!-- Interactive Terminal Dispatch Widget -->
        <div class="glass-card tilt-card p-8 rounded-3xl space-y-4 border border-white/10">
            <div class="flex items-center justify-between border-b border-white/10 pb-4">
                <div class="flex space-x-2">
                    <span class="w-3 h-3 bg-rose-500 rounded-full inline-block"></span>
                    <span class="w-3 h-3 bg-amber-500 rounded-full inline-block"></span>
                    <span class="w-3 h-3 bg-emerald-500 rounded-full inline-block"></span>
                </div>
                <span class="text-xs font-mono font-bold text-cyan-400">ssh connection_stream.sh</span>
            </div>

            <div class="font-mono text-xs space-y-2 text-slate-300 pt-2">
                <p class="text-slate-500">// Terminal System Handshake Protocol</p>
                <p><span class="text-cyan-400">POST</span> /api/v1/dispatch <span class="text-emerald-400">200 OK</span></p>
                <p><span class="text-slate-400">Host:</span> sia101.architecture.internal</p>
                <p><span class="text-slate-400">Encryption:</span> TLS_AES_256_GCM_SHA384</p>
                <p><span class="text-slate-400">Status:</span> Endpoint listening for incoming queries...</p>
            </div>

            <div class="pt-4 border-t border-white/5 space-y-2">
                <span class="text-[10px] font-bold uppercase tracking-widest text-slate-400 block">Developer Social Outlets</span>
                <div class="flex gap-3">
                    <a href="#" class="px-3 py-2 rounded-xl bg-white/5 hover:bg-white/10 border border-white/10 text-xs font-bold text-slate-300 hover:text-cyan-300 flex items-center gap-2 transition">
                        <i class="fab fa-github"></i> GitHub
                    </a>
                    <a href="#" class="px-3 py-2 rounded-xl bg-white/5 hover:bg-white/10 border border-white/10 text-xs font-bold text-slate-300 hover:text-cyan-300 flex items-center gap-2 transition">
                        <i class="fab fa-linkedin"></i> LinkedIn
                    </a>
                    <a href="#" class="px-3 py-2 rounded-xl bg-white/5 hover:bg-white/10 border border-white/10 text-xs font-bold text-slate-300 hover:text-cyan-300 flex items-center gap-2 transition">
                        <i class="fab fa-discord"></i> Discord
                    </a>
                </div>
            </div>
        </div>

        <!-- Glass Interface Form -->
        <div class="glass-card tilt-card p-8 rounded-3xl space-y-4 border border-white/10">
            <h3 class="text-sm font-extrabold uppercase tracking-widest text-cyan-400 flex items-center gap-2 border-b border-white/10 pb-4">
                <i class="fas fa-envelope-open-text"></i> Send Direct Query
            </h3>

            <div class="space-y-3 text-xs">
                <div>
                    <label class="block text-slate-400 font-bold uppercase tracking-wider mb-1">Your Full Name</label>
                    <input type="text" placeholder="e.g. Alex Mercer" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-white placeholder-slate-600 focus:outline-none focus:border-cyan-400 transition">
                </div>

                <div>
                    <label class="block text-slate-400 font-bold uppercase tracking-wider mb-1">Your Email Address</label>
                    <input type="email" placeholder="e.g. alex@enterprise.com" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-white placeholder-slate-600 focus:outline-none focus:border-cyan-400 transition">
                </div>

                <div>
                    <label class="block text-slate-400 font-bold uppercase tracking-wider mb-1">Message Body</label>
                    <textarea rows="3" placeholder="Specify project requirements or technical query..." class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-white placeholder-slate-600 focus:outline-none focus:border-cyan-400 transition"></textarea>
                </div>

                <button class="w-full bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-black font-black py-3 rounded-xl shadow-[0_0_20px_rgba(6,182,212,0.3)] transition text-xs tracking-widest uppercase">
                    Dispatch Transmission
                </button>
            </div>
        </div>

    </div>

</div>
@endsection
