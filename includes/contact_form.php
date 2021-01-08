<a name="contact">
				<section class="contact">
			</a>
			<!-- Contact title - START -->
			<h2 class="contact__title  title">無料お試し申込み</h2>
			<!-- Contact title - END -->
			<p class="contact__text">以下のフォームに必要事項をご入力下さい。
				<br>また、ご入力いただく前に<a href="privacy.html" target="_blank">プライバシーポリシー</a>をお読みください。</p>
			<!-- Contact form - START -->
			<form class="contact__form" method="POST" action="contact3.php" name="contact-form" input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" input type="hidden" name="action" value="validate_captcha">
				>
				<!-- Contact form item - START -->
				<div class="contact__item  contact-item">
					<!-- Contact item label - START -->
					<p class="contact-item__label"> <span>お子様のお名前（漢字）</span>
						<span>必須</span>
					</p>
					<!-- Contact item label - END -->
					<!-- Contact item fields - START -->
					<div class="contact-item__inner  contact-item__inner_name">
						<!-- Contact item field - START -->
						<div class="contact-item__field-area">
							<label for="name-last">姓</label>
							<input class="contact-item__field validate[required]" id="name-last" type="text" name="name-last" placeholder="">
						</div>
						<!-- Contact item field - END -->
						<!-- Contact item field - START -->
						<div class="contact-item__field-area">
							<label for="name-first">名</label>
							<input class="contact-item__field validate[condRequired[name-last]]" id="name-first" type="text" name="name-first" placeholder="">
						</div>
						<!-- Contact item field - END -->
					</div>
					<!-- Contact item fields - END -->
				</div>
				<!-- Contact form item - END -->
				<!-- Contact form item - START -->
				
				<!-- Contact form item - END -->
				<!-- Contact form item - START -->
				<div class="contact__item  contact-item">
					<!-- Contact item label - START -->
					<label class="contact-item__label" for="school"> <span>通っている学校名</span>
					</label>
					<!-- Contact item label - END -->
					<!-- Contact item fields - START -->
					<div class="contact-item__inner">
						<!-- Contact item field - START -->
						<div class="contact-item__field-area">
							<input class="contact-item__field" id="school" type="text" name="school" placeholder="">
						</div>
						<!-- Contact item field - END -->
					</div>
					<!-- Contact item fields - END -->
				</div>
				<!-- Contact form item - END -->
				<!-- Contact form item - START -->
				<div class="contact__item  contact-item">
					<!-- Contact item label - START -->
					<label class="contact-item__label" for="school-year"> <span>学年</span>
					</label>
					<!-- Contact item label - END -->
					<!-- Contact item fields - START -->
					<div class="contact-item__inner">
						<!-- Contact item field - START -->
						<div class="contact-item__field-area">
							<input class="contact-item__field" id="school-year" type="text" name="school-year" placeholder="">
						</div>
						<!-- Contact item field - END -->
					</div>
					<!-- Contact item fields - END -->
				</div>
				<!-- Contact form item - END -->
				<!-- Contact form item - START -->
				<div class="contact__item  contact-item">
					<!-- Contact item label - START -->
					<label class="contact-item__label" for="phone-number"> <span>電話番号年</span>
						<span>必須</span>
					</label>
					<!-- Contact item label - END -->
					<!-- Contact item fields - START -->
					<div class="contact-item__inner">
						<!-- Contact item field - START -->
						<div class="contact-item__field-area">
							<input class="contact-item__field validate[required, custom[phone]]" id="phone-number" type="tel" name="phone-number" placeholder="">
						</div>
						<!-- Contact item field - END -->
					</div>
					<!-- Contact item fields - END -->
				</div>
				<!-- Contact form item - END -->
				<!-- Contact form item - START -->
				<div class="contact__item  contact-item">
					<!-- Contact item label - START -->
					<label class="contact-item__label" for="email"> <span>メールアドレス</span>
						<span>必須</span>
					</label>
					<!-- Contact item label - END -->
					<!-- Contact item fields - START -->
					<div class="contact-item__inner">
						<!-- Contact item field - START -->
						<div class="contact-item__field-area">
							<input class="contact-item__field validate[required, custom[email]]" id="email" type="email" name="email" placeholder="sample@example.com">
						</div>
						<!-- Contact item field - END -->
					</div>
					<!-- Contact item fields - END -->
				</div>
				<!-- Contact form item - END -->
				<!-- Contact form item - START -->
				<div class="contact__item  contact-item">
					<!-- Contact item label - START -->
					<label class="contact-item__label" for="email-check"> <span>メールアドレス（確認）</span>
						<span>必須</span>
					</label>
					<!-- Contact item label - END -->
					<!-- Contact item fields - START -->
					<div class="contact-item__inner  contact-item__inner_wrap">
						<!-- Contact item field - START -->
						<p class="contact-item__notice">確認のため、もう一度ご入力ください。</p>
						<div class="contact-item__field-area">
							<input class="contact-item__field validate[required, custom[email],equals[email]]" id="email-check" type="email" name="email-check" placeholder="sample@example.com">
						</div>
						<!-- Contact item field - END -->
					</div>
					<!-- Contact item fields - END -->
				</div>
				<!-- Contact form item - END -->
				<!-- Contact form item - START -->
				<div class="contact__item  contact-item">
					<!-- Contact item label - START -->
					<label class="contact-item__label" for="questions"> <span>その他ご質問・ご要望</span>
					</label>
					<!-- Contact item label - END -->
					<!-- Contact item fields - START -->
					<div class="contact-item__inner">
						<!-- Contact item field - START -->
						<div class="contact-item__field-area">
							<textarea class="contact-item__field  contact-item__field_textarea" id="questions" name="questions" cols="30" rows="8" placeholder="ご質問・ご要望等がございましたらお書きください。"></textarea>
						</div>
						<!-- Contact item field - END -->
					</div>
					<!-- Contact item fields - END -->
				</div>
				<!-- Contact form item - END -->
				<!-- Submit button - START -->
				<button class="contact__btn  btn" type="submit">ご入力内容を送信</button>
				<!-- Submit button - END -->
			</form>
			<!-- Contact form - END -->
			</section>
			<!-- Contact us section - END -->