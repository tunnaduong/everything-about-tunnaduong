@extends('layout.main')

@section('title', 'Giới thiệu')

@section('content')
    <div class="px-6 flex flex-col mt-16 md:flex-row items-center justify-center max-w-screen-lg z-10 my-0 mx-auto">
        <div class="md:w-1/2 md:mr-5 order-2 md:order-1 text-center md:text-left">
            <h6 class="text-tertiary-dark text-md lg:text-2xl font-medium mb-2 md:mb-5 text-[var(--black)]">
                Xin chào, mình là</h6>
            <h1 class="text-primary text-4xl md:text-5xl lg:text-5xl font-bold mb-2 md:mb-5 text-[var(--black)]">
                Dương
                Tùng Anh</h1>
            <p class="text-tertiary dark:text-secondary text-sm lg:text-lg mb-8 text-[var(--black)]">
                Mình là kỹ sư phần mềm có hơn một năm kinh nghiệm và những sản phẩm mình làm ra đều được đầu tư kỹ lưỡng.
                Mình
                cũng là người năng động trong công việc, không ngừng học hỏi những kỹ năng mới.
            </p>
        </div>
        <div class="w-60 md:w-1/2 order-1 md:order-2 mb-12 md:mb-0">
            <div class="bg-[#f3e8d3] rounded-full overflow-hidden border-8 border-white dark:!bg-[#222222]">
                <img alt="Avatar" width="540" height="540" class="scale-105 align-top drop-shadow-xl"
                    style="color:transparent" src="/static/img/transparent_tunna.png" alt="A Transparent Tunna">
            </div>
        </div>
    </div>
    <section class="w-full md:mt-0 flex flex-col items-center justify-start">
        <div class="flex px-6 flex-col md:flex-row items-center mb-16 mt-16 justify-center max-w-screen-lg">
            <div class="w-72 md:w-1/3 mb-8 md:mb-0">
                <img src="/static/img/tunganh.jpg" class="rounded-2xl" alt="A Walking Tunna" width="560" height="560">
            </div>
            <div class="md:ml-16 md:w-2/3">
                <h3
                    class="text-[var(--black)] font-light text-3xl tracking-[6px] uppercase relative mb-10 before:absolute before:-bottom-[5px] before:left-0 before:h-[1px] before:content-[''] before:w-[60px] before:bg-[var(--black)] after:absolute after:-bottom-[7px] after:right-0 after:left-[56px] after:w-[6px] after:h-[6px] after:rounded-full after:bg-[var(--black)]">
                    Về bản thân
                </h3>
                <h3 class="text-[var(--black)] text-xl md:text-3xl font-medium mb-6">Kỹ năng</h3>
                <ul class="text-[var(--black)] leading-7 list-disc ml-8">
                    <li><span class="font-bold">Ngôn ngữ lập trình: </span><span>PHP, HTML, CSS, Javascript, C/C++, Java,
                            Python, MySQL, PostgreSQL</span></li>
                    <li><span class="font-bold">Thư viện và framework: </span><span>ReactJS, React Native, TailwindCSS,
                            Laravel, NodeJS, ExpressJS, Bootstrap, jQuery, VueJS
                    <li><span class="font-bold">Công cụ: </span><span>Git/GitHub, GitHub Actions, Vercel, Cloudflare, Google
                            Cloud, AWS, Azure, Docker, Postman, Figma, Photoshop, Illustrator, Premiere Pro
                </ul>
            </div>
        </div>
        <div class="px-6 flex flex-col md:flex-row w-full max-w-screen-lg xl:gap-16">
            <div class="w-full md:w-1/2">
                <div class="w-full mb-16">
                    <h3 class="text-2xl font-bold mb-4 text-[var(--black)]">Kinh nghiệm làm việc</h3>
                    <ul>
                        <li
                            class="pb-10 relative border-l-2 pl-4 border-[var(--black)] before:absolute before:content-[''] before:-left-[9px] before:top-0 before:w-4 before:h-4 before:bg-[var(--white)] before:border-2 before:border-[var(--black)] before:rounded-full before:transition-all before:duration-300 transition-all duration-300">
                            <h4
                                class="text-[var(--black)] text-xl font-semibold mb-3 leading-6 transition-all duration-300">
                                Wistron Infocomm Việt Nam</h4>
                            <p
                                class="w-fit text-sm mb-3 bg-[var(--black)] text-[var(--white)] inline-block px-2 py-[2px] rounded-md">
                                06/2025 - 09/2025</p>
                            <p class="mb-2 italic text-[var(--black)] transition-all duration-300">IT Maintenance &
                                Operations Intern - Digital Manufacturing Department</p>
                            <ul>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Giám sát và bảo trì hệ thống quản lý sản xuất WiMES nhằm đảm bảo hoạt động ổn định của
                                    dây chuyền.</li>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Xử lý sự cố hệ thống và cơ sở dữ liệu PostgreSQL liên quan đến dây chuyền và đơn hàng.
                                </li>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Hỗ trợ nhóm kỹ thuật khắc phục sự cố và nâng cao độ tin cậy của hệ thống.
                                </li>
                            </ul>
                        </li>
                        <li
                            class="pb-10 relative border-l-2 pl-4 border-[var(--black)] before:absolute before:content-[''] before:-left-[9px] before:top-0 before:w-4 before:h-4 before:bg-[var(--white)] before:border-2 before:border-[var(--black)] before:rounded-full before:transition-all before:duration-300 transition-all duration-300">
                            <h4
                                class="text-[var(--black)] text-xl font-semibold mb-3 leading-6 transition-all duration-300">
                                Viettel Hà Nam</h4>
                            <p
                                class="w-fit text-sm mb-3 bg-[var(--black)] text-[var(--white)] inline-block px-2 py-[2px] rounded-md">
                                03/2025 - 06/2025</p>
                            <p class="mb-2 italic text-[var(--black)] transition-all duration-300">IT Support Intern -
                                Business Solutions Department</p>
                            <ul>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Củng cố kiến thức chuyên ngành CNTT, rèn luyện kỹ năng kiểm thử phần mềm, đọc hiểu
                                    nghiệp vụ hệ thống, và hỗ trợ người dùng.</li>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Quan sát và học hỏi quy trình phối hợp giữa đơn vị triển khai và phát triển, đóng vai
                                    trò cầu nối giữa kỹ thuật và người sử dụng.</li>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Phát triển kỹ năng mềm, làm việc nhóm và tư duy thực tế trong môi trường doanh nghiệp.
                                </li>
                            </ul>
                        </li>
                        <li
                            class="pb-10 relative border-l-2 pl-4 border-[var(--black)] before:absolute before:content-[''] before:-left-[9px] before:top-0 before:w-4 before:h-4 before:bg-[var(--white)] before:border-2 before:border-[var(--black)] before:rounded-full before:transition-all before:duration-300 transition-all duration-300">
                            <h4
                                class="text-[var(--black)] text-xl font-semibold mb-3 leading-6 transition-all duration-300">
                                VNTEL</h4>
                            <p
                                class="w-fit text-sm mb-3 bg-[var(--black)] text-[var(--white)] inline-block px-2 py-[2px] rounded-md">
                                01/2022 - 06/2022</p>
                            <p class="mb-2 italic text-[var(--black)] transition-all duration-300">Front-end Developer</p>
                            <ul>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Được tham gia vào nhiều dự án lớn nhỏ liên kết với các công ty lớn và các cơ quan nhà
                                    nước
                                    của công ty đầu tiên thực tập với vai trò Lập trình viên Front-end</li>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Lần đầu tiên tham gia học công nghệ mới như React.js và React Native, tạo nền móng cho
                                    sự
                                    chuyên sâu vào hệ sinh thái React Javascript library</li>
                            </ul>
                        </li>
                        <li
                            class="pb-1 relative border-l-2 pl-4 border-[var(--black)] before:absolute before:content-[''] before:-left-[9px] before:top-0 before:w-4 before:h-4 before:bg-[var(--white)] dark:before:bg-tertiary before:border-2 before:border-[var(--black)] before:rounded-full before:transition-all before:duration-300 transition-all duration-300">
                            <h4
                                class="text-[var(--black)] text-xl font-semibold mb-3 leading-6 transition-all duration-300">
                                HAP Group</h4>
                            <p
                                class="w-fit text-sm mb-3 bg-[var(--black)] text-[var(--white)] inline-block px-2 py-[2px] rounded-md">
                                04/01/2022 - 07/01/2022</p>
                            <p class="mb-2 italic text-[var(--black)] transition-all duration-300">Intern PHP Back-end
                                Developer
                            </p>
                            <ul>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Công ty Startup về CNTT đầu tiên nhận lời ứng tuyển qua TopCV</li>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Tuy rằng thời gian làm việc tại công ty khá ngắn ngủi nhưng cũng đã làm quen được với
                                    công
                                    việc của một PHP Developer thao tác nhiều với Wordpress CMS (Themes, Custom,
                                    Functionalities...)</li>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Được tham gia cải tiến và test cho dự án landing website cho Công ty Dược phẩm Nam Hà
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="w-full mb-16">
                    <h3 class="text-2xl font-bold mb-4 text-[var(--black)]">Học vấn</h3>
                    <ul>
                        <li
                            class="pb-10 relative border-l-2 pl-4 border-[var(--black)] before:absolute before:content-[''] before:-left-[9px] before:top-0 before:w-4 before:h-4 before:bg-[var(--white)] before:border-2 before:border-[var(--black)] before:rounded-full before:transition-all before:duration-300 transition-all duration-300">
                            <h4
                                class="text-[var(--black)] text-xl font-semibold mb-3 leading-6 transition-all duration-300">
                                FPT Polytechnic Hà Nam</h4>
                            <p
                                class="w-fit text-sm mb-3 bg-[var(--black)] text-[var(--white)] inline-block px-2 py-[2px] rounded-md">
                                08/2023 - 09/2025</p>
                            <ul>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Bằng Cử nhân Lập trình Web CNTT</li>
                            </ul>
                        </li>
                        <li
                            class="pb-10 relative border-l-2 pl-4 border-[var(--black)] before:absolute before:content-[''] before:-left-[9px] before:top-0 before:w-4 before:h-4 before:bg-[var(--white)] before:border-2 before:border-[var(--black)] before:rounded-full before:transition-all before:duration-300 transition-all duration-300">
                            <h4
                                class="text-[var(--black)] text-xl font-semibold mb-3 leading-6 transition-all duration-300">
                                Đại học FPT Hà Nội</h4>
                            <p
                                class="w-fit text-sm mb-3 bg-[var(--black)] text-[var(--white)] inline-block px-2 py-[2px] rounded-md">
                                09/2021 - 01/2023</p>
                            <ul>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Chuyên ngành Kỹ thuật phần mềm</li>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Nghỉ học vì vấn đề sức khỏe</li>
                            </ul>
                        </li>
                        <li
                            class="pb-1 relative border-l-2 pl-4 border-[var(--black)] before:absolute before:content-[''] before:-left-[9px] before:top-0 before:w-4 before:h-4 before:bg-[var(--white)] before:border-2 before:border-[var(--black)] before:rounded-full before:transition-all before:duration-300 transition-all duration-300">
                            <h4
                                class="text-[var(--black)] text-xl font-semibold mb-3 leading-6 transition-all duration-300">
                                THPT Chuyên Biên Hòa - Hà Nam</h4>
                            <p
                                class="w-fit text-sm mb-3 bg-[var(--black)] text-[var(--white)] inline-block px-2 py-[2px] rounded-md">
                                07/2018 - 07/2021</p>
                            <ul>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Chuyên ngành Ngôn ngữ Nga</li>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Tốt nghiệp loại giỏi. GPA 8.2</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <div class="w-full mb-16">
                    <h3 class="text-2xl font-bold mb-4 text-[var(--black)]">Giải thưởng</h3>
                    <ul>
                        <li
                            class="pb-10 relative border-l-2 pl-4 border-[var(--black)] before:absolute before:content-[''] before:-left-[9px] before:top-0 before:w-4 before:h-4 before:bg-[var(--white)] before:border-2 before:border-[var(--black)] before:rounded-full before:transition-all before:duration-300 transition-all duration-300">
                            <h4
                                class="text-[var(--black)] text-xl font-semibold mb-3 leading-6 transition-all duration-300">
                                AI4LIFE Hackathon 2025</h4>
                            <p
                                class="w-fit text-sm mb-3 bg-[var(--black)] text-[var(--white)] inline-block px-2 py-[2px] rounded-md">
                                08/2025</p>
                            <p class="mb-2 italic text-[var(--black)] transition-all duration-300">Giải nhì</p>
                            <ul>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Đạt giải nhì trong cuộc thi AI4LIFE Hackathon 2025 dành cho sinh viên trường FPT
                                    Polytechnic Miền Bắc
                                </li>
                            </ul>
                        </li>
                        <li
                            class="pb-10 relative border-l-2 pl-4 border-[var(--black)] before:absolute before:content-[''] before:-left-[9px] before:top-0 before:w-4 before:h-4 before:bg-[var(--white)] before:border-2 before:border-[var(--black)] before:rounded-full before:transition-all before:duration-300 transition-all duration-300">
                            <h4
                                class="text-[var(--black)] text-xl font-semibold mb-3 leading-6 transition-all duration-300">
                                Bậc thầy săn bug - Bug Slayer 2025</h4>
                            <p
                                class="w-fit text-sm mb-3 bg-[var(--black)] text-[var(--white)] inline-block px-2 py-[2px] rounded-md">
                                04/2025</p>
                            <p class="mb-2 italic text-[var(--black)] transition-all duration-300">Giải triển vọng</p>
                            <ul>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Đạt giải triển vọng trong cuộc thi Bậc thầy săn bug - Bug Slayer 2025 dành cho sinh viên
                                    trường FPT
                                    Polytechnic Miền Bắc
                                </li>
                            </ul>
                        </li>
                        <li
                            class="pb-10 relative border-l-2 pl-4 border-[var(--black)] before:absolute before:content-[''] before:-left-[9px] before:top-0 before:w-4 before:h-4 before:bg-[var(--white)] before:border-2 before:border-[var(--black)] before:rounded-full before:transition-all before:duration-300 transition-all duration-300">
                            <h4
                                class="text-[var(--black)] text-xl font-semibold mb-3 leading-6 transition-all duration-300">
                                Cuộc thi Tiếng Anh - My Poly 2024</h4>
                            <p
                                class="w-fit text-sm mb-3 bg-[var(--black)] text-[var(--white)] inline-block px-2 py-[2px] rounded-md">
                                11/2024</p>
                            <p class="mb-2 italic text-[var(--black)] transition-all duration-300">Giải tiềm năng</p>
                            <ul>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Đạt giải tiềm năng trong cuộc thi Cuộc thi Tiếng Anh - My Poly 2024 dành cho sinh viên
                                    trường FPT
                                    Polytechnic Miền Bắc
                                </li>
                            </ul>
                        </li>
                        <li
                            class="pb-10 relative border-l-2 pl-4 border-[var(--black)] before:absolute before:content-[''] before:-left-[9px] before:top-0 before:w-4 before:h-4 before:bg-[var(--white)] before:border-2 before:border-[var(--black)] before:rounded-full before:transition-all before:duration-300 transition-all duration-300">
                            <h4
                                class="text-[var(--black)] text-xl font-semibold mb-3 leading-6 transition-all duration-300">
                                Quiz Bees 2024 Vòng loại Cơ sở</h4>
                            <p
                                class="w-fit text-sm mb-3 bg-[var(--black)] text-[var(--white)] inline-block px-2 py-[2px] rounded-md">
                                09/2024</p>
                            <p class="mb-2 italic text-[var(--black)] transition-all duration-300">Giải nhì</p>
                            <ul>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Đạt giải nhì vòng loại cơ sở trong cuộc thi Quiz Bees 2024 dành cho sinh viên trường
                                    FPT Polytechnic Hà Nam
                                </li>
                            </ul>
                        </li>
                        <li
                            class="pb-10 relative border-l-2 pl-4 border-[var(--black)] before:absolute before:content-[''] before:-left-[9px] before:top-0 before:w-4 before:h-4 before:bg-[var(--white)] before:border-2 before:border-[var(--black)] before:rounded-full before:transition-all before:duration-300 transition-all duration-300">
                            <h4
                                class="text-[var(--black)] text-xl font-semibold mb-3 leading-6 transition-all duration-300">
                                FPT Polytechnic Hackathon Front-end Master 2024</h4>
                            <p
                                class="w-fit text-sm mb-3 bg-[var(--black)] text-[var(--white)] inline-block px-2 py-[2px] rounded-md">
                                09/2024</p>
                            <p class="mb-2 italic text-[var(--black)] transition-all duration-300">Giải khuyến khích</p>
                            <ul>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Đạt giải khuyến khích trong cuộc thi Hackathon Front-end Master 2024 dành cho sinh viên
                                    CNTT trường FPT Polytechnic
                                </li>
                            </ul>
                        </li>
                        <li
                            class="pb-10 relative border-l-2 pl-4 border-[var(--black)] before:absolute before:content-[''] before:-left-[9px] before:top-0 before:w-4 before:h-4 before:bg-[var(--white)] before:border-2 before:border-[var(--black)] before:rounded-full before:transition-all before:duration-300 transition-all duration-300">
                            <h4
                                class="text-[var(--black)] text-xl font-semibold mb-3 leading-6 transition-all duration-300">
                                Cuộc thi trình diễn cổ phục FPT Polytechnic</h4>
                            <p
                                class="w-fit text-sm mb-3 bg-[var(--black)] text-[var(--white)] inline-block px-2 py-[2px] rounded-md">
                                08/2024</p>
                            <p class="mb-2 italic text-[var(--black)] transition-all duration-300">Giải nhất</p>
                            <ul>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Đạt giải nhất trong cuộc thi trình diễn cổ phục Sắc ngàn năm - Tinh hoa Việt FPT
                                    Polytechnic
                                </li>
                            </ul>
                        </li>
                        <li
                            class="pb-1 relative border-l-2 pl-4 border-[var(--black)] before:absolute before:content-[''] before:-left-[9px] before:top-0 before:w-4 before:h-4 before:bg-[var(--white)] dark:before:bg-tertiary before:border-2 before:border-[var(--black)] before:rounded-full before:transition-all before:duration-300 transition-all duration-300">
                            <h4
                                class="text-[var(--black)] text-xl font-semibold mb-3 leading-6 transition-all duration-300">
                                Giải thưởng sinh viên xuất sắc FPT Polytechnic</h4>
                            <p
                                class="w-fit text-sm mb-3 bg-[var(--black)] text-[var(--white)] inline-block px-2 py-[2px] rounded-md">
                                06/2024</p>
                            <p class="mb-2 italic text-[var(--black)] transition-all duration-300">Danh hiệu Ong vàng
                            </p>
                            <ul>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    2 lần đạt giải thưởng Ong vàng học kỳ mùa xuân và mua hè năm 2024 dành cho sinh viên top
                                    1 của trường
                                </li>
                            </ul>
                            <p class="mb-2 italic text-[var(--black)] transition-all duration-300">Danh hiệu Sinh viên Giỏi
                            </p>
                            <ul>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Đạt giải thưởng Sinh viên Giỏi học kỳ mùa xuân năm 2025
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="w-full mb-16">
                    <h3 class="text-2xl font-bold mb-4 text-[var(--black)]">Hoạt động</h3>
                    <ul>
                        <li
                            class="pb-10 relative border-l-2 pl-4 border-[var(--black)] before:absolute before:content-[''] before:-left-[9px] before:top-0 before:w-4 before:h-4 before:bg-[var(--white)] before:border-2 before:border-[var(--black)] before:rounded-full before:transition-all before:duration-300 transition-all duration-300">
                            <h4
                                class="text-[var(--black)] text-xl font-semibold mb-3 leading-6 transition-all duration-300">
                                JS Club - Japanese Software Engineers</h4>
                            <p
                                class="w-fit text-sm mb-3 bg-[var(--black)] text-[var(--white)] inline-block px-2 py-[2px] rounded-md">
                                04/2022 - 02/2023</p>
                            <p class="mb-2 italic text-[var(--black)] transition-all duration-300">Thành viên ban chuyên
                                môn
                            </p>
                            <ul>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Đã tham gia giảng dạy lập trình web HTML, CSS, Javascript cho các thành viên từ các ban
                                    khác trong Câu lạc bộ
                                </li>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Đã tham gia nhiều cuộc thi lập trình lớn nhỏ của CLB tổ chức cho tất cả các sinh viên
                                    trường và nội bộ CLB
                                </li>
                            </ul>
                        </li>
                        <li
                            class="pb-1 relative border-l-2 pl-4 border-[var(--black)] before:absolute before:content-[''] before:-left-[9px] before:top-0 before:w-4 before:h-4 before:bg-[var(--white)] before:border-2 before:border-[var(--black)] before:rounded-full before:transition-all before:duration-300 transition-all duration-300">
                            <h4
                                class="text-[var(--black)] text-xl font-semibold mb-3 leading-6 transition-all duration-300">
                                CLB Bóng bàn THPT Chuyên Biên Hòa</h4>
                            <p
                                class="w-fit text-sm mb-3 bg-[var(--black)] text-[var(--white)] inline-block px-2 py-[2px] rounded-md">
                                03/2021 - 05/2021</p>
                            <p class="mb-2 italic text-[var(--black)] transition-all duration-300">Chủ tịch</p>
                            <ul>
                                <li
                                    class="relative text-[var(--black)] mb-2 pl-4 before:absolute before:content-[''] before:w-2 before:h-2 before:rounded-full before:bg-[var(--black)] before:top-2 before:left-0 transition-all duration-300">
                                    Là người sáng lập câu lạc bộ bóng bàn của trường
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full md:mt-0 px-6 md:px-8 mb-16">
        <div class="max-w-screen-lg m-auto mb-10 flex justify-between items-center">
            <h3
                class="w-fit inline-block text-[var(--black)] font-light text-3xl tracking-[6px] uppercase relative transition-all duration-300 before:absolute before:-bottom-[5px] before:left-0 before:h-[1px] before:content-[''] before:w-[60px] before:bg-[var(--black)] after:absolute after:-bottom-[7px] after:right-0 after:left-[56px] after:w-[6px] after:h-[6px] after:rounded-full after:bg-[var(--black)]">
                Dự án gần đây
            </h3>
            <a href="/what-i-do" class="text-[var(--black)] flex items-center group">Xem tất cả
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 512"
                    class="text-lg group-hover:translate-x-1 transition-all duration-100" height="1em" width="1em"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                    </path>
                </svg>
            </a>
        </div>
        <div class="max-w-screen-lg m-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                @foreach ($projects as $project)
                    <div class="bg-[var(--content-bg)] transition-all duration-300 flex flex-col gap-2 overflow-hidden">
                        <img src="{{ $project->thumbnail }}" alt="{{ $project->name }}"
                            class="aspect-video object-cover">
                        <div class="p-4 flex flex-col gap-2 justify-between h-full">
                            <div>
                                <h2 class="font-semibold text-lg line-clamp-2 text-[var(--black)]">{{ $project->name }}
                                </h2>
                                <p
                                    class="w-fit text-sm mb-3 bg-[var(--black)] text-[var(--white)] inline-block px-2 py-[2px] rounded-md">
                                    {{ date('m/Y', strtotime($project->created_at)) }}</p>
                                <p class="text-[var(--black)]">{{ $project->description }}
                                </p>
                            </div>
                            <div class="flex justify-end">
                                <a href="/what-i-do/projects/{{ $project->project_id }}"
                                    class="text-[var(--black)] flex items-center group">Xem
                                    chi
                                    tiết<svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 256 512"
                                        class="text-lg group-hover:translate-x-1 transition-all duration-100"
                                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="flex justify-center mt-10">
            <a newtab href="https://cv.tunnaduong.com" class="text-[var(--black)] flex items-center group">Cảm
                thấy tò mò? Xem CV
                của mình
                <i class="fa-solid fa-arrow-up-right-from-square ml-3"></i>
            </a>
        </div>
    </section>
@endsection
