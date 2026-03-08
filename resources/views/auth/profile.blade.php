<x-layout.app>
    <x-slot name="title">Profile</x-slot>

    <!-- Hero Section -->
    <section
        class="relative bg-primary pt-32 pb-24 sm:pt-40 sm:pb-32 overflow-hidden isolate border-b-2 border-slate-100">
        <div class="absolute inset-0 -z-10 opacity-20"
            style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 32px 32px;"></div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center relative z-10">
            <h1 class="text-4xl font-black tracking-tight text-white mb-6">Ubah <span class="text-secondary">Profile</span>
            </h1>
            <p class="text-lg text-slate-300 max-w-3xl mx-auto font-medium">Kelola informasi akun Anda di sini.</p>
        </div>
    </section>

    <div class="bg-slate-50 py-16 px-4 sm:px-6 lg:px-8 text-slate-900 flex flex-col items-center">
        <div class="max-w-md w-full space-y-8 bg-white p-8 sm:p-10 rounded-3xl shadow-xl border border-slate-100">
            <div>
                <h2 class="text-center text-3xl font-black text-primary uppercase tracking-tight">
                    Profile Settings
                </h2>
                <p class="mt-2 text-center text-sm text-slate-600">
                    Perbarui informasi akun Anda
                </p>
            </div>

            @if (session('success'))
                <div class="bg-green-50 text-green-600 p-4 rounded-xl text-sm font-medium border border-green-100">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-red-50 text-red-500 p-4 rounded-xl text-sm border border-red-100">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="mt-8 space-y-6" action="{{ route('profile.update') }}" method="POST">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-slate-700">Nama Perusahaan /
                            Nama Lengkap</label>
                        <input id="name" name="name" type="text" autocomplete="name" required
                            value="{{ old('name', $user->name) }}"
                            class="mt-1 appearance-none relative block w-full px-4 py-3 border border-slate-300 placeholder-slate-400 text-slate-900 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary focus:border-secondary focus:z-10 sm:text-sm transition-colors"
                            placeholder="John Doe">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-700">Email</label>
                        <input id="email" name="email" type="email" autocomplete="email" required
                            value="{{ old('email', $user->email) }}"
                            class="mt-1 appearance-none relative block w-full px-4 py-3 border border-slate-300 placeholder-slate-400 text-slate-900 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary focus:border-secondary focus:z-10 sm:text-sm transition-colors"
                            placeholder="nama@email.com">
                    </div>

                    <div>
                        <label for="no_tlpn" class="block text-sm font-medium text-slate-700">No. Telepon
                            (WhatsApp)</label>
                        <input id="no_tlpn" name="no_tlpn" type="text" autocomplete="tel" required
                            value="{{ old('no_tlpn', $user->no_tlpn) }}"
                            class="mt-1 appearance-none relative block w-full px-4 py-3 border border-slate-300 placeholder-slate-400 text-slate-900 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary focus:border-secondary focus:z-10 sm:text-sm transition-colors"
                            placeholder="08123456789">
                    </div>

                    <div class="pt-4 border-t border-slate-100">
                        <p class="text-xs text-slate-500 mb-4">Kosongkan password jika tidak ingin mengubahnya.</p>
                        <div>
                            <label for="password" class="block text-sm font-medium text-slate-700">Password Baru</label>
                            <input id="password" name="password" type="password"
                                class="mt-1 appearance-none relative block w-full px-4 py-3 border border-slate-300 placeholder-slate-400 text-slate-900 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary focus:border-secondary focus:z-10 sm:text-sm transition-colors"
                                placeholder="Minimal 8 karakter">
                        </div>
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-slate-700">Konfirmasi
                            Password Baru</label>
                        <input id="password_confirmation" name="password_confirmation" type="password"
                            class="mt-1 appearance-none relative block w-full px-4 py-3 border border-slate-300 placeholder-slate-400 text-slate-900 rounded-xl focus:outline-none focus:ring-2 focus:ring-secondary focus:border-secondary focus:z-10 sm:text-sm transition-colors"
                            placeholder="Ulangi password baru">
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-bold rounded-xl text-primary bg-secondary hover:bg-secondary-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary transition-all shadow-md">
                        Simpan Perubahan
                    </button>
                </div>
            </form>

            <div class="pt-6 border-t border-slate-100">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="w-full flex justify-center py-3 px-4 border border-slate-200 text-sm font-bold rounded-xl text-red-500 bg-white hover:bg-red-50 hover:border-red-100 focus:outline-none transition-all">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout.app>
