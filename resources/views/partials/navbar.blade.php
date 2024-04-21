<header class="bg-[#395886] fixed top-0 w-full z-10">
    <nav class="flex justify-between items-center w-[92%] mx-auto">
        <div>
            <a href=""><img class="w-32" src="/assets/logo-web-terbaru.png" alt="" srcset=""></a>
        </div>
        
        @guest
        <div class="flex items-center gap-6 font-medium text-lg text-[#8AAEED]">
            <a href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </div>   
        @endguest
        
        @auth
            <!--tombol burger-->
            <div class="absolute top-0 right-0 mr-4 mt-4 block sm:hidden">
                <button id="menu-toggle" class="text-[#8AAEED] focus:outline-none">
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6h16v2H4V6zm0 5h16v2H4v-2zm0 5h16v2H4v-2z" />
                    </svg>
                </button>
            </div>
            
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-2">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="{{ route('material') }}" class=" text-[#F0F3FA] hover:text-[#8AAEED] px-3 py-2 text-base font-medium {{ ($active == "Materi") ? 'bg-[#8AAEED] rounded-md text-white hover:text-white' : '' }}">Materi</a>
                        <a href="{{ route('leaderboard.index') }}" class="text-[#F0F3FA] hover:text-[#8AAEED] px-3 py-2 text-base font-medium {{ ($active == "Leaderboard") ? 'bg-[#8AAEED] rounded-md text-white hover:text-white' : '' }}">Leaderboard</a>
                        <a href="{{ route('infopengembang') }}" class="text-[#F0F3FA] hover:text-[#8AAEED] px-3 py-2 text-base font-medium {{ ($active == "Info Pengembang") ? 'bg-[#8AAEED] rounded-md text-white hover:text-white' : '' }}">Info Pengembang</a>
                    </div>
                </div>
            </div>
            <div class="hidden sm:ml-6 sm:block">
                <div>
                    <span id="dropdown-toggle" class="text-[#F0F3FA] hover:text-[#8AAEED] px-3 py-2 text-base font-medium">Selamat Datang, {{ auth()->user()->name }}</span>
                </div>

                <ul id="dropdown-menu" class="absolute hidden bg-[#B1C9EF] border-[#032030] shadow-lg mt-2 py-1 w-48 text-[#032030] text-base font-medium">
                    <li class="px-6 py-2 border-[#032030] {{ ($active == "Profil Siswa") ? 'bg-[#395886] rounded-md text-white hover:text-white' : '' }}">
                        <a href="{{ route('profil.siswa') }}"><i class="bi bi-person-gear"></i> Profil</a>
                    </li>
                    <li class="px-6 py-2 border-[#032030] {{ ($active == "Forum Diskusi") ? 'bg-[#395886] rounded-md text-white hover:text-white' : '' }}">
                        <a href="{{ route('forums.index') }}"><i class="bi bi-chat-left-text"></i> Forum Diskusi</a>
                    </li>
                    <li class="px-6 py-2">
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class=""><i class="bi bi-box-arrow-right"></i> Keluar</button>
                        </form>
                    </li>
                </ul>
            </div>
        @endauth
    </nav>
    <div id="mobile-menu" class="sm:hidden bg-[#39588] hidden">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ route('material') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white {{ ($active == "Materi") ? 'bg-[#8AAEED] rounded-md text-white' : ''}}">Materi</a>
            <a href="{{ route('leaderboard.index') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white {{ ($active == "Leaderboard") ? 'bg-[#8AAEED] rounded-md text-white' : ''}}">Leaderboard</a>
            <a href="{{ route('infopengembang') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white {{ ($active == "Info Pengembang") ? 'bg-[#8AAEED] rounded-md text-white' : ''}}">Info Pengembang</a>
            <a href="{{ route('profil.siswa') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white {{ ($active == "Profil Siswa") ? 'bg-[#8AAEED] rounded-md text-white' : ''}}">Profil</a>
            <a href="{{ route('forums.index') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white {{ ($active == "Forum Diskusi") ? 'bg-[#8AAEED] rounded-md text-white' : ''}}"">Forum Diskusi</a>
            <form action="/logout" method="post">
            @csrf
                <button type="submit" class="text-white px-3 py-1">Keluar</button>
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

        // Logout button action
        var logoutBtn = document.getElementById('logout-btn');
        if (logoutBtn) {
            logoutBtn.addEventListener('click', function() {
                // Perform logout action here
                console.log('Logout clicked');
            });
        }
    });
</script>

