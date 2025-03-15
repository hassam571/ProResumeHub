@extends('perezLight.layouts.main')
@section('content')

    <!-- Header end -->

        <!-- Hero Section Start -->
        <section class="bg-secondary pt-20">
            <div class="max-w-1075 mx-auto banner-contents" data-aos="flip-down" data-aos-delay="300">
                <div class="grid grid-cols-1">
                    <h4 class="text-dark fw-bold font-Syne leading-snug banner-title max-w-950 mb-12">
                        Designing the perfect feature comparison table
                    </h4>
                    <img class="w-100 rounded-20 mb-9" src="{{ asset('assets3/images/blog-details/banner2.png') }}" alt="banner">
                </div>

            </div>
        </section>
        <!-- Hero Section End -->


        <section class="bg-white blog-details-section pb-120">
            <div class="max-w-1075 mx-auto banner-contents">

                <div class="grid grid-cols-1 mb-12">

                    <ul class="d-flex flex-wrap list-unstyled blog-clients-info">
                        <li class="d-flex flex-wrap gap-3">
                            <img class="align-self-start" src="{{ asset('assets3/images/blog-details/user.png') }}" alt="user image">
                            <div class="flex-1 d-flex flex-column gap-3">
                                <span class="clients-info-text text-sm fw-normal font-Inter leading-tight">Written
                                    by</span>
                                <h2 class="text-dark text-15 fw-bold font-sans leading-none">{{ $user->first_name }}</h2>
                            </div>
                        </li>
                        <li class="d-d-flex flex-wrap flex-column gap-3">
                            <span class="clients-info-text text-sm fw-normal font-Inter leading-tight">Category</span>
                            <h4 class="text-dark text-15 fw-bold font-sans leading-none">{{ $skills->skill_subcategory }}
                            </h4>
                        </li>
                        <li class="d-d-flex flex-wrap flex-column gap-3">
                            <span class="clients-info-text text-sm fw-normal font-Inter leading-tight">Date</span>
                            <h4 class="text-dark text-15 fw-bold font-sans leading-none">{{ \Carbon\Carbon::parse($skills->start_date)->format('d M, Y') }}</h4>
                        </li>
                    </ul>
                </div>
                <div class="grid grid-cols-1">

                    <h3 class="text-2xl fw-bold font-Syne leading-10 mb-5">About the position</h3>
                    <p class="paragraph mb-12">Everyone in my team works towards the samegoal. This enabled our teams to
                        ship new ideas and feel more capable. Podcasting operational — change management inside of
                        workflows. Completely synergize.</p>
                    <p class="paragraph mb-12">But I must explain to you how all this mistaken idea of denouncing
                        pleasure and praising pain was born and I will give you a complete account of the system, and
                        expound the actual teachings of the great explorer of the truth, the master-builder of human
                        happiness. No one rejects, dislikes, or avoids pleasure itself</p>
                    <p class="paragraph mb-12">On the other hand, we denounce with righteous indignation and dislike men
                        who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by
                        desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame
                        belongs to those who fail in their duty through weakness of will, which is the same as saying
                        through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.
                        In a free hour, when our power of choice is untrammelled and when nothing prevents our being
                        able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p>
                </div>
                <div class="row gy-4 gy-md-6 mb-12">
                    <div class="col-6">
                        <img class="w-100 h-100 rounded-20p" src="{{ asset('assets3/images/blog-details/post3.png') }}" alt="post image">
                    </div>
                    <div class="col-6">
                        <img class="w-100 h-100 rounded-20p" src="{{ asset('assets3/images/blog-details/post4.png') }}" alt="post image">
                    </div>
                </div>


                <div class="grid grid-cols-1 gap-6">
                    <h3 class="text-2xl fw-bold font-Syne leading-10">1. Learning the basics</h3>
                    <p class="paragraph">Everyone in my team works towards the samegoal. This enabled our teams to ship
                        new ideas and feel more capable. Podcasting operational — change management inside of workflows.
                        Completely synergize.</p>
                    <p class="paragraph mb-12">
                        But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                        was born and I will give you a complete account of the system, and expound the actual teachings
                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                        dislikes, or avoids pleasure itself
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-6">
                    <h3 class="text-2xl fw-bold font-Syne leading-10">2. Learning the basics</h3>
                    <p class="paragraph">Everyone in my team works towards the samegoal. This enabled our teams to ship
                        new ideas and feel more capable. Podcasting operational — change management inside of workflows.
                        Completely synergize.</p>
                    <p class="paragraph">
                        But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                        was born and I will give you a complete account of the system, and expound the actual teachings
                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                        dislikes, or avoids pleasure itself
                    </p>

                    <div class="d-inline-flex justify-content-between flex-column flex-md-row gap-4 gap-md-0">
                        <div class="d-inline-flex gap-4 align-items-center">
                            <span class="text-black-text-800 text-sm fw-normal font-Inter leading-tight">Share:</span>
                            <ul class="d-inline-flex gap-sm-4 list-unstyled p-0">
                                <li><a href="#" class="blog-social-link"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.6696 29.6667V21.1658H24.7102L25.1622 17.8374H21.6696V15.7174C21.6696 14.7569 21.9533 14.0993 23.4148 14.0993H25.2667V11.1319C24.3656 11.0408 23.4599 10.9968 22.5537 11.0002C19.8661 11.0002 18.0208 12.5477 18.0208 15.3886V17.8312H15V21.1595H18.0274V29.6667H21.6696Z" fill="currentColor" fill-opacity="0.9" />
                                        </svg>
                                    </a></li>
                                <li><a href="#" class="blog-social-link"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M28.3333 14.8346L26.5833 15.1421L27.75 13.6045L25.7083 14.2196C23.0833 11.1444 19 14.5271 20.1667 17.2947C15.5 17.2947 13.1667 13.6045 13.1667 13.6045C13.1667 13.6045 11.4167 16.3722 14.3333 18.5248L12.5833 17.9098C12.5833 19.7549 13.75 20.9849 15.7917 21.6H13.75C14.9167 24.0601 16.9583 24.0601 16.9583 24.0601C16.9583 24.0601 15.2083 25.5977 12 25.5977C21.625 30.518 27.4583 21.2925 26.5833 16.3722L28.3333 14.8346Z" fill="currentColor" fill-opacity="0.9" />
                                            <path d="M17.288 24.4361C17.2882 24.4359 17.2884 24.4357 16.9583 24.0601L17.2884 24.4357L18.2849 23.5601L16.9615 23.5601L16.9548 23.5599C16.9464 23.5596 16.9311 23.5588 16.9095 23.557C16.8663 23.5535 16.7985 23.5459 16.7113 23.5299C16.5366 23.4979 16.287 23.4326 16.0038 23.2999C15.5807 23.1016 15.0686 22.7467 14.6146 22.1H15.7917L15.9359 21.1212C14.9741 20.8315 14.2633 20.41 13.7955 19.8839C13.4837 19.5332 13.2674 19.1224 13.1604 18.6426L14.1675 18.9965L14.6302 18.1225C13.3207 17.156 13.0939 16.0977 13.1548 15.2953C13.1748 15.0316 13.2268 14.7897 13.2888 14.5819C13.5959 14.9376 14.0349 15.3898 14.6065 15.8418C15.8369 16.8147 17.6929 17.7947 20.1667 17.7947H20.92L20.6274 17.1005C20.1642 16.0016 20.7255 14.6983 21.7942 13.9813C22.3149 13.6319 22.921 13.4521 23.5221 13.5111C24.1148 13.5693 24.7473 13.8638 25.328 14.5442L25.54 14.7925L25.8526 14.6983L26.4228 14.5265L26.185 14.8399L25.4147 15.8551L26.6642 15.6356L26.2533 15.9966L26.0417 16.1824L26.0911 16.4597C26.4932 18.7211 25.3417 22.0921 22.8939 24.3042C21.683 25.3986 20.1702 26.1933 18.3966 26.4282C17.08 26.6026 15.6004 26.471 13.9715 25.9035C14.7405 25.7473 15.3828 25.5163 15.8906 25.2834C16.3373 25.0787 16.6799 24.8727 16.9139 24.7152C17.031 24.6364 17.1211 24.5696 17.1836 24.521C17.2149 24.4967 17.2393 24.477 17.2568 24.4625L17.2778 24.4449L17.2844 24.4392L17.2867 24.4372L17.2876 24.4364L17.288 24.4361ZM16.9621 23.5601L16.9616 23.5601L16.9621 23.5601Z" stroke="currentColor" stroke-opacity="0.9" />
                                        </svg>
                                    </a></li>
                                <li><a href="#" class="blog-social-link"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <mask id="path-1-inside-1_1554_1179" fill="white">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.1646 12H20.1687C24.6716 12 28.3333 15.6638 28.3333 20.1667C28.3333 24.6696 24.6716 28.3333 20.1687 28.3333C18.5078 28.3333 16.9674 27.8393 15.676 26.9838L12.537 27.9873L13.5547 24.9534C12.5758 23.6089 12 21.9531 12 20.1667C12 15.6628 15.6617 12 20.1646 12ZM23.318 24.685C23.9417 24.5502 24.7237 24.0888 24.9207 23.5325C25.1177 22.9751 25.1177 22.5004 25.0606 22.3994C25.0144 22.3192 24.9053 22.2666 24.7423 22.1882C24.6999 22.1677 24.6538 22.1455 24.6043 22.1207C24.3644 22.0012 23.1976 21.4245 22.9771 21.3479C22.7606 21.2662 22.5544 21.2948 22.3911 21.5255C22.36 21.569 22.329 21.6126 22.2982 21.656C22.1012 21.9331 21.9111 22.2004 21.7531 22.3708C21.6091 22.5239 21.3744 22.5433 21.1773 22.4616C21.1559 22.4527 21.1312 22.4427 21.1037 22.4316C20.7917 22.3056 20.0998 22.0261 19.2622 21.2805C18.5558 20.6517 18.076 19.8687 17.9372 19.6339C17.8009 19.3984 17.9185 19.2603 18.0271 19.1326C18.0292 19.1303 18.0312 19.1279 18.0332 19.1255C18.1032 19.0389 18.1712 18.9667 18.2395 18.8941C18.2887 18.8419 18.338 18.7896 18.3884 18.7315C18.3959 18.7229 18.4032 18.7145 18.4103 18.7063C18.5173 18.5833 18.581 18.51 18.6528 18.3569C18.7345 18.1986 18.6763 18.0353 18.6181 17.9148C18.5781 17.8305 18.3308 17.2304 18.1185 16.7153C18.0276 16.4949 17.9432 16.29 17.8841 16.1478C17.7259 15.769 17.6054 15.7547 17.3655 15.7445C17.3582 15.7442 17.3508 15.7438 17.3433 15.7434C17.2674 15.7396 17.1839 15.7354 17.092 15.7354C16.7796 15.7354 16.4539 15.8272 16.2569 16.0283C16.25 16.0354 16.2429 16.0427 16.2354 16.0502C15.9834 16.3066 15.4219 16.8776 15.4219 18.0159C15.4219 19.1564 16.2311 20.2601 16.3808 20.4643C16.3849 20.47 16.3886 20.4749 16.3917 20.4792C16.4007 20.491 16.4177 20.5156 16.4424 20.5514C16.7481 20.9941 18.2372 23.1505 20.4576 24.0705C22.3339 24.8483 22.8913 24.7759 23.318 24.685Z" />
                                            </mask>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.1646 12H20.1687C24.6716 12 28.3333 15.6638 28.3333 20.1667C28.3333 24.6696 24.6716 28.3333 20.1687 28.3333C18.5078 28.3333 16.9674 27.8393 15.676 26.9838L12.537 27.9873L13.5547 24.9534C12.5758 23.6089 12 21.9531 12 20.1667C12 15.6628 15.6617 12 20.1646 12ZM23.318 24.685C23.9417 24.5502 24.7237 24.0888 24.9207 23.5325C25.1177 22.9751 25.1177 22.5004 25.0606 22.3994C25.0144 22.3192 24.9053 22.2666 24.7423 22.1882C24.6999 22.1677 24.6538 22.1455 24.6043 22.1207C24.3644 22.0012 23.1976 21.4245 22.9771 21.3479C22.7606 21.2662 22.5544 21.2948 22.3911 21.5255C22.36 21.569 22.329 21.6126 22.2982 21.656C22.1012 21.9331 21.9111 22.2004 21.7531 22.3708C21.6091 22.5239 21.3744 22.5433 21.1773 22.4616C21.1559 22.4527 21.1312 22.4427 21.1037 22.4316C20.7917 22.3056 20.0998 22.0261 19.2622 21.2805C18.5558 20.6517 18.076 19.8687 17.9372 19.6339C17.8009 19.3984 17.9185 19.2603 18.0271 19.1326C18.0292 19.1303 18.0312 19.1279 18.0332 19.1255C18.1032 19.0389 18.1712 18.9667 18.2395 18.8941C18.2887 18.8419 18.338 18.7896 18.3884 18.7315C18.3959 18.7229 18.4032 18.7145 18.4103 18.7063C18.5173 18.5833 18.581 18.51 18.6528 18.3569C18.7345 18.1986 18.6763 18.0353 18.6181 17.9148C18.5781 17.8305 18.3308 17.2304 18.1185 16.7153C18.0276 16.4949 17.9432 16.29 17.8841 16.1478C17.7259 15.769 17.6054 15.7547 17.3655 15.7445C17.3582 15.7442 17.3508 15.7438 17.3433 15.7434C17.2674 15.7396 17.1839 15.7354 17.092 15.7354C16.7796 15.7354 16.4539 15.8272 16.2569 16.0283C16.25 16.0354 16.2429 16.0427 16.2354 16.0502C15.9834 16.3066 15.4219 16.8776 15.4219 18.0159C15.4219 19.1564 16.2311 20.2601 16.3808 20.4643C16.3849 20.47 16.3886 20.4749 16.3917 20.4792C16.4007 20.491 16.4177 20.5156 16.4424 20.5514C16.7481 20.9941 18.2372 23.1505 20.4576 24.0705C22.3339 24.8483 22.8913 24.7759 23.318 24.685Z" fill="currentColor" fill-opacity="0.9" />
                                            <path d="M15.676 26.9838L16.2283 26.1501L15.8284 25.8852L15.3715 26.0313L15.676 26.9838ZM12.537 27.9873L11.5889 27.6692L10.961 29.5409L12.8415 28.9398L12.537 27.9873ZM13.5547 24.9534L14.5028 25.2714L14.667 24.782L14.3631 24.3647L13.5547 24.9534ZM24.9207 23.5325L25.8634 23.8663L25.8636 23.8657L24.9207 23.5325ZM23.318 24.685L23.5263 25.6631L23.5292 25.6624L23.318 24.685ZM25.0606 22.3994L25.931 21.907L25.9272 21.9004L25.0606 22.3994ZM24.7423 22.1882L24.3085 23.0892L24.3085 23.0892L24.7423 22.1882ZM24.6043 22.1207L25.053 21.227L25.05 21.2255L24.6043 22.1207ZM22.9771 21.3479L22.624 22.2835L22.6365 22.2882L22.6491 22.2926L22.9771 21.3479ZM22.3911 21.5255L23.2048 22.1068L23.2073 22.1033L22.3911 21.5255ZM22.2982 21.656L21.4832 21.0765V21.0765L22.2982 21.656ZM21.7531 22.3708L22.4817 23.0557L22.4863 23.0508L21.7531 22.3708ZM21.1773 22.4616L20.7925 23.3846L20.7944 23.3854L21.1773 22.4616ZM21.1037 22.4316L21.4782 21.5044L21.4781 21.5044L21.1037 22.4316ZM19.2622 21.2805L19.9272 20.5336L19.9271 20.5336L19.2622 21.2805ZM17.9372 19.6339L17.0717 20.1348L17.0764 20.1429L17.9372 19.6339ZM18.0271 19.1326L17.2657 18.4844L17.2657 18.4844L18.0271 19.1326ZM18.0332 19.1255L18.7949 19.7734L18.803 19.7639L18.8109 19.7541L18.0332 19.1255ZM18.2395 18.8941L18.9675 19.5798L18.9675 19.5798L18.2395 18.8941ZM18.3884 18.7315L17.6331 18.0761L17.6331 18.0761L18.3884 18.7315ZM18.4103 18.7063L19.1648 19.3626L19.1648 19.3626L18.4103 18.7063ZM18.6528 18.3569L17.7642 17.8982L17.7554 17.9152L17.7474 17.9324L18.6528 18.3569ZM18.6181 17.9148L17.7147 18.3436L17.7177 18.3498L18.6181 17.9148ZM18.1185 16.7153L19.043 16.3343L18.1185 16.7153ZM17.8841 16.1478L18.8077 15.7644L18.8068 15.7623L17.8841 16.1478ZM17.3655 15.7445L17.3156 16.7433L17.323 16.7436L17.3655 15.7445ZM17.3433 15.7434L17.3938 14.7447L17.3938 14.7447L17.3433 15.7434ZM16.2569 16.0283L15.5426 15.3285L15.5424 15.3287L16.2569 16.0283ZM16.2354 16.0502L15.5224 15.3491L15.5224 15.3491L16.2354 16.0502ZM16.3808 20.4643L17.1873 19.8731L17.1873 19.8731L16.3808 20.4643ZM16.3917 20.4792L15.5836 21.0682L15.5897 21.0766L15.596 21.0849L16.3917 20.4792ZM16.4424 20.5514L15.6195 21.1196L15.6195 21.1196L16.4424 20.5514ZM20.4576 24.0705L20.8406 23.1467L20.8404 23.1466L20.4576 24.0705ZM20.1687 11H20.1646V13H20.1687V11ZM29.3333 20.1667C29.3333 15.1118 25.2242 11 20.1687 11V13C24.119 13 27.3333 16.2157 27.3333 20.1667H29.3333ZM20.1687 29.3333C25.2242 29.3333 29.3333 25.2215 29.3333 20.1667H27.3333C27.3333 24.1176 24.119 27.3333 20.1687 27.3333V29.3333ZM15.1238 27.8175C16.5742 28.7783 18.3058 29.3333 20.1687 29.3333V27.3333C18.7098 27.3333 17.3606 26.9002 16.2283 26.1501L15.1238 27.8175ZM12.8415 28.9398L15.9805 27.9363L15.3715 26.0313L12.2325 27.0348L12.8415 28.9398ZM12.6067 24.6353L11.5889 27.6692L13.485 28.3053L14.5028 25.2714L12.6067 24.6353ZM11 20.1667C11 22.1712 11.6467 24.0319 12.7463 25.542L14.3631 24.3647C13.5048 23.1859 13 21.7351 13 20.1667H11ZM20.1646 11C15.1092 11 11 15.1107 11 20.1667H13C13 16.2148 16.2143 13 20.1646 13V11ZM23.9781 23.1987C23.9811 23.1901 23.9337 23.2933 23.7189 23.4387C23.5221 23.5718 23.2886 23.6683 23.1069 23.7075L23.5292 25.6624C23.9712 25.567 24.4405 25.3653 24.8399 25.095C25.2213 24.8369 25.6633 24.4312 25.8634 23.8663L23.9781 23.1987ZM24.1902 22.8917C24.1544 22.8285 24.134 22.7747 24.1231 22.7423C24.1115 22.708 24.1049 22.6806 24.1013 22.6637C24.0975 22.646 24.0955 22.6331 24.0946 22.6259C24.0936 22.6185 24.0933 22.6144 24.0932 22.614C24.0932 22.6137 24.0938 22.622 24.0935 22.6395C24.0933 22.6566 24.0922 22.6796 24.0897 22.7081C24.0794 22.8264 24.0478 23.0015 23.9779 23.1992L25.8636 23.8657C25.9907 23.5061 26.0575 23.1651 26.0822 22.8815C26.0945 22.7406 26.0976 22.5995 26.0879 22.4673C26.0819 22.3865 26.0635 22.1412 25.931 21.907L24.1902 22.8917ZM24.3085 23.0892C24.3517 23.11 24.3788 23.123 24.4012 23.1345C24.4235 23.1457 24.4266 23.1481 24.4201 23.1441C24.4139 23.1403 24.3833 23.1212 24.3435 23.0852C24.3019 23.0475 24.2447 22.9865 24.194 22.8983L25.9272 21.9004C25.7822 21.6486 25.5787 21.5089 25.4704 21.4421C25.3628 21.3757 25.2413 21.3185 25.1761 21.2872L24.3085 23.0892ZM24.1555 23.0143C24.2135 23.0435 24.2667 23.069 24.3085 23.0892L25.1761 21.2872C25.1331 21.2664 25.0941 21.2476 25.053 21.227L24.1555 23.0143ZM22.6491 22.2926C22.6478 22.2921 22.7138 22.3191 22.8706 22.3917C23.0075 22.455 23.1759 22.5353 23.3485 22.6187C23.693 22.7851 24.0409 22.9573 24.1586 23.0159L25.05 21.2255C24.9277 21.1646 24.5723 20.9887 24.2183 20.8177C23.9017 20.6648 23.4853 20.4658 23.3051 20.4032L22.6491 22.2926ZM23.2073 22.1033C23.181 22.1405 23.0885 22.2424 22.9161 22.2873C22.7573 22.3287 22.6448 22.2913 22.624 22.2835L23.3301 20.4123C23.0929 20.3228 22.7691 20.2589 22.4123 20.3518C22.0418 20.4482 21.7646 20.6798 21.5749 20.9477L23.2073 22.1033ZM23.1132 22.2354C23.1441 22.1919 23.1745 22.1492 23.2048 22.1068L21.5774 20.9443C21.5456 20.9888 21.514 21.0333 21.4832 21.0765L23.1132 22.2354ZM22.4863 23.0508C22.699 22.8215 22.932 22.4902 23.1132 22.2354L21.4832 21.0765C21.2703 21.3759 21.1232 21.5793 21.0199 21.6908L22.4863 23.0508ZM20.7944 23.3854C21.2548 23.5763 21.9728 23.597 22.4817 23.0557L21.0245 21.6859C21.1307 21.5728 21.2571 21.526 21.3503 21.5134C21.4381 21.5014 21.5084 21.5164 21.5603 21.5378L20.7944 23.3854ZM20.7292 23.3588C20.7583 23.3706 20.7772 23.3782 20.7925 23.3846L21.5622 21.5387C21.5345 21.5271 21.5042 21.5149 21.4782 21.5044L20.7292 23.3588ZM18.5973 22.0274C19.5576 22.8823 20.3692 23.2134 20.7292 23.3588L21.4781 21.5044C21.2142 21.3978 20.642 21.17 19.9272 20.5336L18.5973 22.0274ZM17.0764 20.1429C17.2282 20.3996 17.7716 21.2924 18.5973 22.0274L19.9271 20.5336C19.3401 20.011 18.9239 19.3378 18.798 19.1249L17.0764 20.1429ZM17.2657 18.4844C17.2375 18.5176 17.0369 18.7328 16.9391 19.0341C16.8135 19.4214 16.8825 19.8079 17.0717 20.1348L18.8027 19.133C18.8211 19.1648 18.8555 19.236 18.8696 19.3412C18.8844 19.4517 18.8714 19.5592 18.8415 19.6515C18.8141 19.736 18.7784 19.7892 18.7677 19.8046C18.76 19.8156 18.7561 19.819 18.7886 19.7808L17.2657 18.4844ZM17.2714 18.4777C17.2696 18.4798 17.2677 18.482 17.2657 18.4844L18.7886 19.7809C18.7906 19.7785 18.7927 19.776 18.7949 19.7734L17.2714 18.4777ZM17.5116 18.2085C17.4454 18.2788 17.3525 18.3768 17.2554 18.497L18.8109 19.7541C18.8539 19.7009 18.8971 19.6545 18.9675 19.5798L17.5116 18.2085ZM17.6331 18.0761C17.5981 18.1165 17.5624 18.1546 17.5116 18.2085L18.9675 19.5798C19.015 19.5293 19.078 19.4627 19.1437 19.3868L17.6331 18.0761ZM17.6557 18.0501C17.6487 18.0582 17.641 18.067 17.6331 18.0761L19.1437 19.3869C19.1508 19.3787 19.1577 19.3708 19.1648 19.3626L17.6557 18.0501ZM17.7474 17.9324C17.7407 17.9467 17.7371 17.9528 17.7365 17.9539C17.7361 17.9545 17.7361 17.9546 17.7349 17.9562C17.7331 17.9587 17.7279 17.9657 17.7151 17.9811C17.7009 17.9981 17.6841 18.0175 17.6557 18.0501L19.1648 19.3626C19.2807 19.2293 19.4238 19.0683 19.5583 18.7813L17.7474 17.9324ZM17.7177 18.3498C17.7307 18.3769 17.7102 18.343 17.6995 18.2734C17.6864 18.1882 17.688 18.0459 17.7642 17.8982L19.5414 18.8155C19.8612 18.1959 19.589 17.6257 19.5186 17.4799L17.7177 18.3498ZM17.1939 17.0964C17.3954 17.5854 17.6598 18.2279 17.7147 18.3436L19.5215 17.4861C19.5231 17.4894 19.5099 17.4598 19.4744 17.3756C19.4434 17.3021 19.4029 17.2051 19.3565 17.0932C19.2637 16.8697 19.1493 16.5922 19.043 16.3343L17.1939 17.0964ZM16.9605 16.5311C17.019 16.672 17.1029 16.8755 17.1939 17.0964L19.043 16.3343C18.9524 16.1144 18.8674 15.9081 18.8077 15.7644L16.9605 16.5311ZM17.323 16.7436C17.3906 16.7465 17.3762 16.7479 17.3455 16.7423C17.2973 16.7334 17.2063 16.709 17.1085 16.6451C17.0136 16.5831 16.962 16.5165 16.9436 16.4893C16.9289 16.4678 16.9361 16.4727 16.9614 16.5333L18.8068 15.7623C18.7101 15.5308 18.5444 15.1942 18.2024 14.9708C17.8577 14.7456 17.4869 14.7488 17.4081 14.7454L17.323 16.7436ZM17.2927 16.7421C17.3001 16.7425 17.3079 16.7429 17.3156 16.7433L17.4155 14.7458C17.4085 14.7454 17.4014 14.7451 17.3938 14.7447L17.2927 16.7421ZM17.092 16.7354C17.1553 16.7354 17.2151 16.7382 17.2927 16.7421L17.3938 14.7447C17.3198 14.7409 17.2126 14.7354 17.092 14.7354V16.7354ZM16.9712 16.7281C16.9508 16.749 16.9353 16.7586 16.9312 16.761C16.9273 16.7634 16.9314 16.7604 16.9459 16.7556C16.9775 16.7451 17.0293 16.7354 17.092 16.7354V14.7354C16.6334 14.7354 15.999 14.8627 15.5426 15.3285L16.9712 16.7281ZM16.9484 16.7514C16.9557 16.7439 16.9637 16.7359 16.9714 16.728L15.5424 15.3287C15.5364 15.3348 15.53 15.3414 15.5224 15.3491L16.9484 16.7514ZM16.4219 18.0159C16.4219 17.6213 16.5167 17.357 16.6133 17.1789C16.7141 16.9929 16.8322 16.8696 16.9485 16.7514L15.5224 15.3491C15.21 15.6668 14.4219 16.4803 14.4219 18.0159H16.4219ZM17.1873 19.8731C17.122 19.7841 16.9228 19.5119 16.7404 19.1456C16.5516 18.7663 16.4219 18.3661 16.4219 18.0159H14.4219C14.4219 18.8062 14.6967 19.5281 14.95 20.0368C15.2097 20.5586 15.4899 20.9404 15.5743 21.0556L17.1873 19.8731ZM17.1997 19.8901C17.1957 19.8845 17.1912 19.8784 17.1873 19.8731L15.5743 21.0556C15.5787 21.0616 15.5815 21.0653 15.5836 21.0682L17.1997 19.8901ZM17.2652 19.9832C17.2498 19.9608 17.2145 19.9091 17.1873 19.8734L15.596 21.0849C15.5926 21.0805 15.5902 21.0771 15.589 21.0755C15.5883 21.0746 15.5878 21.074 15.5875 21.0735C15.5872 21.0731 15.5871 21.0729 15.587 21.0729C15.587 21.0728 15.5874 21.0733 15.5882 21.0745C15.589 21.0757 15.5901 21.0772 15.5916 21.0793C15.598 21.0885 15.6065 21.1008 15.6195 21.1196L17.2652 19.9832ZM20.8404 23.1466C18.9211 22.3514 17.5766 20.434 17.2652 19.9832L15.6195 21.1196C15.9196 21.5542 17.5533 23.9496 20.0749 24.9943L20.8404 23.1466ZM23.1098 23.7069C22.9794 23.7347 22.8616 23.7592 22.5881 23.7158C22.2719 23.6657 21.7458 23.522 20.8406 23.1467L20.0747 24.9942C21.0457 25.3968 21.7365 25.6058 22.2748 25.6912C22.8557 25.7833 23.2299 25.7262 23.5263 25.6631L23.1098 23.7069Z" fill="currentColor" fill-opacity="0.9" mask="url(#path-1-inside-1_1554_1179)" />
                                        </svg>
                                    </a></li>
                                <li><a href="#" class="blog-social-link"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.1338 27H13.2313V17.6529H16.1338V27ZM14.681 16.3779C13.7528 16.3779 13 15.6091 13 14.681C13 14.2352 13.1771 13.8076 13.4923 13.4923C13.8076 13.1771 14.2352 13 14.681 13C15.1268 13 15.5544 13.1771 15.8696 13.4923C16.1848 13.8076 16.3619 14.2352 16.3619 14.681C16.3619 15.6091 15.6088 16.3779 14.681 16.3779ZM26.9972 27H24.1009V22.4499C24.1009 21.3655 24.079 19.9748 22.5918 19.9748C21.0827 19.9748 20.8514 21.153 20.8514 22.3718V27H17.952V17.6529H20.7358V18.9279H20.7764C21.1639 18.1936 22.1105 17.4185 23.5227 17.4185C26.4603 17.4185 27.0003 19.353 27.0003 21.8655V27H26.9972Z" fill="currentColor" fill-opacity="0.9" />
                                            <path d="M26.5003 21.8655V26.5H24.6009V22.4499V22.4436C24.6009 21.9238 24.6009 21.2074 24.3689 20.6216C24.2467 20.3131 24.0518 20.0158 23.7411 19.799C23.4292 19.5815 23.0434 19.4748 22.5918 19.4748C22.1495 19.4748 21.7646 19.5614 21.441 19.7405C21.1146 19.9213 20.8806 20.1797 20.7179 20.4748C20.4054 21.0414 20.3514 21.7532 20.3514 22.3718V26.5H18.452V18.1529H20.2358V18.9279V19.4279H20.7358H20.7764H21.0779L21.2186 19.1613C21.5238 18.583 22.3047 17.9185 23.5227 17.9185C24.8682 17.9185 25.5525 18.3507 25.94 18.9662C26.3609 19.6348 26.5003 20.62 26.5003 21.8655ZM15.6338 26.5H13.7313V18.1529H15.6338V26.5ZM14.681 15.8779C14.0351 15.8779 13.5 15.3391 13.5 14.681C13.5 14.3678 13.6244 14.0674 13.8459 13.8459C14.0674 13.6244 14.3678 13.5 14.681 13.5C14.9942 13.5 15.2946 13.6244 15.5161 13.8459C15.7375 14.0674 15.8619 14.3678 15.8619 14.681C15.8619 15.3391 15.3266 15.8779 14.681 15.8779Z" stroke="currentColor" stroke-opacity="0.9" />
                                        </svg>
                                    </a></li>
                                <li><a href="#" class="blog-social-link"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.332 20.833C18.6899 21.3114 19.1465 21.7073 19.6708 21.9938C20.1952 22.2802 20.775 22.4506 21.3709 22.4933C21.9669 22.5359 22.565 22.45 23.1248 22.2411C23.6846 22.0323 24.193 21.7055 24.6154 21.283L27.1154 18.783C27.8744 17.9971 28.2943 16.9446 28.2848 15.8521C28.2753 14.7597 27.8371 13.7146 27.0646 12.9421C26.2921 12.1695 25.247 11.7313 24.1545 11.7218C23.062 11.7123 22.0095 12.1323 21.2237 12.8913L19.7904 14.3163" stroke="currentColor" stroke-opacity="0.9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M21.6659 19.167C21.308 18.6886 20.8514 18.2927 20.3271 18.0062C19.8027 17.7198 19.2229 17.5494 18.627 17.5067C18.031 17.4641 17.4329 17.55 16.8731 17.7589C16.3133 17.9677 15.8049 18.2945 15.3825 18.717L12.8825 21.217C12.1235 22.0029 11.7036 23.0554 11.713 24.1479C11.7225 25.2403 12.1607 26.2854 12.9333 27.0579C13.7058 27.8305 14.7509 28.2687 15.8434 28.2782C16.9358 28.2877 17.9883 27.8677 18.7742 27.1087L20.1992 25.6837" stroke="currentColor" stroke-opacity="0.9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />

                                        </svg>
                                    </a></li>
                                <li><a href="#" class="blog-social-link"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M27.3671 13.8417C26.9415 13.4159 26.4361 13.0781 25.8799 12.8476C25.3237 12.6172 24.7275 12.4985 24.1254 12.4985C23.5234 12.4985 22.9272 12.6172 22.371 12.8476C21.8147 13.0781 21.3094 13.4159 20.8838 13.8417L20.0004 14.7251L19.1171 13.8417C18.2573 12.982 17.0913 12.499 15.8754 12.499C14.6596 12.499 13.4935 12.982 12.6338 13.8417C11.774 14.7015 11.291 15.8675 11.291 17.0834C11.291 18.2993 11.774 19.4653 12.6338 20.3251L13.5171 21.2084L20.0004 27.6917L26.4838 21.2084L27.3671 20.3251C27.7929 19.8994 28.1307 19.3941 28.3612 18.8379C28.5917 18.2816 28.7103 17.6855 28.7103 17.0834C28.7103 16.4813 28.5917 15.8851 28.3612 15.3289C28.1307 14.7727 27.7929 14.2674 27.3671 13.8417V13.8417Z" stroke="currentColor" stroke-opacity="0.9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="d-flex flex-wrap gap-2 align-items-center justify-content-md-end">
                            <a class="text-xs fw-medium font-Inter leading-none px-4 rounded-40 portfolio-tag-link" href="#">APP</a>
                            <a class="text-xs fw-medium font-Inter leading-none px-4 rounded-40 portfolio-tag-link" href="#">DEVELOPMENT</a>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog Section Start -->
        <section class="bg-white pb-120">
            <div class="container">

                <div class="row">
                    <div class="col-12" data-aos="flip-down">
                        <div class="fw-bold font-Syne text-center leading-none flex flex-wrap flex-column gap-y-2 mb-10">
                            <span class="text-warning text-xl">Blog</span>
                            <h3 class="section-title text-dark">
                                My blog
                                <span class="position-relative circle-shape blog-shape-inner">po</span>st
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="blog-grid">

                    <!-- Blog Item Start -->
                    <div class="blog-item" data-aos="fade-up">
                        <div class="rounded-20 overflow-hidden mb-6">
                            <img class="w-100" src="{{ asset('assets3/images/blog/blog1.png') }}" alt="blog image">
                        </div>
                        <div class="d-flex flex-wrap flex-column gap-3">
                            <ul class="d-flex flex-wrap text-sm fw-normal font-Inter leading-tight p-0 list-unstyled m-0 p-0 list-unstyled m-0">
                                <li class="blog-meta-item">
                                    <a href="#">UI Design</a>
                                </li>
                                <li class="blog-meta-item">
                                    <a href="#">03 May 2019</a>
                                </li>

                            </ul>
                            <div class="d-flex justify-content-between align-items-end text-dark blog-title-section">
                                <h4 class="fw-bold font-Syne transition-all leading-8 blog-title">
                                    <a href="blog-details.html">Right-lo-left
                                        behind development in mobile web design</a>
                                </h4>
                                <a href="blog-details.html">
                                    <svg class="animate-arrow-up" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.8839 9.11612C31.372 9.60427 31.372 10.3957 30.8839 10.8839L10.8839 30.8839C10.3957 31.372 9.60427 31.372 9.11612 30.8839C8.62796 30.3957 8.62796 29.6043 9.11612 29.1161L29.1161 9.11612C29.6043 8.62796 30.3957 8.62796 30.8839 9.11612Z" fill="currentColor" fill-opacity="0.9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 10C12.5 9.30964 13.0596 8.75 13.75 8.75H30C30.6904 8.75 31.25 9.30964 31.25 10V26.25C31.25 26.9404 30.6904 27.5 30 27.5C29.3096 27.5 28.75 26.9404 28.75 26.25V11.25H13.75C13.0596 11.25 12.5 10.6904 12.5 10Z" fill="currentColor" fill-opacity="0.9" />
                                    </svg>

                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item End -->

                    <!-- Blog Item Start -->
                    <div class="blog-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="rounded-20 overflow-hidden mb-6">
                            <img class="w-100" src="{{ asset('assets3/images/blog/blog2.png') }}" alt="blog image">
                        </div>
                        <div class="d-flex flex-wrap flex-column gap-3">
                            <ul class="d-flex flex-wrap text-sm fw-normal font-Inter leading-tight p-0 list-unstyled m-0 p-0 list-unstyled m-0">
                                <li class="blog-meta-item">
                                    <a href="#">UI Design</a>
                                </li>
                                <li class="blog-meta-item">
                                    <a href="#">03 May 2019</a>
                                </li>

                            </ul>
                            <div class="d-flex justify-content-between align-items-end text-dark blog-title-section">
                                <h4 class="fw-bold font-Syne transition-all leading-8 blog-title">
                                    <a href="blog-details.html">Connect
                                        craft: Reading
                                        the smart experience</a>
                                </h4>
                                <a href="blog-details.html">
                                    <svg class="animate-arrow-up" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.8839 9.11612C31.372 9.60427 31.372 10.3957 30.8839 10.8839L10.8839 30.8839C10.3957 31.372 9.60427 31.372 9.11612 30.8839C8.62796 30.3957 8.62796 29.6043 9.11612 29.1161L29.1161 9.11612C29.6043 8.62796 30.3957 8.62796 30.8839 9.11612Z" fill="currentColor" fill-opacity="0.9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 10C12.5 9.30964 13.0596 8.75 13.75 8.75H30C30.6904 8.75 31.25 9.30964 31.25 10V26.25C31.25 26.9404 30.6904 27.5 30 27.5C29.3096 27.5 28.75 26.9404 28.75 26.25V11.25H13.75C13.0596 11.25 12.5 10.6904 12.5 10Z" fill="currentColor" fill-opacity="0.9" />
                                    </svg>

                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item End -->

                    <!-- Blog Item Start -->
                    <div class="blog-item" data-aos="fade-up" data-aos-delay="500">
                        <div class="rounded-20 overflow-hidden mb-6">
                            <img class="w-100" src="{{ asset('assets3/images/blog/blog3.png') }}" alt="blog image">
                        </div>
                        <div class="d-flex flex-wrap flex-column gap-3">
                            <ul class="d-flex flex-wrap text-sm fw-normal font-Inter leading-tight p-0 list-unstyled m-0 p-0 list-unstyled m-0">
                                <li class="blog-meta-item">
                                    <a href="#">UI Design</a>
                                </li>
                                <li class="blog-meta-item">
                                    <a href="#">03 May 2019</a>
                                </li>

                            </ul>
                            <div class="d-flex justify-content-between align-items-end text-dark blog-title-section">
                                <h4 class="fw-bold font-Syne transition-all leading-8 blog-title">
                                    <a href="blog-details.html">Ecoglow: Sustainable
                                        skincare a brighter tomorrow</a>
                                </h4>
                                <a href="blog-details.html">
                                    <svg class="animate-arrow-up" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.8839 9.11612C31.372 9.60427 31.372 10.3957 30.8839 10.8839L10.8839 30.8839C10.3957 31.372 9.60427 31.372 9.11612 30.8839C8.62796 30.3957 8.62796 29.6043 9.11612 29.1161L29.1161 9.11612C29.6043 8.62796 30.3957 8.62796 30.8839 9.11612Z" fill="currentColor" fill-opacity="0.9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 10C12.5 9.30964 13.0596 8.75 13.75 8.75H30C30.6904 8.75 31.25 9.30964 31.25 10V26.25C31.25 26.9404 30.6904 27.5 30 27.5C29.3096 27.5 28.75 26.9404 28.75 26.25V11.25H13.75C13.0596 11.25 12.5 10.6904 12.5 10Z" fill="currentColor" fill-opacity="0.9" />
                                    </svg>

                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item End -->

                    <!-- Blog Item Start -->
                    <div class="blog-item" data-aos="fade-up" data-aos-delay="700">
                        <div class="rounded-20 overflow-hidden mb-6">
                            <img class="w-100" src="{{ asset('assets3/images/blog/blog4.png') }}" alt="blog image">
                        </div>
                        <div class="d-flex flex-wrap flex-column gap-3">
                            <ul class="d-flex flex-wrap text-sm fw-normal font-Inter leading-tight p-0 list-unstyled m-0 p-0 list-unstyled m-0">
                                <li class="blog-meta-item">
                                    <a href="#">UI Design</a>
                                </li>
                                <li class="blog-meta-item">
                                    <a href="#">03 May 2019</a>
                                </li>

                            </ul>
                            <div class="d-flex justify-content-between align-items-end text-dark blog-title-section">
                                <h4 class="fw-bold font-Syne transition-all leading-8 blog-title">
                                    <a href="blog-details.html">Right-lo-left behind
                                        development in mobile web design</a>
                                </h4>
                                <a href="blog-details.html">
                                    <svg class="animate-arrow-up" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.8839 9.11612C31.372 9.60427 31.372 10.3957 30.8839 10.8839L10.8839 30.8839C10.3957 31.372 9.60427 31.372 9.11612 30.8839C8.62796 30.3957 8.62796 29.6043 9.11612 29.1161L29.1161 9.11612C29.6043 8.62796 30.3957 8.62796 30.8839 9.11612Z" fill="currentColor" fill-opacity="0.9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 10C12.5 9.30964 13.0596 8.75 13.75 8.75H30C30.6904 8.75 31.25 9.30964 31.25 10V26.25C31.25 26.9404 30.6904 27.5 30 27.5C29.3096 27.5 28.75 26.9404 28.75 26.25V11.25H13.75C13.0596 11.25 12.5 10.6904 12.5 10Z" fill="currentColor" fill-opacity="0.9" />
                                    </svg>

                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Item End -->

                </div>

            </div>
        </section>
        <!-- Blog Section End -->

@endsection
