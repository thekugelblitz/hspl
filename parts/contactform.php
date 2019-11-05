<section id="ticket" class="exapath pb-80">
    <div class="container">
      <div class="sec-main sec-up mb-0 sec-bg1">
        <div class="randomline">
          <div class="bigline"></div>
          <div class="smallline"></div>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-12 cd-filter-block mb-0">
            <div class="form-contact cd-filter-content p-0 sec-bx">
			  <div class="plans badge feat bg-pink">Having Queries?</div>
              <h2 class="section-heading mb-1">Full out the Contact form to contact us</h2>
              <p >We Will Help You To Choose The Best Plan!</p>
              <form id="" method="POST" action="contact-process.php">
                <div class="row">
                  <div class="col-md-6">
                    <label><i class="fas fa-user-tie"></i></label>
                    <input id="name" type="text" name="name" placeholder="Full Name" required="">
                  </div>
                  <div class="col-md-6">
                    <label><i class="fas fa-envelope"></i></label>
                    <input id="email" type="email" name="email" placeholder="Email Address" required="">
                  </div>
                  <div class="col-md-6">
                    <label><i class="fas fa-file-alt"></i></label>
                    <input id="subject" type="text" name="subject" placeholder="Subject" required>
                  </div>
                  <div class="col-md-6">
                    <div class="cd-select mt-4">
                      <label class="db"></label>
                      <select id="department" name="department" class="select-filter">
                        <option value="">Choose Department</option>
                        <option value="Support">Support/Help Desk</option>
                        <option value="TechnicalSupport">Technical Support</option>
                        <option value="SalesDepartment">Sales Department</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mt-4">
                      <textarea id="message" name="message" class="form-control" rows="5" placeholder="Message..."></textarea>
                    </div>
                  </div>
                  <div class="col-md-6 mt-5">
                    <input name="newsletter" type="checkbox" id="checkbox" class="filter">
                    <label for="checkbox" class="checkbox-label c-grey mb-4" ><div>I have read and accept the terms of the privacy policy - <a href="legal.html" class="golink">HSPL</a></div></label>
                    <button type="submit" value="Submit" class="btn btn-default-yellow-fill float-left mr-3">Submit Ticket</button>
                    <button type="reset" value="reset" class="btn btn-default-fill mt-0 mb-3 mr-3">Reset</button><br>
                  </div>
                  <div id="msgSubmit" class="col-md-12 mt-4">
                    <h3 class="c-pink"> Message Submitted!</h3>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>