<header class="bg-[#395886] fixed top-0 w-full z-10 rounded-b-lg">
    <nav class="flex justify-between items-center w-[92%] mx-auto">        
        @auth
        <div>
            <a href=""><img class="w-32 hover:scale-105 duration-300" src="/assets/logo-web-terbaru.png" alt="" srcset=""></a>
        </div>
            <!--tombol burger-->
            <div class="absolute top-0 right-0 mr-4 mt-4 block sm:hidden">
                <button id="menu-toggle" class="text-[#638ECB] focus:outline-none">
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6h16v2H4V6zm0 5h16v2H4v-2zm0 5h16v2H4v-2z" />
                    </svg>
                </button>
            </div>
            
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-2">
                        <a href="{{ route('material') }}" 
                            class="text-white duration-300 px-3 py-2 text-base font-medium 
                            {{ ($active == 'Materi') ? 'bg-[#8AAEED] rounded-md text-white' : 'hover:underline-rounded hover:scale-105' }}">
                            Materi
                        </a>
                        <a href="{{ route('leaderboard.index') }}" 
                            class="text-white duration-300 px-3 py-2 text-base font-medium 
                            {{ ($active == 'Leaderboard') ? 'bg-[#8AAEED] rounded-md text-white' : 'hover:underline-rounded hover:scale-105' }}">
                            Leaderboard
                        </a>
                        <a href="{{ route('forums.index') }}" 
                            class="text-white duration-300 px-3 py-2 text-base font-medium 
                            {{ ($active == 'Forum Diskusi') ? 'bg-[#8AAEED] rounded-md text-white' : 'hover:underline-rounded hover:scale-105' }}">
                            Forum Diskusi
                        </a>

                    </div>
                </div>
            </div>
            <div class="hidden sm:ml-6 sm:block">
                <div>
                    <span id="dropdown-toggle" class="text-white hover:underline-rounded hover:scale-105 duration-300 px-3 py-2 text-base font-medium">Halo, {{ auth()->user()->name }}</span>
                </div>

                <ul id="dropdown-menu" class="absolute hidden bg-[#B1C9EF] shadow-lg mt-2 py-1 w-56 text-base font-medium rounded-md">
                    <li class="px-6 py-2  {{ ($active == "Profil Siswa") ? 'bg-[#395886] rounded-md text-white hover:text-white' : '' }}">
                        <a href="{{ route('profil.siswa') }}"><i class="bi bi-person-gear"></i> Profil</a>
                    </li>
                    <li class="px-6 py-2 mt-0">
                        <form id="logoutForm" action="/logout" method="post">
                            @csrf
                            <button type="submit" id="logoutButton"><i class="bi bi-box-arrow-right"></i> Keluar</button>
                        </form>
                    </li>
                </ul>
            </div>
        @endauth
    </nav>
    <div id="mobile-menu" class="sm:hidden bg-[#395886] hidden rounded-b-lg">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ route('material') }}" class="block px-3 py-2 rounded-md text-base font-medium text-[#8AAEED] {{ ($active == "Materi") ? 'bg-[#8AAEED] rounded-md text-white' : ''}}">Materi</a>
            <a href="{{ route('leaderboard.index') }}" class="block px-3 py-2 rounded-md text-base font-medium text-[#8AAEED] {{ ($active == "Leaderboard") ? 'bg-[#8AAEED] rounded-md text-white' : ''}}">Leaderboard</a>
            <a href="{{ route('forums.index') }}" class="block px-3 py-2 rounded-md text-base font-medium text-[#8AAEED] {{ ($active == "Forum Diskusi") ? 'bg-[#8AAEED] rounded-md text-white' : ''}}"">Forum Diskusi</a>
            <a href="{{ route('profil.siswa') }}" class="block px-3 py-2 rounded-md text-base font-medium text-[#8AAEED] {{ ($active == "Profil Siswa") ? 'bg-[#8AAEED] rounded-md text-white' : ''}}">Profil</a>
            <form id="logoutForm" action="/logout" method="post">
                @csrf
                <button type="submit" class="text-[#8AAEED] text-base font-medium px-3 py-1">Keluar</button>
            </form>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle menu on mobile
        var menuToggle = document.getElementById('menu-toggle');
        if (menuToggle) {
            menuToggle.addEventListener('click', function() {
                var mobileMenu = document.getElementById('mobile-menu');
                if (mobileMenu) {
                    mobileMenu.classList.toggle('hidden');
                }
            });
        }

        var dropdownToggle = document.getElementById('dropdown-toggle');
        var dropdownMenu = document.getElementById('dropdown-menu');
        if (dropdownToggle && dropdownMenu) {
            dropdownToggle.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });
        }

        // Close dropdown menu when clicking outside
        document.addEventListener('click', function(event) {
            var dropdownMenu = document.getElementById('dropdown-menu');
            var dropdownToggle = document.getElementById('dropdown-toggle');
            if (dropdownMenu && dropdownToggle && !dropdownToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });

        var logoutForm = document.getElementById('logoutForm');
        if (logoutForm) {
            logoutForm.addEventListener('submit', function(e) {
                e.preventDefault(); //mencegah aksi default dari form, yaitu pengiriman data ke server.
                var confirmation = confirm('Apakah Anda yakin ingin logout?');
                if (confirmation) {
                    this.submit();
                } else {
                    alert('Logout dibatalkan.');
                }
            });
        }
    });
</script>

