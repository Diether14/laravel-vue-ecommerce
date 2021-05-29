<section class="py-5">
    <div class="container p-0">
      <div class="row">
        <div class="col-lg-6 mb-3 mb-lg-0">
          <h5 class="text-uppercase">Newsletter</h5>
          <p class="text-small text-muted mb-0">Subscribe to our Newsletter. Get discounts and updates.</p>
        </div>
        <div class="col-lg-6">
          <form action="/newsletter/subscribe" id="newsletterForm">
            <div class="input-group flex-column flex-sm-row mb-3">
              <input class="form-control form-control-lg py-3" id="newsletterEmail" type="email" placeholder="Enter your email address" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-dark btn-block" id="button-addon2" type="submit">Subscribe</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</section>

<script>
  const Newsletter = {
    subscribe: (e) => {
      const email = $('#newsletterEmail').val();
      
      $.ajax({
        url: 'newsletter/subscribe',
        method: 'POST',
        data: { 
          "_token": "{{ csrf_token() }}",
          "email": email 
        },
        success: (res) => {
          console.log(res);
        }
      });

      e.preventDefault();
    }
  };

  $(document).on('submit','#newsletterForm', (e) => Newsletter.subscribe(e));
</script>