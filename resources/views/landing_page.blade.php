<x-landing-layout>

    <a href="/services">
        <!-- Header -->
        <header id="header" class="header py-28 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-32">
                <div class="video-background">
                    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" poster="/img/poster.jpg" onload="this.load()">
                        <source src="/video/cover.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8 header-content">
                    <div class="mb-16 lg:mt-32 xl:mt-40 xl:mr-12 fadeIn">
                        <div class="flex justify-center lg:max-w-xl lg:mx-auto">
                            <img src="/img/logodronettc.png" alt="" class="drop-shadow-[0_0_0.5px_rgba(255,255,255,1.25)]">
                        </div>
                        {{-- <h1 class="text-center h1-large mb-5 text-white fadeIn" >Drone Technology Training Center</h1> --}}
                        <h1 class="text-center md:text-5xl mb-5 text-white fadeIn" id="typewriter"></h1>
                        {{-- <div class="w-full h-full flex justify-center items-center">
                            <h1 id="typewriter" class="text-4xl font-bold"></h1>
                        </div> --}}
                        {{-- ศูนย์ฝึกอบรมเทคโนโลยีโดรนสำหรับผู้ที่หลงใหลในการบินและนวัตกรรม, --}}
                        <p class="text-center p-large mb-8 text-gray-200 fadeIn2">
                            เปิดประตูสู่โลกแห่งทักษะการบินพร้อมทั้งประสบการณ์ทางปฏิบัติและความรู้เฉพาะทางจากผู้เชี่ยวชาญ
                        </p>
                        {{-- <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>Download</a>
                        <a class="btn-solid-lg secondary" href="#your-link"><i class="fab fa-google-play"></i>Download</a> --}}
                    </div>
                    <div class="xl:text-right hidden sm:flex justify-center items-center slideInRight">
                        <img
                            class="inline sm:w-1/3 lg:w-auto drone-float "
                            src="img/dronewhite.png"
                            alt="alternative" />
                    </div>
                </div> <!-- end of container -->
        </header> <!-- end of header -->
        <!-- end of header -->
    </a>


    <!-- Introduction -->
    <div class="pt-4 pb-14 text-center">
        <div class="container px-4 sm:px-8 xl:px-4">
            <p class="mb-4 font-bold text-black text-3xl leading-10 lg:max-w-5xl lg:mx-auto" style="color: var(--second-color)">
                "เปิดโลกมุมมองใหม่, บินสู่อนาคตกับหลักสูตรการบินโดรนของเรา"
            </p>
            <p class="mb-4 text-gray-800 text-xl leading-10 lg:max-w-4xl lg:mx-auto">
                ที่นี่คุณจะได้เรียนรู้ทักษะที่จำเป็นทั้งหมดเพื่อควบคุมและใช้งานโดรนอย่างมืออาชีพ, พร้อมก้าวสู่อาชีพในโลกของเทคโนโลยีการบินที่ไม่มีขีดจำกัด!
            </p>
        </div> <!-- end of container -->
    </div>
    <!-- end of introduction -->


    <!-- Features -->
    <div id="features" class="cards-1">
        <p class="text-4xl mb-12 font-bold text-black">สินค้าและบริการของเรา</p>
        <div class="container px-4 sm:px-8 xl:px-4">
            <!-- Card -->
            <div class="card">
                <div class="card-image">
                    <img src="img/icons/dealer.png" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">ตัวแทนจำหน่ายโดรน</h5>
                    <p class="mb-4">ตัวแทนจำหน่ายโดรนอย่างเป็นทางการ คุณภาพระดับโลก</p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
                <div class="card-image">
                    <img src="img/icons/course.png" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">หลักสูตรอบรม</h5>
                    <p class="mb-4">หลักสูตรอบรมคุณภาพ จากผู้เชี่ยวชาญ ประสบการณ์ตรง</p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
                <div class="card-image">
                    <img src="img/icons/regis.png" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">ขึ้นทะเบียนโดรน</h5>
                    <p class="mb-4">ถูกต้องตามกฎหมาย สะดวก รวดเร็ว ปลอดภัย ไปกับเรา</p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
                <div class="card-image">
                    <img src="img/icons/ins.png" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">ทำประกันภัยโดรน</h5>
                    <p class="mb-4">ทำประกันภัยโดรนกับเรา มั่นใจในความปลอดภัย บินได้อย่างไร้ขีดจำกัด</p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
                <div class="card-image">
                    <img src="img/icons/service.png" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">บริการฉีดพ่นด้วยโดรน</h5>
                    <p class="mb-4">ตอบโจทย์ทุกความต้องการ รวดเร็ว ปลอดภัย ด้วยเทคโนโลยีล้ำสมัย</p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
                <div class="card-image">
                    <img src="img/icons/ma.png" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">ซ่อมบำรุง</h5>
                    <p class="mb-4">อะไหล่แท้ มาตรฐานสากล รับประกันผลงาน มั่นใจได้</p>
                </div>
            </div>
            <!-- end of card -->

        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of features -->


    <!-- Details 1 -->
    <div id="details" class="pt-12 pb-16 lg:pt-16">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
            <div class="lg:col-span-5">
                <div class="mb-16 lg:mb-0 xl:mt-16"
                    data-aos="zoom-in"
                    data-aos-once="true"
                    data-aos-delay="400"
                    data-aos-offset="200"
                    data-aos-duration="400"
                    data-aos-once="true"
                    data-aos-mirror="true"
                    data-aos-easing="ease-in-out"
                    >
                        <h2 class="mb-6">โดรนเกษตร</h2>
                        <p class="mb-4 indent-8">โดรนที่ออกแบบมาเพื่อใช้ในภาคการเกษตร ใช้ในการปฏิบัติงานต่างๆ เช่น การฉีดพ่นยาฆ่าแมลง ปุ๋ย และน้ำ</p>
                        <p class="mb-4 indent-8">โดรนเกษตรสามารถฉีดพ่นยาฆ่าแมลงและปุ๋ยได้อย่างทั่วถึงและแม่นยำกว่าการเดินฉีดแบบเดิมๆ ช่วยให้พืชได้รับสารอาหารและสารป้องกันกำจัดศัตรูพืชอย่างเพียงพอและมีประสิทธิภาพ</p>
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-7 transition hover:scale-125 ">
                <div class="xl:ml-14"
                    data-aos="zoom-in"
                    data-aos-once="true"
                    data-aos-delay="300"
                    data-aos-offset="200"
                    data-aos-duration="400"
                    data-aos-once="true"
                    data-aos-mirror="true"
                    data-aos-easing="ease-in-out"
                    >
                        <img class="inline drone-float" src="img/droneagri.png" alt="alternative" />
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of container -->
    </div>
    <!-- end of details 1 -->


    <!-- Details 2 -->
    <div class="py-24">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
            <div class="lg:col-span-7 transition hover:scale-125">
                <div class="mb-12 lg:mb-0 xl:mr-14"
                    data-aos="zoom-in"
                    data-aos-once="true"
                    data-aos-delay="300"
                    data-aos-offset="200"
                    data-aos-duration="400"
                    data-aos-once="true"
                    data-aos-mirror="true"
                    data-aos-easing="ease-in-out"
                    >
                        <img class="inline drone-float" src="img/dronesurv.png" alt="alternative" />
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-5">
                <div class="xl:mt-12"
                    data-aos="zoom-in"
                    data-aos-once="true"
                    data-aos-delay="400"
                    data-aos-offset="200"
                    data-aos-duration="400"
                    data-aos-once="true"
                    data-aos-mirror="true"
                    data-aos-easing="ease-in-out"
                    >
                        <h2 class="mb-6">โดรนสำรวจ</h2>
                        <p class="indent-8 mb-4">โดรนสำรวจสามารถนำมาใช้ในการสำรวจได้หลากหลายวัตถุประสงค์ เช่น</p>
                        <p>- การถ่ายภาพและวิดีโอความละเอียดสูง</p>
                        <p>- การตรวจวัดระยะทาง ระดับความสูง และพื้นที่ เพื่อใช้ในการออกแบบ วางแผน และประเมินโครงการ</p>
                        <p>- การตรวจสอบสภาพพื้นที่ เช่น สภาพป่าไม้ สภาพพืชผล</p>
                        {{-- <a class="btn-solid-reg popup-with-move-anim mr-1.5" href="#details-lightbox">Lightbox</a>
                        <a class="btn-outline-reg" href="article.html">Details</a> --}}
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of container -->
    </div>
    <!-- end of details 2 -->


    <!-- Details Lightbox -->
    <!-- Lightbox -->
    <div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="lg:grid lg:grid-cols-12 lg:gap-x-8">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="lg:col-span-8">
                <div class="mb-12 text-center lg:mb-0 lg:text-left xl:mr-6">
                    <img class="inline rounded-lg" src="images/details-lightbox.jpg" alt="alternative" />
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-4">
                <h3 class="mb-2">Goals Setting</h3>
                <hr class="w-11 h-0.5 mt-0.5 mb-4 ml-0 border-none bg-indigo-600" />
                <p>The app can easily help you track your personal development evolution if you take the time to set it up.</p>
                <h4 class="mt-7 mb-2.5">User Feedback</h4>
                <p class="mb-4">This is a great app which can help you save time and make your live easier. And it will help improve your productivity.</p>
                <ul class="list mb-6 space-y-2">
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Splash screen panel</div>
                    </li>
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Statistics graph report</div>
                    </li>
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Events calendar layout</div>
                    </li>
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Location details screen</div>
                    </li>
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Onboarding steps interface</div>
                    </li>
                </ul>
                <a class="btn-solid-reg mfp-close page-scroll" href="#download">Download</a>
                <button class="btn-outline-reg mfp-close as-button" type="button">Back</button>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of details lightbox -->


    <!-- Details 3 -->
    <div class="pt-16 pb-12">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
            <div class="lg:col-span-5">
                <div class="mb-16 lg:mb-0 xl:mt-16"
                    data-aos="zoom-in"
                    data-aos-once="true"
                    data-aos-delay="400"
                    data-aos-offset="200"
                    data-aos-duration="400"
                    data-aos-once="true"
                    data-aos-mirror="true"
                    data-aos-easing="ease-in-out"
                    >
                        <h2 class="mb-6">โดรนถ่ายภาพ</h2>
                        <p class="mb-4 indent-8">โดรนถ่ายภาพใช้ประโยชน์ในหลากหลายด้าน เช่น การถ่ายทำวิดีโอ, การถ่ายภาพ, การสำรวจและการทำแผนที่.</p>
                        <p class="mb-4 indent-8">การใช้โดรนในการถ่ายภาพช่วยเปิดมุมมองใหม่ๆ ที่ไม่เคยเห็นมาก่อน, และนำเสนอมุมมองที่น่าตื่นตาตื่นใจได้อย่างสร้างสรรค์.</p>

                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-7 transition hover:scale-125">
                <div class="ml-14"
                    data-aos="zoom-in"
                    data-aos-once="true"
                    data-aos-delay="300"
                    data-aos-offset="200"
                    data-aos-duration="400"
                    data-aos-once="true"
                    data-aos-mirror="true"
                    data-aos-easing="ease-in-out"
                    >
                        <img class="inline drone-float" src="img/dronecamera.png" alt="alternative" />
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of container -->
    </div>
    <!-- end of details 3 -->


    {{-- <!-- Statistics -->
    <div class="counter">
        <div class="container px-4 sm:px-8">

            <!-- Counter -->
            <div id="counter">
                <div class="cell">
                    <div class="counter-value number-count" data-count="231">1</div>
                    <p class="counter-info">Happy Users</p>
                </div>
                <div class="cell">
                    <div class="counter-value number-count" data-count="385">1</div>
                    <p class="counter-info">Issues Solved</p>
                </div>
                <div class="cell">
                    <div class="counter-value number-count" data-count="159">1</div>
                    <p class="counter-info">Good Reviews</p>
                </div>
                <div class="cell">
                    <div class="counter-value number-count" data-count="127">1</div>
                    <p class="counter-info">Case Studies</p>
                </div>
                <div class="cell">
                    <div class="counter-value number-count" data-count="211">1</div>
                    <p class="counter-info">Orders Received</p>
                </div>
            </div>
            <!-- end of counter -->

        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of statistics --> --}}


    <!-- Video -->
    <div class="slider-1 py-32 bg-gray">
        <div class="container px-4 sm:px-8">
            <h2 class="text-center lg:max-w-xl lg:mx-auto">ฝึกอบรมที่ DRONE TTC</h2>
            <p class="mb-10 text-center lg:max-w-xl lg:mx-auto">จุดประกายความเป็นมืออาชีพ พัฒนาทักษะการบินโดรนและนำไปใช้ในอาชีพที่หลากหลาย</p>

            <!-- container -->
            <div class="container">
                <video class="w-full shadow-lg" controls playsinline="playsinline" preload="auto">
                    <source src="/video/banner.mp4" type="video/mp4" />
                </video>
                {{-- <video playsinline="playsinline" autoplay="autoplay" id="videoElement" loop="loop" preload="auto">
                    <source src="/video/banner.mp4" type="video/mp4">
                </video> --}}
            </div> <!-- end of slider-container -->
            <!-- end of container -->

        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of Video -->

    @php
        $blogs = App\Models\Blog::orderBy('id', 'desc')->limit(6)->get(['id','cover', 'title', 'type', 'updated_at']);
    @endphp
    <!-- Testimonials -->
    <div class="py-20 container px-4 sm:px-6 md:px-8">
        <h2 class="text-center lg:max-w-xl mb-20 lg:mx-auto">บทความและข่าวสาร</h2>
        @if ($blogs)
            <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
                @foreach ($blogs as $blog)
                    <a href="/blog/detail/{{ $blog->id }}">
                        <div class="group/card">
                            <img class="relative z-10 object-cover w-full rounded-md h-72" src="/uploads/news/{{ $blog->cover }}" alt="">

                            <div class="transition group-hover/card:-translate-y-6 relative z-20 max-w-lg p-6 mx-auto -mt-24 w-11/12 bg-white rounded-md shadow dark:bg-gray-900">
                                <p class="font-semibold text-gray-800 hover:underline dark:text-white md:text-lg">{{ $blog->title }}</p>
                                <div class="flex mt-3 justify-between">
                                    <p class="text-blue-500 text-sm">{{ ($blog->type == 0) ? (app()->getLocale() == 'th' ? "ข่าวสาร" : "News") : (app()->getLocale() == 'th' ? "บทความ" : "Blog") }}</p>
                                    <p class="text-sm text-blue-500">
                                        {{ \Carbon\Carbon::parse($blog->updated_at)->locale(app()->getLocale())->isoFormat('D MMMM YYYY') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="flex justify-center">
                <a href="/blogs">
                    <button
                        type="button"
                        class="mt-10 inline-block rounded-full bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
                        See more
                    </button>
                </a>
            </div>
        @endif
    </div> <!-- end of slider-1 -->
    <!-- end of testimonials -->

    <!-- Testimonials -->
    {{-- <div class="py-32 container px-4 sm:px-6 md:px-8">
        <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-4">
            <div class="flex justify-center items-center"><img class="transition hover:scale-125" src="/img/logoiddrives.png" width="100" alt=""></div>
            <div class="flex justify-center items-center"><img class="transition hover:scale-125" src="/img/logodronettc.png" width="200" alt=""></div>
            <div class="flex justify-center items-center"><img class="transition hover:scale-125" src="/img/aiang.webp" width="200" alt=""></div>
            <div class="flex justify-center items-center"><img class="transition hover:scale-125" src="/img/djilogo.png" width="200" alt=""></div>
        </div>
    </div> --}}
    <!-- end of testimonials -->


    <!-- Pricing -->
    <div id="pricing" class="cards-2">
        <div class="absolute bottom-0 h-40 w-full bg-white"></div>
        <div class="container px-4 pb-px sm:px-8">
            <h2 class="mb-2.5 text-white lg:max-w-xl lg:mx-auto">หลักสูตรอบรมเชิงปฏิบัติการ</h2>
            <p class="mb-16 text-white lg:max-w-3xl lg:mx-auto">
                หลักสูตรการบินโดรนที่ถูกออกแบบมาอย่างพิถีพิถันเพื่อมอบประสบการณ์ที่คุ้มค่าและการฝึกอบรมที่ครอบคลุมให้กับคุณ
                ไม่ว่าคุณจะเป็นมือใหม่ที่กำลังเริ่มต้นหรือผู้ที่มีประสบการณ์และต้องการพัฒนาทักษะของตนเอง
            </p>

            <!-- Card-->
            <div class="card">
                <div class="card-body">
                    <div class="card-title">โดรนเกษตร</div>
                    <div class="price"><span class="value">15,000</span></div>
                    <div class="frequency">บาท</div>
                    <p>หลักสูตรอบรม การสอนนักบินโดรนเพื่อการเกษตรมืออาชีพ</p>
                    <ul class="list mb-7 space-y-2 text-left">
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>ระยะเวลาอบรม 19 ชั่วโมง</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>ภาคทฤษฎี 8 บทเรียน 5 ชั่วโมง</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>ภาคปฏิบัติ 7 บทเรียน 14 ชั่วโมง</div>
                        </li>
                        {{-- <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Community support and videos</div>
                        </li> --}}
                    </ul>
                    {{-- <div class="button-wrapper">
                        <a class="btn-solid-reg page-scroll" href="#download">Download</a>
                    </div> --}}
                </div>
            </div> <!-- end of card -->
            <!-- end of card -->

            <!-- Card-->
            <div class="card">
                <div class="card-body">
                    <div class="card-title">โดรนสำรวจ</div>
                    <div class="price"><span class="value">15,000</span></div>
                    <div class="frequency">บาท</div>
                    <p>หลักสูตรอบรม การสอนนักบินโดรนเพื่อการสำรวจมืออาชีพ</p>
                    <ul class="list mb-7 space-y-2 text-left">
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>ระยะเวลาอบรม 19 ชั่วโมง</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>ภาคทฤษฎี 8 บทเรียน 5 ชั่วโมง</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>ภาคปฏิบัติ 7 บทเรียน 14 ชั่วโมง</div>
                        </li>
                        {{-- <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Community support and videos</div>
                        </li> --}}
                    </ul>
                    {{-- <div class="button-wrapper">
                        <a class="btn-solid-reg page-scroll" href="#download">Download</a>
                    </div> --}}
                </div>
            </div> <!-- end of card -->
            <!-- end of card -->

            <!-- Card-->
            <div class="card">
                <div class="card-body">
                    <div class="card-title">โดรนถ่ายภาพ</div>
                    <div class="price"><span class="value">9,000</span></div>
                    <div class="frequency">บาท</div>
                    <p>หลักสูตรอบรม การสอนนักบินโดรนถ่ายภาพมืออาชีพ</p>
                    <ul class="list mb-7 text-left space-y-2">
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>ระยะเวลาอบรม 12 ชั่วโมง</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>ภาคทฤษฎี 8 บทเรียน 4 ชั่วโมง</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>ภาคปฏิบัติ 7 บทเรียน 8 ชั่วโมง</div>
                        </li>
                        {{-- <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>15+ บทเรียน</div>
                        </li> --}}
                    </ul>
                    {{-- <div class="button-wrapper">
                        <a class="btn-solid-reg page-scroll" href="#download">Download</a>
                    </div> --}}
                </div>
            </div> <!-- end of card -->
            <!-- end of card -->

        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->


    <!-- Conclusion -->
    <div id="download" class="basic-5">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2">
            <div class="mb-16 lg:mb-0">
                <img src="img/controller.png" alt="alternative" />
            </div>
            <div class="lg:mt-24 xl:mt-44 xl:ml-12">
                <p class="mb-9 text-gray-800 text-2xl leading-10">
                    <span class="text-4xl font-bold" >"บินสู่อนาคตกับ <span style="color: var(--second-color)">Drone TTC</span>"</span> <br>
                    ฝึกอบรมโดรนกับมืออาชีพ พร้อมเปิดประสบการณ์ใหม่ในโลกแห่งการบินไร้คนขับ!
                </p>
                {{-- <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>Download</a>
                <a class="btn-solid-lg secondary" href="#your-link"><i class="fab fa-google-play"></i>Download</a> --}}
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of basic-5 -->
    <!-- end of conclusion -->
<script>

const words = ["Drone Technology Training Center", "Welcome to DroneTTC", "We are DroneTTC."];
let i = 0;
let j = 0;
let currentWord = "";
let isDeleting = false;

function type() {
  currentWord = words[i];

  if (isDeleting) {
    document.getElementById("typewriter").textContent = currentWord.substring(0, j - 1);
    j--;
    if (j == 0) {
      isDeleting = false;
      i++;
      if (i == words.length) {
        i = 0;
      }
    }
    setTimeout(type, 50);  // Standard speed when deleting
  } else {
    document.getElementById("typewriter").textContent = currentWord.substring(0, j + 1);
    j++;
    if (j == currentWord.length) {
      isDeleting = true;
      setTimeout(type, 5000);  // Delay before deleting
    } else {
      setTimeout(type, 50);  // Standard speed when typing
    }
  }
}

type(); // Start the typewriter effect

</script>
<style>
    .video-background {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  overflow: hidden;
}
#header {
  width: 100%;
  height: 100vh;
  position: relative;
  display: flex;
  justify-content: center;
  margin-bottom: 10%;
}
.video-background video {
    object-fit: cover;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    min-width: 100%;
    min-height: 100%;
    z-index: 1;
    filter: brightness(0.8);
}
.header-content {
    z-index: 2;
}
/* Add this to your CSS file */
@keyframes float {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-20px); }
}

.drone-float {
  animation: float 3s ease-in-out infinite;
}
.slideInRight {
  -webkit-animation-name: slideInRight;
  animation-name: slideInRight;
  -webkit-animation-duration: 1s;
  animation-duration: 2s;
  animation-delay: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes slideInRight {
  0% {
  -webkit-transform: translateX(100%);
  transform: translateX(100%);
  visibility: hidden;
  }
  100% {
  -webkit-transform: translateX(0);
  transform: translateX(0);
  visibility: visible;
  }
  }
  .fadeIn {
  -webkit-animation-name: fadeIn;
  animation-name: fadeIn;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  animation-delay: 2s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  .fadeIn2 {
  -webkit-animation-name: fadeIn;
  animation-name: fadeIn;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  animation-delay: 2.5s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes fadeIn {
  0% {opacity: 0;}
  100% {opacity: 1;}
  }
</style>
</x-landing-layout>
