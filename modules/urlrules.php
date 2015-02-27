<div class="url-rules">
	<div class="title-row pl20 pr20">
		<h2>Where do you want to track this</h2>
	</div>
	<div class="eg-url pl20 pr20 mt20">
		<pre style="font-size:14px; color:#CFCFCF"><span class="q-string"><span class="specific-url green-text"><span class="domain-section">example.com</span></span>/next?query-string</span></pre>
	</div>
	<form>
		<div class="pl20 pr20 pb10 pt20">
			<input type="radio" name="url-choice" id="domain-name-1" tabindex="2" value="specific-url" checked="true">
			<label for="domain-name-1"><span class="fakeBox"></span><span class="text-label pl10 pb5">The specific URL</span></label>
		</div>
		<div class="pl20 pr20 pb10 pt10">
			<input type="radio" name="url-choice" id="domain-name-2" tabindex="2" value="entire-domain">
			<label for="domain-name-2"><span class="fakeBox"></span><span class="text-label pl10">The entire domain</span></label>
		</div>
		<div class="pl20 pr20 pb10 pt10">
			<input type="radio" name="url-choice" id="domain-name-3" tabindex="2" value="beginning-with-url">
			<label for="domain-name-3"><span class="fakeBox"></span><span class="text-label pl10">Anything beginning with the URL</span></label>
		</div>
		<div class="pl20 pr20 pb30 pt10">
			<input type="radio" name="url-choice" id="domain-name-4" tabindex="2" value="custom-rules">
			<label for="domain-name-4"><span class="fakeBox"></span><span class="text-label pl10">Define custom rules</span></label>
			<div>
				<select style="display:block" class="mt15">
					<option>URLs starting with</option>
					<option>URLs ending with</option>
					<option>URLs containing</option>
					<option>Regex</option>
				</select>
				<input type="text" class="pl15 pr15 mt5"></input>
				<span class="right mt5 add-another-rule">Add another rule +</span>
			</div>
		</div>

	</form>
</div>


