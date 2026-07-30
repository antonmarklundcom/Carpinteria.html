<?php
/**
 * Handler del formulario de contacto — hosting compartido de Hostinger.
 *
 * CONFIGURAR ANTES DE SUBIR: las tres constantes de abajo.
 *
 * Nota de entregabilidad: el remitente (From) DEBE ser una casilla del
 * mismo dominio donde corre este archivo. Si se pone el correo del
 * visitante como From, SPF falla y el mensaje va a spam o se descarta.
 * El correo del visitante va en Reply-To, que es lo correcto.
 */

// ── CONFIGURAR ──────────────────────────────────────────────────────
const DESTINO  = 'tucorreo@ejemplo.com';        // a dónde llegan las consultas
const REMITENTE = 'web@tudominio.com';          // casilla creada en hPanel → Emails
const SITIO    = 'Constructora Vera';
// ────────────────────────────────────────────────────────────────────

// Sólo POST.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.html');
    exit;
}

// Honeypot: los bots completan campos ocultos, las personas no.
// Respondemos 200 y no enviamos nada, así el bot no aprende.
if (!empty($_POST['empresa'] ?? '')) {
    header('Location: index.html?ok=1');
    exit;
}

$limpiar = static function (string $v, int $max): string {
    // Cortamos saltos de línea para evitar inyección de cabeceras.
    $v = str_replace(["\r", "\n", "%0a", "%0d"], ' ', trim($v));
    return mb_substr($v, 0, $max);
};

$nombre   = $limpiar($_POST['nombre']   ?? '', 100);
$whatsapp = $limpiar($_POST['whatsapp'] ?? '', 40);
$mensaje  = trim($_POST['mensaje'] ?? '');
$mensaje  = mb_substr(str_replace(["\r\n", "\r"], "\n", $mensaje), 0, 3000);

if ($nombre === '' || $whatsapp === '' || $mensaje === '') {
    header('Location: index.html?error=1#contacto');
    exit;
}

$asunto = sprintf('[%s] Consulta de %s', SITIO, $nombre);

$cuerpo = "Nueva consulta desde la web\n"
        . "----------------------------------------\n"
        . "Nombre:   {$nombre}\n"
        . "WhatsApp: {$whatsapp}\n"
        . "----------------------------------------\n"
        . "{$mensaje}\n"
        . "----------------------------------------\n"
        . 'Recibido: ' . date('d/m/Y H:i') . "\n"
        . 'IP: ' . ($_SERVER['REMOTE_ADDR'] ?? 'desconocida') . "\n";

$cabeceras = [
    'From: ' . SITIO . ' <' . REMITENTE . '>',
    'Content-Type: text/plain; charset=UTF-8',
    'X-Mailer: PHP/' . phpversion(),
];

// Reply-To sólo si el visitante dejó algo con forma de email.
if (filter_var($_POST['whatsapp'] ?? '', FILTER_VALIDATE_EMAIL)) {
    $cabeceras[] = 'Reply-To: ' . $whatsapp;
}

$enviado = @mail(DESTINO, $asunto, $cuerpo, implode("\r\n", $cabeceras));

header('Location: index.html?' . ($enviado ? 'ok=1' : 'error=1') . '#contacto');
exit;
