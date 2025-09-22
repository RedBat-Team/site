@extends('layouts.app')

@section('content')
    <!-- Hero -->
    <section class="relative overflow-hidden bg-gradient-to-br from-red-800 via-red-700 to-red-900 text-white">
        <div class="relative mx-auto max-w-7xl px-6 py-24 sm:py-28">
            <div class="max-w-3xl">
                <h1 class="text-4xl sm:text-5xl font-extrabold">Sobre nós</h1>
                <p class="mt-4 text-white/90">
                    Nascemos da vontade de transformar risco em ação. Da Batalha para o mundo, com foco numa área tão desafiante quanto emergente: a cibersegurança.
                </p>
            </div>
        </div>
    </section>

    <!-- História -->
    <section class="bg-gradient-to-b from-neutral-900 to-neutral-800 text-white">
        <div class="mx-auto max-w-7xl px-6 py-16 grid gap-10 lg:grid-cols-2">
            <div class="space-y-4">
                <h2 class="text-2xl sm:text-3xl font-bold">A nossa história</h2>
                <p class="text-neutral-300">
                    Tudo começou na <span class="font-medium text-white">Batalha</span>. Entre curiosidade técnica e vontade de proteger organizações,
                    o fundador percebeu cedo que a cibersegurança seria uma área <span class="font-medium text-white">interessante e emergente</span>, com impacto real
                    no dia a dia das empresas.
                </p>
                <p class="text-neutral-300">
                    Hoje, a RedBatTeam junta competências de <span class="text-white font-medium">red team, pentesting e resposta a incidentes</span> com práticas
                    de <span class="text-white font-medium">hardening e conformidade</span>, para elevar a maturidade e reduzir o risco operacional.
                </p>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="px-3 py-1 text-xs rounded-full bg-white/10 ring-1 ring-white/10">OSCP</span>
                    <span class="px-3 py-1 text-xs rounded-full bg-white/10 ring-1 ring-white/10">eJPT</span>
                    <span class="px-3 py-1 text-xs rounded-full bg-white/10 ring-1 ring-white/10">eCIR</span>
                    <span class="px-3 py-1 text-xs rounded-full bg-white/10 ring-1 ring-white/10">MITRE ATT&CK</span>
                    <span class="px-3 py-1 text-xs rounded-full bg-white/10 ring-1 ring-white/10">OWASP</span>
                </div>
            </div>

            <!-- Cartão fundador / equipa -->
            <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-6">
                <div class="flex items-start gap-4">
                    <div class="h-16 w-16 rounded-xl bg-white/10 grid place-items-center text-2xl">🦇</div>
                    <div>
                        <p class="text-sm uppercase tracking-wide text-neutral-400">Fundador</p>
                        <h3 class="text-xl font-bold">Da Batalha para a cibersegurança</h3>
                        <p class="mt-2 text-neutral-300">
                            Autodidata por natureza, apaixonado por investigação e engenharia segura. Foco em
                            <span class="text-white font-medium">simulações de adversário</span>, <span class="text-white font-medium">testes de intrusão</span>
                            e <span class="text-white font-medium">resposta a incidentes</span>.
                        </p>
                    </div>
                </div>
                <ul class="mt-6 grid sm:grid-cols-2 gap-3 text-sm text-neutral-300">
                    <li class="rounded-xl bg-white/5 p-3 border border-white/10">Red Team & Purple Team</li>
                    <li class="rounded-xl bg-white/5 p-3 border border-white/10">Pentesting Apps & APIs</li>
                    <li class="rounded-xl bg-white/5 p-3 border border-white/10">Forense & eCIR</li>
                    <li class="rounded-xl bg-white/5 p-3 border border-white/10">Hardening & Blue Team</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Linha temporal -->
    <section class="bg-neutral-900 text-white">
        <div class="mx-auto max-w-7xl px-6 py-16">
            <h2 class="text-2xl sm:text-3xl font-bold">Linha temporal</h2>
            <div class="mt-8 space-y-6">
                <div class="flex gap-4">
                    <div class="mt-1 size-3 rounded-full bg-red-600"></div>
                    <div>
                        <p class="text-sm text-neutral-400">Origem</p>
                        <p class="font-semibold">Interesse crescente em segurança e engenharia — Batalha, Portugal</p>
                        <p class="text-neutral-300">Primeiros projetos, estudo contínuo e foco em fundamentos.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="mt-1 size-3 rounded-full bg-red-600"></div>
                    <div>
                        <p class="text-sm text-neutral-400">Especialização</p>
                        <p class="font-semibold">Pentesting, resposta a incidentes e forense</p>
                        <p class="text-neutral-300">Certificações (OSCP, eJPT, eCIR) e aplicação prática em clientes.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="mt-1 size-3 rounded-full bg-red-600"></div>
                    <div>
                        <p class="text-sm text-neutral-400">Hoje</p>
                        <p class="font-semibold">RedBatTeam</p>
                        <p class="text-neutral-300">Serviços ofensivos e defensivos, com apoio a Selo de Maturidade Digital e Selo NIS2.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Valores -->
    <section class="bg-gradient-to-b from-neutral-900 to-neutral-800 text-white">
        <div class="mx-auto max-w-7xl px-6 py-16">
            <h2 class="text-2xl sm:text-3xl font-bold">Os nossos valores</h2>
            <div class="mt-6 grid gap-6 md:grid-cols-3">
                <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-6">
                    <p class="text-xl">🧭</p>
                    <h3 class="mt-3 font-semibold text-lg">Ética e transparência</h3>
                    <p class="mt-2 text-neutral-300">Regras claras, consentimento e foco em impacto positivo.</p>
                </div>
                <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-6">
                    <p class="text-xl">🔬</p>
                    <h3 class="mt-3 font-semibold text-lg">Rigor técnico</h3>
                    <p class="mt-2 text-neutral-300">Metodologias reconhecidas: MITRE ATT&CK, OWASP, CIS.</p>
                </div>
                <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-6">
                    <p class="text-xl">🤝</p>
                    <h3 class="mt-3 font-semibold text-lg">Parceria</h3>
                    <p class="mt-2 text-neutral-300">Trabalhamos lado a lado com equipas técnicas e gestão.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Certificações & metodologias -->
    <section class="bg-neutral-900 text-white">
        <div class="mx-auto max-w-7xl px-6 py-16">
            <h2 class="text-2xl sm:text-3xl font-bold">Certificações & Metodologias</h2>
            <div class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-xl border border-neutral-700 bg-neutral-950 p-4">OSCP</div>
                <div class="rounded-xl border border-neutral-700 bg-neutral-950 p-4">eJPT</div>
                <div class="rounded-xl border border-neutral-700 bg-neutral-950 p-4">eCIR</div>
                <div class="rounded-xl border border-neutral-700 bg-neutral-950 p-4">MITRE ATT&CK & OWASP</div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="bg-gradient-to-br from-red-700 via-red-600 to-red-700 text-white">
        <div class="mx-auto max-w-7xl px-6 py-16 text-center">
            <h3 class="text-3xl font-extrabold">Quer conhecer melhor o nosso trabalho?</h3>
            <p class="mt-3 text-white/90">Conte-nos o seu contexto e enviamos um plano em 48 horas.</p>
            <div class="mt-6">
                <a href="mailto:contacto@redbatteam.pt" class="inline-flex items-center rounded-xl bg-white text-red-700 font-semibold px-6 py-3 hover:bg-red-100">
                    contacto@redbatteam.pt
                </a>
            </div>
        </div>
    </section>
@endsection
