<?php
require_once __DIR__ . '/app/settings.php';
try {

	//Content
	$name = isset($_POST['name']) ? preg_replace("/[^\.\-\' a-zA-Z0-9]/", "", $_POST['name']) : "";
	$senderEmail = isset($_POST['email']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email']) : "";
	$phone = isset($_POST['phone']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['phone']) : "";
	$services = isset($_POST['services']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['services']) : "";
	$subject = isset($_POST['subject']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9\s]/", "", $_POST['subject']) : "";
	$address = isset($_POST['address']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['address']) : "";
	$website = isset($_POST['website']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['website']) : "";
	$message = isset($_POST['message']) ? preg_replace("/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message']) : "";

	if (!empty($senderEmail)) {
		if (empty($name) || empty($message)) {
			// Load the HTML template and replace placeholders
			$template = file_get_contents('template/newsletter.html');
			// $template = str_replace('{{name}}', 'John Doe', $template);
			// To mail
			$mail->addAddress($senderEmail);
			// Content
			$mail->Subject = 'Langganan Newsletter';
			$mail->Body = $template;
			$mail->AltBody = 'Terima kasih kerana melanggan newsletter kami.';
			$mail->send();


			// Send to admin
			$mail->clearAddresses(); // Clear previous addresses
			$template = file_get_contents('template/admin-newsletter.html');
			$template = str_replace('{{email}}', $senderEmail, $template);


			$mail->addAddress(Env::get('ADMIN_EMAIL')); // Add admin email
			// Content
			$mail->Subject = 'Langganan Baru Ditambah';
			$mail->Body = $template;
			$mail->AltBody = 'Langganan newsletter baru telah diterima.';
			$mail->send();


			echo "<div class='alert alert-success' role='alert'>
        Terima kasih kerana menghubungi kami.
      </div>";

		} else {

			// sent user email
			$template = file_get_contents('template/user-template.html');
			$template = str_replace('{{name}}', $name, $template);
			$template = str_replace('{{message}}', $message, $template);

			$mail->addAddress($senderEmail, $name);
			// Content
			$mail->Subject = 'Terima kasih kerana menghubungi kami.';
			$mail->Body = $template;
			$mail->AltBody = 'Kami telah menerima mesej anda dan akan membalas secepat mungkin.';
			$mail->send();

			// Send to admin
			$mail->clearAddresses(); // Clear previous addresses
			$template = file_get_contents('template/admin-template.html');
			$template = str_replace('{{name}}', $name, $template);
			$template = str_replace('{{message}}', $message, $template);
			$template = str_replace('{{email}}', $senderEmail, $template);

			if (!empty($phone)) {
				$template = str_replace('{{phone}}', $phone, $template);
				$template = str_replace('class="phone-hide"', 'class=""', $template);
			}
			if (!empty($subject)) {
				$template = str_replace('{{subject}}', $subject, $template);
				$template = str_replace('class="subject-hide"', 'class=""', $template);
			}

			$mail->addAddress(Env::get('ADMIN_EMAIL')); // Add admin email
			// Content
			$mail->Subject = 'Kiriman Borang Hubungan Baru';
			$mail->Body = $template;
			$mail->AltBody = 'Satu kiriman borang hubungan baru telah diterima.';
			$mail->send();

			echo "<div class='alert alert-success' role='alert'>
        Terima kasih kerana menghubungi kami.
      </div>";

		}

	} else {
		echo "<div class='alert alert-danger' role='alert'>
        Sila isi semua ruangan yang diperlukan.
      </div>";

	}

} catch (Exception $e) {
	echo "<div class='alert alert-danger' role='alert'>
        Mesej tidak dapat dihantar. Ralat Penghantar: {$mail->ErrorInfo}
      </div>";

}
