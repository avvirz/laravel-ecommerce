<!-- Start Footer  -->
<footer>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-widget">
                        @php
                            use App\Http\Controllers\admin\SettingsController;
                            use App\Models\Settings;
                            $dynamicData = SettingsController::dynamicContent();
                        @endphp
                        @foreach ($dynamicData as $data)
                            <h4>About ThewayShop</h4>
                            <p>{{ $data->about_site }}</p>
                            <ul>
                                <li><a href="{{ $data->fb_link }}"><i class="fab fa-facebook"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-link">
                        <h4>Information</h4>
                        <ul>
                            @foreach ($blog as $key => $items)
                                <li><a href="{{ route('blogs.show', $items->id) }}">{{ $items->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-link-contact">
                        <h4>Contact Us</h4>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Address:{{ $data->address }} </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone:<a
                                        href="tel:{{ $data->phone }}">{{ $data->phone }}</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a
                                        href="mailto:{{ $data->email }}">{{ $data->email }}</a></p>
                            </li>
                        </ul>
                        <form method="post" class="form-inline" action="{{ route('newsletter.store') }}">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" name="email" placeholder="E-mail Address">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-outline-danger"
                                        type="button">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    @if (session()->has('msg'))
                        <div class="alert alert-success">
                        {{session()->get('msg')}}
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer  -->

<!-- Start copyright  -->
<div class="footer-copyright">
    <p class="footer-company">{{ $data->footer }}</p>
    @endforeach

</div>
<!-- End copyright  -->

<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
