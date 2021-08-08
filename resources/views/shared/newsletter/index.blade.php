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

<style>
  /* The snackbar - position it at the bottom and in the middle of the screen */
#snackbar {
  visibility: hidden; /* Hidden by default. Visible on click */
  min-width: 250px; /* Set a default minimum width */
  margin-left: -125px; /* Divide value of min-width by 2 */
  background-color: #2b90d9; /* Black background color */
  color: #fff; /* White text color */
  text-align: center; /* Centered text */
  border-radius: 2px; /* Rounded borders */
  padding: 16px; /* Padding */
  position: fixed; /* Sit on top of the screen */
  z-index: 1; /* Add a z-index if needed */
  left: 50%; /* Center the snackbar */
  bottom: 30px; /* 30px from the bottom */
}

/* Show the snackbar when clicking on a button (class added with JavaScript) */
#snackbar.show {
  visibility: visible; /* Show the snackbar */
  /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
  However, delay the fade out process for 2.5 seconds */
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

/* Animations to fade the snackbar in and out */
@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>
<div id="snackbar">Thank you for subscribing!</div>

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
          $('#snackbar').addClass('show');
          setTimeout(() => {
            $('#snackbar').removeClass('show');
          }, 3000);
        }
      });

      e.preventDefault();
    }
  };

  $(document).on('submit','#newsletterForm', (e) => Newsletter.subscribe(e));
</script>