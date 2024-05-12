<button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider" class="bg-[#29262d] rounded-[24px] text-[#666] hover:text-white hover:bg-[#65abec] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  <span class="inline-block mr-2 ">{{ Auth::user()->nickname}}</span>
  <img class="select-none rounded-full w-[30px]" src="{{ Auth::user()->avatar }}">

  </button>

  <!-- Dropdown menu -->
  <div id="dropdownDivider" class="z-10 hidden py-2 text-sm text-gray-700 dark:text-gray-200 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
      <ul class="" aria-labelledby="dropdownDividerButton">
        <li>
          <x-profile-link href="{{ route('profile') }}" text="Профиль"></x-profile-link>
        </li>
        <li>
          <x-profile-link href='#' text="Настройки"></x-profile-link>
        </li>
      </ul>
      <div class="py-2">
        <x-profile-link href='{{ route("logout") }}' text="Выйти"></x-profile-link>
      </div>
  </div>