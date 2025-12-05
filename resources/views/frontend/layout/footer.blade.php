@php
    $appName = DB::table('systemflag')->where('name', 'AppName')->select('value')->first();
    $appName = $appName ? $appName->value : 'AstroSaar';
@endphp
<div class="astroway-footer">
    <div class="bg-brown footer py-5" style="background-color: #6d4ec6 !important;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-7 col-lg-9">
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <h4 class="text-white font-16 font-weight-semi-bold mb-3">Services</h4>
                            <div class="d-flex justify-content-between">
                                <ul class="list-unstyled">

                                    @php
                                    use App\Models\AstrologerModel\AstrologerCategory;
                                    $getAstrologerCategory = AstrologerCategory::where('isActive',1)->orderBy('id', 'DESC')->get();

                                    $facebook = DB::table('systemflag')->where('name', 'Facebook')->select('value')->first();
                                    $apple = DB::table('systemflag')->where('name', 'Apple')->select('value')->first();
                                    $website = DB::table('systemflag')->where('name', 'Website')->select('value')->first();
                                    $youtube = DB::table('systemflag')->where('name', 'Youtube')->select('value')->first();
                                    $linkedIn = DB::table('systemflag')->where('name', 'LinkedIn')->select('value')->first();
                                    $pintrest = DB::table('systemflag')->where('name', 'Pintrest')->select('value')->first();
                                    $instagram = DB::table('systemflag')->where('name', 'Instagram')->select('value')->first();


                                  @endphp
                                   @foreach($getAstrologerCategory as $category)
                                   <li>
                                       <a href="{{ route('front.chatList', ['astrologerCategoryId' => $category->id]) }}" 
                                          class="font-14 color-pink-light">
                                          {{ $category->name }}
                                       </a>
                                   </li>
                               @endforeach
                               
                                    

                                </ul>

                            </div>
                        </div>
                        <div class="col-6 col-md-3">

                            <h4 class="d-block text-white font-16 font-weight-semi-bold mb-3">Products</h4>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('front.getproducts') }}"
                                        class="font-14 color-pink-light">Rudraksh</a></li>
                                <li><a href="{{ route('front.getproducts') }}"
                                        class="font-14 color-pink-light">Gemstone</a></li>
                                <li><a href="{{ route('front.getproducts') }}"
                                        class="font-14 color-pink-light">Mala</a></li>
                                <li><a href="{{ route('front.getproducts') }}"
                                        class="font-14 color-pink-light">Yantra</a></li>
                                <li><a href="{{ route('front.getproducts') }}"
                                        class="font-14 color-pink-light">Bracelets</a></li>
                            </ul>

                        </div>
                        <div class="col-6 col-md-3">

                            <h4 class="d-block text-white font-16 font-weight-semi-bold mb-3">Resources</h4>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('front.getBlog') }}"
                                        class="font-14 color-pink-light">Blogs</a></li>
                                <li><a href="{{ route('front.astrologerlogin') }}"
                                        class="font-14 color-pink-light">Astrologer Login</a></li>
                                <li><a href="{{ route('front.astrologerregister') }}"
                                        class="font-14 color-pink-light">Astrologer Registration</a></li>
                            </ul>

                        </div>
                        <div class="col-6 col-md-3">
                            <h4 class="text-white font-16 font-weight-semi-bold mb-3">Support</h4>
                            <p class="text-white font-14 mb-2">We are available 24/7 on chat</p>
                            <a href="{{ route('front.chatList') }}" class="font-14 text-white" style="text-decoration: underline;">Click here to start chat</a>
                            <p class="text-white font-14 mt-3 mb-2">
                                Email: <a href="mailto:Contact@astrosaar.com" class="text-white">Contact@astrosaar.com</a>
                            </p>
                            <p class="mb-2">
                                <a href="{{route('front.privacyPolicy')}}" class="font-14 text-white">Privacy policy</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 offset-md-1 offset-lg-0 pl-md-4">
                    <h4 class="text-white font-16 font-weight-semi-bold mb-4">Download Our Apps</h4>
                    <div class="d-flex d-md-block">
                        <div class="my-2"><a href="javascript:void(0);"
                                rel="nofollow noopener noreferrer"><img
                                src="{{asset('public/frontend/astrowaycdn/dashaspeaks/web/content/astroway/images/google-play.png')}}"
                                    alt="google-play" class="img-fluid" width="183" height="54"
                                    loading="lazy"></a></div>
                        <div class="my-2 ml-2 ml-md-0"><a href="javascript:void(0);"
                                rel="nofollow noopener noreferrer"><img
                                    src="{{asset('public/frontend/astrowaycdn/dashaspeaks/web/content/astroway/images/app-store.png')}}"

                                    alt="app-store" class="img-fluid" width="183" height="54"
                                    loading="lazy"></a></div>
                        <span class="float-none"></span>
                    </div>
                    <div class="d-flex mt-2 flex-wrap">
                        <a class="mr-2 mt-2" target="_blank" href="{{$facebook->value}}"
                            rel="nofollow"><img
                                src="{{asset('public/frontend/astrowaycdn/dashaspeaks/web/content/astroway/images/fb.svg')}}"
                                alt="facebook" width="31" height="31" loading="lazy"></a>
                        <a class="mr-2 mt-2" target="_blank" href="#"
                            rel="nofollow"><img
                                src="{{asset('public/frontend/astrowaycdn/dashaspeaks/web/content/astroway/images/twitter.svg')}}"
                                alt="twitter" width="31" height="31" loading="lazy"></a>
                        <a class="mr-2 mt-2" target="_blank"
                            href="{{$linkedIn->value}}" rel="nofollow"><img
                                src="{{asset('public/frontend/astrowaycdn/dashaspeaks/web/content/astroway/images/linkedin.svg')}}"
                                alt="linkedin" width="31" height="31" loading="lazy"></a>
                        <a class="mr-2 mt-2" target="_blank"
                            href="{{$instagram->value}}" rel="nofollow"><img
                                src="{{asset('public/frontend/astrowaycdn/dashaspeaks/web/content/astroway/images/insta.svg')}}"
                                alt="instagram" width="31" height="31" loading="lazy"></a>
                        <a class="mr-2 mt-2" target="_blank"
                            href="{{$youtube->value}}"
                            rel="nofollow"><img
                                src="{{asset('public/frontend/astrowaycdn/dashaspeaks/web/content/astroway/images/youtube.svg')}}"
                                alt="youtube" width="31" height="31" loading="lazy"></a>
                        <a class="mr-2 mt-2" target="_blank" href="{{$pintrest->value}}"
                            rel="nofollow"><img
                                src="{{asset('public/frontend/astrowaycdn/dashaspeaks/web/content/astroway/images/pinterest.svg')}}"
                                alt="pinterest" width="31" height="31" loading="lazy"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-brown-dark copyright" style="background-color: #5a3aa0 !important;">
        <div class="container py-3">
            <p class="text-center text-white mb-1">Copyright &copy; 2020-{{date('Y')}} {{ $appName->value ?? 'AstroSaar' }}. All
                Rights Reserved</p>

        </div>

    </div>
</div>
