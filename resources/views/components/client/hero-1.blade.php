 <section id="home"
     class="relative overflow-hidden pt-20 pb-96 bg-blue-50 bg-opacity-50">
     <div class="container relative">
         <div class="text-center">
             <div class="flex justify-center mt-6">
                 <div class="max-w-4xl">
                     <span
                         class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-bold uppercase bg-primary/10 text-primary mb-3">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="lucide lucide-tags">
                             <path d="m15 5 6.3 6.3a2.4 2.4 0 0 1 0 3.4L17 19" />
                             <path
                                 d="M9.586 5.586A2 2 0 0 0 8.172 5H3a1 1 0 0 0-1 1v5.172a2 2 0 0 0 .586 1.414L8.29 18.29a2.426 2.426 0 0 0 3.42 0l3.58-3.58a2.426 2.426 0 0 0 0-3.42z" />
                             <circle cx="6.5" cy="9.5" r=".5" fill="currentColor" />
                         </svg>
                         Jasa Pembuatan website
                     </span>
                     <h1 class="text-5xl/tight text-gray-800 font-bold mb-10 hidden lg:block"> Segera Wujudkan Website
                         Impianmu!, <br> Dengan
                         kami semua selesai Tepat waktu</h1>
                     <h1 class="text-2xl/tight text-gray-800 font-bold mb-10 lg:hidden"> Segera Wujudkan Website
                         Impianmu!, <br> Dengan
                         kami semua selesai Tepat waktu</h1>

                     @php
                         $tags = [
                             '1' => 'Ecommerce',
                             '2' => 'LMS',
                             '3' => 'CMS',
                             '4' => 'Tugas kuliah',
                             '5' => 'Company Profile',
                             '6' => 'Custom Website',
                             '7' => 'dll',
                         ];
                     @endphp
                     <p class="text-base text-gray-700 lg:max-w-md mx-auto">Kami siap membantu anda 24 jam untuk
                         pembuatan  <br>
                         @foreach ($tags as $i => $tag)
                             <span
                                 class="inline-flex items-center gap-1.5 py-1 px-2 rounded-full text-xs font-bold uppercase bg-primary/10 text-primary mb-3">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="text-green-800" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-check"><path d="M18 6 7 17l-5-5"/><path d="m22 10-7.5 7.5L13 16"/></svg>
                                 {{ $tag }}
                             </span>
                         @endforeach
                         .
                     </p>
                 </div>
             </div>

             <div>
                <button
                    onclick="window.location.href='https://wa.me/6281329995238?text=Halo, saya ingin konsultasi gratis.'"
                    class="relative flex items-center justify-center rounded-full text-base font-medium py-3.5 px-6 mt-10 mx-auto bg-primary text-white">
                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square-heart">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                        <path d="M14.8 7.5a1.84 1.84 0 0 0-2.6 0l-.2.3-.3-.3a1.84 1.84 0 1 0-2.4 2.8L12 13l2.7-2.7c.9-.9.8-2.1.1-2.8"/>
                    </svg>
                    Konsultasi Gratis
                </button>
            </div>
            
         </div>
     </div><!-- Container End -->

     <div class="shape absolute sm:-bottom-px -bottom-[1px] start-0 end-0 overflow-hidden text-white">
         <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none"
             xmlns="http://www.w3.org/2000/svg">
             <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
         </svg>
     </div><!-- end shap -->
 </section>

 <div class="pb-24">
     <div class="max-w-3xl mx-auto -mt-80 relative px-6 z-10">
         <div class="hidden lg:block">
             <div class="h-24 w-24 absolute -top-10 -end-5 -z-[1]"
                 style="background-image: url('{{ asset('client/dist/assets/images/other/dot.svg') }}');"></div>
             <div class="h-24 w-24 absolute -bottom-10 -start-5 -z-[1]"
                 style="background-image: url('{{ asset('client/dist/assets/images/other/dot2.svg') }}');"></div>
         </div>
         <img src="{{ asset('client/dist/assets/images/landing/saas/saas1.png') }}" alt=""
             class="rounded-md w-full h-full">
     </div>
 </div>
