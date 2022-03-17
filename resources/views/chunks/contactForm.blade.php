<div class="contact-form my-5">
    <form action="" method="post" class="form-control">
        @csrf
        <center>
            <h2 class="my-4">CONTACT FORM</h2>
            <p class="form-text">
                <i>
                    * A mail containing your message will be sent to the selected department of PricePond.
                </i>
            </p>
        </center>
        <div class="container px-4">
            <div class="row my-4">
                <div class="col-md-6 col-sm-12">
                    <div class="row my-4">
                        <div class="col-md-4 col-sm-12">
                            <label for="department" class="form-label">
                                <span class="text-danger fst-italic fs-6">*</span>
                                Department
                            </label>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <select name="department" id="department" class="form-select w90" required>
                                <option selected>Select Department</option>
                                <option value="contact@pricepond.com.au">CONTACT (contact@pricepond.com.au)</option>
                                <option value="enquiry@pricepond.com.au">ENQUIRY (enquiry@pricepond.com.au)</option>
                                <option value="support@pricepond.com.au">SUPPORT (support@pricepond.com.au)</option>
                                <option value="info@pricepond.com.au">INFO (info@pricepond.com.au)</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="row my-4">
                        <div class="col-md-4 col-sm-12">
                            <label for="name" class="form-label">
                                <span class="text-danger fst-italic fs-6">*</span>
                                Name / Store
                            </label>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <input type="text" name="name" id="name" class="form-control w90" pattern="[A-Za-z0-9-+_!&]+" title="Only Letters and Numbers are allowed" placeholder="Your Name or Your Store Name" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="row my-4">
                        <div class="col-md-4 col-sm-12">
                            <label for="email" class="form-label">
                                <span class="text-danger fst-italic fs-6">*</span>
                                E-mail Address
                            </label>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <input type="email" name="email" id="email" class="form-control w90" title="Enter a Valid Email Address" placeholder="Your E-mail Address" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="row my-4">
                        <div class="col-md-4 col-sm-12">
                            <label for="phone" class="form-label">
                                Phone No.
                            </label>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <input type="tel" name="phone" id="phone" class="form-control w90" pattern="[0-9+-]{10,15}" title="Enter a Valid Phone Number" placeholder="(Optional)">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-2 col-sm-12">
                            <label for="subject" class="form-label">
                                <span class="text-danger fst-italic fs-6">*</span>
                                Subject
                            </label>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <input type="text" name="subject" id="subject" class="form-control w96" pattern="[A-Za-z0-9-+_!&%$*]+" title="Avoid Invalid Characters from Subject" placeholder="E-mail Subject" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-2 col-sm-12">
                            <label for="message" class="form-label">
                                <span class="text-danger fst-italic fs-6">*</span>
                                Message
                            </label>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <textarea name="message" id="message" rows="10" maxlength="3000" class="form-control w96" placeholder="Type your message in detail here..." required></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-2 col-sm-12">
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <input type="submit" name="submit" id="submit" class="btn btn-primary btn-pp w-25 py-2" value="SUBMIT">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>