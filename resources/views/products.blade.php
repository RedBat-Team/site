@extends('layouts.app')

@section('content')
    <!-- Hero -->
    <section class="relative overflow-hidden bg-gradient-to-br from-red-800 via-red-700 to-red-900 text-white">
        <div class="relative mx-auto max-w-7xl px-6 py-20 sm:py-24 text-center">
            <h1 class="text-4xl sm:text-5xl font-extrabold">Pacotes de Cibersegurança Gerida</h1>
            <p class="mt-4 max-w-3xl mx-auto text-white/90">
                Soluções por níveis para micro, pequenas e médias empresas — com opção totalmente à medida.
            </p>
        </div>
    </section>

    <!-- Tiers -->
    <section class="bg-gradient-to-b from-neutral-900 to-neutral-800 text-white">
        <div class="mx-auto max-w-7xl px-6 py-16">
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                <!-- Essencial -->
                <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-6 hover:shadow-lg hover:shadow-red-900/30 transition">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-bold">Essencial</h3>
                        <span class="rounded-full bg-red-600/20 text-red-300 text-xs px-2 py-1">Sob consulta</span>
                    </div>
                    <p class="mt-1 text-sm text-neutral-300">Microempresas <span class="text-neutral-400">(1–10 colab.)</span></p>
                    <ul class="mt-4 space-y-2 text-sm text-neutral-300">
                        <li>• Avaliação de risco inicial</li>
                        <li>• MFA e políticas básicas</li>
                        <li>• Backup local</li>
                        <li>• Formação básica (1 sessão)</li>
                        <li>• Suporte remoto</li>
                    </ul>
                    <div class="mt-6">
                        <a href="mailto:contacto@redbatteam.pt?subject=Interesse%20Pacote%20Essencial"
                           class="inline-flex items-center justify-center w-full rounded-xl bg-white text-red-700 font-semibold px-4 py-2 hover:bg-red-100">
                            Pedir proposta
                        </a>
                    </div>
                </div>

                <!-- Avançado -->
                <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-6 hover:shadow-lg hover:shadow-red-900/30 transition">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-bold">Avançado</h3>
                        <span class="rounded-full bg-red-600/20 text-red-300 text-xs px-2 py-1">Sob consulta</span>
                    </div>
                    <p class="mt-1 text-sm text-neutral-300">Pequenas empresas <span class="text-neutral-400">(10–50 colab.)</span></p>
                    <ul class="mt-4 space-y-2 text-sm text-neutral-300">
                        <li>• Inclui pacote Essencial</li>
                        <li>• Testes de penetração anuais</li>
                        <li>• Monitorização de logs</li>
                        <li>• Plano de resposta a incidentes</li>
                        <li>• Análise forense básica</li>
                    </ul>
                    <div class="mt-6">
                        <a href="mailto:contacto@redbatteam.pt?subject=Interesse%20Pacote%20Avan%C3%A7ado"
                           class="inline-flex items-center justify-center w-full rounded-xl bg-white text-red-700 font-semibold px-4 py-2 hover:bg-red-100">
                            Pedir proposta
                        </a>
                    </div>
                </div>

                <!-- Profissional -->
                <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-6 hover:shadow-lg hover:shadow-red-900/30 transition">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-bold">Profissional</h3>
                        <span class="rounded-full bg-red-600/20 text-red-300 text-xs px-2 py-1">Sob consulta</span>
                    </div>
                    <p class="mt-1 text-sm text-neutral-300">PMEs com presença digital ativa</p>
                    <ul class="mt-4 space-y-2 text-sm text-neutral-300">
                        <li>• Inclui pacote Avançado</li>
                        <li>• SIEM leve (ex.: Wazuh)</li>
                        <li>• Simulação de phishing</li>
                        <li>• Conformidade com NIS2</li>
                        <li>• Suporte técnico 8/5</li>
                    </ul>
                    <div class="mt-6">
                        <a href="mailto:contacto@redbatteam.pt?subject=Interesse%20Pacote%20Profissional"
                           class="inline-flex items-center justify-center w-full rounded-xl bg-white text-red-700 font-semibold px-4 py-2 hover:bg-red-100">
                            Pedir proposta
                        </a>
                    </div>
                </div>

                <!-- Customizado -->
                <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-6 hover:shadow-lg hover:shadow-red-900/30 transition">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-bold">Customizado</h3>
                        <span class="rounded-full bg-red-600/20 text-red-300 text-xs px-2 py-1">Sob consulta</span>
                    </div>
                    <p class="mt-1 text-sm text-neutral-300">Empresas com requisitos específicos</p>
                    <ul class="mt-4 space-y-2 text-sm text-neutral-300">
                        <li>• Serviços à medida, como:</li>
                        <li class="pl-3">– Red Team</li>
                        <li class="pl-3">– Análise forense avançada</li>
                        <li class="pl-3">– Integração com SOC externo</li>
                        <li class="pl-3">– Outros consoante as necessidades</li>
                    </ul>
                    <div class="mt-6">
                        <a href="mailto:contacto@redbatteam.pt?subject=Interesse%20Pacote%20Customizado"
                           class="inline-flex items-center justify-center w-full rounded-xl bg-white text-red-700 font-semibold px-4 py-2 hover:bg-red-100">
                            Pedir proposta
                        </a>
                    </div>
                </div>
            </div>

            <!-- Nota + Selo/NIS2 -->
            <div class="mt-10 rounded-2xl border border-neutral-700 bg-neutral-900 p-6">
                <p class="text-neutral-300">
                    ⚡ Todos os pacotes podem incluir apoio à <span class="text-white font-medium">obtenção do Selo de Maturidade Digital</span> e
                    <span class="text-white font-medium">Selo NIS2</span> (diagnóstico, evidências, submissão e governança).
                </p>
            </div>
        </div>
    </section>

    <!-- FAQ curta -->
    <section class="bg-neutral-900 text-white">
        <div class="mx-auto max-w-7xl px-6 py-12">
            <h2 class="text-2xl font-bold">Perguntas frequentes</h2>
            <div class="mt-6 grid gap-6 md:grid-cols-2">
                <div class="rounded-xl border border-neutral-700 p-5 bg-neutral-950">
                    <p class="font-semibold">Os preços são sempre “sob consulta”?</p>
                    <p class="mt-2 text-neutral-300">Sim — ajustamos à dimensão, tecnologia e requisitos do cliente para garantir o melhor rácio custo/benefício.</p>
                </div>
                <div class="rounded-xl border border-neutral-700 p-5 bg-neutral-950">
                    <p class="font-semibold">Incluem re-testes?</p>
                    <p class="mt-2 text-neutral-300">Nos pacotes com pentesting, os re-testes estão incluídos no âmbito combinado.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="bg-gradient-to-br from-red-700 via-red-600 to-red-700 text-white">
        <div class="mx-auto max-w-7xl px-6 py-16 text-center">
            <h3 class="text-3xl font-extrabold">Não sabe qual o pacote ideal?</h3>
            <p class="mt-3 text-white/90">Fale connosco — montamos um plano em 48h com prioridades por risco.</p>
            <div class="mt-6">
                <a href="mailto:contacto@redbatteam.pt" class="inline-flex items-center rounded-xl bg-white text-red-700 font-semibold px-6 py-3 hover:bg-red-100">
                    contacto@redbatteam.pt
                </a>
            </div>
        </div>
    </section>
@endsection
