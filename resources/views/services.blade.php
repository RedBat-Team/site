@extends('layouts.app')

@section('content')
    <!-- Hero -->
    <section class="relative overflow-hidden bg-gradient-to-br from-red-800 via-red-700 to-red-900 text-white">
        <div class="relative mx-auto max-w-7xl px-6 py-24 sm:py-28 text-center">
            <h1 class="text-4xl sm:text-5xl font-extrabold">Serviços de Cibersegurança</h1>
            <p class="mt-4 text-lg text-white/90 max-w-3xl mx-auto">
                Serviços ofensivos, defensivos e de conformidade para preparar a sua organização contra ameaças reais e requisitos regulatórios.
            </p>
            <div class="mt-6 flex items-center justify-center gap-3">
                <a href="{{ route('products') }}" class="inline-flex items-center rounded-xl bg-white text-red-700 font-semibold px-5 py-3 shadow hover:bg-red-100">
                    Ver pacotes (Produtos)
                </a>
                <a href="mailto:contacto@redbatteam.pt" class="inline-flex items-center rounded-xl border border-white/30 px-5 py-3 text-white hover:bg-white/10">
                    Pedir proposta
                </a>
            </div>
        </div>
    </section>

    <!-- Lista de Serviços (mapeados aos pacotes) -->
    <section class="bg-gradient-to-b from-neutral-900 to-neutral-800 text-white">
        <div class="mx-auto max-w-7xl px-6 py-20">
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

                <!-- Red Team / Purple Team -->
                <div class="rounded-2xl border border-neutral-700 p-6 bg-neutral-900 hover:shadow-lg hover:shadow-red-900/30 transition">
                    <div class="size-12 grid place-items-center rounded-lg bg-red-600 text-white text-xl">🦇</div>
                    <h3 class="mt-4 font-bold text-xl">Red Team / Purple Team</h3>
                    <p class="mt-2 text-neutral-300">
                        Simulações realistas de adversário (TTPs MITRE) para testar deteção e resposta em cenários de alto impacto.
                    </p>

                    <!-- Chips de pacotes -->
                    <div class="mt-4 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10">Incluído: <b>Profissional</b></span>
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10"><b>Customizado</b></span>
                    </div>

                    <ul class="mt-4 list-disc text-sm pl-5 text-neutral-400 space-y-1">
                        <li>Objetivos de negócio e regras de engajamento</li>
                        <li>Relatório executivo e técnico com evidências</li>
                        <li>Exercício Purple Team com SOC</li>
                        <li>Workshop de lições aprendidas</li>
                    </ul>

                    <a href="{{ route('products') }}" class="mt-5 inline-flex items-center rounded-lg bg-white text-red-700 font-semibold px-4 py-2 hover:bg-red-100">
                        Ver pacotes compatíveis
                    </a>
                </div>

                <!-- Pentesting Apps & APIs -->
                <div class="rounded-2xl border border-neutral-700 p-6 bg-neutral-900 hover:shadow-lg hover:shadow-red-900/30 transition">
                    <div class="size-12 grid place-items-center rounded-lg bg-red-600 text-white text-xl">🧪</div>
                    <h3 class="mt-4 font-bold text-xl">Pentesting Apps & APIs</h3>
                    <p class="mt-2 text-neutral-300">
                        Testes manuais e automatizados a apps web/mobile, APIs e cloud com foco em risco real.
                    </p>

                    <div class="mt-4 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10">Incluído: <b>Avançado</b></span>
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10"><b>Profissional</b></span>
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10"><b>Customizado</b></span>
                    </div>

                    <ul class="mt-4 list-disc text-sm pl-5 text-neutral-400 space-y-1">
                        <li>OWASP ASVS / API</li>
                        <li>Testes lógicos e de autorização</li>
                        <li>POCs de exploração e priorização por risco</li>
                        <li>Re-testes incluídos</li>
                    </ul>

                    <a href="{{ route('products') }}" class="mt-5 inline-flex items-center rounded-lg bg-white text-red-700 font-semibold px-4 py-2 hover:bg-red-100">
                        Ver pacotes compatíveis
                    </a>
                </div>

                <!-- Hardening & Blue Team -->
                <div class="rounded-2xl border border-neutral-700 p-6 bg-neutral-900 hover:shadow-lg hover:shadow-red-900/30 transition">
                    <div class="size-12 grid place-items-center rounded-lg bg-red-600 text-white text-xl">🔒</div>
                    <h3 class="mt-4 font-bold text-xl">Hardening & Blue Team</h3>
                    <p class="mt-2 text-neutral-300">
                        Fortalecimento e monitorização contínua para reduzir superfície de ataque e melhorar deteção.
                    </p>

                    <div class="mt-4 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10">Incluído: <b>Essencial</b></span>
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10"><b>Avançado</b></span>
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10"><b>Profissional</b></span>
                    </div>

                    <ul class="mt-4 list-disc text-sm pl-5 text-neutral-400 space-y-1">
                        <li>Baseline CIS (AD/Endpoints)</li>
                        <li>Reviews de logs & playbooks de incidente</li>
                        <li>SIEM/SOAR tuning e threat hunting</li>
                    </ul>

                    <a href="{{ route('products') }}" class="mt-5 inline-flex items-center rounded-lg bg-white text-red-700 font-semibold px-4 py-2 hover:bg-red-100">
                        Ver pacotes compatíveis
                    </a>
                </div>

                <!-- Cloud Security -->
                <div class="rounded-2xl border border-neutral-700 p-6 bg-neutral-900 hover:shadow-lg hover:shadow-red-900/30 transition">
                    <div class="size-12 grid place-items-center rounded-lg bg-red-600 text-white text-xl">☁️</div>
                    <h3 class="mt-4 font-bold text-xl">Cloud Security</h3>
                    <p class="mt-2 text-neutral-300">Segurança e postura em Azure, AWS e GCP (IAM, config, pipelines).</p>

                    <div class="mt-4 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10">Incluído: <b>Avançado</b></span>
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10"><b>Profissional</b></span>
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10"><b>Customizado</b></span>
                    </div>

                    <ul class="mt-4 list-disc text-sm pl-5 text-neutral-400 space-y-1">
                        <li>Revisões IAM & configuração</li>
                        <li>Zero trust & micro-segmentação</li>
                        <li>Infra as Code segura</li>
                    </ul>

                    <a href="{{ route('products') }}" class="mt-5 inline-flex items-center rounded-lg bg-white text-red-700 font-semibold px-4 py-2 hover:bg-red-100">
                        Ver pacotes compatíveis
                    </a>
                </div>

                <!-- Formação & Consciencialização -->
                <div class="rounded-2xl border border-neutral-700 p-6 bg-neutral-900 hover:shadow-lg hover:shadow-red-900/30 transition">
                    <div class="size-12 grid place-items-center rounded-lg bg-red-600 text-white text-xl">🎓</div>
                    <h3 class="mt-4 font-bold text-xl">Formação & Consciencialização</h3>
                    <p class="mt-2 text-neutral-300">Workshops técnicos e campanhas de phishing simuladas.</p>

                    <div class="mt-4 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10">Incluído: <b>Essencial</b></span>
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10"><b>Avançado</b></span>
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10"><b>Profissional</b></span>
                    </div>

                    <ul class="mt-4 list-disc text-sm pl-5 text-neutral-400 space-y-1">
                        <li>Labs hands-on</li>
                        <li>Planos de melhoria</li>
                        <li>Materiais reutilizáveis</li>
                    </ul>

                    <a href="{{ route('products') }}" class="mt-5 inline-flex items-center rounded-lg bg-white text-red-700 font-semibold px-4 py-2 hover:bg-red-100">
                        Ver pacotes compatíveis
                    </a>
                </div>

                <!-- Auditorias & Compliance -->
                <div class="rounded-2xl border border-neutral-700 p-6 bg-neutral-900 hover:shadow-lg hover:shadow-red-900/30 transition">
                    <div class="size-12 grid place-items-center rounded-lg bg-red-600 text-white text-xl">📄</div>
                    <h3 class="mt-4 font-bold text-xl">Auditorias & Compliance</h3>
                    <p class="mt-2 text-neutral-300">Conformidade e governança (ISO 27001, NIS2/DORA, políticas/processos).</p>

                    <div class="mt-4 flex flex-wrap gap-2 text-xs">
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10">Incluído: <b>Avançado</b></span>
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10"><b>Profissional</b></span>
                        <span class="px-2 py-1 rounded-full bg-white/10 ring-1 ring-white/10"><b>Customizado</b></span>
                    </div>

                    <ul class="mt-4 list-disc text-sm pl-5 text-neutral-400 space-y-1">
                        <li>Gap analysis e roadmap</li>
                        <li>Documentação e templates</li>
                        <li>Suporte a auditoria externa</li>
                        <li>Selo de Maturidade Digital (diagnóstico, evidências e submissão)</li>
                        <li>Apoio ao Selo NIS2 (governança, gestão de risco e reporting)</li>
                    </ul>

                    <a href="{{ route('products') }}" class="mt-5 inline-flex items-center rounded-lg bg-white text-red-700 font-semibold px-4 py-2 hover:bg-red-100">
                        Ver pacotes compatíveis
                    </a>
                </div>
            </div>

            <!-- Callout para products -->
            <div class="mt-12 rounded-2xl border border-neutral-700 bg-neutral-900 p-6 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
                <p class="text-neutral-300">
                    ⚡ Quer ver o que está incluído em cada nível (Essencial, Avançado, Profissional, Customizado)?
                </p>
                <a href="{{ route('products') }}" class="inline-flex items-center rounded-xl bg-white text-red-700 font-semibold px-5 py-3 hover:bg-red-100">
                    Ir para Produtos
                </a>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="bg-gradient-to-br from-red-700 via-red-600 to-red-700 text-white">
        <div class="mx-auto max-w-7xl px-6 py-20 text-center">
            <h3 class="text-3xl font-extrabold">Quer saber qual o serviço certo para a sua empresa?</h3>
            <p class="mt-3 text-white/90">Entre em contacto e receba uma proposta adaptada às suas necessidades.</p>
            <div class="mt-8">
                <a href="mailto:contacto@redbatteam.pt" class="inline-flex items-center rounded-xl bg-white text-red-700 font-semibold px-6 py-3 shadow hover:bg-red-100">
                    contacto@redbatteam.pt
                </a>
            </div>
        </div>
    </section>
@endsection
