<x-app-layout>
    <!-- ==== Hero Section Start ==== -->
    <section id="home" class="ud-relative ud-z-10 ud-overflow-hidden ud-bg-cover ud-bg-top ud-bg-no-repeat ud-pt-[150px] ud-pb-24" style="background-image: url('./images/hero/common-bg.jpg')">
        <div class="ud-absolute ud-left-0 ud-top-0 ud--z-10 ud-h-full ud-w-full" style="background: linear-gradient(180deg,rgba(20, 20, 32, 0.65) 0%,#141420 100%);"></div>
        <div class="ud-container">
            <div class="ud--mx-4 ud-flex ud-flex-wrap ud-items-center">
                <div class="ud-w-full ud-px-4 lg:ud-w-1/2">
                    <div class="ud-mb-12 ud-max-w-[570px] lg:ud-mb-0">
                        <h1 class="ud-mb-4 ud-text-[40px] ud-font-bold ud-leading-tight ud-text-white md:ud-text-[50px] lg:ud-text-[40px] xl:ud-text-[46px] 2xl:ud-text-[50px] sm:text-[46px]">
                            Tickets a eventos con Bitcoin
                        </h1>
                        <p class="ud-mb-8 ud-text-lg ud-font-medium ud-leading-relaxed ud-text-body-color md:ud-pr-14">
                            Crea y comercializa las entradas a tu evento con Lightning ⚡️ y expande la asistencia a tu fiesta o encuentro sin límites.
                        </p>
                        <div class="flex flex-wrap items-center">
                            <a href="{{ route('events.index') }}" class="ud-mr-5 ud-mb-5 ud-inline-flex ud-items-center ud-justify-center ud-rounded-md ud-border-2 ud-border-primary ud-bg-primary ud-py-3 ud-px-7 ud-text-base ud-font-semibold ud-text-white ud-transition-all hover:ud-bg-opacity-90">
                                Ver eventos
                            </a>
                        </div>
                    </div>
                </div>

                <div class="ud-w-full ud-px-4 lg:ud-w-1/2">
                    <div class="ud-text-center">
                        <img src="images/hero/hero-image.svg" alt="hero image" class="ud-mx-auto ud-max-w-full" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== Hero Section End ==== -->

    <!-- ==== Artists Section Start ==== -->
    <section class="ud-pt-5">
        <div class="ud-container">
            <div class="ud-mb-12 ud-border-b ud-border-white ud-border-opacity-10">
                <div class="ud--mx-4 ud-flex">
                    <div class="ud-w-full ud-px-4">
                        <h2 class="ud-mb-5 ud-text-3xl ud-font-bold ud-text-white">
                            Top Marcas
                        </h2>
                    </div>
                </div>
            </div>

            <div class="ud-relative">
                <div class="artists-slider ud--mx-4 ud-flex ud-flex-wrap">

                    <div class="ud-w-full ud-px-4 md:ud-w-1/2 xl:ud-w-1/3 2xl:ud-w-1/4">
                        <div class="gradient-bg ud-mb-5 ud-rounded-xl ud-p-[2px]">
                            <div class="ud-flex ud-items-center ud-rounded-xl ud-bg-bg-color ud-p-6">
                                <div class="ud-mr-5 ud-h-[70px] ud-w-full ud-max-w-[70px] ud-overflow-hidden ud-rounded-lg">
                                    <img src="images/artists/image-01.png" alt="artists" class="ud-h-full ud-w-full ud-object-cover ud-object-center" />
                                </div>
                                <div class="ud-w-full">
                                    <h3 class="ud-truncate ud-text-lg ud-font-semibold ud-text-white">
                                        @Devid_Miller
                                    </h3>
                                    <span class="ud-text-base ud-font-semibold ud-text-secondary">
                                        14.55 ETH
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ud-w-full ud-px-4 md:ud-w-1/2 xl:ud-w-1/3 2xl:ud-w-1/4">
                        <div class="gradient-bg ud-mb-5 ud-rounded-xl ud-p-[2px]">
                            <div class="ud-flex ud-items-center ud-rounded-xl ud-bg-bg-color ud-p-6">
                                <div class="ud-mr-5 ud-h-[70px] ud-w-full ud-max-w-[70px] ud-overflow-hidden ud-rounded-lg">
                                    <img src="images/artists/image-02.png" alt="artists" class="ud-h-full ud-w-full ud-object-cover ud-object-center" />
                                </div>
                                <div class="ud-w-full">
                                    <h3 class="ud-truncate ud-text-lg ud-font-semibold ud-text-white">
                                        @Elon_Mask
                                    </h3>
                                    <span class="ud-text-base ud-font-semibold ud-text-secondary">
                                        12.25 ETH
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ud-w-full ud-px-4 md:ud-w-1/2 xl:ud-w-1/3 2xl:ud-w-1/4">
                        <div class="gradient-bg ud-mb-5 ud-rounded-xl ud-p-[2px]">
                            <div class="ud-flex ud-items-center ud-rounded-xl ud-bg-bg-color ud-p-6">
                                <div class="ud-mr-5 ud-h-[70px] ud-w-full ud-max-w-[70px] ud-overflow-hidden ud-rounded-lg">
                                    <img src="images/artists/image-03.png" alt="artists" class="ud-h-full ud-w-full ud-object-cover ud-object-center" />
                                </div>
                                <div class="ud-w-full">
                                    <h3 class="ud-truncate ud-text-lg ud-font-semibold ud-text-white">
                                        @Hiliya_Farah
                                    </h3>
                                    <span class="ud-text-base ud-font-semibold ud-text-secondary">
                                        9.89 ETH
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ==== Artists Section End ==== -->

    <!-- ==== Auctions Section Start ==== -->
    <section class="ud-pt-12">
        <div class="ud-container">
            <div class="ud-mb-12 ud-border-b ud-border-white ud-border-opacity-10">
                <div class="ud-justify-between sm:ud-flex">
                    <h2 class="ud-mb-4 ud-text-3xl ud-font-bold ud-leading-none ud-text-white">
                        Próximos Eventos
                    </h2>
                    <a href="{{ route('events.index') }}" class="ud-mb-5 ud-inline-flex ud-items-center ud-justify-center ud-rounded-md ud-bg-primary ud-py-[10px] ud-px-6 ud-text-base ud-font-semibold ud-text-white ud-transition-all hover:ud-bg-opacity-90">
                        Ver todos
                    </a>
                </div>
            </div>

            <div class="ud--mx-4 ud-flex ud-flex-wrap">
                <div class="ud-w-full ud-px-4 md:ud-w-1/2 lg:ud-w-1/3 2xl:ud-w-1/4">
                    <div class="ud-mb-10 ud-rounded-xl ud-border ud-border-stroke ud-bg-bg-color ud-p-[18px]">
                        <div class="ud-relative ud-mb-5 ud-overflow-hidden ud-rounded-lg">
                            <img src="images/auctions/image-01.svg" alt="auctions" class="ud-w-full" />
                            <button class="ud-absolute ud-right-4 ud-top-4 ud-inline-flex ud-items-center ud-rounded-md ud-bg-white ud-px-2 ud-py-1">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.99999 11.8709L6.15416 11.1009C3.14999 8.37675 1.16666 6.57425 1.16666 4.37508C1.16666 2.57258 2.57832 1.16675 4.37499 1.16675C5.38999 1.16675 6.36416 1.63925 6.99999 2.38008C7.63582 1.63925 8.60999 1.16675 9.62499 1.16675C11.4217 1.16675 12.8333 2.57258 12.8333 4.37508C12.8333 6.57425 10.85 8.37675 7.84582 11.1009L6.99999 11.8709Z" fill="#F85486" />
                                </svg>

                                <span class="ud-pl-1 ud-text-xs ud-font-semibold ud-text-black">
                                    4.6K
                                </span>
                            </button>
                        </div>
                        <div>
                            <h3>
                                <a href="javascript:void(0)" class="ud-mb-3 ud-inline-block ud-text-lg ud-font-semibold ud-text-white hover:ud-text-primary">
                                    22-Bit Digital #551
                                </a>
                            </h3>
                            <div class="ud-mb-5 ud-flex ud-items-center ud-justify-between">
                                <div class="ud-w-full">
                                    <div class="ud-flex ud-items-center">
                                        <div class="ud-mr-2 ud-h-8 ud-w-full ud-max-w-[32px] ud-rounded-md">
                                            <img src="images/auctions/creator-01.png" alt="creator" class="ud-h-full ud-w-full ud-object-cover ud-object-center" />
                                        </div>
                                        <div class="ud-w-full">
                                            <h4 class="ud-text-xs ud-font-semibold ud-text-white">
                                                @Devid_Mill...

                                                <span class="ud-block ud-text-xs ud-font-medium ud-text-body-color">
                                                    creator
                                                </span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="ud-w-full">
                                    <h5 class="ud-text-right ud-text-xs ud-font-semibold ud-text-white">
                                        5.49 ETH

                                        <span class="ud-block ud-text-xs ud-font-medium ud-text-body-color">
                                            Current Bit
                                        </span>
                                    </h5>
                                </div>
                            </div>
                            <div class="ud-flex ud-items-center ud-justify-center ud-rounded-md ud-bg-white ud-bg-opacity-10 ud-p-[10px] ud-text-base ud-font-semibold ud-text-white">
                                05 : 15 : 07 : 45
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ud-w-full ud-px-4 md:ud-w-1/2 lg:ud-w-1/3 2xl:ud-w-1/4">
                    <div class="ud-mb-10 ud-rounded-xl ud-border ud-border-stroke ud-bg-bg-color ud-p-[18px]">
                        <div class="ud-relative ud-mb-5 ud-overflow-hidden ud-rounded-lg">
                            <img src="images/auctions/image-02.svg" alt="auctions" class="ud-w-full" />
                            <button class="ud-absolute ud-right-4 ud-top-4 ud-inline-flex ud-items-center ud-rounded-md ud-bg-white ud-px-2 ud-py-1">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.99999 11.8709L6.15416 11.1009C3.14999 8.37675 1.16666 6.57425 1.16666 4.37508C1.16666 2.57258 2.57832 1.16675 4.37499 1.16675C5.38999 1.16675 6.36416 1.63925 6.99999 2.38008C7.63582 1.63925 8.60999 1.16675 9.62499 1.16675C11.4217 1.16675 12.8333 2.57258 12.8333 4.37508C12.8333 6.57425 10.85 8.37675 7.84582 11.1009L6.99999 11.8709Z" fill="#F85486" />
                                </svg>

                                <span class="ud-pl-1 ud-text-xs ud-font-semibold ud-text-black">
                                    1.6K
                                </span>
                            </button>
                        </div>
                        <div>
                            <h3>
                                <a href="javascript:void(0)" class="ud-mb-3 ud-inline-block ud-text-lg ud-font-semibold ud-text-white hover:ud-text-primary">
                                    25-Bit Digital #729
                                </a>
                            </h3>
                            <div class="ud-mb-5 ud-flex ud-items-center ud-justify-between">
                                <div class="ud-w-full">
                                    <div class="ud-flex ud-items-center">
                                        <div class="ud-mr-2 ud-h-8 ud-w-full ud-max-w-[32px] ud-rounded-md">
                                            <img src="images/auctions/creator-02.png" alt="creator" class="ud-h-full ud-w-full ud-object-cover ud-object-center" />
                                        </div>
                                        <div class="ud-w-full">
                                            <h4 class="ud-text-xs ud-font-semibold ud-text-white">
                                                @Devid_Meth...

                                                <span class="ud-block ud-text-xs ud-font-medium ud-text-body-color">
                                                    creator
                                                </span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="ud-w-full">
                                    <h5 class="ud-text-right ud-text-xs ud-font-semibold ud-text-white">
                                        1.58 ETH

                                        <span class="ud-block ud-text-xs ud-font-medium ud-text-body-color">
                                            Current Bit
                                        </span>
                                    </h5>
                                </div>
                            </div>
                            <div class="ud-flex ud-items-center ud-justify-center ud-rounded-md ud-bg-white ud-bg-opacity-10 ud-p-[10px] ud-text-base ud-font-semibold ud-text-white">
                                06 : 15 : 07 : 55
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ud-w-full ud-px-4 md:ud-w-1/2 lg:ud-w-1/3 2xl:ud-w-1/4">
                    <div class="ud-mb-10 ud-rounded-xl ud-border ud-border-stroke ud-bg-bg-color ud-p-[18px]">
                        <div class="ud-relative ud-mb-5 ud-overflow-hidden ud-rounded-lg">
                            <img src="images/auctions/image-03.svg" alt="auctions" class="ud-w-full" />
                            <button class="ud-absolute ud-right-4 ud-top-4 ud-inline-flex ud-items-center ud-rounded-md ud-bg-white ud-px-2 ud-py-1">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.99999 11.8709L6.15416 11.1009C3.14999 8.37675 1.16666 6.57425 1.16666 4.37508C1.16666 2.57258 2.57832 1.16675 4.37499 1.16675C5.38999 1.16675 6.36416 1.63925 6.99999 2.38008C7.63582 1.63925 8.60999 1.16675 9.62499 1.16675C11.4217 1.16675 12.8333 2.57258 12.8333 4.37508C12.8333 6.57425 10.85 8.37675 7.84582 11.1009L6.99999 11.8709Z" fill="#F85486" />
                                </svg>

                                <span class="ud-pl-1 ud-text-xs ud-font-semibold ud-text-black">
                                    500
                                </span>
                            </button>
                        </div>
                        <div>
                            <h3>
                                <a href="javascript:void(0)" class="ud-mb-3 ud-inline-block ud-text-lg ud-font-semibold ud-text-white hover:ud-text-primary">
                                    27-Bit Digital #395
                                </a>
                            </h3>
                            <div class="ud-mb-5 ud-flex ud-items-center ud-justify-between">
                                <div class="ud-w-full">
                                    <div class="ud-flex ud-items-center">
                                        <div class="ud-mr-2 ud-h-8 ud-w-full ud-max-w-[32px] ud-rounded-md">
                                            <img src="images/auctions/creator-03.png" alt="creator" class="ud-h-full ud-w-full ud-object-cover ud-object-center" />
                                        </div>
                                        <div class="ud-w-full">
                                            <h4 class="ud-text-xs ud-font-semibold ud-text-white">
                                                @Jemmy_Fra...

                                                <span class="ud-block ud-text-xs ud-font-medium ud-text-body-color">
                                                    creator
                                                </span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="ud-w-full">
                                    <h5 class="ud-text-right ud-text-xs ud-font-semibold ud-text-white">
                                        3.25 ETH

                                        <span class="ud-block ud-text-xs ud-font-medium ud-text-body-color">
                                            Current Bit
                                        </span>
                                    </h5>
                                </div>
                            </div>
                            <div class="ud-flex ud-items-center ud-justify-center ud-rounded-md ud-bg-white ud-bg-opacity-10 ud-p-[10px] ud-text-base ud-font-semibold ud-text-white">
                                02 : 15 : 08 : 44
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ud-w-full ud-px-4 md:ud-w-1/2 lg:ud-w-1/3 2xl:ud-w-1/4">
                    <div class="ud-mb-10 ud-rounded-xl ud-border ud-border-stroke ud-bg-bg-color ud-p-[18px]">
                        <div class="ud-relative ud-mb-5 ud-overflow-hidden ud-rounded-lg">
                            <img src="images/auctions/image-04.svg" alt="auctions" class="ud-w-full" />
                            <button class="ud-absolute ud-right-4 ud-top-4 ud-inline-flex ud-items-center ud-rounded-md ud-bg-white ud-px-2 ud-py-1">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.99999 11.8709L6.15416 11.1009C3.14999 8.37675 1.16666 6.57425 1.16666 4.37508C1.16666 2.57258 2.57832 1.16675 4.37499 1.16675C5.38999 1.16675 6.36416 1.63925 6.99999 2.38008C7.63582 1.63925 8.60999 1.16675 9.62499 1.16675C11.4217 1.16675 12.8333 2.57258 12.8333 4.37508C12.8333 6.57425 10.85 8.37675 7.84582 11.1009L6.99999 11.8709Z" fill="#F85486" />
                                </svg>

                                <span class="ud-pl-1 ud-text-xs ud-font-semibold ud-text-black">
                                    200
                                </span>
                            </button>
                        </div>
                        <div>
                            <h3>
                                <a href="javascript:void(0)" class="ud-mb-3 ud-inline-block ud-text-lg ud-font-semibold ud-text-white hover:ud-text-primary">
                                    35-Bit Digital #439
                                </a>
                            </h3>
                            <div class="ud-mb-5 ud-flex ud-items-center ud-justify-between">
                                <div class="ud-w-full">
                                    <div class="ud-flex ud-items-center">
                                        <div class="ud-mr-2 ud-h-8 ud-w-full ud-max-w-[32px] ud-rounded-md">
                                            <img src="images/auctions/creator-04.png" alt="creator" class="ud-h-full ud-w-full ud-object-cover ud-object-center" />
                                        </div>
                                        <div class="ud-w-full">
                                            <h4 class="ud-text-xs ud-font-semibold ud-text-white">
                                                @Miliya_Cho...

                                                <span class="ud-block ud-text-xs ud-font-medium ud-text-body-color">
                                                    creator
                                                </span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="ud-w-full">
                                    <h5 class="ud-text-right ud-text-xs ud-font-semibold ud-text-white">
                                        1.57 ETH

                                        <span class="ud-block ud-text-xs ud-font-medium ud-text-body-color">
                                            Current Bit
                                        </span>
                                    </h5>
                                </div>
                            </div>
                            <div class="ud-flex ud-items-center ud-justify-center ud-rounded-md ud-bg-white ud-bg-opacity-10 ud-p-[10px] ud-text-base ud-font-semibold ud-text-white">
                                07 : 15 : 03 : 12
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== Auctions Section End ==== -->

    <!-- ==== Today's Picks Section Start ==== -->
    <section class="ud-pt-8">
        <div class="ud-container">
            <div class="ud-mb-12 ud-border-b ud-border-white ud-border-opacity-10">
                <div class="ud-justify-between sm:ud-flex">
                    <h2 class="ud-mb-4 ud-text-3xl ud-font-bold ud-leading-none ud-text-white">
                        Eventos de hoy
                    </h2>
                    <a href="{{ route('events.index') }}" class="ud-mb-5 ud-inline-flex ud-items-center ud-justify-center ud-rounded-md ud-bg-primary ud-py-[10px] ud-px-6 ud-text-base ud-font-semibold ud-text-white ud-transition-all hover:ud-bg-opacity-90">
                        Ver todos
                    </a>
                </div>
            </div>

            <div class="ud--mx-4 ud-flex ud-flex-wrap">
                <div class="ud-w-full ud-px-4 md:ud-w-1/2 lg:ud-w-1/3 2xl:ud-w-1/4">
                    <div class="ud-mb-10 ud-rounded-xl ud-border ud-border-stroke ud-bg-bg-color ud-p-[18px]">
                        <div class="ud-relative ud-mb-5 ud-overflow-hidden ud-rounded-lg">
                            <img src="images/picks/image-05.svg" alt="auctions" class="ud-w-full" />
                            <button class="ud-absolute ud-right-4 ud-top-4 ud-inline-flex ud-items-center ud-rounded-md ud-bg-white ud-px-2 ud-py-1">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.99999 11.8709L6.15416 11.1009C3.14999 8.37675 1.16666 6.57425 1.16666 4.37508C1.16666 2.57258 2.57832 1.16675 4.37499 1.16675C5.38999 1.16675 6.36416 1.63925 6.99999 2.38008C7.63582 1.63925 8.60999 1.16675 9.62499 1.16675C11.4217 1.16675 12.8333 2.57258 12.8333 4.37508C12.8333 6.57425 10.85 8.37675 7.84582 11.1009L6.99999 11.8709Z" fill="#F85486" />
                                </svg>

                                <span class="ud-pl-1 ud-text-xs ud-font-semibold ud-text-black">
                                    4.6K
                                </span>
                            </button>
                        </div>
                        <div>
                            <h3>
                                <a href="javascript:void(0)" class="ud-mb-3 ud-inline-block ud-text-lg ud-font-semibold ud-text-white hover:ud-text-primary">
                                    3d abstract illustration
                                </a>
                            </h3>
                            <div class="ud-mb-6 ud-flex ud-items-center ud-justify-between">
                                <div class="ud-w-full">
                                    <div class="ud-flex ud-items-center">
                                        <div class="ud-mr-2 ud-h-8 ud-w-full ud-max-w-[32px] ud-rounded-md">
                                            <img src="images/picks/creator-05.png" alt="creator" class="ud-h-full ud-w-full ud-object-cover ud-object-center" />
                                        </div>
                                        <div class="ud-w-full">
                                            <h4 class="ud-text-xs ud-font-semibold ud-text-white">
                                                @Lathium_Lui...

                                                <span class="ud-block ud-text-xs ud-font-medium ud-text-body-color">
                                                    creator
                                                </span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="ud-w-full">
                                    <h5 class="ud-text-right ud-text-xs ud-font-semibold ud-text-white">
                                        3.24 ETH

                                        <span class="ud-block ud-text-xs ud-font-medium ud-text-body-color">
                                            Current Bit
                                        </span>
                                    </h5>
                                </div>
                            </div>

                            <div class="ud-flex ud-items-center ud-justify-between ud-border-t-2 ud-border-stroke ud-pt-5">
                                <a href="javascript:void(0)" class="ud-flex ud-items-center ud-justify-center ud-rounded-md ud-bg-primary ud-py-3 ud-px-4 ud-text-sm ud-font-semibold ud-text-white ud-transition-all hover:ud-bg-opacity-90 sm:ud-px-5">
                                    Place Bid
                                </a>
                                <a href="javascript:void(0)" class="ud-flex ud-items-center ud-justify-center ud-rounded-md ud-py-3 ud-px-4 ud-text-sm ud-font-semibold ud-text-white hover:ud-text-primary sm:ud-px-5">
                                    <span class="ud-pr-1">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 4.5V6.75L12 3.75L9 0.75V3C7.4087 3 5.88258 3.63214 4.75736 4.75736C3.63214 5.88258 3 7.4087 3 9C3 10.1775 3.345 11.2725 3.93 12.195L5.025 11.1C4.6875 10.4775 4.5 9.75 4.5 9C4.5 7.80653 4.97411 6.66193 5.81802 5.81802C6.66193 4.97411 7.80652 4.5 9 4.5ZM14.07 5.805L12.975 6.9C13.305 7.53 13.5 8.25 13.5 9C13.5 10.1935 13.0259 11.3381 12.182 12.182C11.3381 13.0259 10.1935 13.5 9 13.5V11.25L6 14.25L9 17.25V15C10.5913 15 12.1174 14.3679 13.2426 13.2426C14.3679 12.1174 15 10.5913 15 9C15 7.8225 14.655 6.7275 14.07 5.805Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    View History
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ud-w-full ud-px-4 md:ud-w-1/2 lg:ud-w-1/3 2xl:ud-w-1/4">
                    <div class="ud-mb-10 ud-rounded-xl ud-border ud-border-stroke ud-bg-bg-color ud-p-[18px]">
                        <div class="ud-relative ud-mb-5 ud-overflow-hidden ud-rounded-lg">
                            <img src="images/picks/image-06.svg" alt="auctions" class="ud-w-full" />
                            <button class="ud-absolute ud-right-4 ud-top-4 ud-inline-flex ud-items-center ud-rounded-md ud-bg-white ud-px-2 ud-py-1">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.99999 11.8709L6.15416 11.1009C3.14999 8.37675 1.16666 6.57425 1.16666 4.37508C1.16666 2.57258 2.57832 1.16675 4.37499 1.16675C5.38999 1.16675 6.36416 1.63925 6.99999 2.38008C7.63582 1.63925 8.60999 1.16675 9.62499 1.16675C11.4217 1.16675 12.8333 2.57258 12.8333 4.37508C12.8333 6.57425 10.85 8.37675 7.84582 11.1009L6.99999 11.8709Z" fill="#F85486" />
                                </svg>

                                <span class="ud-pl-1 ud-text-xs ud-font-semibold ud-text-black">
                                    4.6K
                                </span>
                            </button>
                        </div>
                        <div>
                            <h3>
                                <a href="javascript:void(0)" class="ud-mb-3 ud-inline-block ud-text-lg ud-font-semibold ud-text-white hover:ud-text-primary">
                                    3d abstract illustration
                                </a>
                            </h3>
                            <div class="ud-mb-6 ud-flex ud-items-center ud-justify-between">
                                <div class="ud-w-full">
                                    <div class="ud-flex ud-items-center">
                                        <div class="ud-mr-2 ud-h-8 ud-w-full ud-max-w-[32px] ud-rounded-md">
                                            <img src="images/picks/creator-06.png" alt="creator" class="ud-h-full ud-w-full ud-object-cover ud-object-center" />
                                        </div>
                                        <div class="ud-w-full">
                                            <h4 class="ud-text-xs ud-font-semibold ud-text-white">
                                                @Marko...

                                                <span class="ud-block ud-text-xs ud-font-medium ud-text-body-color">
                                                    creator
                                                </span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="ud-w-full">
                                    <h5 class="ud-text-right ud-text-xs ud-font-semibold ud-text-white">
                                        4.55 ETH

                                        <span class="ud-block ud-text-xs ud-font-medium ud-text-body-color">
                                            Current Bit
                                        </span>
                                    </h5>
                                </div>
                            </div>

                            <div class="ud-flex ud-items-center ud-justify-between ud-border-t-2 ud-border-stroke ud-pt-5">
                                <a href="javascript:void(0)" class="ud-flex ud-items-center ud-justify-center ud-rounded-md ud-bg-primary ud-py-3 ud-px-4 ud-text-sm ud-font-semibold ud-text-white ud-transition-all hover:ud-bg-opacity-90 sm:ud-px-5">
                                    Place Bid
                                </a>
                                <a href="javascript:void(0)" class="ud-flex ud-items-center ud-justify-center ud-rounded-md ud-py-3 ud-px-4 ud-text-sm ud-font-semibold ud-text-white hover:ud-text-primary sm:ud-px-5">
                                    <span class="ud-pr-1">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 4.5V6.75L12 3.75L9 0.75V3C7.4087 3 5.88258 3.63214 4.75736 4.75736C3.63214 5.88258 3 7.4087 3 9C3 10.1775 3.345 11.2725 3.93 12.195L5.025 11.1C4.6875 10.4775 4.5 9.75 4.5 9C4.5 7.80653 4.97411 6.66193 5.81802 5.81802C6.66193 4.97411 7.80652 4.5 9 4.5ZM14.07 5.805L12.975 6.9C13.305 7.53 13.5 8.25 13.5 9C13.5 10.1935 13.0259 11.3381 12.182 12.182C11.3381 13.0259 10.1935 13.5 9 13.5V11.25L6 14.25L9 17.25V15C10.5913 15 12.1174 14.3679 13.2426 13.2426C14.3679 12.1174 15 10.5913 15 9C15 7.8225 14.655 6.7275 14.07 5.805Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    View History
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ud-w-full ud-px-4 md:ud-w-1/2 lg:ud-w-1/3 2xl:ud-w-1/4">
                    <div class="ud-mb-10 ud-rounded-xl ud-border ud-border-stroke ud-bg-bg-color ud-p-[18px]">
                        <div class="ud-relative ud-mb-5 ud-overflow-hidden ud-rounded-lg">
                            <img src="images/picks/image-07.svg" alt="auctions" class="ud-w-full" />
                            <button class="ud-absolute ud-right-4 ud-top-4 ud-inline-flex ud-items-center ud-rounded-md ud-bg-white ud-px-2 ud-py-1">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.99999 11.8709L6.15416 11.1009C3.14999 8.37675 1.16666 6.57425 1.16666 4.37508C1.16666 2.57258 2.57832 1.16675 4.37499 1.16675C5.38999 1.16675 6.36416 1.63925 6.99999 2.38008C7.63582 1.63925 8.60999 1.16675 9.62499 1.16675C11.4217 1.16675 12.8333 2.57258 12.8333 4.37508C12.8333 6.57425 10.85 8.37675 7.84582 11.1009L6.99999 11.8709Z" fill="#F85486" />
                                </svg>

                                <span class="ud-pl-1 ud-text-xs ud-font-semibold ud-text-black">
                                    4.6K
                                </span>
                            </button>
                        </div>
                        <div>
                            <h3>
                                <a href="javascript:void(0)" class="ud-mb-3 ud-inline-block ud-text-lg ud-font-semibold ud-text-white hover:ud-text-primary">
                                    3d abstract illustration
                                </a>
                            </h3>
                            <div class="ud-mb-6 ud-flex ud-items-center ud-justify-between">
                                <div class="ud-w-full">
                                    <div class="ud-flex ud-items-center">
                                        <div class="ud-mr-2 ud-h-8 ud-w-full ud-max-w-[32px] ud-rounded-md">
                                            <img src="images/picks/creator-07.png" alt="creator" class="ud-h-full ud-w-full ud-object-cover ud-object-center" />
                                        </div>
                                        <div class="ud-w-full">
                                            <h4 class="ud-text-xs ud-font-semibold ud-text-white">
                                                @Andrio_Hev...

                                                <span class="ud-block ud-text-xs ud-font-medium ud-text-body-color">
                                                    creator
                                                </span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="ud-w-full">
                                    <h5 class="ud-text-right ud-text-xs ud-font-semibold ud-text-white">
                                        0.89 ETH

                                        <span class="ud-block ud-text-xs ud-font-medium ud-text-body-color">
                                            Current Bit
                                        </span>
                                    </h5>
                                </div>
                            </div>

                            <div class="ud-flex ud-items-center ud-justify-between ud-border-t-2 ud-border-stroke ud-pt-5">
                                <a href="javascript:void(0)" class="ud-flex ud-items-center ud-justify-center ud-rounded-md ud-bg-primary ud-py-3 ud-px-4 ud-text-sm ud-font-semibold ud-text-white ud-transition-all hover:ud-bg-opacity-90 sm:ud-px-5">
                                    Place Bid
                                </a>
                                <a href="javascript:void(0)" class="ud-flex ud-items-center ud-justify-center ud-rounded-md ud-py-3 ud-px-4 ud-text-sm ud-font-semibold ud-text-white hover:ud-text-primary sm:ud-px-5">
                                    <span class="ud-pr-1">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 4.5V6.75L12 3.75L9 0.75V3C7.4087 3 5.88258 3.63214 4.75736 4.75736C3.63214 5.88258 3 7.4087 3 9C3 10.1775 3.345 11.2725 3.93 12.195L5.025 11.1C4.6875 10.4775 4.5 9.75 4.5 9C4.5 7.80653 4.97411 6.66193 5.81802 5.81802C6.66193 4.97411 7.80652 4.5 9 4.5ZM14.07 5.805L12.975 6.9C13.305 7.53 13.5 8.25 13.5 9C13.5 10.1935 13.0259 11.3381 12.182 12.182C11.3381 13.0259 10.1935 13.5 9 13.5V11.25L6 14.25L9 17.25V15C10.5913 15 12.1174 14.3679 13.2426 13.2426C14.3679 12.1174 15 10.5913 15 9C15 7.8225 14.655 6.7275 14.07 5.805Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    View History
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ud-w-full ud-px-4 md:ud-w-1/2 lg:ud-w-1/3 2xl:ud-w-1/4">
                    <div class="ud-mb-10 ud-rounded-xl ud-border ud-border-stroke ud-bg-bg-color ud-p-[18px]">
                        <div class="ud-relative ud-mb-5 ud-overflow-hidden ud-rounded-lg">
                            <img src="images/picks/image-08.svg" alt="auctions" class="ud-w-full" />
                            <button class="ud-absolute ud-right-4 ud-top-4 ud-inline-flex ud-items-center ud-rounded-md ud-bg-white ud-px-2 ud-py-1">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.99999 11.8709L6.15416 11.1009C3.14999 8.37675 1.16666 6.57425 1.16666 4.37508C1.16666 2.57258 2.57832 1.16675 4.37499 1.16675C5.38999 1.16675 6.36416 1.63925 6.99999 2.38008C7.63582 1.63925 8.60999 1.16675 9.62499 1.16675C11.4217 1.16675 12.8333 2.57258 12.8333 4.37508C12.8333 6.57425 10.85 8.37675 7.84582 11.1009L6.99999 11.8709Z" fill="#F85486" />
                                </svg>

                                <span class="ud-pl-1 ud-text-xs ud-font-semibold ud-text-black">
                                    4.6K
                                </span>
                            </button>
                        </div>
                        <div>
                            <h3>
                                <a href="javascript:void(0)" class="ud-mb-3 ud-inline-block ud-text-lg ud-font-semibold ud-text-white hover:ud-text-primary">
                                    3d abstract illustration
                                </a>
                            </h3>
                            <div class="ud-mb-6 ud-flex ud-items-center ud-justify-between">
                                <div class="ud-w-full">
                                    <div class="ud-flex ud-items-center">
                                        <div class="ud-mr-2 ud-h-8 ud-w-full ud-max-w-[32px] ud-rounded-md">
                                            <img src="images/picks/creator-08.png" alt="creator" class="ud-h-full ud-w-full ud-object-cover ud-object-center" />
                                        </div>
                                        <div class="ud-w-full">
                                            <h4 class="ud-text-xs ud-font-semibold ud-text-white">
                                                @Mariya_Hie...

                                                <span class="ud-block ud-text-xs ud-font-medium ud-text-body-color">
                                                    creator
                                                </span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="ud-w-full">
                                    <h5 class="ud-text-right ud-text-xs ud-font-semibold ud-text-white">
                                        1.75 ETH

                                        <span class="ud-block ud-text-xs ud-font-medium ud-text-body-color">
                                            Current Bit
                                        </span>
                                    </h5>
                                </div>
                            </div>

                            <div class="ud-flex ud-items-center ud-justify-between ud-border-t-2 ud-border-stroke ud-pt-5">
                                <a href="javascript:void(0)" class="ud-flex ud-items-center ud-justify-center ud-rounded-md ud-bg-primary ud-py-3 ud-px-4 ud-text-sm ud-font-semibold ud-text-white ud-transition-all hover:ud-bg-opacity-90 sm:ud-px-5">
                                    Place Bid
                                </a>
                                <a href="javascript:void(0)" class="ud-flex ud-items-center ud-justify-center ud-rounded-md ud-py-3 ud-px-4 ud-text-sm ud-font-semibold ud-text-white hover:ud-text-primary sm:ud-px-5">
                                    <span class="ud-pr-1">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 4.5V6.75L12 3.75L9 0.75V3C7.4087 3 5.88258 3.63214 4.75736 4.75736C3.63214 5.88258 3 7.4087 3 9C3 10.1775 3.345 11.2725 3.93 12.195L5.025 11.1C4.6875 10.4775 4.5 9.75 4.5 9C4.5 7.80653 4.97411 6.66193 5.81802 5.81802C6.66193 4.97411 7.80652 4.5 9 4.5ZM14.07 5.805L12.975 6.9C13.305 7.53 13.5 8.25 13.5 9C13.5 10.1935 13.0259 11.3381 12.182 12.182C11.3381 13.0259 10.1935 13.5 9 13.5V11.25L6 14.25L9 17.25V15C10.5913 15 12.1174 14.3679 13.2426 13.2426C14.3679 12.1174 15 10.5913 15 9C15 7.8225 14.655 6.7275 14.07 5.805Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    View History
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== Today's Picks Section End ==== -->

    <!-- ==== Features Section Start ==== -->
    <section id="features" class="ud-pt-[90px]">
        <div class="ud-container">
            <div class="ud-mx-auto ud-mb-14 ud-max-w-[650px] ud-text-center">
                <h2 class="ud-mb-4 ud-text-4xl ud-font-bold ud-leading-tight ud-text-white sm:ud-text-[42px]">
                    Prepara tu fiesta con BitKets
                </h2>
                <p class="ud-text-lg ud-font-medium ud-text-body-color">
                    Crea tu propio evento masivo y ofrece a tus audiencia los cobros con Bitcoin LN ⚡️
                </p>
            </div>

            <div class="ud--mx-4 ud-flex ud-flex-wrap">
                <div class="ud-w-full ud-px-4 md:ud-w-1/2 lg:ud-w-1/3 2xl:ud-w-1/4">
                    <div class="ud-group ud-mb-10 ud-rounded-xl ud-border ud-border-stroke ud-bg-bg-color ud-p-7 ud-transition-all hover:ud-border-white hover:ud-bg-white">
                        <div class="ud-mb-5 ud-flex ud-h-[72px] ud-w-[72px] ud-items-center ud-justify-center ud-rounded-full ud-bg-[#FFF0E9]">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M29.75 25.5V26.9167C29.75 27.6681 29.4515 28.3888 28.9201 28.9201C28.3888 29.4515 27.6681 29.75 26.9167 29.75H7.08333C5.51083 29.75 4.25 28.475 4.25 26.9167V7.08333C4.25 6.33189 4.54851 5.61122 5.07986 5.07986C5.61122 4.54851 6.33189 4.25 7.08333 4.25H26.9167C27.6681 4.25 28.3888 4.54851 28.9201 5.07986C29.4515 5.61122 29.75 6.33189 29.75 7.08333V8.5H17C15.4275 8.5 14.1667 9.775 14.1667 11.3333V22.6667C14.1667 23.4181 14.4652 24.1388 14.9965 24.6701C15.5279 25.2015 16.2486 25.5 17 25.5H29.75ZM17 22.6667H31.1667V11.3333H17V22.6667ZM22.6667 19.125C22.1031 19.125 21.5626 18.9011 21.1641 18.5026C20.7656 18.1041 20.5417 17.5636 20.5417 17C20.5417 16.4364 20.7656 15.8959 21.1641 15.4974C21.5626 15.0989 22.1031 14.875 22.6667 14.875C23.2303 14.875 23.7708 15.0989 24.1693 15.4974C24.5678 15.8959 24.7917 16.4364 24.7917 17C24.7917 17.5636 24.5678 18.1041 24.1693 18.5026C23.7708 18.9011 23.2303 19.125 22.6667 19.125Z" fill="#FF766A" />
                            </svg>
                        </div>
                        <h3 class="ud-mb-2 ud-text-xl ud-font-bold ud-text-white ud-transition group-hover:ud-text-black">
                            Configura tu Wallet
                        </h3>

                        <p class="ud-text-base ud-font-medium ud-text-body-color">
                            Recibes los cobros con Bitcoin, so, instala Muun.
                        </p>
                    </div>
                </div>
                <div class="ud-w-full ud-px-4 md:ud-w-1/2 lg:ud-w-1/3 2xl:ud-w-1/4">
                    <div class="ud-group ud-mb-10 ud-rounded-xl ud-border ud-border-stroke ud-bg-bg-color ud-p-7 ud-transition-all hover:ud-border-white hover:ud-bg-white">
                        <div class="ud-mb-5 ud-flex ud-h-[72px] ud-w-[72px] ud-items-center ud-justify-center ud-rounded-full ud-bg-[#FFF6DD]">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.25 15.5833H15.5833V4.25H4.25V15.5833ZM4.25 29.75H15.5833V18.4167H4.25V29.75ZM18.4167 29.75H29.75V18.4167H18.4167V29.75ZM18.4167 4.25V15.5833H29.75V4.25" fill="#F5B70A" />
                            </svg>
                        </div>
                        <h3 class="ud-mb-2 ud-text-xl ud-font-bold ud-text-white ud-transition group-hover:ud-text-black">
                            Construye tu Evento
                        </h3>

                        <p class="ud-text-base ud-font-medium ud-text-body-color">
                            Prepara los detalles de tu evento y vende tickets ya.
                        </p>
                    </div>
                </div>
                <div class="ud-w-full ud-px-4 md:ud-w-1/2 lg:ud-w-1/3 2xl:ud-w-1/4">
                    <div class="ud-group ud-mb-10 ud-rounded-xl ud-border ud-border-stroke ud-bg-bg-color ud-p-7 ud-transition-all hover:ud-border-white hover:ud-bg-white">
                        <div class="ud-mb-5 ud-flex ud-h-[72px] ud-w-[72px] ud-items-center ud-justify-center ud-rounded-full ud-bg-[#EDF8F4]">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.0417 19.125L15.5833 23.375L20.5417 17L26.9167 25.5H7.08333L12.0417 19.125ZM29.75 26.9167V7.08333C29.75 5.51083 28.475 4.25 26.9167 4.25H7.08333C6.33189 4.25 5.61122 4.54851 5.07986 5.07986C4.54851 5.61122 4.25 6.33189 4.25 7.08333V26.9167C4.25 27.6681 4.54851 28.3888 5.07986 28.9201C5.61122 29.4515 6.33189 29.75 7.08333 29.75H26.9167C27.6681 29.75 28.3888 29.4515 28.9201 28.9201C29.4515 28.3888 29.75 27.6681 29.75 26.9167Z" fill="#06DE90" />
                            </svg>
                        </div>
                        <h3 class="ud-mb-2 ud-text-xl ud-font-bold ud-text-white ud-transition group-hover:ud-text-black">
                            Agrega los detalles
                        </h3>

                        <p class="ud-text-base ud-font-medium ud-text-body-color">
                            Configura las marcas y detalles y participantes.
                        </p>
                    </div>
                </div>
                <div class="ud-w-full ud-px-4 md:ud-w-1/2 lg:ud-w-1/3 2xl:ud-w-1/4">
                    <div class="ud-group ud-mb-10 ud-rounded-xl ud-border ud-border-stroke ud-bg-bg-color ud-p-7 ud-transition-all hover:ud-border-white hover:ud-bg-white">
                        <div class="ud-mb-5 ud-flex ud-h-[72px] ud-w-[72px] ud-items-center ud-justify-center ud-rounded-full ud-bg-[#E1DDFF]">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.79168 9.91671C7.22809 9.91671 6.68759 9.69282 6.28907 9.29431C5.89056 8.89579 5.66668 8.35529 5.66668 7.79171C5.66668 7.22812 5.89056 6.68762 6.28907 6.28911C6.68759 5.89059 7.22809 5.66671 7.79168 5.66671C8.35526 5.66671 8.89576 5.89059 9.29428 6.28911C9.69279 6.68762 9.91668 7.22812 9.91668 7.79171C9.91668 8.35529 9.69279 8.89579 9.29428 9.29431C8.89576 9.69282 8.35526 9.91671 7.79168 9.91671ZM30.3308 16.405L17.5808 3.65504C17.0708 3.14504 16.3625 2.83337 15.5833 2.83337H5.66668C4.09418 2.83337 2.83334 4.09421 2.83334 5.66671V15.5834C2.83334 16.3625 3.14501 17.0709 3.66918 17.5809L16.405 30.3309C16.9292 30.8409 17.6375 31.1667 18.4167 31.1667C19.1958 31.1667 19.9042 30.8409 20.4142 30.3309L30.3308 20.4142C30.855 19.9042 31.1667 19.1959 31.1667 18.4167C31.1667 17.6234 30.8408 16.915 30.3308 16.405Z" fill="#5142FC" />
                            </svg>
                        </div>
                        <h3 class="ud-mb-2 ud-text-xl ud-font-bold ud-text-white ud-transition group-hover:ud-text-black">
                            Comienza a vender
                        </h3>

                        <p class="ud-text-base ud-font-medium ud-text-body-color">
                            Crea la página de tu evento y vende tickets con BitKets.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== Features Section End ==== -->

    <!-- ==== Collection Section Start ==== -->
    <section class="ud-pt-8 ud-pb-[60px]">
        <div class="ud-container">
            <div class="ud-mb-12 ud-border-b ud-border-white ud-border-opacity-10">
                <div class="ud-justify-between sm:ud-flex">
                    <h2 class="ud-mb-4 ud-text-3xl ud-font-bold ud-leading-none ud-text-white">
                        Últimos eventos
                    </h2>
                    <a href="javascript:void(0)" class="ud-mb-5 ud-inline-flex ud-items-center ud-justify-center ud-rounded-md ud-bg-primary ud-py-[10px] ud-px-6 ud-text-base ud-font-semibold ud-text-white ud-transition-all hover:ud-bg-opacity-90">
                        Explora las fotos
                    </a>
                </div>
            </div>

            <div class="ud--mx-4 ud-flex ud-flex-wrap">
                <div class="ud-w-full ud-px-4 lg:ud-w-1/2">
                    <div class="ud-mb-10 ud-rounded-xl ud-border ud-border-stroke ud-bg-bg-color ud-p-5 md:ud-p-7 lg:ud-p-5 xl:ud-p-7">
                        <div class="ud--mx-3 ud-flex ud-flex-wrap">
                            <div class="ud-w-2/3 ud-px-3">
                                <div class="ud-mb-6 ud-w-full">
                                    <img src="images/collections/image-01.svg" alt="collection" class="ud-w-full" />
                                </div>
                            </div>
                            <div class="ud-w-1/3 ud-px-3">
                                <div class="ud-mb-6 ud-w-full">
                                    <img src="images/collections/image-02.svg" alt="collection" class="ud-w-full" />
                                </div>
                                <div class="ud-mb-6 ud-w-full">
                                    <img src="images/collections/image-03.svg" alt="collection" class="ud-w-full" />
                                </div>
                            </div>
                        </div>
                        <div class="ud-mb-3 ud-flex ud-items-center ud-justify-between">
                            <h3>
                                <a href="javascript:void(0)" class="ud-text-lg ud-font-bold ud-text-white sm:ud-text-xl md:ud-text-2xl lg:ud-text-xl xl:ud-text-2xl">
                                    Past event media
                                </a>
                            </h3>
                            <button class="ud-inline-flex ud-items-center ud-rounded-md ud-bg-white ud-px-2 ud-py-1">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.99999 11.8709L6.15416 11.1009C3.14999 8.37675 1.16666 6.57425 1.16666 4.37508C1.16666 2.57258 2.57832 1.16675 4.37499 1.16675C5.38999 1.16675 6.36416 1.63925 6.99999 2.38008C7.63582 1.63925 8.60999 1.16675 9.62499 1.16675C11.4217 1.16675 12.8333 2.57258 12.8333 4.37508C12.8333 6.57425 10.85 8.37675 7.84582 11.1009L6.99999 11.8709Z" fill="#F85486" />
                                </svg>

                                <span class="ud-pl-1 ud-text-xs ud-font-semibold ud-text-black">
                                    1.6K
                                </span>
                            </button>
                        </div>

                        <div class="ud-flex ud-items-center">
                            <div class="ud-mr-3 ud-h-[46px] ud-w-full ud-max-w-[46px] ud-overflow-hidden ud-rounded-md">
                                <img src="images/collections/creator-01.jpg" alt="" class="ud-h-full ud-w-full ud-object-cover ud-object-center" />
                            </div>
                            <div class="ud-w-full">
                                <h4 class="ud-text-base ud-font-semibold ud-text-white">
                                    Brand
                                    <span class="ud-block ud-text-sm ud-font-medium ud-text-body-color">
                                        Organizador
                                    </span>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ud-w-full ud-px-4 lg:ud-w-1/2">
                    <div class="ud-mb-10 ud-rounded-xl ud-border ud-border-stroke ud-bg-bg-color ud-p-5 md:ud-p-7 lg:ud-p-5 xl:ud-p-7">
                        <div class="ud--mx-3 ud-flex ud-flex-wrap">
                            <div class="ud-w-1/3 ud-px-3">
                                <div class="ud-mb-6 ud-w-full">
                                    <img src="images/collections/image-04.svg" alt="collection" class="ud-w-full" />
                                </div>
                            </div>
                            <div class="ud-w-2/3 ud-px-3">
                                <div class="ud--mx-3 ud-flex ud-flex-wrap">
                                    <div class="ud-w-1/2 ud-px-3">
                                        <div class="ud-mb-6 ud-w-full">
                                            <img src="images/collections/image-05.svg" alt="collection" class="ud-w-full" />
                                        </div>
                                    </div>
                                    <div class="ud-w-1/2 ud-px-3">
                                        <div class="ud-mb-6 ud-w-full">
                                            <img src="images/collections/image-06.svg" alt="collection" class="ud-w-full" />
                                        </div>
                                    </div>
                                    <div class="ud-w-full ud-px-3">
                                        <div class="ud-mb-6 ud-w-full">
                                            <img src="images/collections/image-07.svg" alt="collection" class="ud-w-full" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ud-mb-3 ud-flex ud-items-center ud-justify-between">
                            <h3>
                                <a href="javascript:void(0)" class="ud-text-lg ud-font-bold ud-text-white sm:ud-text-xl md:ud-text-2xl lg:ud-text-xl xl:ud-text-2xl">
                                    Modern illustration
                                </a>
                            </h3>
                            <button class="ud-inline-flex ud-items-center ud-rounded-md ud-bg-white ud-px-2 ud-py-1">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.99999 11.8709L6.15416 11.1009C3.14999 8.37675 1.16666 6.57425 1.16666 4.37508C1.16666 2.57258 2.57832 1.16675 4.37499 1.16675C5.38999 1.16675 6.36416 1.63925 6.99999 2.38008C7.63582 1.63925 8.60999 1.16675 9.62499 1.16675C11.4217 1.16675 12.8333 2.57258 12.8333 4.37508C12.8333 6.57425 10.85 8.37675 7.84582 11.1009L6.99999 11.8709Z" fill="#F85486" />
                                </svg>

                                <span class="ud-pl-1 ud-text-xs ud-font-semibold ud-text-black">
                                    3.6K
                                </span>
                            </button>
                        </div>

                        <div class="ud-flex ud-items-center">
                            <div class="ud-mr-3 ud-h-[46px] ud-w-full ud-max-w-[46px] ud-overflow-hidden ud-rounded-md">
                                <img src="images/collections/creator-02.jpg" alt="" class="ud-h-full ud-w-full ud-object-cover ud-object-center" />
                            </div>
                            <div class="ud-w-full">
                                <h4 class="ud-text-base ud-font-semibold ud-text-white">
                                    Brand
                                    <span class="ud-block ud-text-sm ud-font-medium ud-text-body-color">
                                    Organizador
                                    </span>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== Collection Section End ==== -->
</x-app-layout>

@push('scripts')
<script src="{{ asset('js/tiny-slider.js') }}"></script>
<script>
    //======== tiny slider for clients
    tns({
        container: ".artists-slider",
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 1,
        nav: true,
        navPosition: "bottom",
        controls: false,
        controlsText: [
            '<svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M5.00001 0.0600594L5.00001 4.06006L13.92 4.06006L13.95 6.07006L5.00001 6.07006L5.00001 10.0601L1.19607e-05 5.06006L5.00001 0.0600594Z" fill="white"/></svg>',
            '<svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M8.99999 10.9399V6.93994H0.0799875L0.0499878 4.92994H8.99999V0.939941L14 5.93994L8.99999 10.9399Z" fill="white"/> </svg>',
        ],
        items: 1,
        responsive: {
            540: {
                controls: true,
                nav: false,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1140: {
                items: 4,
            },
        },
    });
</script>
@endpush
