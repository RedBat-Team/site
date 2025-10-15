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

    <!-- Sobre a RedBatTeam -->
    <section class="bg-gradient-to-b from-neutral-900 to-neutral-800 text-white">
        <div class="mx-auto max-w-7xl px-6 py-16 grid gap-10 lg:grid-cols-2">
            <div class="space-y-4">
                <h2 class="text-2xl sm:text-3xl font-bold">Sobre a RedBatTeam</h2>
                <p class="text-neutral-300">
                    A RedBatTeam nasceu da vontade de transformar risco em ação.
                </p>
                <p class="text-neutral-300">
                    Tudo começou na <span class="font-medium text-white">Batalha, Portugal</span> — uma terra de história e resiliência, que também inspirou o nome do projeto.
                    “Bat” é o diminutivo carinhoso da localidade, mas também evoca o <span class="font-medium text-white">morcego</span>, símbolo central da nossa identidade.
                    Os morcegos representam <span class="font-medium text-white">vigilância invisível, precisão e proteção contínua</span> — tal como as equipas Red e Blue Team
                    na cibersegurança: <span class="italic">resilientes, adaptáveis e silenciosas</span>, como queremos que sejam as defesas digitais das organizações que protegemos.
                </p>
                <p class="text-neutral-300">
                    O fundador, natural da Batalha, sempre foi movido por uma paixão pela engenharia e uma preocupação profunda com a pegada digital, a privacidade dos dados
                    e os perigos crescentes do cibercrime. Após ouvir especialistas, analisar o mercado e as necessidades reais das empresas portuguesas, decidiu transformar essa
                    inquietação em ação concreta.
                </p>
                <p class="text-neutral-300">
                    Assim nasceu a RedBatTeam — <span class="font-medium text-white">equipa multidisciplinar</span> especializada em serviços ofensivos e defensivos.
                    Combinamos <span class="font-medium text-white">Red Teaming, pentesting, resposta a incidentes, hardening</span> e <span class="font-medium text-white">conformidade</span>
                    para elevar a maturidade digital e reduzir o risco operacional.
                </p>
                <p class="text-neutral-300">
                    O “Red” no nosso nome remete diretamente ao <span class="font-medium text-white">Red Teaming</span> — simulações éticas de ataque que testam a segurança de sistemas e pessoas.
                    É a nossa abordagem <span class="font-medium text-white">proativa, precisa e combativa</span> contra vulnerabilidades, alinhada com a simbologia dos morcegos como vigilantes invisíveis.
                </p>
                <p class="text-neutral-300">
                    Trabalhamos com empresas que valorizam a privacidade e a segurança, especialmente <span class="font-medium text-white">organizações com &gt;50 colaboradores</span>,
                    <span class="font-medium text-white">faturação &gt; €10M</span> e/ou <span class="font-medium text-white">entidades na cadeia de valor</span> sujeitas à diretiva <span class="font-medium text-white">NIS2</span>.
                </p>
                <p class="text-neutral-300">
                    Mais do que uma empresa de cibersegurança, somos um <span class="font-medium text-white">projeto com propósito</span>: proteger pessoas e organizações, assegurar a continuidade do negócio
                    e construir um futuro digital mais seguro, resiliente e confiável.
                </p>
            </div>

            <!-- Cartão fundador / foco -->
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

    <!-- Missão -->
    <section class="bg-neutral-900 text-white">
        <div class="mx-auto max-w-7xl px-6 py-16">
            <h2 class="text-2xl sm:text-3xl font-bold">A nossa missão</h2>
            <div class="mt-6 space-y-4 text-neutral-300">
                <p>
                    Fortalecer a defesa digital das organizações, <span class="font-medium text-white">transformando vulnerabilidades em resiliência</span>.
                </p>
                <p>
                    Vivemos numa era em que o cibercrime evolui a cada segundo e onde a privacidade e a segurança dos dados são ativos estratégicos.
                    Ajudamos empresas portuguesas — especialmente as de dimensão crítica ou inseridas na cadeia de valor — a <span class="font-medium text-white">antecipar ameaças</span>,
                    <span class="font-medium text-white">proteger equipas</span> e <span class="font-medium text-white">garantir continuidade</span>.
                </p>
                <p>
                    A cibersegurança não é só resposta: é <span class="font-medium text-white">postura proativa</span>. Como os morcegos que nos inspiram — vigilantes, precisos e adaptáveis —
                    operamos com discrição, rigor e eficácia. O “Red” representa a nossa vertente ofensiva: <span class="font-medium text-white">Red Teaming, pentesting e simulações éticas</span>.
                </p>
                <p>
                    Complementamos com práticas defensivas: <span class="font-medium text-white">hardening, conformidade e resposta a incidentes</span>, apoiando requisitos como o
                    <span class="font-medium text-white">Selo de Maturidade Digital</span> e o <span class="font-medium text-white">Selo NIS2</span>.
                </p>
                <p>
                    Protegemos o que importa — <span class="font-medium text-white">dados, pessoas e continuidade do negócio</span> — com confiança, inovação, segurança e privacidade.
                </p>
            </div>
        </div>
    </section>

    <!-- Equipa -->
    <section class="bg-gradient-to-b from-neutral-900 to-neutral-800 text-white">
        <div class="mx-auto max-w-7xl px-6 py-16">
            <h2 class="text-2xl sm:text-3xl font-bold">A nossa equipa</h2>
            <div class="mt-6 grid gap-6 md:grid-cols-3">
                <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-6">
                    <p class="text-xl">🦇</p>
                    <h3 class="mt-3 font-semibold text-lg">Red Teaming</h3>
                    <p class="mt-2 text-neutral-300">Simulações de ataque com precisão cirúrgica para testar limites de segurança.</p>
                </div>
                <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-6">
                    <p class="text-xl">🧪</p>
                    <h3 class="mt-3 font-semibold text-lg">Pentesting</h3>
                    <p class="mt-2 text-neutral-300">Descoberta de vulnerabilidades e recomendações técnicas robustas.</p>
                </div>
                <div class="rounded-2xl border border-neutral-700 bg-neutral-900 p-6">
                    <p class="text-xl">🏛️</p>
                    <h3 class="mt-3 font-semibold text-lg">Governança & Conformidade</h3>
                    <p class="mt-2 text-neutral-300">Políticas e processos à medida, alinhados com requisitos legais e operacionais (ex.: NIS2).</p>
                </div>
            </div>
            <p class="mt-6 text-neutral-300">
                Cada membro traz uma visão única, mas partilhamos o compromisso com <span class="font-medium text-white">privacidade, resiliência</span> e
                <span class="font-medium text-white">continuidade</span>. Não há soluções genéricas — há talento, método e dedicação à medida de cada desafio.
            </p>
        </div>
    </section>

    <!-- Valores -->
    <section class="bg-neutral-900 text-white">
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
    <section class="bg-gradient-to-b from-neutral-900 to-neutral-800 text-white">
        <div class="mx-auto max-w-7xl px-6 py-16">
            <h2 class="text-2xl sm:text-3xl font-bold">Certificações & Metodologias</h2>
            <div class="mt-6 flex flex-wrap gap-2">
                <span class="px-3 py-1 text-xs rounded-full bg-white/10 ring-1 ring-white/10">OSCP</span>
                <span class="px-3 py-1 text-xs rounded-full bg-white/10 ring-1 ring-white/10">eJPT</span>
                <span class="px-3 py-1 text-xs rounded-full bg-white/10 ring-1 ring-white/10">eCIR</span>
                <span class="px-3 py-1 text-xs rounded-full bg-white/10 ring-1 ring-white/10">MITRE ATT&CK</span>
                <span class="px-3 py-1 text-xs rounded-full bg-white/10 ring-1 ring-white/10">OWASP</span>
                <span class="px-3 py-1 text-xs rounded-full bg-white/10 ring-1 ring-white/10">CIS Benchmarks</span>
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
