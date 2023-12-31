<div class="px-16 py-4 mb-4">
    <div class="max-w-5xl mx-auto relative" x-data="{
        activeSlide: 3,
        slides: [
            {id:1, title: 'KarirMu', body: 'Platform lowongan pekerjaan untuk siswa SMK', image: '{{ asset('car6.jpeg') }}'},
            {id:2, title: 'KarirMu', body: 'Platform lowongan pekerjaan untuk siswa SMK', image: '{{ asset('car6.jpeg') }}'},
            {id:3, title: 'KarirMu', body: 'Platform lowongan pekerjaan untuk siswa SMK', image: '{{ asset('car6.jpeg') }}'},
            {id:4, title: 'KarirMu', body: 'Platform lowongan pekerjaan untuk siswa SMK', image: '{{ asset('car6.jpeg') }}'},
            {id:5, title: 'KarirMu', body: 'Platform lowongan pekerjaan untuk siswa SMK', image: '{{ asset('car6.jpeg') }}'},
        ],
        loop() {
            setInterval(() => {this.activeSlide = this.activeSlide === 5 ? 1 : this.activeSlide + 1}, 5000)
        }
        
    }" x-init="loop">
        <!-- data loop -->
        <template x-for="slide in slides" :key="slide.id">
            <div x-show="activeSlide === slide.id" class="h-80 flex items-center bg-white text-gray-900 rounded-lg">
                <div :style="'background-image: url(' + slide.image + '); background-size: cover; background-position: center; background-repeat: no-repeat;'" class="flex flex-col items-center w-full h-full">
                    <div class="flex-1"></div> <!-- This empty div will push the content to the bottom -->
        
                    <div class="flex flex-col items-center p-4"> <!-- New container for h2 and p -->
                        <h2 class="font-bold text-2xl text-white text-center" x-text="slide.title"></h2>
                        <p class="text-base text-white text-center" x-text="slide.body"></p>
                    </div>
        
                </div>
            </div>
        </template>

        <!-- back/next -->
        <div class="absolute inset-0 flex">
           
            <div class="flex items-center justify-start w-1/2">
                <button x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1"
                    class="bg-slate-100 text-slate-500 transition hover:text-white hover:bg-blue-500 font-bold rounded-full w-12 h-12 flex justify-center shadow items-center -ml-16">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
            </div>
            
            <div class="flex items-center justify-end w-1/2">
                <button x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1"
                    class="bg-slate-100 text-slate-500 transition hover:text-white hover:bg-blue-500 font-bold rounded-full w-12 h-12 flex justify-center shadow items-center -mr-16">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

        </div>

        <!-- button -->
        <div class="absolute w-full flex items-center justify-center px-4 py-5">
            <template x-for="slide in slides" :key="slide.id">
                <button
                    class="flex-1 h-2 mx-2 mb-2 rounded-full overflow-hidden transition-colors duration-200 ease-out hover:bg-slate-600 hover:shadow-lg"
                    :class="{
                    'bg-blue-600' : activeSlide === slide.id,
                    'bg-slate-300' : activeSlide !== slide.id,
                }" x-on:click="activeSlide = slide.id"></button>
            </template>
        </div>

    </div>
</div>