@extends('layouts.app')

@section('content')
    <!-- Hero -->
    <section class="relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-red-800 via-red-700 to-red-900"></div>
        <div class="relative">
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-28 text-white">
                <div class="grid lg:grid-cols-2 gap-10 items-center">
                    <div>
                        <div class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-sm ring-1 ring-white/20 mb-6">
                            <span class="inline-block size-2 rounded-full bg-red-400"></span>
                            <span>Red teaming, pentesting e resposta a incidentes</span>
                        </div>
                        <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight">
                            RedBatTeam<br>
                            <span class="text-red-300">defende, testa e melhora</span> a sua segurança
                        </h1>
                        <p class="mt-5 text-lg text-white/90 max-w-2xl">
                            Empresa de cibersegurança focada em testes de intrusão, simulações de adversário, hardening e formação. Transformamos riscos em ações concretas.
                        </p>
                        <div class="mt-8 flex flex-wrap gap-3">
                            <a href="#contacto" class="inline-flex items-center justify-center rounded-xl bg-white text-red-700 font-semibold px-5 py-3 shadow hover:bg-red-100 transition">Pedir proposta</a>
                            <!-- Link atualizado para a página /servicos -->
                            <a href="{{ route('services') }}" class="inline-flex items-center justify-center rounded-xl border border-white/30 px-5 py-3 text-white hover:bg-white/10">Ver serviços</a>
                        </div>
                        <div class="mt-8 flex items-center gap-6 text-white/80">
                            <div class="flex space-x-2">
                                <span class="inline-flex size-10 items-center justify-center rounded-full bg-white/20 ring-2 ring-white/30">🛡️</span>
                                <span class="inline-flex size-10 items-center justify-center rounded-full bg-white/20 ring-2 ring-white/30">🕵️</span>
                                <span class="inline-flex size-10 items-center justify-center rounded-full bg-white/20 ring-2 ring-white/30">🔐</span>
                            </div>
                            <p class="text-sm">Equipa sénior com certificações OSCP, eJPT, eCIR | Metodologias MITRE ATT&CK & OWASP</p>
                        </div>
                    </div>
                    <div class="hidden lg:block">
                        <div class="relative mx-auto max-w-lg">
                            <div class="absolute -inset-6 rounded-3xl bg-white/10 blur-2xl"></div>
                            <div class="relative rounded-3xl border border-white/10 bg-white/5 p-6 backdrop-blur">
                                <div class="grid grid-cols-2 gap-4 text-sm">
                                    <div class="rounded-xl bg-white/10 p-4">
                                        <p class="font-semibold">Red Team</p>
                                        <p class="text-white/80">Ataque realista à organização para medir deteção e resposta.</p>
                                    </div>
                                    <div class="rounded-xl bg-white/10 p-4">
                                        <p class="font-semibold">Pentesting</p>
                                        <p class="text-white/80">Aplicações, redes, APIs e cloud com evidências técnicas.</p>
                                    </div>
                                    <div class="rounded-xl bg-white/10 p-4">
                                        <p class="font-semibold">Blue Team</p>
                                        <p class="text-white/80">Hardening, monitorização e playbooks de incidente.</p>
                                    </div>
                                    <div class="rounded-xl bg-white/10 p-4">
                                        <p class="font-semibold">Formação</p>
                                        <p class="text-white/80">Workshops práticos para equipas técnicas e gestão.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Serviços (landing, alinhado aos pacotes) -->
    <section id="services" class="bg-gradient-to-b from-neutral-900 to-neutral-800 text-white">
        <div class="mx-auto max-w-7xl px-6 py-20">
            <div class="text-center max-w-2xl mx-auto">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white">Serviços de cibersegurança</h2>
                <p class="mt-3 text-neutral-300">
                    Identificamos vulnerabilidades, validamos controlos e aceleramos a maturidade — integrados nos nossos pacotes geridos.
                </p>
            </div>

            <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                <!-- Red Team / Purple Team -->
                <div class="rounded-2xl border border-neutral-700 p-6 hover:shadow-lg hover:shadow-red-900/30 transition bg-neutral-900">
                    <div class="size-10 grid place-items-center rounded-lg bg-red-600 text-white">🦇</div>
                    <h3 class="mt-4 font-bold text-xl text-white">Red Team / Purple Team</h3>
                    <p class="mt-2 text-neutral-300">Simulações de adversário (TTPs MITRE) para medir deteção e resposta.</p>

                    <!-- chips de pacotes -->
                    <div class="mt-3 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10">Incluído: <b>Profissional</b></span>
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10"><b>Customizado</b></span>
                    </div>

                    <ul class="mt-3 text-sm list-disc pl-5 text-neutral-400 space-y-1">
                        <li>Objetivos de negócio e regras de engajamento</li>
                        <li>Relatório executivo e técnico com evidências</li>
                        <li>Workshop de lições aprendidas</li>
                    </ul>

                    <a href="{{ route('products') }}" class="mt-4 inline-flex items-center rounded-lg bg-white text-red-700 font-semibold px-4 py-2 hover:bg-red-100">
                        Ver pacotes
                    </a>
                </div>

                <!-- Pentesting Apps & APIs -->
                <div class="rounded-2xl border border-neutral-700 p-6 hover:shadow-lg hover:shadow-red-900/30 transition bg-neutral-900">
                    <div class="size-10 grid place-items-center rounded-lg bg-red-600 text-white">🧪</div>
                    <h3 class="mt-4 font-bold text-xl text-white">Pentesting Apps & APIs</h3>
                    <p class="mt-2 text-neutral-300">OWASP ASVS/API, testes manuais e automação orientada a risco.</p>

                    <div class="mt-3 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10">Incluído: <b>Avançado</b></span>
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10"><b>Profissional</b></span>
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10"><b>Customizado</b></span>
                    </div>

                    <ul class="mt-3 text-sm list-disc pl-5 text-neutral-400 space-y-1">
                        <li>Testes lógicos e de autorização</li>
                        <li>POCs e priorização por risco (CVSS + contexto)</li>
                        <li>Re-testes incluídos</li>
                    </ul>

                    <a href="{{ route('products') }}" class="mt-4 inline-flex items-center rounded-lg bg-white text-red-700 font-semibold px-4 py-2 hover:bg-red-100">
                        Ver pacotes
                    </a>
                </div>

                <!-- Hardening & Blue Team -->
                <div class="rounded-2xl border border-neutral-700 p-6 hover:shadow-lg hover:shadow-red-900/30 transition bg-neutral-900">
                    <div class="size-10 grid place-items-center rounded-lg bg-red-600 text-white">🔒</div>
                    <h3 class="mt-4 font-bold text-xl text-white">Hardening & Blue Team</h3>
                    <p class="mt-2 text-neutral-300">Baseline CIS, monitorização e melhoria contínua.</p>

                    <div class="mt-3 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10">Incluído: <b>Essencial</b></span>
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10"><b>Avançado</b></span>
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10"><b>Profissional</b></span>
                    </div>

                    <ul class="mt-3 text-sm list-disc pl-5 text-neutral-400 space-y-1">
                        <li>Active Directory & Endpoints</li>
                        <li>SIEM/SOAR tuning</li>
                        <li>Threat hunting</li>
                    </ul>

                    <a href="{{ route('products') }}" class="mt-4 inline-flex items-center rounded-lg bg-white text-red-700 font-semibold px-4 py-2 hover:bg-red-100">
                        Ver pacotes
                    </a>
                </div>

                <!-- Cloud Security -->
                <div class="rounded-2xl border border-neutral-700 p-6 hover:shadow-lg hover:shadow-red-900/30 transition bg-neutral-900">
                    <div class="size-10 grid place-items-center rounded-lg bg-red-600 text-white">☁️</div>
                    <h3 class="mt-4 font-bold text-xl text-white">Cloud Security</h3>
                    <p class="mt-2 text-neutral-300">IAM, configuração e pipelines seguros em Azure, AWS e GCP.</p>

                    <div class="mt-3 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10">Incluído: <b>Avançado</b></span>
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10"><b>Profissional</b></span>
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10"><b>Customizado</b></span>
                    </div>

                    <ul class="mt-3 text-sm list-disc pl-5 text-neutral-400 space-y-1">
                        <li>Revisões de IAM e configuração</li>
                        <li>Zero trust & micro-segmentação</li>
                        <li>Infra as Code segura</li>
                    </ul>

                    <a href="{{ route('products') }}" class="mt-4 inline-flex items-center rounded-lg bg-white text-red-700 font-semibold px-4 py-2 hover:bg-red-100">
                        Ver pacotes
                    </a>
                </div>

                <!-- Formação & Consciencialização -->
                <div class="rounded-2xl border border-neutral-700 p-6 hover:shadow-lg hover:shadow-red-900/30 transition bg-neutral-900">
                    <div class="size-10 grid place-items-center rounded-lg bg-red-600 text-white">🎓</div>
                    <h3 class="mt-4 font-bold text-xl text-white">Formação & Consciencialização</h3>
                    <p class="mt-2 text-neutral-300">Workshops práticos e campanhas de phishing simuladas.</p>

                    <div class="mt-3 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10">Incluído: <b>Essencial</b></span>
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10"><b>Avançado</b></span>
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10"><b>Profissional</b></span>
                    </div>

                    <ul class="mt-3 text-sm list-disc pl-5 text-neutral-400 space-y-1">
                        <li>Labs hands-on</li>
                        <li>Planos de melhoria</li>
                        <li>Materiais reutilizáveis</li>
                    </ul>

                    <a href="{{ route('products') }}" class="mt-4 inline-flex items-center rounded-lg bg-white text-red-700 font-semibold px-4 py-2 hover:bg-red-100">
                        Ver pacotes
                    </a>
                </div>

                <!-- Auditorias & Compliance -->
                <div class="rounded-2xl border border-neutral-700 p-6 hover:shadow-lg hover:shadow-red-900/30 transition bg-neutral-900">
                    <div class="size-10 grid place-items-center rounded-lg bg-red-600 text-white">📄</div>
                    <h3 class="mt-4 font-bold text-xl text-white">Auditorias & Compliance</h3>
                    <p class="mt-2 text-neutral-300">ISO 27001, NIS2/DORA, políticas e processos com plano de ação.</p>

                    <div class="mt-3 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10">Incluído: <b>Avançado</b></span>
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10"><b>Profissional</b></span>
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10"><b>Customizado</b></span>
                    </div>

                    <ul class="mt-3 text-sm list-disc pl-5 text-neutral-400 space-y-1">
                        <li>Gap analysis e roadmap</li>
                        <li>Documentação e templates</li>
                        <li>Suporte a auditoria externa</li>
                        <li>Obtenção do <span class="font-medium text-white">Selo de Maturidade Digital</span> (diagnóstico, evidências e submissão)</li>
                        <li>Apoio ao <span class="font-medium text-white">Selo NIS2</span> (governança, risco e reporting)</li>
                    </ul>

                    <a href="{{ route('products') }}" class="mt-4 inline-flex items-center rounded-lg bg-white text-red-700 font-semibold px-4 py-2 hover:bg-red-100">
                        Ver pacotes
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Call to action -->
    <section id="contacto" class="bg-gradient-to-br from-red-700 via-red-600 to-red-700 text-white">
        <div class="mx-auto max-w-7xl px-6 py-20 text-center">
            <h3 class="text-3xl font-extrabold">Pronto para elevar a segurança?</h3>
            <p class="mt-3 text-white/90">Fale connosco e receba uma proposta personalizada em 48 horas.</p>
            <div class="mt-8">
                <a href="mailto:contacto@redbatteam.pt" class="inline-flex items-center rounded-xl bg-white text-red-700 font-semibold px-6 py-3 shadow hover:bg-red-100">contacto@redbatteam.pt</a>
            </div>
        </div>
    </section>
@endsection
