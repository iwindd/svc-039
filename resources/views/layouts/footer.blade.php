<footer class="w-full">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <!--Grid-->
        <div
            class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-5 gap-3 md:gap-8 py-10 max-sm:max-w-sm max-sm:mx-auto gap-y-8">
            <div class="col-span-full mb-10 lg:col-span-2 lg:mb-0">
                <a href="{{route('home')}}" class="flex justify-center lg:justify-start">
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                </a>
                <p class="py-8 text-sm text-gray-500 lg:max-w-xs text-center lg:text-left">{{__("footer.description")}}</p>
                <a href="https://www.facebook.com/profile.php?id=100071754115831"
                    class="py-2.5 px-5 h-9 block w-fit bg-indigo-600 rounded-full shadow-sm text-xs text-white mx-auto transition-all  duration-500 hover:bg-indigo-700 lg:mx-0">
                    {{__("footer.contact")}}
                </a>
            </div>
            <!--End Col-->
            <div class="lg:mx-auto text-left ">
                <h4 class="text-lg text-gray-900 font-medium mb-7">{{__('footer.relate')}}</h4>
                <ul class="text-sm  transition-all duration-500">
                    <li class="mb-6"><a href="http://www.svc.ac.th/th/index.php" rel="noopener noreferrer" target="_blank" class=" text-gray-600 hover:text-gray-900">Suratthani Vocational College</a></li>
                    <li class="mb-6"><a href="https://rms.svc.ac.th/?p=login" rel="noopener noreferrer" target="_blank" class="text-gray-600 hover:text-gray-900">RMS - 2024</a></li>
                    <li class="mb-6"><a href="https://std2018.vec.go.th/web/" rel="noopener noreferrer" target="_blank" class=" text-gray-600 hover:text-gray-900">ระบบบริหารสถานศึกษา ศธ.02</a></li>
                    <li class="mb-6"><a href="https://v-cop.go.th/" rel="noopener noreferrer" target="_blank" class=" text-gray-600 hover:text-gray-900"> ศูนย์กำลังคนอาชีวศึกษา [V-Cop]</a></li>
                </ul>
            </div>
            <!--End Col-->
            <div class="lg:mx-auto text-left ">
                <h4 class="text-lg text-gray-900 font-medium mb-7">{{__('footer.contents')}}</h4>
                <ul class="text-sm  transition-all duration-500">
                    <li class="mb-6"><a href="{{route('executives')}}" class="text-gray-600 hover:text-gray-900">{{__('navbar.executives')}}</a></li>
                    <li class="mb-6"><a href="{{route('teachers')}}" class=" text-gray-600 hover:text-gray-900">{{__('navbar.teachers')}}</a></li>
                    <li class="mb-6"><a href="{{route('students')}}" class=" text-gray-600 hover:text-gray-900">{{__('navbar.students')}}</a></li>
                    <li class="mb-6"><a href="{{route('majors')}}" class=" text-gray-600 hover:text-gray-900">{{__('navbar.majors')}}</a></li>
                </ul>
            </div>
            <!--End Col-->
            <div class="lg:mx-auto text-left">
                <h4 class="text-lg text-gray-900 font-medium mb-7">{{__('footer.creator')}}</h4>
                <ul class="text-sm  transition-all duration-500">
                    <li class="mb-6"><a href="https://www.facebook.com/AchirawitKaewkhong/" class="text-gray-600 hover:text-gray-900">Facebook</a></li>
                    <li class="mb-6"><a href="https://github.com/iwindd" class=" text-gray-600 hover:text-gray-900">Github</a></li>
                </ul>
            </div>
        </div>
        <!--Grid-->
        <div class="py-7 border-t border-gray-200">
            <div class="flex items-center justify-center flex-col lg:justify-between lg:flex-row">
                <span class="text-sm text-gray-500 ">© Suratthani Vocational College, All rights reserved.</span>
            </div>
        </div>
    </div>
</footer>
