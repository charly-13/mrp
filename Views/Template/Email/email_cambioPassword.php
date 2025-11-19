<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Recuperar cuenta</title>
	<style type="text/css">
		/* Reset básico para correos */
		body {
			margin: 0;
			padding: 0;
			background-color: #f3f3f3;
		}
		table {
			border-collapse: collapse;
		}
		p {
			font-family: Arial, sans-serif;
			letter-spacing: 0.2px;
			color: #555555;
			font-size: 14px;
			margin: 0 0 10px 0;
			/* text-align: justify; */ /* Texto justificado */
		}
		a {
			color: #e97e2e;
			font-family: Arial, sans-serif;
			text-decoration: none;
		}

		/* Contenedor general centrado */
		.email-wrapper {
			width: 100%;
			background-color: #f3f3f3;
			padding: 20px 0;
		}
		.email-card {
			width: 100%;
			max-width: 600px;
			margin: 0 auto;
			background-color: #ffffff;
			border-radius: 8px;
			overflow: hidden;
			box-shadow: 0 2px 6px rgba(0,0,0,0.06);
		}
		.email-content {
			padding: 20px 25px 30px 25px;
			text-align: left;
		}

		/* Encabezado y logo */
		.email-header {
			text-align: center;
			padding: 20px 20px 10px 20px;
		}
		.email-logo {
			display: block;
			margin: 0 auto 10px auto;
		}
		.x_title_blue {
			padding: 8px 0 0 0;
			line-height: 25px;
			text-transform: uppercase;
			border-top: 1px solid #f0f0f0;
		}
		.x_title_blue h1 {
			color: #e97e2e;
			font-size: 20px;
			font-family: Arial, sans-serif;
			margin: 10px 0 0 0;
		}

		/* Saludo */
		.x_sgwrap p {
			font-size: 18px;
			line-height: 26px;
			color: #333333;
			font-family: Arial, sans-serif;
			text-align: center;
			margin-bottom: 20px;
		}

		/* Botón principal */
		.x_button_link {
			width: 100%;
			max-width: 260px;
			height: 42px;
			display: block;
			color: #ffffff !important;
			margin: 20px auto;
			line-height: 42px;
			text-transform: uppercase;
			font-family: Arial Black, Arial Bold, Gadget, sans-serif;
			font-size: 13px;
			border-radius: 4px;
			text-align: center;
		}
		.x_link_blue {
			background-color: #e97e2e;
		}
		.x_text_white a {
			color: #ffffff !important;
		}

		/* Pie y link a la web */
		.x_title_gray {
			color: #777777;
			padding: 12px 0 0 0;
			font-size: 13px;
			border-top: 1px solid #eeeeee;
			text-align: center;
		}
		.x_title_gray a {
			display: inline-block;
			padding: 5px 10px;
			color: #e97e2e;
			font-weight: bold;
			font-size: 13px;
		}

		/* Texto resaltado */
		.x_bluetext {
			color: #e97e2e !important;
		}

		/* Bloque URL */
		.url-box {
			display: block;
			word-break: break-all;
			font-size: 12px;
			color: #777777;
			background-color: #fafafa;
			border-radius: 4px;
			padding: 8px 10px;
			border: 1px solid #eeeeee;
			margin-top: 5px;
		}
	</style>
</head>
<body>
	<table class="email-wrapper" width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td align="center">
				<table class="email-card" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
					<tr>
						<td class="email-header" bgcolor="#ffffff">
							<img src="https://viaticos.ldrhumanresources.com/viaticos/Assets/images/Logotipo_Naranja.png"
							     alt="Logotipo"
							     width="140"
							     class="email-logo">
							<div class="x_title_blue">
								<h1>Recuperar acceso a tu cuenta</h1>
							</div>
						</td>
					</tr>

					<tr>
						<td class="email-content">
							<div class="x_sgwrap">
								<p>Hola <?= $data['nombreUsuario']; ?>,</p>
							</div>

							<p>Hemos recibido una solicitud de recuperación de acceso para el correo: <strong class="x_bluetext"><?= $data['email']; ?></strong></p>

							<p>Para continuar con el proceso y confirmar tu contraseña, por favor haz clic en el siguiente botón:</p>

							<p class="x_text_white" style="text-align: center;">
								<a href="<?= $data['url_recovery']; ?>" target="_blank" class="x_button_link x_link_blue">
									Confirmar datos de acceso
								</a>
							</p>

							<p>Si el botón no funciona, puedes copiar y pegar la siguiente dirección directamente en tu navegador:</p>

							<span class="url-box"><?= $data['url_recovery']; ?></span>

							<p style="margin-top: 20px;">Si tú no solicitaste esta recuperación, puedes ignorar este correo. Tu cuenta permanecerá sin cambios.</p>

							<p class="x_title_gray">
								<a href="<?= BASE_URL; ?>" target="_blanck"><?= WEB_EMPRESA; ?></a>
							</p>
						</td>
					</tr>

				</table>
			</td>
		</tr>
	</table>
</body>
</html>
