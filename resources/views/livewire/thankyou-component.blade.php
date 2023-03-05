<div>
    <!-- Error 404 Area Start -->
    <div class="error404-area pt-30 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if (Session::has('success_message'))
                        <div class="alert alert-success">
                            <strong>Success | {{ Session::get('success_message') }}</strong>
                        </div>
                    @endif
                    <div class="error-wrapper text-center ptb-50 pt-xs-20">
                        <div class="error-text">
                            <h2>Thank you!</h2>
                            <p>Thank you for your order. A confirmation email was sent</p>
                        </div>
                        <div class="error-button">
                            <a href="{{ route('shop') }}">Continue Shopping</a>
                        </div>
                        <div class="error-button">
                            <a href="/">Back to home page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Error 404 Area End -->
</div>
