<x-guest-layout>
    <div class="flex flex-col justify-center items-center px-6 mx-auto pt-32 md:pt-0 md:h-screen pt:mt-0">
    <a href="{{ route('login') }}" class="flex justify-center items-center mb-8 text-2xl font-semibold lg:mb-10">
        <img src="https://www.casonadejerusalen.com/favicons/favicon.ico" class="mr-4 h-10" alt="logo">
        <span class="self-center text-2xl font-bold whitespace-nowrap">La Casona de Jerusalén</span> 
    </a>
    <!-- Card -->
    <div class="p-10 w-full max-w-lg bg-white rounded-2xl shadow-xl shadow-gray-300">
        <div class="space-y-8">
            <h2 class="text-2xl font-bold text-gray-900">
                Iniciar sesión
            </h2>
            {{-- <div class="grid grid-cols-3 gap-3 mt-6">
                <a href="#" class="inline-flex justify-center w-full px-5 py-2.5 text-sm font-medium text-[#4267B2] border border-gray-200 rounded-lg shadow-sm hover:bg-gray-50">
                    <svg class="w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.8 90.69 226.4 209.3 245V327.7h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.3 482.4 504 379.8 504 256z"></path></svg>
                </a>
                <a href="#" class="inline-flex justify-center w-full px-5 py-2.5 text-sm font-medium text-[#DB4437] border border-gray-200 rounded-lg shadow-sm hover:bg-gray-50">
                    <svg class="w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512"><path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path></svg>
                </a>
                <a href="#" class="inline-flex justify-center w-full px-5 py-2.5 text-sm font-medium text-[#00acee] border border-gray-200 rounded-lg shadow-sm hover:bg-gray-50">
                    <svg class="w-5 h-5" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.4 151.7c.325 4.548 .325 9.097 .325 13.65 0 138.7-105.6 298.6-298.6 298.6-59.45 0-114.7-17.22-161.1-47.11 8.447 .974 16.57 1.299 25.34 1.299 49.06 0 94.21-16.57 130.3-44.83-46.13-.975-84.79-31.19-98.11-72.77 6.498 .974 12.99 1.624 19.82 1.624 9.421 0 18.84-1.3 27.61-3.573-48.08-9.747-84.14-51.98-84.14-102.1v-1.299c13.97 7.797 30.21 12.67 47.43 13.32-28.26-18.84-46.78-51.01-46.78-87.39 0-19.49 5.197-37.36 14.29-52.95 51.65 63.67 129.3 105.3 216.4 109.8-1.624-7.797-2.599-15.92-2.599-24.04 0-57.83 46.78-104.9 104.9-104.9 30.21 0 57.5 12.67 76.67 33.14 23.72-4.548 46.46-13.32 66.6-25.34-7.798 24.37-24.37 44.83-46.13 57.83 21.12-2.273 41.58-8.122 60.43-16.24-14.29 20.79-32.16 39.31-52.63 54.25z"></path></svg>
                </a> 
            </div> --}}
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
                @csrf
                <div>
                    <x-apps.label for="email">Correo electrónico</x-apps.label>
                    <x-apps.input type="email" name="email" id="email" placeholder="mail@example.com" value="{{ old('email') }}">
                    </x-apps.input>
                </div>
                <div>
                    <x-apps.label for="password">Contraseña</x-apps.label>
                    <x-apps.input type="password" name="password" id="password" placeholder="••••••••" autocomplete="current-password">
                    </x-apps.input>
                </div>
                {{-- <div class="flex items-start">
                    <div class="flex items-center h-5">
                    <input id="remember" aria-describedby="remember" name="remember" type="checkbox" class="w-5 h-5  rounded border-gray-300 focus:outline-none focus:ring-0 checked:bg-dark-900" required="false">
                    </div>
                    <div class="ml-3 text-sm">
                        <x-apps.label for="remember">Recordarme</x-apps.label>
                    </div>
                    @if (Route::has('password.request'))
                        <x-apps.link href="{{ route('password.request') }}" class="pl-5">Olvidaste tu contraseña?</x-apps.link>
                    @endif
                </div> --}}
                <x-apps.button>Iniciar sesión</x-apps.button>
                {{-- <div class="text-sm font-medium text-gray-500">
                    No estas registrado?
                    <x-apps.link href="{{ route('register') }}">Crear cuenta</x-apps.link>
                </div> --}}
            </form>
        </div>
    </div>
</div>
</x-guest-layout>
