<span class="absolute text-white text-4xl top-5 left-4 cursor-pointer" onclick="Open()">
    <i class="bi bi-filter-left px-2 bg-[#314C74] rounded-md"></i>
</span>
<div class="sidebar fixed top-0 bottom-0 lg:left-0 left-[-300px] p-2 w-[250px] overflow-y-auto text-center bg-[#314C74] rounded-r-lg">   
    <div class="flex justify-center">
        <a href=""><img class="w-36 object-contain" src="/assets/logo-web-terbaru.png" alt="" srcset=""></a>
        <i class="bi bi-x-lg text-white ml-20 cursor-pointer lg:hidden" onclick="Open()"></i>
    </div>
    <hr class="my-2 border-b-3 border-[#21334F]">

    <a href="{{ route('materialdashboard') }}">
        <div class="p-2.5 mt-1 flex rounded-md px-4 duration-300 cursor-pointer hover:bg-[#8AAEED] text-white
        {{ ($active == "Materi") ? 'bg-[#8AAEED] rounded-md text-white hover:text-white' : '' }}">
            <i class="bi bi-file-earmark-text"></i>
            <span class="text-[15px] ml-4 text-[#F0F3FA]"> Materi</span>
        </div>
    </a>

    <a href="{{ route('leaderboard.indexDasboard') }}">
        <div class="p-2.5 mt-1 flex rounded-md px-4 duration-300 cursor-pointer hover:bg-[#8AAEED] text-white
        {{ ($active == "Leaderboard") ? 'bg-[#8AAEED] rounded-md text-white hover:text-white' : '' }}">
            <i class="bi bi-file-earmark-bar-graph"></i>
            <span class="text-[15px] ml-4 text-[#F0F3FA]"> <i>Leaderboard</i> Siswa</span>
        </div>
    </a>
    
    <a href="{{ route('questions.index') }}">
        <div class="p-2.5 mt-1 flex rounded-md px-4 duration-300 cursor-pointer hover:bg-[#8AAEED] text-white
        {{ ($active == "Daftar Pertanyaan Live Coding") ? 'bg-[#8AAEED] rounded-md text-white hover:text-white' : '' }}">
            <i class="bi bi-file-earmark-code"></i>
            <span class="text-[15px] ml-4 text-[#F0F3FA] text-left"> Daftar Pertanyaan <i>Live Coding</i></span>
        </div>
    </a>
    <a href="{{ route('answers.index') }}">
        <div class="p-2.5 mt-1 flex rounded-md px-4 duration-300 cursor-pointer hover:bg-[#8AAEED] text-white
        {{ ($active == "Daftar Jawaban Live Coding") ? 'bg-[#8AAEED] rounded-md text-white hover:text-white' : '' }}">
            <i class="bi bi-filetype-py"></i>
            <span class="text-[15px] ml-4 text-[#F0F3FA] text-left"> Daftar Jawaban <i>Live Coding</i></span>
        </div>
    </a>
    <a href="{{ route('forumsdashboard.index') }}">
        <div class="p-2.5 mt-1 flex rounded-md px-4 duration-300 cursor-pointer hover:bg-[#8AAEED] text-white
        {{ ($active == "Forum Diskusi") ? 'bg-[#8AAEED] rounded-md text-white hover:text-white' : '' }}">
            <i class="bi bi-chat-left-text"></i>
            <span class="text-[15px] ml-4 text-[#F0F3FA]"> Forum Diskusi</span>
        </div>
    </a>
    @if (auth()->user()->level=="admin")
        <a href="{{ route('userlist.index') }}">
            <div class="p-2.5 mt-1 flex rounded-md px-4 duration-300 cursor-pointer hover:bg-[#8AAEED] text-white
            {{ ($active == "Daftar Pengguna") ? 'bg-[#8AAEED] rounded-md text-white hover:text-white' : '' }}">
                <i class="bi bi-people-fill"></i>
                <span class="text-[15px] ml-4 text-[#F0F3FA] text-left"> Daftar Akun Pengguna</span>
            </div>
        </a>
    @endif
    
    <hr class="my-2 border-b-3 border-[#21334F]">

    <a href="{{ route('profil.dashboard') }}">
        <div class="p-2.5 mt-1 flex rounded-md px-4 duration-300 cursor-pointer hover:bg-[#8AAEED] text-white
        {{ ($active == "Profil") ? 'bg-[#8AAEED] rounded-md text-white hover:text-white' : '' }}">
            <i class="bi bi-person-gear"></i>
            <span class="text-[15px] ml-4 text-[#F0F3FA]"> Profil</span>
        </div>
    </a>

    <form id="logoutForm" action="/keluar" method="post">
        @csrf
        <div class="p-2.5 mt-1 flex rounded-md px-4 duration-300 cursor-pointer hover:bg-[#8AAEED] text-white">
            <button type="submit">
                <i class="bi bi-box-arrow-right"></i>
                <span class="text-[15px] ml-4 text-[#F0F3FA]">Keluar</span>
            </button>
        </div>
    </form>
</div>

<script>
    function Open() {
        const sidebar = document.querySelector('.sidebar');
        sidebar.classList.toggle('left-0');

        // Cek apakah sidebar terbuka atau tidak
        const isOpen = sidebar.classList.contains('left-0');
    }

    document.addEventListener('DOMContentLoaded', function() {
        var logoutForm = document.getElementById('logoutForm');
        if (logoutForm) {
            logoutForm.addEventListener('submit', function(e) {
                e.preventDefault(); // Prevent form submission
                var confirmation = confirm('Apakah Anda yakin ingin logout?');
                if (confirmation) {
                    this.submit(); // Submit the form if user confirms
                } else {
                    alert('Logout dibatalkan.');
                }
            });
        }
    });
</script>