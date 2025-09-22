@extends('layouts.app')

@section('content')
    <!-- Hero -->
    <section class="relative overflow-hidden bg-gradient-to-br from-red-800 via-red-700 to-red-900 text-white">
        <div class="relative mx-auto max-w-7xl px-6 py-24 sm:py-28 text-center">
            <h1 class="text-4xl sm:text-5xl font-extrabold">Contactos</h1>
            <p class="mt-4 text-lg text-white/90 max-w-3xl mx-auto">
                Ligue-se diretamente à equipa certa. Cada área tem canais dedicados para acelerar a resposta.
            </p>
        </div>
    </section>

    <!-- Contactos por áreas -->
    <section class="bg-gradient-to-b from-neutral-900 to-neutral-800 text-white">
        <div class="mx-auto max-w-7xl px-6 py-20">
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

                <!-- SOC -->
                <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-6">
                    <h3 class="text-xl font-bold flex items-center gap-2">🛡️ SOC</h3>
                    <p class="mt-2 text-neutral-300">Security Operations Center</p>
                    <ul class="mt-4 space-y-2 text-sm">
                        <li><a href="mailto:sentinels@redbatteam.com" class="hover:text-red-400">sentinels@redbatteam.com</a></li>
                        <li><a href="mailto:watchtower@redbatteam.com" class="hover:text-red-400">watchtower@redbatteam.com</a></li>
                        <li><a href="mailto:shields@redbatteam.com" class="hover:text-red-400">shields@redbatteam.com</a></li>
                    </ul>
                </div>

                <!-- Threat Intelligence -->
                <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-6">
                    <h3 class="text-xl font-bold flex items-center gap-2">🧠 Threat Intelligence</h3>
                    <p class="mt-2 text-neutral-300">Monitorização e análise de ameaças</p>
                    <ul class="mt-4 space-y-2 text-sm">
                        <li><a href="mailto:oracles@redbatteam.com" class="hover:text-red-400">oracles@redbatteam.com</a></li>
                        <li><a href="mailto:hunters@redbatteam.com" class="hover:text-red-400">hunters@redbatteam.com</a></li>
                        <li><a href="mailto:intelhub@redbatteam.com" class="hover:text-red-400">intelhub@redbatteam.com</a></li>
                    </ul>
                </div>

                <!-- Pentest / Red Team -->
                <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-6">
                    <h3 class="text-xl font-bold flex items-center gap-2">🕵️ Pentest / Red Team</h3>
                    <p class="mt-2 text-neutral-300">Intrusão controlada e simulações adversárias</p>
                    <ul class="mt-4 space-y-2 text-sm">
                        <li><a href="mailto:breachers@redbatteam.com" class="hover:text-red-400">breachers@redbatteam.com</a></li>
                        <li><a href="mailto:phantoms@redbatteam.com" class="hover:text-red-400">phantoms@redbatteam.com</a></li>
                        <li><a href="mailto:infiltrators@redbatteam.com" class="hover:text-red-400">infiltrators@redbatteam.com</a></li>
                    </ul>
                </div>

                <!-- Blue Team -->
                <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-6">
                    <h3 class="text-xl font-bold flex items-center gap-2">🔒 Blue Team</h3>
                    <p class="mt-2 text-neutral-300">Defesa, hardening e resposta</p>
                    <ul class="mt-4 space-y-2 text-sm">
                        <li><a href="mailto:guardians@redbatteam.com" class="hover:text-red-400">guardians@redbatteam.com</a></li>
                        <li><a href="mailto:fortress@redbatteam.com" class="hover:text-red-400">fortress@redbatteam.com</a></li>
                        <li><a href="mailto:defenders@redbatteam.com" class="hover:text-red-400">defenders@redbatteam.com</a></li>
                    </ul>
                </div>

                <!-- Gestão / Direção -->
                <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-6">
                    <h3 class="text-xl font-bold flex items-center gap-2">🏢 Gestão / Direção</h3>
                    <p class="mt-2 text-neutral-300">Coordenação e governação</p>
                    <ul class="mt-4 space-y-2 text-sm">
                        <li><a href="mailto:command@redbatteam.com" class="hover:text-red-400">command@redbatteam.com</a></li>
                        <li><a href="mailto:hq@redbatteam.com" class="hover:text-red-400">hq@redbatteam.com</a></li>
                        <li><a href="mailto:overwatch@redbatteam.com" class="hover:text-red-400">overwatch@redbatteam.com</a></li>
                    </ul>
                </div>

                <!-- Suporte -->
                <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-6">
                    <h3 class="text-xl font-bold flex items-center gap-2">💡 Suporte / Helpdesk</h3>
                    <p class="mt-2 text-neutral-300">Assistência técnica e primeiros socorros digitais</p>
                    <ul class="mt-4 space-y-2 text-sm">
                        <li><a href="mailto:medics@redbatteam.com" class="hover:text-red-400">medics@redbatteam.com</a></li>
                        <li><a href="mailto:rescue@redbatteam.com" class="hover:text-red-400">rescue@redbatteam.com</a></li>
                        <li><a href="mailto:firstaid@redbatteam.com" class="hover:text-red-400">firstaid@redbatteam.com</a></li>
                    </ul>
                </div>

                <!-- Formação -->
                <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-6">
                    <h3 class="text-xl font-bold flex items-center gap-2">🎓 Formação & Awareness</h3>
                    <p class="mt-2 text-neutral-300">Capacitação técnica e sensibilização</p>
                    <ul class="mt-4 space-y-2 text-sm">
                        <li><a href="mailto:mentors@redbatteam.com" class="hover:text-red-400">mentors@redbatteam.com</a></li>
                        <li><a href="mailto:academy@redbatteam.com" class="hover:text-red-400">academy@redbatteam.com</a></li>
                        <li><a href="mailto:dojo@redbatteam.com" class="hover:text-red-400">dojo@redbatteam.com</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="bg-gradient-to-br from-red-700 via-red-600 to-red-700 text-white">
        <div class="mx-auto max-w-7xl px-6 py-16 text-center">
            <h3 class="text-3xl font-extrabold">Não sabe para onde escrever?</h3>
            <p class="mt-3 text-white/90">Use o canal <a href="mailto:contacto@redbatteam.pt" class="underline hover:text-white">contacto@redbatteam.pt</a> e encaminhamos internamente.</p>
        </div>
    </section>
@endsection
