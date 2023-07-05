<div>
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="footer-heading">{{ $appSetting->website_name ?? 'website name'}}</h4>
                    <div class="footer-underline"></div>
                    <p>
                        PharmaCare Pharmacy registered its retail business as a sole proprietorship 
                        (bumiputera-owned) on 28 January 2014 and began operations on 1 May 2014 at 
                        the address JC 38 Jalan BMU 3, Bandar Baru Merlimau Utara, 77300 Melaka. In May 2016, 
                        we were registered as a wholesaler under BPFK and a certificate from the Ministry of Finance.
                    </p>
                </div>
                {{-- <div class="col-md-3">
                    <h4 class="footer-heading">Quick Links</h4>
                    <div class="footer-underline"></div>
                    <div class="mb-2"><a href="{{ url('/') }}" class="text-white">Home</a></div>
                    <div class="mb-2"><a href="{{ url('/collections') }}" class="text-white">About Us</a></div>
                    <div class="mb-2"><a href="{{ url('/contact-us') }}" class="text-white">Contact Us</a></div>
                </div> --}}
                <div class="col-md-3">
                    <h4 class="footer-heading">Shop Now</h4>
                    <div class="footer-underline"></div>
                    <div class="mb-2"><a href="{{ url('/collections') }}" class="text-white">Collections</a></div>
                    <div class="mb-2"><a href="{{ url('/') }}" class="text-white">Best Sellers</a></div>
                    <div class="mb-2"><a href="{{ url('/new-arrivals') }}" class="text-white">New Arrivals Products</a></div>
                    {{-- <div class="mb-2"><a href="" class="text-white">Featured Products</a></div> --}}
                    <div class="mb-2"><a href="{{ url('/cart') }}" class="text-white">Cart</a></div>
                </div>
                <div class="col-md-3">
                    <h4 class="footer-heading">Reach Us</h4>
                    <div class="footer-underline"></div>
                    <div class="mb-2">
                        <p>
                            <a href="https://goo.gl/maps/A8WNQc53Ctnr58iPA" class="text-white"><i class="fa fa-map-marker"></i>
                                {{ $appSetting->address ?? 'address'}}
                            </a>
                        </p>
                    </div>
                    <div class="mb-2">
                        <a href="" class="text-white">
                            <i class="fa fa-phone"></i> {{ $appSetting->phone1 ?? 'phone 1'}}
                        </a>
                    </div>
                    <div class="mb-2">
                        <a href="" class="text-white">
                            <i class="fa fa-envelope"></i> {{ $appSetting->email1 ?? 'email 1'}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class=""> &copy; 2022 - Pharmacare Pharmacy - Ecommerce. All rights reserved.</p>
                </div>
                <div class="col-md-3">
                    <div class="social-media">
                        Get Connected:

                        @if ($appSetting->facebook)
                            <a href="{{ $appSetting->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>
                        @endif
                        @if ($appSetting->tiktok)
                            <a href="{{ $appSetting->tiktok }}" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                        @endif
                        @if ($appSetting->instagram)
                            <a href="{{ $appSetting->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>