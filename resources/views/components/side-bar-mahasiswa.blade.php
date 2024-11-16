<aside class="fixed z-30 pt-16 w-[17%] min-h-screen bg-[#10296E] text-white py-6 font-bold text-center">
    <ul class="mt-4">
        <li>
            <img src="{{asset('minion.jpg')}}" class="rounded-full mx-auto" width="100" alt="">
        </li>
        <li class="font-bold mt-4">Stefani Mayya Febria Hutagalung</li>
        <li class="border-b font-normal pb-2">NIM : 24060122129800</li>
    </ul>
    <ul class="space-y-2 my-4">
        <li class=" mx-4 py-2 hover:bg-[#2D4995] rounded-lg">
            <a href="">Dashboard</a>
        </li>
        <li class=" mx-4 py-2 hover:bg-[#2D4995] rounded-lg">
            <a href="">Registrasi</a>
        </li>
        <li>
          <button
            type="button"
            class="flex items-center w-full p-2 text-base transition duration-75 rounded-lg group hover:bg-[#2D4995]"
            aria-controls="dropdown-layouts"
            onclick="toggleDropdown()"
          >
            <span class="flex-1 ml-3 text-center whitespace-nowrap">Akademik</span>
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
              <a href="" class="flex justify-center items-center p-2 hover:bg-[#2D4995] transition duration-75 rounded-lg group ">Buat IRS</a>
            </li>
            <li>
              <a href="" class="flex justify-center items-center p-2 hover:bg-[#2D4995] transition duration-75 rounded-lg group ">IRS</a>
            </li>
            <li>
              <a href="" class="flex justify-center items-center p-2 hover:bg-[#2D4995] transition duration-75 rounded-lg group ">KHS</a>
            </li>
            <li>
              <a href="" class="flex justify-center items-center p-2 hover:bg-[#2D4995] transition duration-75 rounded-lg group">Transkrip</a>
            </li>
          </ul>
        </li>

    </ul>
</aside>