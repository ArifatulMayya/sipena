<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
<nav class="w-1/4 bg-[#10296E] text-white h-screen p-4">
    <div class="flex items-center mb-12">
        <a href="/irsMhs" class="px-2 py-1">
            <i class="fas fa-chevron-left text-white"></i>
        </a>
       <a class="text-lg font-bold ml-5" href="/dosenBimbingan">Kembali</a>
    </div>
    <div class="flex flex-col items-center mb-8">
        <img src="{{asset('minion.jpg')}}" class="rounded-full mx-auto" width="100" alt="">
       <div class="ml-4 text-center">
          <p class="font-bold">Stefani Mayya Febria <p>
          <p> NIM : 240601221240179</p>
       </div>
    </div>
    <aside>
          <ul class="space-y-2">
                    <li class=" mx-4 py-2 hover:bg-[#2D4995] rounded-lg font-bold text-center">
                        <a href="/dashboardMhs">Dashboard</a>
                    </li>
                    <li class=" mx-4 py-2 hover:bg-[#2D4995] rounded-lg font-bold text-center">
                        <a href="/registrasi">Registrasi</a>
                    </li>
                    <li>
            <button
                type="button"
                class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg group hover:bg-[#2D4995]"
                aria-controls="dropdown-layouts"
                onclick="toggleDropdown()"
            >
                <span class="flex-1 ml-3 text-center whitespace-nowrap font-bold">Akademik</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                ></path>
                </svg>
            </button>
            <ul id="dropdown-layouts" class="hidden text-center mx-6 py-2 space-y-2">
                <li class="text-center">
                <a href="/buatIRSMhs" class="flex justify-center items-center p-2 hover:bg-[#2D4995] transition duration-75 rounded-lg group ">Buat IRS</a>
                </li>
                <li>
                <a href="/irsMhs" class="flex justify-center items-center p-2 hover:bg-[#2D4995] transition duration-75 rounded-lg group ">IRS</a>
                </li>
                <li>
                <a href="/khsMhs" class="flex justify-center items-center p-2 hover:bg-[#2D4995] transition duration-75 rounded-lg group ">KHS</a>
                </li>
                <li>
                <a href="/transkripMhs" class="flex justify-center items-center p-2 hover:bg-[#2D4995] transition duration-75 rounded-lg group">Transkrip</a>
                </li>
            </ul>
            </li>
         </ul>
       </aside>
 </nav>

 <script>
    function toggleDropdown() {
      const dropdown = document.getElementById('dropdown-layouts');
      // Toggle the 'hidden' class
      dropdown.classList.toggle('hidden');
    }
  </script>