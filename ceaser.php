<!-- <?php
			// if (isset($_POST['plain_text'])){
			// 	echo shell_exec('./codes/ceaser e '.$_POST['key'].' '.$_POST['plain_text']);
			// }
			?> -->
<p>
<p class="subTitle">Ceaser Cipher</p>
<form>
	<div class="row">
		<div class="column">
			<textarea name="plain_text" style="width: 240px; height: 327px;" wrap="soft" placeholder="Plain text here" class="bigbox"></textarea>
		</div>

		<div class="column mid">
			<input type="text" id="key" name="key" required placeholder="Ceaser cipher key">
			<br>
			<input type="button" onclick="encryptCeaser()" name="encrypt" value=">> ENCRYPT >>">
			<br>
			<input type="button" onclick="decryptCeaser()" name="decrypt" value="<< DECRYPT <<">
		</div>

		<div class="column">
			<textarea name="cipher_text" style="width: 240px; height: 327px;" wrap="soft" placeholder="Cipher text here" class="bigbox"></textarea>
		</div>
	</div>
</form>
</p>