<div x-data
        class="fixed"
          

        <!-- Mobile Menu -->
        <button @click="$store.sidebar.navOpen = !$store.sidebar.navOpen"
                class="sm:hidden absolute top-5 right-5 focus:outline-none">
            <!-- Menu Icons -->
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="h-6 w-6"
                 x-bind:class="$store.sidebar.navOpen ? 'hidden':''"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M4 6h16M4 12h16m-7 6h7" />
            </svg>

            <!-- Close Menu -->
            <svg x-cloak
                 xmlns="http://www.w3.org/2000/svg"
                 class="h-6 w-6"
                 x-bind:class="$store.sidebar.navOpen ? '':'hidden'"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="h-screen bg-gray-900 transition-all duration-300 space-y-2 sm:relative"
             x-bind:class="{'w-64': $store.sidebar.full, 'w-64 sm:w-20':!$store.sidebar.full, 'top-0 left-0':$store.sidebar.navOpen, 'top-0 -left-64 sm:left-0':!$store.sidebar.navOpen}">
             
            <!-- LOGOMARCA NOME DA EMPRESA -->
            <h1 class="text-white font-black py-4"
                x-bind:class="$store.sidebar.full ? 'text-2xl px-4 text-center' : 'text-center text-sm px-4 xm:px-2'"><a href="/">Admin Home</a></h1>
            

            <div class="px-4 space-y-2">

                <!-- Sidebar Toggle-->
                <button @click="$store.sidebar.full = !$store.sidebar.full"
                        class="hidden sm:block focus:outline-none absolute p-1 -right-3 top-10 bg-gray-900 rounded-full shadow-md"
                        >
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-4 w-4 transition-all duration-300 text-white transform"
                         x-bind:class="$store.sidebar.full ? 'rotate-90' : '-rotate-90'"
                         viewBox="0 0 20 20"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd" />
                    </svg>

                </button>
                

                <!-- Home  -->
                <a href="{{ route('admin.home') }}">
                    <div x-data="tooltip"
                         x-on:mouseover="show = true"
                         x-on:mouseleave="show = false"
                         @click="$store.sidebar.active = 'home'"
                         class="relative flex items-center text-gray-400 hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer"
                         x-bind:class="{'justify-start' : $store.sidebar.full, 'sm:justify-center' : !$store.sidebar.full, 'text-gray-200 bg-gray-800' : $store.sidebar.active=='home'}"
                         >
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <h1 x-cloak
                            x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ? 'sm:hidden' : ''">Dashboard</h1>
                    </div>
                </a>

                <!-- Master Data -->
                <div x-data="dropdown"
                     class="relative">

                    <div x-data="tooltip"
                         x-on:mouseover="show = true"
                         x-on:mouseleave="show = false"
                         @click="toggle('masterdata')"
                         class="flex justify-between items-center text-gray-400 hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer"
                         x-bind:class="{'justify-start' : $store.sidebar.full, 'sm:justify-center':!$store.sidebar.full, 'text-gray-200 bg-gray-800':$store.sidebar.active == 'masterdata', 'text-gray-400':$store.sidebar.active != 'masterdata'}">
                        <div class="relative flex space-x-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-6 w-6"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <h1 x-cloak
                                x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ? 'sm:hidden' : ''">Master Data</h1>
                        </div>
                        <svg x-cloak
                             x-bind:class="$store.sidebar.full ? '' : 'sm:hidden'"
                             xmlns="http://www.w3.org/2000/svg"
                             class="h-4 w-4"
                             viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd" />
                        </svg>
                    </div>
                    <!-- Itens DropDown -->
                    <div x-cloak
                         x-show="open"
                         x-transition:enter=">>"
                         @click.outside="open=false"
                         x-bind:class="$store.sidebar.full ? expandedClass : shrinkedClass"
                         class="text-gray-400 space-y-3">
                        <h1>
                            <a class="hover:text-gray-200 cursor-pointer" href="{{ route('masteruser.index') }}">Master User</a>                            
                        </h1>
                        <h1>
                            <a class="hover:text-gray-200 cursor-pointer" href="{{ route('mastercompany.index') }}">Master Perusahaan</a>
                        </h1>
                        <h1>
                            <a class="hover:text-gray-200 cursor-pointer" href="{{ route('mastervacancy.index') }}">Master Lowongan</a>
                        </h1>
                        <h1>
                            <a class="hover:text-gray-200 cursor-pointer" href="{{ route('mastersiswa.index') }}">Master Siswa</a>
                        </h1>
                    </div>
                </div>

                {{-- Master Dataset --}}
                <div x-data="dropdown"
                     class="relative">

                    <div x-data="tooltip"
                         x-on:mouseover="show = true"
                         x-on:mouseleave="show = false"
                         @click="toggle('dataset')"
                         class="flex justify-between items-center text-gray-400 hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer"
                         x-bind:class="{'justify-start' : $store.sidebar.full, 'sm:justify-center':!$store.sidebar.full, 'text-gray-200 bg-gray-800':$store.sidebar.active == 'dataset', 'text-gray-400':$store.sidebar.active != 'dataset'}">
                        <div class="relative flex space-x-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                            </svg>                              
                            <h1 x-cloak
                                x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ? 'sm:hidden' : ''">Dataset</h1>
                        </div>
                        <svg x-cloak
                             x-bind:class="$store.sidebar.full ? '' : 'sm:hidden'"
                             xmlns="http://www.w3.org/2000/svg"
                             class="h-4 w-4"
                             viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd" />
                        </svg>
                    </div>
                    <!-- Itens DropDown -->
                    <div x-cloak
                         x-show="open"
                         x-transition:enter=">>"
                         @click.outside="open=false"
                         x-bind:class="$store.sidebar.full ? expandedClass : shrinkedClass"
                         class="text-gray-400 space-y-3">
                        <h1>
                            <a class="hover:text-gray-200 cursor-pointer" href="{{ route('skills.index') }}">Skills</a>                            
                        </h1>
                        <h1>                        
                            <a class="hover:text-gray-200 cursor-pointer" href="{{ route('jurusan.index') }}">Jurusan</a>                            
                        </h1>
                    </div>
                </div>

                
                 {{-- Content Logout --}}
                 {{-- <div x-data="{ modelOpen: false }">
                    <div class="d-none flex justify-center">
                        <button @click="modelOpen =!modelOpen" class="text-center mx-auto my-14 h-10 w-10 bg-slate-100 rounded-full shadow transform hover:scale-110 transition duration-300 hover:text-red-600 hover:bg-slate-200">
                            <i class="fas fa-sign-out fa-lg text-red-500 py-2.5 duration-300"></i>
                        </button>
                    </div>
                    <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                        <div class="flex items-center justify-center min-h-screen px-4 text-center sm:block sm:p-0">
                            <div x-cloak x-show="modelOpen" 
                                x-transition:enter="transition ease-out duration-300 transform"
                                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                x-transition:leave="transition ease-in duration-200 transform"
                                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                class="inline-block w-full max-w-xl my-20 overflow-hidden text-left transition-all transform rounded-lg shadow-xl 2xl:max-w-2xl"
                            >
                                
                                <div class="relative bg-white rounded-lg shadow ">
                                    <div class="flex items-center justify-end space-x-4">
                                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-6 text-center ">
                                        <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        <h3 class="mb-5 text-lg font-normal text-gray-500 ">Apakah anda yakin untuk keluar?</h3>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none flex justify-center"
                                        x-bind:class="!$store.sidebar.full && show ? '' : 'justify-center'" >
                                        @csrf
                                        <button type="submit" data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm items-center mx-2 px-5 py-2.5 text-center mr-2">
                                            Ya
                                        </button>
                                        <button @click="modelOpen = false" data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium mx-2 px-5 py-2.5 hover:text-gray-900 focus:z-10 ">
                                            Tidak, batalkan
                                        </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                
                

                {{-- <!-- Posts -->
                <div @click="$store.sidebar.active = 'posts'"
                     class="relative flex justify-between items-center text-gray-400 hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer"
                     x-bind:class="{'justify-start' : $store.sidebar.full, 'sm:justify-center':!$store.sidebar.full, 'text-gray-200 bg-gray-800':$store.sidebar.active == 'posts', 'text-gray-400':$store.sidebar.active != 'posts'}">
                    <div x-data="tooltip"
                         x-on:mouseover="show = true"
                         x-on:mouseleave="show = false"
                         class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <h1 x-cloak
                            x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ? 'sm:hidden' : ''">Posts</h1>
                    </div>
                    <h1 x-bind:class="$store.sidebar.full ? '' : 'sm:hidden'" 
                        class="w-5 h-5 p-1 bg-green-400 rounded-sm text-sm leading-3 text-center text-gray-900">8</h1>
                </div>

                <!-- Schedules -->
                <div @click="$store.sidebar.active = 'schedules'" class="relative flex justify-between items-center text-gray-400 hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer"
                     x-bind:class="{'justify-start' : $store.sidebar.full, 'sm:justify-center':!$store.sidebar.full, 'text-gray-200 bg-gray-800':$store.sidebar.active == 'schedules', 'text-gray-400':$store.sidebar.active != 'schedules' }">
                    <div x-data="tooltip"
                         x-on:mouseover="show = true"
                         x-on:mouseleave="show = false"
                         class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <h1 x-cloak
                            x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ? 'sm:hidden' : ''">Schedules</h1>
                    </div>
                    <div x-cloak
                         class="flex items-center space-x-2"
                         x-bind:class="$store.sidebar.full ? '' : 'sm:hidden'">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="1"
                                  d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h1 class="w-5 h-5 p-1 bg-pink-400 rounded-sm text-sm leading-3 text-center text-gray-900">3</h1>
                    </div>
                </div>

                <!-- Income -->
                <div x-data="dropdown"
                     class="relative">
                    <div x-data="tooltip"
                         x-on:mouseover="show = true"
                         x-on:mouseleave="show = false"
                         @click="toggle('income')"
                         class="flex justify-between items-center text-gray-400 hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer"
                         x-bind:class="{'justify-start' : $store.sidebar.full, 'sm:justify-center':!$store.sidebar.full, 'text-gray-200 bg-gray-800':$store.sidebar.active == 'income', 'text-gray-400':$store.sidebar.active != 'income' }">
                        <div class="relative flex space-x-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-6 w-6"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                            </svg>
                            <h1 x-cloak
                                x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ? 'sm:hidden' : ''">Income</h1>
                        </div>
                        <svg x-cloak
                             x-bind:class="$store.sidebar.full ? '':'sm:hidden'"
                             xmlns="http://www.w3.org/2000/svg"
                             class="h-4 w-4"
                             viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd" />
                        </svg>
                    </div>

                    <!-- Itens DropDown -->
                    <div x-cloak
                         x-show="open"
                         @click.outside="open=false"
                         x-bind:class="$store.sidebar.full ? expandedClass : shrinkedClass"
                         class="text-gray-400 space-y-3">
                        <h1 class="hover:text-gray-200 cursor-pointer">Item 1</h1>
                        <h1 class="hover:text-gray-200 cursor-pointer">Item 2</h1>
                        <!-- Sub DropDown -->
                        <div x-data="sub_dropdown"
                             class="relative w-full">
                            <div @click="sub_toggle()"
                                 class="flex items-center justify-between cursor-pointer">
                                <h1 class="hover:text-gray-200 cursor-pointer">Item 3</h1>
                                <svg x-bind:class="{'justify-start' : $store.sidebar.full, 'sm:justify-center':!$store.sidebar.full }"
                                     xmlns="http://www.w3.org/2000/svg"
                                     class="h-4 w-4"
                                     viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                          clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div x-show="sub_open"
                                 @click.outside="sub_open = false"
                                 x-bind:class="$store.sidebar.full ? sub_expandedClass : sub_shrinkedClass">
                                <h1 class="hover:text-gray-200 cursor-pointer">Sub Item 1</h1>
                                <h1 class="hover:text-gray-200 cursor-pointer">Sub Item 2</h1>
                                <h1 class="hover:text-gray-200 cursor-pointer">Sub Item 3</h1>
                            </div>
                        </div>

                        <h1 class="hover:text-gray-200 cursor-pointer">Item 4</h1>
                    </div>
                </div>

                <!-- Promote -->
                <div x-data="dropdown"
                     class="relative">
                    <div x-data="tooltip"
                         x-on:mouseover="show = true"
                         x-on:mouseleave="show = false"
                         @click="toggle('promote')"
                         class="flex justify-between items-center text-gray-400 hover:text-gray-200 hover:bg-gray-800 space-x-2 rounded-md p-2 cursor-pointer"
                         x-bind:class="{'justify-start' : $store.sidebar.full, 'sm:justify-center':!$store.sidebar.full, 'text-gray-200 bg-gray-800':$store.sidebar.active == 'promote', 'text-gray-400':$store.sidebar.active != 'promote' }">
                        <div class="relative flex space-x-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-6 w-6"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                            </svg>
                            <h1 x-cloak
                                x-bind:class="!$store.sidebar.full && show ? visibleClass : '' || !$store.sidebar.full && !show ? 'sm:hidden' : ''">Promote</h1>
                        </div>
                        <svg x-cloak
                             x-bind:class="$store.sidebar.full ? '':'sm:hidden'"
                             xmlns="http://www.w3.org/2000/svg"
                             class="h-4 w-4"
                             viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd" />
                        </svg>
                    </div>

                    <!-- Itens DropDown -->
                    <div x-cloak
                         x-show="open"
                         @click.outside="open=false"
                         x-bind:class="$store.sidebar.full ? expandedClass : shrinkedClass"
                         class="text-gray-400 space-y-3">
                        <h1 class="hover:text-gray-200 cursor-pointer">Item 1</h1>
                        <h1 class="hover:text-gray-200 cursor-pointer">Item 2</h1>
                        <h1 class="hover:text-gray-200 cursor-pointer">Item 3</h1>
                        <h1 class="hover:text-gray-200 cursor-pointer">Item 4</h1>
                    </div>
                </div> --}}
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </div>