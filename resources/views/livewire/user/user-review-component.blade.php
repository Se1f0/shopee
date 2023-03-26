<div>
    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
    @endif
    <!-- Begin Quick View | Modal Area -->
    <div class="modal-content">
        <div class="modal-body">
            <h3 class="review-page-title">Write Your Review</h3>
            <div class="modal-inner-area row">
                <div class="col-lg-6">
                    <div class="li-review-product">
                        <img src="{{ asset('assets/images/product/large-size') }}/{{ $orderItem->product->image }}"
                            alt="{{ $orderItem->product->name }}">
                        <div class="li-review-product-desc">
                            <p class="li-product-name">{{ $orderItem->product->name }}</p>
                            <p>
                                <span>{{ $orderItem->product->desc }}</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    {{-- <div class="li-review-content">
                        <!-- Begin Feedback Area -->
                        <div class="feedback-area">
                            <div class="feedback">
                                <h3 class="feedback-title">Our Feedback</h3>
                                <form action="#" wire:submit.prevent="addReview">
                                    <p class="your-opinion">
                                        <label>Your Rating</label>
                                        <span>
                                            <select class="star-rating">
                                                <option value="1" wire:model="rating">1</option>
                                                <option value="2" wire:model="rating">2</option>
                                                <option value="3" wire:model="rating">3</option>
                                                <option value="4" wire:model="rating">4</option>
                                                <option value="5" wire:model="rating">5</option>
                                            </select>
                                        </span>
                                    </p>
                                    @error('rating')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <p class="feedback-form">
                                        <label for="feedback">Your Review</label>
                                        <textarea id="feedback" name="comment" cols="45" rows="8" aria-required="true" wire:model="comment"></textarea>
                                    </p>
                                    @error('comment')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="feedback-input">
                                        <div class="feedback-btn pb-15">
                                            <button type="submit" class="btn btn-dark">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Feedback Area End Here -->
                    </div> --}}
                    <form action="#" wire:submit.prevent="addReview">
                        <div class="form-group row mt-20">
                            <div class="col">
                                <div class="comment-form-rating">
                                    <label class="col-form-label"><span class="text-danger">*</span> Your Rating</label>
                                    <p class="stars">
                                        <label for="rated-1"></label>
                                        <input type="radio" id="rated-1" name="rating" value="1"
                                            wire:model="rating">
                                        <label for="rated-2"></label>
                                        <input type="radio" id="rated-2" name="rating" value="2"
                                            wire:model="rating">
                                        <label for="rated-3"></label>
                                        <input type="radio" id="rated-3" name="rating" value="3"
                                            wire:model="rating">
                                        <label for="rated-4"></label>
                                        <input type="radio" id="rated-4" name="rating" value="4"
                                            wire:model="rating">
                                        <label for="rated-5"></label>
                                        <input type="radio" id="rated-5" name="rating" value="5"
                                            checked="checked" wire:model="rating">
                                        @error('rating')
                                            <span class="text-danger ml-10">{{ $message }}</span>
                                        @enderror
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label class="col-form-label"><span class="text-danger">*</span> Your Review</label>
                                <textarea class="form-control" wire:model="comment"></textarea>
                                @error('comment')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="buttons">
                            <button class="btn btn-dark" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick View | Modal Area End Here -->
</div>
