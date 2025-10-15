<!-- Footer -->
<footer class="bg-[#9e1c1c] text-neutral-300">
    <div class="mx-auto max-w-7xl px-6 py-12 grid md:grid-cols-4 gap-8">
        <div>
            <p class="text-lg font-bold text-white">RedBatTeam</p>
            <p class="mt-2 text-sm text-neutral-400">Cibersegurança ofensiva e defensiva.</p>
        </div>
        <div>
            <p class="font-semibold text-white">Serviços</p>
            <ul class="mt-3 space-y-2 text-sm">
                <li><a href="{{ route('services') }}" class="hover:text-white">Red Team</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-white">Pentesting</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-white">Blue Team</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-white">Cloud</a></li>
            </ul>
        </div>
        <div>
            <p class="font-semibold text-white">Empresa</p>
            <ul class="mt-3 space-y-2 text-sm">
                <li><a href="{{ route('about') }}" class="hover:text-white">Sobre</a></li>
                <li><a class="hover:text-white" href="#">Carreiras</a></li>
                <li><a class="hover:text-white" href="#">Política de Privacidade</a></li>
            </ul>
        </div>
        <div>
            <p class="font-semibold text-white">Contacto</p>
            <ul class="mt-3 space-y-2 text-sm">
                <li><a href="mailto:contacto@redbatteam.pt" class="hover:text-white">contacto@redbatteam.pt</a></li>
                <li>Lisboa, Portugal</li>
            </ul>
        </div>
    </div>
    <div class="border-t border-neutral-800">
        <div class="mx-auto max-w-7xl px-6 py-6 text-sm text-neutral-500 flex items-center justify-between">
            <p>© {{ now()->year }} RedBatTeam. Todos os direitos reservados.</p>
            <p>Feito com 🦇</p>
        </div>
    </div>
</footer>
