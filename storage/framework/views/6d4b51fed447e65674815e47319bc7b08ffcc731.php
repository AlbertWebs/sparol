
        <div class="faq-area ptb-140" style="padding-bottom:100px">
            <div class="container">
				<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
					<div class="section-title text-center">
						<h2>Request Quote</h2>
					</div>
				</div>
                <div class="row center">
		            <div class="col-md-12 col-xs-12">
                        <div class="faq-form form-style">
                            <div class="cf-msg"></div>
                            <form id="SubmitQuote" action="" method="post" id="cf">
							<?php echo e(csrf_field()); ?>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <span>Name</span>
                                        <input type="text" placeholder="Name" id="fname" name="name" required>
                                    </div>
                                    <div class="col-xs-12">
                                        <span>Email</span>
                                        <input type="text" placeholder="Email" id="email" name="email" required>
                                    </div>
                                    <div class="col-xs-12">
                                        <span>Phone Number</span>
                                        <input type="text" placeholder="Phone" id="subject" name="phone" required>
                                    </div>
                                    <div class="col-xs-12">
                                        <span>Quotation Details</span>
                                        <textarea class="contact-textarea" placeholder="Details For Your Quotation" id="msg" name="message" required></textarea>
                                    </div>
                                    <div class="col-xs-12">
                                        <button type="submit" id="quoteBtn" class="cont-submit btn-contact btn-style" name="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
				</div>
			</div>
		</div>