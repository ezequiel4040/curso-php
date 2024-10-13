<?php


declare(strict_types=1); // <-- esto funciona a nivel de archivo y arriba de todo >

function render_template(string $template, array $data = []): void {
  extract($data);
  require "templates/$template.php";
}
function get_data(string $url): array 
{
  $result = file_get_contents($url); // si solo quieres hacer un GET de una api
  $data = json_decode($result, true); 
  return $data;
};

function get_until_message(int $days): string
{
  return match(true) {
    $days === 0 => "Hoy se estrena",
    $days === 1 => "mañana se estrena",
    $days < 7   => "se estrena esta semana",
    $days < 30  => "se estrena este mes",
    default     => "se estrena en {$days} días"
  };
};
