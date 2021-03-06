<section class="py-5">
    <h2 class="h5 text-uppercase mb-4">Account Information</h2>
    <div class="row">
        {{-- start:: Billing --}}
        <div class="col-lg-6 form-group">
            <label class="text-small text-uppercase" for="firstName">First name</label>
            <input class="form-control form-control-lg" id="firstName" type="text" placeholder="Enter your first name">
        </div>
        <div class="col-lg-6 form-group">
            <label class="text-small text-uppercase" for="lastName">Last name</label>
            <input class="form-control form-control-lg" id="lastName" type="text" placeholder="Enter your last name">
        </div>
        <div class="col-lg-6 form-group">
            <label class="text-small text-uppercase" for="email">Email address</label>
            <input class="form-control form-control-lg" id="email" type="email" placeholder="e.g. Jason@example.com">
        </div>
        <div class="col-lg-6 form-group">
            <label class="text-small text-uppercase" for="phone">Phone number</label>
            <input class="form-control form-control-lg" id="phone" type="tel" placeholder="e.g. +02 245354745">
        </div>
        <div class="col-lg-6 form-group">
            <label class="text-small text-uppercase" for="company">Company name (optional)</label>
            <input class="form-control form-control-lg" id="company" type="text" placeholder="Your company name">
        </div>
        <div class="col-lg-6 form-group">
            <label class="text-small text-uppercase" for="country">Country</label>
            <select class="selectpicker country" id="country" data-width="fit" data-style="form-control form-control-lg" data-title="Select your country"></select>
        </div>
        <div class="col-lg-12 form-group">
            <label class="text-small text-uppercase" for="address">Address line 1</label>
            <input class="form-control form-control-lg" id="address" type="text" placeholder="House number and street name">
        </div>
        <div class="col-lg-12 form-group">
            <label class="text-small text-uppercase" for="address">Address line 2</label>
            <input class="form-control form-control-lg" id="addressalt" type="text" placeholder="Apartment, Suite, Unit, etc (optional)">
        </div>
        <div class="col-lg-6 form-group">
            <label class="text-small text-uppercase" for="city">Town/City</label>
            <input class="form-control form-control-lg" id="city" type="text">
        </div>
        <div class="col-lg-6 form-group">
            <label class="text-small text-uppercase" for="state">State/County</label>
            <input class="form-control form-control-lg" id="state" type="text">
        </div>
        <div class="col-lg-12 form-group">
            <button class="btn btn-dark" type="submit">Update Account Details</button>
        </div>
        {{-- end:: Billing --}}
    </div>
</section>