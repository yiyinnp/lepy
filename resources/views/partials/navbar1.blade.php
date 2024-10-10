<header class="bg-[#395886] fixed top-0 w-full z-10 rounded-b-lg">
    <nav class="flex justify-between items-center w-[92%] mx-auto">
        <div>
            <a href="/"><img class="w-32 hover:scale-105 duration-300" src="/assets/logo-web-terbaruu.png" alt="" srcset=""></a>
        </div>
        
        @guest
        <div class="absolute top-0 right-0 mr-4 mt-4 block sm:hidden">
            <button id="menu-toggle" class="text-[#638ECB] focus:outline-none">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6h16v2H4V6zm0 5h16v2H4v-2zm0 5h16v2H4v-2z" />
                </svg>
            </button>
        </div>
        
        <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-6">
                <a href="#beranda"><button class="py-2 font-semibold text-white hover:scale-105 hover:border-b-2 hover:border-white duration-300">Beranda</button></a>
                <a href="#infopembaca"><button class="py-2 font-semibold text-white hover:scale-105 hover:border-b-2 hover:border-white duration-300">Info Pembaca</button></a>
                <a href="#infopengembang"><button class="py-2 font-semibold text-white hover:scale-105 hover:border-b-2 hover:border-white duration-300">Info Pengembang</button></a>
                <a href="/login"><button class="bg-[#638ECB] w-28 py-2 font-semibold text-white rounded-lg hover:scale-105">Mulai</button></a>
            </div>
        </div>
        @endguest
        
    </nav>
    <div id="mobile-menu" class="sm:hidden bg-[#395886] hidden rounded-b-lg">
        <div class="px-2 pb-3 space-y-1">
            <a href="#beranda"><button class="block px-3 py-2 font-medium text-white">Beranda</button></a>
            <a href="#infopembaca" class="block px-3 py-2 rounded-md text-base font-medium text-white">Info Pembaca</button></a>
            <a href="#infopengembang" class="block px-3 py-2 rounded-md text-base font-medium text-white">Info Pengembang</button></a>
            <a href="/login"><button class="block px-3 py-2 font-medium text-white rounded-md">Login</button></a>
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

